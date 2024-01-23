<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>YOKOGAWA | Integration of Soft-sensor Technologies</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:title" content="YOKOGAWA | Integration of Soft-sensor Technologies" />
	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/yokogawa/yokogawa-og.jpg" />

	<link rel="canonical" href="{{url('yokogawa-webinar')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('yokogawa-webinar')}}" />
	
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
		body {font-size: 16px;}
		.person-area {
			background: #fff none repeat scroll 0 0;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding-top: 25px;
			font-size: 15px;
		}
		.audience-title {
			font-size: 26px;
			margin-bottom: 10px;
		}
		.person {
			margin-bottom: 10px;
		}
		.person-name{
			font-size: 20px;
		}

		.gray-text {
			color: #7a7a7a;
			font-size: 14px;
		}
		.TXT-BLUE {
			color: #004F9B;
		}
		.BG-BLUE{background-color: #004F9B;}

		.date-meta {
			font-size: 18px;
			font-weight: 600;
			color: #555;
		}
		.text-white{
			color:#ffffff !important;
		}

		.b-shadow{
			box-shadow:0 2px 4px 0 rgba(0,0,0,.1);
		}
		input[type="submit"]{
			padding-left: 25px;
			padding-right:25px;
		}

		footer i{
			color: #f04e23;
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
			background: #f04e23;
		}
		.modal-dialog{
			top:0 !important;
		}
		.video:hover{cursor: pointer;}

		.form-control{ font-size: 14px; height: calc(2rem + 2px);}
		.btn-warning {
			color: #fff;
			background-color: #FCF200;
			border-color: #FCF200;
		}
		.form-group{margin-bottom: 10px;}
		.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #FCF200;
		}
		#state{
			display: none;
		}
		.font-16 { font-size: 16px; line-height: 1.2 !important; }
		.font-18 { font-size: 18px; line-height: 1.3 !important; }
		.font-20 { font-size: 20px; line-height: 1.3 !important; }
		.text-green{
			color:#23f346;
		}
	</style>

</head>

<body> 
@if(view()->exists('webinars.banner'))
       @include('webinars.banner')
     @endif
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-8 my-auto offset-md-4 pt-2 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/yokogawa/yokogawa-logo.jpg" alt="YOKOGAWA" class="ml-2 img-fluid">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/yokogawa/yokogawa-banner.jpg" alt="YOKOGAWA" title="YOKOGAWA" class="img-fluid shadow" />
			</div>

			<div class="col-lg-3 col-md-3 col-sm-12 col-12 person pt-3">
				<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow" align="center">
					<h2 class="pt-2 TXT-BLUE font-20 font-weight-bold">24<sup>th</sup> November 2020</h2>
					<p class="small mb-2"><strong>(Tuesday)</strong></p>
					<p class="mb-1 mt-1">11:30 AM (India)</p>
					<p class="mb-1 mt-1">02:00 PM (SGT)</p>
					<p class="mt-1">03:00 PM (Japan)</p>

					<img src="{{config('app.url')}}webinars/yokogawa/paul-cizdziel.jpg" alt="Paul E. Cizdziel" title="Paul E. Cizdziel" class="img-fluid rounded-circle border" />
					<div class="pt-2">
						<p class="person-name PF-TXTRED mb-1">Paul E. Cizdziel</p>
						<p class="gray-text mb-1"><em>Global Market Development, Life Innovation Business Headquarters</em></p>
						<p class="small">Yokogawa Electric Corporation</p>
					</div>                   
				</div> 

				<div class="col-md-12 pt-4 pb-4 text-center">
					<a href="https://add.eventable.com/events/5d0486d9da647d007d0101e4/5f7f0cd56597b000181b7d8e/" data-event="5f7f0cd56597b000181b7d8e" class="eventable-link" target="_blank" data-key="5d0486d9da647d007d0101e4" data-style="1">Add to Calendar</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://plugins.eventable.com/eventable.js";fjs.parentNode.insertBefore(js, fjs);}}(document, "script", "eventable-script");</script>
				</div>          
				<div class="clearfix"></div>
			</div>
             <div class="col-lg-9 col-md-9 col-sm-12 col-12 person pt-3">
             	<div class="row">
             		
             	
      		<div class="col-lg-6 col-md-6 col-sm-12 col-12 person pt-3">
				<h2 class="font-weight-bold PF-TXTRED font-18">Integration of soft-sensor technologies with CHO-cell predictive models for improved bioreactor automation and process control.</h2> 

      			<p class="mb-1">Fed-batch mammalian cell culture in stirred-tank bioreactors for cell and biologic production is a standard bioprocess application.  Probes and control systems are frequently used for monitoring and automating adjustments of parameters such as pH, gases and temperature.  Although effective at stabilizing a healthy physical growth environment, sampling and off-line assays are still often required to monitor growth phase and media depletion effects for supplementation with vital nutrients.</p>

      			
            </div> 

		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="mt-4 pb-3">
							<img type="button" class="video img-fluid" data-toggle="modal" data-target="#videoFormModal" src="https://industry.pharmafocusasia.com/webinars/yokogawa/yokogawa-video-thumb.jpg" alt="Video">
						</div>
					</div>
						<div class="col-lg-12 col-md-12 col-sm-12 col-12 person pt-3">
						<p class="mb-0">By use of optical (spectroscopy) probes, media concentrations of key components (i.e. glucose and lactate) can be monitored in real-time.  This data, when coupled with automated delivery, can drive the controlled supply of key nutrients throughout the cell culture timeline.  Furthermore, impedance spectroscopy (based on electrical capacitance) can also be employed to detect cellular biomass accumulation.  However, a critical and challenging issue with both of these soft-sensor technologies is the development of dynamic cell models (computer algorithms) to properly interpret the information in real-time for a specific bioproduction system.   Furthermore, integration of all the essential probes, instruments, software and delivery systems can be a daunting task.</p>

					</div>
					</div>
				</div>
				
		</div>

		<div class="row">			
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<p class="mb-1">We have created a default control algorithm and next generation integrated system for CHO cell expression of biologics that can be customized in as little as three optimization runs.  The protocol and tools lead to an optimized algorithm that precisely aligns the real-time sensor data with off-line biochemical assays uniquely matched to your CHO cell medium and expression system from early-stage to late-stage culture.  This eliminates the need for repeated sample testing, and provides the means for real-time data to drive precision process control.  By employing a proprietary self-learning predictive-control algorithm, continuous glucose adjustments are made, resulting in high cell counts, better viability, and improved biologic yield.</p>

      			<p>Yokogawa’s expertise in automation, sensors, control systems and engineering in various commercial applications are now being re-purposed and employed to bring better performance to biopharmaceutical production.  The technology can speed process development and open new possibilities for control of biopharmaceutical production.</p>

  				<h3 class="font-weight-bold font-18 PF-TXTRED">What participants will learn:</h3> 
				<p>Webinar participants will learn about critical considerations in soft-sensor use that impede more widespread adoption of spectroscopic technologies for real-time process control, and how we have overcome these challenges.  In addition, data will be shared demonstrating how calibration with off-line assays has been simplified using software tools to produce accurate cells models with minimal effort.  And discussion about how dynamic predictive control for glucose feeding can affect bioreactor performance and biopharmaceutical integrity.</p>

  				<h3 class="font-weight-bold font-18 PF-TXTRED">Who should attend (Targeted Profiles, Audiences):</h3> 
  				<ul style="padding-left: 20px; line-height: 1.3;">
					<li>Biopharmaceutical Process Development / Manager, Engineer, Scientist</li>
					<li>Biopharmaceutical Upstream Manufacturing / Manager, Engineer, Scientist</li>
					<li>Bioprocess Research / Manager, Engineer, Scientist</li>
					<li>Bioprocess Business Development</li>
					<li>Platform Technology manager / R&D, Bioprocess</li>
  				</ul>
			</div>
		</div>
	</div>




	<div class="container">	
		<div class="row">
	        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 align-self-center">
	        	<div class="bg-info border p-3 text-white">
	            <p class="text-center font-20 font-weight-bold mb-0">" Professionals across the globe have already benefitted. Hurry Register Now! "</p>
	          </div>
	        </div>
	    </div>
                 
		<div class="row">
			<div class="col-md-12">
			  <h2 class="PF-TXTRED mt-2"><strong>About - Paul E. Cizdziel</strong></h2>
			  <p class="mb-1">Paul has nearly three decades of experience in market-leading global life-science research supply companies including ThermoFisher, Merck Millipore, and REPROCELL in executive positions of technology management, business development, marketing and sales.  He has also held scientific positions at the National Institute of Environmental Health Science (NC, USA) and the Yokohama RIKEN Institute.  Currently Paul is employed with Yokogawa Electric Corporation (Tokyo) in global market development for commercialization of new biopharmaceutical engineering production technologies.  Having worked in Japan for over 20 years, he is a permanent resident currently residing in Yokohama Japan with his wife and family.</p>
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



	<!-- Modal content-->
   <div id="videoFormModal" class="modal fade show" role="dialog">
		<div class="modal-dialog modal-md">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title PF-TXTRED">Free Registration to View Now</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="{{ url('yokogawa-webinar-success') }}" method="post" >
						{{ csrf_field() }}	
						<div class="row">
							<div class="col-md-12">
								<div class="form-group ">
									<input class="form-control" id="name" name="name" placeholder="Full Name *" required="" value="" type="text">	
									<input type="hidden" name="type" id="type" value="yokogawa-webinar-video">
									<input type="hidden" name="formtype" value="modal-form">
									<span class="help-block"></span>
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group ">
									<input class="form-control" id="email" name="email" placeholder="Business Email *" required="" value="" type="name">
									<span class="help-block"></span>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group ">
									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required="" value="" type="text">
									<span class="help-block"></span> 
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group ">
									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *" value="" required="" type="text">
									<span class="help-block"></span>   
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group ">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="" required="">
									<span class="help-block"></span> 
								</div>
							</div>							

							<div class="col-md-12">
								<div class="form-group  ">
									<select class="form-control" id="country" name="country" placeholder="Country *" required="" value="">
										<option value="">Select Location*</option>
										               	
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
										               	
										<option value="No_country">No_country</option>
										    
									</select>
									<span class="help-block"></span>   
								</div>
							</div>					

							<div class="col-md-12">
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates" checked="">
										<label class="custom-control-label small" for="email_updates">I would like to receive email updates about Yokogawa products, services and events</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label small" for="quotation">I would like to request a quotation</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
										<label class="custom-control-label small" for="representative">I have more questions and would like to be contacted by a Yokogawa representative</label>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group text-center mb-1">
									<button type="submit" value="submit" class="btn btn-sm btn-danger">SUBMIT</button>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group mb-1">									
									<small class="mt-2 text-muted">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>


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
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('yokogawa-webinar')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 


	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>

	<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
	<script type="text/javascript">
		$('#country').on('change', function() {
			if( this.value  == "India"){
				$('#state').css('display','block').attr('required','true');
			}else{
				$('#state').css('display','none').removeAttr('required');
			}
		});
	</script>
<!-- 	@if(Session('thank_message')) 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	@endif  
 -->
	<script type="text/javascript">
  	@if(session('thank_message'))	

  	$('#myModal').modal('show');
  	// for (let link of document.querySelectorAll('a[download]'))
  	// 	link.click();

  	@endif	  	
  </script>


<!-- 	@if($errors->any())
	<script type="text/javascript">	  	
		@if(old('formtype') == 'modal-form')	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		@endif  
	</script>
	@endif  --> 

</body>

</html>

