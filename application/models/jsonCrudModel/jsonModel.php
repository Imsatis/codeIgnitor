<?php

class jsonModel extends CI_Model {

   function __construct() {

       $this->load->database();
   
    }

    function insertData($userData) {
      // $array = array(
      //     '_NAME'=>$userData->name,
      //     '_USERNAME'=>$userData->username,
      //     '_EMAIL'=>$userData->email,
      //     '_Mobile'=>$userData->mobile,
      //     '_GENDER'=>$userData->gender
      // );
      // return $this->db->insert('user',$array);

      echo "model";
  }
   
   }
?>