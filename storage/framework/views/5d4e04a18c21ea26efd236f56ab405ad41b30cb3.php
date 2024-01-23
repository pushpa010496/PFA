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



              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="<?php echo e(url('pharma-reports')); ?>"><?php echo e(trans('messages.industry_reports')); ?></a></li>



              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(trans('messages.healthcare-reports_title')); ?></li>



            </ol>



          </nav>



        </div>







        <div class="row PF-WytBG">



            <!-- // RIGHT SECTION --> 



            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">







              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pb-2">



                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">



                  <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.healthcare-reports_title')); ?></h1>            



                </div>



                <p><?php echo e(trans('messages.healthcare-reports_text')); ?> </p>



              </div>







            



              <?php $__currentLoopData = $industryreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>



              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list">



                <h2 class="mb-1 PF-TXTBlk000">



                  <a href="<?php echo e(route('pharma-reports.url',[$val->url])); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($val->title1); ?></a>



                </h2>               



                <p class="PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...')); ?></p>            



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



  var url = "<?php echo e(url('pharma-reports/more')); ?>";



 <?php echo $__env->make('layouts/partials/_loadmorejs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/pharmareport/index.blade.php ENDPATH**/ ?>