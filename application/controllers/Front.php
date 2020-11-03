<?php

class Front extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model('basic_model');
    $this->load->model('jobs_model');
    $this->load->helper("url");
    $this->load->library('form_validation');
    
  }
  public function index() {

    $this->load->view('layout/front_header');
    $this->load->view('pages/homepage');
    $this->load->view('layout/front_footer');
  }

  public function employer_listing() {
 
    $data = array(
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
    );
    
    $this->load->view('layout/front_header',$data);
    $this->load->view('front/employer-listing');
    $this->load->view('layout/front_footer');
  }

  public function employer_details() {

      // first check weather user is candidate or employee

       //if employee is not avialble then redirect to homepage
       
       
      //$company = $this->basic_model->getById('companies');
      // $data = array(
      //   'company' => $company,
        
      // );
    
    $this->load->view('layout/front_header');
    $this->load->view('front/employer-details');
    $this->load->view('layout/front_footer');
  }

  public function candidate_listing() {
 
    $data = array(
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
    );
    
    $this->load->view('layout/front_header',$data);
    $this->load->view('front/candidate-listing');
    $this->load->view('layout/front_footer');
  }

  public function candidate_details() {
 
    $data = array(
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
    );
    
    $this->load->view('layout/front_header',$data);
    $this->load->view('front/candidate-details');
    $this->load->view('layout/front_footer');
  }

  public function about() {
 
    
    $this->load->view('layout/front_header');
    $this->load->view('front/about');
    $this->load->view('layout/front_footer');
  }


}
