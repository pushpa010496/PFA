<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Total Organic Carbon analysis for cleaning validation – Suez Webinar</title>

	<link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>/images/favicon.ico" type="image/x-icon">
	<link rel="canonical" href="<?php echo e(url('suez-webinar')); ?>" />

	<!-- Meta Tags -->
	<meta name="description" content="This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV)." />
	<meta name="keywords" content="Total Organic Carbon analysis for cleaning validation, Total Organic Carbon analysis, TOC Analysis, TOC for cleaning validation, TOC analysis for cleaning validation" />
	<meta property="og:title" content="Total Organic Carbon analysis for cleaning validation – Suez Webinar" />
	<meta property="og:description" content="This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV)." />

	<meta property="og:Keywords" content="Total Organic Carbon analysis for cleaning validation, Total Organic Carbon analysis, TOC Analysis, TOC for cleaning validation, TOC analysis for cleaning validation" />

	<meta property="og:image" content="<?php echo e(config('app.url')); ?>promotion/webinar-toc-banner.jpg" /> 

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="<?php echo e(url('suez-webinar')); ?>" />

	<meta property="og:image" content="<?php echo e(config('app.url')); ?>promotion/webinar-toc-banner.jpg" />

	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

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
	  padding-left: 18px;
	  padding-right: 18px;
	  text-align: left;
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
	  /*box-shadow: 1px 1px 4px 0 rgba(0,0,0,.3);*/
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
    </style>

</head>

<body> 
<?php if(view()->exists('webinars.banner')): ?>
       <?php echo $__env->make('webinars.banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>

	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<img src="<?php echo e(config('app.url')); ?>images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-md-4 offset-lg-5 pt-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="<?php echo e(config('app.url')); ?>webinars/suezwebinar/suez-logo.png" alt="suez" class="ml-2 img-fluid" width="">
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<!-- // Main Container -->      
	<div class="container">		
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-12 offset-lg-1 offset-md-1 border bg-light pt-4">
				<div class="text-center">
					<img src="<?php echo e(config('app.url')); ?>webinars/suezwebinar/webinar-toc-banner.jpg" alt="suez" title="suez" class="img-fluid shadow" />
				</div>

	            <div class="pt-4">
	                <div class="row">
                  		<div class="col-lg-3 col-12 person">
	                      	<div class="PF-BrdrDDD mb-4 b-shadow bg-white" align="center"> 
								<h2 class="mb-0 pt-2"><strong>4th July 2018</strong></h2>
								<p class="small mb-1"><strong>(Wednesday)</strong></p>
								<p class="mb-0 small">2.00 PM (IST)</p>
								<p class="mb-0 small">45 minutes, 15 minutes Q&A</p>

	                        	<img src="<?php echo e(config('app.url')); ?>webinars/suezwebinar/1549268400-rohit-chakravorty.jpg" alt="Rohit Chakravorty" title="Rohit Chakravorty" class="img-fluid rounded-circle pt-2" />
		                        <div class="pt-1">
		                          <p class="person-name PF-TXTRED mb-0">Rohit Chakravorty</p>
		                          <p class="mb-0">Product Application Specialist- India,</p>
		                          <p class="gray-text mb-2"><em>SAARC and ASEAN</em></p>
		                        </div>                   
	                      	</div>  
                  		</div> 

	                  	<div class="col-lg-9 col-12 person">
	                      <p>This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV). We will discuss the use of TOC analysis for cleaning validation and verification, and how TOC can be an acceptable alternative to product-specific methods like HPLC for CV.</p>

	                      <h3><strong>Participants will learn about:</strong></h3> 
	                      <ul style="list-style-type: disc;padding-left: 20px; ">
	                        <li class="PF-PB10">TOC for cleaning validation, and how non-specific methods score over specific methods.</li>
	                        <li class="PF-PB10">Regulatory acceptance of TOC for cleaning validation &verification</li>
	                        <li class="PF-PB10">TOC as an alternative method for CV and conversion of limits</li>
	                        <li class="PF-PB10">Benefits of at-line and online sampling</li>
	                        
	                      </ul>
	                     <!--   <a class="btn btn-lg btn-success PF-MT20" href="https://attendee.gotowebinar.com/register/523255776451953923" target="_blank" style="color:#fff;font-weight: 400">On Demand</a> -->
	                    </div> 
	                </div>               
	                <div class="clearfix"></div>
	             </div> 
	        </div>
		</div>
	</div>

	<div class="container pt-4">	
		<div class="row">
	        <div class="col-md-7 mb-3">
	        	<div class="bg-light border p-3">
	            <h2 class="PF-TXTRED mt-0"><strong>What you will learn:</strong></h2>
	            <p class="mb-0">Participants will learn about TOC analysis for cleaning validation, and how non-specific methods score over specific methods. We will also discuss regulatory acceptance of TOC for cleaning validation &verification, replacing HPLC with TOC for CV and conversion of limits, and benefits of at-line and online sampling.</p>
	          </div>
	        </div>
	        <div class="col-md-5 mb-3">
	             <div class="bg-light border p-3">
	                <h2 class="PF-TXTRED mt-0"><strong>Who should Attend:</strong></h2>
	                 <ul class="mb-0" style="list-style-type: disc;padding-left: 20px">
	                  <li class="">QA personnel in the Pharmaceutical Industry</li>
	                  <li class="">QC personnel in the Pharmaceutical Industry</li>
	                  <li class="">Validation personnel in the Pharmaceutical Industry</li>
	                  <li class="">Operations personnel in the Pharmaceutical Industry</li>
	                </ul>
	             </div>
	        </div>
	    </div>
                 
		<div class="row">
			<div class="col-md-12">
			  <h2 class="PF-TXTRED mt-2"><strong>About - Rohit Chakravorty</strong></h2>
			  <p>Rohit is an Application Specialist with SUEZ(erstwhile GE Water, GE Analytical Instruments) responsible for providing application support in India, SAARC and ASEAN region for the Sievers product line. He is responsible for helping the pharmaceutical industry become familiar with TOC applications, notably in cleaning validation and Real-Time-Release-Testing (RTRT) of pharmaceutical water. Rohit is experienced in guiding customers in successful transitions from HPLC to TOC for cleaning validation. The work involves TOC limit calculations and optimizing protocols for soluble and insoluble API.</p>
			  <p>Prior to joining GE/SUEZ, Rohit was an Application Specialist for India and SAARC with Sysmex, and a Research Assistant at Sun Pharmaceutical in India handling various types of scientific instrumentation.</p>
			</div>
		</div>

		<div class="offset-lg-3 col-lg-6 pb-3">
			<img type="button" class="video img-fluid" data-toggle="modal" data-target="#videoFormModal" src="<?php echo e(config('app.url')); ?>webinars/suezwebinar/suez-video-thumb.jpg" />
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
						<a href="https://www.linkedin.com/in/pharma-focus-asia/" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a href="https://plus.google.com/+Pharmafocusasia/about" target="_blank">
							<i class="fa fa-google-plus"></i>
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


	<div id="successModalold" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue">Thank You</h2>
				</div>
				<div class="modal-body">
					<p>Registration successful. Thank you for your interest in  Zebra Healthcare Webinar 2019.</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">        
					<a class="btn btn-primary" role="button" type="button" class="close" data-dismiss="modal" aria-expanded="false">
						Close
					</a>          
				</div>
			</div>
		</div>
	</div>


	<div id="videoFormModal" class="modal fade" role="dialog">
		<div class="modal-dialog ">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue">Enter Your Details</h2>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
				</div>
				<div class="modal-body">
					<form action="<?php echo e(url('suez-webinar-success')); ?>" method="post" id='writemessage' >
							<?php echo e(csrf_field()); ?>					
							<div class="row">
								<div class="col-md-6">
									<div class="form-group <?php echo e($errors->first('name', 'has-error')); ?>">
										<input class="form-control" id="name" name="name" placeholder="name *" required=""  value="<?php echo e(old('name')); ?>"  type="text">	
										<input type="hidden" name="type" id="type" value="suez-webinar-video" />
										<input type="hidden" name="formtype"  value="modal-form" />
										<span class="help-block"><?php echo e($errors->first('name', ':message')); ?></span>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group <?php echo e($errors->first('lastname', 'has-error')); ?>">
										<input class="form-control" id="lastname" name="lastname" placeholder="Last name *" required=""  value="<?php echo e(old('lastname')); ?>"  type="text">

										<input type="hidden" class="form-control" id="traficfrom" name="traficfrom" placeholder="traficfrom*" value="<?php echo e(request()->segment(2)); ?>" />
										<span class="help-block"><?php echo e($errors->first('lastname', ':message')); ?></span>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">
										<input class="form-control" id="email" name="email" placeholder="Business Email *" required=""  value="<?php echo e(old('email')); ?>"  type="name">
										<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
									</div>
								</div>

								<div class="col-md-6 <?php echo e($errors->first('phone', 'has-error')); ?>">
									<div class="form-group">
										<input class="form-control" id="phone" name="phone" placeholder="Telephone *" required=""  value="<?php echo e(old('phone')); ?>"  type="text">
										<span class="help-block"><?php echo e($errors->first('phone', ':message')); ?></span>  

									</div>
								</div>
							</div>							

							<div class="row">
								<div class="col-md-6">
									<div class="form-group <?php echo e($errors->first('job_title', 'has-error')); ?>">
											<input class="form-control" id="job_title" name="job_title" placeholder="Job Title *"  value="<?php echo e(old('job_title')); ?>"  required="" type="text">
											<span class="help-block"><?php echo e($errors->first('job_title', ':message')); ?></span>   
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group <?php echo e($errors->first('company', 'has-error')); ?>">
										<input type="text" class="form-control" id="company" name="company" placeholder="Company *" value="<?php echo e(old('company')); ?>" required/>
										<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span> 
									</div>
								</div>
							</div>
							<div class="form-group  <?php echo e($errors->first('country', 'has-error')); ?>">								
								<select class="form-control" id="" name="country" placeholder="Select Location*" required=""  value="<?php echo e(old('country')); ?>" >
									<option value="">Select Location*</option>
									<?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>               	
									<option value="<?php echo e($value->title); ?>"><?php echo e($value->title); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
								</select>
								<span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>   
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="email_updates" value="Yes" id="email_updates" checked>
										<label class="custom-control-label" for="email_updates">I would like to receive email updates</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label" for="quotation">I would like to request a quotation</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="representative" value="Yes" id="representative">
										<label class="custom-control-label" for="representative">I have more questions and would like to be contacted</label>
									</div>
								</div>
							</div>
						

							<div class="row">
								<div class="col-md-6">
									<!-- <a class="btn btn-primary text-white" role="button" type="button" class="close" data-dismiss="modal" aria-expanded="false">
										Close
									</a>  -->     
								</div>
								<div class="col-md-6">
									<div class="form-group mb-1" align="right">
										<input type="submit" value="Submit" id="submit-button" class="btn btn-danger"/>
									</div>
								</div>
							</div>
					</form>
				</div>				
			</div>
		</div>
	</div>



	<div id="successModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">				
				<div class="modal-body">
					<video id='my-video' class='video-js' controls preload='auto' style="width:100%; height:auto;" 
					poster="<?php echo e(config('app.url')); ?>webinars/suezwebinar/suez-video-thumb.jpg" data-setup='{}'>
						<source src="<?php echo e(config('app.url')); ?>webinars/suezwebinar/use-of-non-specific-methods-like-toc-for-cleaning-validation.mp4" type='video/mp4'>
						
					</video>
				</div>				
			</div>
		</div>
	</div>


	<script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.js"></script>
	<script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>

 <script src='https://vjs.zencdn.net/7.4.1/video.js'></script>

	<?php if(Session('thank_message')): ?> 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	<?php endif; ?>  
	<?php if($errors->any()): ?>
	<script type="text/javascript">	  	
		<?php if(old('formtype') == 'modal-form'): ?>	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		<?php endif; ?>  
	</script>
	<?php endif; ?>  

</body>

</html>

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/webinars/suezwebinar/index.blade.php ENDPATH**/ ?>