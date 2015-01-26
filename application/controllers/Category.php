<?php

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
       // $this->load->model('category_model');
       // $data['categories'] = $this->category_model->get_all();
        $data['json_fetch_link'] = URL_X.'Category/get_all_categories';
        $this->load->view('template/header');
        $this->load->view('category/list_all_categories',$data);
        $this->load->view('template/footer');
    }
    public function get_all_categories(){
        //this function returns json format data
        $this->load->model('category_model');
        $categories = $this->category_model->get_all();
        
        $this->output->set_content_type('application/json')
                ->set_output(json_encode($categories));
    }
    
}
