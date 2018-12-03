<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class FormData extends CI_Model {
 
    public function select() {
    $this->load->database();
    return $this->db->query("SELECT * FROM user");
   }
}




?>
