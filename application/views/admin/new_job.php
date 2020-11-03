<!-- ================================
    START DASHBOARD AREA
================================= -->
<style>
   .error {
   border-color: red !important;
   }
</style>
<section class="dashboard-area">
    <div class="dashboard-sidebar">
        <div class="dashboard-nav-trigger">
            <div class="dashboard-nav-trigger-btn">
                <i class="la la-bars"></i> Dashboard Navigation
            </div>
        </div>
        <div class="dashboard-nav-container">
            <div class="humburger-menu">
                <div class="humburger-menu-lines side-menu-close"></div><!-- end humburger-menu-lines -->
            </div><!-- end humburger-menu -->
            <?php $this->load->view('layout/admin_sidebar')?>
        </div>
    </div><!-- end dashboard-sidebar -->
    <div class="dashboard-content-wrap">
        <div class="container-fluid">
          <?php
          $errors = [];
          if($this->session->flashdata('errors')) {
            $errors = $this->session->flashdata('errors');
          }
           ?>
          <form action = "<?=site_url("Jobs/post_job") ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="section-heading">
                            <h2 class="sec__title">Post a Job</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.html">Home</a></li>
                            <li class="active__list-item">Dashboard</li>
                            <li>Post a Job</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">General Information</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">

                            <div class="contact-form-action">
                                    <div class="row">
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box company-logo-wrap">
                                                <label class="label-text">Company Logo</label>
                                                <div class="form-group">
                                                    <div class="upload-btn-box">
                                                        <input type="file" name="Company_Logo" id="filer_input" multiple="multiple">
                                                        <span class="mt-1 text-danger" ><?=@$errors['Company_Logo']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Title</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" name="Job_Title" value="<?=@$jobs['Job_Title']?>" placeholder="Enter job title" >
                                                    <span class="mt-1 text-danger" ><?=@$errors['Job_Title']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Job Type</label>
                                                <div class="form-group">
                                                    <select class="job-type-option-field" name = "Job_Type" value = "<?=@$job['Job_Type']?>" id = "Job_Type">
                                                        <option value >Select Job Type</option>
                                                        <option value="Full Time">Full Time</option>
                                                        <option value="Part Time">Part Time</option>
                                                        <option value="Temporary">Temporary</option>
                                                        <option value="Internship">Internship</option>
                                                        <option value="Permanent">Permanent</option>
                                                        <option value="Freelance">Freelance</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Job_Type']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Career Level</label>
                                                <div class="form-group">
                                                    <select class="job-category-option-field" name="career_level">
                                                        <option selected disabled>Choose One</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Officer">Officer</option>
                                                        <option value="Student">Student</option>
                                                        <option value="Executive">Executive</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['career_level']?></span>
                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">category</label>
                                                <div class="form-group">
                                                    <select class="category-option-field" name='category_id'>
                                                      <option value=""> -- select -- </option>
                                                      <?php foreach($categories as $category) { ?>
                                                        <?php
                                                        $selected = "";
                                                        if(@$jobs['category_id'] == $category->id) {
                                                          $selected = "selected";
                                                        }
                                                         ?>
                                                          <option value="<?=$category->id?>" <?=$selected?>><?=$category->name?></option>
                                                        <?php } ?>

                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['category_id']?></span>

                                                </div><!-- end form-group -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Offered Salary</label>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <span class="la la-dollar-sign form-icon"></span>
                                                            <input class="form-control" value ="<?=@$jobs['Offered_Salary_Min']?>" type="number" name ="Offered_Salary_Min" id = "minimum" placeholder="Min">
                                                            <span class="mt-1 text-danger" ><?=@$errors['Offered_Salary_Min']?></span>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <span class="la la-dollar-sign form-icon"></span>
                                                            <input class="form-control" type="number" value ="<?=@$jobs['Offered_Salary_Max']?>" name ="Offered_Salary_Max" placeholder="Max" id = "maximum">
                                                            <span class="mt-1 text-danger" ><?=@$errors['Offered_Salary_Min']?></span>
                                                        </div>
                                                    </div><!-- end col-lg-6 -->
                                                </div><!-- end row -->
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Experience</label>
                                                <div class="form-group">
                                                    <select class="experience-option-field" name ="Experience" >
                                                        <option value ="<?=@$jobs['Experience']?>"  id = "experience">Choose Experience</option>
                                                        <option value="No Experience">No Experience</option>
                                                        <option value="Less than 1 Year">Less than 1 Year</option>
                                                        <option value="1 Year">1 </option>
                                                        <option value="2 Year(s)">2 Year(s)</option>
                                                        <option value="3 Year(s)">3 Year(s)</option>
                                                        <option value="4 Years">4 Years(s)</option>
                                                        <option value="5 Years">5 Years(s)</option>
                                                        <option value="6 Years">6 Years(s)</option>
                                                        <option value="7 Years">7 Years(s)</option>
                                                        <option value="8 Years OR more">8 Years OR more</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Experience']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Qualification</label>
                                                <div class="form-group">
                                                    <select class="qualification-option-field" name="qualification">
                                                        <option value ="<?=@$jobs['Qualification']?>"  id ="qualification">Choose Qualification</option>
                                                        <option value="No Experience">No Experience</option>
                                                        <option value="Matriculation">Matriculation</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Graduate">Graduate</option>
                                                        <option value="Certificate">Certificate</option>
                                                        <option value="Associate Degree">Associate Degree</option>
                                                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                        <option value="Master's Degree">Master's Degree</option>
                                                        <option value="Doctorate Degree">Doctorate Degree</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['qualification']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                         <!--joins as user gender-->
                                         <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Gender</label>
                                                <div class="form-group">
                                                    <select class="choose-gender-option-field" name="gender">
                                                        <option value >Choose Gender</option>
                                                        <option value="Male or Female">Male or Female</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['gender']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Industry</label>
                                                <div class="form-group">
                                                    <select class="industry-option-field" name="Industry">
                                                        <option value ="<?=@$jobs['Industry']?>" id ="industry">Select industry</option>
                                                        <option value="IT Contractor">IT Contractor</option>
                                                        <option value="Accountancy">Accountancy</option>
                                                        <option value="Banking">Banking</option>
                                                        <option value="Charity & Voluntary">Charity & Voluntary</option>
                                                        <option value="Digital & Creative">Digital & Creative</option>
                                                        <option value="Legal jobs">Legal jobs</option>
                                                        <option value="Leisure & Tourism">Leisure & Tourism</option>
                                                        <option value="Media">Media</option>
                                                        <option value="Marketing & PR">Marketing & PR</option>
                                                        <option value="Motoring & Automotive">Motoring & Automotive</option>
                                                        <option value="Retail">Retail</option>
                                                        <option value="Sales & Marketing">Sales & Marketing</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['industry']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text d-flex align-items-center ">Job Tags
                                                <span class="text-muted ml-1">(optional)</span>
                                                <i class="la la-question tip ml-1" data-toggle="tooltip" data-placement="top" title="Comma separate tags, such as required skills or technologies, for this job. Maximum of 5 keywords"></i>
                                                </label>
                                                <div class="form-group">
                                                    <select class="tag-option-field" multiple="multiple" name="Job_Tags[]">
                                                        <option>UI & UX Design</option>
                                                        <option>iOS</option>
                                                        <option>Android</option>
                                                        <option>PHP</option>
                                                        <option>Development</option>
                                                        <option>Laravel</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Job_Tags']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Skill Requirements</label>
                                                <div class="form-group">
                                                    <select class="skill-option-field" multiple="multiple" name="Skill_Requirement[]">
                                                     <option value = "" name ="Skill_Requirement" id ="skill Requirement">Choose Qualification</option>
                                                        <option>HTML5</option>
                                                        <option>CSS3</option>
                                                        <option>PHP</option>
                                                        <option>Javascript</option>
                                                        <option>Laravel</option>
                                                        <option>Photoshop</option>
                                                        <option>WordPress</option>
                                                        <option>Vuejs</option>
                                                        <option>React</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Skill_Requirement']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">No. Of Vacancy</label>
                                                <div class="form-group">
                                                    <span class="la la-clock-o form-icon"></span>
                                                    <input class="form-control" type="number" name="No_Of_Vaccency" id ="no_of_vaccency" value ="<?=@$jobs['No_Of_Vaccency']?>" placeholder="01, 02, 03">
                                                    <span class="mt-1 text-danger" ><?=@$errors['No_Of_Vaccency']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Application Deadline Date</label>
                                                <div class="form-group">
                                                    <span class="la la-calendar form-icon"></span>
                                                    <input class="date-range form-control" type="date" name="Application_Deadline" value ="<?=@$jobs['Application_Deadline']?>">
                                                    <span class="mt-1 text-danger" ><?=@$errors['Application_Deadline']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Job Description</label>
                                                <div class="form-group mb-0">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea class="message-control form-control" name="Job_Description" id ="job_description" value ="<?=@$jobs['Job_Description']?>" placeholder="Write your job description"></textarea>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Job_Description']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Tagline (optional)</label>
                                                <div class="form-group mb-0">
                                                    <span class="la la-pencil form-icon"></span>
                                                    <textarea class="message-control form-control" name="Tag_Line" value ="<?=@$jobs['Tag_Line']?>" id ="tag_Line " placeholder="Briefly describe about your company"></textarea>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Tag_Line']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                    </div><!-- end row -->
                            </div><!-- end contact-form-action -->
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                    <div class="billing-form-item">
                        <div class="billing-title-wrap">
                            <h3 class="widget-title pb-0">Company Details</h3>
                            <div class="title-shape margin-top-10px"></div>
                        </div><!-- billing-title-wrap -->
                        <div class="billing-content">
                            <div class="contact-form-action">
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="input-box">
                                          <label class="label-text">COMPANY INFORMATION</label>
                                          <div class="form-group">
                                             <div class="job-alert">
                                               <div class="radio-option d-inline-block">
                                                  <label class="radio-trigger font-weight-medium mb-3">
                                                  <input type="radio"  name="type" onclick="show_hide_company('existing')" checked="" value="exist">
                                                  <span class="checkmark"></span>
                                                  <span class="color-text-3">Select Existing Company</span>
                                                  </label>
                                               </div>
                                                <div class="radio-option d-inline-block mr-4">
                                                   <label class="radio-trigger font-weight-medium mb-3">
                                                   <input type="radio"  name="type" onclick="show_hide_company('new')" value="create_new">
                                                   <span class="checkmark"></span>
                                                   <span class="color-text-3">Create New Company</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                      </div>
                                      <div id="new_company_details" class="row col-md-12">
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Company Name</label>
                                                <div class="form-group">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <input class="form-control" type="text" value ="<?=@$jobs['Company_name']?>" name="Company_name"  id = "company_name" placeholder="Company name">
                                                    <span class="mt-1 text-danger" ><?=@$errors['Company_name']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Phone Number</label>
                                                <div class="form-group">
                                                    <i class="la la-phone form-icon"></i>
                                                    <input class="form-control" type="number" value ="<?=@$jobs['Company_phone_no']?>" name="Company_phone_no" id="phone_no" placeholder="Phone number">
                                                    <span class="mt-1 text-danger" ><?=@$errors['Company_phone_no']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Location</label>
                                                <div class="form-group">
                                                    <select class="location-option-field" name="location">
                                                        <option value = ""  name = "location" id ="locate">Location</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua &amp; Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AC">Ascension Island</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BA">Bosnia &amp; Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="BQ">Caribbean Netherlands</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo - Brazzaville</option>
                                                        <option value="CD">Congo - Kinshasa</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d’Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czechia</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="SZ">Eswatini</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong SAR China</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="XK">Kosovo</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao SAR China</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar (Burma)</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="MK">North Macedonia</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territories</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn Islands</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">São Tomé &amp; Príncipe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="BL">St. Barthélemy</option>
                                                        <option value="SH">St. Helena</option>
                                                        <option value="KN">St. Kitts &amp; Nevis</option>
                                                        <option value="LC">St. Lucia</option>
                                                        <option value="MF">St. Martin</option>
                                                        <option value="PM">St. Pierre &amp; Miquelon</option>
                                                        <option value="VC">St. Vincent &amp; Grenadines</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad &amp; Tobago</option>
                                                        <option value="TA">Tristan da Cunha</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks &amp; Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US">United States</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican City</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis &amp; Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['location']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">City</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="text" name="City_name" value ="<?=@$jobs['City_name']?>" placeholder="Enter city name">
                                                    <span class="mt-1 text-danger" ><?=@$errors['City_name']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Headquarters</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="text" name="headquarter" value ="<?=@$jobs['headquarter']?>" placeholder="Enter Headquarters">
                                                    <span class="mt-1 text-danger" ><?=@$errors['headquarter']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Email</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="text" name="email_address" value ="<?=@$jobs['email_address']?>" placeholder="Enter Email Address">
                                                    <span class="mt-1 text-danger" ><?=@$errors['email_address']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Country</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="text" name="country" value ="<?=@$jobs['country']?>" placeholder="Enter Country">
                                                    <span class="mt-1 text-danger" ><?=@$errors['country']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Industry</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="text" name="industry" value ="<?=@$jobs['industry']?>" placeholder="Enter Industry">
                                                    <span class="mt-1 text-danger" ><?=@$errors['industry']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-4 column-lg-full">
                                            <div class="input-box">
                                                <label class="label-text">Founded in</label>
                                                <div class="form-group">
                                                    <span class="la la-map form-icon"></span>
                                                    <input class="form-control" type="date" name="founded_in" value ="<?=@$jobs['founded_in']?>" placeholder="Enter Founded Date">
                                                    <span class="mt-1 text-danger" ><?=@$errors['founded_in']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-4 -->
                                        <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Complete Address</label>
                                                <div class="form-group">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <input class="form-control" type="text"  name="Company_address" value ="<?=@$jobs['Company_address']?>" id ="company_address" placeholder="Krakowskie Przedmiescie 12/1200-041 Warsaw">
                                                    <span class="mt-1 text-danger" ><?=@$errors['Company_address']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                      </div>

                                      <div id="existing_company_details">
                                        <div class="col-md-12">
                                            <div class="">
                                                <label class="label-text">Select Company</label>
                                                <div class="form-group ">
                                                    <span class="la la-map-marker form-icon"></span>
                                                    <select class="category-option-field" name="company_id">
                                                      <option> -- select company -- </option>
                                                      <?php foreach($companies as $company) { ?>
                                                        <?php
                                                        $selected = "";
                                                        if(@$jobs['company_id'] == $company->id) {
                                                          $selected = "selected";
                                                        }
                                                        ?>
                                                        <option value="<?=$company->id?>" <?=$selected?>><?=$company->name?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <span class="mt-1 text-danger" ><?=@$errors['Company_address']?></span>
                                                </div>
                                            </div>
                                        </div><!-- end col-lg-12 -->
                                      </div>

                                    </div><!-- end row -->
                            </div><!-- end contact-form-action -->
                        </div><!-- end billing-content -->
                    </div><!-- end billing-form-item -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="custom-checkbox mr-0">
                            <div>
                                <input type="checkbox" id="chb1">
                                <label for="chb1">By Submitting Job You Confirm That You Accept The
                                    <a href="terms-and-condition.html" class="color-text">Terms & Conditions</a> And <a href="#" class="color-text">Privacy Policy</a>
                                    <span class="mt-1 text-danger" ></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box mt-4">
                        <button type="submit" name ="post_job" value ="post_job" class="theme-btn border-0"><i class="la la-plus"></i> Submit Your Job</button>
                    </div><!-- end btn-box -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
          </form>
        </div><!-- end container-fluid -->
    </div>
</section><!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->
<script>
  $('document').ready(function() {
    $('#new_company_details').hide();
  });

  function show_hide_company(type) {
    if(type == 'existing') {
      $('#existing_company_details').show();
      $('#new_company_details').hide();
    } else {
      $('#existing_company_details').hide();
      $('#new_company_details').show();
    }
  }
</script>
