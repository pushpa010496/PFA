<?php $__env->startSection('style'); ?>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>





    <div class="clearfix"></div>



    <div class="row">

      <div class="container">

        <div class="pt-5 d-sm-none d-xs-none"></div>

        <div class="col-lg-10 offset-lg-1 pt-5 pb-5">

            <h1 class="text-center display-4 font-weight-bold" style="color: green;">Thank You...!</h1> 

            <p style="line-height: 150%;" align="center">Thank you for showing interest in our Editorial Calendar, our representative will reach you shortly.

            </p>

        </div>

        <div class="pt-5 pb-5"></div>

      </div>

    </div>



  <?php if(session('status') == 'true'): ?> 

  <a id="filedownload" download target="_blank" style="display: none" href="<?php echo e(asset('/public/editorial-calendar/pharmafocus-asia-editorial-calendar.pdf')); ?>">download</a>

  

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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/editorialcalendar/success.blade.php ENDPATH**/ ?>