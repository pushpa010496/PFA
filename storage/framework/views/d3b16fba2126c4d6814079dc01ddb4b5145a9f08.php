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

              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(ucwords( str_replace('-',' ', Request::segment(count(Request::segments()))) )); ?></li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2">Terms Conditions</h1> 

                </div>



               <?php echo $cmspage->description; ?>  

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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/cms/terms-conditions.blade.php ENDPATH**/ ?>