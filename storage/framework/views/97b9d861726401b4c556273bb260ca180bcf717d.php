<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>/images/favicon.ico" type="image/x-icon">

	<title>Remote Monitoring is now a Necessity - P1 Source Upload Solution Review | Protocol First Webinar</title>
	<!-- Meta Tags -->
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<meta property="og:title" content="Protocol First Webinar" />
	<meta property="og:description" content="" />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="<?php echo e(config('app.url')); ?>webinars/protocol-first/protocol-first-banner.jpg" />

	<link rel="canonical" href="<?php echo e(url('protocol-first-webinar')); ?>"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="<?php echo e(url('protocol-first-webinar')); ?>" />
	
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
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css"> 
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/custom-styles.css">

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">  -->
	<!-- <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">   -->

	<script src="<?php echo e(config('app.url')); ?>styles/js/jquery-2.1.3.min.js"></script> 

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
		.form-group{margin-bottom: 10px;}
		/*.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #bde450;
		}*/
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
<?php if(view()->exists('webinars.banner')): ?>
       <?php echo $__env->make('webinars.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="<?php echo e(config('app.url')); ?>images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-5 col-md-5 col-sm-8 my-auto offset-lg-4 pt-2 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="<?php echo e(config('app.url')); ?>webinars/protocol-first/protocol-first-logo.png" alt="Protocol First" class="ml-2 img-fluid"> 
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="<?php echo e(config('app.url')); ?>webinars/protocol-first/protocol-first-banner.jpg" alt="Protocol First" title="Protocol First" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
						<h2 class="font-weight-bold PF-TXTRED font-20">Remote Monitoring is now a Necessity -- P1 Source Upload Solution Review</h2>
						<p class="mb-2">P1 Source Upload is a remote monitoring solution that allows for the upload of unredacted source documents into a HIPAA compliant, cloud-based environment. It is unique because “certified copies of source” are uploaded and tagged with a single mouse click. Other solutions require 7-10 individual data elements to be manually tagged to each uploaded document. This increases site burden and because that task isn't automated, the data will need to be reconciled or re-monitored later by a CRA. P1 Source Upload’s auto-tagging feature avoids this expensive extra step and avoids delaying DBL too.</p>
						<p>It’s currently being used by 2 top 5 CROs, directly by multiple small-medium sized biotechs, and at over 1,000 global sites (across +20 countries).</p>
					</div>	
				</div> 
			</div>
			
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="<?php echo e(config('app.url')); ?>webinars/protocol-first/protocol-webinar-video-thumb.jpg" alt="PSI Webinar" title="PSI Webinar" class="img-fluid video shadow border text-center" />
			</div>

		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-12 offset-md-3 mt-2 text-center">
				<div class="p-2 PF-BrdrDDD mb-1 bg-light shadow" align="center">
					<h2 class="mb-1 pt-2 TXT-RED font-20"><strong>10<sup>th</sup> February 2021</strong> <span class="small text-secondary ml-3">(Wednesday)</span></h2>
					<p class="mt-2 mb-2 font-weight-bold font-16">11:30 AM (IST)</p>
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
							<img src="<?php echo e(config('app.url')); ?>webinars/protocol-first/protocol-first-speaker.jpg" alt="Dr. Hugh Levaux" title="Dr. Hugh Levaux" class="img-fluid">
						</div>
						<div class="col-lg-10 col-md-10 col-sm-12 col-12">
							<h2 class="TXT-RED mt-2 mb-2"><strong>Dr. Hugh Levaux</strong>, <em class="gray-text small">Founder and CEO, Protocol First</em></h2>
							<p class="mb-1">Dr. Hugh Levaux is Founder and CEO of Protocol First. The company creates innovative software solutions for clinical research, with a particular focus on complex study designs in data intensive clinical trials. For more information, visit www.protocolfirst.com</p>
							<p class="mb-2">Dr. Levaux brings to Protocol First over 20 years of dedicated experience in clinical trial design and operations, as well as web-based technologies—notably, Senior Vice President at United BioSource Corporation (UBC), Vice President of Product Strategy at Medidata Solutions; CEO of Ninaza, a web-based EDC provider; and Senior Vice President at Quintiles Transnational. Dr. Levaux has developed and commercialized multiple eClinical technologies in EDC, IVR/RTSM, ePRO/eCOA and trial-related technologies.</p>
						</div> 
					</div>
				</div>
			</div>

		</div>
	</div>


	<div class="container pt-3">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-12 custom-list">
				<h2 class="font-weight-bold PF-TXTRED font-20 pb-2">Who Should Attend?</h2>
				<div class="row">
					<div class="col-md-6 col-sm-12 col-12">
						<ul style="list-style-type: none;">
							<li>Clinical Development Directors</li>
							<li>Clinical Project Managers</li>
							<li>Head - Clinical Operations</li>
							<li>Clinical Trials Outsourcing</li>
							<li>Clinical Country Leads</li>
							<li>Medical Affairs Directors</li>
							<li>Head - Risk Based Monitoring</li>
							<li>Head - Clinical Trials Management</li>
							<li>Clinical Oversight</li>
							<li>Clinical R&D Managers</li>
							<li>Budgeting and Outsourcing Directors</li>
						</ul>
					</div>

					<div class="col-md-6 col-sm-12 col-12">
						<ul style="list-style-type: none;">
							<li>Head - Patient Excellence</li>
							<li>Director - Medical and Regulatory Affairs</li>
							<li>Director - Feasibility</li>
							<li>Innovation Head</li>
							<li>Clinical Site Managers</li>
							<li>Biostatistician</li>
							<li>Clinical Statistics Directors</li>
							<li>Head - Early Clinical</li>
							<li>Site Managers and Directors</li>
							<li>Data Management Heads</li>
							<li>Clinical Informatics Directors</li>
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
						<form action="<?php echo e(url('protocol-first-webinar-success')); ?>" method="post" id='writemessage' >
							<?php echo e(csrf_field()); ?>

							<div class="row">
								<div class="col-md-12 mb-2">
									<div class="form-group <?php echo e($errors->first('name', 'has-error')); ?>">
										<input class="form-control" id="name" name="name" placeholder="Full Name *" required=""  value="<?php echo e(old('name')); ?>"  type="text">	
										<input type="hidden" name="type" id="type" value="ondemand-protocol-first-webinar" />
										<input type="hidden" name="formtype"  value="modal-form" />
										<input type="hidden" name="thank_message" value="Thank You for showing interest in Ondemand Protocol First Webinar.">
										<input type="hidden" name="client_message" value="Thank You for showing interest in Ondemand Protocol First Webinar.">
										<span class="help-block"><?php echo e($errors->first('name', ':message')); ?></span>
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
										<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="<?php echo e(old('email')); ?>"  type="name">
										<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group <?php echo e($errors->first('phone', 'has-error')); ?>">
										<input class="form-control" id="phone" name="phone" placeholder="Phone *" required=""  value="<?php echo e(old('phone')); ?>"  type="text">

										<span class="help-block"><?php echo e($errors->first('phone', ':message')); ?></span> 
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group <?php echo e($errors->first('job_title', 'has-error')); ?>">
										<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="<?php echo e(old('job_title')); ?>"  required="" type="text">
										<span class="help-block"><?php echo e($errors->first('job_title', ':message')); ?></span>   
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group <?php echo e($errors->first('company', 'has-error')); ?>">
										<input type="text" class="form-control" id="company" name="company" placeholder="Company Name *" value="<?php echo e(old('company')); ?>" required/>
										<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span> 
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group  <?php echo e($errors->first('country', 'has-error')); ?>">
										<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="<?php echo e(old('country')); ?>" >
											<option value="">Select Country*</option>
											<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>               	
											<option value="<?php echo e($value->title); ?>"><?php echo e($value->title); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
										</select>
										<span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>   
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group <?php echo e($errors->first('state', 'has-error')); ?>">
										<input type="text" class="form-control" id="state" name="state" placeholder="State *" value="<?php echo e(old('state')); ?>" required/>
										<span class="help-block"><?php echo e($errors->first('state', ':message')); ?></span> 
									</div>
								</div>

								<div class="col-md-12 mb-0">
									<div class="form-group">
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates">
											<label class="custom-control-label text-secondary small" for="email_updates">I would like to receive email updates about Protocol First ebinar products, services and events</label>
										</div>
										<div class="custom-control custom-checkbox mb-1">
											<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
											<label class="custom-control-label text-secondary small" for="quotation">I would like to request a quotation</label>
										</div>
										<div class="custom-control custom-checkbox mb-0">
											<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
											<label class="custom-control-label text-secondary small" for="representative">I have more questions and would like to be contacted by a Protocol First ebinar representative</label>
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
										<p class="mt-2 mb-0 text-secondary small">**Under no circumstances we will share or sell your email and contact information with any govt or private entity.</p>
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
					<h2 class="modal-title text-blue"> Registration Successful!</h2>
				</div>
				<div class="modal-body">
					<p style="color: green;"><?php echo e(session('thank_message')); ?></p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="<?php echo e(url('protocol-first-webinar')); ?>" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 


	<script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.js"></script>
	<script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>

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
	<?php if(Session('thank_message')): ?> 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	<?php endif; ?>  

	<script type="text/javascript">
		<?php if(session('thank_message')): ?>	
		$('#myModal').modal('show');
  	// for (let link of document.querySelectorAll('a[download]'))
  	// 	link.click();

  	<?php endif; ?>	  	
  </script>


<!-- 	<?php if($errors->any()): ?>
	<script type="text/javascript">	  	
		<?php if(old('formtype') == 'modal-form'): ?>	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		<?php endif; ?>  
	</script>
	<?php endif; ?>  --> 

</body>

</html>

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/webinars/protocol-first-webinar/index.blade.php ENDPATH**/ ?>