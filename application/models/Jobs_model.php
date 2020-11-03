<?php

class Jobs_model extends CI_Model {

  public function getUserJobs() {
    $this->db->select("j.id, j.Job_Title, j.updated_at, j.No_Of_Applicant, j.created_at, j.Application_Deadline, j.Job_status");
    $this->db->from('jobs j');
    $this->db->where('j.user_id', $this->session->userdata('user_id'));
    return $this->db->get()->result();
  }


  public function getAllJobs() {
    $this->db->select("j.id, j.Job_Title, j.Job_Type, j.created_at, j.Offered_Salary_Min min_salary, j.Offered_Salary_Max max_salary, c.name company_name, c.full_address company_address, c.location , c.company_Logo, j.created_at");
    $this->db->from('jobs j');
    $this->db->join('companies c', 'j.Company_id = c.id');
    return $this->db->get()->result();
  }

  public function search($search_array) {
    $this->db->select("j.id, j.Job_Title, j.Job_Type , j.career_level, j.gender, j.Industry , j.Job_Description , j.skill_Requirement, j.created_at, j.Offered_Salary_Min min_salary, j.Offered_Salary_Max max_salary, c.name company_name, c.location location, c.full_address company_address, c.company_Logo");
    $this->db->from('jobs j');
    $this->db->join('companies c', 'j.Company_id = c.id');

    if(isset($search_array['q']) && $search_array['q'] != "") {
      $this->db->like('j.Job_Title' , $search_array['q']);
    }

    if(isset($search_array['location']) && $search_array['location'] != "") {
      $this->db->like('c.location' , $search_array['location']);
    }


    if(isset($search_array['salary_range']) && $search_array['salary_range'] != 0) {
      if(isset($search_array['min_salary']) && isset($search_array['min_salary']) &&  $search_array['min_salary'] != 0 && $search_array['max_salary'] != 0) {
        $this->db->where('j.Offered_Salary_Min >=' , $search_array['min_salary']);
        $this->db->where('j.Offered_Salary_Min <=' , $search_array['max_salary']);

        $this->db->or_where('j.Offered_Salary_Max >=' , $search_array['min_salary']);
        $this->db->where('j.Offered_Salary_Max <=' , $search_array['max_salary']);
      }
    }


    if(isset($search_array['category_id']) && $search_array['category_id'] != "") {
      $this->db->like('j.category_id' , $search_array['category_id']);
    }

    if(isset($search_array['date_posted']) && $search_array['date_posted'] != "") {
      switch ($search_array['date_posted']) {
        case 'last_hour':
          $this->db->where('j.created_at >= ', date('Y-m-d H:i', strtotime('-1 hour')));
          break;
        case 'last_24_hour':
            $this->db->where('j.created_at >= ', date('Y-m-d H:i', strtotime('-1 day')));
          break;
        case 'last_7_days':
            $this->db->where('j.created_at >= ', date('Y-m-d H:i', strtotime('-1 week')));
          break;
        case 'last_14_days':
            $this->db->where('j.created_at >= ', date('Y-m-d H:i', strtotime('-2 weeks')));
          break;
        case 'last_30_days':
            $this->db->where('j.created_at >= ', date('Y-m-d H:i', strtotime('-1 month')));
          break;
      }
    }

    // all the categories
    if(isset($search_array['jt_full_time'])) {
      $this->db->or_where('j.Job_Type' , "Full Time");
    }
    if(isset($search_array['jt_part_time'])) {
      $this->db->or_where('j.Job_Type' , "Part Time");
    }
    if(isset($search_array['jt_Internship'])) {
      $this->db->or_where('j.Job_Type' , "Internship");
    }
    if(isset($search_array['jt_temporary'])) {
      $this->db->or_where('j.Job_Type' , " Temporary");
    }
    if(isset($search_array['jt_Permanent'])) {
      $this->db->or_where('j.Job_Type' , "Permanent");
    }
    if(isset($search_array['jt_freelance'])) {
      $this->db->or_where('j.Job_Type' , "Freelance");
    }

    // all the carerer level
    if(isset($search_array['cl_manager'])) {
      $this->db->or_where('j.career_level' , "Manager");
    }
    if(isset($search_array['cl_officer'])) {
      $this->db->or_where('j.career_level' , "Officer");
    }
    if(isset($search_array['cl_student'])) {
      $this->db->or_where('j.career_level' , "Student");
    }
    if(isset($search_array['cl_executive'])) {
      $this->db->or_where('j.career_level' , "Executive");
    }
    if(isset($search_array['cl_others'])) {
      $this->db->or_where('j.career_level' , "Others");
    }

    // all the  EXPERIENCES
    if(isset($search_array['exp_fresh'])) {
      $this->db->or_where('j.career_level' , "No Experience");
    }
    if(isset($search_array['exp_lt_1'])) {
      $this->db->or_where('j.career_level' , "Less than 1 Year");
    }
    if(isset($search_array['exp_2_years'])) {
      $this->db->or_where('j.career_level' , "2 Year(s)");
    }
    if(isset($search_array['exp_3_years'])) {
      $this->db->or_where('j.career_level' , "3 Year(s)");
    }
    if(isset($search_array['exp_4_years'])) {
      $this->db->or_where('j.career_level' , "4 Years");
    }
    if(isset($search_array['exp_5_years'])) {
      $this->db->or_where('j.career_level' , "5 Years");
    }
    if(isset($search_array['exp_6_years'])) {
      $this->db->or_where('j.career_level' , "6 Years");
    }
    if(isset($search_array['exp_7_years'])) {
      $this->db->or_where('j.career_level' , "7 Years");
    }
    if(isset($search_array['exp_8_years'])) {
      $this->db->or_where('j.career_level' , "8 Years OR more");
    }

    // for genders
    if(isset($search_array['gender_m'])) {
      $this->db->or_where('j.career_level' , "Male");
    }
    if(isset($search_array['gender_f'])) {
      $this->db->or_where('j.career_level' , "Female");
    }

    // all the industries
    if(isset($search_array['ind_IT_Contractor'])) {
      $this->db->or_where('j.career_level' , "IT Contractor");
    }
    if(isset($search_array['ind_Accountancy'])) {
      $this->db->or_where('j.career_level' , "Accountancy");
    }
    if(isset($search_array['ind_Banking'])) {
      $this->db->or_where('j.career_level' , "Banking");
    }
    if(isset($search_array['ind_Charity_Voluntary'])) {
      $this->db->or_where('j.career_level' , "Charity & Voluntary");
    }
    if(isset($search_array['ind_Digital_Creative'])) {
      $this->db->or_where('j.career_level' , "Digital & Creative");
    }
    if(isset($search_array['ind_Legal_jobs'])) {
      $this->db->or_where('j.career_level' , "Legal jobs");
    }
    if(isset($search_array['ind_Leisure_Tourism'])) {
      $this->db->or_where('j.career_level' , "Leisure & Tourismr");
    }
    if(isset($search_array['ind_Media'])) {
      $this->db->or_where('j.career_level' , "Media");
    }
    if(isset($search_array['ind_Marketing_PR'])) {
      $this->db->or_where('j.career_level' , "Marketing & PR");
    }
    if(isset($search_array['ind_Motoring_Automotive'])) {
      $this->db->or_where('j.career_level' , "Motoring & Automotive");
    }
    if(isset($search_array['ind_Retail'])) {
      $this->db->or_where('j.career_level' , "Retail");
    }
    if(isset($search_array['ind_Sales_Marketing'])) {
      $this->db->or_where('j.career_level' , "Sales & Marketing");
    }


    // Sort by
    if(isset($search_array['sb'])) {
      switch ($search_array['sb']) {
        case 'oldest':
          $this->db->order_by('id', 'DESC');
          break;
        case 'price-low-to-high':
          $this->db->order_by('Offered_Salary_Min', 'ASC');
          break;
        case 'price-high-to-low':
          $this->db->order_by('Offered_Salary_Min', 'DESC');
          break;
        case 'random-listing':
          $this->db->order_by('RAND()');
          break;
        case 'newest':
        default:
          $this->db->order_by('id', 'ASC');
          break;
      }
    }




    // }
    // $this->db->get();
    // echo $this->db->last_query();
    // die();


    return $this->db->get()->result();
  }
}
