<?php

class formModel extends CI_Model {

   function __construct() {

       $this->load->database();
   
    }


   function insert($jsonData) {

    //$query = "INSERT INTO 'json' ('id','jsonData') values (null,'$jsonData')";
    $test = "INSERT INTO validJson(json) VALUES ('$jsonData');";
    return $this->db->query($test);

   }

   function searchData($search) {
   
        $query = "SELECT  JSON_SEARCH(json,'all','$search') FROM validjson ";
        $result = $this->db->query($query);
        echo "hellow";
        if ($result->num_rows()>0) {

            while($row = $result->result()) {
                print_r($row);echo "hellow";
                // foreach($row as $value) {
                //     if($value!="") {
                //         $searchQuery = "SELECT JSON_VALUE(json,$value) FROM validjson where JSON_VALUE(json,$value) = '$search'";
   
                //         $data = $conn->query($searchQuery);
                //         if($data->num_rows>0) {
                //             while($row1 = $data->fetch_assoc()) {
                //                 foreach($row1 as $item) {
                //                     echo $item.'<br>';
                //                    }
                //                 }
                //             }
                //         }
                //     }
                }
            }
        }


        function test($search) {
           
            $query = "SELECT  JSON_SEARCH(json,'all','$search') FROM validjson ";
            $result = $this->db->query($query);
            // echo"hellow";
            if ($result->num_rows()>0) {
                 echo "<pre>";
                // print_r($result);
                
                
                // print_r($result->num_rows());
                for($i=0;$i<$result->num_rows();$i++) {

                    $row = $result->result_array();
                    print_r($row);
                    echo"hellow";

                
                }
                // foreach($row[0] as $check) {
                //     //if($row!=)
                //    // print_r($check);
                // }
                
            }
        }


    }











    // function showAll() {
       
    //   $result = $this->db->get("user");
    //   return ($result->num_rows()>0) ? $result->result() : FALSE;
       
    // }

    // function insertData($userData) {
    //     $array = array(
    //         '_NAME'=>$userData->name,
    //         '_USERNAME'=>$userData->username,
    //         '_EMAIL'=>$userData->email,
    //         '_Mobile'=>$userData->mobile,
    //         '_GENDER'=>$userData->gender
    //     );
    //     return $this->db->insert('user',$array);
    // }

?>