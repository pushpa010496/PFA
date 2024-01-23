
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="clearfix"></div>

      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo e(url('/magazine')); ?>">Magazine</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(ucwords(Request::segment(count(Request::segments())))); ?></li>

            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.testimonials_title')); ?></h1> 
                </div>

                <p class="mb-0"><?php echo e(trans('messages.testimonials_text')); ?></p>            
              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
               

              <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 PF-BrdrBEEE mt-4">
                  <div class="row">
                    <p class="col-lg-8 col-md-8 col-sm-9 col-xs-12 pt-3">
                      <span>
                        <img src="<?php echo e(config('app.url')); ?>images/Left_quote_14.png" class="mr-2 PF-MTN10" alt="quotes">
                      </span>
                      <!-- <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description)))),$limit = 400, $end = '...')); ?> -->
                      <?php echo e(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->description))))); ?>

                      <span>
                        <img src="<?php echo e(config('app.url')); ?>images/right_quote_14.png" class="ml-2 PF-MTN10" alt="quotes">
                      </span>
                    </p>
                    <h2 class="col-lg-4 col-md-4 col-sm-3 col-xs-12 PF-BGf7f7f7 mb-0 p-3"><span class="PF-TXTRED"><?php echo e($val->name); ?></span><br>
                     <p class="small mb-0"><?php echo e($val->designation); ?>, <?php echo e($val->company); ?></p>
                    </h2>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
  var url = "<?php echo e(url('testimonials/more')); ?>";
    <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/testimonials/index.blade.php ENDPATH**/ ?>