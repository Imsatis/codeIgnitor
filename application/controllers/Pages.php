<?php
class Pages extends CI_Controller {
 
        public function index(){
           echo "default__function";
        }

        public function view($page = 'home') {
          $path = 'views/pages/'.$page.'.php';

            if( ! file_exists(APPPATH.$path)) {
                show_404();
            }
          
            $data['title'] = ucfirst($page); // Capitalize the first letter
            print_r($data);
            $this->load->view('templates/header',$data);
           $this->load->view('pages/'.$page,'Test');
           $this->load->view('templates/footer',$data);
        }
}