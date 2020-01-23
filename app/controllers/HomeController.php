<?php
  namespace App\Controllers;
  use Core\Controller;
  use Core\H;
  use Core\DB;
  use App\Models\Users;
  use Core\Router;
  use Core\Session;

  class HomeController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);

        $this->load_model('Users');
    }
//we can add in parameter the values of parameters after action/
    public function indexAction() {
        $db = DB::getInstance();




      $this->view->render('home/index');


    }

    public function aproposAction(){
        $db = DB::getInstance();

        $this->view->render('home/apropos');

    }


      public function blogAction(){
          $db = DB::getInstance();

          $this->view->render('home/blog');

      }


      public function profileAction(){



          $this->view->render('home/profile');

      }
      public function modificationProfileAction(){

        $user = new Users();

          if($this->request->isPost()) {

              Users::currentUser()->assign($this->request->get());

              $user  =$this->UsersModel->findByUserId(Users::currentUser()->id_user);

              H::dnd($user);
              if($user->save()){
                  Router::redirect('home');
              }


          }


          $this->view->user = $user;
          $this->view->displayErrors = $user->getErrorMessages();


          $this->view->render('home/modificationprofile');

      }



  }
