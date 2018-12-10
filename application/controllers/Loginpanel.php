<?php

class Loginpanel extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library(array('form_validation','session','upload'));
        $this->load->model('');
        
    }

    public function view($method = 'registrationView') {
        $this->load->view('userValidation/header');
        $this->load->view('userValidation/'.$method);
        $this->load->view('userValidation/footer');
    }

    public function formValidation() {
        /*
        
        $this->form_validation->set_rules('username','Username','required|min_length[3]|max_length[8]|alphanumeric'
        // ,array('trim','required','min_length[3]','max_length[8]',
        //        'is_unique[userdata._USERNAME]','alphanumeric')
        ,array(
            'required'=>'Required %s',
            'min_length'=>'%s should be atleast four chatacters',
            'max_length'=>'%s should be less then 8 characters',
            //'is_unique'=>'%s already',
            'alphanumeric'=>'%s should be alphanumeric'));
        */
        $this->form_validation->set_rules('username','Username','required|min_length[3]|max_length[12]|alpha_dash',array('required'=>'* Required %s','min_length'=>'%s should be atleast four chatacters','max_length'=>'%s should be less then 12 characters','alpha_dash'=>'%s should be alphanumeric'));
        $this->form_validation->set_rules('email','Email','required|min_length[3]|max_length[20]|valid_email',array('required'=>'* Required %s','valid_email'=>'Incorrect %s address'));
        $this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[10]',array('required'=>'* Required %s','min_length'=>'%s should be atleast four chatacters','max_length'=>'%s should be less then 10 characters',));     
        $this->form_validation->set_rules('image','Image','callback_do_upload');
        $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
        
        
        
        if(!$this->form_validation->run()){
            
            
        }else{
            
            if($this->LoginpanelModel->insert_user()){
            
              $this->session->set_flashdata('register','<span style="color:green"><h4>Registered Successfully</h4></span>');
            }
        }

            $this->load->view('userValidation/header');
            $this->load->view('userValidation/registrationView');
            $this->load->view('userValidation/footer');
        

        //$this->upload->do_upload('imgage',$config);

    
    }




    public function do_upload() {
        
        $config = array(
            'upload_path'=>'../uploads/',
            'allowed_types'=>'jpg|png|gif',
            'max_size'=>'1024',
            ''=>'',
            ''=>''
        );

        $this->upload->initialize($config);

        if(!$this->upload->do_upload('image')) {
      
            $this->form_validation->set_message('do_upload',$this->upload->display_errors());
            return FALSE;
           echo $this->upload->display_errors();
        } else {
        return TRUE;
        }
    }
} 

?>