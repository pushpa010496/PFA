
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
</style>

    <div class="container-fluid PF-Slider-Offset PF-MobP0">  
      <!-- // Main Container -->      
      <div class="container">
        <div class="row">
          <h4 align="center" style="color: green;">Registration successfully submited</h4>
          </div> 
      </div>
      <!-- Main Container // -->

    </div>

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