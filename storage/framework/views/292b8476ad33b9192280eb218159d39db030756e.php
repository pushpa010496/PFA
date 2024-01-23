
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="clearfix"></div>

  <div class="container">

    <div class="row PF-MobP030">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo e(url('/industryupdates')); ?>">Industry Updates</a>
          </li>
          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(trans('messages.news_title')); ?></li>
        </ol>
      </nav>
    </div>

    <div class="row PF-WytBG">
      <!-- // LEFT SECTION --> 
      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
          <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
            <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.news_title')); ?></h1>            
          </div>
          <p><?php echo trans('messages.news_text'); ?></p>
        </div>


              <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-P0">
                <nav>
                   <?php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); ?>

         
                  <ul class="pagination PF-M0 PF-PT10">
                    <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle"><?php echo e(date('Y')-1); ?></span></a> </li>
                    
                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 

                    <li><a href="<?php echo e(url('/')); ?>/listnews/month/<?php echo e($key); ?>/year/<?php echo e(date('Y')-1); ?>" class="PF-BrdrRds0"><?php echo e($value); ?></a></li>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>

                
                  <ul class="pagination PF-M0 PF-PT10">
                    <li> <a  class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle"><?php echo e(date('Y')); ?></span></a> </li>
                    
                     <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                      <?php if($key <= date('n')): ?>
                          <li><a href="<?php echo e(url('/')); ?>/listnews/month/<?php echo e($key); ?>/year/<?php echo e(date('Y')); ?>" class="PF-BrdrRds0"><?php echo e($value); ?></a></li>
                      <?php else: ?>
                          <li><a href="javascript:void(0)" class="PF-BrdrRds0 PF-Bgeee"><?php echo e($value); ?></a></li>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                  </ul>


                </nav>
              </div>

        
        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
          <h2 class="mb-1 PF-TXTBlk000">
            <a href="<?php echo e(route('news.url',[$val->url])); ?>" title="Patient Experience" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>
          </h2>
          <small class="PF-Caps text-muted"><?php echo e(date('l, F d, Y ', strtotime($val->date))); ?></small>
                
           <p><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...')); ?> </p>
        </div> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         <?php echo $__env->make('layouts/partials/_loadmorehtml', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      </div>
      <!-- // LEFT SECTION // --> 

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
  var url = "<?php echo e(url('news/more')); ?>";
    <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/news/index.blade.php ENDPATH**/ ?>