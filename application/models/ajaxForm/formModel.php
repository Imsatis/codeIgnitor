
<?php
//search
//select * from validjson where json_search(json,'one','jhon') is not null
class formModel extends CI_Model {
   function __construct() {
       $this->load->database();
   
    }
    function readData() {
        
        $result = $this->db->get("validjson");
         return ($result->num_rows()>0) ? $result->result_array() : False;
    }
   function insert($jsonData) {
    //$query = "INSERT INTO 'json' ('id','jsonData') values (null,'$jsonData')";
    $test = "INSERT INTO validJson(json) VALUES ('$jsonData');";
    return $this->db->query($test);
   }
   function updateData($id,$update) {
       $name = $update['name'][0];
       $name1 = $update['name'][1];
       $name2 = $update['name'][2];
       $name3 = $update['name'][3];
       $query = "UPDATE validjson SET json = JSON_REPLACE(json,'$.name[0]','$name','$.name[1]','$name1','$.name[2]','$name2','$.name[3]','$name3','$.username','$update[username]') where id = $id";
       //print_r($update['name'][0]);
       echo $query;
       $this->db->query($query);
   }
   function deletebyid($id) {
    $query = "DELETE FROM `validjson` WHERE id = '$id' ";
    return ($this->db->query($query)) ? TRUE : FALSE;
   }
   function selectbyid($id) {
     $result = $this->db->get_where("validjson",array('id'=>$id));
     return ($result->num_rows()>0) ? $result->row_array() : False;
        
}   
   function searchData($search) {
   
        $query = "SELECT  * FROM validjson where JSON_SEARCH(json,'all','%$search%') is not null";
        $result = $this->db->query($query);
        
        if ($result->num_rows()>0) {
         foreach($result->result() as $data) {
                    $chk = json_decode($data->json);
                    // echo "<pre>";
                    // print_r(json_decode($data->json));
               foreach(json_decode($data->json)->name as $searchName) {
                //if($str = stristr($search,substr($searchName,0,strlen($search)))) {
                    if($searchName == $search) {
                     echo $searchName."<br>";
                    }
                }
            }
        }else {
                echo "Sorry No Data Found in Database";
            }
        }
        // function test($search) {
           
        //     $query = "SELECT  JSON_SEARCH(json,'all','$search') FROM validjson ";
        //     $result = $this->db->query($query);
        //     // echo"hellow";
        //     if ($result->num_rows()>0) {
        //          echo "<pre>";
        //         // print_r($result);
                
                
        //         // print_r($result->num_rows());
        //         for($i=0;$i<$result->num_rows();$i++) {
        //             $row = $result->result_array();
        //             print_r($row);
        //             echo"hellow";
                
                
        //         }//SELECT json_extract(json, '$.name') FROM validjson WHERE json_extract(json, '$.name') = 'jane'
        //         // foreach($row[0] as $check) {
        //         //     //if($row!=)
        //         //    // print_r($check);
        //         // }
                
        //     }
        // }
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
?>