
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/form-design.css">

<style>
  @media (max-width: 767.98px) {  
    iframe{
      border: none;
      width: 100% !important;
      height: 450px !important;
    }
  }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="clearfix"></div>

<div class="container">

  <div class="row PF-MT10 PF-WytBG"> <!--// events -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-BrdrDDD PF-P0">
      <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-MobP0">
        <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
          <h1 class="PF-Bshelf pt-2">Latest Digital Magazine</h1>
        </div>
        <div class="clearfix"></div>          
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-PB20" align="center"> 

      

        <?php if(!empty($ebook)): ?>

        <?php if($ebook->script_type == 0): ?>
        <div data-configid="2216358/<?php echo e($ebook->ebook_script); ?>" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>
        <?php else: ?>
        <?php echo $ebook->ebook_script; ?>

        <!--  <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:326px;" src="//e.issuu.com/embed.html?d=pfa_36_-_2019&u=verticaltalk"></iframe>        --> 
        <?php endif; ?>
        
        
        <?php endif; ?>

        <div class="col-lg-4 col-md-4 col-sm-3 hidden-xs"></div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-2" align="center">

          <h3 class="col-md-12 PF-MobP015"> <strong><em><?php echo e(trans('messages.sitename')); ?></em></strong> is a quarterly publication.</h3>

          <div class="col-lg-12 col-md-12 col-sm-12 col-12 PF-PTB20" align="center">
            <div class="row">
              <h4 class="col-md-6 PF-PTB10" align="center">
                <a href="<?php echo e(url('editorial-calendar')); ?>"> 
                  <i class="fa fa-download PF-PB10" style="font-size: 30px;" aria-hidden="true"></i>

                  <br>
                  Editorial Calendar
                </a>
              </h4>

              <h4 class="col-md-6 PF-PTB10" align="center">
                <a href="<?php echo e(url('mediapacks')); ?>"> 
                  <i class="fa fa-download PF-PB10" style="font-size: 30px;" aria-hidden="true"></i>

                  <br>
                  Mediapack
                </a>
              </h4>

            </div>


          </div>
        </div>
      </div>  

    </div>

  </div>

</div>







<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/ebook/latestissue.blade.php ENDPATH**/ ?>