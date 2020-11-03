<style>
   .error {
   border-color: red !important;
   }
</style>
<!-- ================================
   START BREADCRUMB AREA
   ================================= -->
<section class="breadcrumb-area">
   <div class="breadcrumb-wrap">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                  <div class="section-heading">
                     <h2 class="sec__title mb-0">Sign Up</h2>
                  </div>
                  <!-- end section-heading -->
                  <ul class="list-items d-flex align-items-center">
                     <li class="active__list-item"><a href="index.html">Home</a></li>
                     <li class="active__list-item">Pages</li>
                     <li>Sign Up</li>
                  </ul>
               </div>
               <!-- end breadcrumb-content -->
            </div>
            <!-- end col-lg-12 -->
         </div>
         <!-- end row -->
      </div>
      <!-- end container -->
   </div>
   <!-- end breadcrumb-wrap -->
</section>
<!-- end breadcrumb-area -->
<!-- ================================
   END BREADCRUMB AREA
   ================================= -->
<!-- ================================
   START FORM AREA
   ================================= -->
<section class="form-shared padding-top-100px padding-bottom-100px">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 mx-auto">
            <div class="user-action-form">
               <div class="tab-shared tab-shared-3">
                  <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link theme-btn <?=($page == 'signup')?' active':''?>" id="signup-tab" data-toggle="tab" href="#signup-nav" role="tab" aria-controls="signup-nav" aria-selected="false">
                        <i class="la la-user"></i> Register Account
                        </a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link theme-btn <?=($page == 'login')?'show  active':''?>" id="login-tab" data-toggle="tab" href="#login-nav" role="tab" aria-controls="login-nav" aria-selected="true">
                        <i class="la la-sign-in"></i> Login to Account
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade <?=($page == 'signup')?'show  active':''?>" id="signup-nav" role="tabpanel" aria-labelledby="signup-tab">
                     <div class="billing-form-item mb-0">
                        <div class="billing-title-wrap border-bottom-0 text-center">
                           <h3 class="widget-title font-size-28 pb-2">Create Your Account!</h3>
                           <p>Create an account to get recommended jobs that matches
                              <br> your resume and apply to multiple jobs in seconds! <br>
                              <strong class="color-text-2 font-weight-medium">Already have an account? <a href="login.html" class="color-text">Sign In</a></strong>
                           </p>
                        </div>
                        <!-- billing-title-wrap -->
                        <div class="billing-content">
                           <div class="contact-form-action">
                              <form  action = "<?php site_url("users/signup") ?>" method="post" enctype="multipart/form-data" id="signup_form">
                                 <div class="input-box">
                                    <label class="label-text">First name</label>
                                    <div class="form-group">
                                       <i class="la la-user form-icon"></i>
                                       <input class="form-control" type="text" id="f_name" name="f_name" placeholder="First name" value="<?=@$users ['f_name']?>" />
                                       <span class="mt-1 text-danger" id="f_name_err"></span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="input-box">
                                    <label class="label-text">Last name</label>
                                    <div class="form-group">
                                       <i class="la la-user form-icon"></i>
                                       <input class="form-control" type="text" id="l_name" name="l_name" placeholder="Last name" value="<?=@$users['l_name']?>" />
                                       <span class="mt-1 text-danger" id="l_name_err"></span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="input-box">
                                    <label class="label-text">Email</label>
                                    <div class="form-group">
                                       <i class="la la-envelope-o form-icon"></i>
                                       <input class="form-control" type="text" id="email" name="email" placeholder="Enter email address" value="<?=@$users['email']?>" />
                                       <span class="mt-1 text-danger" id="email_err"></span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="input-box">
                                    <label class="label-text">Password</label>
                                    <div class="form-group">
                                       <i class="la la-lock form-icon"></i>
                                       <input class="form-control" type="password" id="password" name="password" placeholder="Password" value="<?=@$users['password']?>" />
                                       <span class="mt-1 text-danger" id="password_err"></span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="input-box">
                                    <label class="label-text">Confirm Password</label>
                                    <div class="form-group">
                                       <i class="la la-lock form-icon"></i>
                                       <input class="form-control" type="password" id="c_password" name="c_password" placeholder="Confirm password" value="<?=@$users['c_password']?>" />
                                       <span class="mt-1 text-danger" id="c_password_err"></span>
                                    </div>
                                 </div>
                                 <div class="input-box">
                                    <label class="label-text">Account Type</label>
                                    <div class="form-group">
                                       <div class="job-alert">
                                          <div class="radio-option d-inline-block mr-4">
                                             <label for="radio-3" class="radio-trigger font-weight-medium mb-3">
                                             <input type="radio" id="radio-3" name="type" checked="" value="candidate">
                                             <span class="checkmark"></span>
                                             <span class="color-text-3">Candidate</span>
                                             </label>
                                          </div>
                                          <div class="radio-option d-inline-block">
                                             <label for="radio-4" class="radio-trigger font-weight-medium mb-3">
                                             <input type="radio" id="radio-4" name="type" value="employer">
                                             <span class="checkmark"></span>
                                             <span class="color-text-3">Employer</span>
                                             </label>
                                          </div>
                                       </div>
                                       <span class="mt-1 text-danger" id="email_updates_err"></span>
                                       <span class="font-size-15">Zobstar will automatically email job postings that are relevant to you. You can unsubscribe on the Manage Saved Searches page or with the opt-out link in the email.</span>
                                    </div>
                                 </div>

                                 <!-- input-box -->
                                 <div class="input-box">
                                    <label class="label-text">Email me career-related Zobstar updates and job opportunities</label>
                                    <div class="form-group">
                                       <div class="job-alert">
                                          <div class="radio-option d-inline-block mr-4">
                                             <label for="radio-1" class="radio-trigger font-weight-medium mb-3">
                                             <input type="radio" id="radio-1" name="email_updates" checked="">
                                             <span class="checkmark"></span>
                                             <span class="color-text-3">Yes</span>
                                             </label>
                                          </div>
                                          <div class="radio-option d-inline-block">
                                             <label for="radio-2" class="radio-trigger font-weight-medium mb-3">
                                             <input type="radio" id="radio-2" name="email_updates">
                                             <span class="checkmark"></span>
                                             <span class="color-text-3">No</span>
                                             </label>
                                          </div>
                                       </div>
                                       <span class="mt-1 text-danger" id="email_updates_err"></span>
                                       <span class="font-size-15">Zobstar will automatically email job postings that are relevant to you. You can unsubscribe on the Manage Saved Searches page or with the opt-out link in the email.</span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="input-box">
                                    <div class="form-group">
                                       <div class="custom-checkbox d-block mr-0">
                                          <input type="checkbox" id="chb3" name="i_agree_pp">
                                          <label for="chb3">I Agree to Zobstar's <a href="#" class="color-text">Privacy Policy</a></label>
                                       </div>
                                       <!-- end custom-checkbox -->
                                       <span class="mt-1 text-danger" id="i_agree_pp_err"></span>
                                       <div class="custom-checkbox d-block mr-0">
                                          <input type="checkbox" id="chb4" name="i_agree_tos">
                                          <label for="chb4">I Agree to Zobstar's <a href="#" class="color-text">Terms of Services</a></label>
                                       </div>
                                       <!-- end custom-checkbox -->
                                       <span class="mt-1 text-danger" id="i_agree_tos_err"></span>
                                    </div>
                                 </div>
                                 <!-- input-box -->
                                 <div class="btn-box margin-top-30px">
                                    <button class="theme-btn border-0" type="submit" name="signup" value = "signup">Create Account</button>
                                 </div>
                              </form>
                           </div>
                           <!-- end contact-form-action -->
                        </div>
                        <!-- end billing-content -->
                     </div>
                     <!-- end billing-form-item -->
                  </div>
                  <!-- end tab-pane -->

                  <!-- login page starts from here -->
                  <div class="tab-pane fade <?=($page == 'login')?'show  active':''?>" id="login-nav" role="tabpanel" aria-labelledby="login-tab">
                            <div class="billing-form-item mb-0">
                                <div class="billing-title-wrap border-bottom-0 text-center">
                                    <h3 class="widget-title font-size-28 pb-2">Login to Your Account</h3>
                                    <p>with your social network, Note: Zobstar will never <br> post content to your social pages.</p>
                                </div><!-- billing-title-wrap -->
                                <div class="billing-content">
                                    <div class="contact-form-action">
                                    <form  action = "<?php site_url("users/login") ?>" method="post" enctype="multipart/form-data" id="login_form">
                                            <div class="row">
                                                <div class="col-lg-4 column-td-6">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-7 border-0 w-100" type="submit">
                                                            <i class="fa fa-google mr-2"></i> Google
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4 column-td-6">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-5 border-0 w-100" type="submit">
                                                            <i class="fa fa-facebook-f mr-2"></i> Facebook
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-4 column-td-6">
                                                    <div class="form-group">
                                                        <button class="theme-btn bg-6 border-0 w-100" type="submit">
                                                            <i class="fa fa-twitter mr-2"></i> Twitter
                                                        </button>
                                                    </div>
                                                </div><!-- end col-lg-4 -->
                                                <div class="col-lg-12">
                                                    <div class="account-assist mt-4 mb-4 text-center">
                                                        <p class="account__desc">or</p>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Email Address</label>
                                                        <div class="form-group">
                                                            <i class="la la-user form-icon"></i>
                                                            <input class="form-control" type="text" id="email_login" name="email" placeholder="Enter email address" value="<?=@$users['email']?>" />
                                                            <span class="mt-1 text-danger" id="email_login_err"></span>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="input-box">
                                                        <label class="label-text">Password</label>
                                                        <div class="form-group">
                                                            <i class="la la-lock form-icon"></i>
                                                            <input class="form-control" type="password" id="password_login" name="password" placeholder="Password" value="<?=@$users['password']?>" />

                                                            <span class="mt-1 text-danger" id="password_login_err"></span>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <div class="custom-checkbox mr-0 d-flex align-items-center justify-content-between">
                                                            <div>
                                                                <input type="checkbox" id="chb1">
                                                                <label for="chb1">Keep me logged in</label>
                                                            </div>
                                                            <div>
                                                                <a href="recover.html" class="color-text">Forgot password?</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <div class="btn-box margin-top-20px margin-bottom-20px">
                                                        <button class="theme-btn border-0" type="submit">Login Account</button>
                                                    </div>
                                                </div><!-- end col-lg-12 -->
                                                <div class="col-lg-12">
                                                    <p>Don't have an account? <a href="sign-up.html" class="color-text"> Create Account</a></p>
                                                </div><!-- end col-lg-12 -->
                                            </div><!-- end row -->
                                        </form>
                                    </div><!-- end contact-form-action -->
                                </div><!-- end billing-content -->
                            </div><!-- end billing-form-item -->
                        </div>
                  <!-- end tab-pane -->
               </div>
               <!-- end tab-content -->
            </div>
         </div>
         <!-- end col-lg-6 -->
      </div>
      <!-- end row -->
   </div>
   <!-- end container -->
</section>
<!-- end form-shared -->
<!-- ================================
   START FORM AREA
   ================================= -->
<div class="section-block"></div>
<script>
  $('document').ready(function() {

  $('#signup_form').submit(function(e) {
    e.preventDefault();
    let data = $(this).serializeArray();

    $.ajax({
      url: "<?= site_url('users/signup') ?>",
      type: 'POST',
      data: data,
      success: function(response) {
        let resp = JSON.parse(response);
        if(resp.type == "error") {

          // first Name
          if(resp.errors.f_name) {
            $('#f_name').addClass('error');
            $('#f_name_err').text(resp.errors.f_name);
          } else {
            $('#f_name').removeClass('error');
            $('#f_name_err').text('');
          }

          //last name
          if (resp.errors.l_name){//it means if  response type is error of last name so,
              $('l_name').addClass('error');//add a class means you simple add that last name errors
              $('#l_name_err').text(resp.errors.l_name);// means to print the error in  the span
          }
          else{
              $("#l_name").removeClass('error');//first to remove a error class then
              $("#l_name_err").text('');//if you didn't found an error in response then you shows nothing
          }

          //email
          if (resp.errors.email){//it means if  response type is error of last name so,
              $('#email').addClass('error');//add a class means you simple add that last name errors
              $('#email_err').text(resp.errors.email);// means to print the error in  the span
          }
          else{
              $('#email').removeClass('error');
              $('#email_err').text('');
          }
          //password
          if (resp.errors.password){
              $('#password').addClass('error');
              $('#password_err').text(resp.errors.password);
          }
          else{
              $('#password').removeClass('error');
              $('#password_err').text('')
          }
          //confirm password
          if (resp.errors.c_password){
              $('#c_password').addClass('error');
              $('#c_password_err').text(resp.errors.c_password);
          }
          else{
              $('#c_password').removeClass('error');
              $('#c_password_err').text('');
          }


          if(resp.errors.i_agree_pp) {
            $('#i_agree_pp_err').text(resp.errors.i_agree_pp);
          } else {
            $('#i_agree_pp_err').text('');
          }

          if(resp.errors.i_agree_tos) {
            $('#i_agree_tos_err').text(resp.errors.i_agree_tos);
          } else {
            $('#i_agree_tos_err').text('');
          }

        } else {
          // success
          alert(resp.msg);
          window.location.reload();
        }
      }
    })
  });

 });
</script>
<script>
  $('document').ready(function() {

  $('#login_form').submit(function(e) {
  e.preventDefault();

  let data1 = $(this).serializeArray();

    $.ajax({
      url: "<?= site_url('users/login') ?>",
      type: 'POST',
      data: data1,
      success: function(response) {
       let resp = JSON.parse(response);
       console.log(response);
        if(resp.type == "error") {
         if(resp.errors.email) {
          $('#email_login').addClass('error');
          $('#email_login_err').text(resp.errors.email);
         } else {
          $('#email_login').removeClass('error');
          $('#email_login_err').text('');
         }
         if (resp.errors.password){
            $('#password_login').addClass('error');
            $('#password_login_err').text(resp.errors.password);
         } else{
             $('#password_login').removeClass('error');
             $('#password_login_err').text('');
        }
      } else {
          // success
          alert(resp.msg);
          window.location = resp.redirect;
        }
      }
    })
  });

 });

</script>
