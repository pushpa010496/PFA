<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Lab Safety Practices 2021 Live Webinar</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta property="og:title" content="Lab Safety Practices 2021 Live Webinar" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/thermofisher-lab-safety-practices/thermofisher-lab-safety-practices-2021-og.jpg" />
	<link rel="canonical" href="{{url('thermofisher-lab-safety-practices-2021')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('thermofisher-lab-safety-practices-2021')}}" />
	
	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

	<!--AS per Basco& sudhakar Canonical -->
	<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "Organization",
			"name" : "Pharmafocusasia",
			"url" : "https://www.pharmafocusasia.com/",
			"sameAs" : [
			" https://www.facebook.com/PharmaFocusAsia ",
			" https://twitter.com/pharmafocusasia ",
			" https://plus.google.com/+Pharmafocusasia/about ",
			" https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
			" https://www.tumblr.com/blog/pharmafocusasia "
			]
		}
	</script>

	<!--AS per Basco& sudhakar Schema code -->
	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">  -->
	<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">   -->

	<script src="{{ config('app.url') }}styles/js/jquery-2.1.3.min.js"></script> 

	<style type="text/css">
	.form-bg{
		background-color: #0A71BB;
	}	
	.person-area {
		background: #fff none repeat scroll 0 0;
		border-bottom-left-radius: 10px;
		border-bottom-right-radius: 10px;
		/*padding: 25px;*/
		padding-top: 25px;
		font-size: 15px;
	}
	.audience-title {
		font-size: 26px;
		margin-bottom: 10px;
	}
	.person {
		margin-bottom: 10px;
	  /*padding-left: 18px;
	  padding-right: 18px;
	  text-align: left;*/
	}
	.person-name{
		font-size: 18px;
		line-height: 1.4;
	}

	.gray-text {
		color: #7a7a7a;
		font-size: 14px;
	}
	.TXT-RED {
		color: #F1474E;
	}
	.date-meta {
		font-size: 18px;
		font-weight: 600;
		color: #555;
	}
	.text-white{
		color:#ffffff !important;
	}

	.b-shadow{
		/*box-shadow: 1px 1px 4px 0 rgba(0,0,0,.3);*/
		box-shadow:0 2px 4px 0 rgba(0,0,0,.1);
	}
	input[type="submit"]{
		padding-left: 25px;
		padding-right:25px;
	}

	footer i{
		color: #ee1a3b;
		font-size: 17px;
		border-radius: 5px;
		transition: 500ms;
		background: #f1f1f1;
		margin-right: 5px;
	}
	.fa-facebook{
		padding: 5px 8px;
	}
	.fa-google-plus{
		padding: 5px 3px;
	}
	.fa-linkedin,.fa-twitter{
		padding: 5px 5px; 
	}

	footer i:hover{
		color: #fff;
		transition: 500ms;
		background: #ee1a3b;
	}
	.modal-dialog{
		top:0 !important;
	}
	.video:hover{cursor: pointer;}

	.BG-BLUE{background-color: #1c95ca;}
	.form-control{ font-size: 14px; height: calc(2rem + 2px); border-radius: 0px;}
	.form-group{margin-bottom: 10px;}
	.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
		background-color: #F1474E;
	}
	#state{
		display: none;
	}
	@media only screen and (max-width: 450px) {
		.regdiv{
			display: block !important;
		}
	}
	
</style>

</head>

<body> 
	@if(view()->exists('webinars.banner'))
	@include('webinars.banner')
	@endif
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 col-12 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-8 col-12 my-auto offset-md-4 pt-1 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/thermofisher-scientific/thermofisher-logo.png" alt="Thermo Fisher Scientific" class="ml-2 img-fluid">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<div class="shadow bg-light">
					<img src="{{config('app.url')}}webinars/thermofisher-lab-safety-practices/thermofisher-lab-safety-practices-2021-banner.jpg" alt="Thermo Fisher Scientific Webinar" title="Thermo Fisher Scientific Webinar" class="img-fluid" />
				</div>
			</div>

			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="row">

					<div class="col-lg-8 col-md-8 col-sm-12 col-12 person pt-3">
						<div class="regdiv mb-1" style="display: flex;">
					<h1 class="pt-2 font-weight-bold TXT-RED font-20 d-inline-block">
								Lab Safety Practices 2021</h1>

		                    </div>
							<p>Lab is a place where has a collection of numerous complex workflows. It is imperative that not
								only specimens are protected from contamination, but equally important that lab professionals
								are also protected from potentially infectious and/or biohazardous agents. In this special
								webinar, our team of experts will talk about how to control contamination as well as best
							practices and lab routines for infection prevention.</p>
					<h2 class="font-weight-bold TXT-RED font-18">Event Information</h2>
				<div class="pt-2 pb-4">
				<div class="table-responsive">
              <table class="table table-bordered table-striped">
				  <thead>
				    <tr>
				      <th scope="col">Title</th>
				      <th scope="col">Lab Safety Practices 2021</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <th scope="row">Date</th>
				      <td>Tuesday, 12<sup>th</sup> October 2021</td>
				    </tr>
				    <tr>
				      <th scope="row">Time</th>
				      <td>16:00 (GMT+8)</td>
				    </tr>
				    <tr>
				      <th scope="row">Duration</th>
				      <td>1 hour including live Q&A</td>
				    </tr>
				    <tr>
				      <th scope="row">Highlights</th>
				      <td>Overview of general lab safety practices<br>
Roles in decontamination: cleaning, disinfection, and sterilization<br>
 Recommendations for efficiency improvements
</td>
				    </tr>
				  </tbody>
				</table>
			    
				</div> 
			</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-12 person pt-3">

                    <div class="form-bg p-2 mt-2 mb-2"> 

							<h2 class="text-center mt-1 mb-3 text-white"><b>Register Now</b></h2>	                  

							<form action="{{route('thermofisherlabsafetypractices.post')}}" method="post" id="form-validation">

								@csrf
								<input type="hidden" name="type" value="Thermofisher Lab Safety Practices 2021">	

								<input type="hidden" name="thank_message" value="Your webinar registration was successfully completed.">

								<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="firstname" name="firstname" placeholder="First Name *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>

									<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>



								<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="email" name="email" placeholder="Email *" required="" value="" type="name">

									<span class="help-block"></span>   

								</div>



								<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="company" name="company" placeholder="Company *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>



								<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>



								<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required="" value="" type="text">

									<span class="help-block"></span>   

								</div>



								<div class="col-md-12 mb-2 " align="center">

									<select class="form-control" id="" name="country" placeholder="Country *" required="" value="">

										<option value="">Select Country*</option>
										<option value="Afghanistan">Afghanistan</option>
										<option value="Albania">Albania</option>
										<option value="Algeria">Algeria</option>
										<option value="American Samoa">American Samoa</option>
										<option value="Andorra">Andorra</option>
										<option value="Angola">Angola</option>
										<option value="Anguilla">Anguilla</option>
										<option value="Antarctica">Antarctica</option>
										<option value="Antigua and Barbuda">Antigua and Barbuda</option>
										<option value="Argentina">Argentina</option>
										<option value="Armenia">Armenia</option>
										<option value="Aruba">Aruba</option>
										<option value="Australia">Australia</option>
										<option value="Austria">Austria</option>
										<option value="Azerbaijan">Azerbaijan</option>
										<option value="Bahamas">Bahamas</option>
										<option value="Bahrain">Bahrain</option>
										<option value="Bangladesh">Bangladesh</option>
										<option value="Barbados">Barbados</option>
										<option value="Belarus">Belarus</option>
										<option value="Belgium">Belgium</option>
										<option value="Belize">Belize</option>
										<option value="Benin">Benin</option>
										<option value="Bermuda">Bermuda</option>
										<option value="Bhutan">Bhutan</option>
										<option value="Bolivia">Bolivia</option>
										<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
										<option value="Botswana">Botswana</option>
										<option value="Bouvet Island">Bouvet Island</option>
										<option value="Brazil">Brazil</option>
										<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
										<option value="Brunei Darussalam">Brunei Darussalam</option>
										<option value="Bulgaria">Bulgaria</option>
										<option value="Burkina Faso">Burkina Faso</option>
										<option value="Burundi">Burundi</option>
										<option value="Cambodia">Cambodia</option>
										<option value="Cameroon">Cameroon</option>
										<option value="Canada">Canada</option>
										<option value="Cape Verde">Cape Verde</option>
										<option value="Cayman Islands">Cayman Islands</option>
										<option value="Central African Republic">Central African Republic</option>
										<option value="Chad">Chad</option>
										<option value="Chile">Chile</option>
										<option value="China">China</option>
										<option value="Christmas Island">Christmas Island</option>
										<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
										<option value="Colombia">Colombia</option>
										<option value="Comoros">Comoros</option>
										<option value="Congo">Congo</option>
										<option value="Cook Islands">Cook Islands</option>
										<option value="Costa Rica">Costa Rica</option>
										<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
										<option value="Cuba">Cuba</option>
										<option value="Cyprus">Cyprus</option>
										<option value="Czech Republic">Czech Republic</option>
										<option value="Denmark">Denmark</option>
										<option value="Djibouti">Djibouti</option>
										<option value="Dominica">Dominica</option>
										<option value="Dominican Republic">Dominican Republic</option>
										<option value="East Timor">East Timor</option>
										<option value="Ecuador">Ecuador</option>
										<option value="Egypt">Egypt</option>
										<option value="El Salvador">El Salvador</option>
										<option value="Equatorial Guinea">Equatorial Guinea</option>
										<option value="Eritrea">Eritrea</option>
										<option value="Estonia">Estonia</option>
										<option value="Ethiopia">Ethiopia</option>
										<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
										<option value="Faroe Islands">Faroe Islands</option>
										<option value="Fiji">Fiji</option>
										<option value="Finland">Finland</option>
										<option value="France">France</option>
										<option value="France, Metropolitan">France, Metropolitan</option>
										<option value="French Guiana">French Guiana</option>
										<option value="French Polynesia">French Polynesia</option>
										<option value="French Southern Territories">French Southern Territories</option>
										<option value="Gabon">Gabon</option>
										<option value="Gambia">Gambia</option>
										<option value="Georgia">Georgia</option>
										<option value="Germany">Germany</option>
										<option value="Ghana">Ghana</option>
										<option value="Gibraltar">Gibraltar</option>
										<option value="Guernsey">Guernsey</option>
										<option value="Greece">Greece</option>
										<option value="Greenland">Greenland</option>
										<option value="Grenada">Grenada</option>
										<option value="Guadeloupe">Guadeloupe</option>
										<option value="Guam">Guam</option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guinea">Guinea</option>
										<option value="Guinea-Bissau">Guinea-Bissau</option>
										<option value="Guyana">Guyana</option>
										<option value="Haiti">Haiti</option>
										<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
										<option value="Honduras">Honduras</option>
										<option value="Hong Kong">Hong Kong</option>
										<option value="Hungary">Hungary</option>
										<option value="Iceland">Iceland</option>
										<option value="India">India</option>
										<option value="Isle of Man">Isle of Man</option>
										<option value="Indonesia">Indonesia</option>
										<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
										<option value="Iraq">Iraq</option>
										<option value="Ireland">Ireland</option>
										<option value="Israel">Israel</option>
										<option value="Italy">Italy</option>
										<option value="Ivory Coast">Ivory Coast</option>
										<option value="Jersey">Jersey</option>
										<option value="Jamaica">Jamaica</option>
										<option value="Japan">Japan</option>
										<option value="Jordan">Jordan</option>
										<option value="Kazakhstan">Kazakhstan</option>
										<option value="Kenya">Kenya</option>
										<option value="Kiribati">Kiribati</option>
										<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
										<option value="Korea, Republic of">Korea, Republic of</option>
										<option value="Kosovo">Kosovo</option>
										<option value="Kuwait">Kuwait</option>
										<option value="Kyrgyzstan">Kyrgyzstan</option>
										<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
										<option value="Latvia">Latvia</option>
										<option value="Lebanon">Lebanon</option>
										<option value="Lesotho">Lesotho</option>
										<option value="Liberia">Liberia</option>
										<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
										<option value="Liechtenstein">Liechtenstein</option>
										<option value="Lithuania">Lithuania</option>
										<option value="Luxembourg">Luxembourg</option>
										<option value="Macau">Macau</option>
										<option value="Macedonia">Macedonia</option>
										<option value="Madagascar">Madagascar</option>
										<option value="Malawi">Malawi</option>
										<option value="Malaysia">Malaysia</option>
										<option value="Maldives">Maldives</option>
										<option value="Mali">Mali</option>
										<option value="Malta">Malta</option>
										<option value="Marshall Islands">Marshall Islands</option>
										<option value="Martinique">Martinique</option>
										<option value="Mauritania">Mauritania</option>
										<option value="Mauritius">Mauritius</option>
										<option value="Mayotte">Mayotte</option>
										<option value="Mexico">Mexico</option>
										<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
										<option value="Moldova, Republic of">Moldova, Republic of</option>
										<option value="Monaco">Monaco</option>
										<option value="Mongolia">Mongolia</option>
										<option value="Montenegro">Montenegro</option>
										<option value="Montserrat">Montserrat</option>
										<option value="Morocco">Morocco</option>
										<option value="Mozambique">Mozambique</option>
										<option value="Myanmar">Myanmar</option>
										<option value="Namibia">Namibia</option>
										<option value="Nauru">Nauru</option>
										<option value="Nepal">Nepal</option>
										<option value="Netherlands">Netherlands</option>
										<option value="Netherlands Antilles">Netherlands Antilles</option>
										<option value="New Caledonia">New Caledonia</option>
										<option value="New Zealand">New Zealand</option>
										<option value="Nicaragua">Nicaragua</option>
										<option value="Niger">Niger</option>
										<option value="Nigeria">Nigeria</option>
										<option value="Niue">Niue</option>
										<option value="Norfolk Island">Norfolk Island</option>
										<option value="Northern Mariana Islands">Northern Mariana Islands</option>
										<option value="Norway">Norway</option>
										<option value="Oman">Oman</option>
										<option value="Pakistan">Pakistan</option>
										<option value="Palau">Palau</option>
										<option value="Palestine">Palestine</option>
										<option value="Panama">Panama</option>
										<option value="Papua New Guinea">Papua New Guinea</option>
										<option value="Paraguay">Paraguay</option>
										<option value="Peru">Peru</option>
										<option value="Philippines">Philippines</option>
										<option value="Pitcairn">Pitcairn</option>
										<option value="Poland">Poland</option>
										<option value="Portugal">Portugal</option>
										<option value="Puerto Rico">Puerto Rico</option>
										<option value="Qatar">Qatar</option>
										<option value="Reunion">Reunion</option>
										<option value="Romania">Romania</option>
										<option value="Russian Federation">Russian Federation</option>
										<option value="Rwanda">Rwanda</option>
										<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
										<option value="Saint Lucia">Saint Lucia</option>
										<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
										<option value="Samoa">Samoa</option>
										<option value="San Marino">San Marino</option>
										<option value="Sao Tome and Principe">Sao Tome and Principe</option>
										<option value="Saudi Arabia">Saudi Arabia</option>
										<option value="Senegal">Senegal</option>
										<option value="Serbia">Serbia</option>
										<option value="Seychelles">Seychelles</option>
										<option value="Sierra Leone">Sierra Leone</option>
										<option value="Singapore">Singapore</option>
										<option value="Slovakia">Slovakia</option>
										<option value="Slovenia">Slovenia</option>
										<option value="Solomon Islands">Solomon Islands</option>
										<option value="Somalia">Somalia</option>
										<option value="South Africa">South Africa</option>
										<option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>
										<option value="South Sudan">South Sudan</option>
										<option value="Spain">Spain</option>
										<option value="Sri Lanka">Sri Lanka</option>
										<option value="St. Helena">St. Helena</option>
										<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
										<option value="Sudan">Sudan</option>
										<option value="Suriname">Suriname</option>
										<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
										<option value="Swaziland">Swaziland</option>
										<option value="Sweden">Sweden</option>
										<option value="Switzerland">Switzerland</option>
										<option value="Syrian Arab Republic">Syrian Arab Republic</option>
										<option value="Taiwan">Taiwan</option>
										<option value="Tajikistan">Tajikistan</option>
										<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
										<option value="Thailand">Thailand</option>
										<option value="Togo">Togo</option>
										<option value="Tokelau">Tokelau</option>
										<option value="Tonga">Tonga</option>
										<option value="Trinidad and Tobago">Trinidad and Tobago</option>
										<option value="Tunisia">Tunisia</option>
										<option value="Turkey">Turkey</option>
										<option value="Turkmenistan">Turkmenistan</option>
										<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
										<option value="Tuvalu">Tuvalu</option>
										<option value="Uganda">Uganda</option>
										<option value="Ukraine">Ukraine</option>
										<option value="United Arab Emirates">United Arab Emirates</option>
										<option value="United Kingdom">United Kingdom</option>
										<option value="United States">United States</option>
										<option value="United States minor outlying islands">United States minor outlying islands</option>
										<option value="Uruguay">Uruguay</option>
										<option value="Uzbekistan">Uzbekistan</option>
										<option value="Vanuatu">Vanuatu</option>
										<option value="Vatican City State">Vatican City State</option>
										<option value="Venezuela">Venezuela</option>
										<option value="Vietnam">Vietnam</option>
										<option value="Virgin Islands (British)">Virgin Islands (British)</option>
										<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
										<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
										<option value="Western Sahara">Western Sahara</option>
										<option value="Yemen">Yemen</option>
										<option value="Zaire">Zaire</option>
										<option value="Zambia">Zambia</option>
										<option value="Zimbabwe">Zimbabwe</option>

										    


									</select>

									<span class="help-block"></span>   

								</div>
								
									
								

								<div class="col-md-12">
									<div class="form-group">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
											<label class="custom-control-label text-white small" for="email_updates"> I would like to receive email updates about Thermofisher products, services and events *</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
											<label class="custom-control-label text-white small" for="quotation"> I would like to request a quotation *</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
											<label class="custom-control-label text-white small" for="representative"> Request to talk to Thermofisher representative *

											</label>
										</div>
										<div class="error text-danger verifi"></div>
									</div>
								</div>
								
								

								<div class="col-md-12 mb-2" align="center">

									<button type="submit" name="submit" id="checkBtn" class="btn btn-sm btn-dark pl-4 pr-4">SUBMIT</button>

								</div>



								<div class="col-md-12 mb-2">	    

									<small class="text-white" style="line-height: 110%;">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>

								</div>            

							</form>  

							<div class="clearfix"></div>   

						</div>
					</div>

					</div>
				</div>
				
			</div>
		</div>

	


		
      <div class="container">
      	<div class="row">
      		<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
					<h2 class="font-weight-bold TXT-RED font-18">Meet the speakers</h2>
					<div class="row justify-content-center">
						<div class="col-lg-6 col-md-6 col-sm-8 col-8 person">
							<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-12 pl-4 pr-0 py-2">
										<h2 class="TXT-RED mt-2 mb-2"><strong>Ivy Gong</strong></h2>
										<p class="mb-1">Regional Product Manager<br>Lab Equipment<br>Thermo Fisher Scientific</p>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-12 col-12 person text-center">
										<img src="{{config('app.url')}}webinars/thermofisher-lab-safety-practices/speaker1.jpg" alt="Ivy Gong" title="Ivy Gong" class="img-fluid border mt-2" />
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-8 col-8 person mb-0">
							<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow">
								<div class="row">
									<div class="col-lg-8 col-md-8 col-sm-12 col-12 pl-4 pr-0 py-2">
										<h2 class="TXT-RED mt-2 mb-2"><strong>James Tan</strong></h2>
										<p class="mb-1">Regional Product Manager<br>Water and Lab Products<br>Thermo Fisher Scientific</p>
									</div> 
									<div class="col-lg-4 col-md-4 col-sm-12 col-12 person text-center">
										<img src="{{config('app.url')}}webinars/thermofisher-lab-safety-practices/speaker2.jpg" alt="James Tan" title="James Tan" class="img-fluid border mt-2" />
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
      	</div>
      </div>



      <div class="container">
      	<div class="row">
      		<div class="col-md-12 text-center">
      			<button type="button" class="my-auto btn btn-danger reg-button" data-toggle="modal" data-target="#register" style="margin-left: auto;"><strong>Register Now </strong></button>
		<div id="register" class="modal fade" role="dialog" style="display: none;" aria-hidden="true">

			<div class="modal-dialog model-sm">

				<!-- Modal content-->

				<div class="modal-content">

					<div class="modal-header">		        	

						<h2 class="modal-title text-center font-18 TXT-ORNG"><strong>Register Now</strong>

						</h2>

						<button type="button" class="close" data-dismiss="modal">×</button>

					</div>

					<div class="modal-body"> 

						<form action="{{route('thermofisherlabsafetypractices.post')}}" method="post" id="form-validation1">

							@csrf

							    <input type="hidden" name="type" value="Thermofisher Lab Safety Practices 2021">	

								<input type="hidden" name="thank_message" value="Your webinar registration was successfully completed.">

							<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="firstname" name="firstname" placeholder="First Name *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>

									<div class="col-md-12 mb-2 " align="center">

									<input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" value="" required="" type="text">

									<span class="help-block"></span>   

								</div>



							<div class="col-md-12 mb-3 " align="center">

								<input class="form-control" id="email" name="email" placeholder="Email *" required="" value="" type="name">

								<span class="help-block"></span>   

							</div>



							<div class="col-md-12 mb-3 " align="center">

								<input class="form-control" id="company" name="company" placeholder="Company *" value="" required="" type="text">

								<span class="help-block"></span>   

							</div>



							<div class="col-md-12 mb-3  " align="center">

								<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *" value="" required="" type="text">

								<span class="help-block"></span>   

							</div>



							<div class="col-md-12 mb-3 " align="center">

								<input class="form-control" id="phone" name="phone" placeholder="Phone *" required="" value="" type="text">

								<span class="help-block"></span>   

							</div>



							<div class="col-md-12 mb-3 " align="center">

								<select class="form-control" id="" name="country" placeholder="Country *" required="" value="">

									<option value="">Select Country*</option>

									<option value="Afghanistan">Afghanistan</option>

									<option value="Albania">Albania</option>

									<option value="Algeria">Algeria</option>

									<option value="American Samoa">American Samoa</option>

									<option value="Andorra">Andorra</option>

									<option value="Angola">Angola</option>

									<option value="Anguilla">Anguilla</option>

									<option value="Antarctica">Antarctica</option>

									<option value="Antigua and Barbuda">Antigua and Barbuda</option>

									<option value="Argentina">Argentina</option>

									<option value="Armenia">Armenia</option>

									<option value="Aruba">Aruba</option>

									<option value="Australia">Australia</option>

									<option value="Austria">Austria</option>

									<option value="Azerbaijan">Azerbaijan</option>

									<option value="Bahamas">Bahamas</option>

									<option value="Bahrain">Bahrain</option>

									<option value="Bangladesh">Bangladesh</option>

									<option value="Barbados">Barbados</option>

									<option value="Belarus">Belarus</option>

									<option value="Belgium">Belgium</option>

									<option value="Belize">Belize</option>

									<option value="Benin">Benin</option>

									<option value="Bermuda">Bermuda</option>

									<option value="Bhutan">Bhutan</option>

									<option value="Bolivia">Bolivia</option>

									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>

									<option value="Botswana">Botswana</option>

									<option value="Bouvet Island">Bouvet Island</option>

									<option value="Brazil">Brazil</option>

									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>

									<option value="Brunei Darussalam">Brunei Darussalam</option>

									<option value="Bulgaria">Bulgaria</option>

									<option value="Burkina Faso">Burkina Faso</option>

									<option value="Burundi">Burundi</option>

									<option value="Cambodia">Cambodia</option>

									<option value="Cameroon">Cameroon</option>

									<option value="Canada">Canada</option>

									<option value="Cape Verde">Cape Verde</option>

									<option value="Cayman Islands">Cayman Islands</option>

									<option value="Central African Republic">Central African Republic</option>

									<option value="Chad">Chad</option>

									<option value="Chile">Chile</option>

									<option value="China">China</option>

									<option value="Christmas Island">Christmas Island</option>

									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>

									<option value="Colombia">Colombia</option>

									<option value="Comoros">Comoros</option>

									<option value="Congo">Congo</option>

									<option value="Cook Islands">Cook Islands</option>

									<option value="Costa Rica">Costa Rica</option>

									<option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>

									<option value="Cuba">Cuba</option>

									<option value="Cyprus">Cyprus</option>

									<option value="Czech Republic">Czech Republic</option>

									<option value="Denmark">Denmark</option>

									<option value="Djibouti">Djibouti</option>

									<option value="Dominica">Dominica</option>

									<option value="Dominican Republic">Dominican Republic</option>

									<option value="East Timor">East Timor</option>

									<option value="Ecuador">Ecuador</option>

									<option value="Egypt">Egypt</option>

									<option value="El Salvador">El Salvador</option>

									<option value="Equatorial Guinea">Equatorial Guinea</option>

									<option value="Eritrea">Eritrea</option>

									<option value="Estonia">Estonia</option>

									<option value="Ethiopia">Ethiopia</option>

									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>

									<option value="Faroe Islands">Faroe Islands</option>

									<option value="Fiji">Fiji</option>

									<option value="Finland">Finland</option>

									<option value="France">France</option>

									<option value="France, Metropolitan">France, Metropolitan</option>

									<option value="French Guiana">French Guiana</option>

									<option value="French Polynesia">French Polynesia</option>

									<option value="French Southern Territories">French Southern Territories</option>

									<option value="Gabon">Gabon</option>

									<option value="Gambia">Gambia</option>

									<option value="Georgia">Georgia</option>

									<option value="Germany">Germany</option>

									<option value="Ghana">Ghana</option>

									<option value="Gibraltar">Gibraltar</option>

									<option value="Guernsey">Guernsey</option>

									<option value="Greece">Greece</option>

									<option value="Greenland">Greenland</option>

									<option value="Grenada">Grenada</option>

									<option value="Guadeloupe">Guadeloupe</option>

									<option value="Guam">Guam</option>

									<option value="Guatemala">Guatemala</option>

									<option value="Guinea">Guinea</option>

									<option value="Guinea-Bissau">Guinea-Bissau</option>

									<option value="Guyana">Guyana</option>

									<option value="Haiti">Haiti</option>

									<option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>

									<option value="Honduras">Honduras</option>

									<option value="Hong Kong">Hong Kong</option>

									<option value="Hungary">Hungary</option>

									<option value="Iceland">Iceland</option>

									<option value="India">India</option>

									<option value="Isle of Man">Isle of Man</option>

									<option value="Indonesia">Indonesia</option>

									<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>

									<option value="Iraq">Iraq</option>

									<option value="Ireland">Ireland</option>

									<option value="Israel">Israel</option>

									<option value="Italy">Italy</option>

									<option value="Ivory Coast">Ivory Coast</option>

									<option value="Jersey">Jersey</option>

									<option value="Jamaica">Jamaica</option>

									<option value="Japan">Japan</option>

									<option value="Jordan">Jordan</option>

									<option value="Kazakhstan">Kazakhstan</option>

									<option value="Kenya">Kenya</option>

									<option value="Kiribati">Kiribati</option>

									<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>

									<option value="Korea, Republic of">Korea, Republic of</option>

									<option value="Kosovo">Kosovo</option>

									<option value="Kuwait">Kuwait</option>

									<option value="Kyrgyzstan">Kyrgyzstan</option>

									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>

									<option value="Latvia">Latvia</option>

									<option value="Lebanon">Lebanon</option>

									<option value="Lesotho">Lesotho</option>

									<option value="Liberia">Liberia</option>

									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>

									<option value="Liechtenstein">Liechtenstein</option>

									<option value="Lithuania">Lithuania</option>

									<option value="Luxembourg">Luxembourg</option>

									<option value="Macau">Macau</option>

									<option value="Macedonia">Macedonia</option>

									<option value="Madagascar">Madagascar</option>

									<option value="Malawi">Malawi</option>

									<option value="Malaysia">Malaysia</option>

									<option value="Maldives">Maldives</option>

									<option value="Mali">Mali</option>

									<option value="Malta">Malta</option>

									<option value="Marshall Islands">Marshall Islands</option>

									<option value="Martinique">Martinique</option>

									<option value="Mauritania">Mauritania</option>

									<option value="Mauritius">Mauritius</option>

									<option value="Mayotte">Mayotte</option>

									<option value="Mexico">Mexico</option>

									<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>

									<option value="Moldova, Republic of">Moldova, Republic of</option>

									<option value="Monaco">Monaco</option>

									<option value="Mongolia">Mongolia</option>

									<option value="Montenegro">Montenegro</option>

									<option value="Montserrat">Montserrat</option>

									<option value="Morocco">Morocco</option>

									<option value="Mozambique">Mozambique</option>

									<option value="Myanmar">Myanmar</option>

									<option value="Namibia">Namibia</option>

									<option value="Nauru">Nauru</option>

									<option value="Nepal">Nepal</option>

									<option value="Netherlands">Netherlands</option>

									<option value="Netherlands Antilles">Netherlands Antilles</option>

									<option value="New Caledonia">New Caledonia</option>

									<option value="New Zealand">New Zealand</option>

									<option value="Nicaragua">Nicaragua</option>

									<option value="Niger">Niger</option>

									<option value="Nigeria">Nigeria</option>

									<option value="Niue">Niue</option>

									<option value="Norfolk Island">Norfolk Island</option>

									<option value="Northern Mariana Islands">Northern Mariana Islands</option>

									<option value="Norway">Norway</option>

									<option value="Oman">Oman</option>

									<option value="Pakistan">Pakistan</option>

									<option value="Palau">Palau</option>

									<option value="Palestine">Palestine</option>

									<option value="Panama">Panama</option>

									<option value="Papua New Guinea">Papua New Guinea</option>

									<option value="Paraguay">Paraguay</option>

									<option value="Peru">Peru</option>

									<option value="Philippines">Philippines</option>

									<option value="Pitcairn">Pitcairn</option>

									<option value="Poland">Poland</option>

									<option value="Portugal">Portugal</option>

									<option value="Puerto Rico">Puerto Rico</option>

									<option value="Qatar">Qatar</option>

									<option value="Reunion">Reunion</option>

									<option value="Romania">Romania</option>

									<option value="Russian Federation">Russian Federation</option>

									<option value="Rwanda">Rwanda</option>

									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>

									<option value="Saint Lucia">Saint Lucia</option>

									<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>

									<option value="Samoa">Samoa</option>

									<option value="San Marino">San Marino</option>

									<option value="Sao Tome and Principe">Sao Tome and Principe</option>

									<option value="Saudi Arabia">Saudi Arabia</option>

									<option value="Senegal">Senegal</option>

									<option value="Serbia">Serbia</option>

									<option value="Seychelles">Seychelles</option>

									<option value="Sierra Leone">Sierra Leone</option>

									<option value="Singapore">Singapore</option>

									<option value="Slovakia">Slovakia</option>

									<option value="Slovenia">Slovenia</option>

									<option value="Solomon Islands">Solomon Islands</option>

									<option value="Somalia">Somalia</option>

									<option value="South Africa">South Africa</option>

									<option value="South Georgia South Sandwich Islands">South Georgia South Sandwich Islands</option>

									<option value="South Sudan">South Sudan</option>

									<option value="Spain">Spain</option>

									<option value="Sri Lanka">Sri Lanka</option>

									<option value="St. Helena">St. Helena</option>

									<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>

									<option value="Sudan">Sudan</option>

									<option value="Suriname">Suriname</option>

									<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>

									<option value="Swaziland">Swaziland</option>

									<option value="Sweden">Sweden</option>

									<option value="Switzerland">Switzerland</option>

									<option value="Syrian Arab Republic">Syrian Arab Republic</option>

									<option value="Taiwan">Taiwan</option>

									<option value="Tajikistan">Tajikistan</option>

									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>

									<option value="Thailand">Thailand</option>

									<option value="Togo">Togo</option>

									<option value="Tokelau">Tokelau</option>

									<option value="Tonga">Tonga</option>

									<option value="Trinidad and Tobago">Trinidad and Tobago</option>

									<option value="Tunisia">Tunisia</option>

									<option value="Turkey">Turkey</option>

									<option value="Turkmenistan">Turkmenistan</option>

									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>

									<option value="Tuvalu">Tuvalu</option>

									<option value="Uganda">Uganda</option>

									<option value="Ukraine">Ukraine</option>

									<option value="United Arab Emirates">United Arab Emirates</option>

									<option value="United Kingdom">United Kingdom</option>

									<option value="United States">United States</option>

									<option value="United States minor outlying islands">United States minor outlying islands</option>

									<option value="Uruguay">Uruguay</option>

									<option value="Uzbekistan">Uzbekistan</option>

									<option value="Vanuatu">Vanuatu</option>

									<option value="Vatican City State">Vatican City State</option>

									<option value="Venezuela">Venezuela</option>

									<option value="Vietnam">Vietnam</option>

									<option value="Virgin Islands (British)">Virgin Islands (British)</option>

									<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>

									<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>

									<option value="Western Sahara">Western Sahara</option>

									<option value="Yemen">Yemen</option>

									<option value="Zaire">Zaire</option>

									<option value="Zambia">Zambia</option>

									<option value="Zimbabwe">Zimbabwe</option>

									    

								</select>

								<span class="help-block"></span>   

							</div>
							
						
								

							<div class="col-md-12 text-left">
									
							 <div class="form-group">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates1">
											<label class="custom-control-label small text-dark" for="email_updates1">I would like to receive email updates about Thermofisher products, services and events *</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation1">
											<label class="custom-control-label small text-dark" for="quotation1"> I would like to request a quotation *</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative1">
											<label class="custom-control-label small text-dark" for="representative1">Request to talk to Thermofisher representative *

											</label>
										</div>
										<div class="error text-danger verifi1"></div>
									</div> 
								</div>



							<div class="col-md-12 mb-2" align="center">

								<button type="submit" name="submit" id="checkBtn1" class="btn btn btn-danger pl-4 pr-4">SUBMIT</button>

							</div>



							<div class="col-md-12 text-left">	    

								<small>**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>

							</div>            

						</form> 

						<div class="clearfix"></div>

					</div>

				</div>

			</div>

		</div>
      		</div>
      	</div>
      </div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-12">	          		
						<p>&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
					</div>

					<div class="col-md-5 col-12 pb-2">	   
						<!-- // FOOTER-SOCIAL MEDIA -->
						<div class="ft-right">  
							<a href="https://www.linkedin.com/company/pharmafocusasia-magazine" target="_blank">
								<i class="fa fa-linkedin"></i>
							</a>
						<!-- <a href="https://plus.google.com/+Pharmafocusasia/about" target="_blank">
							<i class="fa fa-google-plus"></i>
						</a> -->
						<a href="https://twitter.com/pharmafocusasia" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</div>                                  
					<!-- FOOTER-SOCIAL MEDIA // --> 
				</div>
			</div>   
		</div>
	</footer>




	<!-- main container --> 

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->


	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-green">Registration successful...</h2>
				</div>
				<div class="modal-body">
					<p>{!! session('thank_message') !!}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('thermofisher-lab-safety-practices-2021')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 


	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>
	<script type="text/javascript">
		@if(session('thank_message'))	
		$('#myModal').modal('show');
		@endif	  	
	</script>
<script type="text/javascript">
	$(document).ready(function () {
	    $('#checkBtn').click(function() {
	    	var form = $('#form-validation');
	        checked = $("input[type=checkbox]:checked").length;
		      if(checked==0) {
		      	form.find('.verifi').html("You must check at least one checkbox.");
		        return false;
		      }else{
		      	form.find('.verifi').html("");
		      	return true;
		      }
	    });
    });
</script>

<script type="text/javascript">
	$(document).ready(function () {
	    $('#checkBtn1').click(function() {
	    	var form = $('#form-validation1');
	        checked1 = $("input[type=checkbox]:checked").length;
		      if(checked1==0) {
		      	form.find('.verifi1').html("You must check at least one checkbox.");
		        return false;
		      }else{
		      	form.find('.verifi1').html("");
		      	return true;
		      }
	    });
    });
</script>

</body>

</html>

