
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharma Software Assessment</title>
   
    <link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>images/favicon.ico" type="image/x-icon">

    <meta property="og:image" content="<?php echo e(asset('public/images/flatpages/zebra-patient-identity-banner-1.jpg')); ?>" />
    <link rel="canonical" href="<?php echo e(url('promotion/pharma-machinery-assessment')); ?>"/>

    <script src="<?php echo e(config('app.url')); ?>zebra/jquery-3.2.1.min.js"></script>
    <script src="<?php echo e(config('app.url')); ?>zebra/jquery.validate.min.js"></script>
    <script src="<?php echo e(config('app.url')); ?>zebra/jquery.bgswitcher.js"></script>
    <link href="<?php echo e(config('app.url')); ?>zebra/ProximaNova.css" rel="stylesheet">
    <link href="<?php echo e(config('app.url')); ?>zebra/style.css" rel="stylesheet">
    
    <style>
    td label { cursor:pointer;}
    .progress-numb { 
        margin-top: 10px;
        margin-bottom: 0px;
        padding-top: 5px;
        padding-bottom: 5px;
        text-align: center;
        font-size: 16px;
        color: #f5f5f5;
    }
    .table-sub{
        display: inline;
    }
    .table-sub tr{
        display: inline-table;
    }

    .table-sub tr td{
        font-size:11px;
    }
  
    .content .copy {
    padding: 0px 15px;
    background-color: #e4e3e4;
}
#main {
    height:auto;
}
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-91608244-1');
</script>

</head>



<body>
    
        <form id="elqForm" action="<?php echo e(route('PharmaSoftwareAssessment.post')); ?>" method="post" target="postFrame">
        <?php echo csrf_field(); ?>
            <input type="hidden" name="elqSiteId" value="1879417329">
            <input type="hidden" name="elqCustomerGuid">
            <input type="hidden" name="elqFormName" value="ZBR1853">
            <input type="hidden" name="tactic_type">
            <input type="hidden" name="tactic_detail">
            <input type="hidden" name="sfid">
            <input type="hidden" name="region">
            <input type="hidden" name="elqCampaignId" value="12529">
            <header>
                <div class="container" id="header">
                    <div class="row">
                        <div class="col-xs-6 text-left">
                        <img src="<?php echo e(config('app.url')); ?>images/logo.png" class="d-inline-block align-middle"
                            alt="Pharma Focus Asia" />    
                        </div>
                        <!-- <div class="col-xs-6 logo text-right">
                            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" class="" target="_blank">
                                <img src="<?php echo e(config('app.url')); ?>zebra/img/logo.png" class="img-fluid" alt="Zebra">
                            </a>    
                        </div>                                     -->
                    </div>
                </div>
                <div class="container" id="header-mobile">
                    <div class="row">
                        <div class="col-xs-6 text-left">
                        <img src="<?php echo e(config('app.url')); ?>images/logo.png" class="d-inline-block align-middle"
                            alt="Pharma Focus Asia" /> 
                        </div>
                        <!-- <div class="col-xs-6 text-left">
                            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">
                                <img src="<?php echo e(config('app.url')); ?>zebra/img/mobile-logo.png" class="img-fluid" srcset="<?php echo e(config('app.url')); ?>zebra/img/mobile-logo_2x.png 2x" alt="Zebra">
                            </a>
                        </div> -->

                    </div>
                </div>
            </header>

            <section id="main">
                <div id="mask">
                    <div id="panelContainer">
                        <div class="panel" id="registration" data-next="question1">
                            <div class="content center up">
                                <div class="header">
                                    <h1>Pharma Software Assessment</h1>
                                </div>
                                <div class="stripe">

                                </div>
                                <div class="copy">
                                    <div>
                                    We are the leading international provider of Manufacturing Execution Systems (MES) and manufacturing IT solutions for the pharmaceutical and biotech industries.
                                        <br>
                                        <br> Digital advancement is changing the way we learn. That’s why we have developed a high-quality, flexible, and increasingly digital learning concept for our customers that effectively augments traditional training courses. The Pharma Focus Asia is the central platform for all of the companies of the Business Area Pharma.
                                        <br>Why take the Pharma Software assessment?<br>
                                        <br>We provide you with the following:<br><br>

                                        
                
                    Knowledge about machines, software, and systems<br>
                   Individualized learning paths<br>
                    Accessibility from anywhere and at any time<br>
                    Micro training content
          
                                    </div><br>
                                    <ul>
                                        <li>
                                            <input type="text" name="FirstName" placeholder="First Name *" autocomplete="given-name" class="required" tabindex="1">
                                        </li>
                                        <li>
                                            <input type="text" name="LastName" placeholder="Last Name *" autocomplete="family-name" class="required" tabindex="2">
                                        </li>
                                        <li>
                                            <input type="text" name="emailAddress" placeholder="Email *" autocomplete="email" class="required email" tabindex="4">
                                        </li>
                                        <li>
                                            <input type="text" name="Phone" placeholder="Phone" autocomplete="tel" tabindex="5">
                                        </li>
                                        <li>
                                            <input type="text" name="company" placeholder="Company *" class="required" autocomplete="off" tabindex="3" style='width:300px;'>
                                        </li>
                                        
                                        <li>
                                            <select name="Country" class="required" autocomplete="country-name" tabindex="6">
                                                <option value="">Country *</option>
                                                <option value="AF">Afghanistan</option>
                                                <option value="AX">Åland Islands</option>
                                                <option value="AL">Albania</option>
                                                <option value="DZ">Algeria</option>
                                                <option value="AS">American Samoa</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antarctica</option>
                                                <option value="AG">Antigua and Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armenia</option>
                                                <option value="AW">Aruba</option>
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
                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                <option value="BA">Bosnia and Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Bouvet Island</option>
                                                <option value="BR">Brazil</option>
                                                <option value="IO">British Indian Ocean Territory</option>
                                                <option value="BN">Brunei Darussalam</option>
                                                <option value="BG">Bulgaria</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BI">Burundi</option>
                                                <option value="CV">Cabo Verde</option>
                                                <option value="KH">Cambodia</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CA">Canada</option>
                                                <option value="KY">Cayman Islands</option>
                                                <option value="CF">Central African Republic</option>
                                                <option value="TD">Chad</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Christmas Island</option>
                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                <option value="CO">Colombia</option>
                                                <option value="KM">Comoros</option>
                                                <option value="CG">Congo</option>
                                                <option value="CD">Congo, the Democratic Republic</option>
                                                <option value="CK">Cook Islands</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Côte d'Ivoire</option>
                                                <option value="HR">Croatia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CW">Curaçao</option>
                                                <option value="CY">Cyprus</option>
                                                <option value="CZ">Czech Republic</option>
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
                                                <option value="ET">Ethiopia</option>
                                                <option value="FK">Falkland Islands (Malvinas)</option>
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
                                                <option value="GP">Guadeloupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guinea</option>
                                                <option value="GW">Guinea-Bissau</option>
                                                <option value="GY">Guyana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                <option value="VA">Holy See (Vatican City State)</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong</option>
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
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="XK">Kosovo</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macao</option>
                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malaysia</option>
                                                <option value="MV">Maldives</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Marshall Islands</option>
                                                <option value="MQ">Martinique</option>
                                                <option value="MR">Mauritania</option>
                                                <option value="MU">Mauritius</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">Mexico</option>
                                                <option value="FM">Micronesia, Federated States of</option>
                                                <option value="MD">Moldova, Republic of</option>
                                                <option value="MC">Monaco</option>
                                                <option value="MN">Mongolia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="MM">Myanmar</option>
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
                                                <option value="NF">Norfolk Island</option>
                                                <option value="MP">Northern Mariana Islands</option>
                                                <option value="NO">Norway</option>
                                                <option value="OM">Oman</option>
                                                <option value="PK">Pakistan</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Palestine, State of</option>
                                                <option value="PA">Panama</option>
                                                <option value="PG">Papua New Guinea</option>
                                                <option value="PY">Paraguay</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Philippines</option>
                                                <option value="PL">Poland</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Puerto Rico</option>
                                                <option value="QA">Qatar</option>
                                                <option value="RE">Réunion</option>
                                                <option value="RO">Romania</option>
                                                <option value="RU">Russian Federation</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="BL">Saint Barthélemy</option>
                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option value="KN">Saint Kitts and Nevis</option>
                                                <option value="LC">Saint Lucia</option>
                                                <option value="MF">Saint Martin (French part)</option>
                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">San Marino</option>
                                                <option value="ST">Sao Tome and Principe</option>
                                                <option value="SA">Saudi Arabia</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Serbia</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SG">Singapore</option>
                                                <option value="SX">Sint Maarten (Dutch part)</option>
                                                <option value="SK">Slovakia</option>
                                                <option value="SI">Slovenia</option>
                                                <option value="SB">Solomon Islands</option>
                                                <option value="SO">Somalia</option>
                                                <option value="ZA">South Africa</option>
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="SS">South Sudan</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="SE">Sweden</option>
                                                <option value="CH">Switzerland</option>
                                                <option value="SY">Syrian Arab Republic</option>
                                                <option value="TW">Taiwan, Province of China</option>
                                                <option value="TJ">Tajikistan</option>
                                                <option value="TZ">Tanzania, United Republic of</option>
                                                <option value="TH">Thai</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Tokelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad and Tobago</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="TR">Turkey</option>
                                                <option value="TM">Turkmenistan</option>
                                                <option value="TC">Turks and Caicos Islands</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ukraine</option>
                                                <option value="AE">United Arab Emirates</option>
                                                <option value="GB">United Kingdom</option>
                                                <option value="US">United States</option>
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                <option value="VN">Vietnam</option>
                                                <option value="VG">Virgin Islands, British</option>
                                                <option value="VI">Virgin Islands, U.S.</option>
                                                <option value="WF">Wallis and Futuna</option>
                                                <option value="EH">Western Sahara</option>
                                                <option value="YE">Yemen</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                            </select>
                                        </li>
                                        <!-- <li>
                                            <select name="industry" class="required" tabindex="7">
                                                <option value="">Industry *</option>
                                                <option value="Manufacturing">Manufacturing</option>
                                                <option value="Retail">Retail</option>
                                                <option value="Transportation and Logistics">Transportation and Logistics</option>
                                                <option value="Healthcare">Healthcare</option>
                                                <option value="Government">Government</option>
                                                <option value="Education">Education</option>
                                                <option value="Service Providers">Service Providers</option>
                                                <option value="Hospitality">Hospitality</option>
                                            </select>
                                        </li> -->
                                        <li style="float:none !important; clear:both !important;"></li>
                                        <p class="text-left">
                                            <label for="zOptIn">
                                                <input type="checkbox" name="zOptIn" id="zOptIn" value="on" tabindex="8"> I would like to receive future communications from Pharma Focus Asia.</label>
                                        </p>
                                        <!-- <li><input type="checkbox" name="zOptIn" id="zOptIn" value="on"> 
                                            <label for="zOptIn"><p>Yes, I have read &amp; agreed to Zebra Technologies Privacy Policy &amp; Terms of Use
                                            and agree to receive news on products, services and solutions from Zebra Technologies.
                                            At any time, I understand that I am able to unsubscribe from these electronic
                                            direct mailers (EDM) by clicking on the unsubscribe link provided in each EDM.
                                            </p>
                                        </label>
                                        </li> -->
                                    </ul>
                                    <span>* Required field.</span>
                                </div>

                                <div class="cta" >
                                    <input type="button" value="Take the Assessment">
                                </div>
                            </div>
                        </div>
                        <div class="panel" id="question1" data-prev="registration" data-next="question2">
                        <div class="content left up">
                            <div class="header">
                                <h3>Does your organization have a digitization strategy in manufacturing? </h3>
                                <p class="progress-numb">( 1 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1a" value="Yes" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question1a">Yes
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1b" value="No" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question1b">No</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1c" value="I don't know" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question1c">I don't know</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question2" data-prev="question1" data-next="question3">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is the organization's motivation for digitization?</h3>
                                <p class="progress-numb">( 2 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2a" value="Cost reductions" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">Cost reductions</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2b" value="Agility" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2b">Agility</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2c" value="Quality Improvement" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2c">Quality Improvement</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2d" value="Innovation" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2d">Innovation</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2e" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2e">Other, pls specify</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question2[]" rows="2"></textarea>
                                        </td></tr>
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question3" data-prev="question2" data-next="question4">
                        <div class="content left down">
                            <div class="header">
                                <h3>Which Manufacturing IT systems are already in place/in implementation?</h3>
                                <p class="progress-numb">( 3 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3a" value="Enterprise Resource Planing (ERP)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3a">Enterprise Resource Planing (ERP)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3b" value="Weighing & Dispensing System (WD) / Raw Material Weighing System (RWS)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3b">Weighing & Dispensing System (WD) / Raw Material Weighing System (RWS)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3c" value="Lab Information Management System (LIMS) /Lab Execution System (LES)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c">Lab Information Management System (LIMS) /Lab Execution System (LES)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Automation Systems (SCADA / DCS / PLC)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d">Automation Systems (SCADA / DCS / PLC)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3e" value="Document Management System (DMS)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3e">Document Management System (DMS)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3f" value="Electronic Quality Management system (eQMS / CAPA)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3f">Electronic Quality Management system (eQMS / CAPA)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3g" value="Warehouse Management System (WMS)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3g">Warehouse Management System (WMS)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3h" value="Performance Management (KPIs/OEE)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3h">Performance Management (KPIs/OEE)</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3i" value="Connectivity & Storage Platforms (IIoT, Historian)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3i">Connectivity & Storage Platforms (IIoT, Historian)</label>
                                        </td>
                                    </tr>

                                    


                                    

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3j" value="Advanced Data Analytics" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3j">Advanced Data Analytics</label>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3k" value="Intelligence management & maintenance of equipment (OEE)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3k">Intelligence management & maintenance of equipment (OEE)</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question4" data-prev="question3" data-next="question5">
                        <div class="content left up">
                            <div class="header">
                                <h3>Are you using a Manufacturing Execution System (MES) or Electronic Batch Recording (EBR) in your company?</h3>
                                <p class="progress-numb">( 4 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4a" value="Yes" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question4a">Yes
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4b" value="No" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question4b">No</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4c" value="I don't know" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question4c">I don't know</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question5" data-prev="question4" data-next="question6">
                        <div class="content left up">
                            <div class="header">
                                <h3>Which MES system are you using? / Which vendor?</h3>
                                <p class="progress-numb">( 5 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                <tr>
                                        
                                        <td>
                                            <input type="radio" name="question5[]" id="question5a" value="" data-score="3">
                                        </td>
                                        
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question5[]" rows="2"></textarea>
                                        </td></tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question6" data-prev="question5" data-next="question7">
                        <div class="content left up">
                            <div class="header">
                                <h3>Did the vendor execute the project or did you work with an implementation/ endorsement partner? </h3>
                                <p class="progress-numb">( 6 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question6[]" id="question6a" value="Vendor executed the project" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question6a">Vendor executed the project
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question6[]" id="question6b" value="Implementation partner executed the project" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question6b">Implementation partner executed the project</label>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question7" data-prev="question6" data-next="question8">
                        <div class="content left down">
                            <div class="header">
                                <h3>What were the main reasons that you worked with an implementation/ endorsement partner & not the vendor?</h3>
                                <p class="progress-numb">( 7 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7a" value="Local language" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7a">Local language</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7b" value="Preference/Cultural reasons (e.g. prefer to work with local partner)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7b">Preference/Cultural reasons (e.g. prefer to work with local partner)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7c" value="Capacity constraints of international vendor in the market" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7c">Capacity constraints of international vendor in the market</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7d" value="Vendor strategy (does only work with implementation partner in the market)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7d">Vendor strategy (does only work with implementation partner in the market)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7e" value="Price/Daily rates more attractive" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7e">Price/Daily rates more attractive</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question7[]" id="question7f" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7f">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question7[]" rows="2"></textarea>
                                        </td></tr>

                                    

                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn7" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question8" data-prev="question7" data-next="question9">
                        <div class="content left down">
                            <div class="header">
                                <h3>What were the main reasons that you worked with the vendor & not an implementation partner?</h3>
                                <p class="progress-numb">( 8 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8a" value="No local partner available/able to do the project execution" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8a">No local partner available/able to do the project execution</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8b" value="Capability & Expertise of the vendor" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8b">Capability & Expertise of the vendor</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8c" value="Relationship to the vendor/Trust" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8c">Relationship to the vendor/Trust</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8d" value="Based on company policy" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8d">Based on company policy</label>
                                        </td>
                                    </tr>
                                    

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8e" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8e">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question8[]" rows="2"></textarea>
                                        </td></tr>

                                    

                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn8"  value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question9" data-prev="question8" data-next="question10">
                        <div class="content left down">
                            <div class="header">
                                <h3>What was your motivation to implement an MES solution?</h3>
                                <p class="progress-numb">( 9 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question9[]" id="question9a" value="Reduction of errors" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9a">Reduction of errors</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question9[]" id="question9b" value="Increase data integrity & compliance with regulatory requirements" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9b">Increase data integrity & compliance with regulatory requirements</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question9[]" id="question9c" value="Efficiency & visbility" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9c">Efficiency & visbility</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question9[]" id="question9d" value="Review by exception" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9d">Review by exception</label>
                                        </td>
                                    </tr>
                                    

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question9[]" id="question9e" value="Comply with anti-counterfeiting requirements" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9e">Comply with anti-counterfeiting requirements</label>
                                        </td>
                                    </tr>

                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn9" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question10" data-prev="question9" data-next="question11">
                        <div class="content left up">
                            <div class="header">
                                <h3>How is your MES system hosted? </h3>
                                <p class="progress-numb">( 10 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question10[]" id="question10a" value="On-premises" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question10a">On-premises
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question10[]" id="question10b" value="Cloud" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question10b">Cloud</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question10[]" id="question10c" value="SaaS" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question10c">SaaS</label>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question11" data-prev="question10" data-next="question12">
                        <div class="content left down">
                            <div class="header">
                                <h3>What was your motivation to host the system on-premise?</h3>
                                <p class="progress-numb">( 11 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question11[]" id="question11a" value="Data concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11a">Data concerns</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question11[]" id="question11b" value="Cyber security concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11b">Cyber security concerns</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question11[]" id="question11c" value="Limited cloud system availability" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11c">Limited cloud system availability</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question11[]" id="question11d" value="Internet stability/connection concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11d">Internet stability/connection concerns</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn11" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question12" data-prev="question11" data-next="question13">
                        <div class="content left down">
                            <div class="header">
                                <h3>What was your motivation to host the system in the cloud/SaaS?</h3>
                                <p class="progress-numb">( 12 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12a" value="Cloud first strategy" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12a">Cloud first strategy</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12b" value="No local data center" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12b">No local data center</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12c" value="Digital strategy" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12c">Digital strategy</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12d" value="Low capital expenditure" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12d">Low capital expenditure</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12e" value="Outsourcing of IT functions & data center" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12e">Outsourcing of IT functions & data center</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12f" value="Cost reduction" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12f">Cost reduction</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question12[]" id="question12g" value="Scalability to multiple sites" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12g">Scalability to multiple sites</label>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button"  id="btn12" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question13" data-prev="question12" data-next="question14">
                        <div class="content left down">
                            <div class="header">
                                <h3>What were the main reasons that you did not implement an MES solution yet?</h3>
                                <p class="progress-numb">( 13 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13a" value="Price/too expensive" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13a">Price/too expensive</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13b" value="No benefit" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13b">No benefit</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13c" value="Other priorities" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13c">Other priorities</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13d" value="Missing know-how" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13d">Missing know-how</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13e" value="No regulatory requirement" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13e">No regulatory requirement</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13f" value="No Return on Investment (ROI)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13f">No Return on Investment (ROI)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question13[]" id="question13g" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13g">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea name="question15[]" cols="30" rows="2"></textarea>
                                        </td></tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question14" data-prev="question13" data-next="question15">
                        <div class="content left up">
                            <div class="header">
                                <h3>Do you plan in the future to implement an MES/EBR solution?</h3>
                                <p class="progress-numb">( 14 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14a" value="Yes" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question14a">Yes
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14b" value="No, and why" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question14b">No, and why</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14c" value="I don't know" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question14c">I don't know</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question15" data-prev="question14" data-next="question16">
                        <div class="content left up">
                            <div class="header">
                                <h3>What is your motivation to implement an MES solution?</h3>
                                <p class="progress-numb">( 15 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15a" value="Reduction of errors" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question15a">Reduction of errors
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15b" value="Increase data integrity & compliance with regulatory requirements" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question15b">Increase data integrity & compliance with regulatory requirements</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15c" value="Efficiency & visbility" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question15c">Efficiency & visbility</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15d" value="Review by exception" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question15d">Review by exception</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15e" value="Comply with anti-counterfeiting requirements" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question15e">Comply with anti-counterfeiting requirements</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question16" data-prev="question15" data-next="question17">
                        <div class="content left up">
                            <div class="header">
                                <h3>How do you plan to host your MES solution?</h3>
                                <p class="progress-numb">( 16 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16a" value="On-premises" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question16a">On-premises
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16b" value="Cloud" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question16b">Cloud</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16c" value="SaaS" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question16c">SaaS</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question17" data-prev="question16" data-next="question18">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is your motivation to host the system on-premise?</h3>
                                <p class="progress-numb">( 17 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question17[]" id="question17a" value="Data concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question17a">Data concerns</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question17[]" id="question17b" value="Cyber security concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question17b">Cyber security concerns</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question17[]" id="question17c" value="Limited cloud system availability" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question17c">Limited cloud system availability</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question17[]" id="question17d" value="Internet stability/connection concerns" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question17d">Internet stability/connection concerns</label>
                                        </td>
                                    </tr>

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn17" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question18" data-prev="question17" data-next="question19">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is your motivation to host the system in the cloud/SaaS?</h3>
                                <p class="progress-numb">( 18 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18a" value="Cloud first strategy" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18a">Cloud first strategy</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18b" value="No local data center" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18b">No local data center</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18c" value="Digital strategy" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18c">Digital strategy</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18d" value="Low capital expenditure" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18d">Low capital expenditure</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18e" value="Outsourcing of IT functions & data center" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18e">Outsourcing of IT functions & data center</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18f" value="Cost reduction" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18f">Cost reduction</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question18[]" id="question18g" value="Scalability to multiple sites" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question18g">Scalability to multiple sites</label>
                                        </td>
                                    </tr>

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question19" data-prev="question18" data-next="question20">
                        <div class="content left up">
                            <div class="header">
                                <h3>How do you plan to host your MES solution?</h3>
                                <p class="progress-numb">( 19 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19a" value="< $5k/year" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question19a">< $5k/year
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19b" value="$5k-7.5k/year" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question19b">$5k-7.5k/year</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19c" value="$7.5k-10k/year" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question19c">$7.5k-10k/year</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19d" value="$10k-15k/year" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question19d">$10k-15k/year
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19e" value="$15-20k/year" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question19e">$15-20k/year</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question19[]" id="question19f" value="> $20k/year" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question19f">> $20k/year</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question20" data-prev="question19" data-next="question21">
                        <div class="content left up">
                            <div class="header">
                                <h3>Who are the MES solution providers you recognize in the market? Pls list down the names.</h3>
                                <p class="progress-numb">( 20 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                <tr>
                                <td>
                                            <input type="radio" name="question20[]" id="question20a" value="" data-score="3">
                                        </td>
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question20[]" rows="2"></textarea>
                                        </td></tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question21" data-prev="question20" data-next="question22">
                        <div class="content left up">
                            <div class="header">
                                <h3>Do you plan to work with an implementation partner or let the vendor execute the project?</h3>
                                <p class="progress-numb">( 21 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question21[]" id="question21a" value="Vendor" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">Vendor
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question21[]" id="question21b" value="Implementation partner" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question21b">Implementation partner</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question21[]" id="question21c" value="I don't know yet" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question2c">I don't know yet</label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="question22" data-prev="question21" data-next="question23">
                        <div class="content left down">
                            <div class="header">
                                <h3>What are the main reasons that you want to work with an implementation/ endorsement partner & not the vendor?</h3>
                                <p class="progress-numb">( 22 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22a" value="Local language" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22a">Local language</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22b" value="Preference/Cultural reasons (e.g. prefer to work with local partner)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22b">Preference/Cultural reasons (e.g. prefer to work with local partner)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22c" value="Capacity constraints of international vendor in the market" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22c">Capacity constraints of international vendor in the market</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22d" value="Vendor strategy (does only work with implementation partner in the market)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22d">Vendor strategy (does only work with implementation partner in the market)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22e" value="Price/Daily rates more attractive" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22e">Price/Daily rates more attractive</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question22[]" id="question22f" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question22f">Other, pls specify</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question22[]" rows="2"></textarea>
                                        </td></tr>

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" id="btn22" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question23" data-prev="question22" data-next="question24">
                        <div class="content left down">
                            <div class="header">
                                <h3>What are the main reasons that you want to work with the vendor & not an implementation/ endorsement partner?</h3>
                                <p class="progress-numb">( 23 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question23[]" id="question23a" value="No local partner available/able to do the project execution" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question23a">No local partner available/able to do the project execution</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question23[]" id="question23b" value="Capability & Expertise of the vendor" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question23b">Capability & Expertise of the vendor</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question23[]" id="question23c" value="Relationship to the vendor/Trust" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question23c">Relationship to the vendor/Trust</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question23[]" id="question23d" value="Customer preference in vendors to perform the project exceution" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question23d">Customer preference in vendors to perform the project exceution</label>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question23[]" id="question23e" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question23e">Other, pls specify</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question24" data-prev="question23" data-next="question25">
                        <div class="content left up">
                            <div class="header">
                                <h3>What do you usually prefer in IT projects? Local or international partner?</h3>
                                <p class="progress-numb">( 24 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question24[]" id="question24a" value="Local" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question24a">Local
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question24[]" id="question24b" value="International" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question24b">International</label>
                                        </td>
                                    </tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question25" data-prev="question24" data-next="question26">
                        <div class="content left up">
                            <div class="header">
                                <h3>Why? What are the reasons?</h3>
                                <p class="progress-numb">( 25 of 33 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25a" value="Local language" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question25a">Local language
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25b" value="Preference/Cultural reasons (e.g. prefer to work with local partner)" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question25b">Preference/Cultural reasons (e.g. prefer to work with local partner)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25c" value="Price/Daily rates more attractive" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question25c">Price/Daily rates more attractive
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25d" value="Availability" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question25d">Availability</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25e" value="Relationship" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question25e">Relationship</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question25[]" id="question25f" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question25f">Other, pls specify</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    
                    <div class="panel" id="question26" data-prev="question25" data-next="question27">
                        <div class="content left down">
                            <div class="header">
                                <h3>How important are the following decision criteria for the machinery requirement in your organization?</h3>
                                <p class="progress-numb">( 26 of 33 )</p>
                            </div>
                            <!-- <div class="stripe">Select all that apply</div> -->
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26a" value="At bedside to label specimens." data-score="1">
                                        </td>
                                        <td class=''>
                                            <label for="question26a" class='q2l'>Capital investment (Price)</label>
                                            <table style='display:inline;' class='table-sub'>
                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="radio" name="question26[]" id="question26a1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26a1">not important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="radio" name="question26[]" id="question26a2" value="little important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question26a2">little important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="radio" name="question26[]" id="question26a3" value="moderately" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question26a3">moderately</label>
    </td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="radio" name="question26[]" id="question26a4" value="very important" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question26a4">very important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="radio" name="question26[]" id="question26a5" value="extremely important" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question26a5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26b" value="Delivery time" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b" class='q2l'>Delivery time</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26b1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26b2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26b3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26b4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26b5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26b5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26c" value="Performance/ Quality" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c" class='q2l'> Scaleability</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26c1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26c2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26c3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26c4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26c5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26c5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26d" value="Flexibility" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d" class='q2l'>Local reference</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26d1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26d2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26d3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26d4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26d5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26d5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26e" value="Local implementation team" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e" class='q2l'>Local implementation team</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26e1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26e2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26e3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26e4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26e5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26e5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26f" value="Customization" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question26f" class='q2l'>Customization</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26f1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26f1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26f2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26f2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26f3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26f3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26f4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26f4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26f5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26f5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question26[]" id="question26g" value="Local reference" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question26g" class='q2l'>Local after sales support</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26g1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26g1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26g2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26g2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26g3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26g3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26g4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26g4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="radio" name="question26[]" id="question26g5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question26g5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question27" data-prev="question26" data-next="question28">
                        <div class="content left down">
                            <div class="header">
                                <h3>How do you manage data from different sources (such as LIMS, Historian, MES) and from Process Development?</h3>
                                <p class="progress-numb">( 27 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question27[]" id="question27a" value="Manual import to Excel" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question27a">Manual import to Excel</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question27[]" id="question27b" value="I use a historian, but data from process development is missing" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question27b">I use a historian, but data from process development is missing</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question27[]" id="question27c" value="Automated import with direct data contextualization (not just data storage)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question27c">Automated import with direct data contextualization (not just data storage)</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question27[]" id="question27d" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question27d">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question27[]" id="question27e" value="I don't know" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question27e">I don't know</label>
                                        </td>
                                    </tr>
                                  

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question28" data-prev="question27" data-next="question29">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is hindering you to speed up process development work?</h3>
                                <p class="progress-numb">( 28 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28a" value="Access to prior knowledge" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28a">Access to prior knowledge</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28b" value="Retrieving data" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28b">Retrieving data</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28c" value="Decision making on the results" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28c">Decision making on the results</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28d" value="Lack of parallel / robotization" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28d">Lack of parallel / robotization</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28e" value="Lack of speed in data analysis compared to data generation" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28e">Lack of speed in data analysis compared to data generation</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question28[]" id="question28f" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question28f">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2c" value="I don't know" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2c">I don't know</label>
                                        </td>
                                    </tr>
                                  

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question29" data-prev="question28" data-next="question30">
                        <div class="content left down">
                            <div class="header">
                                <h3>How do you transfer the process development results to the next step in the product life cycle and/or report them to colleagues?</h3>
                                <p class="progress-numb">( 29 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question29[]" id="question29a" value="Word or Power Point" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question29a">Word or Power Point</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question29[]" id="question29b" value="Excel or jpm plots" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question29b">Excel or jpm plots</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question29[]" id="question29c" value="Integrated Data Management and Data Analysis Platform" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question29c">Integrated Data Management and Data Analysis Platform</label>
                                        </td>
                                    </tr>

                                    
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question29[]" id="question29d" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question29d">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question29[]" id="question29e" value="I don't know" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question29e">I don't know</label>
                                        </td>
                                    </tr>
                                  

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question30" data-prev="question29" data-next="question31">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is your methodology to reduce the number of experiments?</h3>
                                <p class="progress-numb">( 30 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30a" value="No need. I run highly parallelized experiments" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30a">No need. I run highly parallelized experiments</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30b" value="I prioritize on a few Critical Process Parameters (CPPs) based on prior knowledge" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30b">I prioritize on a few Critical Process Parameters (CPPs) based on prior knowledge</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30c" value="I do comprehensive Design of Experiments (DoEs)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30c">I do comprehensive Design of Experiments (DoEs)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30d" value="I use my prior knowledge and use digital twins" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30d">I use my prior knowledge and use digital twins</label>
                                        </td>
                                    </tr>

                                    
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30e" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30e">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                   
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question30[]" id="question30f" value="I don't know" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question30f">I don't know</label>
                                        </td>
                                    </tr>
                                  

                                    
                                    
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question31" data-prev="question30" data-next="question32">
                        <div class="content left down">
                            <div class="header">
                                <h3>Where do you feel like losing time in your daily process development work?</h3>
                                <p class="progress-numb">( 31 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question31[]" id="question31a" value="Data gathering and automation of data analysis" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question31a">Data gathering and automation of data analysis</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question31[]" id="question31b" value="Decision making in case of process disturbances" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question31b">Decision making in case of process disturbances</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question31[]" id="question31c" value="Manual reporting" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question31c">Manual reporting</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question31[]" id="question31d" value="Data entry inhomogeneity and search for work arounds" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question31d">Data entry inhomogeneity and search for work arounds</label>
                                        </td>
                                    </tr>

                                    
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question31[]" id="question31e" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question31e">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" rows="2"></textarea>
                                        </td></tr>
                                   
                                                     
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question32" data-prev="question31" data-next="question33">
                        <div class="content left down">
                            <div class="header">
                                <h3>Are you planning to invest in a data management and analysis tool to accelerate commercialization and ensure data integrity?</h3>
                                <p class="progress-numb">( 32 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question32[]" id="question32a" value="Yes for process development" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question32a">Yes for process development</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question32[]" id="question32b" value="Yes for process validation" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question32b">Yes for process validation</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question32[]" id="question32c" value="Yes for manufactuing" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question32c">Yes for manufactuing</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question32[]" id="question32d" value="None of them" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question32d">None of them</label>
                                        </td>
                                    </tr>

                                                     
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question33" data-prev="question32" data-next="results">
                        <div class="content left down">
                            <div class="header">
                                <h3>What would be the estimated expense per user and month?</h3>
                                <p class="progress-numb">( 33 of 33 )</p>
                            </div>
                            <div class="stripe">Select all that apply</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33a" value="up to 30 US$" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33a">up to 30 US$</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33b" value="up to 60 US$" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33b">up to 60 US$</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33c" value="up to 90 US$" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33c">up to 90 US$</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33d" value="up to 120 US$" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33d">up to 120 US$</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33e" value="up to 150 US$" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33e">up to 150 US$</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question33[]" id="question33f" value="I dont know" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question33f">I dont know</label>
                                        </td>
                                    </tr>

                                                     
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Submit">
                            </div>
                        </div>
                    </div>

                    
                    <div class="panel" id="results">
                        <div class="content center">
                            <!-- <img id="resultIcon" src=""> -->
                            <!-- <h1 id="resultHeading"></h1> -->
                            <!-- <p id="resultCopy">
                                <div id="resources"> -->
                                    <!-- <table></table> -->
                                    <p>Thank you for answering all the questions.Your assessment is complete.</p>
                                    <br>
                    Thank You
                    <br>
                    Client Success Team – CRM
                    <br>
                    Pharma Focus Asia
                                </div>
                                <!-- <div id="standards">
                                    Are you complying with GS1 healthcare barcode standards?
                                    <br>
                                    <a href="https://www.gs1.org/industries/healthcare?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">Find out now.</a>
                                    <div class="cta">
                                        <a href="https://www.zebra.com/ap/en/solutions/healthcare.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">Zebra Healthcare Solution</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div id="endPanel"></div>
                    </div>
                </div>
            </section>
            <section id="progress" class="table-responsive">
                <table cellspacing="0" cellpadding="0" border="0" class="table">
                    <tr>
                        <td id="progress1" data-panel="question1" class="active" data-disabled="true">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-1-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-1.png" class="inactive">
                        </td>
                        <td id="progress2" data-panel="question2" class="inactive" data-disabled="true">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-2-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-2.png" class="inactive">
                        </td>
                        <td id="progress3" data-panel="question3" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-3-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-3.png" class="inactive">
                        </td>
                        <td id="progress4" data-panel="question4" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-4-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-4.png" class="inactive">
                        </td>
                        <td id="progress5" data-panel="question5" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-5-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-5.png" class="inactive">
                        </td>
                        <td id="progress6" data-panel="question6" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-6-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-6.png" class="inactive">
                        </td>
                        <td id="progress7" data-panel="question7" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-7-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-7.png" class="inactive">
                        </td>
                        <td id="progress8" data-panel="question8" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-8-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-8.png" class="inactive">
                        </td>
                        <td id="progress9" data-panel="question9" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-9-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-9.png" class="inactive">
                        </td>

                        <td id="progress10" data-panel="question10" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-10-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-10.png" class="inactive">
                        </td>
                        <td id="progress11" data-panel="question11" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-11-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-11.png" class="inactive">
                        </td>
                        <td id="progress12" data-panel="question12" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-12-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-12.png" class="inactive">
                        </td>
                        <td id="progress13" data-panel="question13" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-13-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-13.png" class="inactive">
                        </td>
                        <td id="progress14" data-panel="question14" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-14-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-14.png" class="inactive">
                        </td>
                        <td id="progress15" data-panel="question15" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-15-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-15.png" class="inactive">
                        </td>
                        <td id="progress16" data-panel="question16" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-16-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress1-16.png" class="inactive">
                        </td>
                        
                    </tr>

                    <tr>
                    <td id="progress17" data-panel="question17" class="inactive" data-disabled="true">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-17-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress1-17.png" class="inactive">
                        </td>
                        <td id="progress18" data-panel="question18" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-18-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-18.png" class="inactive">
                        </td>
                        <td id="progress19" data-panel="question19" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-19-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-19.png" class="inactive">
                        </td>
                        <td id="progress20" data-panel="question20" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-20-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-20.png" class="inactive">
                        </td>
                        <td id="progress21" data-panel="question21" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-21-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-21.png" class="inactive">
                        </td>
                        <td id="progress22" data-panel="question22" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-22-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-22.png" class="inactive">
                        </td>
                        <td id="progress23" data-panel="question23" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-23-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-23.png" class="inactive">
                        </td>
                        <td id="progress24" data-panel="question24" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-24-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-24.png" class="inactive">
                        </td>

                        <td id="progress25" data-panel="question25" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-25-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-25.png" class="inactive">
                        </td>
                        <td id="progress26" data-panel="question26" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-26-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-26.png" class="inactive">
                        </td>
                        <td id="progress27" data-panel="question27" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-27-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-27.png" class="inactive">
                        </td>
                        <td id="progress28" data-panel="question28" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-28-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-28.png" class="inactive">
                        </td>
                        <td id="progress29" data-panel="question29" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-29-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-29.png" class="inactive">
                        </td>
                        <td id="progress30" data-panel="question30" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-30-active.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-30.png" class="inactive">
                        </td>
                        <td id="progress31" data-panel="question31" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-31-active1.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-31.png" class="inactive">
                        </td>
                        <td id="progress32" data-panel="question32" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-32-active1.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-32.png" class="inactive">
                        </td>
                        <!-- <td id="progress33" data-panel="question33" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-33-active1.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-33.png" class="inactive">
                        </td> -->
                    </tr>
                    <tr>
                    <td id="progress33" data-panel="question33" class="inactive">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-33-active1.png" class="active">
                            <img src="<?php echo e(config('app.url')); ?>zebra/img/progress-33.png" class="inactive">
                        </td>
                    </tr>
                </table>
                <div id="hiddenScoreFields" style="display: none">
                    <input name="question1Score" type="hidden">
                    <input name="question2Score" type="hidden">
                    <input name="question3Score" type="hidden">
                    <input name="question4Score" type="hidden">
                    <input name="question5Score" type="hidden">
                    <input name="question6Score" type="hidden">
                    <input name="question7Score" type="hidden">
                    <input name="question8Score" type="hidden">
                    <input name="question9Score" type="hidden">
                    <input name="question10Score" type="hidden">
                    <input name="question11Score" type="hidden">
                    <input name="question12Score" type="hidden">
                    <input name="question13Score" type="hidden">
                    <input name="question14Score" type="hidden">
                    <input name="question15Score" type="hidden">
                    <input name="question16Score" type="hidden">
                    <input name="question17Score" type="hidden">
                    <input name="question18Score" type="hidden">
                    <input name="question19Score" type="hidden">
                    <input name="question20Score" type="hidden">
                    <input name="question21Score" type="hidden">
                    <input name="question22Score" type="hidden">
                    <input name="question23Score" type="hidden">
                    <input name="question24Score" type="hidden">
                    <input name="question25Score" type="hidden">
                    <input name="question26Score" type="hidden">
                    <input name="question27Score" type="hidden">
                    <input name="question28Score" type="hidden">
                    <input name="question29Score" type="hidden">
                    <input name="question30Score" type="hidden">
                    <input name="question31Score" type="hidden">
                    <input name="question32Score" type="hidden">
                    <input name="question33Score" type="hidden">
                    <input name="overallAverage" type="hidden">
                    <input name="overallScore" type="hidden">
                    <input name="submissionType" type="hidden">
                    <input name="language" value="ENU" type="hidden">
                </div>
            </section>
        </form>
        <footer>
            <div class="container" id="footer">
            <ul class="d-flex justify-content-center list-unstyled m-0" style="list-style: none;">
                <li class="px-2">
            <p class="mb-1"><i class="fa fa-globe PF-PR10" aria-hidden="true"></i> www.pharmafocusasia.com - Powered by
                Ochre Media Pvt. Ltd.</p>
                </li>
                <li class="px-2">
            <p class="mb-1"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com
            </p>
            </li>
</ul>
            </div>
        </footer>

        <script>

            $(document).keydown(function(objEvent) {
            if (objEvent.keyCode == 9) {  //tab pressed
                objEvent.preventDefault(); // stops its action
            }
        })

            var resources = {
                scoreLow: {
                    heading: "Essential Connections",
                    copy: "It’s time to establish some basic connections between your staff, your patients and their data. You'll get more accuracy, enable your team to provide better care and start seeing better overall outcomes. We can help you get started. Here are some resources to help you learn more about implementing some identification technology to start creating the connections you need.",
                    icon: "<?php echo e(config('app.url')); ?>zebra/img/results_essential-connections.png",
                    resources: [
                    { title: "Barcode Wristbands: Innovative Solutions for Positive Patient Identification", url: "<?php echo e(config('app.url')); ?>zebra/files/positive-patient-id-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeWristbands_WHP_GL',eVar44:'HC-BarcodeWristbands_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Putting Patient Safety First", url: "<?php echo e(config('app.url')); ?>zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "<?php echo e(config('app.url')); ?>zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "<?php echo e(config('app.url')); ?>zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                },
                scoreMed: {
                    heading: "Moderately Connected",
                    copy: "You’re on the right track with your identification processes, but there’s more you need to know about using mobile devices in patient care. Here are some resources to help you learn more about how your hospital can provide safer and more efficient patient care by leveraging mobile solutions.",
                    icon: "<?php echo e(config('app.url')); ?>zebra/img/results_moderately-connected.png",
                    resources: [
                    { title: "Putting Patient Safety First", url: "<?php echo e(config('app.url')); ?>zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Benefiting from Bedside Specimen Labeling", url: "<?php echo e(config('app.url')); ?>zebra/files/bedside-specimen-labeling-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BedsideSpecimenLabeling_WHP_GL',eVar44:'HC-BedsideSpecimenLabeling_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "<?php echo e(config('app.url')); ?>zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "<?php echo e(config('app.url')); ?>zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "<?php echo e(config('app.url')); ?>zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                },
                scoreHi: {
                    heading: "Advanced Connections",
                    copy: "You have well-established identification processes and a vested interest in the use of mobile devices in patient care. Here are some resources to help you learn more about mobile implementation and best practices for how to improve your current mobile device strategy.",
                    icon: "<?php echo e(config('app.url')); ?>zebra/img/results_advanced-connections.png",
                    resources: [
                    { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "<?php echo e(config('app.url')); ?>zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Separating Myth from Reality: Cleaning and Disinfecting Mobile Devices", url: "<?php echo e(config('app.url')); ?>zebra/files/cleaning-disinfecting-mobile-devices-hc-en-us-global.pdf", onClick : "s.trackData({prop44:'HC-CleaningMobileDevices_WHP_GL',eVar44:'HC-CleaningMobileDevices_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Best Practices for Infection Prevention: Cleaning and Disinfecting Mobile Devices in Healthcare Environments", url: "<?php echo e(config('app.url')); ?>zebra/files/mobility-infection-prevention-best-practices-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-InfectionPrevention_WHP_GL',eVar44:'HC-InfectionPrevention_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "The Future of Healthcare: 2022 Hospital Vision Study", url: "<?php echo e(config('app.url')); ?>zebra/files/2022-hospital-vision-study-en-global.pdf", onClick : "s.trackData({prop44:'HC-2022HospitalVisionStudy_WHP_GL',eVar44:'HC-2022HospitalVisionStudy_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                }
            };

            var screenWidth = 0;
            var isFormPosted = false;
            function setBackgrounds() {
                if (screenWidth < 768) {
                    $('#main').bgswitcher({
                        images: [
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-6.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-7.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-8.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-9.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-6.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-7.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-8.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-9.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-6.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-7.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-8.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-9.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background_mobile-2.jpg"


                        ],
                        effect: "fade",
                        interval: 10000,
                        start: false
                    });
                } else {
                    $('#main').bgswitcher({
                        images: [
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-6.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-7.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-8.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-9.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-6.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-7.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-8.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-9.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-1.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-2.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-3.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-4.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-5.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",

                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg",
                        "<?php echo e(config('app.url')); ?>zebra/img/background-full-0.jpg"

                        
                        

                        ],
                        effect: "fade",
                        interval: 10000,
                        start: false
                    });
                }
            }

            var currentPanel = 0;
            var currentQuestion = "registration";
            function scrollPanel(question) {
                currentQuestion = question;
                $("#panelContainer").animate({ "margin-left": $("#panelContainer").offset().left - $("#" + question).offset().left }, 1000, function () {
                    if (question == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });
                });

                if (screenWidth < 768) {
                    $("#progress").hide()
                } 
                else {
                    if (question.indexOf("question") > -1) $("#progress").show();
                    else $("#progress").hide();
                    if (question == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });
                }

                if (question != "results") $("html,body").animate({ "scrollTop": $("#" + question).find(".header").offset().top - 32 });
                else $("html,body").animate({ "scrollTop": $("#" + question).find(".content").offset().top - 32 });

                $("#progress td").removeClass("active").addClass("inactive");
                $("#progress [data-panel='" + question + "']").removeClass("inactive").addClass("active");
                $("#progress [data-panel='" + question + "']").removeClass("disabled");
                $("#main").bgswitcher("select", $("#" + question).index());
            }

            function resizeScreen() {
                if (screenWidth == $(window).width()) return;
                screenWidth = $(window).width();

                setBackgrounds();

                $("#panelContainer").css({ "margin-left": $("#mask").width() * -1 * currentPanel });

                $("[id^=question] .copy li").each(function () {
                    $(this).find("input").css({ "margin-bottom": $(this).outerHeight() - 15 });
                });

                if (screenWidth < 768) {
                    $(".panel").width($("#mask").width() - 32);
                    $("#results.panel").width($("#mask").width());
                    $("#progress").hide();
                }
                else {
                    $(".panel").width($("#mask").width());
                    $("#progress").show();
                }


            //scrollPanel(currentPanel);
            //scrollPanel(currentQuestion);
            $("#panelContainer").css({ "margin-left": $("#panelContainer").offset().left - $("#" + currentQuestion).offset().left });
            if (currentQuestion == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });

        }

        $("input[type=radio]").change(function () {
            $(this).closest("ul").find("li").removeClass("selected");
            if ($(this).is(":checked")) $(this).closest("li").addClass("selected");

        });

        $("input[type=checkbox]").change(function () {
            if ($(this).is(":checked")) $(this).closest("li").addClass("selected");
            else $(this).closest("li").removeClass("selected");
        });

        $("#progress td").click(function () {
            if ($(this).hasClass("disabled")) return;
            scrollPanel($(this).data("panel"));
        });
   

        function calculateScore(question) {
            var score = 0;
            
            $("[name='" + question + "[]']:checked").each(function () {
                score += $(this).data("score");
            }); 

            $("[name='" + question + "Score']").val(score);

            calculateOverall()
        }

        function calculateOverall() {
            var score =
            $("[name='question1Score']").val() * 1 +
            $("[name='question2Score']").val() * 1 +
            $("[name='question3Score']").val() * 1 +
            $("[name='question4Score']").val() * 1 +
            $("[name='question5Score']").val() * 1 +
            $("[name='question6Score']").val() * 1 +
            $("[name='question7Score']").val() * 1 +
            $("[name='question8Score']").val() * 1 +
            $("[name='question9Score']").val() * 1;
            $("[name='question10Score']").val() * 1 +
            $("[name='question11Score']").val() * 1 +
            $("[name='question12Score']").val() * 1 +
            $("[name='question13Score']").val() * 1 +
            $("[name='question14Score']").val() * 1 +
            $("[name='question15Score']").val() * 1 +
            $("[name='question16Score']").val() * 1;
            $("[name='question17Score']").val() * 1 +
            $("[name='question18Score']").val() * 1 +
            $("[name='question19Score']").val() * 1 +
            $("[name='question20Score']").val() * 1 +
            $("[name='question21Score']").val() * 1 +
            $("[name='question22Score']").val() * 1 +
            $("[name='question23Score']").val() * 1;
            $("[name='question24Score']").val() * 1;
            $("[name='question25Score']").val() * 1;
            $("[name='question26Score']").val() * 1;
            $("[name='question27Score']").val() * 1;
            $("[name='question28Score']").val() * 1;
            $("[name='question29Score']").val() * 1;
            $("[name='question30Score']").val() * 1;
            $("[name='question31Score']").val() * 1;
            $("[name='question32Score']").val() * 1;
            $("[name='question33Score']").val() * 1;
            $("[name='overallAverage']").val(score / 33);
        }



        function showResults() {
            if (isRegistrationSubmit) {
              scrollPanel("question1");
              isRegistrationSubmit = false;
              return;
          }
          if (!isFormPosted) return;
          var score = $("[name='overallAverage']").val() * 1;
          var result;

          if (score < 2) {
            result = resources.scoreLow;
            $("#standards").show();
        } else if (score < 3) {
            result = resources.scoreMed;
                // $("#standards").hide();
                $("#standards").show();
            } else {
                result = resources.scoreHi;
                // $("#standards").hide();
                $("#standards").show();
            }

            $("#resultIcon").attr("src", result.icon);
            $("#resultHeading").html(result.heading);
            $("#resultCopy").html(result.copy);

            $("#resources table").html("");
            for (var i = 0; i < result.resources.length; ++i) {
                $("#resources table").append(
                    "<tr>\n" +
                    "   <td><a href=\"" + result.resources[i].url + "\" target=\"_blank\">\n" +
                    "       <img class=\"icon\" src=\"<?php echo e(config('app.url')); ?>zebra/img/icon-whitepaper.png\" /></a></td>\n" +
                    "   <td><span>White Paper</span>\n" +
                    "   <a href=\"" + result.resources[i].url + "\" target=\"_blank\" onclick=\"" + result.resources[i].onClick + "\">" + result.resources[i].title + "</a>\n" +
                    "   <div style=\"clear:both\"></div></td>" +
                    "</tr>\n"
                    );
            }

            scrollPanel("results");

            window.AnalyticsDataLayer = {
              'siteVersion': 'forms',
              'site': 'zebra:eloqua',
              'events': 'event7',
              'eVar26': 'Australia'
          };
          
          s.trackData(AnalyticsDataLayer);
      }

      var isRegistrationSubmit = false;

      $(".cta input[type='button']").click(function () {
        var thisPanel = $(this).closest(".panel").attr("id");

        if (thisPanel == "registration") {
            if (!$("#elqForm").valid()) return;
            $("[name='submissionType']").val("registration");
            isRegistrationSubmit = true;
            $("#elqForm").submit();
        }

        if (thisPanel.indexOf("question") > -1) {
            if ($("[name='" + thisPanel + "[]']:checked").length == 0) {
               
                alert("A selection is required.");
                return;
            } else {
              
                calculateScore(thisPanel);
            }
        }

if (".cta input[type='button']") {
    if ($("[name='question1[]']:checked").val() == "Yes") {
       $("#question1").hide();
       $("#question2").show();
    } else{
        if ($("[name='question1[]']:checked").val() == "No") {
        $("#question1").hide();
       $("#question2").hide();
       $("#question3").show();
        }
    }
}
if (".cta input[type='button']") {
        if ($("[name='question4[]']:checked").val() == "Yes") {
       $("#question4").hide();
       $("#question5").show();
    } else{
        if ($("[name='question4[]']:checked").val() == "No") {
        $("#question4").hide(); $("#question5").hide(); $("#question6").hide(); $("#question7").hide(); $("#question8").hide(); $("#question9").hide();
        $("#question10").hide(); $("#question11").hide(); $("#question12").hide();
        $("#question13").show();
        }else{
            if ($("[name='question4[]']:checked").val() == "I don't know"){
                $("#question4").hide(); $("#question5").hide(); $("#question6").hide(); $("#question7").hide(); $("#question8").hide(); $("#question9").hide();
        $("#question10").hide(); $("#question11").hide(); $("#question12").hide();$("#question13").hide(); $("#question14").hide(); $("#question15").hide();
        $("#question16").hide(); $("#question17").hide(); $("#question18").hide();$("#question19").hide(); $("#question20").hide(); $("#question21").hide();       
        $("#question22").hide(); $("#question23").hide(); 
        $("#question24").show();
            }
        }
    }

}
if (".cta input[type='button']") {
        if ($("[name='question6[]']:checked").val() == "Vendor executed the project") {
       $("#question6").hide();
       $("#question7").hide();
       $("#question8").show();
    } else{
        if ($("[name='question6[]']:checked").val() == "Implementation partner executed the project") {
            $("#question6").hide();
            $("#question9").hide();
            $("#question7").show();
        }else{
            $("#question9").hide();
        }
        }
}
if (".cta input[type='button']") {
    // if ($("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""
    //  || $("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""){
        $("#btn7").unbind().click(function(){           
            $("#question8").hide();
            $("#question7").hide();
            $("#question9").show();
        })
       
}
if (".cta input[type='button']") {
    // if ($("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""
    //  || $("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""){
        $("#btn7").unbind().click(function(){           
            $("#question8").hide();
            $("#question7").hide();
            $("#question9").show();
        })
       
}
if (".cta input[type='button']") {
    // if ($("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""
    //  || $("[name='question7[]']:checked").val()=="" || $("[name='question7[]']:checked").val()==""){
        $("#btn8").unbind().click(function(){           
            $("#question8").hide();
            $("#question10").show();
        })
       
}

if (".cta input[type='button']") {
        $("#btn9").unbind().click(function(){  
        $("#question9").hide();$("#question10").hide(); $("#question11").hide(); $("#question12").hide();$("#question13").hide(); $("#question14").hide(); $("#question15").hide();
        $("#question16").hide(); $("#question17").hide(); $("#question18").hide();$("#question19").hide(); $("#question20").hide(); $("#question21").hide();       
        $("#question22").hide(); $("#question23").hide();$("#question24").hide();$("#question25").hide();$("#question26").hide();
            $("#question27").show();
        })
       
}
if (".cta input[type='button']") {
        if ($("[name='question10[]']:checked").val() == "On-premises") {
       $("#question10").hide();
       $("#question11").show();
    } else{
        if ($("[name='question10[]']:checked").val() == "Cloud") {
            $("#question10").hide();
            $("#question8").hide();
             $("#question11").hide();
             $("#question12").show();
        }else{
            if($("[name='question10[]']:checked").val()=="SaaS"){
                $("#question10").hide();
             $("#question11").hide();
             $("#question12").show();
            }
        }
    }

}
if (".cta input[type='button']") {
        $("#btn11").unbind().click(function(){  
            $("#question11").hide();         
            $("#question12").hide();
            $("#question13").show();
        })
       
}
if (".cta input[type='button']") {
        $("#btn12").unbind().click(function(){  
        $("#question12").hide();$("#question13").hide(); $("#question14").hide(); $("#question15").hide();
        $("#question16").hide(); $("#question17").hide(); $("#question18").hide();$("#question19").hide(); $("#question20").hide(); $("#question21").hide();       
        $("#question22").hide(); $("#question23").hide(); 
            $("#question24").show();
        })
       
}
if (".cta input[type='button']") {
        if ($("[name='question14[]']:checked").val() == "Yes" || $("[name='question14[]']:checked").val() == "I don't know") {
       $("#question14").hide();
       $("#question15").show();
    } else{
        if ($("[name='question14[]']:checked").val() == "No, and why") {
            $("#question14").hide(); $("#question15").hide();
        $("#question16").hide(); $("#question17").hide(); $("#question18").hide();$("#question19").hide(); $("#question20").hide(); $("#question21").hide();       
        $("#question22").hide(); $("#question23").hide();
             $("#question24").show();
        }
    }

}
if (".cta input[type='button']") {
        if ($("[name='question16[]']:checked").val() == "On-premises") {
       $("#question16").hide();
       $("#question17").show();
    } else{
        if ($("[name='question16[]']:checked").val() == "Cloud" || $("[name='question16[]']:checked").val() == "SaaS") {
            $("#question16").hide();
            $("#question17").hide();
             $("#question18").show();
        }
    }

}
if (".cta input[type='button']") {
        $("#btn17").unbind().click(function(){ 
            $("#question17").hide();   $("#question18").hide();   $("#question19").hide();
          
            $("#question20").show();
        })
       
}
if (".cta input[type='button']") {
        if ($("[name='question21[]']:checked").val() == "Vendor") {
       $("#question21").hide();
       $("#question22").hide();
       $("#question23").show();
    } else{
        if ($("[name='question21[]']:checked").val() == "Implementation partner") {
            $("#question21").hide();
             $("#question22").show();
        }else{
            if ($("[name='question21[]']:checked").val() == "I don't know yet") {
                $("#question21").hide();
                $("#question22").hide();
                $("#question23").hide();
                $("#question23").show();
            }
        }
    }

}
if (".cta input[type='button']") {
        $("#btn22").unbind().click(function(){ 
            $("#question22").hide();   $("#question23").hide();  
          
            $("#question24").show();
        })
       
}


       
        var next = $(this).closest(".panel").data("next");
        if (next == "results") {
            isFormPosted = true;
            $("[name='submissionType']").val("completion");
            var score = $("[name='overallAverage']").val() * 1;
            var result;

            if (score < 2) {
                result = resources.scoreLow;
            } else if (score < 3) {
                result = resources.scoreMed;
            } else {
                result = resources.scoreHi;
            }

            $("[name='overallScore']").val(result.heading);

            $("#elqForm").submit();
            return;
        }

        scrollPanel(next);
        currentPanel++;
        currentQuestion = next;
    });

      $(document).ready(function () {
            //reset form:
            currentPanel = 0; //"registration";

            $("#panelContainer input[type=text],#panelContainer select").val("");
            $("#panelContainer input[type=radio],#panelContainer input[type=checkbox]").prop("checked", false);

            $("#progress td").addClass("disabled");

            $("#elqForm").validate();
            $(".panel").css({ "display": "block" });
            resizeScreen();
            setInterval(resizeScreen, 250);

        });
  
           

    </script>
    <iframe id="postFrame" name="postFrame" onload="showResults()" src=""></iframe>

    <!-- <?php echo e(config('app.url')); ?>zebra/eloqua script -->
    <script src="<?php echo e(config('app.url')); ?>zebra/registration.js"></script>
    <script>
        var optInCountries = ["CA", "DE", "CN", "NZ", "IT", "PL", "RU", "ES", "TR", "NL", "AU"];
        var campaignIds = {"APAC":"12278", "NA": "12529", "EMEA":"12321", "LATAM":"12523"}
        $("[name='Country']").change(function () {
            if (optInCountries.indexOf($(this).val()) > -1)
                $("[name=zOptIn]").closest("li").show();
            else
                $("[name=zOptIn]").closest("li").hide();

            var region = regionList[$(this).val()];
            if (region != undefined) {
              $("[name='region']").val(region.region);
              $("[name='elqCampaignId']").val(campaignIds[region.region]);
          } 
      });

  </script>
  <script>
        //demandbase

        (function (d, b, a, s, e) {
            var t = b.createElement(a),
            fs = b.getElementsByTagName(a)[0]; t.async = 1; t.id = e;
            t.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + s;
            fs.parentNode.insertBefore(t, fs);
        })(window, document, 'script', 'scripts.demandbase.com/73PwKbIO.min.js', 'demandbase_js_lib');

    </script>
        
<!-- 

    <script>
        //eloqua
        var timerId = null, timeout = 5;
        function SetCustomerGuid() {
            if (!!(timerId)) {
                if (timeout == 0) return;

                if (typeof this.GetElqCustomerGUID === 'function') {
                    document.getElementsByName("elqCustomerGuid")[0].value = GetElqCustomerGUID();
                    return;
                }
                timeout -= 1;
            }
            timerId = setTimeout("SetCustomerGuid()", 500);
            return;
        }

        var email = "";
        $(document).ready(function () {
            timerId = setTimeout("SetCustomerGuid()", 500);
            _elqQ.push(['elqGetCustomerGUID']);

            if (typeof elqId == "undefined") {
                cookie_look = true;
                _elqQ.push(['elqDataLookup', escape('732826011b36486e8735eef895c09591'), '']);
            } else {
                cookie_look = false;
                _elqQ.push(['elqDataLookup', escape('08ac4d580ea14b32a8ed58948eb5f273'), '<C_EmailAddress>' + email + '</C_EmailAddress>']);
            }

        });

        function SetElqContent() {

            if (cookie_look) {
                if (email == "") {
                    email = GetElqContentPersonalizationValue('V_Email_Address');
                }
                browser = GetElqContentPersonalizationValue('V_Browser_Type');
                cookie_look = false;
                if (email != "")
                    _elqQ.push(['elqDataLookup', escape('08ac4d580ea14b32a8ed58948eb5f273'), '<C_EmailAddress>' + email + '</C_EmailAddress>']);
            } else {
                $("[name='emailAddress']").val(email);
                $("[name='FirstName']").val(GetElqContentPersonalizationValue('C_FirstName'));
                $("[name='LastName']").val(GetElqContentPersonalizationValue('C_LastName'));
                $("[name='company']").val(GetElqContentPersonalizationValue('C_Company'));
                $("[name='Phone']").val(GetElqContentPersonalizationValue('C_BusPhone'));
                $("[name='industry']").val(GetElqContentPersonalizationValue('C_Vertical__SFDC_1'));
                $("[name='Country']").val(GetElqContentPersonalizationValue('C_Country')).change();

            }
        }

    </script>

    <script>
        var AnalyticsDataLayer = {
            'siteVersion': 'forms',
            'site': 'zebra:eloqua',
            'events': 'event47',
            'eVar50': 'zebra:us:en:hc-global-assessment'
        }

    </script>
    <script src="<?php echo e(config('app.url')); ?>zebra/satelliteLib-0a23cff0f753ba0e0ab2bbcf17482bc138ae1238.js"></script>
    
    <script>
        function getQueryStringParam(ji) {
            hu = window.location.search.substring(1);
            gy = hu.split("&");
            theResult = "";

            for (i = 0; i < gy.length; i++) {
                ft = gy[i].split("=");
                if (ft[0] == ji) {
                    theResult = ft[1];
                }
            }
            return theResult;
        }

        $(document).ready(function () {
            var tactic_type = "";
            var tactic_detail = "";

            if (typeof _satellite != "undefined") {
                tactic_type = _satellite._cookies.get('tactic_type');
                tactic_detail = _satellite._cookies.get('tactic_detail');
            } else {
                tactic_type = getQueryStringParam('tactic_type');
                tactic_detail = getQueryStringParam('tactic_detail');
            }

            if (tactic_type != undefined) $("[name='tactic_type']").val(tactic_type);
            if (tactic_detail != undefined) $("[name='tactic_detail']").val(tactic_detail);

            $("[name='sfid']").val(getQueryStringParam('elqCampaignId'));
            $("[name='Country']").change();
        });
    </script>
    <script>
        _satellite.pageBottom();
    </script> -->


</body>

</html><?php /**PATH /home/pharmafocusasia/public_html/resources/views/flatpages/pharma-software-assessment.blade.php ENDPATH**/ ?>