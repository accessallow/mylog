<?php

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('template/header');
        $this->load->view('category/list_all_categories');
        $this->load->view('template/footer');
    }
    
}
