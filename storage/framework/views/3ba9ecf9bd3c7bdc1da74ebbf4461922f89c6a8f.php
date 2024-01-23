
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                   <a href=""><?php echo e(trans('messages.enewsletter_title')); ?></a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
                  <h1 class="float-left PF-Bshelf"><?php echo e(trans('messages.enewsletter_title')); ?></h1>
                  <span class="PF-ForthIssue PF-MobP015 PF-MobMB10">
                    <a href="e-newsletter-subscribe" target="_blank" class="float-right">
                      <i class="fa fa-book mr-2"></i> Subscribe</a>
                  </span>
                  <div class="clearfix"></div>
                </div>         
                <p><?php echo e(trans('messages.enewsletter_text')); ?></p>
              </div>

              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <iframe id="form-iframe" src="<?php echo e(config('app.url').'e-newsletters/'.$data->file); ?>" style="margin:0; width:100%; height:2050px; border:none; overflow:hidden;" scrolling="no"></iframe>
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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/enewsletter/index.blade.php ENDPATH**/ ?>