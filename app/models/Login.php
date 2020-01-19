<?php
namespace App\Models;
use Core\Model;
use Core\Validators\RequiredValidator;

class Login extends Model {
  public $nom, $pass, $remember_me;

  public function __construct(){
    parent::__construct('tmp_fake');
  }

  public function validator(){
      //I changed it to nom adn pass
    $this->runValidation(new RequiredValidator($this,['field'=>'nom','msg'=>'Username is required.']));
    $this->runValidation(new RequiredValidator($this,['field'=>'pass','msg'=>'Password is required.']));
  }

  public function getRememberMeChecked(){
    return $this->remember_me == 'on';
  }
}
