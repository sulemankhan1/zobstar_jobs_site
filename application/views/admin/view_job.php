<!-- ================================
    START BREADCRUMB AREA
================================= -->
<section class="breadcrumb-area job-single-breadcrumb">
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content d-flex flex-wrap justify-content-between align-items-center">
                        <div class="bread-details d-flex">
                            <div class="bread-img flex-shrink-0">
                                <img src="<?=base_url('assets/images/company-logo.jpg')?>" alt="">
                            </div>
                            <div class="job-detail-content">
                                <h2 class="widget-title font-size-30 text-white pb-1"><?=$job->Job_Title?></h2>
                                <p class="font-size-16 mt-1 text-white">
                                    <span class="mr-2 mb-2 d-inline-block"><i class="la la-briefcase mr-1"></i><?=$company->name?></span>
                                    <span class="mr-2 mb-2 d-inline-block"><i class="la la-map-marker mr-1"></i><?=$company->full_address?></span>
                                    <span class="mr-2 mb-2 d-inline-block"><i class="la la-calendar mr-1"></i>Post Date: <?=date('d M Y ', strtotime($job->created_at))?></span>
                                    <br>
                                    <span class="mr-2"><i class="la la-calendar mr-1"></i>Apply Before: <?=date('d M Y', strtotime($job->Application_Deadline))?></span>
                                    <span><i class="la la-eye mr-1"></i>Views 2363</span>
                                </p>
                            </div><!-- end job-detail-content -->
                        </div><!-- end bread-details -->
                        <div class="bread-action">
                            <ul class="listing-info">
                                <li>
                                    <button type="button" class="theme-btn mr-1"><i class="la la-heart-o font-size-16"></i> Save</button>
                                </li>
                                <li>
                                    <button type="button" class="theme-btn border-0">Apply Now</button>
                                </li>
                            </ul>
                        </div><!-- end bread-action -->
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
    START JOB DETAILS
================================= -->
<section class="job-details padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single-job-wrap">
                    <div class="job-description padding-bottom-35px">
                        <h2 class="widget-title">Description:</h2>
                        <div class="title-shape"></div>
                        <div class="mt-3 mb-3">
                          <?=$job->Job_Description?>
                        </div>
                    </div><!-- end job-description -->
                    <div class="job-description padding-bottom-35px">
                        <h2 class="widget-title">Recommended skills</h2>
                        <div class="title-shape"></div>
                        <ul class="tag-list mt-4">
                          <?php
                          $skills = json_decode($job->Skill_Requirement);
                          if(!empty($skills)) {
                            foreach($skills as $skill) {
                              echo '<li><a href="#">'.$skill.'</a></li>';
                            }
                          }
                           ?>

                        </ul>
                    </div><!-- end job-description -->
                    <div class="user-action-card section-bg p-5 radius-round d-flex align-items-center justify-content-between">
                        <div class="user-action-heading">
                            <h2 class="widget-title pb-2">Apply to this job</h2>
                            <p> Think you're the perfect candidate for this job?</p>
                        </div>
                        <div class="btn-box">
                            <a href="#" class="theme-btn">Apply Now</a>
                        </div><!-- end btn-box -->
                    </div><!-- end user-action-card -->
                    <div class="related-job-post padding-top-40px">
                        <h2 class="widget-title">Related Jobs</h2>
                        <div class="title-shape"></div>
                        <div class="job-content margin-top-35px">
                            <div class="job-card job-card-layout">
                                <div class="job-card-details d-flex align-items-center justify-content-between">
                                    <div class="card-head d-flex align-items-center">
                                        <div class="company-avatar mr-3">
                                            <a href="employer-details.html" class="d-block">
                                                <svg class="card-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
                                                            <circle style="fill:#2A2B46;" cx="256.003" cy="256.003" r="256.003"></circle>
                                                    <path style="fill:#1C1C2E;" d="M378.109,185.822l-2.539,3.533l-54.687-54.687c-3.281-4.153-6.851-8.18-10.746-12.076
                                                                c-25.901-25.901-60.338-40.166-96.966-40.165c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978
                                                                c0,35.021,13.046,68.034,36.827,93.504l-0.065,0.065l193.84,193.84c46.011-9.23,87.561-30.789,121.058-61.093l18.21-18.21
                                                                c29.289-32.375,50.401-72.278,60.116-116.456L391.733,196.951l-0.06,0.06C387.394,192.994,382.856,189.232,378.109,185.822z"></path>
                                                    <g>
                                                                <path style="fill:#CBE8F2;" d="M304.576,128.17c11.874,11.874,21.195,25.699,27.705,41.09c6.738,15.932,10.156,32.86,10.156,50.314
                                                                    s-3.417,34.382-10.156,50.314c-6.51,15.392-15.832,29.217-27.705,41.09c-11.874,11.874-25.699,21.195-41.091,27.705
                                                                    c-15.932,6.738-32.86,10.156-50.314,10.156s-34.382-3.417-50.314-10.156c-15.392-6.51-29.217-15.832-41.09-27.705
                                                                    s-21.195-25.699-27.705-41.09c-6.738-15.932-10.156-32.86-10.156-50.314c0-17.454,3.417-34.382,10.156-50.314
                                                                    c6.511-15.393,15.832-29.217,27.705-41.09c11.874-11.874,25.699-21.195,41.09-27.705c15.932-6.738,32.86-10.156,50.314-10.156
                                                                    c17.454,0,34.382,3.417,50.314,10.156C278.877,106.976,292.703,116.296,304.576,128.17 M309.481,123.266
                                                                    c-24.648-24.648-58.698-39.893-96.31-39.893c-75.223,0-136.202,60.98-136.202,136.202c0,37.611,15.245,71.662,39.893,96.31
                                                                    c24.648,24.648,58.698,39.893,96.31,39.893c75.223,0,136.202-60.98,136.202-136.202
                                                                    C349.373,181.964,334.129,147.914,309.481,123.266L309.481,123.266z"></path>

                                                        <rect x="288.743" y="184.295" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 417.2786 548.3727)" style="fill:#CBE8F2;" width="66.937" height="6.941"></rect>

                                                        <rect x="246.499" y="199.47" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 374.1807 560.8715)" style="fill:#CBE8F2;" width="113.503" height="6.941"></rect>

                                                        <rect x="219.868" y="218.313" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 334.7657 582.2308)" style="fill:#CBE8F2;" width="136.198" height="6.941"></rect>

                                                        <rect x="195.01" y="234.925" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 293.1472 598.2161)" style="fill:#CBE8F2;" width="150.917" height="6.941"></rect>

                                                        <rect x="179.778" y="253.625" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 253.569 619.2219)" style="fill:#CBE8F2;" width="150.503" height="6.941"></rect>

                                                        <rect x="167.7" y="271.864" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 213.5818 639.1373)" style="fill:#CBE8F2;" width="142.922" height="6.941"></rect>

                                                        <rect x="156.21" y="288.454" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 171.9116 655.0569)" style="fill:#CBE8F2;" width="130.825" height="6.941"></rect>

                                                        <rect x="136.107" y="299.903" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 125.1135 658.5698)" style="fill:#CBE8F2;" width="125.689" height="6.941"></rect>

                                                        <rect x="156.433" y="324.796" transform="matrix(-0.7071 -0.7071 0.7071 -0.7071 91.7369 694.5314)" style="fill:#CBE8F2;" width="66.556" height="6.941"></rect>
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
                                                                c-0.941-1.01-1.919-2.022-2.906-3.009C380.716,204.661,375.682,200.384,370.381,196.576z"></path>
                                                        <path style="fill:#00C6FD;" d="M178.273,295.243c0-32.397,12.616-62.854,35.524-85.762s53.365-35.524,85.762-35.524
                                                                c17.106,0,31.306,3.285,45.805,8.936c-6.627-22.687-17.711-42.787-35.226-60.301c-25.901-25.901-60.338-40.166-96.966-40.165
                                                                c-36.633,0-71.074,14.266-96.978,40.17s-40.171,60.345-40.17,96.978c0,36.632,14.266,71.073,40.169,96.977
                                                                c0.001,0.001,0,0,0.002,0.002c20.771,20.771,46.439,34.066,78.039,38.884C183.92,336.758,178.273,317.225,178.273,295.243z"></path>
                                                        </g>
                                    </svg>
                                            </a>
                                        </div>
                                        <div class="company-title-box">
                                            <p class="card-sub mb-1 font-weight-medium">23 Days Ago</p>
                                            <h4 class="card-title mb-1"><a href="job-details.html"> Finance Manager & Health</a> </h4>
                                            <p class="card-sub">
                                                <span class="mr-2"><i class="la la-building-o color-text-2"></i> BlueTech</span>
                                                <span class="mr-2"><i class="la la-map-marker color-text-2"></i> Aberdeen, United Kingdom</span>
                                                <span class="mr-2"><i class="la la-clock-o color-text-2"></i> Full Time</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="job-details.html" class="theme-btn">Apply Now</a>
                                    </div>
                                </div>
                            </div><!-- end job-card -->
                            <div class="job-card job-card-layout">
                                <div class="job-card-details d-flex align-items-center justify-content-between">
                                    <div class="card-head d-flex align-items-center">
                                        <div class="company-avatar mr-3">
                                            <a href="employer-details.html" class="d-block">
                                                <svg class="card-svg" version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
                                            <p class="card-sub mb-1 font-weight-medium">1 Day Ago</p>
                                            <h4 class="card-title mb-1"><a href="job-details.html"> Assistant Bank Manager - Savage </a></h4>
                                            <p class="card-sub">
                                                <span class="mr-2"><i class="la la-building-o color-text-2"></i> TechyDevs</span>
                                                <span class="mr-2"><i class="la la-map-marker color-text-2"></i> Aberdeen, United Kingdom</span>
                                                <span class="mr-2"><i class="la la-clock-o color-text-2"></i> Full Time</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="job-details.html" class="theme-btn">Apply Now</a>
                                    </div>
                                </div>
                            </div><!-- end job-card -->
                            <div class="job-card job-card-layout">
                                <div class="job-card-details d-flex align-items-center justify-content-between">
                                    <div class="card-head d-flex align-items-center">
                                        <div class="company-avatar mr-3">
                                            <a href="employer-details.html" class="d-block">
                                                <svg class="card-svg" version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                            <p class="card-sub mb-1 font-weight-medium">1 Hour Ago</p>
                                            <h4 class="card-title mb-1"><a href="job-details.html"> Vice President of Finance</a> </h4>
                                            <p class="card-sub">
                                                <span class="mr-2"><i class="la la-building-o color-text-2"></i> TechyDevs</span>
                                                <span class="mr-2"><i class="la la-map-marker color-text-2"></i> Aberdeen, United Kingdom</span>
                                                <span class="mr-2"><i class="la la-clock-o color-text-2"></i> Part Time</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a href="job-details.html" class="theme-btn">Apply Now</a>
                                    </div>
                                </div>
                            </div><!-- end job-card -->
                        </div><!-- end job-content -->
                    </div><!-- end related-job-post-->
                    <div class="section-block mt-5"></div>
                    <div class="user-action-card mt-5">
                        <div class="user-action-heading text-center">
                            <a href="candidate-add-resume.html" class="section-bg font-size-16 color-text-2 font-weight-medium d-block p-3 radius-round">Click here to add your resume and let your next job find you</a>
                        </div>
                    </div><!-- end user-action-card -->
                    <div class="report-text padding-top-35px">
                        <p class="color-text-2 mb-2">
                            Help us improve Zobstar by providing feedback about this job:
                            <a href="#" class="color-text" data-toggle="modal" data-target=".modal-action-form">
                            Report this job</a>
                        </p>
                        <p class="mb-2">
                            For your privacy and protection, when applying to a job online, never give
                            your social security number to a prospective employer,
                            provide credit card or bank account information, or perform any
                            sort of monetary transaction. <a href="#" class="color-text">Learn more.</a>
                        </p>
                        <p>
                            By applying to a job using Zobstar you are agreeing to comply with and be subject
                            to the Zobstar <a href="terms-and-condition.html" class="color-text">Terms and Conditions</a> for use of our website. To use our website,
                            you must agree with the <a href="terms-and-condition.html" class="color-text">Terms and Conditions</a> and both meet and comply with their
                            provisions.
                        </p>
                    </div><!-- end report-text -->
                </div><!-- end single-job-wrap -->
            </div><!-- end col-lg-8 -->
            <div class="col-lg-4">
                <div class="sidebar mt-0">
                    <div class="sidebar-widget">
                        <div class="billing-form-item mb-0">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Job Details</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="info-list static-info">
                                    <ul>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-map-marker"></i> <span class="color-text-2 font-weight-medium mr-1">Location:</span> <?=$company->location?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-users"></i> <span class="color-text-2 font-weight-medium mr-1">Offered Salary:</span>$<?=$job->Offered_Salary_Min?> - $<?=$job->Offered_Salary_Max?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-paper-plane-o"></i> <span class="color-text-2 font-weight-medium mr-1">Career Level:</span><?=$job->career_level?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-bullhorn"></i> <span class="color-text-2 font-weight-medium mr-1">Experience:</span> <?=$job->Experience?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-desktop"></i> <span class="color-text-2 font-weight-medium mr-1">Job Type:</span> <?=$job->Job_Type?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-user"></i> <span class="color-text-2 font-weight-medium mr-1">Gender:</span> <?=$job->gender?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-briefcase"></i> <span class="color-text-2 font-weight-medium mr-1">Industry:</span> <?=$job->Industry?></p></li>
                                        <li class="d-flex align-items-center"><p><i class="la la-graduation-cap"></i> <span class="color-text-2 font-weight-medium mr-1">Qualification:</span><?=$job->Qualification?></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                   
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Company Information</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="info-list static-info">
                                    <ul>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-map-marker"></i> <span class="color-text-2 font-weight-medium mr-1">Headquarters:</span> <?=$company->headquarter?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-users"></i> <span class="color-text-2 font-weight-medium mr-1">Employees:</span> <?=$company->no_of_employees?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-briefcase"></i> <span class="color-text-2 font-weight-medium mr-1">Industry:</span>  <?=$company->industry?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-envelope-o"></i> <span class="color-text-2 font-weight-medium mr-1">Email:</span><a href="#"> <?=$company->email_address?></a></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-eye"></i> <span class="color-text-2 font-weight-medium mr-1">Viewed:</span>  <?=$company->location?></p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-file-text-o"></i> <span class="color-text-2 font-weight-medium mr-1">No of followers <?=$company->no_of_followers?></span> </p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-clock-o"></i> <span class="color-text-2 font-weight-medium mr-1">founded in <?=$company->founded_in?></span> </p></li>
                                        <li class="mb-3 d-flex align-items-center"><p><i class="la la-user"></i> <span class="color-text-2 font-weight-medium mr-1">No of jobs <?=$company->no_of_jobs?></span> </p></li>
                                        <li class="d-flex align-items-center"><p><i class="la la-globe"></i> <span class="color-text-2 font-weight-medium mr-1"> <?=$company->websitelink?></span><a href="#"> www.tehcydevs.com</a></p></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Contact Bluetech, Inc</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div class="contact-form-action">
                                    <form method="post">
                                        <div class="input-box">
                                            <label class="label-text">Your Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="text" name="name" placeholder="Enter email address">
                                            </div>
                                        </div>
                                        <div class="input-box">
                                            <label class="label-text">Message</label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control" name="message" placeholder="Message should have more than 150 characters"></textarea>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <button class="theme-btn border-0 w-100 text-center">Send Message</button>
                                            <p class="font-size-14 font-weight-regular mt-1">You accepts our <a href="terms-and-condition.html" class="color-text-2">Terms and Conditions</a></p>
                                        </div>
                                    </form>
                                </div><!-- end contact-form-action -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget social-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Interesting? Share it!</h3>
                                <div class="title-shape"></div>
                            </div>
                            <div class="billing-content">
                                <ul class="social-profile">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Share on Instagram"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Share on Dribbble"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Share on Behance"><i class="fa fa-behance"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end job-details -->
<!-- ================================
    END JOB DETAILS
================================= -->
