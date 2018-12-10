<?php

class Loginpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library(array('form_validation','session','upload'));
        
    }

    public function index() {
        $this->load->view('userValidation/header');
        $this->load->view('userValidation/registrationView');
        $this->load->view('userValidation/footer');
    }

    public function formValidation() {
        
        $this->form_validation->set_rules('username','Username',array('trim','required','min_length[3]','max_length[8]','is_unique[userdata._USERNAME]','alphanumeric')
        ,array(
            'required'=>'Required %s',
            'min_length[3]'=>'%s should be atleast four chatacters',
            'max_length[8]'=>'$s should be less then 8 characters',
            'is_unique'=>'%s already',
            'alphanumeric'=>'$s should be alphanumeric'));
        
       
            if(!$this->form_validation->run()){
            $this->load->view('userValidation/header');
            $this->load->view('userValidation/registrationView');
            $this->load->view('userValidation/footer');
        }
        $config = array(
            ''=>'',
            ''=>'',
            ''=>'',
            ''=>'',
            ''=>''
        );

        //$this->upload->do_upload('imgage',$config);

    }


}

?>