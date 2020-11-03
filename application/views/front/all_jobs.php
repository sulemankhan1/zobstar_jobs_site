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
                            <h2 class="sec__title mb-0">Job Listing</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.html">Home</a></li>
                            <li class="active__list-item">Pages</li>
                            <li>Job Listing</li>
                        </ul>
                    </div><!-- end breadcrumb-content -->
                </div><!-- end col-lg-12 -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end breadcrumb-wrap -->
</section><!-- end breadcrumb-area -->
<!-- ================================
    END BREADCRUMB AREA
================================= -->

<!-- ================================
    START CARD AREA
================================= -->
<section class="card-area padding-top-100px padding-bottom-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="generic-header margin-bottom-30px">
                    <!-- <p class="showing__text text-left">Showing 1 to 16 of 128 results</p> -->
                    <p class="showing__text text-left">Showing <?=count($records)?> results</p>
                    <div class="short-option mr-3">
                        <form action="<?=site_url('jobs/search')?>" method="get" id="sort_form">
                          <select class="short-option-field" name="sb">
                              <option value="newest" <?=($this->input->get('sb') == 'newest')?'selected':''?> >Newest</option>
                              <option value="oldest" <?=($this->input->get('sb') == 'oldest')?'selected':''?>>Oldest</option>
                              <option value="price-low-to-high" <?=($this->input->get('sb') == 'price-low-to-high')?'selected':''?>>Price: low to high</option>
                              <option value="price-high-to-low" <?=($this->input->get('sb') == 'price-high-to-low')?'selected':''?>>Price: high to low</option>
                              <option value="random-listing" <?=($this->input->get('sb') == 'random-listing')?'selected':''?>>Random</option>
                          </select>
                        </form>
                    </div><!-- end short-option -->
                    <div class="generic-nav-wrap">
                        <nav>
                            <div class="nav nav-tabs generic-nav" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="list-view-tab" data-toggle="tab" href="#list-view" role="tab" aria-controls="list-view" aria-selected="true">
                                    <span class="la la-list" data-toggle="tooltip" data-placement="top" title="List View"></span>
                                </a>
                                <a class="nav-item nav-link" id="grid-view-tab" data-toggle="tab" href="#grid-view" role="tab" aria-controls="grid-view" aria-selected="false">
                                    <span class="la la-th-large" data-toggle="tooltip" data-placement="top" title="Grid View"></span>
                                </a>
                            </div>
                        </nav>
                    </div>
                </div><!-- end generic-header -->
            </div><!-- col-lg-12 -->
            <div class="col-lg-3">
              <form action="<?=site_url('jobs/search')?>" method="get" id="search_form">
                <div class="sidebar mt-0">
                    <div class="sidebar-widget">
                      <?php if(!empty($this->input->get())) { ?>
                      <p>
                        <a href="<?=site_url('jobs')?>"> Clear Filters</a>
                      </p>
                      <br>
                    <?php } ?>
                        <h3 class="widget-title">Keywords</h3>
                        <div class="contact-form-action mb-4">
                            <div class="form-group">
                                <span class="la la-search form-icon"></span>
                                <input class="form-control" type="text" placeholder="Job title, keywords" name="q" value="<?=$this->input->get('q')?>">
                            </div>
                        </div>
                        <div class="sidebar-option mb-4">
                            <h3 class="widget-title">Category</h3>
                            <select class="category-option-field" name='category_id'>
                              <option value=""> -- select -- </option>
                              <?php foreach($categories as $category) { ?>
                                <?php
                                 $selected = "";
                                if(@$this->input->get('category_id') == $category->id) {
                                  $selected = "selected";
                                     }
                                      ?>
                                      <option value="<?=$category->id?>" <?=$selected?>><?=$category->name?></option>
                                  <?php } ?>
                            </select>
                        </div><!-- end sidebar-option -->
                        <div class="sidebar-option">
                            <h3 class="widget-title">Location</h3>
                            <select class="location-option-field" name="location">
                              <option value=""> -- select country -- </option>
                              <?php foreach($countries as $country) { ?>
                                <?php
                                $selected = "";
                                if($this->input->get('location') == $country->iso) {
                                  $selected = "selected";
                                } ?>
                                <option value="<?=$country->iso?>" <?=$selected?>><?=$country->nicename?></option>
                              <?php } ?>
                            </select>
                        </div><!-- end sidebar-option -->
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Filter by Salary</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div id=""></div><!-- end slider-range -->
                                <div class="">
                                    <label for="amount" class="filter__label">Price:</label>
                                    <!-- <input type="text" id="amount" class="amounts" name="salary_range" readonly> -->
                                    <input type="range" name="salary_range" min="0" max="99" value="<?=($this->input->get('salary_range') != "")?$this->input->get('salary_range'):0;?>" id="slider">
                                    <span id="range_number"><?=($this->input->get('salary_range') != "")?$this->input->get('salary_range'):0;?></span>k
                                </div><!-- end price-slider-amount -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Date Posted</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-1" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-1" name="date_posted" value="last_hour" <?=($this->input->get('date_posted') == "last_hour")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">Last Hour</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-2" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-2" name="date_posted" value="last_24_hour" <?=($this->input->get('date_posted') == "last_24_hour")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">Last 24 hours</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-3" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-3" name="date_posted" value="last_7_days" <?=($this->input->get('date_posted') == "last_7_days")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">Last 7 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-4" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-4" name="date_posted" value="last_14_days" <?=($this->input->get('date_posted') == "last_14_days")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">Last 14 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-5" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-5" name="date_posted" value="last_30_days" <?=($this->input->get('date_posted') == "last_30_days")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">Last 30 days</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-option">
                                            <label for="radio-6" class="radio-trigger font-size-15 font-weight-medium">
                                                <input type="radio" class="radio" id="radio-6" name="date_posted" value="all" <?=($this->input->get('date_posted') == "all" || $this->input->get('date_posted') == "")?"checked":"";?>>
                                                <span class="checkmark"></span>
                                                <span class="color-text-3">All</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Job Type</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content" id = "Job_Type" >
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_full_time" id="chb1" <?=($this->input->get('jt_full_time') != "")?"checked":"";?>>
                                            <label for="chb1" class="font-weight-medium">Full Time</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_part_time" id="chb2" <?=($this->input->get('jt_part_time') != "")?"checked":"";?>>
                                            <label for="chb2" class="font-weight-medium">Part Time</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_freelance" id="chb3" <?=($this->input->get('jt_freelance') != "")?"checked":"";?>>
                                            <label for="chb3" class="font-weight-medium">Freelance</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_temporary" id="chb4" <?=($this->input->get('jt_temporary') != "")?"checked":"";?>>
                                            <label for="chb4" class="font-weight-medium">Temporary</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_Permanent" id="chb5" <?=($this->input->get('jt_Permanent') != "")?"checked":"";?>>
                                            <label for="chb5" class="font-weight-medium">Permanent</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="jt_Internship" id="chb6" <?=($this->input->get('jt_Internship') != "")?"checked":"";?>>
                                            <label for="chb6" class="font-weight-medium">Internship</label>
                                        </div>
                                    </li>

                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Career Level</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content" id = "career_Level">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="cl_manager" id="chb7" <?=($this->input->get('cl_manager') != "")?"checked":"";?>>
                                            <label for="chb7" class="font-weight-medium">Manager (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="cl_officer" id="chb8" <?=($this->input->get('cl_officer') != "")?"checked":"";?>>
                                            <label for="chb8" class="font-weight-medium">Officer (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="cl_student" id="chb9" <?=($this->input->get('cl_student') != "")?"checked":"";?>>
                                            <label for="chb9" class="font-weight-medium">Student (9)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="cl_executive" id="chb10" <?=($this->input->get('cl_executive') != "")?"checked":"";?>>
                                            <label for="chb10" class="font-weight-medium">Executive (8)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="cl_others" id="chb11" <?=($this->input->get('cl_others') != "")?"checked":"";?>>
                                            <label for="chb11" class="font-weight-medium">Others (7)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Experience</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_fresh" id="chb12" <?=($this->input->get('cl_others') != "")?"checked":"";?>>
                                            <label for="chb12" class="font-weight-medium">Fresh (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_lt_1" id="chb13" <?=($this->input->get('exp_lt_1') != "")?"checked":"";?>>
                                            <label for="chb13" class="font-weight-medium">Less Than 1 Year (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_2_years" id="chb14" <?=($this->input->get('exp_2_years') != "")?"checked":"";?>>
                                            <label for="chb14" class="font-weight-medium">2 Years(6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_3_years" id="chb15" <?=($this->input->get('exp_3_years') != "")?"checked":"";?>>
                                            <label for="chb15" class="font-weight-medium">3 Years(3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_4_years" id="chb16" <?=($this->input->get('exp_4_years') != "")?"checked":"";?>>
                                            <label for="chb16" class="font-weight-medium">4 Years(5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_5_years" id="chb17" <?=($this->input->get('exp_5_years') != "")?"checked":"";?>>
                                            <label for="chb17" class="font-weight-medium">5 Years(2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_6_years" id="chb18" <?=($this->input->get('exp_6_years') != "")?"checked":"";?>>
                                            <label for="chb18" class="font-weight-medium">6 Years(2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_7_years" id="chb19" <?=($this->input->get('exp_7_years') != "")?"checked":"";?>>
                                            <label for="chb19" class="font-weight-medium">7 Years(4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="exp_8_years" id="chb20" <?=($this->input->get('exp_8_years') != "")?"checked":"";?>>
                                            <label for="chb20" class="font-weight-medium">8 Years +(3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Gender</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="gender_m" id="chb21" <?=($this->input->get('gender_m') != "")?"checked":"";?>>
                                            <label for="chb21" class="font-weight-medium">Male (19)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="gender_f" id="chb22" <?=($this->input->get('gender_f') != "")?"checked":"";?>>
                                            <label for="chb22" class="font-weight-medium">Female (30)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Industry</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>

                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_IT_Contractor" id="chb24" <?=($this->input->get('ind_IT_Contractor') != "")?"checked":"";?>>
                                            <label for="chb24" class="font-weight-medium">IT Contractor</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Accountancy" id="chb25" <?=($this->input->get('ind_Accountancy') != "")?"checked":"";?>>
                                            <label for="chb25" class="font-weight-medium">Accountancy</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Banking" id="chb26" <?=($this->input->get('ind_Banking') != "")?"checked":"";?>>
                                            <label for="chb26" class="font-weight-medium">Banking</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Charity_Voluntary" id="chb27" <?=($this->input->get('ind_Charity_Voluntary') != "")?"checked":"";?>>
                                            <label for="chb27" class="font-weight-medium">Charity & Voluntary</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Digital_Creative" id="chb28" <?=($this->input->get('ind_Digital & Creative') != "")?"checked":"";?>>
                                            <label for="chb28" class="font-weight-medium">Digital & Creative</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Legal_jobs" id="chb29" <?=($this->input->get('ind_Legal jobs') != "")?"checked":"";?>>
                                            <label for="chb29" class="font-weight-medium">Legal jobs</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Leisure_Tourism" id="chb30" <?=($this->input->get('ind_Leisure_Tourism') != "")?"checked":"";?>>
                                            <label for="chb30" class="font-weight-medium">Leisure & Tourism</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Media" id="chb31" <?=($this->input->get('ind_Media') != "")?"checked":"";?>>
                                            <label for="chb31" class="font-weight-medium">Media</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Marketing_PR" id="chb32" <?=($this->input->get('ind_Marketing_PR') != "")?"checked":"";?>>
                                            <label for="chb32" class="font-weight-medium">Marketing & PR</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Motoring_Automotive" id="chb33" <?=($this->input->get('ind_Motoring_Automotive') != "")?"checked":"";?>>
                                            <label for="chb33" class="font-weight-medium">Motoring & Automotive</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Retail" id="chb34" <?=($this->input->get('ind_Retail') != "")?"checked":"";?>>
                                            <label for="chb34" class="font-weight-medium">Retail</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="ind_Sales_Marketing" id="chb35" <?=($this->input->get('ind_Sales_Marketing') != "")?"checked":"";?>>
                                            <label for="chb35" class="font-weight-medium">Sales & Marketing</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Qualification</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_no_Experience" id="chb36" <?=($this->input->get('qlf_no_Experience') != "")?"checked":"";?>>
                                            <label for="chb36" class="font-weight-medium">No Experience</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_matriculation" id="chb37" <?=($this->input->get('qlf_matriculation') != "")?"checked":"";?>>
                                            <label for="chb37" class="font-weight-medium">Matriculation</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_intermediate" id="chb38" <?=($this->input->get('qlf_intermediate') != "")?"checked":"";?>>
                                            <label for="chb38" class="font-weight-medium">Intermediate</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_diploma" id="chb39" <?=($this->input->get('qlf_diploma') != "")?"checked":"";?>>
                                            <label for="chb39" class="font-weight-medium">Diploma</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_graduate" id="chb40" <?=($this->input->get('qlf_graduate') != "")?"checked":"";?>>
                                            <label for="chb40" class="font-weight-medium">Graduate</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_certificate" id="chb41" <?=($this->input->get('qlf_certificate') != "")?"checked":"";?>>
                                            <label for="chb41" class="font-weight-medium">Certificate</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_master_degree" id="chb42" <?=($this->input->get('qlf_master_degree') != "")?"checked":"";?>>
                                            <label for="chb42" class="font-weight-medium">Master's Degree</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_associate_degree" id="chb43" <?=($this->input->get('qlf_associate_degree') != "")?"checked":"";?>>
                                            <label for="chb43" class="font-weight-medium">Associate Degree</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_bachelor_degree" id="chb44" <?=($this->input->get('qlf_bachelor_degree') != "")?"checked":"";?>>
                                            <label for="chb44" class="font-weight-medium">Bachelor's Degree</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" class="checkbox" name="qlf_Doctorate_Degree" id="chb45" <?=($this->input->get('qlf_doctorate_degree') != "")?"checked":"";?>>
                                            <label for="chb45" class="font-weight-medium">Doctorate Degree</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
              </form>
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
                <div class="jobs-wrapper">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade active show" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                            <div class="job-content">
                              <?php foreach($records as $record) { ?>
                                <div class="job-card job-card-layout">
                                    <div class="job-card-details d-flex align-items-center justify-content-between">
                                        <div class="card-head d-flex align-items-center">
                                            <div class="company-avatar mr-3">
                                                <a href="employer-details.html" class="d-block">

                                                <?php if($record->company_Logo != "" && file_exists('uploads/'.$record->company_Logo)) { ?>
                                                    <img src="<?=base_url('uploads/'.$record->company_Logo)?>" width="100" />
                                                  <?php } else { ?>
                                                    <img src="<?=base_url('assets/images/default.jpg')?>" width="100" />
                                                  <?php } ?>
                                                </a>
                                            </div>
                                            <div class="company-title-box">
                                                <!-- <p class="card-sub mb-1 font-weight-medium">23 Days Ago</p> -->
                                                <p class="card-sub mb-1 font-weight-medium"><?=date('d M Y', strtotime($record->created_at))?></p>
                                                <h4 class="card-title mb-1"><a href="job-details.html"> <?=$record->Job_Title?></a> </h4>
                                                <p class="card-sub">
                                                    <span class="mr-2"><i class="la la-building-o color-text-2"></i> <?=$record->company_name?></span>
                                                    <span class="mr-2"><i class="la la-map-marker color-text-2"></i> <?=$record->company_address?></span>
                                                    <span class="mr-2"><i class="la la-clock-o color-text-2"></i> <?=$record->Job_Type?></span>
                                                    <span>$<?=$record->min_salary?> - $<?=$record->max_salary?>/hr</span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="job-details.html" class="theme-btn">Apply Now</a>
                                        </div>
                                    </div>
                                </div><!-- end job-card -->
                              <?php } ?>


                            </div><!-- end job-content -->
                        </div><!-- end tab-pane -->
                        <div class="tab-pane fade" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                            <div class="job-content">
                                <div class="row">
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
	v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
	c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">BlueTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Graphic Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#59480C;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#382D08;" d="M367.906,206.302c-2.807,1.784-5.794,4.539-8.959,8.257l-9.814-9.814h-40.662v3.953l-48.827-48.827
                                                                l-0.009,0.009c-2.399-2.373-4.972-4.509-7.732-6.391c-7.011-4.776-14.956-7.919-23.837-9.425c-8.88-1.504-22.356-2.26-40.427-2.26
                                                                H96.345v228.391l141.133,141.133c6.118,0.438,12.293,0.672,18.523,0.672c125.835,0,230.461-90.791,251.954-210.438l-92.299-92.299
                                                                c-9.245-5.504-18.851-8.257-28.821-8.257C379.77,201.005,373.46,202.773,367.906,206.302z"/>
                                                                <g>
                                                                <path style="fill:#E8BC1E;" d="M96.345,141.804h91.294c18.071,0,31.547,0.754,40.427,2.26c8.881,1.506,16.826,4.649,23.837,9.425
                                                                    c7.011,4.779,12.853,11.139,17.527,19.085c4.674,7.945,7.011,16.852,7.011,26.718c0,10.699-2.882,20.513-8.646,29.444
                                                                    c-5.764,8.933-13.581,15.632-23.447,20.097c13.917,4.051,24.615,10.959,32.093,20.72c7.478,9.764,11.217,21.242,11.217,34.43
                                                                    c0,10.387-2.414,20.487-7.244,30.302c-4.83,9.815-11.426,17.658-19.786,23.525c-8.361,5.869-18.671,9.479-30.924,10.827
                                                                    c-7.688,0.832-26.226,1.351-55.617,1.558H96.345V141.804z M142.459,179.818v52.814h30.224c17.968,0,29.133-0.258,33.495-0.779
                                                                    c7.892-0.935,14.099-3.661,18.617-8.179c4.517-4.518,6.777-10.462,6.777-17.839c0-7.062-1.948-12.799-5.842-17.215
                                                                    c-3.894-4.414-9.686-7.088-17.37-8.023c-4.572-0.519-17.709-0.779-39.415-0.779L142.459,179.818L142.459,179.818z M142.459,270.645
                                                                    v61.07h42.688c16.617,0,27.159-0.467,31.625-1.402c6.855-1.246,12.438-4.285,16.748-9.114c4.308-4.829,6.465-11.295,6.465-19.396
                                                                    c0-6.855-1.663-12.671-4.986-17.449c-3.325-4.776-8.129-8.257-14.411-10.439c-6.285-2.181-19.917-3.272-40.895-3.272h-37.235
                                                                    V270.645z"/>
                                                                    <path style="fill:#E8BC1E;" d="M352.249,370.196h-43.778V204.745h40.663v23.524c6.957-11.112,13.215-18.435,18.772-21.966
                                                                    c5.554-3.529,11.864-5.297,18.929-5.297c9.97,0,19.576,2.753,28.821,8.257l-13.553,38.169c-7.376-4.777-14.231-7.166-20.564-7.166
                                                                    c-6.129,0-11.323,1.689-15.579,5.063c-4.26,3.377-7.61,9.479-10.049,18.306c-2.442,8.83-3.661,27.317-3.661,55.463L352.249,370.196
                                                                    L352.249,370.196z"/>
                                                            </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">MuffinTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Executive, HR Operations</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                        <circle style="fill:#4F0A0A;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#260505;" d="M245.901,114.471c0,0-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625
                                                            c-14.163,47.886-44.851,104.54-44.851,104.54c-63.735,26.64-72.504,42.828-76.887,47.886c-2.87,3.312-7.861,18.265,0.098,26.453
                                                            l-0.003,0.003L234.233,511.07c7.177,0.604,14.433,0.931,21.767,0.931c106.526,0,197.844-65.071,236.403-157.628L258.441,120.409
                                                            l-0.039,0.039C252.254,115.027,245.901,114.471,245.901,114.471z"/>
                                                                <path style="fill:#FFFFFF;" d="M400.687,310.23c0,0-0.337-15.513-24.617-23.774s-77.899,0-77.899,0
                                                            c-19.4-17.039-45.694-58.846-45.694-58.846s8.507-19.159,15.344-56.316c9.947-54.058-21.92-56.822-21.92-56.822
                                                            s-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625c-14.163,47.886-44.851,104.54-44.851,104.54
                                                            c-63.735,26.64-72.504,42.828-76.887,47.886c-4.384,5.059-13.724,37.294,25.73,31.055s74.762-80.121,74.762-80.121
                                                            c20.233-10.117,81.271-22.763,81.271-22.763s19.559,28.664,63.735,34.813C405.071,335.006,400.687,310.23,400.687,310.23z
                                                             M137.229,387.424c-9.495,4.464-18.472-1.445-19.732-6.726c-1.62-6.789,4.988-17.973,17.616-26.097
                                                            c25.331-16.3,49.869-25.745,49.869-25.745S167.486,373.2,137.229,387.424z M226.953,133.44c2.78-10.117,13.106-13.097,17.937-10.623
                                                            c6.211,3.182,10.415,15.473,8.38,30.35c-4.081,29.845-12.853,54.631-12.853,54.631S218.092,165.679,226.953,133.44z M219.935,306.52
                                                            c14.5-22.932,30.013-69.468,30.013-69.468c8.43,16.187,40.13,53.439,40.13,53.439C271.53,291.322,219.935,306.52,219.935,306.52z
                                                             M365.11,320.852c-33.435-0.005-60.188-28.014-60.188-28.014s21.913-3.118,51.252-2.168c15.008,0.486,24.684,5.111,25.966,11.972
                                                            C383.137,307.978,381.634,320.855,365.11,320.852z"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">GoodLayer</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Art Production Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#263364;" cx="256" cy="256" r="256"/>
                                                                <path style="fill:#151F45;" d="M358.365,200.896c-3.076,1.955-6.348,4.972-9.815,9.046l-10.753-10.753h-44.549v74.864
                                                            L151.473,132.279h-50.524v248.182l130.349,130.349C239.427,511.588,247.665,512,256,512c125.879,0,230.536-90.853,251.978-210.563
                                                            l-97.297-97.297C394.909,194.75,373.92,191.013,358.365,200.896z"/>
                                                                <g>
                                                            <path style="fill:#C9E1F6;" d="M100.949,380.461V132.279h50.524V338.3h125.628v42.16H100.949V380.461z"/>
                                                                    <path style="fill:#C9E1F6;" d="M341.211,380.461h-47.963V199.19h44.55v25.774c7.622-12.175,14.479-20.197,20.568-24.067
                                                                c15.554-9.884,36.544-6.146,52.316,3.244l-14.85,41.818c-13.021-8.431-28.075-11.438-39.6-2.305
                                                                c-4.668,3.699-8.337,10.386-11.009,20.056C340.326,281.411,341.211,325.575,341.211,380.461z"/>
                                                        </g>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">ThemeGood</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Finance Manager & Health</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
                                                            v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
                                                            c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">TechyDevs</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">ACB Product Sales Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#2A2B46;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#1C1C2E;" d="M378.109,185.822l-2.539,3.533l-54.687-54.687c-3.281-4.153-6.851-8.18-10.746-12.076
                                                                c-25.901-25.901-60.338-40.166-96.966-40.165c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978
                                                                c0,35.021,13.046,68.034,36.827,93.504l-0.065,0.065l193.84,193.84c46.011-9.23,87.561-30.789,121.058-61.093l18.21-18.21
                                                                c29.289-32.375,50.401-72.278,60.116-116.456L391.733,196.951l-0.06,0.06C387.394,192.994,382.856,189.232,378.109,185.822z"/>
                                                                <g>
                                                                <path style="fill:#CBE8F2;" d="M304.576,128.17c11.874,11.874,21.195,25.699,27.705,41.09c6.738,15.932,10.156,32.86,10.156,50.314
                                                                    s-3.417,34.382-10.156,50.314c-6.51,15.392-15.832,29.217-27.705,41.09c-11.874,11.874-25.699,21.195-41.091,27.705
                                                                    c-15.932,6.738-32.86,10.156-50.314,10.156s-34.382-3.417-50.314-10.156c-15.392-6.51-29.217-15.832-41.09-27.705
                                                                    s-21.195-25.699-27.705-41.09c-6.738-15.932-10.156-32.86-10.156-50.314c0-17.454,3.417-34.382,10.156-50.314
                                                                    c6.511-15.393,15.832-29.217,27.705-41.09c11.874-11.874,25.699-21.195,41.09-27.705c15.932-6.738,32.86-10.156,50.314-10.156
                                                                    c17.454,0,34.382,3.417,50.314,10.156C278.877,106.976,292.703,116.296,304.576,128.17 M309.481,123.266
                                                                    c-24.648-24.648-58.698-39.893-96.31-39.893c-75.223,0-136.202,60.98-136.202,136.202c0,37.611,15.245,71.662,39.893,96.31
                                                                    c24.648,24.648,58.698,39.893,96.31,39.893c75.223,0,136.202-60.98,136.202-136.202
                                                                    C349.373,181.964,334.129,147.914,309.481,123.266L309.481,123.266z"/>

                                                                    <rect x="288.743" y="184.295" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 417.2786 548.3727)" style="fill:#CBE8F2;" width="66.937" height="6.941"/>

                                                                    <rect x="246.499" y="199.47" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 374.1807 560.8715)" style="fill:#CBE8F2;" width="113.503" height="6.941"/>

                                                                    <rect x="219.868" y="218.313" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 334.7657 582.2308)" style="fill:#CBE8F2;" width="136.198" height="6.941"/>

                                                                    <rect x="195.01" y="234.925" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 293.1472 598.2161)" style="fill:#CBE8F2;" width="150.917" height="6.941"/>

                                                                    <rect x="179.778" y="253.625" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 253.569 619.2219)" style="fill:#CBE8F2;" width="150.503" height="6.941"/>

                                                                    <rect x="167.7" y="271.864" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 213.5818 639.1373)" style="fill:#CBE8F2;" width="142.922" height="6.941"/>

                                                                    <rect x="156.21" y="288.454" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 171.9116 655.0569)" style="fill:#CBE8F2;" width="130.825" height="6.941"/>

                                                                    <rect x="136.107" y="299.903" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 125.1135 658.5698)" style="fill:#CBE8F2;" width="125.689" height="6.941"/>

                                                                    <rect x="156.433" y="324.796" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 91.7369 694.5314)" style="fill:#CBE8F2;" width="66.556" height="6.941"/>
                                                        </g>
                                                                <g>
                                                            <path style="fill:#00C6FD;" d="M204.411,390.563c-1.11-1.11-2.211-2.251-3.272-3.388l9.685-9.029
                                                                c0.955,1.025,1.948,2.053,2.95,3.054c4.612,4.612,9.629,8.876,14.911,12.675l-7.731,10.75
                                                                C215.092,400.41,209.527,395.679,204.411,390.563z M185.11,366.207c-4.639-7.483-8.56-15.449-11.655-23.679l12.394-4.66
                                                                c2.791,7.423,6.328,14.611,10.513,21.36L185.11,366.207z M243.811,417.852l5.469-12.059c7.155,3.244,14.693,5.811,22.411,7.631
                                                                l0.23,0.054l-3.212,12.847l1.597-6.387l-1.321,6.448l-0.216-0.046C260.179,424.322,251.781,421.467,243.811,417.852z
                                                                 M166.635,317.027c-1.427-8.687-1.993-17.553-1.687-26.352l13.233,0.462c-0.277,7.927,0.235,15.916,1.519,23.742L166.635,317.027z
                                                                 M294.957,429.852l0.466-13.233c7.927,0.28,15.915-0.23,23.742-1.513l2.143,13.067
                                                                C312.623,429.597,303.757,430.162,294.957,429.852z M168.434,264.581c0.013-0.061,0.028-0.121,0.042-0.181
                                                                c2.014-8.56,4.86-16.928,8.46-24.872l12.061,5.466c-3.252,7.178-5.824,14.745-7.643,22.489l-0.064,0.25l-5.143-1.423
                                                                L168.434,264.581z M346.812,421.358l-4.656-12.396c7.423-2.788,14.611-6.323,21.363-10.507l6.975,11.256
                                                                C363.009,414.348,355.041,418.266,346.812,421.358z M190.157,216.667c4.222-5.873,8.96-11.448,14.083-16.571
                                                                c1.098-1.098,2.231-2.192,3.365-3.249l9.031,9.684c-1.022,0.953-2.043,1.939-3.033,2.929c-4.619,4.619-8.89,9.644-12.694,14.936
                                                                L190.157,216.667z M391.464,393.687l-9.028-9.687c1.037-0.967,2.073-1.967,3.078-2.971c4.605-4.605,8.864-9.613,12.658-14.887
                                                                l10.749,7.734c-4.21,5.851-8.935,11.408-14.044,16.515C393.763,391.506,392.615,392.614,391.464,393.687z M235.548,192.065
                                                                l-6.982-11.252c7.482-4.642,15.447-8.565,23.676-11.66l4.662,12.394C249.483,184.339,242.298,187.878,235.548,192.065z
                                                                 M410.095,345.55c3.264-7.195,5.844-14.78,7.668-22.545l0.034-0.14l12.885,3.055l-0.03,0.127
                                                                c-2.017,8.588-4.877,16.996-8.497,24.974L410.095,345.55z M279.89,175.392l-2.149-13.066c8.684-1.429,17.55-1.998,26.351-1.694
                                                                l-0.458,13.234C295.703,173.592,287.714,174.104,279.89,175.392z M420.938,299.286c0.273-7.926-0.243-15.914-1.532-23.74
                                                                l13.066-2.153c1.431,8.687,2.004,17.552,1.7,26.351L420.938,299.286z M327.237,177.02l3.004-12.896l0.096,0.023
                                                                c8.579,2.015,16.954,4.86,24.906,8.461l-5.462,12.063c-7.17-3.247-14.727-5.814-22.459-7.63L327.237,177.02z M413.245,252.561
                                                                c-2.794-7.42-6.335-14.605-10.524-21.354l11.251-6.983c4.644,7.482,8.569,15.446,11.666,23.672L413.245,252.561z M370.381,196.576
                                                                l7.727-10.754c5.881,4.225,11.465,8.971,16.598,14.103c1.094,1.094,2.18,2.218,3.226,3.34l-9.683,9.032
                                                                c-0.941-1.01-1.919-2.022-2.906-3.009C380.716,204.661,375.682,200.384,370.381,196.576z"/>
                                                                    <path style="fill:#00C6FD;" d="M178.273,295.243c0-32.397,12.616-62.854,35.524-85.762s53.365-35.524,85.762-35.524
                                                                c17.106,0,31.306,3.285,45.805,8.936c-6.627-22.687-17.711-42.787-35.226-60.301c-25.901-25.901-60.338-40.166-96.966-40.165
                                                                c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978c0,36.632,14.266,71.073,40.169,96.977
                                                                c0.001,0.001,0,0,0.002,0.002c20.771,20.771,46.439,34.066,78.039,38.884C183.92,336.758,178.273,317.225,178.273,295.243z"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">Penske Media</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Senior Web Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_7" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
	v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
	c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">BlueTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Graphic Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_8" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#59480C;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#382D08;" d="M367.906,206.302c-2.807,1.784-5.794,4.539-8.959,8.257l-9.814-9.814h-40.662v3.953l-48.827-48.827
                                                                l-0.009,0.009c-2.399-2.373-4.972-4.509-7.732-6.391c-7.011-4.776-14.956-7.919-23.837-9.425c-8.88-1.504-22.356-2.26-40.427-2.26
                                                                H96.345v228.391l141.133,141.133c6.118,0.438,12.293,0.672,18.523,0.672c125.835,0,230.461-90.791,251.954-210.438l-92.299-92.299
                                                                c-9.245-5.504-18.851-8.257-28.821-8.257C379.77,201.005,373.46,202.773,367.906,206.302z"/>
                                                                <g>
                                                                <path style="fill:#E8BC1E;" d="M96.345,141.804h91.294c18.071,0,31.547,0.754,40.427,2.26c8.881,1.506,16.826,4.649,23.837,9.425
                                                                    c7.011,4.779,12.853,11.139,17.527,19.085c4.674,7.945,7.011,16.852,7.011,26.718c0,10.699-2.882,20.513-8.646,29.444
                                                                    c-5.764,8.933-13.581,15.632-23.447,20.097c13.917,4.051,24.615,10.959,32.093,20.72c7.478,9.764,11.217,21.242,11.217,34.43
                                                                    c0,10.387-2.414,20.487-7.244,30.302c-4.83,9.815-11.426,17.658-19.786,23.525c-8.361,5.869-18.671,9.479-30.924,10.827
                                                                    c-7.688,0.832-26.226,1.351-55.617,1.558H96.345V141.804z M142.459,179.818v52.814h30.224c17.968,0,29.133-0.258,33.495-0.779
                                                                    c7.892-0.935,14.099-3.661,18.617-8.179c4.517-4.518,6.777-10.462,6.777-17.839c0-7.062-1.948-12.799-5.842-17.215
                                                                    c-3.894-4.414-9.686-7.088-17.37-8.023c-4.572-0.519-17.709-0.779-39.415-0.779L142.459,179.818L142.459,179.818z M142.459,270.645
                                                                    v61.07h42.688c16.617,0,27.159-0.467,31.625-1.402c6.855-1.246,12.438-4.285,16.748-9.114c4.308-4.829,6.465-11.295,6.465-19.396
                                                                    c0-6.855-1.663-12.671-4.986-17.449c-3.325-4.776-8.129-8.257-14.411-10.439c-6.285-2.181-19.917-3.272-40.895-3.272h-37.235
                                                                    V270.645z"/>
                                                                    <path style="fill:#E8BC1E;" d="M352.249,370.196h-43.778V204.745h40.663v23.524c6.957-11.112,13.215-18.435,18.772-21.966
                                                                    c5.554-3.529,11.864-5.297,18.929-5.297c9.97,0,19.576,2.753,28.821,8.257l-13.553,38.169c-7.376-4.777-14.231-7.166-20.564-7.166
                                                                    c-6.129,0-11.323,1.689-15.579,5.063c-4.26,3.377-7.61,9.479-10.049,18.306c-2.442,8.83-3.661,27.317-3.661,55.463L352.249,370.196
                                                                    L352.249,370.196z"/>
                                                            </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">MuffinTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Executive, HR Operations</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_9" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                        <circle style="fill:#4F0A0A;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#260505;" d="M245.901,114.471c0,0-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625
                                                            c-14.163,47.886-44.851,104.54-44.851,104.54c-63.735,26.64-72.504,42.828-76.887,47.886c-2.87,3.312-7.861,18.265,0.098,26.453
                                                            l-0.003,0.003L234.233,511.07c7.177,0.604,14.433,0.931,21.767,0.931c106.526,0,197.844-65.071,236.403-157.628L258.441,120.409
                                                            l-0.039,0.039C252.254,115.027,245.901,114.471,245.901,114.471z"/>
                                                                <path style="fill:#FFFFFF;" d="M400.687,310.23c0,0-0.337-15.513-24.617-23.774s-77.899,0-77.899,0
                                                            c-19.4-17.039-45.694-58.846-45.694-58.846s8.507-19.159,15.344-56.316c9.947-54.058-21.92-56.822-21.92-56.822
                                                            s-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625c-14.163,47.886-44.851,104.54-44.851,104.54
                                                            c-63.735,26.64-72.504,42.828-76.887,47.886c-4.384,5.059-13.724,37.294,25.73,31.055s74.762-80.121,74.762-80.121
                                                            c20.233-10.117,81.271-22.763,81.271-22.763s19.559,28.664,63.735,34.813C405.071,335.006,400.687,310.23,400.687,310.23z
                                                             M137.229,387.424c-9.495,4.464-18.472-1.445-19.732-6.726c-1.62-6.789,4.988-17.973,17.616-26.097
                                                            c25.331-16.3,49.869-25.745,49.869-25.745S167.486,373.2,137.229,387.424z M226.953,133.44c2.78-10.117,13.106-13.097,17.937-10.623
                                                            c6.211,3.182,10.415,15.473,8.38,30.35c-4.081,29.845-12.853,54.631-12.853,54.631S218.092,165.679,226.953,133.44z M219.935,306.52
                                                            c14.5-22.932,30.013-69.468,30.013-69.468c8.43,16.187,40.13,53.439,40.13,53.439C271.53,291.322,219.935,306.52,219.935,306.52z
                                                             M365.11,320.852c-33.435-0.005-60.188-28.014-60.188-28.014s21.913-3.118,51.252-2.168c15.008,0.486,24.684,5.111,25.966,11.972
                                                            C383.137,307.978,381.634,320.855,365.11,320.852z"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">GoodLayer</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Art Production Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#263364;" cx="256" cy="256" r="256"/>
                                                                <path style="fill:#151F45;" d="M358.365,200.896c-3.076,1.955-6.348,4.972-9.815,9.046l-10.753-10.753h-44.549v74.864
                                                            L151.473,132.279h-50.524v248.182l130.349,130.349C239.427,511.588,247.665,512,256,512c125.879,0,230.536-90.853,251.978-210.563
                                                            l-97.297-97.297C394.909,194.75,373.92,191.013,358.365,200.896z"/>
                                                                <g>
                                                            <path style="fill:#C9E1F6;" d="M100.949,380.461V132.279h50.524V338.3h125.628v42.16H100.949V380.461z"/>
                                                                    <path style="fill:#C9E1F6;" d="M341.211,380.461h-47.963V199.19h44.55v25.774c7.622-12.175,14.479-20.197,20.568-24.067
                                                                c15.554-9.884,36.544-6.146,52.316,3.244l-14.85,41.818c-13.021-8.431-28.075-11.438-39.6-2.305
                                                                c-4.668,3.699-8.337,10.386-11.009,20.056C340.326,281.411,341.211,325.575,341.211,380.461z"/>
                                                        </g>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">ThemeGood</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Finance Manager & Health</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_11" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
                                                            v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
                                                            c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">TechyDevs</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">ACB Product Sales Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_12" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#2A2B46;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#1C1C2E;" d="M378.109,185.822l-2.539,3.533l-54.687-54.687c-3.281-4.153-6.851-8.18-10.746-12.076
                                                                c-25.901-25.901-60.338-40.166-96.966-40.165c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978
                                                                c0,35.021,13.046,68.034,36.827,93.504l-0.065,0.065l193.84,193.84c46.011-9.23,87.561-30.789,121.058-61.093l18.21-18.21
                                                                c29.289-32.375,50.401-72.278,60.116-116.456L391.733,196.951l-0.06,0.06C387.394,192.994,382.856,189.232,378.109,185.822z"/>
                                                                <g>
                                                                <path style="fill:#CBE8F2;" d="M304.576,128.17c11.874,11.874,21.195,25.699,27.705,41.09c6.738,15.932,10.156,32.86,10.156,50.314
                                                                    s-3.417,34.382-10.156,50.314c-6.51,15.392-15.832,29.217-27.705,41.09c-11.874,11.874-25.699,21.195-41.091,27.705
                                                                    c-15.932,6.738-32.86,10.156-50.314,10.156s-34.382-3.417-50.314-10.156c-15.392-6.51-29.217-15.832-41.09-27.705
                                                                    s-21.195-25.699-27.705-41.09c-6.738-15.932-10.156-32.86-10.156-50.314c0-17.454,3.417-34.382,10.156-50.314
                                                                    c6.511-15.393,15.832-29.217,27.705-41.09c11.874-11.874,25.699-21.195,41.09-27.705c15.932-6.738,32.86-10.156,50.314-10.156
                                                                    c17.454,0,34.382,3.417,50.314,10.156C278.877,106.976,292.703,116.296,304.576,128.17 M309.481,123.266
                                                                    c-24.648-24.648-58.698-39.893-96.31-39.893c-75.223,0-136.202,60.98-136.202,136.202c0,37.611,15.245,71.662,39.893,96.31
                                                                    c24.648,24.648,58.698,39.893,96.31,39.893c75.223,0,136.202-60.98,136.202-136.202
                                                                    C349.373,181.964,334.129,147.914,309.481,123.266L309.481,123.266z"/>

                                                                    <rect x="288.743" y="184.295" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 417.2786 548.3727)" style="fill:#CBE8F2;" width="66.937" height="6.941"/>

                                                                    <rect x="246.499" y="199.47" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 374.1807 560.8715)" style="fill:#CBE8F2;" width="113.503" height="6.941"/>

                                                                    <rect x="219.868" y="218.313" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 334.7657 582.2308)" style="fill:#CBE8F2;" width="136.198" height="6.941"/>

                                                                    <rect x="195.01" y="234.925" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 293.1472 598.2161)" style="fill:#CBE8F2;" width="150.917" height="6.941"/>

                                                                    <rect x="179.778" y="253.625" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 253.569 619.2219)" style="fill:#CBE8F2;" width="150.503" height="6.941"/>

                                                                    <rect x="167.7" y="271.864" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 213.5818 639.1373)" style="fill:#CBE8F2;" width="142.922" height="6.941"/>

                                                                    <rect x="156.21" y="288.454" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 171.9116 655.0569)" style="fill:#CBE8F2;" width="130.825" height="6.941"/>

                                                                    <rect x="136.107" y="299.903" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 125.1135 658.5698)" style="fill:#CBE8F2;" width="125.689" height="6.941"/>

                                                                    <rect x="156.433" y="324.796" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 91.7369 694.5314)" style="fill:#CBE8F2;" width="66.556" height="6.941"/>
                                                        </g>
                                                                <g>
                                                            <path style="fill:#00C6FD;" d="M204.411,390.563c-1.11-1.11-2.211-2.251-3.272-3.388l9.685-9.029
                                                                c0.955,1.025,1.948,2.053,2.95,3.054c4.612,4.612,9.629,8.876,14.911,12.675l-7.731,10.75
                                                                C215.092,400.41,209.527,395.679,204.411,390.563z M185.11,366.207c-4.639-7.483-8.56-15.449-11.655-23.679l12.394-4.66
                                                                c2.791,7.423,6.328,14.611,10.513,21.36L185.11,366.207z M243.811,417.852l5.469-12.059c7.155,3.244,14.693,5.811,22.411,7.631
                                                                l0.23,0.054l-3.212,12.847l1.597-6.387l-1.321,6.448l-0.216-0.046C260.179,424.322,251.781,421.467,243.811,417.852z
                                                                 M166.635,317.027c-1.427-8.687-1.993-17.553-1.687-26.352l13.233,0.462c-0.277,7.927,0.235,15.916,1.519,23.742L166.635,317.027z
                                                                 M294.957,429.852l0.466-13.233c7.927,0.28,15.915-0.23,23.742-1.513l2.143,13.067
                                                                C312.623,429.597,303.757,430.162,294.957,429.852z M168.434,264.581c0.013-0.061,0.028-0.121,0.042-0.181
                                                                c2.014-8.56,4.86-16.928,8.46-24.872l12.061,5.466c-3.252,7.178-5.824,14.745-7.643,22.489l-0.064,0.25l-5.143-1.423
                                                                L168.434,264.581z M346.812,421.358l-4.656-12.396c7.423-2.788,14.611-6.323,21.363-10.507l6.975,11.256
                                                                C363.009,414.348,355.041,418.266,346.812,421.358z M190.157,216.667c4.222-5.873,8.96-11.448,14.083-16.571
                                                                c1.098-1.098,2.231-2.192,3.365-3.249l9.031,9.684c-1.022,0.953-2.043,1.939-3.033,2.929c-4.619,4.619-8.89,9.644-12.694,14.936
                                                                L190.157,216.667z M391.464,393.687l-9.028-9.687c1.037-0.967,2.073-1.967,3.078-2.971c4.605-4.605,8.864-9.613,12.658-14.887
                                                                l10.749,7.734c-4.21,5.851-8.935,11.408-14.044,16.515C393.763,391.506,392.615,392.614,391.464,393.687z M235.548,192.065
                                                                l-6.982-11.252c7.482-4.642,15.447-8.565,23.676-11.66l4.662,12.394C249.483,184.339,242.298,187.878,235.548,192.065z
                                                                 M410.095,345.55c3.264-7.195,5.844-14.78,7.668-22.545l0.034-0.14l12.885,3.055l-0.03,0.127
                                                                c-2.017,8.588-4.877,16.996-8.497,24.974L410.095,345.55z M279.89,175.392l-2.149-13.066c8.684-1.429,17.55-1.998,26.351-1.694
                                                                l-0.458,13.234C295.703,173.592,287.714,174.104,279.89,175.392z M420.938,299.286c0.273-7.926-0.243-15.914-1.532-23.74
                                                                l13.066-2.153c1.431,8.687,2.004,17.552,1.7,26.351L420.938,299.286z M327.237,177.02l3.004-12.896l0.096,0.023
                                                                c8.579,2.015,16.954,4.86,24.906,8.461l-5.462,12.063c-7.17-3.247-14.727-5.814-22.459-7.63L327.237,177.02z M413.245,252.561
                                                                c-2.794-7.42-6.335-14.605-10.524-21.354l11.251-6.983c4.644,7.482,8.569,15.446,11.666,23.672L413.245,252.561z M370.381,196.576
                                                                l7.727-10.754c5.881,4.225,11.465,8.971,16.598,14.103c1.094,1.094,2.18,2.218,3.226,3.34l-9.683,9.032
                                                                c-0.941-1.01-1.919-2.022-2.906-3.009C380.716,204.661,375.682,200.384,370.381,196.576z"/>
                                                                    <path style="fill:#00C6FD;" d="M178.273,295.243c0-32.397,12.616-62.854,35.524-85.762s53.365-35.524,85.762-35.524
                                                                c17.106,0,31.306,3.285,45.805,8.936c-6.627-22.687-17.711-42.787-35.226-60.301c-25.901-25.901-60.338-40.166-96.966-40.165
                                                                c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978c0,36.632,14.266,71.073,40.169,96.977
                                                                c0.001,0.001,0,0,0.002,0.002c20.771,20.771,46.439,34.066,78.039,38.884C183.92,336.758,178.273,317.225,178.273,295.243z"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">Penske Media</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Senior Web Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_13" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
	v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
	c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">BlueTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Graphic Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_14" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#59480C;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#382D08;" d="M367.906,206.302c-2.807,1.784-5.794,4.539-8.959,8.257l-9.814-9.814h-40.662v3.953l-48.827-48.827
                                                                l-0.009,0.009c-2.399-2.373-4.972-4.509-7.732-6.391c-7.011-4.776-14.956-7.919-23.837-9.425c-8.88-1.504-22.356-2.26-40.427-2.26
                                                                H96.345v228.391l141.133,141.133c6.118,0.438,12.293,0.672,18.523,0.672c125.835,0,230.461-90.791,251.954-210.438l-92.299-92.299
                                                                c-9.245-5.504-18.851-8.257-28.821-8.257C379.77,201.005,373.46,202.773,367.906,206.302z"/>
                                                                <g>
                                                                <path style="fill:#E8BC1E;" d="M96.345,141.804h91.294c18.071,0,31.547,0.754,40.427,2.26c8.881,1.506,16.826,4.649,23.837,9.425
                                                                    c7.011,4.779,12.853,11.139,17.527,19.085c4.674,7.945,7.011,16.852,7.011,26.718c0,10.699-2.882,20.513-8.646,29.444
                                                                    c-5.764,8.933-13.581,15.632-23.447,20.097c13.917,4.051,24.615,10.959,32.093,20.72c7.478,9.764,11.217,21.242,11.217,34.43
                                                                    c0,10.387-2.414,20.487-7.244,30.302c-4.83,9.815-11.426,17.658-19.786,23.525c-8.361,5.869-18.671,9.479-30.924,10.827
                                                                    c-7.688,0.832-26.226,1.351-55.617,1.558H96.345V141.804z M142.459,179.818v52.814h30.224c17.968,0,29.133-0.258,33.495-0.779
                                                                    c7.892-0.935,14.099-3.661,18.617-8.179c4.517-4.518,6.777-10.462,6.777-17.839c0-7.062-1.948-12.799-5.842-17.215
                                                                    c-3.894-4.414-9.686-7.088-17.37-8.023c-4.572-0.519-17.709-0.779-39.415-0.779L142.459,179.818L142.459,179.818z M142.459,270.645
                                                                    v61.07h42.688c16.617,0,27.159-0.467,31.625-1.402c6.855-1.246,12.438-4.285,16.748-9.114c4.308-4.829,6.465-11.295,6.465-19.396
                                                                    c0-6.855-1.663-12.671-4.986-17.449c-3.325-4.776-8.129-8.257-14.411-10.439c-6.285-2.181-19.917-3.272-40.895-3.272h-37.235
                                                                    V270.645z"/>
                                                                    <path style="fill:#E8BC1E;" d="M352.249,370.196h-43.778V204.745h40.663v23.524c6.957-11.112,13.215-18.435,18.772-21.966
                                                                    c5.554-3.529,11.864-5.297,18.929-5.297c9.97,0,19.576,2.753,28.821,8.257l-13.553,38.169c-7.376-4.777-14.231-7.166-20.564-7.166
                                                                    c-6.129,0-11.323,1.689-15.579,5.063c-4.26,3.377-7.61,9.479-10.049,18.306c-2.442,8.83-3.661,27.317-3.661,55.463L352.249,370.196
                                                                    L352.249,370.196z"/>
                                                            </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">MuffinTech</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Executive, HR Operations</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_15" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                        <circle style="fill:#4F0A0A;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#260505;" d="M245.901,114.471c0,0-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625
                                                            c-14.163,47.886-44.851,104.54-44.851,104.54c-63.735,26.64-72.504,42.828-76.887,47.886c-2.87,3.312-7.861,18.265,0.098,26.453
                                                            l-0.003,0.003L234.233,511.07c7.177,0.604,14.433,0.931,21.767,0.931c106.526,0,197.844-65.071,236.403-157.628L258.441,120.409
                                                            l-0.039,0.039C252.254,115.027,245.901,114.471,245.901,114.471z"/>
                                                                <path style="fill:#FFFFFF;" d="M400.687,310.23c0,0-0.337-15.513-24.617-23.774s-77.899,0-77.899,0
                                                            c-19.4-17.039-45.694-58.846-45.694-58.846s8.507-19.159,15.344-56.316c9.947-54.058-21.92-56.822-21.92-56.822
                                                            s-25.629-4.553-25.966,30.35c-0.337,34.903,17.199,68.625,17.199,68.625c-14.163,47.886-44.851,104.54-44.851,104.54
                                                            c-63.735,26.64-72.504,42.828-76.887,47.886c-4.384,5.059-13.724,37.294,25.73,31.055s74.762-80.121,74.762-80.121
                                                            c20.233-10.117,81.271-22.763,81.271-22.763s19.559,28.664,63.735,34.813C405.071,335.006,400.687,310.23,400.687,310.23z
                                                             M137.229,387.424c-9.495,4.464-18.472-1.445-19.732-6.726c-1.62-6.789,4.988-17.973,17.616-26.097
                                                            c25.331-16.3,49.869-25.745,49.869-25.745S167.486,373.2,137.229,387.424z M226.953,133.44c2.78-10.117,13.106-13.097,17.937-10.623
                                                            c6.211,3.182,10.415,15.473,8.38,30.35c-4.081,29.845-12.853,54.631-12.853,54.631S218.092,165.679,226.953,133.44z M219.935,306.52
                                                            c14.5-22.932,30.013-69.468,30.013-69.468c8.43,16.187,40.13,53.439,40.13,53.439C271.53,291.322,219.935,306.52,219.935,306.52z
                                                             M365.11,320.852c-33.435-0.005-60.188-28.014-60.188-28.014s21.913-3.118,51.252-2.168c15.008,0.486,24.684,5.111,25.966,11.972
                                                            C383.137,307.978,381.634,320.855,365.11,320.852z"/>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">GoodLayer</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Art Production Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#263364;" cx="256" cy="256" r="256"/>
                                                                <path style="fill:#151F45;" d="M358.365,200.896c-3.076,1.955-6.348,4.972-9.815,9.046l-10.753-10.753h-44.549v74.864
                                                            L151.473,132.279h-50.524v248.182l130.349,130.349C239.427,511.588,247.665,512,256,512c125.879,0,230.536-90.853,251.978-210.563
                                                            l-97.297-97.297C394.909,194.75,373.92,191.013,358.365,200.896z"/>
                                                                <g>
                                                            <path style="fill:#C9E1F6;" d="M100.949,380.461V132.279h50.524V338.3h125.628v42.16H100.949V380.461z"/>
                                                                    <path style="fill:#C9E1F6;" d="M341.211,380.461h-47.963V199.19h44.55v25.774c7.622-12.175,14.479-20.197,20.568-24.067
                                                                c15.554-9.884,36.544-6.146,52.316,3.244l-14.85,41.818c-13.021-8.431-28.075-11.438-39.6-2.305
                                                                c-4.668,3.699-8.337,10.386-11.009,20.056C340.326,281.411,341.211,325.575,341.211,380.461z"/>
                                                        </g>
                                                        </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">ThemeGood</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Finance Manager & Health</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
                                                            v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
                                                            c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">TechyDevs</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">ACB Product Sales Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#2A2B46;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#1C1C2E;" d="M378.109,185.822l-2.539,3.533l-54.687-54.687c-3.281-4.153-6.851-8.18-10.746-12.076
                                                                c-25.901-25.901-60.338-40.166-96.966-40.165c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978
                                                                c0,35.021,13.046,68.034,36.827,93.504l-0.065,0.065l193.84,193.84c46.011-9.23,87.561-30.789,121.058-61.093l18.21-18.21
                                                                c29.289-32.375,50.401-72.278,60.116-116.456L391.733,196.951l-0.06,0.06C387.394,192.994,382.856,189.232,378.109,185.822z"/>
                                                                <g>
                                                                <path style="fill:#CBE8F2;" d="M304.576,128.17c11.874,11.874,21.195,25.699,27.705,41.09c6.738,15.932,10.156,32.86,10.156,50.314
                                                                    s-3.417,34.382-10.156,50.314c-6.51,15.392-15.832,29.217-27.705,41.09c-11.874,11.874-25.699,21.195-41.091,27.705
                                                                    c-15.932,6.738-32.86,10.156-50.314,10.156s-34.382-3.417-50.314-10.156c-15.392-6.51-29.217-15.832-41.09-27.705
                                                                    s-21.195-25.699-27.705-41.09c-6.738-15.932-10.156-32.86-10.156-50.314c0-17.454,3.417-34.382,10.156-50.314
                                                                    c6.511-15.393,15.832-29.217,27.705-41.09c11.874-11.874,25.699-21.195,41.09-27.705c15.932-6.738,32.86-10.156,50.314-10.156
                                                                    c17.454,0,34.382,3.417,50.314,10.156C278.877,106.976,292.703,116.296,304.576,128.17 M309.481,123.266
                                                                    c-24.648-24.648-58.698-39.893-96.31-39.893c-75.223,0-136.202,60.98-136.202,136.202c0,37.611,15.245,71.662,39.893,96.31
                                                                    c24.648,24.648,58.698,39.893,96.31,39.893c75.223,0,136.202-60.98,136.202-136.202
                                                                    C349.373,181.964,334.129,147.914,309.481,123.266L309.481,123.266z"/>

                                                                    <rect x="288.743" y="184.295" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 417.2786 548.3727)" style="fill:#CBE8F2;" width="66.937" height="6.941"/>

                                                                    <rect x="246.499" y="199.47" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 374.1807 560.8715)" style="fill:#CBE8F2;" width="113.503" height="6.941"/>

                                                                    <rect x="219.868" y="218.313" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 334.7657 582.2308)" style="fill:#CBE8F2;" width="136.198" height="6.941"/>

                                                                    <rect x="195.01" y="234.925" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 293.1472 598.2161)" style="fill:#CBE8F2;" width="150.917" height="6.941"/>

                                                                    <rect x="179.778" y="253.625" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 253.569 619.2219)" style="fill:#CBE8F2;" width="150.503" height="6.941"/>

                                                                    <rect x="167.7" y="271.864" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 213.5818 639.1373)" style="fill:#CBE8F2;" width="142.922" height="6.941"/>

                                                                    <rect x="156.21" y="288.454" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 171.9116 655.0569)" style="fill:#CBE8F2;" width="130.825" height="6.941"/>

                                                                    <rect x="136.107" y="299.903" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 125.1135 658.5698)" style="fill:#CBE8F2;" width="125.689" height="6.941"/>

                                                                    <rect x="156.433" y="324.796" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 91.7369 694.5314)" style="fill:#CBE8F2;" width="66.556" height="6.941"/>
                                                        </g>
                                                                <g>
                                                            <path style="fill:#00C6FD;" d="M204.411,390.563c-1.11-1.11-2.211-2.251-3.272-3.388l9.685-9.029
                                                                c0.955,1.025,1.948,2.053,2.95,3.054c4.612,4.612,9.629,8.876,14.911,12.675l-7.731,10.75
                                                                C215.092,400.41,209.527,395.679,204.411,390.563z M185.11,366.207c-4.639-7.483-8.56-15.449-11.655-23.679l12.394-4.66
                                                                c2.791,7.423,6.328,14.611,10.513,21.36L185.11,366.207z M243.811,417.852l5.469-12.059c7.155,3.244,14.693,5.811,22.411,7.631
                                                                l0.23,0.054l-3.212,12.847l1.597-6.387l-1.321,6.448l-0.216-0.046C260.179,424.322,251.781,421.467,243.811,417.852z
                                                                 M166.635,317.027c-1.427-8.687-1.993-17.553-1.687-26.352l13.233,0.462c-0.277,7.927,0.235,15.916,1.519,23.742L166.635,317.027z
                                                                 M294.957,429.852l0.466-13.233c7.927,0.28,15.915-0.23,23.742-1.513l2.143,13.067
                                                                C312.623,429.597,303.757,430.162,294.957,429.852z M168.434,264.581c0.013-0.061,0.028-0.121,0.042-0.181
                                                                c2.014-8.56,4.86-16.928,8.46-24.872l12.061,5.466c-3.252,7.178-5.824,14.745-7.643,22.489l-0.064,0.25l-5.143-1.423
                                                                L168.434,264.581z M346.812,421.358l-4.656-12.396c7.423-2.788,14.611-6.323,21.363-10.507l6.975,11.256
                                                                C363.009,414.348,355.041,418.266,346.812,421.358z M190.157,216.667c4.222-5.873,8.96-11.448,14.083-16.571
                                                                c1.098-1.098,2.231-2.192,3.365-3.249l9.031,9.684c-1.022,0.953-2.043,1.939-3.033,2.929c-4.619,4.619-8.89,9.644-12.694,14.936
                                                                L190.157,216.667z M391.464,393.687l-9.028-9.687c1.037-0.967,2.073-1.967,3.078-2.971c4.605-4.605,8.864-9.613,12.658-14.887
                                                                l10.749,7.734c-4.21,5.851-8.935,11.408-14.044,16.515C393.763,391.506,392.615,392.614,391.464,393.687z M235.548,192.065
                                                                l-6.982-11.252c7.482-4.642,15.447-8.565,23.676-11.66l4.662,12.394C249.483,184.339,242.298,187.878,235.548,192.065z
                                                                 M410.095,345.55c3.264-7.195,5.844-14.78,7.668-22.545l0.034-0.14l12.885,3.055l-0.03,0.127
                                                                c-2.017,8.588-4.877,16.996-8.497,24.974L410.095,345.55z M279.89,175.392l-2.149-13.066c8.684-1.429,17.55-1.998,26.351-1.694
                                                                l-0.458,13.234C295.703,173.592,287.714,174.104,279.89,175.392z M420.938,299.286c0.273-7.926-0.243-15.914-1.532-23.74
                                                                l13.066-2.153c1.431,8.687,2.004,17.552,1.7,26.351L420.938,299.286z M327.237,177.02l3.004-12.896l0.096,0.023
                                                                c8.579,2.015,16.954,4.86,24.906,8.461l-5.462,12.063c-7.17-3.247-14.727-5.814-22.459-7.63L327.237,177.02z M413.245,252.561
                                                                c-2.794-7.42-6.335-14.605-10.524-21.354l11.251-6.983c4.644,7.482,8.569,15.446,11.666,23.672L413.245,252.561z M370.381,196.576
                                                                l7.727-10.754c5.881,4.225,11.465,8.971,16.598,14.103c1.094,1.094,2.18,2.218,3.226,3.34l-9.683,9.032
                                                                c-0.941-1.01-1.919-2.022-2.906-3.009C380.716,204.661,375.682,200.384,370.381,196.576z"/>
                                                                    <path style="fill:#00C6FD;" d="M178.273,295.243c0-32.397,12.616-62.854,35.524-85.762s53.365-35.524,85.762-35.524
                                                                c17.106,0,31.306,3.285,45.805,8.936c-6.627-22.687-17.711-42.787-35.226-60.301c-25.901-25.901-60.338-40.166-96.966-40.165
                                                                c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978c0,36.632,14.266,71.073,40.169,96.977
                                                                c0.001,0.001,0,0,0.002,0.002c20.771,20.771,46.439,34.066,78.039,38.884C183.92,336.758,178.273,317.225,178.273,295.243z"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">Penske Media</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Senior Web Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_19" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                        <circle style="fill:#423966;" cx="256" cy="255.997" r="255.997"/>
                                                                <path style="fill:#2C2547;" d="M339.155,145.196h-27.717v27.717l-27.717-27.717h-27.717v27.535h-0.173l-55.262-55.261h-27.717
                                                            v27.717l-27.718-27.717h-27.717c0,13.471,0,266.548,0,277.059l116.513,116.513c7.277,0.622,14.636,0.958,22.075,0.958
                                                            c122.181,0,224.354-85.6,249.86-200.095L394.59,200.631v-0.087h-0.087L339.155,145.196z"/>
                                                                <g>
                                                            <rect x="172.853" y="117.47" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <path style="fill:#A48DFF;" d="M339.155,311.377h-27.717V283.66h-27.717v0.046l-0.046-0.046h0.046v-27.717h-27.717v0.058
                                                                l-0.115-0.115h0.115v-27.622h27.717v27.622h27.717v-27.622h27.717v-27.717h-27.717v27.622h-27.717v-27.622h-27.717v27.622h-27.717
                                                                v-27.622H200.57v0.043l-0.138-0.138h0.138v-27.536h27.717v27.536h27.717v-27.536h27.717v-27.717h-27.717v27.535h-27.717v-27.535
                                                                H200.57v27.535h-27.717v-27.535h-27.699l-0.02-0.02V117.47h-27.717c0,13.471,0,266.548,0,277.059c11.594,0,265.542,0,277.175,0
                                                                v-27.717h-27.717v0.012l-0.012-0.012h0.012v-27.718h-27.717v0.023l-0.023-0.023h0.023v-27.717h27.717v27.717h27.717v-27.717
                                                                h-27.717V283.66h-27.717v27.717H339.155z M228.286,228.262v0.033l-0.033-0.033H228.286z M311.404,311.377h0.035v0.035
                                                                L311.404,311.377z"/>
                                                                    <rect x="311.438" y="145.199" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="311.438" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="255.937" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                                    <rect x="366.876" y="200.549" style="fill:#A48DFF;" width="27.719" height="27.719"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">TechyDevs</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">ACB Product Sales Specialist</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                    <div class="col-lg-6 column-td-6">
                                        <div class="job-card">
                                            <div class="job-card-content">
                                                <div class="card-head d-flex align-items-center">
                                                    <div class="company-avatar mr-3">
                                                        <a href="employer-details.html" class="d-block">
                                                            <svg class="card-svg" version="1.1" id="Capa_20" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                 viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#2A2B46;" cx="256.003" cy="256.003" r="256.003"/>
                                                                <path style="fill:#1C1C2E;" d="M378.109,185.822l-2.539,3.533l-54.687-54.687c-3.281-4.153-6.851-8.18-10.746-12.076
                                                                c-25.901-25.901-60.338-40.166-96.966-40.165c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978
                                                                c0,35.021,13.046,68.034,36.827,93.504l-0.065,0.065l193.84,193.84c46.011-9.23,87.561-30.789,121.058-61.093l18.21-18.21
                                                                c29.289-32.375,50.401-72.278,60.116-116.456L391.733,196.951l-0.06,0.06C387.394,192.994,382.856,189.232,378.109,185.822z"/>
                                                                <g>
                                                                <path style="fill:#CBE8F2;" d="M304.576,128.17c11.874,11.874,21.195,25.699,27.705,41.09c6.738,15.932,10.156,32.86,10.156,50.314
                                                                    s-3.417,34.382-10.156,50.314c-6.51,15.392-15.832,29.217-27.705,41.09c-11.874,11.874-25.699,21.195-41.091,27.705
                                                                    c-15.932,6.738-32.86,10.156-50.314,10.156s-34.382-3.417-50.314-10.156c-15.392-6.51-29.217-15.832-41.09-27.705
                                                                    s-21.195-25.699-27.705-41.09c-6.738-15.932-10.156-32.86-10.156-50.314c0-17.454,3.417-34.382,10.156-50.314
                                                                    c6.511-15.393,15.832-29.217,27.705-41.09c11.874-11.874,25.699-21.195,41.09-27.705c15.932-6.738,32.86-10.156,50.314-10.156
                                                                    c17.454,0,34.382,3.417,50.314,10.156C278.877,106.976,292.703,116.296,304.576,128.17 M309.481,123.266
                                                                    c-24.648-24.648-58.698-39.893-96.31-39.893c-75.223,0-136.202,60.98-136.202,136.202c0,37.611,15.245,71.662,39.893,96.31
                                                                    c24.648,24.648,58.698,39.893,96.31,39.893c75.223,0,136.202-60.98,136.202-136.202
                                                                    C349.373,181.964,334.129,147.914,309.481,123.266L309.481,123.266z"/>

                                                                    <rect x="288.743" y="184.295" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 417.2786 548.3727)" style="fill:#CBE8F2;" width="66.937" height="6.941"/>

                                                                    <rect x="246.499" y="199.47" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 374.1807 560.8715)" style="fill:#CBE8F2;" width="113.503" height="6.941"/>

                                                                    <rect x="219.868" y="218.313" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 334.7657 582.2308)" style="fill:#CBE8F2;" width="136.198" height="6.941"/>

                                                                    <rect x="195.01" y="234.925" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 293.1472 598.2161)" style="fill:#CBE8F2;" width="150.917" height="6.941"/>

                                                                    <rect x="179.778" y="253.625" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 253.569 619.2219)" style="fill:#CBE8F2;" width="150.503" height="6.941"/>

                                                                    <rect x="167.7" y="271.864" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 213.5818 639.1373)" style="fill:#CBE8F2;" width="142.922" height="6.941"/>

                                                                    <rect x="156.21" y="288.454" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 171.9116 655.0569)" style="fill:#CBE8F2;" width="130.825" height="6.941"/>

                                                                    <rect x="136.107" y="299.903" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 125.1135 658.5698)" style="fill:#CBE8F2;" width="125.689" height="6.941"/>

                                                                    <rect x="156.433" y="324.796" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 91.7369 694.5314)" style="fill:#CBE8F2;" width="66.556" height="6.941"/>
                                                        </g>
                                                                <g>
                                                            <path style="fill:#00C6FD;" d="M204.411,390.563c-1.11-1.11-2.211-2.251-3.272-3.388l9.685-9.029
                                                                c0.955,1.025,1.948,2.053,2.95,3.054c4.612,4.612,9.629,8.876,14.911,12.675l-7.731,10.75
                                                                C215.092,400.41,209.527,395.679,204.411,390.563z M185.11,366.207c-4.639-7.483-8.56-15.449-11.655-23.679l12.394-4.66
                                                                c2.791,7.423,6.328,14.611,10.513,21.36L185.11,366.207z M243.811,417.852l5.469-12.059c7.155,3.244,14.693,5.811,22.411,7.631
                                                                l0.23,0.054l-3.212,12.847l1.597-6.387l-1.321,6.448l-0.216-0.046C260.179,424.322,251.781,421.467,243.811,417.852z
                                                                 M166.635,317.027c-1.427-8.687-1.993-17.553-1.687-26.352l13.233,0.462c-0.277,7.927,0.235,15.916,1.519,23.742L166.635,317.027z
                                                                 M294.957,429.852l0.466-13.233c7.927,0.28,15.915-0.23,23.742-1.513l2.143,13.067
                                                                C312.623,429.597,303.757,430.162,294.957,429.852z M168.434,264.581c0.013-0.061,0.028-0.121,0.042-0.181
                                                                c2.014-8.56,4.86-16.928,8.46-24.872l12.061,5.466c-3.252,7.178-5.824,14.745-7.643,22.489l-0.064,0.25l-5.143-1.423
                                                                L168.434,264.581z M346.812,421.358l-4.656-12.396c7.423-2.788,14.611-6.323,21.363-10.507l6.975,11.256
                                                                C363.009,414.348,355.041,418.266,346.812,421.358z M190.157,216.667c4.222-5.873,8.96-11.448,14.083-16.571
                                                                c1.098-1.098,2.231-2.192,3.365-3.249l9.031,9.684c-1.022,0.953-2.043,1.939-3.033,2.929c-4.619,4.619-8.89,9.644-12.694,14.936
                                                                L190.157,216.667z M391.464,393.687l-9.028-9.687c1.037-0.967,2.073-1.967,3.078-2.971c4.605-4.605,8.864-9.613,12.658-14.887
                                                                l10.749,7.734c-4.21,5.851-8.935,11.408-14.044,16.515C393.763,391.506,392.615,392.614,391.464,393.687z M235.548,192.065
                                                                l-6.982-11.252c7.482-4.642,15.447-8.565,23.676-11.66l4.662,12.394C249.483,184.339,242.298,187.878,235.548,192.065z
                                                                 M410.095,345.55c3.264-7.195,5.844-14.78,7.668-22.545l0.034-0.14l12.885,3.055l-0.03,0.127
                                                                c-2.017,8.588-4.877,16.996-8.497,24.974L410.095,345.55z M279.89,175.392l-2.149-13.066c8.684-1.429,17.55-1.998,26.351-1.694
                                                                l-0.458,13.234C295.703,173.592,287.714,174.104,279.89,175.392z M420.938,299.286c0.273-7.926-0.243-15.914-1.532-23.74
                                                                l13.066-2.153c1.431,8.687,2.004,17.552,1.7,26.351L420.938,299.286z M327.237,177.02l3.004-12.896l0.096,0.023
                                                                c8.579,2.015,16.954,4.86,24.906,8.461l-5.462,12.063c-7.17-3.247-14.727-5.814-22.459-7.63L327.237,177.02z M413.245,252.561
                                                                c-2.794-7.42-6.335-14.605-10.524-21.354l11.251-6.983c4.644,7.482,8.569,15.446,11.666,23.672L413.245,252.561z M370.381,196.576
                                                                l7.727-10.754c5.881,4.225,11.465,8.971,16.598,14.103c1.094,1.094,2.18,2.218,3.226,3.34l-9.683,9.032
                                                                c-0.941-1.01-1.919-2.022-2.906-3.009C380.716,204.661,375.682,200.384,370.381,196.576z"/>
                                                                    <path style="fill:#00C6FD;" d="M178.273,295.243c0-32.397,12.616-62.854,35.524-85.762s53.365-35.524,85.762-35.524
                                                                c17.106,0,31.306,3.285,45.805,8.936c-6.627-22.687-17.711-42.787-35.226-60.301c-25.901-25.901-60.338-40.166-96.966-40.165
                                                                c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978c0,36.632,14.266,71.073,40.169,96.977
                                                                c0.001,0.001,0,0,0.002,0.002c20.771,20.771,46.439,34.066,78.039,38.884C183.92,336.758,178.273,317.225,178.273,295.243z"/>
                                                        </g>
                                                    </svg>
                                                        </a>
                                                    </div>
                                                    <div class="company-title-box">
                                                        <h4 class="card-title mb-1"><a href="employer-details.html">Penske Media</a> </h4>
                                                        <p class="card-sub"><i class="la la-map-marker"></i> Aberdeen, United Kingdom</p>
                                                    </div>
                                                </div>
                                                <div class="card-content mt-4 margin-bottom-30px">
                                                    <h4 class="card-title mb-2"><a href="job-details.html">Senior Web Designer</a> </h4>
                                                    <p class="card-sub">Sed quia lipsum dolor sit atur adipiscing elit is nunc quis tellus sed ligula</p>
                                                </div>
                                                <div class="section-block-2"></div>
                                                <div class="card-foot d-flex align-items-center justify-content-between mt-4">
                                                    <span class="color-text-2 font-size-13"><i class="la la-briefcase"></i> Full Time</span>
                                                    <span class="color-text-2 font-size-13"><i class="la la-clock-o"></i> 3 hours ago</span>
                                                    <span class="color-text-2 font-size-13"> $20 - $25 /hr</span>
                                                </div>
                                            </div><!-- end job-card-content -->
                                        </div><!-- end job-card -->
                                    </div><!-- end col-lg-6 -->
                                </div>
                            </div><!-- end job-content -->
                        </div><!-- end tab-pane -->
                    </div><!-- end tab-content -->
                </div><!-- end jobs-wrapper -->
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap mt-4">
                    <div class="page-navigation mx-auto">
                        <a href="#" class="page-go page-prev">
                            <i class="la la-arrow-left"></i>
                        </a>
                        <ul class="page-navigation-nav">
                            <li><a href="#" class="page-go-link">1</a></li>
                            <li class="active"><a href="#" class="page-go-link">2</a></li>
                            <li><a href="#" class="page-go-link">3</a></li>
                            <li><a href="#" class="page-go-link">4</a></li>
                            <li><a href="#" class="page-go-link">5</a></li>
                        </ul>
                        <a href="#" class="page-go page-next">
                            <i class="la la-arrow-right"></i>
                        </a>
                    </div>
                </div><!-- end page-navigation-wrap -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end card-area -->
<!-- ================================
    END CARD AREA
================================= -->
<div class="section-block"></div>
<script>
  $('document').ready(function() {
    $('#search_form').find('input').keydown(function(e) {
      // if enter is pressed
      if(e.which == 13) {
        $('#search_form').submit();
      }
    })
    $('#search_form').find('select').change(function(e) {
        $('#search_form').submit();
    })
    $('#sort_form').find('select').change(function(e) {
        $('#sort_form').submit();
    })
    $('#search_form').find('.radio').change(function(e) {
        $('#search_form').submit();
    })
    $('#search_form').find('.checkbox').change(function(e) {
        $('#search_form').submit();
    })

    $('#slider').on('input', function(e)  {
      let range_value = $(this).val();
      $('#range_number').text(range_value);
    })

    $('#slider').mouseup( function(e)  {
      $('#search_form').submit();
    })
  })
</script>
