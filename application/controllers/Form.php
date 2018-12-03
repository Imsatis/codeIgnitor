<?php

class form extends CI_Controller {

    public function view($check='null') {
        echo "test";
        $this->load->view('Form');
        
        if($check === 'insert'){
            $this->insert();
        }
    }

    public function insert() {
        //echo "test";
        if(!empty($_POST['submit'])) {
            $this->load->model('FormData');
            $res=$this->FormData->select();
            echo "<pre>"; 
            //print_r($result);
            //print_r($res);
            $result=$res->result();
            //print_r($result);  
            //foreach($result as $index=>$value){
           // echo $value->_NAME."<br>";
            //print_r($value);
           //}

           print_r($result);
        }
    }

}

/*

class cls {
    private $variable;
    public function view(){
        echo "hellow";
        $INNER=1;
    }

    public function vi(){
        echo "hellow";
    }

    public $var = ['first','second','third'];
}$obj = new cls;
echo "<pre>";
print_r($obj);

*/
?>