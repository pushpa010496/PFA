
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pharma Machinery Assessment</title>
   
    <link rel="shortcut icon" href="{{config('app.url')}}images/favicon.ico" type="image/x-icon">

    <meta property="og:image" content="{{asset('public/images/flatpages/zebra-patient-identity-banner-1.jpg')}}" />
    <link rel="canonical" href="{{url('promotion/pharma-machinery-assessment')}}"/>
  

    <script src="{{config('app.url')}}zebra/jquery-3.2.1.min.js"></script>
    <script src="{{config('app.url')}}zebra/jquery.validate.min.js"></script>
    <script src="{{config('app.url')}}zebra/jquery.bgswitcher.js"></script>
    <link href="{{config('app.url')}}zebra/ProximaNova.css" rel="stylesheet">
    <link href="{{config('app.url')}}zebra/style.css" rel="stylesheet">
    
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
    <!-- <form id="elqForm" action="https://secure.eloqua.com/e/f2" method="GET" target="postFrame"> -->
        <form id="elqForm" action="{{ route('PharmaMachineryAssessment.post')}}" method="post" target="postFrame">
            @csrf
            <input type="hidden" name="elqSiteId" value="1879417329">
            <input type="hidden" name="elqCustomerGuid">
            <input type="hidden" name="elqFormName" value="ZBR1853">
            <input type="hidden" name="tactic_type">
            <input type="hidden" name="tactic_detail">
            <input type="hidden" name="sfid">
            <input type="hidden" name="region">
            <input type="hidden" name="elqCampaignId" value="12529">
            <input type="hidden" name="type" value="Pharma Machinery Assessment">
            <input type="hidden" name="thank_message"
                                value="Thank you for your interest in Simple Plex Immuno Assays from Bio-techne. One of our representatives will get in touch with you in the next 1-2 days.">
            <header>
                <div class="container" id="header">
                    <div class="row">
                        <div class="col-xs-6 text-left">
                        <img src="{{ config('app.url') }}images/logo.png" class="d-inline-block align-middle"
                            alt="Pharma Focus Asia" />    
                        </div>
                        <!-- <div class="col-xs-6 logo text-right">
                            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" class="" target="_blank">
                                <img src="{{config('app.url')}}zebra/img/logo.png" class="img-fluid" alt="Zebra">
                            </a>    
                        </div>                                     -->
                    </div>
                </div>
                <div class="container" id="header-mobile">
                    <div class="row">
                        <div class="col-xs-6 text-left">
                        <img src="{{ config('app.url') }}images/logo.png" class="d-inline-block align-middle"
                            alt="Pharma Focus Asia" /> 
                        </div>
                        <!-- <div class="col-xs-6 text-left">
                            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">
                                <img src="{{config('app.url')}}zebra/img/mobile-logo.png" class="img-fluid" srcset="{{config('app.url')}}zebra/img/mobile-logo_2x.png 2x" alt="Zebra">
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
                                    <h1>Pharma Machinery Assessment</h1>
                                </div>
                                <div class="stripe">

                                </div>
                                <div class="copy" style="padding:15px;">
                                    <div>
                                    Facilities and equipment are the major focus of the pharma machinery assessment because they pose a wide range of threats to product quality and are one of the most commonly discovered quality systems in the pharmaceutical manufacturing industry.
                                        <br>
                                        <br> We are conducting a general pharma machinery assessment survey. Answering these questions in the right way is also important!
                                        <br>
                                        <br>
                                    </div>
                                    <ul>
                                        <li> 
                                            <input type="text" name="FirstName" placeholder="First Name *" autocomplete="given-name" class="required" tabindex="1">
                                        </li>
                                        <li>
                                            <input type="text" name="LastName" placeholder="Last Name *" autocomplete="family-name" class="required"  tabindex="2">
                                        </li>

                                        <li>
                                            <input type="text" name="emailAddress" placeholder="Email *" class="required emailAddress" tabindex="4">
                                        </li>
                                        <li>
                                            <input type="text" name="Phone" placeholder="Phone" autocomplete="tel"  tabindex="5">
                                        </li>
                                        <li>
                                            <input type="text" name="company" placeholder="Company *" class="required" autocomplete="off"  tabindex="3"  style='width:300px;' >
                                        </li>
                                        <li>
                                            <input type="text" name="industry" placeholder="Designation *" class="required" autocomplete="off"  tabindex="3"  style='width:300px;' >
                                        </li>
                                      
                                        <li>
                                            <select name="Country" class="required" autocomplete="country-name" tabindex="6" style='width:630px;'>
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
                                            <select name="industry" class="required" tabindex="6">
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
                                                <input type="checkbox" name="zOptIn" id="zOptIn" value="on" tabindex="7"> I would like to receive future communications from Pharma Focus Asia.</label>
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

                                <div class="cta"  >
                                    <input type="button" value="Take the Assessment" tabindex="8">
                                </div>
                            </div>
                        </div>
                    <div class="panel" id="question1" data-prev="registration" data-next="question2">
                        <div class="content left up">
                            <div class="header">
                                <h3>What would be the main investment reason of your organization in the pharmaceutical manufacuring? </h3>
                                <p class="progress-numb">( 1 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1a" value="Technology upgrade" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question1a">Technology upgrade
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1b" value="Retrofit" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question1b">Retrofit</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1c" value="New facility & equipment" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question1c">New facility & equipment</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question1[]" id="question1d" value="Other, pls specify" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question1d" name="question1[]">Other, pls specify </label>
                                           
                                        </td>
                                        
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30" name="question1[]" rows="2"></textarea>
                                        </td></tr>
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
                                <h3>How important are the following decision criteria for the machinery requirement in your organization?</h3>
                                <p class="progress-numb">( 2 of 16 )</p>
                            </div>
                            <!-- <div class="stripe">Select all that apply</div> -->
                            <div class="copy">
                                <table>
                                    <tr>
                                         <td>
                                           
                                            <input type="checkbox" name="question2[]" id="question2a" value="Capital investment (Price)" data-score="1"> 
                                        </td> 
                                        <td class=''>
                                            <label for="question2a" class='q2l'>Capital investment (Price)</label>
                                            <table style='display:inline;' class='table-sub'>
                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr style='display:inline-table;'>
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2b" value="Delivery time" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2b" class='q2l'>Delivery time</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2c" value="Performance/ Quality" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2c" class='q2l'> Performance/ Quality</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2d" value="Flexibility" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2d" class='q2l'>Flexibility</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2e" value="One-stop shop" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2e" class='q2l'>One-stop shop</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2f" value="Consultation services" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question2f" class='q2l'>Consultation services</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2f" value="Local reference" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question2f" class='q2l'>Local reference</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question2[]" id="question2f" value="Customization" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question2f" class='q2l'>Customization</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Submit Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question3" data-prev="question2" data-next="question4">
                        <div class="content right down">
                            <div class="header">
                                <h3>In which areas do you think your facility needs to further develop its identification processes?
                                </h3>
                                <p class="progress-numb">( 3 of 16 )</p>
                            </div>
                           
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3a" value="Local technical support" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3a">Local technical support
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3a1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3a1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3a2" value="little important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question3a2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3a3" value="moderately" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question3a3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3a4" value="very important" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question3a4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3a5" value="extremely important" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question3a5">extremely important</label></td>
                                                </tr>


                                            </table>
                                            </label>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3b" value="24/7 support" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question3b">24/7 support

                                            </label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3b1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3b1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3b2" value="little important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question3b2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3b3" value="moderately" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question3b3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3b4" value="very important" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question3b4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3b5" value="extremely important" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question3b5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3c" value="Overhaul services " data-score="-1">
                                        </td>
                                        <td>
                                            <label for="question3c">Overhaul services </label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3c1" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3c2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3c3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3c4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3c5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3c5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Spare parts on stock" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d">Spare parts on stock</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3d1" value="not important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question3d1">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3d2" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d2">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3d3" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d3">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3d4" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d4">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question3[]" id="question3d5" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3d5">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Packaging development" data-score="-1">
                                        </td>
                                        <td>
                                            <label for="question3d">Packaging development</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Online or remote support" data-score="-1">
                                        </td>
                                        <td>
                                            <label for="question3d">Online or remote support</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Response time" data-score="-1">
                                        </td>
                                        <td>
                                            <label for="question3d">Response time</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question3[]" id="question3d" value="Price of manpower and spare parts" data-score="-1">
                                        </td>
                                        <td>
                                            <label for="question3d">Price of manpower and spare parts</label>
                                            <table  class='table-sub'>
                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">not important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="little important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">little important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">moderately</label>
    </td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="very important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question2a">very important</label></td>
                                                </tr>

                                                <tr >
                                                <td>
                                                <input type="checkbox" name="question2[]" id="question2a" value="extremely important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question3a">extremely important</label></td>
                                                </tr>


                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Submit Answer">
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="question4" data-prev="question3" data-next="question5">
                        <div class="content right down">
                            <div class="header">
                                <h3>What are the key preferred criteria in choosing your vendors? And why?</h3>
                                <p class="progress-numb">( 4 of 16 )</p>
                            </div>
                            <div class="stripe">&nbsp;</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4a" value="Local vs international brand, and why?" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question4a">Local vs international brand, and why?</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4b" value="Specific vendor, and why?" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question4b">Specific vendor, and why? </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question4[]" id="question4c" value="Other, pls specify, and why?" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question4c">Other, pls specify, and why?
                                            </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30"  name="question4[]" rows="2"></textarea>
                                        </td></tr>
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
                                <h3>Are sustainable-oriented solutions in focus for your region or organization?
                                </h3>
                                <p class="progress-numb">( 5 of 16 )</p>
                            </div>
                            <div class="stripe">&nbsp;</div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question5[]" id="question5a" value="Sustainable packaging designs & materials" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question5a">Sustainable packaging designs & materials</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question5[]" id="question5b" value="Carbon footprint of the organization" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question5b">Carbon footprint of the organization </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question5[]" id="question5c" value="Carbon footprint of vendors" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question5c">Carbon footprint of vendors </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question5[]" id="question5d" value="Other, pls specify" data-score="0">
                                        </td>
                                        <td>
                                            <label for="question5d"></label>Other, pls specify
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
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
                        <div class="content right down">
                            <div class="header">
                                <h3>What other important factors you will consider during the buying process? </h3>
                                <p class="progress-numb">( 6 of 16 )</p>
                            </div>
                           
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question6[]" id="question6a" value="Other, pls specify, and why?" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question6a">Other, pls specify, and why?</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td></td>
                                           
                                        
                                    <td>
                                           
                                            <textarea cols="30"  name="question6[]" rows="2"></textarea>
                                        </td></tr>
                                    
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Submit Answer">
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="question7" data-prev="question6" data-next="question8">
                        <div class="content right up">
                            <div class="header">
                                <h3>How much is the automation degree of the pharmaceutical packaging process in your region or organization?</h3>
                                <p class="progress-numb">( 7 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question7[]" id="question7a" value="Manual" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question7a">Manual</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question7[]" id="question7b" value="Semi-automatic" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question7b">Semi-automatic</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question7[]" id="question7c" value="Fully automatic" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question7c">Fully automatic</label>
                                        </td>
                                    </tr>
                                   
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="question8" data-prev="question7" data-next="question9">
                        <div class="content left down">
                            <div class="header">
                                <h3>What is the future (in 3-5 years) trend of the automation degree for the pharmaceutical packaging process in your region or organization?</h3>
                                <p class="progress-numb">( 8 of 16 )</p>
                            </div>
                            
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8a" value="Manual" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8a">Manual</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8b" value="Semi-automatic" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8b">Semi-automatic</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="question8[]" id="question8c" value="Fully automatic" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question8c">Fully automatic</label>
                                        </td>
                                    </tr>
                                   
                                </table>
                            </div>
                            <div class="cta">
                                <input type="button" value="Submit Answer">
                            </div>
                        </div>
                    </div>
                    <div class="panel" id="question9" data-prev="question8" data-next="question10">
                        <div class="content left up">
                            <div class="header">
                                <h3>How common is the line integration of a set of machines for the production lines in your region?</h3>
                                <p class="progress-numb">( 9 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question9[]" id="question9a" value="Standalone" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question9a">Standalone</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question9[]" id="question9b" value="Equipped with line interface" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question9b">Equipped with line interface</label>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question10" data-prev="question9" data-next="question11">
                        <div class="content left right">
                            <div class="header">
                                <h3>What are the critical issues you have encountered during the manufacturing (eg., inspection) process and how you overcome the issue?</h3>
                                <p class="progress-numb">( 10 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question10[]" id="question10a" value="Eg., sorting systems for outfeed channels, line clearance, format changes etc." data-score="1">
                                        </td>
                                        <td>
                                            <label for="question10a">Eg., sorting systems for outfeed channels, line clearance, format changes etc.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question10[]" id="question10b" value="Other, pls specify, and why?" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question10b">Other, pls specify, and why?</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <textarea cols="30" name="question10[]" rows='2'></textarea>
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
                                <h3>How important are digital solutions in your production process?</h3>
                                <p class="progress-numb">( 11 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question11[]" id="question11a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11a">not important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question11[]" id="question11b" value="little important" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question11b">little important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question11[]" id="question11c" value="moderately" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question11c">moderately</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question11[]" id="question11d" value="very important" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question11d">very important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question11[]" id="question11e" value="extremely important" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question11e">extremely important</label>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>


                    <div class="panel" id="question12" data-prev="question11" data-next="question13">
                        <div class="content left up">
                            <div class="header">
                                <h3>How do you see the adoption of modern analytics especially AI in the pharma packaging industry in your region?</h3>
                                <p class="progress-numb">( 12 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question12[]" id="question12a" value="High" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question12a">High</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question12[]" id="question12b" value="Medium" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question12b">Medium</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question12[]" id="question12c" value="Low" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question12c">Low</label>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question13" data-prev="question12" data-next="question14">
                        <div class="content right up">
                            <div class="header">
                                <h3>What are the other painpoints during the production or procurement process you would like to improve?</h3>
                                <p class="progress-numb">( 13 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question13[]" id="question13a" value="Production process eg., skilled employees, manual work, production error etc." data-score="1">
                                        </td>
                                        <td>
                                            <label for="question13a">Production process eg., skilled employees, manual work, production error etc.</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question13[]" id="question13b" value="Procurement process eg., payment terms, reaction time, consultation etc." data-score="2">
                                        </td>
                                        <td>
                                            <label for="question13b">Procurement process eg., payment terms, reaction time, consultation etc.</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question13[]" id="question13c" value="Other, pls specify" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question13c">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <textarea cols="30"  name="question13[]" rows='2'></textarea>
                                        </td>
                                    </tr>
                                   
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
                                <h3>What do you value about your current production line?</h3>
                                <p class="progress-numb">( 14 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14a" value="Small footprint (high, medium, low)" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question14a">Small footprint (high, medium, low)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14b" value="Flexibility (high, medium, low)" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question14b">Flexibility (high, medium, low)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14c" value="Speed (high, medium, low)" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question14c">Speed (high, medium, low)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14d" value="Connectivity (high, medium, low)" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question14d">Connectivity (high, medium, low)</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question14[]" id="question14e" value="Downtime/ Changeover (high, medium, low)" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question14e">Downtime/ Changeover (high, medium, low)</label>
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
                        <div class="content right down">
                            <div class="header">
                                <h3>Which machine is the most important for your packaging production?</h3>
                                <p class="progress-numb">( 15 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question15[]" id="question15a" value="Other, pls specify" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question15a">Other, pls specify</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            
                                        </td>
                                        <td>
                                            <textarea cols="30" name="question15[]" rows='2'></textarea>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>
                            <div class="cta">
                                <input type="button" value="Select Answer">
                            </div>
                        </div>
                    </div>

                    <div class="panel" id="question16" data-prev="question15" data-next="results">
                        <div class="content left up">
                            <div class="header">
                                <h3>How important is the handling of products before, during and after the inspection or packaging process?</h3>
                                <p class="progress-numb">( 16 of 16 )</p>
                            </div>
                            <div class="stripe"></div>
                            <div class="copy">
                                <table>
                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16a" value="not important" data-score="1">
                                        </td>
                                        <td>
                                            <label for="question16a">not important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16b" value="little important" data-score="2">
                                        </td>
                                        <td>
                                            <label for="question16b">little important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16c" value="moderately" data-score="3">
                                        </td>
                                        <td>
                                            <label for="question16c">moderately</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16d" value="very important" data-score="4">
                                        </td>
                                        <td>
                                            <label for="question16d">very important</label>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <input type="radio" name="question16[]" id="question16e" value="extremely important" data-score="5">
                                        </td>
                                        <td>
                                            <label for="question16e">extremely important</label>
                                        </td>
                                    </tr>
                                   
                                </table>

                            </div>
                            <div class="cta">
                                <input type="button" value="select answer">
                            </div>
                        </div>
                    </div>


              <!-- Modal -->

              <!-- <div id="results" class="modal fade" role="dialog">
        <div class="modal-dialog">
         
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-blue">Thank You..</h4>
                </div>
                <div class="modal-body">
                    <p>{!!session('thank_message')!!}</p>
                    <br>
                    Thank You
                    <br>
                    Client Success Team – CRM
                    <br>
                    Pharma Focus Asia
                </div>
                <div class="modal-footer">
                    <a class="btn btn-seconadry" role="button" id="aa" name="aa"
                        href="{{url('promotion/pharma-machinery-assessment-post')}}" aria-expanded="false">
                        Close
                    </a>
                </div>
            </div>
        </div>
    </div> -->


    <!-- End Modal -->

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
                            <img src="{{config('app.url')}}zebra/img/progress-1-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-1.png" class="inactive">
                        </td>
                        <td id="progress2" data-panel="question2" class="inactive" data-disabled="true">
                            <img src="{{config('app.url')}}zebra/img/progress-2-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-2.png" class="inactive">
                        </td>
                        <td id="progress3" data-panel="question3" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-3-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-3.png" class="inactive">
                        </td>
                        <td id="progress4" data-panel="question4" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-4-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-4.png" class="inactive">
                        </td>
                        <td id="progress5" data-panel="question5" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-5-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-5.png" class="inactive">
                        </td>
                        <td id="progress6" data-panel="question6" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-6-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-6.png" class="inactive">
                        </td>
                        <td id="progress7" data-panel="question7" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-7-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-7.png" class="inactive">
                        </td>
                        <td id="progress8" data-panel="question8" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-8-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-8.png" class="inactive">
                        </td>
                        <td id="progress9" data-panel="question9" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-9-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-9.png" class="inactive">
                        </td>

                        <td id="progress10" data-panel="question10" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-10-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-10.png" class="inactive">
                        </td>
                        <td id="progress11" data-panel="question11" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-11-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-11.png" class="inactive">
                        </td>
                        <td id="progress12" data-panel="question12" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-12-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-12.png" class="inactive">
                        </td>
                        <td id="progress13" data-panel="question13" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-13-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-13.png" class="inactive">
                        </td>
                        <td id="progress14" data-panel="question14" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-14-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-14.png" class="inactive">
                        </td>
                        <td id="progress15" data-panel="question15" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-15-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-15.png" class="inactive">
                        </td>
                        <td id="progress16" data-panel="question16" class="inactive">
                            <img src="{{config('app.url')}}zebra/img/progress-16-active.png" class="active">
                            <img src="{{config('app.url')}}zebra/img/progress-16.png" class="inactive">
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
                   
                    <input name="overallAverage" type="hidden">
                    <input name="overallScore" type="hidden">
                    <input name="submissionType" type="hidden">
                    <input name="language" value="ENU" type="hidden">
                </div>
            </section>
        </form>
        <footer>
            <div class="container" id="footer">
            <ul class='d-flex justify-content-center list-unstyled m-0' style='list-style: none;'>
                <li class='px-2'>
            <p class="mb-1"><i class="fa fa-globe PF-PR10" aria-hidden="true"></i> www.pharmafocusasia.com - Powered by
                Ochre Media Pvt. Ltd.</p>
                </li>
                <li  class='px-2'>
            <p class="mb-1"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com
            </p>
            </li>
</ul>
            </div>
        </footer>

        
    <script src="https://industry.pharmafocusasia.com/js/bootstrap.min.js"></script>
    <script src="{{asset('public/styles/js/pf-scripts.js')}}"></script>

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
                    icon: "{{config('app.url')}}zebra/img/results_essential-connections.png",
                    resources: [
                    { title: "Barcode Wristbands: Innovative Solutions for Positive Patient Identification", url: "{{config('app.url')}}zebra/files/positive-patient-id-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeWristbands_WHP_GL',eVar44:'HC-BarcodeWristbands_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Putting Patient Safety First", url: "{{config('app.url')}}zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "{{config('app.url')}}zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "{{config('app.url')}}zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                },
                scoreMed: {
                    heading: "Moderately Connected",
                    copy: "You’re on the right track with your identification processes, but there’s more you need to know about using mobile devices in patient care. Here are some resources to help you learn more about how your hospital can provide safer and more efficient patient care by leveraging mobile solutions.",
                    icon: "{{config('app.url')}}zebra/img/results_moderately-connected.png",
                    resources: [
                    { title: "Putting Patient Safety First", url: "{{config('app.url')}}zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Benefiting from Bedside Specimen Labeling", url: "{{config('app.url')}}zebra/files/bedside-specimen-labeling-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BedsideSpecimenLabeling_WHP_GL',eVar44:'HC-BedsideSpecimenLabeling_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "{{config('app.url')}}zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "{{config('app.url')}}zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "{{config('app.url')}}zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                },
                scoreHi: {
                    heading: "Advanced Connections",
                    copy: "You have well-established identification processes and a vested interest in the use of mobile devices in patient care. Here are some resources to help you learn more about mobile implementation and best practices for how to improve your current mobile device strategy.",
                    icon: "{{config('app.url')}}zebra/img/results_advanced-connections.png",
                    resources: [
                    { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "{{config('app.url')}}zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Separating Myth from Reality: Cleaning and Disinfecting Mobile Devices", url: "{{config('app.url')}}zebra/files/cleaning-disinfecting-mobile-devices-hc-en-us-global.pdf", onClick : "s.trackData({prop44:'HC-CleaningMobileDevices_WHP_GL',eVar44:'HC-CleaningMobileDevices_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "Best Practices for Infection Prevention: Cleaning and Disinfecting Mobile Devices in Healthcare Environments", url: "{{config('app.url')}}zebra/files/mobility-infection-prevention-best-practices-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-InfectionPrevention_WHP_GL',eVar44:'HC-InfectionPrevention_WHP_GL',events:'event38'},'tl_d');" },
                    { title: "The Future of Healthcare: 2022 Hospital Vision Study", url: "{{config('app.url')}}zebra/files/2022-hospital-vision-study-en-global.pdf", onClick : "s.trackData({prop44:'HC-2022HospitalVisionStudy_WHP_GL',eVar44:'HC-2022HospitalVisionStudy_WHP_GL',events:'event38'},'tl_d');" }
                    ]
                }
            };

            var screenWidth = 0;
            var isFormPosted = false;
            function setBackgrounds() {
                if (screenWidth < 768) {
                    $('#main').bgswitcher({
                        images: [
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-1.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-2.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-3.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-4.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-5.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-6.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-7.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-8.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-9.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        "{{config('app.url')}}zebra/img/background_mobile-0.jpg",
                        ],
                        effect: "fade",
                        interval: 10000,
                        start: false
                    });
                } else {
                    $('#main').bgswitcher({
                        images: [
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-1.jpg",
                        "{{config('app.url')}}zebra/img/background-full-2.jpg",
                        "{{config('app.url')}}zebra/img/background-full-3.jpg",
                        "{{config('app.url')}}zebra/img/background-full-4.jpg",
                        "{{config('app.url')}}zebra/img/background-full-5.jpg",
                        "{{config('app.url')}}zebra/img/background-full-6.jpg",
                        "{{config('app.url')}}zebra/img/background-full-7.jpg",
                        "{{config('app.url')}}zebra/img/background-full-8.jpg",
                        "{{config('app.url')}}zebra/img/background-full-9.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg",
                        "{{config('app.url')}}zebra/img/background-full-0.jpg"
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
            $("[name='question9Score']").val() * 1 +
            $("[name='question10Score']").val() * 1 +
            $("[name='question11Score']").val() * 1 +
            $("[name='question12Score']").val() * 1 +
            $("[name='question13Score']").val() * 1 +
            $("[name='question14Score']").val() * 1 +
            $("[name='question15Score']").val() * 1 +
            $("[name='question16Score']").val() * 1;

            $("[name='overallAverage']").val(score / 16);
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
                    "       <img class=\"icon\" src=\"{{config('app.url')}}zebra/img/icon-whitepaper.png\" /></a></td>\n" +
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

    <!-- {{config('app.url')}}zebra/eloqua script -->
    <script src="{{config('app.url')}}zebra/registration.js"></script>
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
    <script src="{{config('app.url')}}zebra/satelliteLib-0a23cff0f753ba0e0ab2bbcf17482bc138ae1238.js"></script>
    
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
    

    <!-- <script type="text/javascript">
    @if(Session('thank_message'))
    $('#results').show();
    @endif
    </script> -->
</body>

</html>