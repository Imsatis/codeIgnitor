<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class loginModel extends CI_Model {

        public function __construct() {
            
            $this->load->database();
        }

        public function check_model() {

            $check = array (
                '_USERNAME'=> $this->input->post('username'),
                '_PASSWORD'=> $this->input->post('password')
            );
           
           $query = $this->db->get_where('user', $check);

            return ($query->num_rows()>0) ? $query->result() : FALSE;
        }

        public function selectbyid() {

            $id = array('_ID' => $_SESSION['user'][0]->_ID);
            $query = $this->db->get_where('user', $id);
            return $query->result();
        }


        public function update_user() {
        
        
          $updateArray = array(
           '_USERNAME'=>$this->input->post('Uusername'),
           '_NAME'=>$this->input->post('Uname'),
           '_EMAIL'=>$this->input->post('Uemail'),
           '_MOBILE'=>$this->input->post('Umobile'),
           '_GENDER'=>$this->input->post('Ugender')
        );
        
        
        $this->db->where('_ID', $_SESSION['user'][0]->_ID);
        $this->db->update('user', $updateArray);
        }
}


?>