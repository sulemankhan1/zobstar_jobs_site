<?php

class Jobs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('basic_model');
    $this->load->model('jobs_model');
    $this->load->helper("url");
    $this->load->library('form_validation');
    date_default_timezone_set('Asia/karachi');
  }

  public function new() {

    if(!$this->session->userdata('is_logged_in')) {
      redirect('/');
    }

    $array = array(
      "active_menu" => "jobs",
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
      'companies' => $this->basic_model->getAll('companies', 'DESC'),
    );


    $this->load->view('layout/admin_header', $array);
    $this->load->view('admin/new_job');
    $this->load->view('layout/admin_footer');

  }

  public function post_job(){

    if(!$this->session->userdata('is_logged_in')) {
      redirect('/');
    }

    $errors = [];
    $data = $this->input->post();
    $this->form_validation->set_rules('Job_Title', 'job Title', 'required|min_length[5]');
    $this->form_validation->set_rules('Job_Type', 'job Type', 'required');
    $this->form_validation->set_rules('career_level', 'Career Level', 'required' );
    $this->form_validation->set_rules('category_id', 'category', 'required');
    $this->form_validation->set_rules('Offered_Salary_Min', 'Offered Salary Minimum', 'required' );
    $this->form_validation->set_rules('Offered_Salary_Max', 'Offered Salary Maximum', 'required' );
    $this->form_validation->set_rules('Experience', 'experience', 'required');
    $this->form_validation->set_rules('qualification', 'qualification', 'required');
    $this->form_validation->set_rules('gender', 'Gender', 'required');
    $this->form_validation->set_rules('Industry', 'Industry', 'required');
    $this->form_validation->set_rules('No_Of_Vaccency', 'No Of Vaccency', 'required|min[1]|max[10]');

    $this->form_validation->set_rules('Application_Deadline', 'Application Deadline', 'required');
    $this->form_validation->set_rules('Job_Description', 'Job Description', 'required');

    if($data['type'] == 'create_new') {

      $this->form_validation->set_rules('Company_name', 'company name', 'required');
      $this->form_validation->set_rules('Company_phone_no', 'company phone no', 'required');
      $this->form_validation->set_rules('location', 'Location', 'required');
      $this->form_validation->set_rules('City_name', 'city name', 'required');
      $this->form_validation->set_rules('Company_address', 'company address', 'required');
      $this->form_validation->set_rules('Tag_Line', 'Tag line', 'required');
    } else {
      $this->form_validation->set_rules('company_id', 'Company Id', 'required');
    }

    if ($this->form_validation->run() === False || $_FILES['Company_Logo']['name'] == "" || empty($this->input->post('Job_Tags')) || empty($this->input->post('Skill_Requirement'))) {
      $errors = $this->form_validation->error_array();

      if($_FILES['Company_Logo']['name'] == "") {
        $errors['Company_Logo'] = "Company Logo is Required";
      }

      if(empty($this->input->post('Job_Tags'))) {
        $errors['Job_Tags'] = "Please select atleast one Job tag";
      }

      if(empty($this->input->post('Skill_Requirement'))) {
        $errors['Skill_Requirement'] = "Please select atleast one Skill";
      }

      $this->session->set_flashdata('errors', $errors);
      redirect('admin/post-job');

    } else {

      // No validation error found
      $data = $this->input->post();



      if($data['type'] == 'create_new') {
        $company = array(
          'name' => $data['Company_name'],
          'phone_no' => $data['Company_phone_no'],
          'city' => $data['City_name'],
          'headquarter' => $data['headquarter'],
          'country' => $data['country'],
          'founded_in' => $data['founded_in'],
          'full_address' => $data['Company_address'],
          'location' => $data['location'],
        );
        $company_id = $this->basic_model->insertRow('companies', $company);
      } else {
        $company_id = $data['company_id'];
      }

      $new_job = array(
        'Job_Title' => $data['Job_Title'],
        'Job_Type' => $data['Job_Type'],
        'career_level' => $data['career_level'],
        'category_id' => $data['category_id'],
        'Offered_Salary_Min' => $data['Offered_Salary_Min'],
        'Offered_Salary_Max' => $data['Offered_Salary_Max'],
        'Experience' => $data['Experience'],
        'qualification' => $data['qualification'],
        'gender' => $data['gender'],
        'industry' => $data['industry'],
        'Job_Tags' => json_encode($data['Job_Tags']),
        'Skill_Requirement' => json_encode($data['Skill_Requirement']),
        'No_Of_Vaccency' => $data['No_Of_Vaccency'],
        'Application_Deadline' => $data['Application_Deadline'],
        'Job_Description' => $data['Job_Description'],
        'Tag_Line' => $data['Tag_Line'],
        'company_id' => $company_id,
        'user_id' => $this->session->userdata('user_id'),
        'Job_status' => 'active',
      );

      // upload image
      if($_FILES['Company_Logo']['name'] != "") {

        // move_uploaded_file($_FILES['Company_Logo']['tmp_name'][0], 'uploads/'.$_FILES['Company_Logo']['name'][0]);
        // $data['Company_Logo'] = 'uploads/'.$_FILES['Company_Logo']['name'][0];
        $data['Company_Logo'] = "uploads/5d4d9dcefbb41382d0450516_5goXSF73aM9qnqrLxHJmQyFd04TjARopB1O7pzw834YXPLkkdzcblH_YKYQ1DdC7XvgHttrvVqeIbSyaFzlCESgUnHe4Tp1QEaI4eWoKN0UQfcGtb9rNrCo57q8wlJU2FD0SEla4";
      }

      $this->basic_model->insertRow('jobs', $new_job);
      $this->session->set_flashdata('success', "Job Added Succesfully");
      redirect('admin/jobs');
    }
  }

  // for admin
  public function view_jobs() {

    if(!$this->session->userdata('is_logged_in')) {
      redirect('/');
    }

    $jobs = $this->jobs_model->getUserJobs();

    $array = array(
      "active_menu" => "jobs",
      "records" => $jobs,
      "no_of_jobs" => 0,
      "no_of_appplications" => 0,
      "no_of_active_jobs" => 0,
    );

    $this->load->view('layout/admin_header', $array);
    $this->load->view('admin/view_jobs');
    $this->load->view('layout/admin_footer');
  }

  public function view_job($job_id) {

    // if job id is not provided
    if(!$job_id) {
      redirect('/');
    }

    // if job is not avialble then redirect to homepage
    $job = $this->basic_model->getById('jobs', $job_id);

    $company = $this->basic_model->getById('companies',$job->Company_id);



    if(empty($job)) {
      redirect('/');
    }

    $data = array(
      'job' => $job,
      'company' => $company,

    );

    $this->load->view('layout/front_header', $data);
    $this->load->view('admin/view_job');
    $this->load->view('layout/front_footer');
  }

  // for front end
  public function all() {
    $array = array(
      "records" => $this->jobs_model->getAllJobs(),
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
      'countries' => $this->basic_model->getAll('countries', 'DESC'),
    );

    $this->load->view('layout/front_header', $array);
    $this->load->view('front/all_jobs');
    $this->load->view('layout/front_footer');
  }

  public function search() {

    // collecting filter parameters
    $search_array = $this->input->get();

    if(isset($search_array['salary_range'])) {
      $search_array['min_salary'] = $search_array['salary_range'] - 5;
      $search_array['max_salary'] = $search_array['salary_range'] + 5;
    }

    // getting records from database based on filters
    $jobs = $this->jobs_model->search($search_array);

    $array = array(
      "records" => $jobs,
      'categories' => $this->basic_model->getAll('categories', 'DESC'),
      'search_array' => $search_array,
      'countries' => $this->basic_model->getAll('countries', 'DESC'),
    );

    $this->load->view('layout/front_header', $array);
    $this->load->view('front/all_jobs');
    $this->load->view('layout/front_footer');
  }

}
