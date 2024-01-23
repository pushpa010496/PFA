<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Total Organic Carbon analysis for cleaning validation – Suez Webinar</title>

	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">
	<link rel="canonical" href="{{url('suez-webinar')}}" />

	<!-- Meta Tags -->
	<meta name="description" content="This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV)." />
	<meta name="keywords" content="Total Organic Carbon analysis for cleaning validation, Total Organic Carbon analysis, TOC Analysis, TOC for cleaning validation, TOC analysis for cleaning validation" />
	<meta property="og:title" content="Total Organic Carbon analysis for cleaning validation – Suez Webinar" />
	<meta property="og:description" content="This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV)." />

	<meta property="og:Keywords" content="Total Organic Carbon analysis for cleaning validation, Total Organic Carbon analysis, TOC Analysis, TOC for cleaning validation, TOC analysis for cleaning validation" />

	<meta property="og:image" content="{{ config('app.url') }}promotion/webinar-toc-banner.jpg" /> 

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('suez-webinar')}}" />

	<meta property="og:image" content="{{ config('app.url') }}promotion/webinar-toc-banner.jpg" />

	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">
	<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">   -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet"> 

	<!--AS per Basco& sudhakar Canonical -->


<style type="text/css">
	body{
		background-color: #ccc;
	}
</style>
</head>

<body> 
<div class="container-fluid">  
    <!-- // Main Container -->      
    <div class="container">
      <div class="row">
      <div class="col-md-8 offset-md-2 mt-4">
          <video width="100%" controls autoplay>
              <source src="{{config('app.url')}}webinars/use-of-non-specific-methods-like-toc-for-cleaning-validation.mp4" type="video/mp4">
            </video>
      </div>
    </div> 
  </div>
</div>

	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>


	@if(Session('thank_message')) 
	<script type="text/javascript">	  	
		$('#successModal').modal('show');
	</script>

	@endif  
	@if($errors->any())
	<script type="text/javascript">	  	
		@if(old('formtype') == 'modal-form')	
			$(document).ready(function(){ 
				$('#videoFormModal').modal('show'); 
			});   		
		@endif  
	</script>
	@endif  



</body>

</html>

