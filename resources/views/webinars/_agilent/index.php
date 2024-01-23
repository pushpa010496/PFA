
<!-- <link href="<?php echo base_url(); ?>styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
 
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
      font-size: 16px;
      font-weight: 600;
      color: #555;
  }

  .modal-dialog{
  top:10% !important; 
}
.video{
  cursor: pointer;
}



</style>

    <div class="container-fluid PF-Slider-Offset PF-MobP0">  
      <!-- // Main Container -->      
      <div class="container">
        <div class="row">
          <!-- <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-P0 PF-MB20">
            <h1 class="pull-left PF-Bshelf PF-Caps">Advertise</h1>
          </div> -->
          <div class="PF-MT20"></div>
          <!-- // col-4 --- Right -->
          <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 well"> 
          	<?php if(@$_GET['message']){ ?>
            	<h4 style="color:green;text-align:center;"><?php 
      					$message = "Registration successfully submited";
      					echo $message;
      				?></h4>
            <?php } ?> 
              <h2 class="text-center lead PF-MT0"><strong>Register Now</strong></h2>
       		 <div style="color:red;text-align:center;"> <?php echo validation_errors(); ?>  </div>
              <?php $attributes = array('class' => 'email', 'id' => 'writemessage');
                  echo form_open(base_url() . 'agilent-webinar', $attributes); ?>         
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="firstname" placeholder="First Name *" required/>
                  <input type="hidden" value="agilent-webinar" name="type" id="type" />
                </div>
      
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name *" required/>
                </div>
                <div class="form-group"> 
                  <input class="form-control" type="text" name="job_title" placeholder="Job Title *" required/> 
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" id="" name="company" placeholder="Company *" required/>
                </div>
                <div class="form-group">
                  <textarea name="address1" class="form-control"  placeholder="Address 1"></textarea>
                </div>
                <div class="form-group">
                  <textarea name="address2" class="form-control"  placeholder="Address 2"></textarea>
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="city" placeholder="City *"> 
                </div>

                <div class="form-group">
                  <input class="form-control" type="text" name="state" placeholder="State *" required/>
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
                  <input type="tel" class="form-control" id="phone" name="phone" placeholder="Work Phone *" required/>
                </div>
                
                <div class="form-group">
                  <textarea class="form-control" type="textarea" id="message" name="message" placeholder="May we contact you by email?" maxlength="140" rows="2"></textarea>
                </div>

                <div class="form-group" align="center">
                  <input type="submit" value="Register Now" id="submit-button" class="btn btn-block btn-danger"/>
                </div>
              </form>

              <div class="clearfix"></div>

              <p class="text-center">By signing up for this webinar, you are also subscribing to our Newsletter. Please check your inbox in 15 minutes for our <strong class="PF-TXTRED">  confirmation email!</strong>
              </p>
            </form>
          </div> -->

          <!-- col-4 // -->


          <!-- // col-8 -->
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-sm-offset-1 PF-PR0 PF-MobP0">
            <div class="PF-BrdrDDD PF">
              <div class="header-image">
                <img src="<?php echo base_url(); ?>styles/images/webinar/agilent-banner.jpg" alt="Agilent Technologies" title="Agilent Technologies" width="100%" class="img-responsive" />
              </div>
              <div class="person-area">
                  <div class="PF-MB20">
                      <h1 class="audience-title PF-MT0 PF-TXTRED">Rapid, Powerful Techniques to Address Peptide Mapping Challenges in the Biopharma Industry</h1>
                     <p class="date-meta">Tuesday, 13<sup>th</sup> February 2018, &nbsp; 2 PM Singapore Standard Time</p>
                  </div>

  
                  <!-- <div align="center" class="PF-MT20 PF-MB20">
                    <a class="btn btn-primary" href="https://www.anymeeting.com/Ochre-Media/E956D686894739" role="button" target="_blank">View on-demand version</a>
                  </div> -->


                  <div class="PF-PB20">
                    <p>This webinar will walk through the process and benefits implementing the use of Total Organic Carbon (TOC) in Pharmaceutical. We will talk through the use of TOC analysis in Pharmaceutical water, for performing Cleaning Validation, Replacing HPLC with TOC for CV, for checking the extractable and leachable organics from Plastics used in packaging of pharmaceutical products.</p>

                    <p><strong>Synopsis:</strong></p>
                    <p>With a steadily increasing number of recombinant proteins that are being developed as therapeutics there is an increasing demand to provide very exacting methods for validating the product. Unlike their small molecule counterparts there are many more analytical steps – and with them come more analytical challenges –involved in showing that the correct products have been made. Proteins can undergo a myriad of modifications each of which can have a profound effect on the efficacy and half-life of the protein. Some of these modifications are required and some are not, however all of them can vary depending on the growth conditions of the cell line that is being used to express them. Early process development focuses on the conditions of cell growth that provides the protein of the correct amino acid sequence and with the correct, intentional modifications (e.g., glycosylation, disulfide-bond linkages). As this is scaled up it is vital to show that the fidelity of the product remains the same. Once this has been achieved then there will be the need for routine batch testing to provide evidence of reproducibility and batch-to-batch consistency.</p>
                    <p>One of the most widely used and highly applicable analytical techniques as part of the characterization is peptide mapping. This approach involves the isolation of the protein, controlled chemical modification, enzymatic digestion, separation of the resultant peptides and detection. Using this approach, it is possible to determine that the correct amino acid sequence has been obtained, identify many of the modifications (required and erroneous), all semi-quantitatively.</p>
                    <p>This webinar will describe the new approaches and technologies that are being used in each of the steps and how an efficient, reproducible and accurate workflow can be obtained.</p>

                  </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"></div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                  <img  type="button" class="video" data-toggle="modal" data-target="#myModal" width="100%" src="<?php echo base_url(); ?>styles/images/webinar/agilent-audio-video/agilent-audio-video.png" />
                </div>
              </div>
                  
                  <div class="persons">
                      <div class="col-md-12 col-xs-12 person">
                          <div class="row">

                            <div class="media PF-BGf7f7f7 PF-BrdrDDD PF-MB20">     
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 PF-P0" align="text-center"> 
                                <img src="<?php echo base_url(); ?>styles/images/webinar/robin-philp.jpg" alt="Robin Philp" title="Robin Philp" class="img-responsive" /> 
                              </div>
                              
                              <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                <div class="PF-PT5">
                                  <p class="person-name">Robin Philp</p>
                                  <p class="gray-text">Academia Market Manager (South East Asia)</p>
                                  <p class="gray-text">Agilent Technologies</p>
                                  <!-- <p class="PF-TXTRED">mail ID</p> -->
                                </div>
                              </div>
                            </div>

                            <p><strong>Speaker’s Biography:</strong></p> 
                    		<p>With a background in biochemistry Robin worked at the Imperial Cancer Research Fund and the Ludwig Institute for Cancer Research in London before moving to Oxford GlycoSciences. Following that he moved to Singapore where he ran the department of Proteomics at A*STAR’s Bioprocessing Technology Institute and then in 2008 joined Agilent Technologies as a specialist in mass spectrometry and now acts as the Academia Market Manager for Singapore, Malaysia and Thailand. Robin has 35 peer review journal articles.</p> 
                          </div>
                      </div>
                      
                  </div>
                  <div class="clearfix"></div>
              </div>
            </div>  
          </div>
          <!-- col-8 // -->
          </div> 
      </div>
      <!-- Main Container // -->

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
                  <form action="<?php echo base_url().'agilent-webinar-video-success'?>" class="email" id="register" method="post">
                  <input value="gewebinar" name="type" id="type" type="hidden">

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
                  <input class="form-control" name="country" placeholder="Country" type="text" value="<?php echo set_value('country'); ?>"> 
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
    