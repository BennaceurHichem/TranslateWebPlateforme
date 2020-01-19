<?php
namespace App\Models;
use Core\Model;

use App\Models\UserSessions;
use Core\Cookie;
use Core\Session;
use Core\Validators\MinValidator;
use Core\Validators\MaxValidator;
use Core\Validators\NumericValidator;
use Core\Validators\RequiredValidator;
use Core\Validators\EmailValidator;
use Core\Validators\MatchesValidator;
use Core\Validators\UniqueValidator;

class Users extends Model {

  private $_isLoggedIn, $_sessionName, $_cookieName, $_confirm;
  public static $currentLoggedInUser = null;
  public $id_user,$nom,$email,$adresse,$pass,$numero,$acl,$deleted = 0,$prenom;

  public function __construct($user='') {

    $table = 'user';

      /** @var TYPE_NAME $table
       when condtrcut is called we set the tabke name */
      parent::__construct($table);
    $this->_sessionName = CURRENT_USER_SESSION_NAME;
    $this->_cookieName = REMEMBER_ME_COOKIE_NAME;
    $this->_softDelete = true;
    if($user != '') {
        //possibility of getting user by their id  or by nom
      if(is_int($user)) {
        $u = $this->_db->findFirst('user',['conditions'=>'id_user = ?', 'bind'=>[$user]],'App\Models\Users');
      } else {

        $u = $this->_db->findFirst('user', ['conditions'=>'nom = ?','bind'=>[$user]],'App\Models\Users');
      }
      if($u) {
        foreach($u as $key => $val) {
          $this->$key = $val;
        }
      }
    }
  }

  public function validator(){

      $this->runValidation(new RequiredValidator($this,['field'=>'nom','msg'=>'Le nom est obligatoire']));
   // $this->runValidation(new RequiredValidator($this,['field'=>'prenom','msg'=>'le prenom est obligatoire.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'email','msg'=>'Email is required.']));
      $this->runValidation(new NumericValidator($this,['field'=>'numero','msg'=>'Veuillez entrez des chiffres']));
      $this->runValidation(new RequiredValidator($this,['field'=>'numero','msg'=>'numeros de telepone est obligatoire']));


      $this->runValidation(new RequiredValidator($this,['field'=>'adresse','msg'=>'L\'adresse est obligatoire']));

      $this->runValidation(new EmailValidator($this, ['field'=>'email','msg'=>'You must provide a valid email address']));
    $this->runValidation(new MaxValidator($this,['field'=>'email','rule'=>150,'msg'=>'Email must be less than 150 characters.']));
      $this->runValidation(new UniqueValidator($this,['field'=>'email','msg'=>'email existe dans la base, veuillez choisir un autre']));

      $this->runValidation(new MinValidator($this,['field'=>'nom','rule'=>6,'msg'=>'Username must be at least 6 characters.']));
    $this->runValidation(new MaxValidator($this,['field'=>'nom','rule'=>150,'msg'=>'Username must be less than 150 characters.']));
    $this->runValidation(new UniqueValidator($this,['field'=>'nom','msg'=>'That username already exists. Please choose a new one.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'pass','msg'=>'Password is required.']));
    $this->runValidation(new MinValidator($this,['field'=>'pass','msg'=>'Password must be a minimum of 6 characters']));


    if($this->isNew()){
      $this->runValidation(new MatchesValidator($this,['field'=>'pass','rule'=>$this->_confirm,'msg'=>"Your passwords do not match"]));

    }


  }

  public function beforeSave(){
    if($this->isNew()){
      $this->pass = md5($this->pass);
    }
  }

  public function findByUsername($username) {
    return $this->findFirst(['conditions'=> "nom = ?", 'bind'=>[$username]]);
  }

  public static function currentUser() {
    if(!isset(self::$currentLoggedInUser) && Session::exists(CURRENT_USER_SESSION_NAME)) {
      $u = new Users((int)Session::get(CURRENT_USER_SESSION_NAME));
      self::$currentLoggedInUser = $u;
    }
    return self::$currentLoggedInUser;
  }


    /**
     * @param bool $rememberMe
     * login mean that the session_name is the d of the user
     */
    public function login($rememberMe=false) {
    Session::set($this->_sessionName, $this->id);
    //in case where the user check the remember me
    if($rememberMe) {
      $hash = md5(uniqid() + rand(0, 100));
      $user_agent = Session::uagent_no_version();
      //set of cookies
      Cookie::set($this->_cookieName, $hash, REMEMBER_ME_COOKIE_EXPIRY);
       //fill the user_sessions table with information of this user session id

      $fields = ['session'=>$hash, 'user_agent'=>$user_agent, 'user_id'=>$this->id];
        //delete every apparition of a session of this user (based on id) in a specific user_agent(browser)

        $this->_db->query("DELETE FROM user_sessions WHERE user_id = ? AND user_agent = ?", [$this->id, $user_agent]);
      //insert only this session with the specific id
        $this->_db->insert('user_sessions', $fields);
    }
  }

  public static function loginUserFromCookie() {
    $userSession = UserSessions::getFromCookie();
    if($userSession && $userSession->user_id != '') {
      $user = new self((int)$userSession->user_id);
      if($user) {
        $user->login();
      }
      return $user;
    }
    return;
  }

  public function logout() {
    $userSession = UserSessions::getFromCookie();
    if($userSession) $userSession->delete();
    Session::delete(CURRENT_USER_SESSION_NAME);
    if(Cookie::exists(REMEMBER_ME_COOKIE_NAME)) {
      Cookie::delete(REMEMBER_ME_COOKIE_NAME);
    }
    self::$currentLoggedInUser = null;
    return true;
  }

  public function acls() {
    if(empty($this->acl)) return [];
    return json_decode($this->acl, true);
  }

  public function setConfirm($value){
    $this->_confirm = $value;
  }

  public function getConfirm(){
    return $this->_confirm;
  }
}
