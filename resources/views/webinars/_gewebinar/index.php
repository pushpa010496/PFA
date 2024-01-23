
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

<meta property="og:image" content="<?php if(isset($siteseo['og_video'])){ echo $siteseo['og_video'];} ?>" /> 

<meta property="geo.region" content="<?php  if (isset($siteseo['meta_region'])) { echo $siteseo['meta_region']; } ?>" />

<meta property="geo.position" content="<?php if (isset($siteseo['meta_position'])) { echo $siteseo['meta_position']; } ?>" />

<meta property="ICBM" content="<?php if (isset($siteseo['meta_icbm'])) { echo $siteseo['meta_icbm']; } ?>" />

<meta property="twitter:account_id" content="" />

<meta property="og:type" content="website" />

<meta property="og:url" content="<?php echo base_url(uri_string()); ?>" />

<meta property="og:image" content="https://www.pharmafocusasia.com/pfasiaadmin/upload/promotion/webinar-toc-banner.jpg" />

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
<link href="<?php echo base_url(); ?>styles/css/datepiker.min.css" rel="stylesheet" type="text/css" />
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
<?php /*?><script src="<?php echo base_url(); ?>styles/js/jquery-2.1.1.min.js"></script>
<?php */?><!-- plugin Page Peel BujanQWOrkS 1.2 http://herukurniawan.com/2009/11/page-peel-bujanqworks-1-2-wordpress-plugin/ -->
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
  .cmb-0{
    margin-bottom: 0;
  }
   .cmb-5{
    margin-bottom: 5px;
  }
  .bg-blue{
    background-color: #1a92c4 !important;
  }
  .text-white{
    color:#ffffff !important;
  }
  /*.form-control,.form-control:focus{
        background-color: transparent;
        border: 1px solid #fafafa;
        color:#fff;
  }*/

.mt-0{
  margin-top: 0;
}
/*
::-webkit-input-placeholder {
  color: #fff !important;
}
::-moz-placeholder { 
  color: #fff !important;
}
:-ms-input-placeholder { 
  color: #fff !important;
}
:-moz-placeholder { 
  color: #fff !important;
}
input::placeholder {
  color: #fff !important;
}
*/

.b-shadow{
  /*box-shadow: 1px 1px 4px 0 rgba(0,0,0,.3);*/
  box-shadow:0 2px 4px 0 rgba(0,0,0,.1);
}
input[type="submit"]{
  padding-left: 25px;
  padding-right:25px;
}
.well{
  box-shadow: none;
}
body{
  color:#494949;
}

footer i{
   color: #f04e23;
    font-size: 17px;
    border-radius: 5px;
    transition: 500ms;
    background: #fff;
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
  footer{background-color:#f04e23 !important;color: #ccc;padding: 15px 10px 0 10px;}
  footer i:hover{
    color: #fff;
    transition: 500ms;
    background: #f04e23;
  }
     fieldset[disabled] .form-control {
    cursor: not-allowed;
    background-color: transparent;
    opacity: 0.6;
}
.PF-P0{
        padding: 0;
      }

            button.close{

            position: absolute;

            right: 5px;

          }
          .modal-backdrop.in{
            opacity: 0.9;
          }
              .modal{

                background: #000000d9 !important;

    }
     .modal-dialog{
      top:0 !important;
    }
    </style>

</head>

<body>
    <div class="container-fluid">  
      <!-- // Main Container -->      
      <div class="container">

        <div class="row">
          <div class="col-md-6">
              <img src="https://www.pharmafocusasia.com/styles/images/logo.png">
          </div>
          <div class="col-md-6 text-right gray-text">
              <p><em>Webinar Sponsored by</em>
                <img src="https://www.pharmafocusasia.com/pfasiaadmin/upload/promotion/SUEZ-logo.png" alt="SUEZ-logo" class="PF-ML10">
              </p>
          </div>
        </div>
        <div class="row">
          <!-- <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-P0 PF-MB20">
            <h1 class="pull-left PF-Bshelf PF-Caps">Advertise</h1>
          </div> -->
          <div class="PF-MT20"></div>

          <!-- // col-8 -->
          <div class="col-lg-10 col-md-offset-1 PF-MobP0">
            <div class="PF">
              <div class="header-image">
                <!-- <img src="<?php echo base_url(); ?>styles/images/webinar/westpharma-webinar-banner.jpg" alt="West Pharma Webinar" title="West Pharma Webinar" width="100%" class="img-responsive" /> -->

                <img src="https://www.pharmafocusasia.com/pfasiaadmin/upload/promotion/webinar-toc-banner.jpg" alt="West Pharma Webinar" title="West Pharma Webinar" width="100%" class="img-responsive" />
                
              </div>
              <div class="person-area">
                <div class="persons">
                  <div class="col-md-3 col-xs-12 person">
                    <div class="row">
                      <div class="media PF-BrdrDDD PF-MB20 b-shadow" align="center"> 
                          <p class="cmb-0"><strong>4th July 2018</strong></p>
                          <p class="small cmb-5"><strong>(Wednesday)</strong></p>
                          <p class="cmb-0 small">2.00 PM (IST)</p>
                          <p class="cmb-0 small">45 minutes, 15 minutes Q&A</p>
                        <img src="https://www.pharmafocusasia.com/pfasiaadmin/upload/promotion/rohit-chakravorty.jpg" alt="Kwang Kok Li" title="Kwang Kok Li" class="img-responsive img-circle PF-MT10" width="150px"/>
                        <div class="PF-PT5">
                          <p class="person-name PF-TXTRED">Rohit Chakravorty</p>
                          <p class="cmb-0">Product Application Specialist- India,</p>
                          <p class="gray-text"><em>SAARC and ASEAN</em></p>
                          <!-- <p class="PF-TXTRED">mail ID</p> -->
                        </div>                   
                      </div>                        
                    </div>
                  </div> 

                  <div class="col-md-9 col-xs-12 person">
                      <p>This webinar will walk through the process and benefits of implementing non-specific methods like Total Organic Carbon (TOC) analysis for cleaning validation (CV). We will discuss the use of TOC analysis for cleaning validation and verification, and how TOC can be an acceptable alternative to product-specific methods like HPLC for CV.</p>

                      <h3 class=""><strong>Participants will learn about:</strong></h3> 
                      <ul style="list-style-type: disc;padding-left: 20px; ">
                        <li class="PF-PB10">TOC for cleaning validation, and how non-specific methods score over specific methods.</li>
                        <li class="PF-PB10">Regulatory acceptance of TOC for cleaning validation &verification</li>
                        <li class="PF-PB10">TOC as an alternative method for CV and conversion of limits</li>
                        <li class="PF-PB10">Benefits of at-line and online sampling</li>
                        
                      </ul>
                       <a class="btn btn-lg btn-success PF-MT20" href="https://attendee.gotowebinar.com/register/523255776451953923" target="_blank" style="color:#fff;font-weight: 400">On Demand</a>
                    </div> 
                
                   
                </div>                
                <div class="clearfix"></div>

              </div>
            </div>  
          </div>
          <!-- col-8 // -->

          <!-- // col-4 --- Right -->
        <!--   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 well bg-blue"> 
            <?php if(@$_GET['message']){ ?>
              <h4 style="color:green;text-align:center;"><?php 
                $message = "Registration successfully submited";
                echo $message;
              ?></h4>
            <?php } ?> 
              <h2 class="text-center lead PF-MT0 text-white"><strong>Free Registration</strong></h2>
           <div style="color:red;text-align:center;"> <?php echo validation_errors(); ?>  </div>
              <?php $attributes = array('class' => 'email', 'id' => 'writemessage');
                  echo form_open(base_url() . 'suez-webinar', $attributes); ?> 
              <fieldset disabled>
                 <div class="form-group">
                    <input type="text" class="form-control" id="name" name="firstname" placeholder="Name *" required/>
                    <input type="hidden" value="suez-webinar" name="type" id="type" />
                  </div>
        
                 <div class="form-group">
                    <input type="email" class="form-control key-before" id="email" name="email" placeholder="Email *" required/>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone *" required />
                  </div>
                 
                 <div class="form-group">
                    <input type="job" class="form-control" id="job" name="job" placeholder="Job Title" required />
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="company" name="company" placeholder="Company *" required/>
                  </div>
                  <div class="form-group">
                    <!-- <input type="text" class="form-control" id="address" name="address" placeholder="Address *" required/> -->
                  <!--   <textarea class="form-control" id="address" rows="4" name="address" placeholder="Address *" required></textarea>
                  </div>
                 <div class="form-group">
                    <input class="form-control" type="text" name="zip" placeholder="Zip Code *" required/> 
                  </div>
                   <div class="form-group">
                    <input class="form-control" type="text" name="country" placeholder="Country *" required/> 
                  </div>
                <div class="form-group">
                   <!--  <input class="form-control" type="textarea" name="country" placeholder="May we contact you by email ? *" required/>  -->
                  <!--  <textarea class="form-control" rows="4" name="message" placeholder="May we contact you by email ? *" required></textarea>
                  </div>
                  <div class="form-group" align="center">
                    <input type="submit" value="Register Now" id="submit-button" class="btn btn-danger"/>
                  </div> -->
                
                <!-- <div class="form-group">
                  <textarea class="form-control" type="textarea" id="message" name="message" placeholder="May we contact you by email?" maxlength="140" rows="2"></textarea>
                </div>

                <div class="form-group">
                  <textarea name="address2" class="form-control"  placeholder="Address 2"></textarea>
                </div>

                <div class="form-group"> 
                  <input class="form-control" type="text" name="job_title" placeholder="Job Title *" required/> 
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="city" placeholder="City *"> 
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="state" placeholder="State *" required/>
                </div> -->
             <!--  </fieldset>
              </form>

              <div class="clearfix"></div> -->

              <!-- <p class="text-center">By signing up for this webinar, you are also subscribing to our Newsletter. Please check your inbox in 15 minutes for our <strong class="PF-TXTRED">  confirmation email!</strong>
              </p> -->

                <!-- <p class="text-left MRGN-TOP-20 PAD-LR10">OR write to us at <br/>
                <a href="mailto:advertise@pharmafocusasia.com?subject=Contact%20Pharma%20Focus%20Asia%20for%20Advertising&amp;cc=info@pharmafocusasia.com&amp;bcc=web@ochre-media.com" class="TXT-wyt">advertise@pharmafocusasia.com</a><br/>
                Call to us: <a href="tel:+914049614567" title="For Enquiries" class="TXT-wyt"> +91 40 49614567</a> </p> --> 
          <!--   </form>
          </div>
          <!-- col-4 // -->

          <!-- </div>   --> 


        
          <div class="row">
            <div class="col-md-7">
              <div class="well">
                <h2 class="PF-TXTRED mt-0"><strong>What you will learn:</strong></h2>
                <p>Participants will learn about TOC analysis for cleaning validation, and how non-specific methods score over specific methods. We will also discuss regulatory acceptance of TOC for cleaning validation &verification, replacing HPLC with TOC for CV and conversion of limits, and benefits of at-line and online sampling.</p>
                
              </div>
            </div>
            <div class="col-md-5">
                 <div class="well">
                    <h2 class="PF-TXTRED mt-0"><strong>Who should Attend:</strong></h2>
                     <ul style="list-style-type: disc;padding-left: 20px">
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
              <h3 class="PF-TXTRED PF-MT5"><strong>About - Rohit Chakravorty</strong></h3>
              <p>Rohit is an Application Specialist with SUEZ(erstwhile GE Water, GE Analytical Instruments) responsible for providing application support in India, SAARC and ASEAN region for the Sievers product line. He is responsible for helping the pharmaceutical industry become familiar with TOC applications, notably in cleaning validation and Real-Time-Release-Testing (RTRT) of pharmaceutical water. Rohit is experienced in guiding customers in successful transitions from HPLC to TOC for cleaning validation. The work involves TOC limit calculations and optimizing protocols for soluble and insoluble API.</p>
              <p>Prior to joining GE/SUEZ, Rohit was an Application Specialist for India and SAARC with Sysmex, and a Research Assistant at Sun Pharmaceutical in India handling various types of scientific instrumentation.</p>
            </div>
          </div>


         <!--  <div class="col-md-12" align="center">
              <video width="800" controls>
                <source src="<?php echo base_url(); ?>pfasiaadmin/upload/others/use-of-non-specific-methods-like-toc-for-cleaning-validation.mp4" type="video/mp4">
                Your browser does not support the video tag.
              </video> 
          </div> -->

          <div class="col-md-offset-3 col-md-6">
            <img  type="button" class="video" data-toggle="modal" data-target="#myModal" width="100%" src="<?php echo base_url(); ?>styles/images/webinar/west-pharma-video/suez-video-thumb.jpg" />
          </div>

          

                    
      </div>
      <!-- Main Container // -->

    </div>
</div>


 <footer>
  <div class="container">
          <div class="row">
                   <!-- // FOOTER-SOCIAL MEDIA -->
             
                  <div class="footer-widget">
                    
                  </div>
                  <div class="PF-MR10 PF-MB10 ft-right">
                <!--     <a href="https://www.linkedin.com/in/pharma-focus-asia/" target="_blank"><span class="linkedin PF-MR5"></span></a>

                    <a href="https://plus.google.com/+Pharmafocusasia/about" target="_blank">
                      <span class="google-plus PF-MR5"></span></a>

                    <a href="https://twitter.com/pharmafocusasia" target="_blank"><span class="twitter PF-MR5"></span></a> 

                   

                    <a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
                      <span class="facebook PF-MR5"></span></a>  -->
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
                      <div class="clearfix PF-PB10"></div>
                  </div>                                  
               
                <!-- FOOTER-SOCIAL MEDIA // --> 
          </div>   
          <div class="MRGN-10"></div> 

         
        </div>
    </footer>

<div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content PF-P0">
           
            <div class="modal-body PF-P0">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <a href="https://www.pharmafocusasia.com/westpharma-webinar" target="_blank"><img src="https://www.pharmafocusasia.com/images/west-pharma-webinar-popup.jpg" width="100%"></a> 
            </div>
          
          </div>
        </div>
      </div>


    <!-- Modal -->
      <div class="modal  fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
            
              <h4 class="modal-title">Enter Your Details</h4>
            </div>
            <div class="modal-body">

              <div class="row">
                  <form action="<?php echo base_url().'suez-webinar-video-success'?>" class="email" id="register" method="post">
                  <input value="suez-webinar" name="type" id="type" type="hidden">

                    <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                    
                  <input class="form-control" id="name" name="fullname" placeholder="Name*" required="" type="text" value="<?php echo set_value('fullname'); ?>">
                  <?php echo form_error('fullname','<div style="color:red;">','</div>');?>

     
                </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group">
                  <input class="form-control" id="email" name="email" placeholder="Email*" required="" type="email" value=" <?php echo set_value('email'); ?>">
                  <?php echo form_error('email','<div style="color:red;">','</div>');?>
                </div>
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group ">
                  <input class="form-control" id="subject" name="telephone" placeholder="Telephone*" required="" type="tel" value="<?php echo set_value('telephone'); ?>"> 
                  <?php echo form_error('telephone','<div style="color:red;">','</div>');?> 
                  </div>          
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group ">
                    <input class="form-control" id="company" name="company" placeholder="Company*" required="" type="text" value="<?php echo set_value('company'); ?>" >
                    <?php echo form_error('company','<div style="color:red;">','</div>');?>  
                  </div>          
                </div>
                <div class="col-md-12 col-sm-12">
                  <div class="form-group ">
                    <input class="form-control" id="job_title" name="job_title" placeholder="Job Title*" required="" type="text" value="<?php echo set_value('job_title'); ?>"> 
                    <?php echo form_error('job_title','<div style="color:red;">','</div>');?> 
                  </div>          
                </div>

                <div class="col-md-12 col-sm-12">
                  <div class="form-group ">
                  <input class="form-control" name="country" placeholder="Country" type="text"  required="" value="<?php echo set_value('country'); ?>"> 
                  <?php echo form_error('country','<div style="color:red;">','</div>');?>
                </div>            
                </div>

                <div class="col-md-6 col-sm-6">
                  <div class="form-group ">
                  <button type="submit" id="submit-button" class="btn btn-danger PF-MB10">Submit </button>
                  </div>
                </div>
                <div class="col-md-6 text-right">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </form>
              </div>
            </div>          
          </div>
        </div>
      </div>

      <!-- modal end -->
<!-- main container --> 
<a href="#0" class="cd-top">TOP</a> 

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->




<script src="<?php echo base_url(); ?>styles/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>styles/js/pf-scripts.js"></script>
<script src="<?php echo base_url(); ?>styles/js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">
$(function() {
var date = new Date();
var currentMonth = date.getMonth();
var currentDate = date.getDate();
var currentYear = date.getFullYear();
$('#startdate').datepicker({
minDate: new Date(currentYear, currentMonth, currentDate),
dateFormat: "yy-mm-dd"
});
$('#enddate').datepicker({
minDate: new Date(currentYear, currentMonth, currentDate),
dateFormat: "yy-mm-dd"
});
});
</script>
<script type="text/javascript"> 
      
//      jQuery(document).ready(function($){
      
 
// if (sessionStorage.getItem('advertOnce') !== 'true') {
// $('#myModal1').modal({backdrop: 'static', keyboard: false});
// sessionStorage.setItem('advertOnce','true');
// }
 
// });
    </script>
<script type="text/javascript">

  //error validation
      <?php
        if(validation_errors() != false) {
           echo "$('#myModal').modal('show')";  
       }
      ?>
</script>
</body>

</html>

