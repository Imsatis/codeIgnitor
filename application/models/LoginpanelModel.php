<?php

class LoginpanelModel extends CI_Model {

    public function __construct() {
            
        $this->load->database();
    }

    public function check_model() {

            $check = array (
                'username'=> $this->security->xss_clean($this->input->post('user')),
                'password'=> $this->security->xss_clean($this->input->post('userpass'))
            );
        
            $query = $this->db->get_where('logintask', $check);

            return ($query->num_rows()>0) ? $query->result() : FALSE;
    }

    public function insert_user($file) {
            
          
        $insertArray = array (
            'username'=>$this->security->xss_clean($this->input->post('username')),
            'email'=>$this->security->xss_clean($this->input->post('email')),
            'password'=>$this->security->xss_clean($this->input->post('password')),
            'image'=>$this->security->xss_clean('../uploads/'.$file['file_name'])
         );
       
       return $this->db->insert('logintask', $insertArray);

       }


}


?>