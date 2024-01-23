<?php $__env->startSection('style'); ?>

<style>
fieldset {
    display: block;
    margin-inline-end: 2px;
    padding-block-start: 0.35em;
    padding-inline-start: 0.75em;
    padding-block-end: 0.625em;
    min-inline-size: min-content;
    border-width: 2px;
    border-style: groove;
    border-color: #000;
}
legend {
    display: block;
    width: 100%;
    max-width: 100%;
    padding: 0;
    margin-bottom: 0.5rem;
    font-size: 1.5rem;
    line-height: inherit;
    color: inherit;
    white-space: normal;
}

.advertising {
      
      max-width: 73% !important;
    
  }
  .contact{
    color:#f04e23 !important;
    text-decoration:none !important;
    cursor:pointer !important;
  }
  .header{
    margin: 0px !important;
    font-size: 23px;
    padding: 10px;
    font-weight: bold;
    color: red;
}
  .heading{
    font-size: 20px;
    font-weight: bold;
    color: red;
  }
</style>

<script src="https://www.google.com/recaptcha/api.js?render=6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>


<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>







    <div class="clearfix"></div>



      <div class="container">



        <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('/magazine')); ?>">Contact Us</a>

              </li>

              

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">Reach us at</h1> 

                </div>
                
<div class="row pl-3">
  <div class="col-md-4">
    <h3>Editorial Coverage</h3>
  </div>
  <div class="col-md-3">
  <p class="page_speed_1346035751"><a href="mailto:editorial@pharmafocusasia.com?subject=Contact Pharma Focus Asia Editor&amp;cc=info@pharmafocusasia.com&amp;bcc=web@ochre-media.com">editorial@pharmafocusasia.com</a></p>
  </div>
</div>
<div class="row pl-3">
  <div class="col-md-4">
    <h3>Advertising Opportunities</h3>
  </div>
  <div class="col-md-3">
  <p class="page_speed_1346035751"><a href="mailto:advertise@pharmafocusasia.com?subject=Contact Pharma Focus Asia for Advertising&amp;cc=info@pharmafocusasia.com&amp;bcc=web@ochre-media.com">advertise@pharmafocusasia.com</a></p>
  </div>
</div>
              <div class="row pl-4">
              <div class="col-md-8 mb-2 p-0">
        <fieldset>
                <legend class="advertising">
                    <h6  class="header">Advertising & Marketing Enquiries</h6>
        </legend>
           
            <div class="form-row">
        <div class="col-lg-6">
        
        <h4 class="heading">Asia</h4>
        <div class="bold font-16">David Nelson</div>
        <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
        
        </div>
        
        <div class="col-lg-6">
        <h4 class="heading">EMEA</h4>
        <div class="bold font-16">Peter Thomas</div>
        <p><a  data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
        </div>
        
        </div>
        
        
        <div class="form-row">
        <div class="col-lg-6">
              <h4 class="heading">North America</h4>
              <div class="bold font-16">Jeff Kenney</div>
              <p><a data-toggle="modal" data-target="#enquiry" class="contact">Register to Contact</a></p>
        </div>
        
        <div class="col-lg-6">
          <h4 class="heading">Media Partnership </h4>
          <div class="bold font-16">Sussane Vincent</div>
          <p><a data-toggle="modal" data-target="#enquiry"  class="contact">Register to Contact</a></p>
        </div>
        </div>
        </fieldset>
        </div>

              </div>








              </div>





            </div>

            <!-- // RIGHT SECTION // --> 



            <!--// RIGHT SECTION - Square Banners -->

            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               

              <div class="bg-gray border-secondary">

                <div class="text-center">

                  

                </div>



                <?php echo $__env->make('layouts.partials._square_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

              </div>

            </div>

            <!-- RIGHT SECTION - Square Banners // --> 

        </div>



    </div>


    <!-- modal -->
<div class="modal fade" id="enquiry" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="enquiryLabel" aria-hidden="true" id="popup">

<div class="modal-dialog">

  <div class="modal-content" style="background-color:#f7f7f7;">

    <div class="modal-header">

      <h5 class="modal-title text-center font-18">Register to Contact</h5>

      <button type="button" class="close" data-dismiss="modal">×</button>
    </div>
          <div class="modal-body pt-0 pb-0 pl-3 pr-3">
                    <div class="pt-2"></div>          
    
      
                <form action="<?php echo e(route('contactUs.post')); ?>" method="post" id="form_count">
                <?php echo csrf_field(); ?>
                <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
                  <div class="row">
                  <div class="form-group col-md-6 col-12 p-0 m-0">
                    <label for="name" class="col-lg-12 col-12">First Name*</label>
                    <div class="col-lg-12 col-12">
                        <?php echo e(Form::text('firstname', null,['required'=>'required','class'=>'form-control'])); ?>

                    </div>
                  </div>
                   <div class="form-group col-md-6 col-12 p-0 m-0">
                    <label for="name" class="col-lg-12 col-12">Last Name*</label>
                    <div class="col-lg-12 col-12">
                        <?php echo e(Form::text('lastname', null,['required'=>'required','class'=>'form-control'])); ?>

                    </div>
                  </div>
                  </div>
                  <div class="row">
              <div class="form-group col-md-6  col-12 p-0 m-0">
                <label for="email" class="col-lg-12 col-12">Email*</label>
                <div class="col-lg-12 col-12">
                 <?php echo e(Form::text('email', null,['required'=>'required','class'=>'form-control'])); ?>

                </div>
              </div>
              <div class="form-group col-md-6  col-12 p-0 m-0">
                <label for="name" class="col-lg-12 col-12">Telephone*</label>
                <div class="col-lg-12 col-12">
                  <?php echo e(Form::text('mobile', null,['required'=>'required','class'=>'form-control'])); ?>

                </div>
              </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="name" class="col-lg-12 col-12">Company Name*</label>
                  <div class="col-lg-12 col-12">
                   <?php echo e(Form::text('company', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
                <div class="form-group col-md-6  col-12 p-0 m-0">
                  <label for="name" class="col-lg-12 col-12">Job Title*</label>
                  <div class="col-lg-12 col-12">
                   <?php echo e(Form::text('cf_leads_jobtitle', null,['required'=>'required','class'=>'form-control'])); ?>

                  </div>
                </div>
  </div>
<div class="row">
              <div class="form-group col-md-12  col-12 p-0 m-0">
                <label for="name" class="col-lg-12 col-12">Query</label>
                <div class="col-lg-12 col-12">
                  <?php echo e(Form::textarea('description', null,['rows'=>2,'class'=>'form-control'])); ?>

                </div>
              </div>
</div>

              
             
        
              <div class="form-group row pt-3" align="center">                 
                <div class="col-lg-12 col-12" >
                  
                  <input type="submit" class="btn btn-danger rounded" value="Submit">
                </div>
              </div>
            
            </form>
          </div>   
          </div>   
          </div>   
          </div>   

          <div id="myModal" class="modal fade" role="dialog">

<div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

        <div class="modal-header">

            <h2 class="modal-title text-blue"> Thank You...</h2>

        </div>

        <div class="modal-body">

            <p class="text-blue">For any further queries or issue resolution reach us at +91 40 4961 4567 or email us at info@pharmafocusasia.com. And our support staff will get back to you at the earliest.</p>

<br>

           

        </div>

        <div class="modal-footer">

            <a class="btn btn-primary" role="button" id="aa" name="aa" href="<?php echo e(url('contactus')); ?>"

                aria-expanded="false">

                Close

            </a>

        </div>

    </div>

</div>

</div>


<!-- modal End -->



<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>


<script type="text/javascript">

<?php if(Session('status') == 'true'): ?> 

 $('#myModal').modal('show');

 <?php endif; ?></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/cms/contactus.blade.php ENDPATH**/ ?>