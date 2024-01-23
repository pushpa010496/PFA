<?php $__env->startSection('style'); ?>

<!-- <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/form-design.css"> -->
<meta property="og:image" content="http://industry.pharmafocusasia.com/images/og-img-pfa.jpg">
<style type="text/css">

  .error p{color:#fff !important;text-align:left; padding-top:2px;}



  .form-control  {

    height: 34px;

    padding: 6px 12px;

    width: 100%;

    border: none !important;

    border-bottom: 1px solid #ccc !important;

    margin-bottom: 10px;

  }

  @media only screen and (max-width: 500px) {

    #rc-imageselect, .g-recaptcha {

      transform:scale(.8);-webkit-transform:scale(.8);transform-origin:0 0;-webkit-transform-origin:0 0;

    }     

  }

    .grecaptcha-badge { 

    bottom: 100px !important;

  }

  .rc-anchor-normal{

    background: #000 !important;

    color: #000 !important; 

  }

</style>

<?php $__env->stopSection(); ?>

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



        <!-- <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('/mediapacks')); ?>">Mediapack</a>

              </li>

             

            </ol>

          </nav>

        </div> -->



        <div class="row PF-WytBG">

          <!-- // RIGHT SECTION --> 

          <div class="col-lg-8 pt-4 pb-4">

            <div class="shadow form-container">



              <div class="row">

                <div class="col-md-8 offset-md-2"> 



                  <h1 class="text-center form-title pt-4 pb-2">MEDIAPACK DOWNLOAD</h1>

                  <!-- <form method="post" name="mediapack_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">  -->  

                    <form method="post" action="<?php echo e(route('mediapacks.post')); ?>">

                    <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">

                    <input type="hidden" name="" class="action_url" value="<?php echo e(url('mediapacks')); ?>">



                    <input type="hidden" name="publicid" value="cb8c589fd10ca0c97d8cdd834d00487c">

                    <input type="hidden" name="name" value="pharmafocusasia-mediapacks">



                    <input type="hidden" name="name" value="mediapacks">



                    <div class="form-group col-lg-12  <?php echo e($errors->first('firstname', 'has-error')); ?>">

                      <input type="text" class="form-control" value="<?php echo e(old('firstname')); ?>" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" required="">

                      <input type="hidden" value="mediapacks" name="type" id="type">

                      <span class="help-block"><?php echo e($errors->first('firstname', ':message')); ?></span>  

                    </div>



                    <div class="form-group col-lg-12  <?php echo e($errors->first('lastname', 'has-error')); ?>">

                      <input type="text" class="form-control" value="<?php echo e(old('lastname')); ?>" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" required="">

                      <span class="help-block"><?php echo e($errors->first('lastname', ':message')); ?></span>  

                    </div>





                    <div class="form-group col-lg-12  <?php echo e($errors->first('cf_leads_jobtitle', 'has-error')); ?>">

                      <input type="text" class="form-control" value="<?php echo e(old('cf_leads_jobtitle')); ?>" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                      <span class="help-block"><?php echo e($errors->first('cf_leads_jobtitle', ':message')); ?></span>  

                    </div>



                    <div class="form-group col-lg-12  <?php echo e($errors->first('company', 'has-error')); ?>">

                      <input type="text" class="form-control" value="<?php echo e(old('company')); ?>" name="company" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required="">

                      <span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span>  

                    </div>



                    <div class="form-group col-lg-12  <?php echo e($errors->first('email', 'has-error')); ?>">

                      <input type="email*" class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Business Email*" required="">

                      <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>  

                    </div>



                    <div class="form-group col-lg-12  <?php echo e($errors->first('mobile', 'has-error')); ?>">

                      <input type="text" class="form-control" value="<?php echo e(old('mobile')); ?>" name="mobile" placeholder="Telephone*" pattern="[0-9\s._*#()+-]+" minlength="8" required="">

                      <span class="help-block"><?php echo e($errors->first('mobile', ':message')); ?></span>  

                    </div> 



                    <div class="form-group col-lg-12 <?php echo e($errors->first('country', 'has-error')); ?>">

                     <?php echo e(Form::select('country', $countries, null, ['class' => 'form-control custom-select','required'=>'required'])); ?>


                     <span class="help-block"><?php echo e($errors->first('country', ':message')); ?></span>

                    </div>



                    <div class="form-group col-lg-12 <?php echo e($errors->first('whom', 'has-error')); ?>">           

                      <select class="form-control custom-select" name="whom" required>

                        <option selected disabled>How did you hear about us?*</option>

                        <option value="Internet Search">Internet Search</option>

                        <option value="Social Media">Social Media</option>

                        <option value="Email">Email</option>

                        <option value="Other">Other</option>

                      </select>

                      <span class="help-block"><?php echo e($errors->first('whom', ':message')); ?></span>

                    </div>



                   <div class="form-group col-lg-12  <?php echo e($errors->first('description', 'has-error')); ?>">

                    <textarea class="form-control" type="textarea" name="description" placeholder="Message" rows="3"><?php echo e(old('description')); ?></textarea>

                    <span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>  

                  </div>

                  <div class="form-group col-12">

                    <div class="grecaptcha-badge"></div>

                    <div style="color: #d77878" class="verifi"></div>

                  </div>



                      <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">



                  <!-- <div class="form-group col-lg-12  <?php echo e($errors->first('g-recaptcha-response', 'has-error')); ?>">

                    <?php echo Form::captcha(); ?>


                    <?php if($errors->has('g-recaptcha-response')): ?>

                    <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>

                    <?php endif; ?>

                    <div style="color: #d77878" class="verifi"></div>

                  </div> -->



                  <div class="form-group col-lg-12">

                    <input type="submit" value="SUBMIT" id="submit-button"  class="btn submit-form btn-block PF-MTB10 PF-MB20"/>

                    <!-- <input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();"> -->



                  </div>

                </form>



                <div class="clearfix"></div>



                <div class="pb-3"></div>



              </div> 

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

            <?php echo $__env->make('layouts.partials._square_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 



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

  var url = "<?php echo e(url('mediapacks')); ?>";

  function OnButton1(){

    setTimeout(function(){

      document.mediapack_form.action = url;

      document.mediapack_form.submit();

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



$(document).on('change',':text,textarea', function () {

     if (this.value.match(/[^a-zA-Z0-9 ]/g)) {

       this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');

     }

});

</script> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/mediapack/index.blade.php ENDPATH**/ ?>