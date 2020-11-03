<!DOCTYPE html>
<html lang="en">

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
                            <h2 class="sec__title mb-0">Candidates Listing</h2>
                        </div><!-- end section-heading -->
                        <ul class="list-items d-flex align-items-center">
                            <li class="active__list-item"><a href="index.html">Home</a></li>
                            <li class="active__list-item">Pages</li>
                            <li>Candidates Listing</li>
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
<section class="card-area padding-top-100px padding-bottom-110px">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="generic-header margin-bottom-30px">
                    <p class="showing__text text-left">Showing 1 to 14 of 128 results</p>
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
                                    <input class="form-control" type="text" placeholder="Job title or keywords">
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
                        <div class="sidebar-option mb-4">
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
                                <h3 class="widget-title">Job Type</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb1">
                                            <label for="chb1">Full Time</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb2">
                                            <label for="chb2">Part Time</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb3">
                                            <label for="chb3">Freelance</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb4">
                                            <label for="chb4">Temporary</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Filter by Experience</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb5">
                                            <label for="chb5">Fresh (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb6">
                                            <label for="chb6">Less Than 1 Year (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb7">
                                            <label for="chb7">2 Years (6)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb8">
                                            <label for="chb8">3 Years (3)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb9">
                                            <label for="chb9">4 Years (5)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb10">
                                            <label for="chb10">5 Years (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb11">
                                            <label for="chb11">6 Years (2)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb12">
                                            <label for="chb12">7 Years (4)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb13">
                                            <label for="chb13" class="font-weight-medium">8 Years + (3)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Filter by Rate</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <div id="slider-range"></div><!-- end slider-range -->
                                <div class="price-slider-amount">
                                    <label for="amount" class="filter__label">Price:</label>
                                    <input type="text" id="amount" class="amounts" readonly>
                                </div><!-- end price-slider-amount -->
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h3 class="widget-title">Filter by Skills</h3>
                        <div class="title-shape"></div>
                        <ul class="tag-list mt-4">
                            <li><a href="#">design</a></li>
                            <li><a href="#">react</a></li>
                            <li><a href="#">Doctor</a></li>
                            <li><a href="#">Front-end Dev</a></li>
                            <li><a href="#">wordpress</a></li>
                            <li><a href="#">marketing</a></li>
                            <li><a href="#">media</a></li>
                            <li><a href="#">vuejs</a></li>
                            <li><a href="#">web apps</a></li>
                            <li><a href="#">banking</a></li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Filter by Gender</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb14">
                                            <label for="chb14">Male (19)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb15">
                                            <label for="chb15">Female (30)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb16">
                                            <label for="chb16">Both (45)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="billing-form-item">
                            <div class="billing-title-wrap">
                                <h3 class="widget-title">Filter by Qualification</h3>
                                <div class="title-shape"></div>
                            </div><!-- billing-title-wrap -->
                            <div class="billing-content">
                                <ul>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb17">
                                            <label for="chb17">Certificate (16)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb18">
                                            <label for="chb18">Diploma (26)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb19">
                                            <label for="chb19">Associate Degree (13)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb20">
                                            <label for="chb20">Bachelor Degree (28)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb21">
                                            <label for="chb21">Master’s Degree (43)</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="custom-checkbox">
                                            <input type="checkbox" id="chb22">
                                            <label for="chb22">Doctorate Degree (27)</label>
                                        </div>
                                    </li>
                                </ul>
                            </div><!-- end billing-content -->
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <div class="btn-box">
                            <a href="#" class="theme-btn d-block w-100 text-center">Apply Filter</a>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-view" role="tabpanel" aria-labelledby="list-view-tab">
                        <div class="browse-candidate-wrap">
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> David Johnston</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Senior UI / UX Designer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                 </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul, Turkey</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="<?=site_url("candidate-details")?>" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> Ralph Johnson</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">iOS Expert + Node Dev</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i> London, United Kingdom</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$20 /hr</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="<?=site_url("candidate-details")?>" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">Lori Ramos </a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Front-End Developer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.4</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Toronto, Canada</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="<?=site_url("candidate-details")?>" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">Micheal Jorden </a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">IOS Developer</span>
                                            <span class="rating-rating">
                                                <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Brisbane, Australia</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team3.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> Mario Havens </a></h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Leader IT Engineer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Washington, United State</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team4.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> Sebastiano Piccio</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Graphic Designer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul, Turkey</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team5.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> David Ortega</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Web Developer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul, Turkey</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team6.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> David Johnston</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Senior UI / UX Designer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul, Turkey</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team4.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> Micheal N. Taylor</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Accounting Manager</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>San Francisco</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team5.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html"> Matthew Ruiz</a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Content Writer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Philadelphia</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$20 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">  David Johnston</a></h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">Senior UI / UX Designer</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i>Istanbul, Turkey</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                            <span>$25 /mo</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">Ralph Johnson </a></h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">iOS Expert + Node Dev</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i> London, United Kingdom</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$20 /hr</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">Ralph Johnson </a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">iOS Expert + Node Dev</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i> London, United Kingdom</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$20 /hr</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                            <div class="candidate-item d-flex align-items-center justify-content-between p-4">
                                <div class="bread-details d-flex">
                                    <div class="bread-img flex-shrink-0">
                                        <a href="candidate-details.html" class="d-block">
                                            <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                        </a>
                                    </div>
                                    <div class="candidate-content-item">
                                        <h2 class="widget-title pb-2"><a href="candidate-details.html">Ralph Johnson </a> </h2>
                                        <p class="font-size-15 color-text-3">
                                            <span class="mr-2">iOS Expert + Node Dev</span>
                                            <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                        </p>
                                        <p class="mt-1 font-size-15 color-text-3">
                                            <span class="mr-2"><i class="la la-map-marker mr-1"></i> London, United Kingdom</span>
                                            <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                            <span>$20 /hr</span>
                                        </p>
                                    </div><!-- end candidate-content-item -->
                                </div>
                                <div class="btn-box">
                                    <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                </div>
                            </div><!-- end candidate-item -->
                        </div><!-- end browse-candidate-wrap -->
                    </div><!-- end tab-pane -->
                    <div class="tab-pane fade" id="grid-view" role="tabpanel" aria-labelledby="grid-view-tab">
                        <div class="row text-center">
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html"> Matthew Ruiz </a></h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Content Writer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Philadelphia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html"> David Ortega</a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Accounting Manager</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Moscow, Russia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">  Lula Wallace</a></h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Front-End Developer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Toronto, Canada</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">Micheal N. Taylor </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">ios developer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Los Angeles</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team3.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">Marjorie Huber </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Graphics Designer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Seattle</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team4.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html"> Guy Appel </a></h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Engineer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Baltimore</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team5.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">Mario Havens </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Leader IT engineer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1">Washington, D.C.</i></span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Full time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team6.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">James C. Elliott </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Content Writer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>New York City</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">  Matthew Ruiz</a></h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Content Writer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Philadelphia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">David Ortega </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Accounting Manager</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Moscow, Russia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team1.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html"> Matthew Ruiz</a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Content Writer</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Philadelphia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                            <div class="col-lg-6 column-td-6">
                                <div class="candidate-item padding-top-40px padding-bottom-40px pr-4 pl-4">
                                    <div class="bread-details">
                                        <div class="bread-img mx-auto mb-3">
                                            <a href="candidate-details.html" class="d-block">
                                                <img src="<?=base_url('assets/images/small-team2.jpg')?>" alt="">
                                            </a>
                                        </div>
                                        <div class="candidate-content-item">
                                            <h2 class="widget-title pb-2"><a href="candidate-details.html">David Ortega </a> </h2>
                                            <p class="font-size-15 mt-1 color-text-3">
                                                <span class="mr-2">Accounting Manager</span>
                                                <span class="rating-rating">
                                                    <span class="rating-count">4.5</span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star"></span>
                                                    <span class="la la-star-half-alt"></span>
                                                </span>
                                            </p>
                                            <p class="mt-2 font-size-15 color-text-3">
                                                <span class="mr-2"><i class="la la-map-marker mr-1"></i>Moscow, Russia</span>
                                                <span class="mr-2"><i class="la la-clock-o mr-1"></i>Part time</span>
                                                <span>$20 /mo</span>
                                            </p>
                                        </div><!-- end candidate-content-item -->
                                    </div>
                                    <div class="btn-box mt-4">
                                        <a href="candidate-details.html" class="theme-btn"><i class="la la-user"></i> View Profile</a>
                                    </div>
                                </div><!-- end candidate-item -->
                            </div><!-- end col-lg-6 -->
                        </div><!-- end row -->
                    </div><!-- end tab-pane -->
                </div>
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
                        <a href="<?= site_url("admin/jobs")?>" class="theme-btn">Find a Job</a>
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
                        <a href="<?= site_url("admin/post-job")?>" class="theme-btn">Post a Job</a>
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

<div class="section-block"></div>


<!-- start back-to-top -->
<div id="back-to-top">
    <i class="fa fa-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- Template JS Files -->
<script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery-ui.js')?>"></script>
<script src="<?=base_url('assets/js/popper.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('assets/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('assets/js/isotope-3.0.6.min.js')?>"></script>
<script src="<?=base_url('assets/js/select2.min.js')?>"></script>
<script src="<?=base_url('assets/js/moment.min.js')?>"></script>
<script src="<?=base_url('assets/js/daterangepicker.js')?>"></script>
<script src="<?=base_url('assets/js/purecounter.js')?>"></script>
<script src="<?=base_url('assets/js/jquery.filer.min.js')?>"></script>
<script src="<?=base_url('assets/js/smooth-scrolling.js')?>"></script>
<script src="<?=base_url('assets/js/progresscircle.js')?>"></script>
<script src="<?=base_url('assets/js/main.js')?>"></script>
</body>

<!-- Mirrored from techydevs.com/demos/themes/html/zobstar/candidate-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Sep 2020 14:36:38 GMT -->
</html>