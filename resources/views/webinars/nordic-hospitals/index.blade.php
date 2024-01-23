<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Utilizing Nordic Hospital Data Lakes to Characterize Real-World ASCVD Populations</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<!-- Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:title" content="Utilizing Nordic Hospital Data Lakes to Characterize Real-World ASCVD Populations" />
	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="{{config('app.url')}}webinars/bc-platforms/bc-platforms-utilizing-nordic-hospital-data-lakes-og.jpg" />

	<link rel="canonical" href="{{url('bc-platforms-presentation')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('bc-platforms-presentation')}}" />
	
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
	.green-text {
		color: #71c21b;
		font-size: 13px;
		font-weight: 600;
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
		background: #F04E23;
	}
	.modal-dialog{
		top:0 !important;
	}
	.video:hover{cursor: pointer;}

	.BG-BLUE{background-color: #1c95ca;}
	.form-control{font-size: 14px; height: calc(2rem + 2px);}
	.btn-danger {
		color: #fff;
		background-color: #F04E23;
		border-color: #F04E23;
	}
	.form-group{margin-bottom: 10px;}
	.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
		background-color: #bde450;
	}
	#state{
		display: none;
	}
	.font-16 { font-size: 16px; line-height: 1.2; }
	.font-18 { font-size: 18px; line-height: 1.2; }
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
				<div class="col-lg-3 col-md-3 col-sm-4 col-5 my-auto">
					<img src="https://industry.pharmafocusasia.com/images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-8 col-7 my-auto offset-lg-5 offset-md-5 pt-2 pb-2 text-right gray-text align-self-center">
					<p class="mb-0">
						<em class="mt-5"><span>Webinar Sponsored by</span></em>
						<img src="{{config('app.url')}}webinars/bc-platforms/bc-platforms-logo.jpg" alt="bc-platforms" class="ml-2 img-fluid">
					</p>
				</div>
			</div>
		</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/bc-platforms/bc-platforms-utilizing-nordic-hospital-data-lakes-banner.jpg" alt="bc-platforms" title="bc-platforms" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12 person pt-3">
				<h2 class="font-weight-bold PF-TXTRED font-20">Utilizing Nordic Hospital Data Lakes to Characterize Real-World ASCVD Populations</h2> 

				<p class="mb-1">Cardiovascular disease (CVD) is the leading cause of morbidity and mortality worldwide, accounting for 17.9M deaths each year. The burden for the disease would be reduced enormously by secondary prevention in patients whom had an initial cardiovascular event. However, the risk factors amongst patients with exposure to cardiovascular
					events are not optimally controlled, nor is clear clinical data to identify and profile
				patients with re-occurring event easily available.</p>
			</div>			

			<div class="col-lg-5 col-md-5 col-sm-12 col-12 person pt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="{{config('app.url')}}webinars/bc-platforms/bcplatforms-video-thumb.jpg" alt="BC Platforms Webinar Video" title="BC Platforms Webinar Video" class="img-fluid video shadow border text-center" />		
			</div> 		

		</div>
	</div>

	<div class="container">
		<h3 class="font-weight-bold mt-4 font-16 PF-TXTRED">BC Platforms held a presentation recently at Bio-IT World Conference in Boston, showcasing</h3> 
		<p>how they were able help a global pharma collaborator access real-world data (RWD) in Finland and Estonia in order to identify and characterize patient populations with atherosclerotic cardiovascular disease (ASCVD). Real World Data is increasingly being recognized as a critical capability that can benefit and accelerate the drug development lifecycle. In this particular case RWD was successfully used for identification of
		predictive factors for disease severity and patient outcomes.</p>
		<p>Listen to the presentation now to gain valuable insights on this case study.</p>
	</div>
	<div class="container pt-3 pb-4">
		<div class="p-2 PF-BrdrDDD mb-2 mt-2 bg-sky shadow">	 
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-12 text-center">
					<img src="https://industry.pharmafocusasia.com/webinars/bc-platforms/umesh-katpally.jpg" alt="bc-platforms" title="bc-platforms" class="img-fluid">
				</div>
				<div class="col-lg-10 col-md-10 col-sm-12 col-12"> 
					<h3 class="font-18 pt-2 mb-3">Presenter information - <span class="PF-TXTRED font-weight-bold">Umesh Katpally</span> Director, Data Advisory for Data Sciences at BC Platforms</h3>
					<p class="mb-2">He supports Data Science customers by advising on strategies needed to answer their research questions, including data sources and data points. This helps with integrating and mining clinical phenotypic data combined with genotypic profiling data sets from different data sources to augment customers' drug development pipelines.</p>
					<p class="mb-2"><strong>Education: </strong>Ph.D </p>
				</div>
			</div> 
		</div>
	</div>

	<!-- <div class="container">	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 align-self-center">
				<div class="BG-BLUE border p-3 text-white">
					<p class="text-center font-20 font-weight-bold mb-0">" Professionals across the globe have already benefitted. Hurry register now! "</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h2 class="PF-TXTRED mt-2"><strong>About - Joerg Schwinde</strong></h2>
				<p class="mb-1">Key Segment Manager for Vaccines/ Monoclonal Antibodies at the Eppendorf AG Bioprocess Center in Juelich, Germany. Joerg has more than 20 years of experience in sales of bioprocess products for fermentation, cell and stem cell cultivation. Formerly responsible for Central Europe he has headed the Bioprocess Sales and Service operations in Asia Pacific being now in a global responsibility. He has earned his PhD from the Heinrich-Heine-University, Duesseldorf, in the field of microbial amino acid production.</p>
			</div>
		</div>
	</div> -->	



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
						<form action="{{ route('bcPlatformsPresentation.post') }}" method="post" id='writemessage' >
							{{ csrf_field() }}
							<div class="row">
								<input type="hidden" name="type" id="type" value="BC Platforms On-demand Webinar" />
								<input type="hidden" name="thank_message" value="Your registration for the On Demand Webinar  conducted by  BC Platforms  is successful.">
								<input type="hidden" name="client_message" value="Thank you for showing your interest in the  On Demand Webinar  conducted by  BC Platforms ">

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('name', 'has-error')}}">
										<input class="form-control" id="name" name="firstname" placeholder="First Name *" required=""  value="{{ old('name') }}"  type="text">
										<span class="help-block">{{ $errors->first('name', ':message') }}</span>
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('name', 'has-error')}}">
										<input class="form-control" id="name" name="lastname" placeholder="Last Name *" required=""  value="{{ old('name') }}"  type="text">
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


								<div class="col-md-12 mb-2">
									<div class="form-group">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
											<label class="custom-control-label small" for="email_updates">I would like to receive email updates about BC Platforms products, services and events</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
											<label class="custom-control-label small" for="quotation">I would like to request a quotation</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
											<label class="custom-control-label small" for="representative">I have more questions and would like to be contacted by a BC Platforms representative</label>
										</div>
									</div>
									<div class="verifi text-danger"></div>
								</div>

								<div class="col-md-12">
									<div class="form-group text-center mb-1">
										<button type="submit" value="submit" id="checkBtn" class="btn btn-sm btn-block btn-danger">SUBMIT</button>
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
					<h2 class="modal-title text-green"> Registration successful...</h2>
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
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('eppendorf-bioprocess-webinar')}}" aria-expanded="false">
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



<script type="text/javascript">
	$(document).ready(function () {
		$('#checkBtn').click(function() {
			var form = $('#writemessage');
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

</body>

</html>

