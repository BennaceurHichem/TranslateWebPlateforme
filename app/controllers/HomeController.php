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
    }
//we can add in parameter the values of parameters after action/
    public function indexAction() {
        $db = DB::getInstance();

/*
        echo Session::displayMsg();

      $userFields  = [
          'nom'=>'Bennaceur',
          'prenom'=>'updated',
          'email'=>'updated.com',

      ];
      $users = $db->query("SELECT * FROM user",[],'App\Models\Users');
        //$columns = $db->get_columns('user');
        $findParam =[
            'conditions'=>["nom= ?"],
            'bind'=>['Hichem'],
            'order'=>'nom',
            "limit"=>2
        ];
        //   $r=$db->find('user',$findParam);
        echo '<pre>' , print_r($users) , '</pre>';


        die();


*/


      $this->view->render('home/index');
    }

    public function testAjaxAction(){
      $resp = ['success'=>true,'data'=>['id'=>23,'name'=>'Curtis','favorite_food'=>'bread']];
      $this->jsonResponse($resp);
    }
  }
