  <?php



 $current_issue  = \App\Models\Issue::where('active_flag', 1)->orderBy('id','desc')->first();   



 $ebook = \App\Models\Ebook::where('issue_id', $current_issue->id)->where('active_flag', 1)->first();



        if(empty($ebook)){

         $alt_issue = \App\Models\Issue::where('active_flag', 1)->where('id', '!=',$current_issue->id)->orderBy('id','desc')->first();    

         $ebook = \App\Models\Ebook::where('issue_id',$alt_issue->id)->where('active_flag', 1)->first();          

        }

  ?>



  <style type="text/css">

    .PF-LatestMagzBG {height: auto !important;}

    .magz-bg {

      background:#269dd761;

    }

  </style>



<div>







<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 magz-bg pt-2 pb-2 min-hyt-580">  

						<div class="advert">

							<h2 class="text-left pt-2 font-21 mb-1"><strong>Register for advertising your business</strong></h2>

						

						</div>    

						<div class="form_error">

						</div>         

					

						<form action="<?php echo e(route('advertise.post')); ?>" class="email" id="writemessage" method="post" accept-charset="utf-8">

							<?php echo csrf_field(); ?>

							  <input type="hidden" name="" class="action_url" value="<?php echo e(route('advertise.post')); ?>">

                        	<input type="hidden" name="name" value="pharmafocusasia-advertise">

							<div class="form-group col-12  <?php echo e($errors->first('firstname', 'has-error')); ?>">

								<input type="text" class="form-control" id="name" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="<?php echo e(old('firstname')); ?>" required>

								<input type="hidden" value="advertise" name="type" id="type" />

								<span class="help-block"><?php echo e($errors->first('firstname', ':message')); ?></span>   

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('lastname', 'has-error')); ?>">

								<input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="<?php echo e(old('lastname')); ?>" required>

								<span class="help-block"><?php echo e($errors->first('lastname', ':message')); ?></span>   

							</div>



							<div class="form-group col-lg-12  <?php echo e($errors->first('cf_leads_jobtitle', 'has-error')); ?>">

		                        <input type="text" class="form-control" value="<?php echo e(old('cf_leads_jobtitle')); ?>" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">

		                          <span class="help-block"><?php echo e($errors->first('cf_leads_jobtitle', ':message')); ?></span>  

                      		</div>



                      		<div class="form-group col-12  <?php echo e($errors->first('company', 'has-error')); ?>">

								<input type="text" class="form-control" id="company" name="company" value="<?php echo e(old('company')); ?>" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required>      

								<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span>         

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('email', 'has-error')); ?>">

								<input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Business Email*" required>

								<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>   

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('mobile', 'has-error')); ?>">

								<input type="tel" class="form-control" id="subject" name="mobile" value="<?php echo e(old('mobile')); ?>" pattern="[0-9\s._*#()+-]+" minlength="8" placeholder="Telephone*" required>       

								<span class="help-block"><?php echo e($errors->first('mobile', ':message')); ?></span>        

							</div>

							

						

							<div class="form-group col-12  <?php echo e($errors->first('description', 'has-error')); ?>">

								<textarea class="form-control" type="textarea" id="message" name="description" value="<?php echo e(old('description')); ?>" placeholder="Message" rows="2"></textarea>

								<span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>   

							</div>



							<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">



							<div class="form-group col-12">

								

								<input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" ><div class="clearfix"></div>

							</div>

							<div class="form-group col-12">

								<p class="text-left mb-0 font-13">OR write to us at</p>

								<p class="text-left mb-0">	

									<a href="<?php echo e(trans('messages.advertise_mail_to')); ?>" class="text-white font-weight-bold"><?php echo e(trans('messages.advertise_email')); ?></a>

								</p>

								

							</div>

							<div class="clearfix"></div>

						</form>

					</div>

</div> -->



  <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-LatestMagzBG mb-3">

   

      <img src="<?php echo e(config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->image_sm); ?>" alt="Latest Issue" title="Latest Issue" width="174" class="img-fluid mb-3 mt-2">


   <h5 class="text-white font-weight-bold">Get instant <br>access to our latest e-book</h5>   
   <form action="<?php echo e(url('welcome')); ?>" role="form" id="ebookform"  method="post" accept-charset="utf-8">
        <?php echo e(csrf_field()); ?>

        <div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">

          <input style="height:30px !important;color: #fff" type="email" name="email" class="form-control bg-transparent border border-white PF-MagField" placeholder="Your Mail ID..." id="inputEmail" data-error="Bruh, that email address is invalid" required="">
          <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
        </div>

        <input value="e-book" name="type" id="e-book" type="hidden">
        <input value="" name="ebook_script" id="ebook_script" type="hidden">
        <button type="submit" id="submit" name="submit" class="btn btn-sm btn-block btn-danger">
          <img src="<?php echo e(config('app.url')); ?>images/submit.png" class="" alt="submit" title="submit">&nbsp; SUBMIT
        </button>
      </form>


  </div>  

  

   <a href="javascript:void(0)" id="THERMOFISHER_SEA" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202141034211138296851/'); return false;" target="_blank" title="THERMOFISHER SEA">

        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/thermofisher_sea_2971_300x600.gif" alt="THERMOFISHER SEA" />

    </a>

<!--
	<div class="mb-3">
  
  <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd=" target="_blank" title="">

     <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/Cytiva_NoA_Mind_If_We_Drop_In_300x600_APAC.jpg" alt="" />
     <IMG SRC="https://ad.doubleclick.net/ddm/trackimp/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?" BORDER="0" HEIGHT="1" WIDTH="1" ALT="Advertisement">

   </a>

</div>  
<SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>
	
  -->


  <?php 

  $page_id =  getpage(Request::segment(1));

  ?>

  <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

   <?php $__currentLoopData = $banner->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

     <?php if($banner->positions[0]->id == 6 and $pcount->id == $page_id): ?>

    

<a <?php echo e($page_id); ?> href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($banner->url); ?>'); return false;" target="_blank" class="mb-3" title="<?php echo e($banner->title); ?>"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($banner->image); ?>" alt="<?php echo e($banner->img_alt); ?>"  title="<?php echo e($banner->img_title); ?>"/></a>





     <?php else: ?>

     <?php endif; ?>  

   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>





 

    

   

    

    

    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   

    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <?php if($homebanner12->positions[0]->id == 2 and $pcount->id == 1): ?>

    <div class="mt-2">

      <?php if($homebanner12->type == 'script'): ?>

      <?php echo $homebanner12->script; ?>


      <?php else: ?>

      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>">

        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" />

      </a>

      <?php endif; ?>

    </div>

    <?php else: ?>

    <?php endif; ?>  

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    

</br>



 <!-- <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B27686767.341454641;dc_trk_aid=533334992;dc_trk_cid=170816109;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="  id="cytiva"  target="_blank" class="mb-3" title="Cytiva Change Your Strategy"><img class="img-fluid div-shadow mb-3" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-6-boost-50-300x600.jpg" alt="Cytiva Change Your Strategy" /></a> -->



<?php /**PATH /home/pharmafocusasia/public_html/resources/views/layouts/partials/_square_banner.blade.php ENDPATH**/ ?>