
<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="clearfix"></div>
    <div class="container">
      <div class="row">
        <div class="pt-5 d-sm-none d-xs-none"></div>
        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">
            <h1 class="text-center display-4 font-weight-bold" style="color: green;">Thank You...!</h1> 
            <p style="line-height: 150%;font-size: 20px;" align="center"><em> Our team extends its gratitude for your interest in Pharma Focus Asia Magazine. An email confirming your initiation will be sent to you shortly. We look forward to approaching you soon. In the interim, please feel free to explore <?php echo e(trans('messages.sitename')); ?> by subscribing to our e-book and e-Newsletter. A world of Pharma insights and industrial acumen awaits you!</em></p>
        </div>
        <div class="pt-5 pb-5"></div>
      </div>
    </div>
  <?php if(Session('status') == 'true'): ?> 
  <a id="filedownload" download style="display: none" href="<?php echo e(trans('messages.mediapack_download_path')); ?>">Download</a>

  <?php endif; ?>  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
  <?php if(Session('status') == 'true'): ?> 
    <script type="text/javascript">   
      for (let link of document.querySelectorAll('a[download]'))
        link.click();
    </script>
  <?php endif; ?>  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/mediapack/success.blade.php ENDPATH**/ ?>