<?php

class JsonCrud extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->model("ajaxForm/formModel");
    }

    function index() {

        $this->load->view('jsonCrud/jsonView.html');
    }

    function readData() {
       // echo "<pre>";
        $data = $this->formModel->readData();
        $id = [];
        $arr=[];
        foreach($data as $value) {
             array_push($id,$value['id']);
             array_push($arr,json_decode($value['json']));

        }
        print_r(json_encode(array(
            'id'=>$id,
            'user'=>$arr
        )));
        

    }
    function selectbyid() {
       $id = $_REQUEST['id'];
       $data = $this->formModel->selectbyid($id);
       print_r($data['json']);
       
    }

    function updatebyid($id) {
       // echo $_REQUEST['name'];
        
        $jsonData = array (
            'name'=>array($_REQUEST['name'],$_REQUEST['name1'],$_REQUEST['name2'],$_REQUEST['name3']),
            'username'=>$_REQUEST['username']
            //'password'=>$_REQUEST['password']
            
        );
      //print_r($jsonData);
        $this->formModel->updateData($id,$jsonData);
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
        $search = $_REQUEST['search'];//
        $this->formModel->test($search);
       }
}


?>