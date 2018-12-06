<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
      
  public function __construct() {
       
    parent::__construct();
    $this->load->library('session');
    $this->load->model('loginModel');
    
    
 }

    public function index() {

      if($this->input->post('logout')==='TRUE') {

        unset($_SESSION['user']);
        
      }
    
     if(!isset($_SESSION['user'])) {
      $this->load->view('regis_login/loginView');
     }else{
      $this->load->view('regis_login/profileHeader');
      $this->load->view('regis_login/profileView');  
     }
    }

    public function check() {
      
      if(!empty($this->input->post('username')) && !empty($this->input->post('username'))) {
          
        if($user = $this->loginModel->check_model()) {
             
          $_SESSION['user'] = $user;

          //$this->session->set_userdata($user);
          //echo $this->session->user->_USERNAME;
          //print_r($_SESSION);
          //echo $_SESSION['user'][0]->_USERNAME;
          //$this->session->unset_userdata($user);
          $this->load->view('regis_login/profileHeader');
          $this->load->view('regis_login/profileView');
        
        }
      }else{
        //$this->load->view();
      }
    }

    public function update($check = FALSE) {
      
      IF($check) {
        
        
        $this->loginModel->update_user();
        $_SESSION['user'] = $this->loginModel->selectbyid();
      }

      $this->load->view('regis_login/profileHeader');
      $this->load->view('regis_login/updateView');
       
    }
    
    public function insert() {
       $this->loginModel->insert_user();
    }

  }



?>