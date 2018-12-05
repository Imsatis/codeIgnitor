<?php
class Pages extends CI_Controller {
 
   private $check = 'undefined';
        public function index(){
           echo "default__function";
           echo $this->check = 'test';
         }

        public function view($page = 'home') {
         echo $this->check;
          $path = 'views/pages/'.$page.'.php';

            if( ! file_exists(APPPATH.$path)) {
                show_404();
            }
          
            $data['title'] = ucfirst($page); // Capitalize the first letter
            //print_r($data);
            $this->load->view('templates/header',$data);
           $this->load->view('pages/'.$page,'Test');
           $this->load->view('templates/footer',$data);
        }
}    