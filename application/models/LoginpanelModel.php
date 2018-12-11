<?php

class LoginpanelModel extends CI_Model {

    public function __construct() {
            
        $this->load->database();
    }

    public function check_model() {

            $check = array (
                'username'=> $this->input->post('user'),
                'password'=> $this->input->post('userpass')
            );
        
            $query = $this->db->get_where('logintask', $check);

            return ($query->num_rows()>0) ? $query->result() : FALSE;
    }

    public function insert_user($file) {
            
          
        $insertArray = array (
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>$this->input->post('password'),
            'image'=>'../uploads/'.$file['file_name']
         );
       
       return $this->db->insert('logintask', $insertArray);

       }


}


?>