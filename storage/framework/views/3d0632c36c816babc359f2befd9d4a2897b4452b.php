
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo e(url('magazine')); ?>">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page">Author Guidelines</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-1">
                  <h1 class="PF-Bshelf pt-2">Author Guidelines</h1>            
                </div>
              </div>

              <?php $__currentLoopData = $guideline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <h2 class="pt-2"><?php echo e($val->title); ?></h2>
                <?php echo $val->description; ?>                
                  <a href="<?php echo e(url('/authorguidelines-download')); ?>" title="Download Author Guidelines">
                    <span class="download">
                      <img src="<?php echo e(config('app.url')); ?>images/pdf-big.gif" alt="Download Author Guidelines">
                    </span>
                  </a>
              </div>             
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="mb-3"></div>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/authorguidelines/index.blade.php ENDPATH**/ ?>