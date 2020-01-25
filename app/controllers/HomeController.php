<?php
  namespace App\Controllers;
  use App\Models\Traducteur;
  use Core\Controller;
  use Core\H;
  use Core\DB;
  use App\Models\Users;
  use App\Models\Clientt;
  use Core\Router;
  use Core\Session;
  use http\Client;

  class HomeController extends Controller {

    public function __construct($controller, $action) {
      parent::__construct($controller, $action);

      $user = new Users();



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


      public function recrutementAction(){
          $db = DB::getInstance();

            $traducteur  =  new Traducteur();

            if($this->request->isPost()){

                        //vu que le id n'est pas auto increment il faut l'ajouter dans la requete
                    $traducteur->id_traducteur = Users::currentUser()->id_user;



                if(empty($this->request->get()))
                {
                    $_REQUEST['est_assermente'] = "0";
                    $_REQUEST['est_approuve'] = "0";
                }


                if(isset($_FILES['cv'])){
                    $errors= array();
                    $file_name = $_FILES['cv']['name'];
                    $file_size =$_FILES['cv']['size'];
                    $file_tmp =$_FILES['cv']['tmp_name'];
                    $file_type=$_FILES['cv']['type'];
                    $explode = explode('.',$_FILES['cv']['name']);
                    $file_ext=strtolower(end($explode ));

                    $extensions= array("pdf","docx");

                    if(!empty(Users::currentUser())){
                        $idTrad = strval(Users::currentUser()->id_user);


                    }else{
                        $idTrad=strval(0);
                    }

                    if(in_array($file_ext,$extensions)=== false){
                        $errors[]="extension not allowed";
                    }

                    $file_name_id = $idTrad."-"."cv_traducteur_".$file_name;
                    $dest="C:/xampp/htdocs/TRADUCTION/devis/".$idTrad."-"."cv_traducteur_".$file_name;




                    if(empty($errors)==true){
                        move_uploaded_file($file_tmp,$dest);

                    }else{

                        print_r($errors);
                        H::dnd(move_uploaded_file($file_name,$dest));
                    }
                }


                $traducteur->assign($this->request->get());
                //H::dnd($traducteur);
                if($traducteur->save()){
                    Router::redirect('home');
                }




            }
          $this->view->traducteur = $traducteur;
          $this->view->render('home/recrutement');

      }

      public function profileAction(){



          $this->view->render('home/profile');

      }
      public function modificationProfileAction(){

        $user = Users::currentUser();

          if($this->request->isPost()) {

              $user->assign($this->request->get());



              if($user->save()){
                  Router::redirect('home');
              }


          }


          $this->view->user = $user;
          $this->view->displayErrors = $user->getErrorMessages();


          $this->view->render('home/modificationprofile');

      }



  }
