<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="language" content="english" />
	<title> NSF Webinar GMP</title>
	<meta name="viewport" content="width=device-width" />
	<meta name="robots" content="noindex" />
	<link rel="shortcut icon" href="{{ config('app.url') }}images/favicon.ico" type="image/x-icon">
	<meta name="title" content="What are the critical factors to sustain for your GMP compliance" />
	<meta name="description" content="We have developed these five factors by looking at previous projects that we, at NSF, have worked on and by researching publicly available documents relating to remediation." />
	<meta name="keywords" content="" />
	<meta property="og:title" content="What are the critical factors to sustain for your GMP compliance" />
	<meta property="og:description" content="We have developed these five factors by looking at previous projects that we, at NSF, have worked on and by researching publicly available documents relating to remediation." />
	<meta property="og:Keywords" content="" />
	<meta property="og:image" content="{{ config('app.url') }}webinars/nsf-webinar-gmp/nsf-webinar-gmp-banner-og.jpg" />
	<link rel="canonical" href="{{URL::current('nsf-webinar-gmp')}}" />
	<link href="{{ config('app.url') }}mix/app.css" rel="stylesheet" type="text/css" />
	<link href="{{ config('app.url') }}css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

	<style type="text/css">
		/*ul li, p{font-size: 15px;}*/
		/*.modal{background: rgba(0, 0, 0, 0.7); }
		.modal-dialog{ top: 0 !important; }*/
		body {
			font-family: 'Lato', sans-serif;
			
		}

		.form-bg {
			background: rgb(50, 139, 215);
			background: -moz-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			background: -webkit-linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			background: linear-gradient(180deg, rgba(50, 139, 215, 1) 0%, rgba(11, 61, 103, 1) 81%);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#328bd7", endColorstr="#0b3d67", GradientType=1);
		}

		.trans-bg {
			background-color: rgba(65, 169, 184, 0.9);
		}

		.bg-dark {
			background-color: #333;
		}

		.has-error .help-block {
			text-align: left;
			color: #a94442;
			font-size: 16px;
			margin: 0;
		}

		.TXT-ORNG {
			color: #EE1D23;
		}

		.TXT-GRAY {
			color: #335160;
		}

		.TXT-BLUE {
			color: #17558a;
		}

		.BG-BLUE {
			background-color: #17558a;
		}

		.TXT-LYT {
			color: #C7D8DD;
		}

		.BG-LYT {
			background-color: #EBF4F7;
		}

		.form-control {
			border-radius: 0px;
			height: calc(2.0rem + 2px);
			font-size: 16px;
		}

		p {
			font-size: 16px;
		}

		.form-group {
			margin-bottom: 10px;
		}

		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #EE1D23;
		}

		.btn-danger {
			background-color: #EE1D23;
		}

		.Mar-left-n {
			margin-left: -10px;
		}

		.line-height {
			line-height: 130%;
		}

		.connect li {
			list-style: none;
			padding-bottom: 5px;
			margin-left: -10px;
		}

		.connect li::before {
			content: "\f101";
			font-family: FontAwesome;
			position: absolute;
			color: #EE1D23;
			/*font-size: 16px;*/
			font-weight: normal;
			left: 20px;
		}

		.brdr-radius {
			border-radius: 0px;
		}

		.font-11 {
			font-size: 11px;
			line-height: 1.4;
		}

		.font-20 {
			font-size: 20px;
			line-height: 1.2;
		}

		.font-22 {
			font-size: 22px;
			line-height: 1.4;
		}

		.font-18 {
			font-size: 18px;
			line-height: 1.2;
		}

		.font-16 {
			font-size: 16px;
			line-height: 1.2;
		}

		.font-28 {
			font-size: 28px;
			line-height: 1.6;
		}

		.expandcheckbox-div {
			-webkit-transition: all 1s ease-in-out;
			-moz-transition: all 1s ease-in-out;
			-ms-transition: all 1s ease-in-out;
			-o-transition: all 1s ease-in-out;
			/*transition: all 1s ease-in-out;*/
			transition: visibility 0s, opacity 0.5s linear;
		}

		ul {
			list-style-type: disclosure-closed;
		}

		ul li::marker {
			color: #094277;
		}

		/*Mobile ResponsiveCode */
		@media (min-width: 320px) and (max-width: 767px) {
			.font-28 {
				font-size: 16px !important;
			}
		}
		.TXT-Blue {
    color: #094277;
}

.fa-facebook {
    padding: 5px 8px;
}

.fa {
    display: inline-block;
    font: normal normal normal 14px/1 FontAwesome;
    font-size: inherit;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
footer i {
    color: #f04e23;
    font-size: 17px;
    border-radius: 5px;
    transition: 500ms;
    background: #f1f1f1;
    margin-right: 5px;
}

.fa-linkedin, .fa-twitter {
    padding: 5px 5px;
}
footer .ft-right a {
    float: right;
}

.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}
	</style>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-6 align-self-center">
					<img src="{{ config('app.url') }}images/logo.png" alt="Pharma Focus Asia" class="img-fluid pt-1 pb-1" width="200">
				</div>

				<div class="col-md-3 col-6 offset-md-6 align-self-center" align="right">
				<p class="mb-0">
						<em class="mt-5"><span>Webinar Sponsored by</span></em>
						<img src="{{ config('app.url') }}webinars/nsf-webinar/nsf-logo.jpg" alt="nsf_logo" title="nsf_logo" class="img-fluid mt-1 mb-1" style='width:100%;max-width:90px;'>
						
					</p>
					
				</div>
			</div>
		</div>
	</div>
	<div class="border-top mb-3 mt-2"></div>

	<div class="container shadow">
		<div class="row position-relative">
			<div style="top: 50%;" class="banner-text position-absolute container">
				<!-- <div class="row">
					<div class="col-12 col-md-7">
						<h1 style="margin:0 calc(1vh + 1vw); font-size:calc(1vw + 1rem); text-shadow: 1px 1px 9px rgba(0,0,0,0.7);" class="text-white">Genotoxic Impurities:<br> Nitrosamines LC-MS An NSF Guide</h1>
					</div>
				</div> -->

			</div>

			<img class="w-100" src="{{ config('app.url') }}webinars/nsf-webinar-gmp/nsf-webinar-gmp-banner-img.jpg" alt="nsf-banner" title="nsf-banner" class="img-fluid">
		</div>
	</div>


	<div class="container">
		<div class="row justify-content-left">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 my-4">
				<h2 class="font-weight-bold TXT-Blue font-20 mb-3" style="color: #094277;line-height:1.2">What are the critical factors to sustain for
your GMP compliance? </h2>


				<div class="row justify-content-center">
                     <div class = 'col-lg-12 col-md-8 col-sm-12 col-12 '>

                     <p class="mb-4">
					 We have developed these Five factors by looking at previous
projects that we, at NSF, have worked on and by researching
publicly available documents relating to remediation. This
webinar aims to help you understand Five critical factors in
helping you sustain your GMP compliance. It also aims to help
you understand the criticality of those factors. </p>

					 

					 <!-- <p class="mb-4">
					 Combined with our well established molecular biology expertise, the Twist oligo synthesis platform enables the fabrication of highly diverse gene mutant libraries with excellent variant representation and highly specific user-defined composition with no unwanted bias or motifs. Twist library technology enables a comprehensive interrogation of the variant sequence space.</p>
					 <p class="mb-4">
					 Twist Biopharma, a vertical within Twist Bioscience, has developed a Library of Libraries containing multiple pre-constructed and validated libraries against many high-value targets with which scientists can build a comprehensive and robust antibody discovery platform.<br> In this webinar, you'll learn </p> -->
					 <!-- <div class = 'col-lg-6 col-md-8 col-sm-12 col-12'>
					 <p class="mb-0">
					 Duration: 59 minutes</p>
					 <button style='border: 1px solid #0077bb;background-color: #0077bb;padding:8px;'><a href='#' style='color:#fff;font-size: 16px;'>REGISTER NOW</a></button>
					 </div> -->
					 </div>
				</div>

				
				<h2 class="font-weight-bold TXT-Blue mb-3 font-20">FDA Inspection Issues</h2>
				<!--<ul style="padding-left: 20px; line-height: 1.6;list-style-type: disc;color:#000;font-size:16px;">-->
    <!--    						<li>What difference do robust GMP processes make?</li>-->
    <!--    						<li>Agility in regulatory management</li>-->
    <!--    						<li>Ensure that your site has a proactive quality management system </li>-->
        						
    <!--    					</ul>-->
                            <p class="mb-4">
					 Firstly, if one were to look at the last three years data on the
FDA website and look at the issues that arose during
inspections, you will see that there is a consistent thread in
terms of where the deficiencies are coming from. </p>		
			
			
			</div>

			<div class="col-lg-4 col-12 my-4">
				<!--<div class="form-bg shadow p-3">-->
				<!--	<h2 class="text-center mb-2 text-white font-weight-bold mb-4 font-18">Register Now to Attend the Webinar</h2>-->
				<!--	<form action="{{ route('nsfWebinar.post') }}" method="post" id="writemessage">-->
				<!--		@csrf-->
				<!--		<input type="hidden" name="formtype" value="modal-form">-->
				<!--		<input type="hidden" name="type" value="NSF Webinar">-->
				<!--		<input type="hidden" name="client_subject" value="Registration for NSF Webinar">-->
				<!--		<input type="hidden" name="admin_subject" value="Registration for NSF Webinar">-->
				<!--		<input type="hidden" name="client_message" value="We appreciate your interest in the NSF Webinar. We will get in touch with you soon.">-->
				<!--		<input type="hidden" name="site_name" value="PharmaFocusAsia">-->
				<!--		<input type="hidden" name="thank_message" value="You've successfully registered for the NSF Webinar. An email will be sent to you with all the details.">-->

				<!--		<div class="form-group">-->
				<!--			<input type="text" class="form-control" id="first_name" name="firstname" placeholder="First Name*" value="" required="">-->
				<!--		</div>-->

				<!--		<div class="form-group">-->
				<!--			<input type="text" class="form-control" id="last_name" name="lastname" placeholder="Last Name*" value="" required="">-->
				<!--		</div>-->


				<!--		<div class="form-group ">-->
				<!--			<input type="email" class="form-control" name="email" id="email" placeholder="Email* " value="" required="">-->
				<!--			<span class="help-block"></span>-->
				<!--		</div>-->
						
    <!--        					<div class="form-group ">-->
    <!--        						<input class="form-control" id="phone" name="phone" placeholder="Phone *" required="" value="" type="text">-->
            
    <!--        						<span class="help-block"></span> -->
    <!--        					</div>-->
            				
				<!--		<div class="form-group ">-->
				<!--			<input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title*" value="" required="">-->
				<!--			<span class="help-block"></span>-->
				<!--		</div>-->

				<!--		<div class="form-group ">-->
				<!--			<input type="text" class="form-control" name="company" id="company" placeholder="Company Name*" value="" required="">-->
				<!--			<span class="help-block"></span>-->
				<!--		</div>-->

                       
				<!--					<div class="form-group  {{ $errors->first('country', 'has-error')}}">-->
				<!--						<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="{{ old('country') }}" >-->
				<!--							<option value="">Select Country*</option>-->
				<!--							@foreach($countries as $value)               	-->
				<!--							<option value="{{$value->title}}">{{$value->title}}</option>-->
				<!--							@endforeach    -->
				<!--						</select>-->
				<!--						<span class="help-block">{{ $errors->first('country', ':message') }}</span>   -->
				<!--					</div>-->
								
						
				<!--		<div class="form-group">-->

				<!--			<div class="form-check">-->

				<!--				<label class="form-check-label font-12 text-white">-->

				<!--					<input type="checkbox" name="email_updates" value="Yes" class="form-check-input" id="declaration">I agree to receive Communications from NSF. -->
									

				<!--				</label>-->
				<!--				 <div class="text-danger verifi"></div>-->

				<!--			</div>-->

				<!--		</div>-->
				<!--		<div class="form-group mt-4 mb-2" align="center">-->
				<!--			<button type="submit" name="submit" class="btn btn-sm btn-danger pl-5 pr-5 brdr-radius" id="checkBtn" >SUBMIT </button>-->
				<!--		</div>-->

				<!--	</form>-->
				<!--	<div class="clearfix"></div>-->
				<!--</div>-->
				
				<img src="https://industry.pharmafocusasia.com/webinars/nsf-webinar-gmp/nsf-webinar-gmp-video-img.jpg" alt="nsf" class="img-fluid shadow" data-toggle="modal" data-target="#myForm" style="cursor: pointer;">
				<p class="shadow BG-BLUE pt-2 text-white text-center font-18 py-2 px-3 mt-3 rounded" data-toggle="modal" data-target="#myForm" style="cursor: pointer;">Register for free to get video access</p>
			</div>
			
			
			
			<div class="container pt-0 pb-4">
			<h2 class="font-weight-bold TXT-Blue mb-3 font-20" style='text-align:left;'>About Speaker:</h2>
				<div class="p-2 PF-BrdrDDD mb-2 mt-2 bg-sky shadow">	 
					<div class="row">
						<div class="col-lg-2 col-md-2 col-sm-12 col-12 text-center">
							<img src="{{ config('app.url') }}webinars/nsf-webinar-gmp/venkatachalam_varun.jpg" alt="Varun Venkatachalam" title="Varun Venkatachalam" class="img-fluid">
							
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12 col-12"> 
							<h3 class="font-18 pt-2 mb-1"><span class="TXT-Blue font-weight-bold">Varun Venkatachalam</span>
							</h3>
							<p class="mb-1">NSF Principal Consultant</p>
							
  <p class="mb-4">Varun Venkatachalam is a multifaceted technical and business professional with proven track record in
management consulting, strategy, operations and quality management in the pharma/biotech industries.
He is skilled in regulatory compliance, project management, quality management and quality assurance.
Prior to joining NSF, he held roles at EY, PwC, Pfizer and Logica. Varun holds an MSc in biotechnology and
business management and a B.Tech in industrial biotechnology. His experience and skillsets help him
provide unique perspectives and insights to mitigate current challenges being faced in the life sciences
sector.</p>
							
						</div>
					</div> 
				</div>
			</div>
			

			
			
		</div>
		 <div class='row '>
		<div class="col-12 " >
		    <h2 class="font-weight-bold TXT-Blue mb-3 font-20" style='text-align:left;'>About NSF :-</h2>
			<p class="mb-4">The National Science Foundation (NSF) is an independent federal agency created by Congress in 1950 &quot;to promote the progress of science; to
advance the national health, prosperity, and welfare; to secure the national defense…&quot;​ With an annual budget of more than $8 billion, NSF is the
funding source for approximately 20 percent of all federally supported basic research conducted by America’s colleges and universities.
Manufacturers, regulators and consumers look to NSF for the development of public health standards and certification programs that help
protect the world’s food, water, consumer products and environment.</p>
			</div>
	</div> 
	</div>
	
	<!-- Form Popup Model Box -->
	<div id="myForm" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content BG-BLUE">
				<div class="modal-header text-center">
					<h2 class="text-white font-24 text-white font-weight-bold">Register now</h2>
					<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
            		<form action="{{ route('nsfWebinarGmp.post') }}" method="post" id="form-validation">
            		   @csrf   
            		   <div class="row">
            				<div class="col-md-6 mb-2"> 
            					<div class="form-group ">
            							
            						<input type="hidden" name="type" id="type" value="On Demand NSF Webinar GMP">
            						<input type="hidden" name="formtype" value="modal-form">
            						<input type="hidden" name="client_subject" value="NSF On Demand Webinar">
            						<input type="hidden" name="admin_subject" value="Registration for NSF On Demand Webinar">
            						<input type="hidden" name="thank_message" value=" Thank you for showing interest in NSF Webinar.  One of our product associates will contact you soon.">
            						<input type="hidden" name="client_message" value="We appreciate your interest in the NSF Webinar. We will get in touch with you soon.">
            
            						<input class="form-control" id="firstname" name="firstname" placeholder="First Name *" required="" value="" type="text">
            						<span class="help-block"></span>
            					</div>
            				</div>

							<div class="col-md-6 mb-2"> 
            					<div class="form-group ">
            						<input class="form-control" id="lastname" name="lastname" placeholder="Last Name *" required="" value="" type="text">
            						<span class="help-block"></span>
            					</div>
            				</div>
                            
                            <div class="col-md-12 mb-2">
                				<div class="form-group ">
                				<input class="form-control" id="email" name="email" placeholder="Business Email *" required="" value="" type="email">
                				<span class="help-block"></span>
                				</div>
            				</div>
            				
            				<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input type="text" class="form-control" id="jobtitle" name="job_title" placeholder="Job Title  *" value="" required="">
            						<span class="help-block"></span> 
            					</div>
            				</div>
            				
            				<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input type="text" class="form-control" id="company" name="company" placeholder="Company *" value="" required="">
            						<span class="help-block"></span> 
            					</div>
            				</div>
            				
            				
            
            				<div class="col-md-12 mb-2">
            					<div class="form-group ">
            						<input class="form-control" id="phone" name="phone" placeholder="Telephone *" required="" value="" type="text">
            
            						<span class="help-block"></span> 
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
            					<p class="text-white mb-2 small">I agree to receive Communications from NSF. </p>
            
            					<div class="custom-control custom-radio">
            						<input type="radio" id="quotation3" name="email_updates" value="Yes" class="custom-control-input">
            						<label class="custom-control-label text-white" for="quotation3">Yes </label>
            					</div>
            					<div class="custom-control custom-radio">
            						<input type="radio" id="quotation4" name="email_updates" class="custom-control-input" value="No">
            						<label class="custom-control-label text-white" for="quotation4">No </label>
            					</div>
            					<div class="error text-white font-weight-bold verifi1"></div>
            			    </div>
            		    </div>
            		            
            			<div class="col-md-12 pt-2">
            				<div class="form-group text-center mb-3">
            					<button type="submit" value="submit" class="btn btn-sm btn-block btn-danger" id="checkBtn1">Submit</button>
            				</div>
            			</div>
            			<p class="text-white font-14 text-center">**Under no circumstances we will share or sell your email and contact information with any govt or private entity. </p>
            		</form>
				</div>
			</div>
		</div>
	</div> 



	<footer style='    background-color: #002232 !important;
    color: #ccc;
    padding: 15px 10px 0 10px;
'>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">	          		
					<p>© Ochre Media Pvt Ltd., 2022. All rights reserved.</p>
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


	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title text-blue">Thank You..</h4>
				</div>
				<div class="modal-body">
					<p>{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">
					<a class="btn btn-seconadry" role="button" id="aa" name="aa" href="{{ url('/promotion/nsf-webinar-gmp') }}" aria-expanded="false">
						Close
					</a>
				</div>
			</div>
		</div>
	</div>


	<script src="{{ config('app.url') }}mix/app.js"></script>

	<script type="text/javascript">
		@if(Session('thank_message'))
		$('#myModal').modal('show');
		@endif
	</script>

	@if($errors->any())
	@if(old('formtype') == 'modal-form')

	<script type="text/javascript">
		$(document).ready(function() {
			$('#register').modal('show');
		});
	</script>


	@endif
	@endif
	<script>
		$(document).ready(function() {
			$('#checkBtn').click(function() {
				var form = $('#writemessage');
              
				checked = $("input[name=email_updates]:checked").length;
				if (checked == 0) {
					form.find('.verifi').html("You must check the checkbox.");
					return false;
				} else {
					form.find('.verifi').html("");
					return true;
				}
			});
		});
	</script>
</body>

</html>