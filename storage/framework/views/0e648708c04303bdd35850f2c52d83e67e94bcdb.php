<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php echo e(config('app.url')); ?>/images/favicon.ico" type="image/x-icon">

	<title>Use cases of digitization in pharma & MES implementation in the Cloud </title>
	<!-- Meta Tags -->
	<meta name="description" content="The COVID-19 pandemic has forced pharma and healthcare industry worldwide to adopt digitization in order to become more resilient in these challenging times." />
	<meta name="keywords" content="" />

	<meta property="og:title" content="Use cases of digitization in pharma & MES implementation in the Cloud" />
	<meta property="og:description" content="The COVID-19 pandemic has forced pharma and healthcare industry worldwide to adopt digitization in order to become more resilient in these challenging times." />
	<meta property="og:Keywords" content="" />

	<meta property="og:image" content="<?php echo e(config('app.url')); ?>webinars/korber/korber-og-img.jpg" />

	<link rel="canonical" href="<?php echo e(url('korber-pharma-webinar')); ?>"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />
f
	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="<?php echo e(url('korber-pharma-webinar')); ?>" />
	
	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/font-awesome.min.css"> 
	<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/custom-styles.css">
	<!-- <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/latest-styles.css">   -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 

	<!--AS per Basco& sudhakar Canonical -->


<style type="text/css">
	body{
		background-color: #ccc;
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
</head>

<body> 
<div class="container-fluid">  
    <!-- // Main Container -->      
    <div class="container">
      <div class="row">
      <div class="col-md-8 offset-md-2 mt-4">
          <video width="100%" controls autoplay>
              <source src="https://industry.pharmafocusasia.com/webinars/korber/on-demand.mp4" type="video/mp4">
            </video>
      </div>
    </div> 
  </div>
</div>

	<script src="<?php echo e(config('app.url')); ?>js/jquery-3.3.1.js"></script>
	<script src="<?php echo e(config('app.url')); ?>js/popper.min.js" crossorigin="anonymous"></script>
	<script src="<?php echo e(config('app.url')); ?>js/bootstrap.min.js" crossorigin="anonymous"></script>


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

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/webinars/korberpharma-webinar/videosuccess.blade.php ENDPATH**/ ?>