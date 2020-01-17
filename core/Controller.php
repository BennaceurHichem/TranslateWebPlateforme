<?php
  namespace Core;
  use Core\Application;

  class Controller extends Application {
      //protected to make the variables accessible to the childs classes (Controller here)
    protected $_controller, $_action;
    public $view, $request;

    public function __construct($controller, $action) {
        //call Application contructor
      parent::__construct();
      $this->_controller = $controller;
      $this->_action = $action;
      $this->request = new Input();
      //instatitate a view in our conroller
      $this->view = new View();
    }
//Load any model
    protected function load_model($model) {
      $modelPath = 'App\Models\\' . $model;
      if(class_exists($modelPath)) {
        $this->{$model.'Model'} = new $modelPath();
      }
    }

    public function jsonResponse($resp){
      header("Access-Control-Allow-Origin: *");
      header("Content-Type: applicaton/json; charset=UTF-8");
      http_response_code(200);
      echo json_encode($resp);
      exit;
    }

  }
