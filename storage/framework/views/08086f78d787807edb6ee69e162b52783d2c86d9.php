<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" /> 
	<title>How electrode design correlates with optimum
performance in pH measurement</title>

	<meta name="viewport" content="width=device-width" />

	<meta name="robots" content="noindex" />

	<meta name="title" content="thermofischer" />
	<meta name="description" content="This white paper explores how unique design features and iodide/triiodide ion pair reference chemistry help Thermo ScientificTM OrionTM ROSSTM pH electrodes deliver fast, stable, and accurate measurements." />
	<meta name="keywords" content="" />

	<meta property="og:title" content="thermofischer"/>
	<meta property="og:description" content="This white paper explores how unique design features and iodide/triiodide ion pair reference chemistry help Thermo ScientificTM OrionTM ROSSTM pH electrodes deliver fast, stable, and accurate measurements." />
	<meta property="og:Keywords" content=""/>
	<meta property="og:image" content="<?php echo e(config('app.url')); ?>images/tf-banner-ross-electrodes-og.jpg">
	<link rel="canonical" href="transfer-strategies-for-pharmaceutical-product"/>

	<link rel="icon" href="https://promotions.pharmafocusasia.com/public/favicon.ico" type="image/x-icon">

	<link href="https://promotions.pharmafocusasia.com/public/styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="https://promotions.pharmafocusasia.com/public/styles/css/pfstyles.min.css" rel="stylesheet" type="text/css" />
	<link href="https://promotions.pharmafocusasia.com/public/styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<script src="https://promotions.pharmafocusasia.com/public/styles/js/jquery-2.1.3.min.js"></script> 

	<style type="text/css">
		.banner-bg-L{
			background-image: url("https://promotions.pharmafocusasia.com/public/images/flatpages/cantel-pharma3-banner-1.jpg");
			background-repeat: no-repeat;
		}
		.banner-bg{
			background-color: #0d2120;
		}

		.form-bg {
			background-color: #003478;
			background-repeat: repeat-x;
			background-image: linear-gradient(135deg,#0088ce,#003478);
			padding: 20px !important;
			-webkit-box-shadow: 0 2px 20px 2px rgba(0,0,0,0.3);
			box-shadow: 0 2px 20px 2px rgba(0,0,0,0.3);
		}
		.form-control {
			width: 100%;
			height: 30px;
			padding: 6px 12px;
			color: #fff;
			background-color: transparent;
			border: 1px solid #fff;
		}
		.form-control option{color: #222222 !important;}
		.form-control::placeholder{color: #fff;}

		.modal{background: rgba(0, 0, 0, 0.7); }
		.modal-dialog{ top: 0 !important; }
		button.close{position: absolute;right: 5px;color: #fff;opacity: 1;}
		button.model-close { position: absolute; top: 16px; right: 16px;opacity: 1;}
		.modal-backdrop.in{opacity: 0.9;}


		p{font-size: 16px;line-height: 140%;}		
		ul{margin-left: -25px;}
		li{color: #222;margin-bottom: 5px; font-size: 15px;}

		.PF-MB0{margin-bottom: 0px;}
		.PF-P20{padding:15px 20px !important;}
		.PF-PL30{padding-left: 30px;}
		.PF-PR30{padding-right: 30px;}
		.PF-P0{padding: 0;}

		.font-24{font-size: 24px;line-height: 140%;}
		.font-20{font-size: 20px;line-height: 150%;}
		.font-18{font-size: 18px;line-height: 140%;}
		.font-16{font-size: 16px;line-height: 130%;}
		.font-bold{font-weight: bold;}

		.box-shadow{
			-webkit-box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.2);
			box-shadow: 2px 2px 8px 1px rgba(0,0,0,0.2);
		}

		.btn-radius{border-radius: 30px;}

		.txt-wyt{color: #fff;}
		.txt-orng{color: #F04E23;}
		.TXT-blue{color: #2e77bd;}

		.gray-bg{background-color:#555;}
		.bg-dark{background-color: #333;}
		.BG-blue{background-color: #2e77bd;}
		.BG-orng{background-color: #bc5820;}
		.BG-gray{background-color: #f1f1f1;}

		
		.img-responsive{max-width: 100%;height: auto;}
		.has-error .help-block{
			color: #fff;
		}
		.has-error .form-control {
			border-color: #e0a9a7;
		}

		.palette.classic {
			background-color: #003478;
			background-repeat: repeat-x;
			background-image: linear-gradient(135deg,#0088ce,#003478);
		}
		.palette.eternity {
			background-color: #ff5800;
			background-repeat: repeat-x;
			background-image: linear-gradient(135deg,#ed2939,#ff5800);
		}
		.palette.chiral {
			background-color: #6639b7;
			background-repeat: repeat-x;
			background-image: linear-gradient(135deg,#a70240,#6639b7);
		}
		.palette.sfc {
			background-color: #7ab800;
			background-repeat: repeat-x;
			background-image: linear-gradient(135deg,#7ab800,#5b6334);
		}

		.palette header {
			background: transparent url("https://promotions.pharmafocusasia.com/public/images/flatpages/dogear-edge.gif") right top no-repeat;
		}
		.content h2:first-child {
			margin-top: 0;
		}
		.palette h2 {
			font-family: sep-medium,Arial,Helvetica,sans-serif;
			font-weight: 400;
			font-size: 1.6em;
			padding-top: .6em;
			padding-bottom: .1em;
			padding-left: .8em;
		}
		#palettes_medium .body{padding: 1.1em;min-height: 25.6em;}

		.palette.classic h2, .palette.eternity h2, .palette.chiral h2, .palette.sfc h2 {color: #fff;font-weight: 400;}
		.palette.classic p, .palette.eternity p, .palette.chiral p, .palette.sfc p {color: #fff;font-size: 15px;padding-bottom: 10px;}
		.palette.classic ul li, .palette.eternity ul li, .palette.chiral ul li, .palette.sfc ul li {color: #fff;font-size: 15px;}

		/* Extra Small Devices, Phones */ 
		@media  only screen and (max-width : 480px) {
			#palettes_medium .body{min-height: 19em;}
		}

		/* Small Devices, Tablets */
		@media (min-width: 481px) and (max-width: 991px) {
			#palettes_medium .body{min-height: 21em;}
		}

		/* Medium Devices, Desktops */
		@media  only screen and (min-width : 992px) {
			#palettes_medium .body{min-height: 28em;}
		}

		/* Large Devices, Wide Screens */
		@media  only screen and (min-width : 1200px) {
			#palettes_medium .body{min-height: 25.6em;}
		}
	</style>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<img src="https://promotions.pharmafocusasia.com/public/styles/images/logo.png" alt="Pharma Focus Asia" class="img-responsive PF-PTB10" title="thermofischer" width="180" />
				</div>

				<div class="col-md-6 col-xs-6" align="right">
					<img src="https://industry.pharmafocusasia.com/webinars/thermofisher/thermofisher-logo.png" alt="thermofischer" title="thermofischer" class="img-responsive PF-PTB10" />
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-12 PF-PL0 PF-PR0">
				<img src="<?php echo e(config('app.url')); ?>images/tf-banner-ross-electrodes.jpg" alt="thermofischer" title="How electrode design correlates with optimum
performance in pH measurement" class="img-responsive" />
			</div>
		</div>	
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-8 col-xs-12 PF-PT10">	
				<h1 class="font-20 font-bold PF-MT20 TXT-blue">Abstract</h1>	
				<p>This white paper explores how unique design features
and iodide/triiodide ion pair reference chemistry help
Thermo ScientificTM OrionTM ROSSTM pH electrodes deliver
fast, stable, and accurate measurements.</p>	
				<h2 class="TXT-blue font-20 font-bold">When pH measurement performance counts</h2>
				<p>A pH measurement, along with temperature and weight,
is one of the most common measurements performed in
laboratories. Reliable and accurate pH measurement is
critical for ensuring the quality and safety of drinking water,
as well as most pharmaceutical, personal care, and food
products. Many industrial processes, such as chemical
production, petrochemical production, and wastewater
treatment, require constant pH monitoring to help control
the process and ensure a quality product.</p>
				<h2 class="TXT-blue font-20 font-bold">What is covered in this  whitepaper</h2>
				<ul>
					<li> The distinctive orange coil is highly visible in the glass  body version of ROSS electrodes. It not only gives ROSS  electrodes their distinctive look, but is also a feature  designed to increase electrode lifetime</li>
					<li>The triodide/iodide system inside the coil provides a chemically stable house for the redox system and protects the electrode from contamination. The first ROSS electrodes were housed in a straight stem, but the product creators were not satisfied with the limitations of this design.</li>
				</ul>			
			</div>
			<div class="col-md-4 col-xs-12 PF-PTB10" style="margin-top: 2rem">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-bg PF-P20"> 
						<h2 class="text-center PF-MT0 PF-TXTWYT"><b>Download a Free White Paper</b></h2>
						<form action="<?php echo e(route('transferStrategies.post')); ?>" method="post">
							<?php echo csrf_field(); ?>
							<input type="hidden" name="formtype" value="normal-form">
							<input type="hidden" name="type" value="Thermo Fisher ROSSTM pH electrodes">	
							<input type="hidden" name="client_subject" value="Registration for Thermo Fisher ROSSTM pH electrodes.">	
							<input type="hidden" name="admin_subject" value="Registration for Thermo Fisher ROSSTM pH electrodes.">	
							<input type="hidden" name="client_message" value="Thank you for showing interest in our product ROSSTM pH electrodes. Please find the pdf download.">	
							<input type="hidden" name="site_name" value="PharmaFocusAsia">	
							<input type="hidden" name="thank_message" value="Thank you for showing your interest in ROSSTM pH electrodes. Happy Surfing.">
                              
                              <div class="form-group ">
							<input type="text" class="form-control" name="first_name" id="name" placeholder="First Name*" value="" required>
							<span class="help-block"></span>   
						</div>

							<div class="form-group ">
								<input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name*" value="" required>
								<span class="help-block"></span>   
							</div>

							<div class="form-group ">
								<input type="email" class="form-control" name="email" id="email" placeholder="Email*" value="" required>
								<span class="help-block"></span>   
							</div>

							<div class="form-group ">
								<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="" required>
								<span class="help-block"></span>   
							</div>

							<div class="form-group ">
								<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="" required>
								<span class="help-block"></span>   
							</div>

							<div class="form-group ">
								<input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" value="" required>
								<span class="help-block"></span>   
							</div>

							<div class="form-group">
								<select class="form-control" required="" name="country" >
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
            						<option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option> 
            						<option value="Korea, Republic of">Korea, Republic of</option> 
            						<option value="Kosovo">Kosovo</option> 
            						<option value="Kuwait">Kuwait</option> 
            						<option value="Kyrgyzstan">Kyrgyzstan</option> 
            						<option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option> 
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
            						<option value="No_country">No_country</option> 
								</select>
								<span class="help-block"></span>   
							</div>
							
							<div class="form-group ">
								<input type="text" class="form-control" name="city" id="city" placeholder="City*" value="" required>
								<span class="help-block"></span>   
							</div>

							 <div class="form-group">
								<textarea class="form-control" name="address" rows="2" placeholder="Address*" required></textarea>
							</div>

							<div class="form-group PF-MB5" align="center">
								<button type="submit" name="submit" class="btn btn-default btn-block">Download Now</button>
							</div>

							<div class="form-group PF-MB0" align="left">
								<small class="PF-TXTWYT">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
							</div>
						</form>
						<div class="clearfix"></div>   
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 2rem">
		<div class="row">
			<div class="col-sm-6 mx-auto">
				<img style="width: 100%" src="<?php echo e(config('app.url')); ?>images/tf-ross-electrode-2.jpg" alt="thermofischer" title="ross-electrode-1" class="img-responsive" />
			</div>
			<div class="col-sm-6 mx-auto">
				<img style="width: 100%" src="<?php echo e(config('app.url')); ?>images/tf-ross-electrode-1.jpg" alt="thermofischer" title="ross-electrode-2" class="img-responsive" />
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center mx-auto">
				<button type="button" class="btn btn-danger font-20 font-weight-bold" data-toggle="modal" data-target="#register">Download Now </button>
			</div>
		</div>
	</div>

<!-- Model Form -->

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content form-bg">
      <div class="modal-header">
        <h5 class="modal-title text-center font-18" id="exampleModalLabel" style="color: #fff;"><strong>Download a Free White Papers </strong></h5>
        <button type="button" class="close model-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="text-danger">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	    <form action="<?php echo e(route('transferStrategies.post')); ?>" method="post">
				<?php echo csrf_field(); ?>
				<input type="hidden" name="formtype" value="normal-form">
				<input type="hidden" name="type" value="Thermo Fisher ROSSTM pH electrodes">	
				<input type="hidden" name="client_subject" value="Registration for Thermo Fisher ROSSTM pH electrodes.">	
				<input type="hidden" name="admin_subject" value="Registration for Thermo Fisher ROSSTM pH electrodes.">	
				<input type="hidden" name="client_message" value="Thank you for showing interest in our product ROSSTM pH electrodes. Please find the pdf download.">	
				<input type="hidden" name="site_name" value="PharmaFocusAsia">	
				<input type="hidden" name="thank_message" value="Thank you for showing your interest in ROSSTM pH electrodes. Happy Surfing.">
                  
                  <div class="form-group ">
				<input type="text" class="form-control" name="first_name" id="name" placeholder="First Name*" value="" required>
				<span class="help-block"></span>   
			 </div>

				<div class="form-group ">
					<input type="text" class="form-control" name="last_name" id="name" placeholder="Last Name*" value="" required>
					<span class="help-block"></span>   
				</div>

				<div class="form-group ">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email*" value="" required>
					<span class="help-block"></span>   
				</div>

				<div class="form-group ">
					<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="" required>
					<span class="help-block"></span>   
				</div>

				<div class="form-group ">
					<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="" required>
					<span class="help-block"></span>   
				</div>

				<div class="form-group ">
					<input type="text" class="form-control" name="phone" id="phone" placeholder="Telephone*" value="" required>
					<span class="help-block"></span>   
				</div>

				<div class="form-group ">
					<select class="form-control" required="" name="country" >
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
						<option value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option> 
						<option value="Korea, Republic of">Korea, Republic of</option> 
						<option value="Kosovo">Kosovo</option> 
						<option value="Kuwait">Kuwait</option> 
						<option value="Kyrgyzstan">Kyrgyzstan</option> 
						<option value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option> 
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
						<option value="No_country">No_country</option> 
					</select>
					<span class="help-block"></span>   
				</div>
				
				<div class="form-group ">
					<input type="text" class="form-control" name="city" id="city" placeholder="City*" value="" required>
					<span class="help-block"></span>   
				</div>

				 <div class="form-group">
					<textarea class="form-control" name="address" rows="2" placeholder="Address*" required></textarea>
				</div>

			
				<div class="form-group PF-MB5" align="center">
					<button type="submit" name="submit" class="btn btn-default btn-block">Download Now</button>
				</div>

				<div class="form-group PF-MB0" align="left">
					<small class="PF-TXTWYT">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
				</div>
		 </form>
      </div>
    </div>
  </div>
</div>


	<div class="PF-PTB20"></div>
	<div class="container-fluid bg-dark footer">
		<div class="container PF-PTB20 text-center PF-TXTWYT">
			<p><i class="fa fa-globe PF-PR10" aria-hidden="true"></i> www.pharmafocusasia.com - Powered by Ochre Media Pvt. Ltd.</p>
			<p class="PF-MB0"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com</p>
		</div>
	</div>

	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title TXT-blue"> Thank you...!</h2>
				</div>
				<div class="modal-body">
					<p><?php echo e(session('thank_message')); ?></p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="<?php echo e(url('promotion/transfer-strategies-for-pharmaceutical-product')); ?>" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 
		<script src="https://promotions.pharmafocusasia.com/public/styles/js/bootstrap.min.js"></script> 
		<script src="https://promotions.pharmafocusasia.com/public/styles/js/pf-scripts.js"></script> 			  	
  </script>
</script>
<script type="text/javascript">
	<?php if(Session('thank_message')): ?>	
	$('#myModal').modal('show');
	<?php endif; ?>	
</script>
</body>

</html>
<?php /**PATH /home/pharmafocusasia/public_html/resources/views/flatpages/transfer-strategies-for-pharmaceutical-product.blade.php ENDPATH**/ ?>