<?php $__env->startSection('style'); ?>








<?php $__env->stopSection(); ?>





<?php $__env->startSection('content'); ?>


<div class="clearfix"></div>





	<div class="container">





		<div class="row PF-MobP030">


			<nav aria-label="breadcrumb">


				<ol class="breadcrumb">


					<li class="breadcrumb-item">


						<a href="<?php echo e(url('/knowledgebank')); ?>">Knowledge Bank


						</a>


					</li>


					<li class="breadcrumb-item">


						Whitepaper Form


					</li>


					<li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>


				</ol>


			</nav>


		</div>





		<div class="row PF-WytBG">





			<!-- // RIGHT SECTION --> 


			<div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">


				<div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">


					<div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-1">


						<h1 class="PF-Bshelf pt-2">Whitepaper Form</h1>            


					</div>


				</div>


				<div class="col-lg-12 col-md-12 col-sm-12 col-12">





				</div>





				<div class="col-lg-12 col-md-12 col-sm-12 col-12">





			        <!-- <div class="PF-MPicon mt-3">


			        	<img src="<?php echo e(config('app.url')); ?>images/pdf-icon.png" alt="PDF">


			        </div> -->





			        <div class="text-center pb-3 pt-2">


			        	<img src="<?php echo e(config('app.url')); ?>images/pdf-icon.png" alt="PDF" class="img-fluid p-2 BG-RED">


			        </div>








			        <div class="form-area col-lg-12 col-md-12 col-sm-12 mt-2">  


			        	<form action="<?php echo e(route('whitepapersform.post',[$whitepaper->url])); ?>" class="email" id="writemessage" method="post" accept-charset="utf-8">


			        		<?php echo e(csrf_field()); ?>



			        		<h2 class="mb-3">Please fill the below form to download our <span class="PF-Caps PF-TXTRED">WHITEPAPER</span></h2>





			        		<div class="row">


			        			<div class="form-group col-lg-6 <?php echo e($errors->first('fullname', 'has-error')); ?>">


			        				<input type="text" class="form-control" id="name" name="fullname" placeholder="Full Name*" required="">


			        				<input type="hidden" value="whitepaper-download" name="type" id="type">


			        				<input type="hidden" value="<?php echo e($whitepaper->id); ?>" name="whitepaper_id" id="type">


			        				<input type="hidden" value="<?php echo e($whitepaper->title); ?>" name="title">





			        				<span class="help-block"><?php echo e($errors->first('fullname', ':message')); ?></span>


			        			</div>


			        			<div class="form-group col-lg-6 <?php echo e($errors->first('email', 'has-error')); ?>">


			        				<input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="">


			        				<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>


			        			</div>


			        			<div class="form-group col-lg-6 <?php echo e($errors->first('telephone', 'has-error')); ?>">


			        				<input type="tel" class="form-control" id="subject" name="telephone" placeholder="Telephone*" minlength="8" required="">


			        				<span class="help-block"><?php echo e($errors->first('telephone', ':message')); ?></span>


			        			</div>


			        			<div class="form-group col-lg-6 <?php echo e($errors->first('company', 'has-error')); ?>">


			        				<input type="text" class="form-control" id="mobile" name="company" placeholder="Company*" required="">


			        				<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span>


			        			</div>


			        			<div class="form-group col-lg-12 col-md-12 col-sm-12 <?php echo e($errors->first('description', 'has-error')); ?>">


			        				<textarea class="form-control" type="textarea" id="message" name="description" placeholder="Message" maxlength="200" rows="7"></textarea>


			        				<span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>


			        			</div>


			        			<div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">


			        				<input type="submit" value="SUBMIT" id="submit-button" class="btn btn-danger">


			        				<div class="clearfix"></div>


			        			</div>


			        		</div>


			        	</form>


			        </div>


			        <div class="clearfix pb-5"></div>


			    </div>





			</div>








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





		<div class="pb-3"></div>


	</div>











<?php $__env->stopSection(); ?>





<?php $__env->startSection('scripts'); ?>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/whitepapers/download.blade.php ENDPATH**/ ?>