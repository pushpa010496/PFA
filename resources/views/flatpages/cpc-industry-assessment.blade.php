<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CPC Industry Assessment</title>

		<link rel="shortcut icon" href="{{config('app.url')}}images/favicon.ico" type="image/x-icon">

		<meta property="og:image" content="{{config('app.url')}}zebra/img/cpc-industry-assessment-og.jpg"/>
	

		<link rel="canonical" href="{{url('promotion/cpc-industry-assessment')}}"/>

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

			text-align: left;

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

			#registration .copy li input[type='text'], #registration .copy li select, #registration .copy li label {
    width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

#registration .copy li input[type='email']{
	width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

#registration .copy li input[type='tel']{
	width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

		</style>
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-91608244-2', 'auto');
		ga('send', 'pageview');
		</script>

		<meta name="csrf-token" content="{{ csrf_token() }}" />
		
	</head>

	<body>


		<form id="elqForm" name="cpc_form" action="{{route('cpcindustryAssessment.post')}}" method="post" target="postFrame">

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

					

					</div>

				</div>

				<div class="container" id="header-mobile">

					<div class="row">

						<div class="col-xs-6 text-left">

							<img src="{{ config('app.url') }}images/logo.png" class="d-inline-block align-middle"

								alt="Pharma Focus Asia" /> 

						</div>

					

					</div>

				</div>

			</header>

			<section id="main">

				<div id="mask">

					<div id="panelContainer">

						<div class="panel" id="registration" data-next="question1" class="hidden">

							<div class="content center up">

								<div class="header">

									<h1>CPC Industry Assessment</h1>

								</div>

								<div class="stripe">

								</div>

								<div class="copy" style="padding:15px;">

									<h3>MicroCNX® Industry Questionnaire </h3>

									<div>

										<ul style='list-style:disc;'>

											<li>Understand respondents’ current fluid connection set up</li>

											<li>Understand concerns & challenges about their current set up</li>

											<li style='float:left !important;'>Lead them to learn more about SUT & MicroCNX</li>

										</ul>

									</div>

									<ul>

										<li> 

											<input type="text" name="FirstName" placeholder="First Name *" autocomplete="given-name" class="required" tabindex="1">

										</li>

										<li>

											<input type="text" name="LastName" placeholder="Last Name *" autocomplete="family-name" class="required"  tabindex="2">

										</li>

										<li>

											<input type="email" name="emailAddress" placeholder="Email *" class="required emailAddress" tabindex="4">

										</li>

										<li>

											<input type="text" name="Phone" placeholder="Phone" autocomplete="tel"  tabindex="5" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">

										</li>

										<li>

											<input type="text" name="company" placeholder="Company *" class="required" autocomplete="off"  tabindex="3"   style="width:630px;">

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
								
								<div class="cta" >

									<input type="button"  value="Take the Assessment" tabindex="8">
											</div>
										
										</div>

						</div>
						

						<div class="panel" id="question1" data-prev="registration" data-next="question2" class="hidden">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 1: Basic information</h4>

									<p>1. Industry</p>

									<p class="progress-numb">( 1 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1a" value="Traditional pharma" data-score="3">

											</td>

											<td>

												<label for="question1a">Traditional pharma

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1b" value="Biopharma" data-score="2">

											</td>

											<td>

												<label for="question1b">Biopharma</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1c" value="Bioprocessing design & consultation" data-score="3">

											</td>

											<td>

												<label for="question1c">Bioprocessing design & consultation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1d" value="Cell therapy only" data-score="3">

											</td>

											<td>

												<label for="question1d">Cell therapy only

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1e" value="Gene therapy only" data-score="3">

											</td>

											<td>

												<label for="question1e">Gene therapy only

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1f" value="Both cell & gene therapy" data-score="3">

											</td>

											<td>

												<label for="question1f">Both cell & gene therapy

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1g"

												value="Cell Gene therapy equipment design consultation or maker" data-score="3">

											</td>

											<td>

												<label for="question1g">Cell Gene therapy equipment design consultation or maker

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1h" value="Cell Gene therapy design and consultation" data-score="3">

											</td>

											<td>

												<label for="question1h">Cell Gene therapy design and consultation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1" id="question1i" value="CDMO / CRO" data-score="3">

											</td>

											<td>

												<label for="question1i">CDMO / CRO

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question1"  id="question1j" value="Others" data-score="4">

											</td>

											<td>

												<label for="question1j">Others </label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>
				

						<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">														
						<input type="button" id="btn1" onclick="formSubmit(this.id)"   value="&lt;&lt;Submit Answer">
						</div>
						<div class="cta" style="width:50%;background-color:#595959 !important;">
						<input type="button" id="btnPrev" onclick="prevSubmit('question1')" value="Previous Page&gt;&gt;">
						</div>
						</div>


								
							</div>

						</div>

						<div class="panel" id="question2" data-prev="question1" data-next="question3" class="hidden">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 1: Basic information</h4>

									<p>2. Job type</p>

									<p class="progress-numb">( 2 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2a" value="Research and Development Scientist" data-score="1">

											</td>

											<td>

												<label for="question2a">Research and Development Scientist

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2b" value="Procurement / Supply chain" data-score="2">

											</td>

											<td>

												<label for="question2b">Procurement / Supply chain

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2c" value="Production – Upstream" data-score="3">

											</td>

											<td>

												<label for="question2c">Production – Upstream 

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2d" value="Production – Harvesting / Downstream" data-score="3">

											</td>

											<td>

												<label for="question2d">Production – Harvesting / Downstream

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2e" value="Production – Formulation, Fill and Finish" data-score="3">

											</td>

											<td>

												<label for="question2e">Production – Formulation, Fill and Finish 

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2f" value="MSAT engineering" data-score="3">

											</td>

											<td>

												<label for="question2f">MSAT engineering

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2g" value="Improvement process / Process engineers" data-score="3">

											</td>

											<td>

												<label for="question2g">Improvement process / Process engineers

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question2" id="question2h" value="Others" data-score="4">

											</td>

											<td>

												<label for="question2h" name="question2">Others </label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
									<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn2" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

									</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev2" onclick="prevSubmit('question2')"  value="Previous Page&gt;&gt;">

								</div>
								</div>
								
							</div>

						</div>

						<div class="panel" id="question3" data-prev="question2" data-next="question4" class="hidden">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 1: Basic information</h4>

									<p>3. Specific to the project that you’re working on, which phase of product development is it at now?

										(If you have multiple projects, please select multiple options.)

									</p>

									<p class="progress-numb">( 3 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3a" value="R&D" data-score="1">

											</td>

											<td>

												<label for="question3a">R&D

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3b" value="Pre-clinical" data-score="2">

											</td>

											<td>

												<label for="question3b">

													Pre-clinical

											</td>

										</tr>

										<tr>

										<td>

										<input type="checkbox" name="question3[]" id="question3c" value="Clinical Phase 1" data-score="3">

										</td>

										<td>

										<label for="question3c">Clinical Phase 1 

										</label>

										</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3d" value="Clinical Phase 2" data-score="3">

											</td>

											<td>

												<label for="question3d">Clinical Phase 2

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3e" value="Clinical Phase 3" data-score="3">

											</td>

											<td>

												<label for="question3e">Clinical Phase 3

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3f" value="Pilot Production" data-score="3">

											</td>

											<td>

												<label for="question3f">Pilot Production

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question3[]" id="question3g" value="Commercial manufacturing" data-score="3">

											</td>

											<td>

												<label for="question3g">Commercial manufacturing

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
									<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn3" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev3" onclick="prevSubmit('question3')"  value="Previous Page&gt;&gt;">

								</div>
							</div>

							</div>

						</div>

						<div class="panel" id="question4" data-prev="question3" data-next="question5">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 1: Basic information</h4>

									<p>4. Do you work with any type of fluid connection technologies? (Including tube welders, aseptic connectors, fittings etc.)</p>

									<p class="progress-numb">( 4 of 31 )</p>

								</div>

								<div class="stripe">&nbsp;</div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question4" id="question4a" value="Yes" data-score="1">

											</td>

											<td>

												<label for="question4a">Yes</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question4" id="question4b" value="No" data-score="2">

											</td>

											<td>

												<label for="question4b">No</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
									<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn4" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev4" onclick="prevSubmit('question4')"  value="Previous Page&gt;&gt;">

								</div>
							</div>
							</div>

						</div>

						<div class="panel" id="question5" data-prev="question4" data-next="question6">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 1: Basic information</h4>

									<p>5. What is your reason for choosing “No” in the last question?</p>

									<p class="progress-numb">( 5 of 31 )</p>

								</div>

								<div class="stripe">&nbsp;</div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question5" id="question5a" value="Budget constraint" data-score="1">

											</td>

											<td>

												<label for="question5a">Budget constraint</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question5" id="question5b" value="Don’t know much about connection technology" data-score="2">

											</td>

											<td>

												<label for="question5b">Don’t know much about connection technology</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question5" id="question5c" value="Haven’t established fluid connection protocol" data-score="3">

											</td>

											<td>

												<label for="question5c">Haven’t established fluid connection protocol </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question5" id="question5d" value="Do not know how to design fluid system using connection technology" data-score="3">

											</td>

											<td>

												<label for="question5d">Do not know how to design fluid system using connection technology </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question5" id="question5e" value="Others" data-score="0">

											</td>

											<td>

												<label for="question5e"></label>Others

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
									<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn5"  onclick="formSubmit(this.id)"  value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev5" onclick="prevSubmit('question5')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question6" data-prev="question5" data-next="question7">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>6. What is your current working environment?</p>

									<p class="progress-numb">( 6 of 31 )</p>

								</div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6a" value="Non-CGMP certified laboratory" data-score="1">

											</td>

											<td>

												<label for="question6a">Non-CGMP certified laboratory

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6b" value="Manufacturing facility " data-score="2">

											</td>

											<td>

												<label for="question6b">Manufacturing facility </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6c" value="Pilot plant manufacturing facility / CGMP laboratory scale" data-score="3">

											</td>

											<td>

												<label for="question6c">Pilot plant manufacturing facility / CGMP laboratory scale</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6d" value="CGMP Class A" data-score="3">

											</td>

											<td>

												<label for="question6d">CGMP Class A

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6e" value="CGMP Class B" data-score="3">

											</td>

											<td>

												<label for="question6e">CGMP Class B

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6f" value="CGMP Class C" data-score="3">

											</td>

											<td>

												<label for="question6f">CGMP Class C

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question6" id="question6g" value="CGMP Class D" data-score="3">

											</td>

											<td>

												<label for="question6g">CGMP Class D

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn6" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev6" onclick="prevSubmit('question6')"  value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question7" data-prev="question6" data-next="question8">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>7. Would you be interested to try connection technology that allows you to perform aseptic operation in non-Class A environment, even without BSC or LAF support?</p>

									<p class="progress-numb">( 7 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question7" id="question7a" value="Yes" data-score="1">

											</td>

											<td>

												<label for="question7a">Yes</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question7" id="question7b" value="No, because" data-score="2">

											</td>

											<td>

												<label for="question7b">No, because</label>

											</td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>
								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn7" onclick="formSubmit(this.id)" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev7" onclick="prevSubmit('question7')"  value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question8" data-prev="question7" data-next="question9">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>8.  Which of the below processes do you mainly work with? (multiple choice)</p>

									<p class="progress-numb">( 8 of 31 )</p>

								</div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8a" value="Seed stock" data-score="1">

											</td>

											<td>

												<label for="question8a">Seed stock</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8b" value="Scaling up" data-score="1">

											</td>

											<td>

												<label for="question8b">Scaling up</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8c" value="Cell expansion" data-score="1">

											</td>

											<td>

												<label for="question8c">Cell expansion</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8d" value="Harvesting" data-score="1">

											</td>

											<td>

												<label for="question8d">Harvesting

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8e" value="Filtration and purifications" data-score="1">

											</td>

											<td>

												<label for="question8e">Filtration and purifications</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8f" value="Separation" data-score="1">

											</td>

											<td>

												<label for="question8f">Separation</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8g" value="Polishing" data-score="1">

											</td>

											<td>

												<label for="question8g">Polishing</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8h" value="Formulation

													" data-score="1">

											</td>

											<td>

												<label for="question8h">Formulation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8i" value="Media / enrichments additions" data-score="1">

											</td>

											<td>

												<label for="question8i">Media / enrichments additions</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8j" value="Final fill" data-score="1">

											</td>

											<td>

												<label for="question8j">Final fill

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question8[]" id="question8k" value="Others" data-score="0">

											</td>

											<td>

												<label for="question8k"></label>Others

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question8[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">

									<input type="button" id="btn8" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">
									</div>
									<div class="cta" style="width:50%;background-color:#595959 !important;">

									<input type="button" id="btnPrev8" onclick="prevSubmit('question8')" value="Previous Page&gt;&gt;">
		</div>
								</div>
								 
							</div>

						</div>

						<div class="panel" id="question9" data-prev="question8" data-next="question10">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>9. Which of the below processes do you mainly work with? (multiple choice)</p>

									<p class="progress-numb">( 9 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9a" value="Media prep" data-score="1">

											</td>

											<td>

												<label for="question9a">Media prep</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9b" value="Cell isolation" data-score="1">

											</td>

											<td>

												<label for="question9b">Cell isolation</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9c" value="Cell activation / enrichments" data-score="1">

											</td>

											<td>

												<label for="question9c">Cell activation / enrichments</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9d" value="Cell expansion" data-score="1">

											</td>

											<td>

												<label for="question9d">Cell expansion

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9e" value="Transfection / Modification" data-score="1">

											</td>

											<td>

												<label for="question9e">Transfection / Modification</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9f" value="Harvesting / Formulation" data-score="1">

											</td>

											<td>

												<label for="question9f">Harvesting / Formulation 

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9g" value="Filtration" data-score="1">

											</td>

											<td>

												<label for="question9g">Filtration

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9h" value="Cell counting" data-score="1">

											</td>

											<td>

												<label for="question9h">Cell counting

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9i" value="Fill & Finish" data-score="1">

											</td>

											<td>

												<label for="question9i">Fill & Finish</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9j" value="Cryopreservation" data-score="1">

											</td>

											<td>

												<label for="question9j">Cryopreservation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9k" value="Shipping" data-score="1">

											</td>

											<td>

												<label for="question9k">Shipping

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question9[]" id="question9l" value="Others" data-score="0">

											</td>

											<td>

												<label for="question9l"></label>Others

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question9[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">
									<input type="button" id="btn9" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev9" onclick="prevSubmit('question9')" value="Previous Page&gt;&gt;">

								</div>
		</div>
							</div>

						</div>

						

						<div class="panel" id="question10" data-prev="question9" data-next="question11">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>10. Are there any automated processes integrated in your workflow? (multiple choice)</p>

									<p class="progress-numb">( 10 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10a" value="No" data-score="1">

											</td>

											<td>

												<label for="question10a">No</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10b" value="Yes – Screening and selections" data-score="1">

											</td>

											<td>

												<label for="question10b">Yes – Screening and selections</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10c" value="Yes – Cultures media advances" data-score="1">

											</td>

											<td>

												<label for="question10c">Yes – Cultures media advances</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10d" value="Yes – Process expansion" data-score="1">

											</td>

											<td>

												<label for="question10d">Yes – Process expansion

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10e" value="Yes – Cell expansion, modification and differentiation methods" data-score="1">

											</td>

											<td>

												<label for="question10e">Yes – Cell expansion, modification and differentiation methods</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10f" value="Yes – Post-harvest / downstream techniques" data-score="1">

											</td>

											<td>

												<label for="question10f">Yes – Post-harvest / downstream techniques

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10g" value="Yes – Fill & Finish" data-score="1">

											</td>

											<td>

												<label for="question10g">Yes – Fill & Finish

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question10[]" id="question10h" value="Yes – Others" data-score="1">

											</td>

											<td>

												<label for="question10h">Yes – Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question10[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		
									<input type="button" id="btn10" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev10" onclick="prevSubmit('question10')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question11" data-prev="question10" data-next="question12">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>11. Which of the below automation equipment brands do you currently use? (multiple choice)</p>

									<p class="progress-numb">( 11 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11a" value="Cytiva" data-score="1">

											</td>

											<td>

												<label for="question11a">Cytiva</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11b" value="Thermo Fisher" data-score="1">

											</td>

											<td>

												<label for="question11b">Thermo Fisher</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11c" value="Sartorius" data-score="1">

											</td>

											<td>

												<label for="question11c">Sartorius</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11d" value="Miltenyi" data-score="1">

											</td>

											<td>

												<label for="question11d">Miltenyi

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11e" value="Fresenius Kabi" data-score="1">

											</td>

											<td>

												<label for="question11e">Fresenius Kabi

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11f" value="Terumo" data-score="1">

											</td>

											<td>

												<label for="question11f">Terumo

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question11[]" id="question11h" value="Others

													" data-score="1">

											</td>

											<td>

												<label for="question11h">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question11[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		

									<input type="button" id="btn11" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev11" onclick="prevSubmit('question11')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question12" data-prev="question11" data-next="question13">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>12. Does your workflow involve freeze-thaw? </p>

									<p class="progress-numb">( 12 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question12" id="question12a" value="Yes, at -80°C" data-score="1">

											</td>

											<td>

												<label for="question12a">Yes, at -80°C

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question12" id="question12b" value="Yes, at -196°C" data-score="2">

											</td>

											<td>

												<label for="question12b">Yes, at -196°C</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question12" id="question12c" value="No" data-score="3">

											</td>

											<td>

												<label for="question12c">No

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		


									<input type="button" id="btn12" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev12" onclick="prevSubmit('question12')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question13" data-prev="question12" data-next="question14">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 2: Working environment & Processes</h4>

									<p>13. What kind of connection technology is used on your freeze-thaw bag / bottle?

									</p>

									<p class="progress-numb">( 13 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question13" id="question13a" value="Tube welding " data-score="1">

											</td>

											<td>

												<label for="question13a">Tube welding ( brand 

												<input type='text' id="question13a" value=''>) </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question13" id="question13b" value="Fittings / Luer" data-score="1">

											</td>

											<td>

												<label for="question13b">Fittings / Luer ( brand 

												<input type='text' id="question13b" value=''>) </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question13" id="question13c" value="Quick connector" data-score="1">

											</td>

											<td>

												<label for="question13c">Quick connector ( brand 

												<input type='text' id="question13c" value=''>) </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question13" id="question13d" value="Aseptic connector" data-score="1">

											</td>

											<td>

												<label for="question13d">Aseptic connector ( brand 

												<input type='text' id="question13d" value=''>) </label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question13" id="question13e" value="Others" data-score="3">

											</td>

											<td>

												<label for="question13e">Others</label>

											</td>

										</tr>

										<tr>

											<td>

											</td>

											<td>

												<textarea cols="30"  rows='2'></textarea>

											</td>

										</tr>

									</table>

								</div>

								
 						<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn13" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev13" onclick="prevSubmit('question13')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question14" data-prev="question13" data-next="question15">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>14. What type of processing system are you using currently?

									</p>

									<p class="progress-numb">( 14 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question14" id="question14a" value="Fully stainless steel" data-score="1">

											</td>

											<td>

												<label for="question14a">Fully stainless steel

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question14" id="question14b" value="Fully single-use" data-score="2">

											</td>

											<td>

												<label for="question14b">Fully single-use</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question14" id="question14c" value="Hybrid. Please specify processes in which single-use technology is used" data-score="3">

											</td>

											<td>

												<label for="question14c">Hybrid. Please specify processes in which single-use technology is used</label>

											</td>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

										</tr>

									</table>

								</div>

								
 <div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn14" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev14" onclick="prevSubmit('question14')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question15" data-prev="question14" data-next="question16">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>15. Which of the below CGT equipment do you mainly work with? (multiple choice)

									</p>

									<p class="progress-numb">( 15 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15a" value="Traditional systems (stainless steel)" data-score="1">

											</td>

											<td>

												<label for="question15a">Traditional systems (stainless steel)

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15b" value="Rocking platform" data-score="1">

											</td>

											<td>

												<label for="question15b">Rocking platform</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15c" value="Bioreactor, e.g. Allegro, Vertical Wheel MagDrive" data-score="1">

											</td>

											<td>

												<label for="question15c">Bioreactor, e.g. Allegro, Vertical Wheel MagDrive</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15d" value="G rex system" data-score="1">

											</td>

											<td>

												<label for="question15d">G rex system

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15e" value="Hollow fiber" data-score="1">

											</td>

											<td>

												<label for="question15e">Hollow fiber

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15f" value="Stir tank" data-score="1">

											</td>

											<td>

												<label for="question15f">Stir tank

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15g" value="T flask / disposable flask / cell stacks / cell factory" data-score="1">

											</td>

											<td>

												<label for="question15g">T flask / disposable flask / cell stacks / cell factory

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15h" value="Static bag" data-score="1">

											</td>

											<td>

												<label for="question15h">Static bag

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15i" value="Automated systems" data-score="1">

											</td>

											<td>

												<label for="question15i">Automated systems

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question15[]" id="question15j" value="Others" data-score="1">

											</td>

											<td>

												<label for="question15j">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question15[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		

									<input type="button" id="btn15" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev15" onclick="prevSubmit('question15')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question16" data-prev="question15" data-next="question17">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>16. What type of connection technology do you mainly use for your fluid transfer system? (multiple choice)

									</p>

									<p class="progress-numb">( 16 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16a" value="Tube welders" data-score="1">

											</td>

											<td>

												<label for="question16a">Tube welders

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16b" value="Tube sealers" data-score="1">

											</td>

											<td>

												<label for="question16b">Tube sealers</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16c" value="Quick connection" data-score="1">

											</td>

											<td>

												<label for="question16c">Quick connection</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16d" value="Gendered aseptic connectors" data-score="1">

											</td>

											<td>

												<label for="question16d">Gendered aseptic connectors

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16e" value="Genderless aseptic connectors" data-score="1">

											</td>

											<td>

												<label for="question16e">Genderless aseptic connectors

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16f" value="Aseptic disconnect" data-score="1">

											</td>

											<td>

												<label for="question16f">Aseptic disconnect

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16g" value="Fitting & Luer locks" data-score="1">

											</td>

											<td>

												<label for="question16g">Fitting & Luer locks

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question16[]" id="question16j" value="Others" data-score="1">

											</td>

											<td>

												<label for="question16j">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question16[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		


									<input type="button" id="btn16" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev16" onclick="prevSubmit('question16')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question17" data-prev="question16" data-next="question18">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>17. How satisfied overall are you with your current fluid connection technology?

									</p>

									<p class="progress-numb">( 17 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question17" id="question17a" value="Very satisfied" data-score="1">

											</td>

											<td>

												<label for="question17a">Very satisfied

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question17" id="question17b" value="Satisfied" data-score="2">

											</td>

											<td>

												<label for="question17b">Satisfied</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question17" id="question17c" value="Unsatisfied" data-score="3">

											</td>

											<td>

												<label for="question17c">Unsatisfied

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question17" id="question17d" value="Very unsatisfied" data-score="3">

											</td>

											<td>

												<label for="question17d">Very unsatisfied

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn17" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">
								<input type="button" id="btnPrev17" onclick="prevSubmit('question17')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question18" data-prev="question17" data-next="question19">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>18. Please explain your choice of satisfaction level.

									</p>

									<p class="progress-numb">( 18 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question18" id="question18a" value="" data-score="1">

											</td>

											<td>

												<textarea cols="30" name="question18" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">		


									<input type="button" id="btn18" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev18" onclick="prevSubmit('question18')" value="Previous Page&gt;&gt;">
		</div>
								</div>

							</div>

						</div>

						<div class="panel" id="question19" data-prev="question18" data-next="question20">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>19. What kind of tubing sizes (internal diameter) do you mainly work with? (multiple choice)

									</p>

									<p class="progress-numb">( 19 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="checkbox" name="question19[]" id="question19a" value="Less than 1/8 inch" data-score="1">

											</td>

											<td>

												<label for="question19a">Less than 1/8 inch

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question19[]" id="question19b" value="1/8 – 1/4 inch" data-score="1">

											</td>

											<td>

												<label for="question19b">1/8 – 1/4 inch

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question19[]" id="question19c" value="3/8 inch – 3/4 inch" data-score="1">

											</td>

											<td>

												<label for="question19c">3/8 inch – 3/4 inch</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question19[]" id="question19d" value="1 inch" data-score="1">

											</td>

											<td>

												<label for="question19d">1 inch

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="checkbox" name="question19[]" id="question19e" value="Others" data-score="1">

											</td>

											<td>

												<label for="question19e">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30" name="question19[]" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn19" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev19" onclick="prevSubmit('question19')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question20" data-prev="question19" data-next="question21">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>20. What type of tubing material do you mainly work with?

									</p>

									<p class="progress-numb">( 20 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question20" id="question20a" value="PVC" data-score="1">

											</td>

											<td>

												<label for="question20a">PVC

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question20" id="question20b" value="Silicone" data-score="1">

											</td>

											<td>

												<label for="question20b">Silicone

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question20" id="question20c" value="EVA" data-score="1">

											</td>

											<td>

												<label for="question20c">EVA</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question20" id="question20d" value="TPE (E.g. C-flex, Advantaflex)" data-score="1">

											</td>

											<td>

												<label for="question20d">TPE (E.g. C-flex, Advantaflex)

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question20" id="question20e" value="Others" data-score="1">

											</td>

											<td>

												<label for="question20e">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn20" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev20" onclick="prevSubmit('question20')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question21" data-prev="question20" data-next="question22">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>21. How often do you work with tube welders or sealers?

									</p>

									<p class="progress-numb">( 21 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question21" id="question21a" value="1-5 times per day" data-score="1">

											</td>

											<td>

												<label for="question21a">1-5 times per day

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question21" id="question21b" value="6-10 times per day" data-score="1">

											</td>

											<td>

												<label for="question21b">6-10 times per day

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question21" id="question21c" value="11-15 times per day" data-score="1">

											</td>

											<td>

												<label for="question21c">11-15 times per day

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question21" id="question21d" value="More than 15 times per day" data-score="1">

											</td>

											<td>

												<label for="question21d">More than 15 times per day

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question21" id="question21e" value="Others" data-score="1">

											</td>

											<td>

												<label for="question21e">Do not use tube welders on a daily basis

												</label>

											</td>

										</tr>

									</table>

								</div>
								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	


									<input type="button" id="btn21" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev21" onclick="prevSubmit('question21')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question22" data-prev="question21" data-next="question23">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>22.  Using a tube welder, how long do you take to make one connection?

									</p>

									<p class="progress-numb">( 22 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22a" value="Less than 1 min" data-score="1">

											</td>

											<td>

												<label for="question22a">Less than 1 min

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22b" value="1-3 mins" data-score="1">

											</td>

											<td>

												<label for="question22b">1-3 mins

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22c" value="3-5 mins" data-score="1">

											</td>

											<td>

												<label for="question22c">3-5 mins

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22d" value="5-8 mins" data-score="1">

											</td>

											<td>

												<label for="question22d">5-8 mins

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22e" value="8-10 mins" data-score="1">

											</td>

											<td>

												<label for="question22e">8-10 mins

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question22" id="question22f" value="More than 10 mins" data-score="1">

											</td>

											<td>

												<label for="question22f">More than 10 mins

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn22" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev22" onclick="prevSubmit('question22')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question23" data-prev="question22" data-next="question24">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>23.  Which factors are most important when choosing a fluid connection technology for your application? Please rank.

									</p>

									<p class="progress-numb">( 23 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23a" value="Availability of flow sizes" data-score="1">

											</td>

											<td>

												<label for="question23a">Availability of flow sizes

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23b" value="Stability & purity" data-score="1">

											</td>

											<td>

												<label for="question23b">Stability & purity 

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23c" value="Ability to fit into small spaces" data-score="1">

											</td>

											<td>

												<label for="question23c">Ability to fit into small spaces

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23d" value="Ease of use / learning curve" data-score="1">

											</td>

											<td>

												<label for="question23d">Ease of use / learning curve

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23e" value="Ease of validation" data-score="1">

											</td>

											<td>

												<label for="question23e">Ease of validation

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23f" value="Ease of inventory management & storage" data-score="1">

											</td>

											<td>

												<label for="question23f">Ease of inventory management & storage

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23g" value="Ease of scaling up" data-score="1">

											</td>

											<td>

												<label for="question23g">Ease of scaling up

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23h" value="Total cost of ownership / cost per connection" data-score="1">

											</td>

											<td>

												<label for="question23h">Total cost of ownership / cost per connection

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question23" id="question23i" value="Others" data-score="1">

											</td>

											<td>

												<label for="question23i">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn23" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev23" onclick="prevSubmit('question23')" value="Previous Page&gt;&gt;">
		</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question24" data-prev="question23" >

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>24.  What are the biggest challenges you encounter when using your current fluid connection technology? Please rank.

									</p>

									<p class="progress-numb">( 24 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24a" value="Long set-up and operation time" data-score="1">

											</td>

											<td>

												<label for="question24a">Long set-up and operation time

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24b" value="Inflexibility to connect tubing of different sizes" data-score="1">

											</td>

											<td>

												<label for="question24b">Inflexibility to connect tubing of different sizes

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24c" value="High cost of capital and ancillary equipment" data-score="1">

											</td>

											<td>

												<label for="question24c">High cost of capital and ancillary equipment

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24d" value="High cost of maintenance" data-score="1">

											</td>

											<td>

												<label for="question24d">Ease of use / learning curve

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24e" value="Risk of contamination" data-score="1">

											</td>

											<td>

												<label for="question24e">Risk of contamination

												n

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24f" value="Risk of leakage" data-score="1">

											</td>

											<td>

												<label for="question24f">Risk of leakage

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24g" value="Bulkiness" data-score="1">

											</td>

											<td>

												<label for="question24g">Bulkiness

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24h" value="Need for on-site validation" data-score="1">

											</td>

											<td>

												<label for="question24h">Need for on-site validation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question24" id="question24i" value="Others" data-score="1">

											</td>

											<td>

												<label for="question24i">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	
									<input type="button" id="btn24" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev24" onclick="prevSubmit('question24')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question25" data-prev="question24" data-next="question26">

							<div class="content center up">

								<div class="header">

									<h3>Question Set A</h3>

									<h4>Section 3: Connection set-up</h4>

									<p>25.  Will you consider adopting aseptic single-use connection technology, which can increase your fluid connection efficiency 4 times than tube welding, while maintaining high integrity without the risk of contamination?

									</p>

									<p class="progress-numb">( 25 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question25" id="question25a" value="Yes" data-score="1">

											</td>

											<td>

												<label for="question25a">Yes</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question25" id="question25b" value="No, because" data-score="2">

											</td>

											<td>

												<label for="question25b">No, because</label>

											</td>

											<td>

												<textarea cols="30" name="question25" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn25" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev25" onclick="prevSubmit('question25')" value="Previous Page&gt;&gt;">

								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question26" data-next="question27">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>26.  Which of the below fields do you work in?</p>

									<p class="progress-numb">( 26 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question26" id="question26a" value="Only cell therapy" data-score="1">

											</td>

											<td>

												<label for="question26a">Only cell therapy</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question26" id="question26b" value="Only gene therapy" data-score="1">

											</td>

											<td>

												<label for="question26b">Only gene therapyy</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question26" id="question26c" value="Cell & gene therapy" data-score="1">

											</td>

											<td>

												<label for="question26c">Cell & gene therapy</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">

									<input type="button" id="btn26" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev26" onclick="prevSubmit('question26')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question27" data-prev="question26" data-next="question28">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>27.  Are you in the process of developing automated CGT systems?

									</p>

									<p class="progress-numb">( 27 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question27" id="question27a" value="Yes – upstream automation" data-score="1">

											</td>

											<td>

												<label for="question27a">Yes – upstream automation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question27" id="question27b" value="Yes – downstream automation" data-score="2">

											</td>

											<td>

												<label for="question27b">Yes – downstream automation

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question27" id="question27c" value="No" data-score="2">

											</td>

											<td>

												<label for="question27c">No

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn27" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev27" onclick="prevSubmit('question27')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question28" data-prev="question27" data-next="question29">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>28.  Are you in the process of developing bioprocessing systems?

									</p>

									<p class="progress-numb">( 28 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question28" id="question28a" value="Yes – upstream" data-score="1">

											</td>

											<td>

												<label for="question28a">Yes – upstream

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question28" id="question28b" value="Yes – downstream" data-score="2">

											</td>

											<td>

												<label for="question28b">Yes – downstream 

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question28" id="question28c" value="No" data-score="2">

											</td>

											<td>

												<label for="question28c">No

												</label>

											</td>

										</tr>

									</table>

								</div>
								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	

									<input type="button" id="btn28" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev28" onclick="prevSubmit('question28')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question29" data-prev="question28" data-next="question30">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>29.  Will you consider using closed system on your new project?

									</p>

									<p class="progress-numb">( 29 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question29" id="question29a" value="Yes" data-score="1">

											</td>

											<td>

												<label for="question29a">Yes

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question29" id="question29b" value="No" data-score="2">

											</td>

											<td>

												<label for="question29b">No

												</label>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">	


									<input type="button" id="btn29" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev29" onclick="prevSubmit('question29')" value="Previous Page&gt;&gt;">
								</div>
								</div>

							</div>

						</div>

						<div class="panel" id="question30" data-prev="question29" data-next="question31">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>30.  How many connections does your project require?

									</p>

									<p class="progress-numb">( 30 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question30" id="questio30a" value="" data-score="1">

											</td>

											<td>

												<textarea cols="30" name="question30" value="" rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div style="display:flex;">
						<div class="cta" style="width:50%;background-color:#1f4e78 !important;">
									<input type="button" id="btn30" onclick="formSubmit(this.id)" value="&lt;&lt;Submit Answer">

								</div>
								<div class="cta" style="width:50%;background-color:#595959 !important;">

								<input type="button" id="btnPrev30" onclick="prevSubmit('question30')" value="Previous Page&gt;&gt;">
								</div>
								</div>
							</div>

						</div>

						<div class="panel" id="question31" data-prev="question30" data-next="results">

							<div class="content center up">

								<div class="header">

									<h3>Question Set B</h3>

									<p>31.  Which connection technology do you use for your system design?

									</p>

									<p class="progress-numb">( 31 of 31 )</p>

								</div>

								<div class="stripe"></div>

								<div class="copy">

									<table>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31a" value="Tube welders" data-score="1">

											</td>

											<td>

												<label for="question31a">Tube welders

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31b" value="Tube sealers" data-score="2">

											</td>

											<td>

												<label for="question31b">Tube sealers

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31c" value="Quick connection" data-score="2">

											</td>

											<td>

												<label for="question31c">Quick connection

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31d" value="Gendered aseptic connectors" data-score="2">

											</td>

											<td>

												<label for="question31d">Gendered aseptic connectors

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31e" value="Genderless aseptic connectors" data-score="2">

											</td>

											<td>

												<label for="question31e">Genderless aseptic connectors

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31f" value="Aseptic disconnect" data-score="2">

											</td>

											<td>

												<label for="question31f">Aseptic disconnect

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31g" value="Fitting & Luer locks" data-score="2">

											</td>

											<td>

												<label for="question31g">Fitting & Luer locks

												</label>

											</td>

										</tr>

										<tr>

											<td>

												<input type="radio" name="question31" id="question31h" value="Others" data-score="1">

											</td>

											<td>

												<label for="question31h">Others

												</label>

											</td>

										</tr>

										<tr>

											<td></td>

											<td>

												<textarea cols="30"  rows="2"></textarea>

											</td>

										</tr>

									</table>

								</div>

								<div class="cta">

									<input type="button" id="btn31" onclick="formSubmit(this.id)" value="Submit Answer">

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

							Ochre Media Pvt. Ltd.

						</p>

					</li>

					<li  class='px-2'>

						<p class="mb-1"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com

						</p>

					</li>

				</ul>

			</div>

		</footer>

		<script src="https://industry.pharmafocusasia.com/js/bootstrap.min.js"></script>

		<script src="https://www.pharmafocusasia.com/public/styles/js/pf-scripts.js"></script>
		<script>

			$(document).keydown(function(objEvent) {

			if (objEvent.keyCode == 9) {  //tab pressed

			    objEvent.preventDefault(); // stops its action

			}

			})

			

			var resources = {

			    scoreLow: {

			        heading: "Essential Connections",

			        copy: "It’s time to establish some basic connections between your staff, your patients and their data. Youll get more accuracy, enable your team to provide better care and start seeing better overall outcomes. We can help you get started. Here are some resources to help you learn more about implementing some identification technology to start creating the connections you need.",

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

			            "{{config('app.url')}}zebra/img/background_mobile-1.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-3.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-4.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-5.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-6.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-7.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-8.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-9.jpg",

			

			            

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg"

			            ],

			            effect: "fade",

			            interval: 10000,

			            start: false

			        });

			    } else {

			        $('#main').bgswitcher({

			            images: [

			            "{{config('app.url')}}zebra/img/background-cpn-full-0.jpg",

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

			            "{{config('app.url')}}zebra/img/background-full-2.jpg",

			            "{{config('app.url')}}zebra/img/background-full-3.jpg",

			            "{{config('app.url')}}zebra/img/background-full-4.jpg",

			            "{{config('app.url')}}zebra/img/background-full-5.jpg",

			            "{{config('app.url')}}zebra/img/background-full-6.jpg",

			            "{{config('app.url')}}zebra/img/background-full-7.jpg",

			            "{{config('app.url')}}zebra/img/background-full-8.jpg",

			            "{{config('app.url')}}zebra/img/background-full-9.jpg",

			

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-1.jpg",

			            "{{config('app.url')}}zebra/img/background-full-2.jpg",

			            "{{config('app.url')}}zebra/img/background-full-3.jpg",

			            "{{config('app.url')}}zebra/img/background-full-4.jpg",

			            "{{config('app.url')}}zebra/img/background-full-5.jpg",

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

			

			    if (question != "results") $("html,body").animate({ "scrollTop": $("#" + question).find(".header").offset().top - 33 });

			    else $("html,body").animate({ "scrollTop": $("#" + question).find(".content").offset().top - 33 });

			

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

			

			$("[name='overallAverage']").val(score / 31);

			}

	

			 var  is16tubes,is16tubew=false;

			 var is1cellgen=false;

			 var prevForm='question1';

			 function prevSubmit(currQues){ 
				var cqIndex;var prIndex;
				var cur=currQues.substr(currQues.length-2);
				var prev=prevForm.substr(prevForm.length-2);
				if(isNaN(cur)){
				 cqIndex=currQues.substr(currQues.length-1) ;
				 prIndex=prevForm.substr(prevForm.length-1) ;
				 if(prIndex > cqIndex){
					prIndex=cqIndex-1;
					prevForm=prevForm.slice(0, -1) + prIndex.toString();
				 }				 
				}
				else {
					if(!isNaN(prev)){
						cqIndex=currQues.substr(currQues.length-2) ;
				        prIndex=prevForm.substr(prevForm.length-2) ;
				        if(prIndex > cqIndex) {
							prIndex=cqIndex-1;
					        prevForm=prevForm.slice(0, -2) + prIndex.toString();
				        }
						else{
							cqIndex=currQues.substr(currQues.length-2) ;
				            prIndex=prevForm.substr(prevForm.length-1) ;
				            if(prIndex > cqIndex) {
								prIndex=cqIndex-1;
					            prevForm=prevForm.slice(0, -2) + prIndex.toString();
				            } 
						} 
					} 
				}
				 
				switch(prevForm){

					case "question1": $('#question1').show(); break;
					case "question2": 
						if(currQues==prevForm) $('#question1').show(); 
						else  $('#question2').show();
					break;
					case "question3":
						if(currQues==prevForm) $('#question2').show(); 
						else  $('#question3').show(); 
					break;
					case "question4": 
						if(currQues==prevForm) {$('#question4').hide(); $('#question3').show();} 
						else  $('#question4').show();
					break;  
					case "question5": 
						if(currQues==prevForm) $('#question4').show(); 
						else  $('#question5').show();
					break;
					case "question6":
						if(currQues==prevForm) $('#question5').show(); 
						else  $('#question6').show();						
					break;
					case "question7": 
						if(currQues==prevForm) $('#question6').show(); 
						else  $('#question7').show();
					break;
					case "question8":
						if(currQues==prevForm) $('#question7').show(); 
						else  $('#question8').show();
					break;
					case "question9":
						if(currQues==prevForm) $('#question8').show(); 
						else $('#question9').show();
					break;
					case "question10":
						if(currQues==prevForm) $('#question9').show(); 
						else $('#question10').show();
					break;
					case "question11": 
						if(currQues==prevForm) $('#question10').show(); 
						else $('#question11').show();
					break;
					case "question12": 
						if(currQues==prevForm) { $('#question11').show(); }
						else $('#question12').show(); 
					break;
					case "question13": 
						if(currQues==prevForm) $('#question12').show(); 
						else $('#question13').show(); break;
					case "question14": 
						if(currQues==prevForm) {$('#question14').hide(); $('#question13').show(); }
						else $('#question14').show(); break;  
					case "question15":
						if(currQues==prevForm)  $('#question14').show(); 
						else $('#question15').show(); break;
					case "question16":
						if(currQues==prevForm) { $('#question15').show(); }
						else $('#question16').show(); break;
					case "question17":
						if(currQues==prevForm) $('#question16').show(); 
						else $('#question17').show(); break;
					case "question18":
						if(currQues==prevForm) $('#question17').show(); 
						else $('#question18').show(); break;
					case "question19":
						if(currQues==prevForm) $('#question18').show(); 
						else $('#question19').show(); break;
					case "question20":
						if(currQues==prevForm) $('#question19').show(); 
						else $('#question20').show(); break;
					case "question21":
						if(currQues==prevForm) $('#question20').show(); 
						else $('#question21').show(); break;
					case "question22":
						if(currQues==prevForm) $('#question21').show(); 
						else $('#question22').show(); break;
					case "question23":
						if(currQues==prevForm) $('#question22').show(); 
						else $('#question23').show(); break;
					case "question24":
						if(currQues==prevForm) $('#question23').show(); 
						else $('#question24').show(); break;  
					case "question25":
						if(currQues==prevForm) $('#question24').show(); 
						else $('#question25').show(); break;
					case "question26":
						if(currQues==prevForm) $('#question25').show(); 
						else $('#question26').show(); break;
					case "question27":
						if(currQues==prevForm) $('#question26').show(); 
						else $('#question27').show(); break;
					case "question28":
						if(currQues==prevForm) { $('#question1').show(); }
						else $('#question28').show(); break;
					case "question29":
						if(currQues==prevForm) $('#question28').show(); 
						else $('#question29').show(); break;
					case "question30":
						if(currQues==prevForm) $('#question29').show(); 
						else $('#question30').show(); break;
				 }
			 }
			 var  is16tubescells=false;
			 var  is1stbiopr=false;
			 var  is1stcellgenther=false;
			 var  is1stcmdo=false;
			 var is1stothers=false;
			 
			function formSubmit(btnval){		    

			    switch(btnval){
			        // Question-1		        

			        case "btn1":
						prevForm='question1';
			            var rbnVal=$('input[name="question1"]:checked').val();

			            switch(rbnVal){

			                 case "Traditional pharma":

			                        $('#question1').hide();

			                         is1cellgen=true;
									  
			                        $('#question2').show();

			                 break;

			                 case "Biopharma":

			                        $('#question1').hide();

			                          is1cellgen=true;
									   
			                        $('#question2').show();

			                 break;

			                 case 'Bioprocessing design & consultation':

			                       $('#question1').hide();
								 is1stbiopr=true;
									prevForm='question2';
			                        $('#question2').show();

			                 break;

			                 case 'Cell therapy only':

			                        $('#question1').hide();

			                         is1cellgen=false;
									  
			                        $('#question2').show(); 

			                 break;

			                 case 'Gene therapy only':

			                       $('#question1').hide();

			                         is1cellgen=false;
									  
			                        $('#question2').show(); 

			                        

			                 break;

			                 case 'Both cell & gene therapy':

			                       $('#question1').hide();

			                         is1cellgen=false;
									 
			                        $('#question2').show(); 

			                        

			                 break;

			                 case 'Cell Gene therapy equipment design consultation or maker':
								$('#question1').hide();
								is1stcellgenther=true;
			                        $('#question2').show();

			                 break;

			                 case 'Cell Gene therapy design and consultation':

								$('#question1').hide();
								is1stcellgenther=true;
			                        $('#question2').show();

			                 break;

			                 case 'CDMO / CRO':

			                        $('#question1').hide();

			                          is1stcmdo=true;
									 
			                        $('#question2').show(); 

			                 break;

			                 case 'Others':

			                         $('#question1').hide();

			                          is1stothers=true;
									   
			                        $('#question2').show();

			                 break;

			            }

			        break;

			        case "btn2":
						//var rbnVal=$('input[name="question2"]:checked').val();
			        $('#question2').hide();
					prevForm='question2';
			        $('#question3').show();

			        break;

			        case "btn3":
						
					prevForm='question3';
			        $('#question3').hide();

			        $('#question4').show();

			        break;

			        case "btn4":
						prevForm='question4';
			            var rbnVal=$('input[name="question4"]:checked').val().trim();
			            if(rbnVal=='Yes'){
						$('#question4').hide();
						$('#question5').hide();						 
						$('#question6').show();
			            }
			            else{
			                $('#question4').hide();							 
			                $('#question5').show(); 
			            } 
			        break;

			        case "btn5": 
			             $('#question5').hide();
						 prevForm='question5';
			             $('#question6').show(); 
			        break;

			        case "btn6":
						prevForm='question6';
			            var rbnVal=$('input[name="question6"]:checked').val().trim(); 
			         switch(rbnVal.trim()){
			            case "Non-CGMP certified laboratory": 
                        case "Manufacturing facility": 
                        case "Pilot plant manufacturing facility / CGMP laboratory scale": 
                        case "CGMP Class A": 
                             $('#question6').hide(); 
							$('#question7').hide(); 
							if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){ 
								$('#question8').hide(); $('#question9').hide(); $('#question10').hide(); 
								$('#question11').hide(); $('#question12').show(); 
							}else{
                               if(is1cellgen==true){ 
			                     $('#question8').show(); 
			                    } 
			             	 else if(is1cellgen ==false){ 
			                 $('#question8').hide(); 
			                 $('#question9').show();  
			                 } 
							}
                        break; 
                        case "CGMP Class B": 
                        case "CGMP Class C": 
                        case "CGMP Class D": 
                             $('#question6').hide(); 
                             is1cellgen==false 
                             $('#question7').show(); 
							 
                        break;                       

			         }
			         break;
			        case "btn7":
						prevForm='question7';
			            $('#question7').hide();
						if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){ 
								$('#question8').hide(); $('#question9').hide(); $('#question10').hide(); 
								$('#question11').hide(); $('#question12').show(); 
						}else{
			             if(is1cellgen==true){
			                $('#question8').show();
			             }else{
			                 $('#question8').hide();
			                 $('#question9').show();
			             }
						}
			        break;

			        case "btn8":
						prevForm='question8';
			            $('#question8').hide();

			            $('#question9').hide();

			            $('#question10').hide();

			            $('#question11').hide();

			            $('#question12').show();

			        break;

			        case 'btn9':
						prevForm='question9';
			            $('#question9').hide();

			            $('#question10').show();

			        break;

			        case 'btn10':
						prevForm='question10';
			             var rbnVal=$('input[name="question10[]"]:checked').val().trim();

			            if(rbnVal=='No'){

			               $('#question10').hide();

			               $('#question11').hide();

			               $('#question12').show(); 

			            }

			            else{

			                 $('#question10').hide();

			                 $('#question11').show(); 

			            }

			        break;

			        case 'btn11':
						prevForm='question11';
			             $('#question11').hide();

			             $('#question12').show(); 

			        break;

			        case 'btn12':
						prevForm='question12';
			            var rbnVal=$('input[name="question12"]:checked').val().trim();

			            if(rbnVal=='Yes, at -80°C' || rbnVal=='Yes, at -196°C'){

			               $('#question12').hide();

			               $('#question13').show(); 

			            }

			            else{

			                 $('#question12').hide();

			                  $('#question13').hide();

			                 $('#question14').show(); 

			            }

			        break;

			        case 'btn13':
						prevForm='question13';
			            $('#question13').hide();

			            $('#question14').show(); 

			        break;

			        case 'btn14':
						prevForm='question14';
			            $('#question14').hide();
						if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){
						$('#question15').hide();
			            $('#question16').show();
						}else{
						if(is1cellgen==false){
							$('#question15').show();
						}else{
							$('#question15').hide();
			            $('#question16').show();
					} 
				}
			        break;

			        case 'btn15':
						prevForm='question15';
			         $('#question15').hide();

			         $('#question16').show(); 

			        break;

			        case 'btn16':
						prevForm='question16';
			             var rbnVal=$('input[name="question16[]"]:checked').val().trim();

			         switch(rbnVal){

			            case "Tube welders":							
							$('#question16').hide();
							is16tubes=false;
							is16tubew=true;
							('#question17').show();
						break;
                        case "Tube sealers":
                             $('#question16').hide(); 
                             $('#question20').hide();
                             is16tubes=true;is16tubew=false;
                             $('#question17').show();
                        break;
                        case "Quick connection":
                        case "Gendered aseptic connectors":
                        case "Genderless aseptic connectors":
                        case "Aseptic disconnect":
                        case "Fitting & Luer locks":
                        case "Others":
                             $('#question16').hide();
                             $('#question21').hide();
                             $('#question22').hide();
                             is16tubes=false;is16tubew=false;
                             $('#question17').show();
                        break;
			         }

			        break;

			         case 'btn17':
						prevForm='question17';
			              $('#question17').hide();

                          $('#question18').show();

			         break;

			         case 'btn18':
						prevForm='question18';
			             $('#question18').hide();
                         $('#question19').show();
			         break;

			         case 'btn19':
						prevForm='question19';
			             $('#question19').hide();			           
			            $('#question20').show(); 
			         break;

			         case 'btn20':
						prevForm='question20';
			             $('#question20').hide();
					 if(is16tubew || is16tubes) {$('#question21').show();}
						 else{
							$('#question21').hide();
							
							$('#question23').show();
						 } 
			         break;

			         case 'btn21':
						prevForm='question21';
			             $('#question21').hide();
                        if(is16tubew==true)  $('#question22').show();  
						else{ $('#question22').hide();$('#question23').show(); } 
			         break;

			         case 'btn22':
						prevForm='question22';
			             $('#question22').hide();
			             $('#question23').show();
			         break;

			         case 'btn23':
						prevForm='question23';
			             $('#question23').hide();
			             $('#question24').show();
			         break;

			         case 'btn24':						
						prevForm='question24';
			             $('#question24').hide();
						 if(is16tubew || is16tubes) {$('#question25').show();}
						 else{
							if(is1stbiopr==true){ 
							$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').show();
							}
							else if(is1stcellgenther ==true){
								$('#question25').hide();
							$('#question26').show();
							}else{
								$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').hide();
							$('#question29').show();
							}
						 } 
			         break;


			         case 'btn25':
						prevForm='question25';
			             var rbnVal=$('input[name="question25"]:checked').val();
						 if(is1stbiopr==true){ 
							$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').show();
							}
							else if(is1stcellgenther ==true){
								$('#question25').hide();
							$('#question26').show();
							}else{
								$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').hide();
							$('#question29').show();
							}
			         break;

			          case 'btn26':
						prevForm='question26';
			               $('#question26').hide();

			               $('#question27').show();

			         break;

			          case 'btn27':
						prevForm='question27';
			              $('#question27').hide();

			               $('#question28').hide();

			               $('#question29').show();

			         break;

			         case 'btn28':
						prevForm='question28';
			              var rbnVal=$('input[name="question28"]:checked').val();

			                $('#question28').hide();

			                $('#question29').show();

			         break;

			         case 'btn29':
						prevForm='question29';
			              var rbnVal=$('input[name="question29"]:checked').val();

			                $('#question29').hide();

			                $('#question30').show();

			         break;

			         case 'btn30':
						prevForm='question30';
			              var rbnVal=$('input[name="question30"]:checked').val();

			                $('#question30').hide();

			                $('#question31').show();

			         break;

			          case "btn31":
						prevForm='question31';
						var rbnVal=$('input[name="question30"]:checked').val();
						
						window.setTimeout(function(){
							window.top.location.href = 'https://www.pharmafocusasia.com/promotion/cpc-industry-assessment-success'; 
						});
	
			         break;

			    }

			    

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

			if ($("[name='" + thisPanel + "[]']:checked").length == 0  && $("[name='" + thisPanel + "']:checked").length == 0) {

		

			    alert("A selection is required.");

			    return;

			}

			else {

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

			

			//scrollPanel(next);

			currentPanel++;

			currentQuestion = next;

			var prev = $(this).closest(".panel").data("prev");
			currentPanel--;
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

	   <div id="postFrame" name="postFrame" src="" onload="showResults()" src="" sandbox="allow-top-navigation allow-scripts allow-forms"></div>
	   
		<!-- {{config('app.url')}}zebra/eloqua script -->

		<script src="{{config('app.url')}}zebra/registration.js"></script>

		<script>
			  $(document).ready(function () {
		
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

		});

		</script>

		<script>
			(function (d, b, a, s, e) {

			    var t = b.createElement(a),

			    fs = b.getElementsByTagName(a)[0]; t.async = 1; t.id = e;

			    t.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + s;

			    fs.parentNode.insertBefore(t, fs);

			})(window, document, 'script', 'scripts.demandbase.com/73PwKbIO.min.js', 'demandbase_js_lib');

		</script>
	</body>

</html>