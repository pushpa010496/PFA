<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<title>Deep Generative Models, Multi-Parametric Optimisation and Synthetic Accessibility </title>
	<!-- Meta Tags -->
	<meta name="description" content="Deep Generative Models, Multi-Parametric Optimisation and Synthetic Accessibility." />
	<meta name="keywords" content="" />

	<meta property="og:title" content="Deep Generative Models, Multi-Parametric Optimisation and Synthetic Accessibility" />
	<meta property="og:description" content="Deep Generative Models, Multi-Parametric Optimisation and Synthetic Accessibility." />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/iktos/iktos-og-image.jpg" />

	<link rel="canonical" href="{{url('iktos-ai-webinar')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('iktos-ai-webinar')}}" />
	
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
		.TXT-GREEN {
			color: #899b01;
		}
		.date-meta {
			font-size: 18px;
			font-weight: 600;
			color: #555;
		}
		.text-white{
			color:#ffffff !important;
		}
		.custom-list li::before {
			content: "\f138";
			font-family: FontAwesome;
			position: absolute;
			color: #337ab7;
			font-size: 14px;
			left: 20px;
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
		.TXT-RED {
			color: #F1474E;
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

		.BG-BLUE{background-color: #1D3D88;}
		.TXT-BLUE{color: #094693;}
		.BG-LightBLUE{background-color: #1c95ca;}

		.form-control{border-color: #ccc; font-size: 14px; height: calc(2rem + 2px);}
		.btn-danger {
			color: #fff;
			background-color: #F04E23;
			border-color: #F04E23;
		}
		
		#state{
			display: none;
		}
		#state2{
			display: none;
		}
		.font-16 { font-size: 16px; line-height: 1.2; }
		.font-18 { font-size: 18px; line-height: 1.2; }
	</style>

</head>

<body> 
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-8 my-auto offset-lg-5 pt-2 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/iktos/iktos-logo.jpg" alt="Iktos-webinar-logo" class="ml-2 img-fluid" />
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/iktos/iktos-banner.jpg" alt="Iktos-Webinar" title="Iktos-Webinar" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
						<h2 class="font-weight-bold PF-TXTRED font-20">Deep Generative Models, Multi-Parametric Optimisation and Synthetic Accessibility </h2>
						<ul style="list-style-type: square;">
							<li>Deep generative modeling, AI and ML </li>
							<li>Iktos Philosophy and Process: </li>
								<ol style="list-style-type: none;">
									<li>1. Ligand and Structure-based de novo design </li>
									<li>2. Synthetic Accesability</li>
								</ol>
							<li>Case study: Generative models to Novel Compounds </li>
						</ul>
					</div>
				</div> 
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="{{config('app.url')}}webinars/iktos/iktos-ondemand-video-image.jpg" alt="Iktos Webinar" title="Iktos Webinar" class="img-fluid video shadow border text-center" />
				<div class="p-2 PF-BrdrDDD mb-1 bg-light shadow mt-4" align="center">
					<h3 class="pt-1 pb-1">
						<strong class="TXT-RED font-20">13<sup>th</sup> July 2021</strong>
						<span class="small text-secondary ml-2 mr-3">(Tuesday)</span>
						<p class="mt-2 mb-0 font-weight-bold font-16">1:30 PM (IST) | 2:30 PM (IST)</p>
					</h3>						
				</div>
			</div>

		</div>
	</div>


	<div class="container pt-4">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="p-2 PF-BrdrDDD mb-3 bg-white shadow">
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-12 person text-center">
							<h3 class="PF-TXTRED font-weight-bold font-18 text-uppercase mt-1">Speaker:</h3>
						<img src="{{config('app.url')}}webinars/iktos/Sree-image.jpg" alt="Dr. Sree Vadlamudi" title="Dr. Sree Vadlamudi" class="img-fluid">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12 col-12">
							<h2 class="TXT-RED mt-2 mb-1"><strong>Dr. Sree Vadlamudi </strong></h2>
							<p class="gray-text mb-2"><em> Senior Director, Head of Business Development EU, UK </em></p>
							<p class="mb-1">As Senior Director, Head of Business Development EU at Iktos AI, Sree leads strategic business development outreach, alliance management, marketing & communication activities. Sree has a successful track record in Strategic Business Development, Technology Commercialisation and Alliance Management positions with increasing responsibility in the bio-pharma industry. Sree was instrumental in securing and managing partnerships with biotechs and pharma as well as maximising the value of AI-based technology platforms and the growth of the business. Sree also held senior research management positions at biotechs and virtual biotechs. </p>
							<p>Named author of multiple patents and publications, delivered numerous invited talks at international conferences. PhD in Medicinal Chemistry, MBA with merit from Lancaster Business School </p>
						</div> 
					</div>
				</div>
			</div>

		</div>
	</div>



	<div class="container pt-3">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12 custom-list">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-12">
						<h2 class="font-weight-bold PF-TXTRED font-20 pb-2">AUDIENCE BACKGROUND </h2>
						<ul style="list-style-type: none;">
	                        <li>IT - Research &amp; Development </li>
	                        <li>Biopharma &amp; Biotechnology </li>
	                         <li>Cloud Computing </li> 
	                        <li>Drug Discovery &amp; Development </li>
	                        <li>Data Management &amp; Analytics </li>
	                        <li>Regulatory and Pharmacovigilance </li>
	                         <li>Clinical trials and data management</li>
	                        <li>Drug Designing &amp; Delivery </li>
	                        <li>Medicine Management  </li>
	                        <li>Pharma Engineering  </li>
	                        <li>Clinical Trials </li>
	                        <li>Diagnostics</li>
	                        <li>Bioinformatics </li>
	                         <li>Big Data Solutions </li>
	                         <li>AI/ Machine Learning </li>
	                         <li>Regulatory and Pharmacovigilance </li>
	                         <li>Translational informatics </li>
	                         <li>Data storage and analysis </li>
	                        <li>CRO/CDMO/CGMP </li>	 
	                    </ul>
					</div>

					<div class="col-md-6 col-sm-12 col-12">
						<h2 class="font-weight-bold PF-TXTRED font-20 pb-2">AUDIENCE PROFILES </h2>
						<ul style="list-style-type: none;">
	                        <li>IT Managers / Directors </li>
	                        <li>Chief Data Officers/GM’s </li>
	                        <li>R &amp; D Research/Staff Scientist/Professor </li>
	                        <li>Executive &amp; Corporate Management (CEO, CSO, CTO &amp; CIO) </li>
	                        <li>Lab Management Heads </li>
	                        <li>Production/Process Scientist/Manufacturing  </li>
	                        <li>Clinical Researcher (MD/PHD, Clinical Affairs) </li>
	                        <li>Validation/Regulatory/Quality Control/Quality Assurance </li>
	                        <li>Business Development Professional/Venture Capital/Law </li>
	                        <li>Pharmaceutical Engineers </li>
	                        <li>Core Facility Manager </li>
	                        <li>Technology Transfer Manager </li>
	                        <li>Database &amp; Lab Managers </li>
	                    </ul>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container">
		<div id="videoFormModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title PF-TXTRED">Free Registration to View Now</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{ route('iktosaiwebinar.post') }}" method="post" id='writemessage' >
						{{ csrf_field() }}
						<div class="row">
							<div class="col-md-12 mb-2">
								<div class="form-group {{ $errors->first('name', 'has-error')}}">
									<input class="form-control" id="name" name="name" placeholder="Full Name *" required=""  value="{{ old('name') }}"  type="text">	
									
									<input type="hidden" name="type" id="type" value="On-demand Iktos Webinar 2021">
                    									
                                    <input type="hidden" name="formtype" value="modal-form">
                                    
                                    <input type="hidden" name="thank_message" value="Your On-demand Iktos Webinar 2021 registration was successfully completed.">
                                    
                                    <input type="hidden" name="client_message" value="Thank you for showing your interest in Iktos Webinar 2021">
									
									<span class="help-block">{{ $errors->first('name', ':message') }}</span>
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group {{ $errors->first('email', 'has-error')}}">
									<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="{{ old('email') }}"  type="name">
									<span class="help-block">{{ $errors->first('email', ':message') }}</span>
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group {{ $errors->first('phone', 'has-error')}}">
									<input class="form-control" id="phone" name="phone" placeholder="Phone *" required=""  value="{{ old('phone') }}"  type="text">

									<span class="help-block">{{ $errors->first('phone', ':message') }}</span> 
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
									<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="{{ old('job_title') }}"  required="" type="text">
									<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group {{ $errors->first('company', 'has-error')}}">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="{{ old('company') }}" required/>
									<span class="help-block">{{ $errors->first('company', ':message') }}</span> 
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group  {{ $errors->first('country', 'has-error')}}">
									<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="{{ old('country') }}" >
										<option value="">Select Country*</option>
										@foreach($countries as $value)               	
										<option value="{{$value->title}}">{{$value->title}}</option>
										@endforeach    
									</select>
									<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group {{ $errors->first('state', 'has-error')}}">
									<input type="text" class="form-control" id="state" name="state" placeholder="State *" value="{{ old('state') }}" required/>
									<span class="help-block">{{ $errors->first('state', ':message') }}</span> 
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
										<label class="custom-control-label text-secondary small" for="email_updates">I would like to receive email updates about IKTOS AI webinar products, services and events</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label text-secondary small" for="quotation">I would like to request a quotation</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
										<label class="custom-control-label text-secondary small" for="representative">I have more questions and would like to be contacted by a IKTOS AI webinar representative</label>
									</div>
								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group text-center mb-1">
									<button type="submit" value="submit" class="btn btn-sm btn-block btn-danger">SUBMIT</button>
								</div>
							</div>

							<div class="col-md-12 mb-2">
								<div class="form-group mb-1">									
									<small class="mt-2 text-secondary">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</small>
								</div>
							</div>
						</div>
					</form>
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
					<h2 class="modal-title text-blue"> Thank You...</h2>
				</div>
				<div class="modal-body">
					<p style="color: green;">{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('iktos-webinar')}}" aria-expanded="false">
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

		$('#country2').on('change', function() {
			if( this.value  == "India"){
				$('#state2').css('display','block').attr('required','true');
			}else{
				$('#state2').css('display','none').removeAttr('required');
			}
		});
	</script>
	@if(Session('thank_message')) 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	@endif  

	<script type="text/javascript">
		@if(session('thank_message'))	
		$('#myModal').modal('show');
  	// for (let link of document.querySelectorAll('a[download]'))
  	// 	link.click();

  	@endif	  	
  </script>


</body>

</html>

