<?php

class crudAjax extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->model("ajaxForm/formModel");
    }
    
    public function index() {

        $this->load->view("ajaxForm/index.php");

    }

    public function showAll() {
        
         if($result = $this->formModel->showAll()){
              echo json_encode($result);
              //print_r($result);
        }else{
            echo "NO record found";
        }
    }

    function insertData() {
        $userData = json_decode($_REQUEST['insertData']);
        if($this->formModel->insertData($userData)) {
            echo true;
        }
   }

}




?>