<?php

class LoginpanelModel extends CI_Model {

    public function __construct() {
            
        $this->load->database();
    }

    public function insert_user() {
            
        $insertArray = array (

           '_USERNAME'=>$this->input->post('Iusername'),
           '_NAME'=>$this->input->post('Iname'),
           '_EMAIL'=>$this->input->post('Iemail'),
           '_MOBILE'=>$this->input->post('Imobile'),
           '_GENDER'=>$this->input->post('Igender'),
           '_PASSWORD'=>$this->input->post('Ipassword')
        );

       
       return $this->db->insert('user', $insertArray);

       }


}


?>