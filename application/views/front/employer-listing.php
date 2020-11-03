<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar/employer-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 14:36:29 GMT -->

<body>
<!-- start per-loader -->
<div class="loader-container">
    <div class="loader-circle">
        <div class="loader">
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
            <div class="loader-dot"></div>
        </div>
    </div>
</div>
<!-- end per-loader -->

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
                            <h2 class="sec__title mb-0">Employer Listing</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.html">Home</a></li>
                            <li class="active__list-item">Pages</li>
                            <li>Employer Listing</li>
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
<section class="card-area padding-top-100px padding-bottom-80px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="generic-header margin-bottom-30px">
                    <p class="showing__text text-left">Showing 1 to 7 of 128 Jobs</p>
                    <div class="short-option mr-3">
                        <select class="short-option-field">
                            <option value >Short by</option>
                            <option value="default">Default</option>
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="random-listing">Random</option>
                        </select>
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
                <div class="sidebar mt-0">
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Keywords</h3>
                        <div class="contact-form-action mb-4">
                            <form action="#">
                                <div class="form-group">
                                    <span class="la la-search form-icon"></span>
                                    <input class="form-control" type="text" placeholder="Job title, keywords">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-option mb-4">
                            <h3 class="widget-title">Category</h3>
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
                        </div><!-- end sidebar-option -->
                        <div class="sidebar-option">
                            <h3 class="widget-title">Location</h3>
                            <select class="location-option-field">
                                <option value>Select a Location</option>
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
                        </div><!-- end sidebar-option -->
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
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1" class="font-weight-medium">Development (33)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb2">
                                            <label for="chb2" class="font-weight-medium">Management (27)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb3">
                                            <label for="chb3" class="font-weight-medium">Finance (48)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb4">
                                            <label for="chb4" class="font-weight-medium">Html Department (14)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb5">
                                            <label for="chb5" class="font-weight-medium">Seo (27)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb6">
                                            <label for="chb6" class="font-weight-medium">Banking (13)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb7">
                                            <label for="chb7" class="font-weight-medium">Designing (22)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Team Size</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb8">
                                            <label for="chb8" class="font-weight-medium">1 - 101 (16)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb9">
                                            <label for="chb9" class="font-weight-medium">101 - 201 (0)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb10">
                                            <label for="chb10" class="font-weight-medium">201 - 301 (0)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb11">
                                            <label for="chb11" class="font-weight-medium">301 - 401 (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb12">
                                            <label for="chb12" class="font-weight-medium">401 - 501 (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb13">
                                            <label for="chb13" class="font-weight-medium">501 - 601 (5)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
              <div class="employer-post-wrap">
                  <div class="tab-content" id="nav-tabContent">
                      <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                          <div class="job-content">
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html">IT Care Software LTD </a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Software Firm</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Aberdeen, United Kingdom</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_2" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html"> Healthyeat Company</a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Health & Medicine</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>San Francisco</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_3" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html">Digoin Creative LTD </a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Real Estate</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>New York City</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_4" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html">Homolant Real Estate </a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Real Estate</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Seattle</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_5" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html">Doitco Bank </a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Banking</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Baltimore</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_6" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html"> TeraPlaner</a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Toronto, Ontario</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
                              <div class="job-card job-card-layout">
                                  <div class="job-card-details d-flex align-items-center justify-content-between">
                                      <div class="card-head d-flex align-items-center">
                                          <div class="company-avatar mr-3">
                                              <a href="employer-details.html" class="d-block">
                                                  <svg class="card-svg" version="1.1" id="Capa_7" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                              <h4 class="card-title mb-1"><a href="employer-details.html">King LLC </a> </h4>
                                              <p class="card-sub">
                                                  <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Sales & Marketing</span>
                                                  <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Washington, D.C.</span>
                                              </p>
                                          </div>
                                      </div>
                                      <div class="btn-box">
                                          <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                      </div>
                                  </div>
                              </div><!-- end job-card -->
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
                                                          <svg class="card-svg" version="1.1" id="Capa_8" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html"> IT Care Software LTD</a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Software Firm</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Aberdeen, United Kingdom</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_9" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html">RevoTheme </a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Toronto, Ontario</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_10" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html"> Homolant Real Estate</a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Seattle</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_11" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html">Doitco Bank </a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Banking</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Baltimore</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_12" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html">TeraPlaner </a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Toronto, Ontario</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_13" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html"> King LLC</a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Sales & Marketing</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Washington, D.C.</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html">TeraPlaner </a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Toronto, Ontario</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html"> King LLC</a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Sales & Marketing</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Washington, D.C.</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_16" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html">TeraPlaner </a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Human Resources</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Toronto, Ontario</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
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
                                                          <svg class="card-svg" version="1.1" id="Capa_17" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.007 512.007" style="enable-background:new 0 0 512.007 512.007;" xml:space="preserve">
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
                                                      <h4 class="card-title mb-1"><a href="employer-details.html"> King LLC</a> </h4>
                                                      <p class="card-sub">
                                                          <span class="mr-2"><i class="la la-briefcase color-text-2 mr-1"></i>Sales & Marketing</span>
                                                          <span class="mr-2"><i class="la la-map-marker color-text-2 mr-1"></i>Washington, D.C.</span>
                                                      </p>
                                                  </div>
                                              </div>
                                              <div class="btn-box margin-top-30px">
                                                  <a href="job-details.html" class="theme-btn">4 Open Jobs</a>
                                              </div>
                                          </div><!-- end job-card-content -->
                                      </div><!-- end job-card -->
                                  </div><!-- end col-lg-6 -->
                              </div><!-- end row -->
                          </div><!-- end job-content -->
                      </div><!-- end tab-pane -->
                  </div>
              </div>
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="page-navigation-wrap margin-top-40px">
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

<!-- ================================
    START CTA AREA
================================= -->
<section class="cta-area padding-top-100px padding-bottom-80px cta-area-2 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading text-center">
                    <h2 class="sec__title">Let us help you get started</h2>
                </div><!-- end section-heading -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
        <div class="row mt-5">
            <div class="col-lg-4 column-td-6">
                <div class="post-card section-bg pb-5 pr-4 pl-4 pt-4">
                    <div class="post-card-content">
                        <img src="<?=base_url('assets/images/search.svg')?>" alt="" class="img-fluid">
                        <h2 class="widget-title mt-3">Are You Looking for a Job?</h2>
                        <p>
                            Objectively innovate empowered manufactured products whereas parallel platforms.
                        </p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box mt-4 text-center">
                        <a href="job-listing.html" class="theme-btn">Find a Job</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-6">
                <div class="post-card section-bg pb-5 pr-4 pl-4 pt-4">
                    <div class="post-card-content">
                        <img src="<?=base_url('assets/images/podcast.svg')?>" alt="" class="img-fluid">
                        <h2 class="widget-title mt-3">Employers Looking to Post a Job?</h2>
                        <p>
                            Objectively innovate empowered manufactured products whereas parallel platforms.
                        </p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box mt-4 text-center">
                        <a href="employer-dashboard-post-job.html" class="theme-btn">Post a Job</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 column-td-6">
                <div class="post-card section-bg pb-5 pr-4 pl-4 pt-4">
                    <div class="post-card-content">
                        <img src="<?=base_url('assets/images/data-points.svg')?>" alt="" class="img-fluid">
                        <h2 class="widget-title mt-3">Job Market Data</h2>
                        <p>
                            Objectively innovate empowered manufactured products whereas parallel platforms.
                        </p>
                    </div><!-- end post-card-content -->
                    <div class="btn-box mt-4 text-center">
                        <a href="employer-dashboard-post-job.html" class="theme-btn">Get Data</a>
                    </div><!-- end btn-box -->
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
    END CTA AREA
================================= -->

