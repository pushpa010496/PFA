<?php $__env->startSection('style'); ?>

<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/form-design.css">

<?php $__env->stopSection(); ?>

<style type="text/css">

  .grecaptcha-badge { 

    bottom: 100px !important;

  }

  .rc-anchor-normal{

    background: #000 !important;

    color: #000 !important; 

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



<?php $__env->startSection('content'); ?>





    <div class="clearfix"></div>





      <div class="container">



        <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('/e-newsletter')); ?>">e-Newsletter</a>

              </li>

              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">e-Newsletter Subscribe Form</li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-8">



              <div class="row form-container">



                  <div class="col-lg-10 offset-lg-1"> 



                   

                      <?php if(Session('status') == 'true'): ?> 

                        <h2 style="color: green;" align="center">Thank you! </h2>

                         <h2 style="color: green;" align="center">We are grateful to you for your subscription to our e-Newsletter. A confirmation email shall be sent to you shortly. Your inbox will now be home to the latest healthcare news and updates.</h2>

                      <?php endif; ?>

                    <h1 class="text-center form-title pt-3">E-NEWSLETTER SUBSCRIBE FORM</h1>

                   

                    <form method="post" name="newsletter_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">         



                      <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">

                      <input type="hidden" name="" class="action_url" value="<?php echo e(route('enewsletter.post')); ?>">

                      

                      <input type="hidden" name="name" value="e-newsletter-subscribe">



                      <div class="form-group col-lg-12  <?php echo e($errors->first('fullname', 'has-error')); ?>">

                        <input type="text" class="form-control" value="<?php echo e(old('fullname')); ?>" name="fullname" placeholder="Full Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets " required="">

                        <input type="hidden" value="e-newsletter-subscribe" name="type" id="type">

                         <span class="help-block"><?php echo e($errors->first('fullname', ':message')); ?></span>   

                      </div>



                       <div class="form-group col-lg-12  <?php echo e($errors->first('cf_leads_jobtitle', 'has-error')); ?>">

                        <input type="text" class="form-control" value="" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                         <span class="help-block"><?php echo e($errors->first('cf_leads_jobtitle', ':message')); ?></span>   

                      </div>



                      <div class="form-group col-lg-12  <?php echo e($errors->first('email', 'has-error')); ?>">

                        <input type="email*" class="form-control" value="" name="email" placeholder="Email*" required="">

                         <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>   

                      </div>



                      <div class="form-group col-lg-12  <?php echo e($errors->first('mobile', 'has-error')); ?>">

                        <input type="text" class="form-control" value="" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">

                         <span class="help-block"><?php echo e($errors->first('mobile', ':message')); ?></span>   

                      </div>



                       <!-- <div class="form-group col-lg-12  <?php echo e($errors->first('fax', 'has-error')); ?>">

                        <input type="text" class="form-control" value="<?php echo e(old('fax')); ?>" name="fax" placeholder="Fax*" pattern="[0-9\s._*#()+-]+" required>

                         <span class="help-block"><?php echo e($errors->first('fax', ':message')); ?></span>   

                      </div> -->



                      <div class="form-group col-lg-12  <?php echo e($errors->first('company', 'has-error')); ?>">

                        <input type="text" class="form-control" value="" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                         <span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span>   

                      </div>

                         <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">

                    



                     



                     <div class="form-group col-lg-12">

                      <!-- <input type="submit" value="SUBMIT" id="submit-button"  class="btn submit-form btn-block PF-MTB10 PF-MB20"/> -->

                      <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();">



                    </div>

                    </form>



                  <div class="clearfix"></div>



                  <div class="PF-MB20"></div>



                </div> 

              </div>

            </div>

            <!-- // RIGHT SECTION // --> 





            <!--// RIGHT SECTION - Square Banners -->

            <div class="col-lg-3 offset-lg-1 d-none d-sm-block text-center">               

              <div class="bg-gray border-secondary">

                <div class="text-center">

                  <h3 class="adv-title mb-1">Advertisements</h3>

                </div>

               

                <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

                  <?php $__currentLoopData = $banner->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($banner->positions[0]->id == 6 and $pcount->id == 32): ?>



                    <a href="<?php echo e($banner->url); ?>" target="_blank" class="mb-3" title="<?php echo e($banner->title); ?>"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($banner->image); ?>" alt="<?php echo e($banner->alt_tag); ?>" /></a>

                    <?php else: ?>

                    <?php endif; ?>  

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>      



              </div>

            </div>

            <!-- RIGHT SECTION - Square Banners // --> 

        </div>



      </div>

    <div id="alertModal" class="modal fade" role="dialog">

      <div class="modal-dialog">

        <!-- Modal content-->

        <div class="modal-content">

         <div class="modal-header">

          <h5 class="modal-title text-danger">Error</h5>

          <button type="button" class="close" data-dismiss="modal">&times;</button>



        </div>

        <div class="modal-body">

          <p class="">Please fill the all required fields....!!</p>





        </div>

        <div class="modal-footer">

         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



       </div>

     </div>

       </div>

     </div>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">

  var url = "<?php echo e(route('enewsletter.post')); ?>";

  function OnButton1(){

    setTimeout(function(){

      document.newsletter_form.action = url;

      document.newsletter_form.submit();

        },200);

  }



  function checkform() {      

   var flag = true;

   var form = $('#writemessage');  

  $("#writemessage input").each(function(){



    if($(this)[0].hasAttribute("required")){



      if($(this)[0].value == ""){

        $('#alertModal').modal('show');                 



        flag = false;

      }

    }

  });

  if (!flag) { return false; }

   OnButton1();  

}

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/forms/enewsletter/index.blade.php ENDPATH**/ ?>