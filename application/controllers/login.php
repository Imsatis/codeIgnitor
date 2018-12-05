<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
      
    public __construct() {
       $this->load->view();
       $this->load->model('loginModel');
    }

    public function check() {
       
        $data['userPass'] = array(
            'userName' = $this->load->input('username'),
            'password' = $this->load->input('password')
        );

        $this->load->model('loginModel');
    }
}



?>