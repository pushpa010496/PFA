<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="clearfix"></div>
      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo e(url('/knowledgebank')); ?>">Knowledge Bank</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(trans('messages.interviews_title')); ?></li>
            </ol>
          </nav>
        </div>
        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.interviews_title')); ?></h1>            
                </div>
                <p><?php echo e(trans('messages.interviews_text')); ?></p>
              </div>
              <?php $__currentLoopData = $interviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list mb-3">
                <h2 class="mb-1 PF-TXTBlk000">
                  <a href="<?php echo e(route('interviews.url',[$val->url])); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTBlk000"><?php echo $val->title; ?></a>
              </h2>
                <h5 class="PF-Caps text-muted"><?php echo e($val->name); ?></h5>
                <h6 class="PF-Caps text-muted"><?php echo e($val->designation); ?></h6>
                <?php echo $val->description; ?>

              </div> 
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
  var url = "<?php echo e(url('interviews/more')); ?>";
 <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/interviews/index.blade.php ENDPATH**/ ?>