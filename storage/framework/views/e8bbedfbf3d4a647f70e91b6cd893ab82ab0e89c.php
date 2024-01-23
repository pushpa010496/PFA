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
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page">Pharma reports</li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2">Pharma Reports</h1>            
                </div>

                <p>Our industry reports are the go-to solution for many Pharma professionals. They add credibility to the businesses. They help to stay up to date on the latest trends and also give a holistic view. These insights assist to gain actionable ideas and better decision-making.</p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <div class="col-md-12">
                    <a href="<?php echo e(url('/pharma-reports')); ?>">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">PHARMA REPORTS</span></h3>
                    </a>
                  </div>

                  <!-- <div class="col-md-12">
                    <a href="<?php echo e(url('/reports')); ?>">
                      <h3 class="mb-4 PF-Caps"><span class="PF-Caps PF-TXTRED">GLOBAL REPORTS</span></h3>
                    </a>
                  </div> -->

                 
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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/pharmareport/industryreports_index.blade.php ENDPATH**/ ?>