
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                   <a href="">Client e-Mailblast Archives</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="float-left PF-Bshelf">e-Newsletter</h1>
                  <span class="PF-ForthIssue PF-MobP015 PF-MobMB10">
                    <a href="<?php echo e(config('app.url')); ?>clientemailblast/<?php echo e($data[0]->file); ?>" target="_blank" class="float-right">
                      <i class="fa fa-book mr-2"></i> CURRENT eDM</a>
                  </span>
                  <div class="clearfix"></div>
                </div>    
              </div>


              <div class="col-lg-12 col-md-12 col-sm-12 col-12"> <!--// Events Content -->
                <?php if($data): ?>
                <div class="row">
                  <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($key != 0): ?>                    
                    <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                      <a href="<?php echo e(config('app.url')); ?>clientemailblast/<?php echo e($val['file']); ?>" target="_blank" class="">
                        <span class="PF-NwsLtr">
                          <img src="<?php echo e(config('app.url')); ?>e-newsletters/images/vertical-cover-logo.jpg" alt="<?php echo e($val->title); ?>" width="100%" />
                          <div class="PF-NwsCaption">
                            <span class="PF-IntigerStyle"><?php echo e($val->title); ?></span>
                          </div>
                        </span>
                      </a>  
                    </div>  
                    <?php endif; ?>             
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                <?php endif; ?>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/enewsletter/emailblast-archives.blade.php ENDPATH**/ ?>