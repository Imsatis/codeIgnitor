<?php

class JsonCrud extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->model("ajaxForm/formModel");
    }

    function index() {

        $this->load->view('jsonCrud/jsonView.html');
    }

    function insert() {

        $jsonData = json_encode(array (
            'name'=>array($_REQUEST['name'],$_REQUEST['name1'],$_REQUEST['name2'],$_REQUEST['name3']),
            'username'=>$_REQUEST['username'],
            'password'=>$_REQUEST['password']
            
        ));

        echo $this->formModel->insert($jsonData);
        
    }

    function searchData() {
        //echo "hellow";
        $search = $_REQUEST['search'];
        $this->formModel->test($search);
       }
}


?>