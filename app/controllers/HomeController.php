<?php
  namespace App\Controllers;
  use App\Models\Devis;
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






/*
 *
 * Test de linsertion de traducteur_id dans la table devis
                $devis = new Devis();
                $devis->id_devis = 1;
                H::dnd($devis->insertIdTrad(100));
*/


        $trad = new Traducteur();

        $this->load_model('Devis');
        $this->load_model('Users');
    }
//we can add in parameter the values of parameters after action/
    public function indexAction() {
        $db = DB::getInstance();

        //traitement de devis
        $devis = new Devis();



        if($this->request->isPost()) {

            $devis->nom = Users::currentUser()->nom;
            $devis->prenom = Users::currentUser()->prenom;
            $devis->email = Users::currentUser()->email;
            $devis->numero = Users::currentUser()->numero;
            $devis->id_client = Users::currentUser()->id_user;
            $devis->adresse = Users::currentUser()->adresse;
            $devis->etat = "pas-encore-demarre";

            /*
             * TRAITEMTN DES VALEURS NULL
             *
             */
            // $devis->type_traduction = $_REQUEST['type_traduction'];
            //$devis->lang_src = $_REQUEST['lang_src'];
            //$devis->lang_dest = $_REQUEST['lang_dest'];
            if(!isset($_REQUEST['type_traduction'])){
                $_REQUEST['type_traduction'] = "general";
            }
            if(!isset($_REQUEST['lang_src'])){
                $_REQUEST['type_traduction'] = "Arabe";
            }
            if(!isset($_REQUEST['lang_dest'])){
                $_REQUEST['type_traduction'] = "Francais";
            }
            if(!isset($_REQUEST["commentaires"])){
                $_REQUEST["commentaires"]="";
            }
            if(!isset($_REQUEST['est_assermente']))
            {
                $_REQUEST['est_assermente'] = "0";

            }


            /*
           * DEBUT TRAITEMTN FICHIER DEVIS
           */
            if(isset($_FILES['devis'])){
                $errors= array();
                $file_name = $_FILES['devis']['name'];
                $file_size =$_FILES['devis']['size'];
                $file_tmp =$_FILES['devis']['tmp_name'];
                $file_type=$_FILES['devis']['type'];
                $explode = explode('.',$_FILES['devis']['name']);
                $file_ext=strtolower(end($explode ));

                $extensions= array("pdf","docx");

                if(!empty(Users::currentUser())){
                    $idDevis = strval(Users::currentUser()->id_user);


                }else{
                    $idDevis=strval(0);
                }

                if(in_array($file_ext,$extensions)=== false){
                    $errors[]="extension not allowed";
                }

                $file_name_id = $idDevis."-"."devis_".$file_name;
                $dest="C:/xampp/htdocs/TRADUCTION/devis/".$idDevis."-"."devis_".$file_name;




                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,$dest);

                }else{

                    print_r($errors);

                }
            }


            /*
             * FIN TRAITEMTN FICHIER DEVIS
             */


            $devis->assign($this->request->get());



            if($devis->save()){

                $_SESSION['id_devis'] = $devis->lastIdDevis();
                $_SESSION['devis_path']=$dest;
                Router::redirect('home/listetraddevis');
            }


        }


        $this->view->devis = $devis;
        $this->view->displayErrors = $devis->getErrorMessages();


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

                    //H::dnd($this->request->get());
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

                    }
                }


                $traducteur->assign($this->request->get());

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


      public function devisAction(){
          /*
           * //traitement de devis
          $devis = new Devis();



          if($this->request->isPost()) {

              $devis->nom = Users::currentUser()->nom;
              $devis->prenom = Users::currentUser()->prenom;
              $devis->email = Users::currentUser()->email;
              $devis->numeros = Users::currentUser()->numero;
              $devis->id_client = Users::currentUser()->id_user;
             // $devis->type_traduction = $_REQUEST['type_traduction'];
              //$devis->lang_src = $_REQUEST['lang_src'];
              //$devis->lang_dest = $_REQUEST['lang_dest'];
              if(!isset($_REQUEST['type_traduction'])){
                  $_REQUEST['type_traduction'] = "general";
              }
              if(!isset($_REQUEST['lang_src'])){
                  $_REQUEST['type_traduction'] = "Arabe";
              }
              if(!isset($_REQUEST['lang_dest'])){
                  $_REQUEST['type_traduction'] = "Francais";
              }
              if(!isset($_REQUEST["commentaire"])){
                  $_REQUEST["commentaire"]="";
              }
              if(!isset($_REQUEST['est_assermente']))
              {
                  $_REQUEST['est_assermente'] = "0";

              }



              $devis->assign($this->request->get());

              if(isset($_FILES['devis'])){
                  $errors= array();
                  $file_name = $_FILES['devis']['name'];
                  $file_size =$_FILES['devis']['size'];
                  $file_tmp =$_FILES['devis']['tmp_name'];
                  $file_type=$_FILES['devis']['type'];
                  $explode = explode('.',$_FILES['devis']['name']);
                  $file_ext=strtolower(end($explode ));

                  $extensions= array("pdf","docx");

                  if(!empty(Users::currentUser())){
                      $idDevis = strval(Users::currentUser()->id_user);


                  }else{
                      $idDevis=strval(0);
                  }

                  if(in_array($file_ext,$extensions)=== false){
                      $errors[]="extension not allowed";
                  }

                  $file_name_id = $idDevis."-"."cv_traducteur_".$file_name;
                  $dest="C:/xampp/htdocs/TRADUCTION/devis/".$idDevis."-"."cv_traducteur_".$file_name;




                  if(empty($errors)==true){
                      move_uploaded_file($file_tmp,$dest);

                  }else{

                      print_r($errors);
                      H::dnd(move_uploaded_file($file_name,$dest));
                  }
              }


              if($devis->save()){
                  Router::redirect('home');
              }


          }


          $this->view->devis = $devis;
          $this->view->displayErrors = $devis->getErrorMessages();


          $this->view->render('home/');

                */


      }


      public function adminhomeAction(){

            $user = new Users();
          $users =$user->findAll();




          $this->view->users = $users;


          $this->view->render('home/adminhome');


      }

      public function listetraducteurAction(){

          $user = new Users();
          $trads =[];
          $traducteurs =$user->findAllTraducteur("1");








            $this->view->trads = $trads;
          $this->view->traducteurs = $traducteurs;

          $this->view->render('home/listetraducteur');


      }
      public function listeclientAction(){

          $user = new Users();
          $clients =$user->findAllTraducteur("0");





          $this->view->clients = $clients;

          $this->view->render('home/listeclient');


      }

      public function editAction($id){
          $user = $this->UsersModel->findByUserId((int)$id);
          if(!$user) Router::redirect('home/adminhome');
          if($this->request->isPost()){
              $this->request->csrfCheck();
              $user->assign($this->request->get());
              if($user->save()){
                  Router::redirect('home/adminhome');
              }
          }
          $this->view->displayErrors = $user->getErrorMessages();
          $this->view->user = $user;
          $this->view->postAction = PROOT . 'home' . DS . 'modificationprofile' . DS . $user->id_user;
          $this->view->render('home/modificationprofile');
      }


      public function deleteAction($id){
          $user = $this->UsersModel->findByUserId((int)$id);
          if($user){
              $user->delete($id);
              Session::addMsg('success',"L\'utilisateur a ètè effacè ");
          }
          Router::redirect('home/adminhome');
      }

      public function listetraddevisAction(){

        $devis = new Devis();
          $errors=[];
          if(!isset($_REQUEST)){
              $errors=["veuillez selectionez un traducteur"];
          }
          if($this->request->isPost()){


              if(isset($_REQUEST) && !empty($_SESSION['id_devis'])){

                  $devis->insertIdTrad($_SESSION['id_devis'],array_key_first($_REQUEST));

              }




          }
          $this->view->displayErrors = $errors;
          $this->view->render('home/listetraddevis');
      }

        public function detailledevisAction($id){

                    $devis = new Devis();
            $currentDevis = $devis->findByIdDevis($id);



            if($this->request->isPost()){


                //si le formulaire de refus qui a ete envoyee à l'aide de l'input refus, changer l'etat vers abondonne

                if(array_key_exists("refus",$_REQUEST)){
                    $nouvelEtat = "abandonne";
                    $currentDevis[0]->changeEtat($currentDevis[0]->id_devis,$nouvelEtat);



                }
                else{
                    //si le fromaulaire d'acceptance qui a ete envoyer

                    //traitement des erreurs
                    if(empty($_REQUEST['prix']))
                    {
                        $devis->addErrorMessage('prix','veuillez remplire votre prix ');
                    }elseif(!is_numeric($_REQUEST['prix'])){
                        $devis->addErrorMessage('prix','Le prix doit être des chiffres ');
                    }else{

                        //chnagement d'etat de devis et insertion de prix
                        $prix = $_REQUEST['prix'];
                        $currentDevis[0]->insertPrix($currentDevis[0]->id_devis,(int)$prix);
                        $nouvelEtat = "acceptee";
                        $currentDevis[0]->changeEtat($currentDevis[0]->id_devis,$nouvelEtat);
                    }


                }






            }


            $this->view->devis = $currentDevis;
            $this->view->displayErrors = $devis->getErrorMessages();
            $this->view->render('home');

        }




  }
