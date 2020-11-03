<?php

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('basic_model');
    }

    public function index($page = 'login')
    {
        $arr = array(
            'page' => $page
        );

        $this->load->view('layout/front_header', $arr);
        $this->load->view('pages/login_signup');
        $this->load->view('layout/front_footer');
    }

    public function signup()
    {

        if ($this->input->post()) {

            $this->load->library('form_validation');
            $this->form_validation->set_rules('f_name', 'First Name', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('l_name', 'Last_Name', 'required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[15]', array(
                'required' => 'You have to provde a %s',
                'min_length' => '%s must be greater than 8',
                'max_length' => '%s must be less than 15'
            ));
            $this->form_validation->set_rules('c_password', 'Confirm Password', 'required|matches[password]');
            $this->form_validation->set_rules('i_agree_pp', 'Privacy Policy', 'required', array(
                'required' => 'You have to Agree on %s'
            ));
            $this->form_validation->set_rules('i_agree_tos', 'Terms of Services', 'required', array(
                'required' => 'You have to Agree on %s'
            ));


            if ($this->form_validation->run() === TRUE) {
                // success
                $data = $this->input->post();

                // removing confirm password field
                unset($data['c_password']);

                $id = $this->basic_model->insertRow('users', $data);
                if ($id) {
                    echo json_encode(array(
                        'type' => 'success',
                        'msg' => 'User Account Created Successfully'
                    ));
                    exit;
                }
            } else {

                $resp = array(
                    'type' => 'error',
                    'errors' => $this->form_validation->error_array()
                );
                echo json_encode($resp);
                exit;
            }
        }

    }

    public function login()
    {
        if ($this->input->post()) {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required', array(
                'required' => 'You have to provide a %s'
            ));

            if ($this->form_validation->run() === TRUE) {
                $data1 = $this->input->post();

                // get user by email
                $user = $this->basic_model->getWhere('users', 'email', $data1['email']);

                // check if user is available
                if(empty($user)) {
                  $resp = array('type' => 'error', 'errors' => array('email' => 'Invalid Email'));
                  echo json_encode($resp);
                  exit;
                } else {
                  // user found with provided email_login

                  // check password
                  if($user->password != $data1['password']) {
                    $resp = array('type' => 'error', 'errors' => array('password' => 'Invalid Password'));
                    echo json_encode($resp);
                    exit;
                  } else {
                    // create sess array
                    $sess = array(
                      'user_id' => $user->id,
                      'username' => $user->f_name." ".$user->l_name,
                      'profile_pic' => $user->profile_pic,
                      'type' => $user->type,
                      'is_logged_in' => true,
                    );
                    $this->session->set_userdata($sess);

                    // redirect
                    $resp = array('type' => 'success', 'msg' => 'Logged in successfully!', 'redirect' => site_url('admin'));
                    echo json_encode($resp);
                    exit;
                  }
                }


            } else {

                $resp = array(
                    'type' => 'error',
                    'errors' => $this->form_validation->error_array()
                );
                echo json_encode($resp);
                exit;
            }
        }

    }

    public function logout() {
      $this->session->sess_destroy();
      redirect('/');
    }

}
