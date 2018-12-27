<?php
//Form Vaildation codeignitor with Ajax;
//https://stackoverflow.com/questions/37185883/do-form-validation-with-jquery-ajax-in-codeigniter

class crudAjax extends CI_controller {

    function __construct() {
        parent::__construct();
        $this->load->library(array('form_validation'));
        $this->load->helper(array('form'));
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
        $this->validate($userData);
        // if($this->formModel->insertData($userData)) {
        //     echo true;
        // }
   }


   function validate() {

    
    //echo $_POST['name'];
    $this->form_validation->set_rules('name','Name','required');
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('email','Email','required');
    $this->form_validation->set_rules('mobile','Mobile','required');
    $this->form_validation->set_rules('gender','Gender','required');
    $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');

    if($this->form_validation->run()) {

        $error['success'] = true;
        
        
    }else {
        
        //$this->load->view("ajaxForm/index.php");

        //echo form_error('name').'<-';

        $error = array(
            'name'=>form_error('name'),
            'username'=>form_error('username'),
            'email'=>form_error('email'),
            'mobile'=>form_error('mobile'),
            'gender'=>form_error('gender'),
            'success'=>false
        );
        print_r(json_encode($error));
        // echo"<pre>";
        // print_r($error);

   }

   }


}

?>