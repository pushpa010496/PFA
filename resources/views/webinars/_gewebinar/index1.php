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

 <!-- <meta property="og:image" content="https://www.pharmafocusasia.com/styles/images/webinar/westpharma-webinar-banner.jpg" />  -->
 <meta property="og:image" content="https://www.pharmafocusasia.com/images/west-pharma-webinar-popup.jpg" /> 

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

  <style type="text/css">
    .person-area {
        background: #fff none repeat scroll 0 0;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
        padding: 25px;
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
    /*footer{background-color:#f04e23 !important;color: #ccc;padding: 15px 10px 0 10px;}*/
    footer i:hover{
      color: #fff;
      transition: 500ms;
      background: #f04e23;
    }
    .modal-dialog{
      top:0 !important;
    }
  </style>

</head>

<body>
     <div class="container-fluid PF-Slider-Offset PF-MobP0">  
      <!-- // Main Container -->      
      <div class="container">
        <div class="row">
          <div class="col-md-6">
              <img src="https://www.pharmafocusasia.com/styles/images/logo.png" class="img-responsive">
          </div>
          <div class="col-md-6 PF-PT10 text-right gray-text">
              <p><em>Webinar Sponsored by</em>
                <img src="<?php echo base_url(); ?>/styles/images/west-pharma-logo.jpg" alt="West Pharma" class="img-responsive PF-PL10" width="150">
              </p>
          </div>
        </div>


        <div class="row">
          <!-- <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-P0 PF-MB20">
            <h1 class="pull-left PF-Bshelf PF-Caps">Advertise</h1>
          </div> -->
          <div class="PF-MT10"></div>

          <!-- // col-8 -->
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1 PF-PL0 PF-MobP0">
            <div class="PF-BrdrDDD PF">
              <div class="header-image">
                <img src="<?php echo base_url(); ?>styles/images/webinar/westpharma-webinar-banner.jpg" alt="West Pharma Webinar" title="West Pharma Webinar" width="100%" class="img-responsive" />
              </div>
              <div class="person-area">
                <div class="PF-MB20">
                  <h1 class="audience-title PF-MT0 PF-TXTRED">West Pharma Webinar</h1>
                  <h2 class="date-meta">Wednesday, 1<sup>st</sup> August 2018<h2> 
                  <p>14:00 (Singapore) <span class="PF-PL10 PF-PR10">|</span> 11:30 (India) <span class="PF-PL10 PF-PR10">|</span> 16:00 (Australia)</p>
                </div>

                <div class="persons">
                  <div class="col-md-3 col-xs-12 person">
                    <div class="row">
                      <div class="media PF-BGf7f7f7 PF-BrdrDDD PF-MB20" align="center"> 
                        <img src="<?php echo base_url(); ?>styles/images/webinar/kwang-kok-li.jpg" alt="Kwang Kok Li" title="Kwang Kok Li" class="img-responsive img-circle PF-MT10" width="100%"/>
                        <div class="PF-PT5">
                          <p class="person-name PF-TXTRED">Kwang Kok Li</p>
                          <p class="gray-text">Manager for TCS</p>
                          <p class="gray-text">Generics Mkt & AP</p>
                          <!-- <p class="PF-TXTRED">mail ID</p> -->
                        </div>                   
                      </div>                        
                    </div>
                  </div> 

                  <div class="col-md-9 col-xs-12 person">
                      <!-- <p>West Pharma Webinar will provide an insight on Extractables and Leachables (E&L) and the best practices that support customer's requirements.</p>
                      <p>With this webinar, pharmaceutical manufacturers can gain a better understanding that helps to ensure regulatory compliances.</p>
                      <p>Join us for our webinar that provides insightful discussion on E&L.</p> -->

                      <p>Join West expert Kwang Kok Li for an insightful discussion on Extractables and Leachables (E&L) and the best practices to support customer requirements. With this webinar, pharmaceutical manufacturers will gain a better understanding of regulatory compliance issues associated with E&L.
                      </p>

                      <p>
                      Register now to join our discussion and learn how to develop a robust E&L program for your drug product.
                      </p>

                      <h3 class="PF-TXTRED PF-MT5"><strong>Highlights:</strong></h3> 
                      <ul>
                        <li class="PF-PB10"><span class="glyphicon glyphicon-hand-right PF-PR10"></span>Learn how West can contribute to your drug's success</li>
                        <li class="PF-PB10"><span class="glyphicon glyphicon-hand-right PF-PR10"></span>Examples of best practices</li>
                        <li class="PF-PB10"><span class="glyphicon glyphicon-hand-right PF-PR10"></span>Factors influencing E&L profiles</li>
                        <li class="PF-PB10"><span class="glyphicon glyphicon-hand-right PF-PR10"></span>Guiding principles in conducting E&L studies</li>
                        <li><span class="glyphicon glyphicon-hand-right PF-PR10"></span>Importance of E&L to drug development</li>
                      </ul>
                    </div> 

                    <div class="col-md-12">
                      <h3 class="PF-TXTRED PF-MT5"><strong>Speaker's Biography:</strong></h3>
                      <p>Associated with West Pharmaceutical Services Singapore since 10 years, Kok Li has been involved in the technical support of customers in the Asia Pacific. To address technical issues, she works closely with customers and provides solutions to accelerate customer's time to market.</p>
                    </div>

                   <!--  <div class="col-md-12" align="center">
                      <video width="800" controls>
                        <source src="<?php echo base_url(); ?>pfasiaadmin/upload/others/west-pharma-webina.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video> 
                    </div> -->
                     <div class="col-xs-12">
                  <img  type="button" class="video" data-toggle="modal" data-target="#myModal" width="100%" src="<?php echo base_url(); ?>styles/images/webinar/west-pharma-video/west-video-thumb.jpg" />
                </div>

                </div>                
                <div class="clearfix"></div>

              </div>
            </div>  
          </div>
          <!-- col-8 // -->

          <!-- // col-4 --- Right -->
          <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">  -->
            <!-- <a href="https://register.gotowebinar.com/register/2866446997191455490" target="_blank"><img src="https://www.pharmafocusasia.com/images/webinar-banner.jpg" width="100%"></a> -->
            <!-- <?php if(@$_GET['message']){ ?>
              <h4 style="color:green;text-align:center;"><?php 
                $message = "Registration successfully submited";
                echo $message;
              ?></h4>
            <?php } ?> 
              <h2 class="text-center lead PF-MT0"><strong>Free Webinar </strong></h2>
              <div style="color:red;text-align:center;"> <?php echo validation_errors(); ?>  </div>
              <?php $attributes = array('class' => 'email', 'id' => 'writemessage');
                  echo form_open(base_url() . 'westpharma-webinar', $attributes); ?>         
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="firstname" placeholder="First Name *" required/>
                  <input type="hidden" value="Westpharma-webinar" name="type" id="type" />
                </div>
      
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name *" required/>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" name="company" placeholder="Company *" required/>
                </div>
                
                

                <div class="form-group">
                  <input class="form-control" type="text" name="zip" placeholder="Zip Code *" required/> 
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="country" placeholder="Country *" required/> 
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email *" required/>
                </div>

                <div class="form-group">
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone *" required/>
                </div>
                
              

                <div class="form-group" align="center">
                  <input type="submit" value="Register Now" id="submit-button" class="btn btn-block btn-danger"/>
                </div>
              </form>

              <div class="clearfix"></div>

             
            </form> -->
          <!-- </div> -->
          <!-- col-4 // -->

          </div> 
      </div>
      <!-- Main Container // -->
      <div class="PF-PB20"></div>

      
    </div>

    <footer>
        <div class="container">
                <div class="row">
                 
                  <div class="col-md-6 PF-PT10">
                    <div class="footer-widget">
                      <p>&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
                    </div>
                  </div>

                  <!-- // FOOTER-SOCIAL MEDIA -->
                  <div class="col-md-6 PF-PT10">
                    <div class="PF-MR10 ft-right footer-widget">                   
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


    <!-- Modal -->
      <div class="modal  fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
            
              <h4 class="modal-title">Enter Your Details</h4>
            </div>
            <div class="modal-body">

              <div class="row">
                  <form action="<?php echo base_url().'westpharma-webinar-video-success'?>" class="email" id="register" method="post">
                  <input value="Westpharma-webinar" name="type" id="type" type="hidden">

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
                  <input class="form-control" name="country" placeholder="Country"  required="" type="text" value="<?php echo set_value('country'); ?>"> 
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
<!--   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>  --> 

  <script type="text/javascript" src="<?php echo base_url(); ?>styles/js/jquery.validate-1.14.0.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>styles/js/jquery-validate.bootstrap-tooltip.min.js"></script>

    <script type="text/javascript">

      $(document).ready(function() {
        $("#contact-form").validate({
          rules: {
            email: {
              email: true,
              required: true
            },
            fullname: {
              required: true
            },
        company:{required: true},
              telecode: { required: true },
              telephone:{required:true},
              country:{required:true}
            },

        messages: {
                  fullname: "Please Enter FullName",
                   email: {
                    email: "Please Enter Valid Mailid",
                    required: "Please Enter Mailid"
                  },
                  company:"Please Enter Company",
                  telecode:"Please Enter Telecode",
                  telephone:"Please Enter Telephone Number",
                  country:"Please Select Country"
                },
                tooltip_options: {
                  email: {
                    trigger: 'focus'
                  },
                  fullname: {
                    /*placement: 'left',*/
                    html: true
                  },
                  company: {
                    html: true
                  },
                   telecode: {
                    /*placement: 'left',*/
                    html: true
                  },
                   telephone: {
                    html: true
                  },
                   country: {
                    html: true,
                     /*placement: 'bottom'*/
                  }
                },
                invalidHandler: function(form, validator) {
                  $("#validity_label").html('<div class="alert alert-danger">There be ' + validator.numberOfInvalids() + ' error' + (validator.numberOfInvalids() > 1 ? 's' : '') + ' here.  OH NOES!!!!!</div>');
                }
              });
            });
    </script>     

    <script src="<?php echo base_url(); ?>styles/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>styles/js/pf-scripts.js"></script>
    <script src="<?php echo base_url(); ?>styles/js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">

  //error validation
      <?php
        if(validation_errors() != false) {
           echo "$('#myModal').modal('show')";  
       }
      ?>
</script>
</body>

<html>    