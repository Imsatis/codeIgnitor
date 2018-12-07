<?php

class UserModel extends CI_Model {

    

 public function select_all() {
    
    $query = $this->db->get('students');
  
    return $query->result();
}

public function select_by_id($id) {
     
    $query = $this->db->get_where('students',array('studentId'=>$id));
   
    return ($query->num_rows()>0) ? $query->row() : FALSE;
 }

 public function update_by_id($id) {

    $data = array (
        'studentName' => $this->input->post('uname'),
        'studentEmail' => $this->input->post('uemail'),
        'studentAge' => $this->input->post('uage')
);

    $this->db->where('studentId', $id);
    $query = $this->db->update('students',$data);
    
    return $query; 
}

public function delete_by_id($id) {
    
    echo $this->db->delete('students',array('studentId'=>$id));

}

}

?>