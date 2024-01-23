  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml" lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="language" content="english" /> 
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-91608244-2', 'auto');
      ga('send', 'pageview');

    </script>


    <?php

    $page = "home";

    if ($this -> uri -> segment(1) != '') {

     $page = $this -> uri -> segment(1);

   }

   $siteseo = siteseo($page);

   ?>

   <title><?php if(isset($siteseo['meta_title'])){echo $siteseo['meta_title'];} ?></title>

   <!-- Meta Tags -->

   <meta name="description" content="<?php if(isset($siteseo['meta_description'])){ echo $siteseo['meta_description'];} ?>" />

   <meta name="keywords" content="<?php if(isset($siteseo['meta_keywords'])){ echo $siteseo['meta_keywords'];} ?>" />

   <meta property="og:title" content="<?php if(isset($siteseo['og_title'])){echo $siteseo['og_title'];} ?>" />

   <meta property="og:description" content="<?php if(isset($siteseo['og_description'])){ echo $siteseo['og_description'];} ?>" />

   <meta property="og:Keywords" content="<?php if(isset($siteseo['og_keywords'])){ echo $siteseo['og_keywords'];} ?>" />


   <meta property="geo.region" content="<?php  if (isset($siteseo['meta_region'])) { echo $siteseo['meta_region']; } ?>" />

   <meta property="geo.position" content="<?php if (isset($siteseo['meta_position'])) { echo $siteseo['meta_position']; } ?>" />

   <meta property="ICBM" content="<?php if (isset($siteseo['meta_icbm'])) { echo $siteseo['meta_icbm']; } ?>" />

   <meta property="twitter:account_id" content="" />

   <meta property="og:type" content="website" />

   <meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />

   <meta property="og:image" content="" /> 

   <meta property="og:site_name" content="Pharma Focus Asia" />

   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

   <meta name="robots" content="index, follow" />

   <meta name="revisit-after" content="1 days" />

   <meta name="viewport" content="width=device-width" />

   <meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

   <link rel="shortcut icon" href="<?php echo base_url(); ?>styles/images/favicon.ico" type="image/x-icon">

   <link href="<?php echo base_url(); ?>styles/css/custom.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
   <link href="<?php echo base_url(); ?>styles/css/pfstyles.min.css" rel="stylesheet" type="text/css" />
   <!-- <link href="<?php //echo base_url(); ?>styles/css/datepiker.min.css" rel="stylesheet" type="text/css" /> -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <!--AS per Basco& sudhakar Canonical -->
   <link rel="canonical" href="<?php echo base_url(uri_string()); ?>" />

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

  <script src="<?php echo base_url(); ?>styles/js/jquery-2.1.3.min.js"></script> 

  <style type="text/css">
  body{
    background-color: #545353;
  }


.bullet ul li{list-style-type: disc;padding-bottom: 5px;}
.orng-strip-bg{background-color: #EE3134;border-bottom: 5px solid #CC0000;color: #fff;}
</style>

</head>

<body>
<div class="container-fluid">  
    <!-- // Main Container -->      
    <div class="container">

      <div class="row">

      <div class="col-md-6 col-md-offset-3 PF-MT20">
            <video width="100%" controls autoplay>
              <source src="<?php echo base_url(); ?>pfasiaadmin/upload/others/use-of-non-specific-methods-like-toc-for-cleaning-validation.mp4" type="video/mp4">
            </video>
      </div>

    </div> 
  </div>



</div>





<script src="<?php echo base_url(); ?>styles/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>styles/js/pf-scripts.js"></script>


</body>

<html>                    