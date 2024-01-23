
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="clearfix"></div>

      <div class="container">
        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="">Industry Updates</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Industry Updates</h1>            
                </div>

                <p>Industry Updates page is a one stop destination that allows every one to stay connected to the updates from industry through the sections News, Press Releases and Events. It simplifies the quest for latest information and happenings in the industry with quick updates.</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                  <div class="col-md-12">
                    <a href="<?php echo e(url('news')); ?>">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">NEWS</span></h3>
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="<?php echo e(url('pressreleases')); ?>">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">PRESS RELEASES</span></h3>
                    </a>
                  </div>

                  <div class="col-md-12">
                    <a href="<?php echo e(url('events')); ?>">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">EVENTS</span></h3>
                    </a>
                  </div>
                 
                </div>               
              </div> 
            </div>


            <!--// Square Banners -->
            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               
               <?php echo $__env->make('layouts.partials._square_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           </div>
            <!-- Square Banners // --> 
        </div>

      </div>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/industryupdate/index.blade.php ENDPATH**/ ?>