<?php
namespace App\Controllers;
use Core\Controller;
use Core\Router;
use Core\H;
use App\Models\Users;
use App\Models\Login;

class RegisterController extends Controller {




  public function __construct($controller, $action) {
    parent::__construct($controller, $action);
    //loadModel  user in the register to do tretement
      //we can access to this UsersModel in this class by using this $this=>UsersModel because load_mdel return new $nameModel wher name=Users
    $this->load_model('Users');
    $this->view->setLayout('default');
  }

  public function loginAction() {

    $loginModel = new Login();

    //if the request is Post request
    if($this->request->isPost()) {
      // form validation


     // $this->request->csrfCheck();
      $loginModel->assign($this->request->get());

      $loginModel->validator();

      //if everything okey with the validation
      if($loginModel->validationPassed()){

          //UsersModel is generated from the loadModel function
        $user = $this->UsersModel->findByUsername($_POST['nom']);

//H::dnd(password_verify($this->request->get('pass'), $user->pass));

     if($user && md5($this->request->get('pass'))==$user->pass) {

         $remember = $loginModel->getRememberMeChecked();
          $user->login($remember);


          Router::redirect('');

        }  else {


            $loginModel->addErrorMessage('nom','verifier votre mot de passe ou nom');
        }
      }

    }
    $this->view->login = $loginModel;
    $this->view->displayErrors = $loginModel->getErrorMessages();
    $this->view->render('register/login');

  }

  public function logoutAction() {
    if(Users::currentUser()) {
      Users::currentUser()->logout();
    }

    Router::redirect('register/login');



  }

  public function registerAction() {
    $newUser = new Users();


    if($this->request->isPost()) {
        //when the token is dissapeard it redirect to the badTokenpage
      $this->request->csrfCheck();
      $newUser->assign($this->request->get());
    //  H::dnd($this->request->get());
      $newUser->setConfirm($this->request->get('confirm'));
            //$newUser->id=100;



      if($newUser->save()){
        Router::redirect('register/login');
      }


    }
    $this->view->newUser = $newUser;
    $this->view->displayErrors = $newUser->getErrorMessages();

    $this->view->render('register/register');

  }
}
