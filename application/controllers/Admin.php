<?php

class Admin extends CI_Controller {

  public function index() {
    if($this->session->userdata('is_logged_in') != true) {
      redirect('login');
    }

    $this->load->view('layout/admin_header');
    $this->load->view('admin/dashboard');
    $this->load->view('layout/admin_footer');
  }

  public function job_candidates() {
    if($this->session->userdata('is_logged_in') != true) {
      redirect('login');
    }

    $this->load->view('layout/admin_header');
    $this->load->view('admin/job_candidates');
    $this->load->view('layout/admin_footer');
  }

}
