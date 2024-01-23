<?php $__env->startSection('style'); ?>

<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/form-design.css">

<link href="<?php echo e(config('app.url')); ?>css/datepiker.min.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>

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

                <a href="<?php echo e(url('mediapacks')); ?>">

                Post Event

              </a>

              </li>

              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-8">

              <div class="row form-container">

                  <div class="col-lg-10 offset-lg-1">                    

                      <?php if(Session('status') == 'true'): ?> 

                        <h2 style="color: green;" align="center"> Thank you...!   </h2>

                        <h3 style="color: green;" align="center"><em> Your event information is safe with us and will be uploaded within the next 48 hours. A confirmation of the same will be coming your way soon.</em></h3>

                      <?php endif; ?>

                    <h1 class="text-center form-title pt-3"><span class=" PF-TXTRED"><?php echo e(trans('messages.post-event_title')); ?></span> EVENTS FORM</h1>

                   <form method="post" name="postevent_form" method="post" id="writemessage" class="form_count" accept-charset="utf-8" _lpchecked="1">                
                      <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>">
                      <input type="hidden" name="" class="action_url" value="<?php echo e(route('postevent.post')); ?>">
                      <input type="hidden" name="name" value="post-event">
                      <div class="form-group col-lg-12  <?php echo e($errors->first('title', 'has-error')); ?>">
                        <input type="text" class="form-control" value="<?php echo e(old('title')); ?>" name="title" placeholder="Event Name*" required="" >
                        <input type="hidden" value="post-event" name="type" id="type">
                        <span class="help-block"><?php echo e($errors->first('title', ':message')); ?></span>  
                      </div>
                       <div class="form-group col-lg-12  <?php echo e($errors->first('email', 'has-error')); ?>">
                        <input type="email*" class="form-control" value="<?php echo e(old('email')); ?>" name="email" placeholder="Email*" required="">
                        <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>  
                      </div>
                       <div class="form-group col-lg-12  <?php echo e($errors->first('start_date', 'has-error')); ?>">
                       <input type="text" class="form-control" id="startdate" value="<?php echo e(old('start_date')); ?>" name="start_date" placeholder="Event Start Date*" required="">
                       <span class="help-block"><?php echo e($errors->first('start_date', ':message')); ?></span>  
                      </div>                     

                      <div class="form-group col-lg-12  <?php echo e($errors->first('end_date', 'has-error')); ?>">
                        <input type="text" value="<?php echo e(old('end_date')); ?>" class="form-control" id="enddate" name="end_date" placeholder="Event End Date*" required="">
                        <span class="help-block"><?php echo e($errors->first('end_date', ':message')); ?></span>  
                      </div>
                      <div class="form-group col-lg-12  <?php echo e($errors->first('event_organiser', 'has-error')); ?>">
                        <input type="text" value="<?php echo e(old('event_organiser')); ?>" class="form-control" id="organiser" name="event_organiser" placeholder="Event Organisers*" required="">
                        <span class="help-block"><?php echo e($errors->first('event_organiser', ':message')); ?></span>  
                      </div>



                       <div class="form-group col-lg-12  <?php echo e($errors->first('web_link', 'has-error')); ?>">
                        <input type="text" value="<?php echo e(old('web_link')); ?>" class="form-control" id="web_link" name="web_link" placeholder="Event Weblink*" required="">
                        <span class="help-block"><?php echo e($errors->first('web_link', ':message')); ?></span>  
                      </div>

          
                      <div class="form-group col-lg-12  <?php echo e($errors->first('venue', 'has-error')); ?>">
                        <input type="text" class="form-control" value="<?php echo e(old('venue')); ?>" id="venue" name="venue" placeholder="Event Venue*" required="">
                        <span class="help-block"><?php echo e($errors->first('venue', ':message')); ?></span>  
                      </div>



                      <div class="form-group col-lg-12  <?php echo e($errors->first('address', 'has-error')); ?>">
                        <textarea class="form-control" type="textarea" id="address" name="address" placeholder="Event Address*" maxlength="200" rows="3" required=""> <?php echo e(old('address')); ?> </textarea>
                        <span class="help-block"><?php echo e($errors->first('address', ':message')); ?></span>  
                      </div>
                      <input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">
                      <!-- <div class="form-group col-lg-12">
                        <?php echo Form::captcha(); ?>

                        <?php if($errors->has('g-recaptcha-response')): ?>
                        <div class="error text-danger"><?php echo e($errors->first('g-recaptcha-response')); ?></div>
                        <?php endif; ?>
                        <div style="color: #d77878" class="verifi"></div>
                      </div> -->
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

                 <?php if($banner->positions[0]->id == 6 and $pcount->id == 46): ?>



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



<script src="<?php echo e(config('app.url')); ?>js/jquery-ui-datepicker.js"></script>



<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9', {action: 'submit'}).then(function(token) {

        document.getElementById("g-token").value=token

      });

    });

</script>

<script type="text/javascript">

  var url = "<?php echo e(route('postevent.post')); ?>";

  function OnButton1(){

    setTimeout(function(){

      document.postevent_form.action = url;

      document.postevent_form.submit();

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

  //OnButton1();

  //return true

      gToken =$("#g-token").val();

      $.ajax({

            url: "<?php echo e(route('gogglecaptha')); ?>",

            type: "POST",

            data: {'gtoken':gToken, '_token': '<?php echo e(csrf_token()); ?>'},

            success: function (response) {

                var obj = JSON.parse(response);

                //alert(obj.success);

                if(obj.success) {

                    OnButton1()

                    return true;

                }

                else{

                    form.find('.verifi').html("We can't proceed request with out captcha verification!");

                    return false;

                }           

            },

        });



}

</script> 

<script type="text/javascript">

 $(document).ready(function(){

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

 }); 



  

</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/forms/postevent/index.blade.php ENDPATH**/ ?>