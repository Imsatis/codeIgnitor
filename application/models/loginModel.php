<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

        public __construct() {
            
            $this->load->database();
        }

        public function check_model($data) {

            $this->db->query("SELECT * FROM $tablename")
        }
}


?>