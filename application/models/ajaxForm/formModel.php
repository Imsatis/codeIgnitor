<?php

class formModel extends CI_Model {

   function __construct() {

       $this->load->database();
   
    }


    function showAll() {
       
      $result = $this->db->get("user");
      return ($result->num_rows()>0) ? $result->result() : FALSE;
       
    }

    function insertData($userData) {
        $array = array(
            '_NAME'=>$userData->name,
            '_USERNAME'=>$userData->username,
            '_EMAIL'=>$userData->email,
            '_Mobile'=>$userData->mobile,
            '_GENDER'=>$userData->gender
        );
        return $this->db->insert('user',$array);
    }
}

?>