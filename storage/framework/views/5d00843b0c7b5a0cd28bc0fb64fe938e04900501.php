<?php $__env->startSection('style'); ?>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



<div class="clearfix"></div>



<div class="container">

         <!-- <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('/webinars')); ?>">Webinars</a>

              </li>

              <li class="breadcrumb-item active text-capitalize" aria-current="page">Webinars</li>

            </ol>

          </nav>

        </div> -->

        <div class="row">

          <div class="col-lg-9">

            <?php

            $upcoming_flag = false;

            $completed_flag = false;

            ?>

            <?php $__currentLoopData = $upcome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($upcoming_flag == false): ?>

            <div class="pb-2">

              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                <h1 class="PF-Bshelf pt-2">Upcoming Webinars</h1>            

              </div>               

            </div> 

            <?php endif; ?>

            <?php $upcoming_flag = true ?>

            <div class="mb-3">

 <?php if($val->is_series): ?>

              <span class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20"><?php echo e($val->series_title); ?></span>

<?php endif; ?>

              <div class="p-2 bg-light border">

                <div class="row">

                  <div class="col-lg-3 col-12 text-center align-self-center">

                    <img src="<?php echo e(config('app.url').'/webinars/'. $val->image); ?>" alt="<?php echo e($val->alt_tag); ?>" title="<?php echo e($val->alt_tag); ?>" class="img-fluid" /> 

                  </div>

                  <div class="col-lg-9 col-12">

                    <h2 class="mt-1 font-18">

                      <a href="<?php echo e(url($val->url)); ?>" title="<?php echo $val->title_tag; ?>" class="PF-TXTRED" target="_blank"><?php echo $val->title; ?></a>

                    </h2>

                    <p class="font-16 mb-2"> <?php echo $val->date; ?></p>                      

                <p class="font-16 font-weight-bold mb-0"><?php echo e($val->speaker); ?></p>

                <p class="text-muted small mb-2"><?php echo $val->speaker_designation; ?></p>

                <!-- <p class="text-muted small mb-2 text-right">Webinar Language: Korean</p> -->



                <p class="font-16 font-weight-bold mb-0"><?php echo e(@$val->speaker2); ?></p>

                <p class="text-muted small mb-2"><?php echo @$val->speaker2_designation; ?></p>



                <p class="font-16 font-weight-bold mb-0"><?php echo e(@$val->speaker3); ?></p>

                <p class="text-muted small mb-2"><?php echo @$val->speaker3_designation; ?></p>



                      <div class="text-left">

                        <?php if($val->is_series): ?>

                          <a href="<?php echo e($val->china_url); ?>" target="_blank" class="btn btn-sm btn-danger"><?php echo e(@$val->china_title); ?></a> 

                          <span class="p-1"></span>

                          <a href="<?php echo e($val->korea_url); ?>" target="_blank" class="btn btn-sm btn-danger"><?php echo e(@$val->korea_title); ?></a> 

                        <?php endif; ?>

                      </div>

                  </div>

                </div>

              </div>

            </div>





            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



            <?php $__currentLoopData = $complete; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($val->webinar_date <=  Carbon\Carbon::today()): ?>

            <?php if($completed_flag == false): ?>

            <div class="pb-2">

              <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                <h1 class="PF-Bshelf pt-2">Completed Webinars</h1>            

              </div>               

            </div> 

            <?php endif; ?>



            <?php $completed_flag = true ?>



                   <div class="mb-3">

 <?php if($val->is_series): ?>

              <span class="bg-primary pl-4 pr-4 pt-1 pb-1 text-white mb-0 font-weight-bold font-20"><?php echo e($val->series_title); ?></span>

<?php endif; ?>

              <div class="p-2 bg-light border">

                <div class="row">

                  <div class="col-lg-3 col-12 text-center align-self-center">

                    <img src="<?php echo e(config('app.url').'/webinars/'. $val->image); ?>" alt="<?php echo e($val->alt_tag); ?>" title="<?php echo e($val->alt_tag); ?>" class="img-fluid" /> 

                  </div>

                  <div class="col-lg-9 col-12">

                    <h2 class="mt-1 font-18">

                      <a href="<?php echo e(url($val->url)); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTRED" target="_blank"><?php echo e($val->title); ?></a>

                    </h2>

                    <p class="font-16 mb-2"> <?php echo $val->date; ?></p>                      

                    <p class="font-16 font-weight-bold mb-0"><?php echo e($val->speaker); ?></p>

                    <p class="text-muted small mb-2"><?php echo $val->speaker_designation; ?></p>

                    <p class="font-16 font-weight-bold mb-0"><?php echo e(@$val->speaker2); ?></p>

                    <p class="text-muted small mb-2"><?php echo @$val->speaker2_designation; ?></p>
                    <p class="font-16 font-weight-bold mb-0"><?php echo e(@$val->speaker3); ?></p>

<p class="text-muted small mb-2"><?php echo @$val->speaker3_designation; ?></p>

                      <div class="text-left">

                        <?php if($val->is_series): ?>
                            
                          <a href="<?php echo e($val->china_url); ?>" target="_blank" class="btn btn-sm btn-danger"><?php echo e(@$val->china_title); ?></a> 

                          <span class="p-1"></span>

                          <a href="<?php echo e($val->korea_url); ?>" target="_blank" class="btn btn-sm btn-danger"><?php echo e(@$val->korea_title); ?></a> 
                          <span class="p-1"></span>
                          <a href="<?php echo e($val->japanese_url); ?>" target="_blank" class="btn btn-sm btn-danger"><?php echo e(@$val->japanese_title); ?></a> 
                        <?php endif; ?>

                      </div>

                  </div>

                </div>

              </div>

            </div>



            <?php endif; ?>  





            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









          </div>





          <!--// Square Banners -->

          <div class="col-lg-3 mt-4 d-none d-sm-block text-center"> 

          <?php echo $__env->make('layouts.partials._square_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

           <!--<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   -->

           <!--<?php $__currentLoopData = $banner->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>-->

           <!--<?php if($banner->positions[0]->id == 6 and $pcount->id == 51): ?>-->



           <!--<a href="<?php echo e($banner->url); ?>" target="_blank" class="mb-3" title="<?php echo e($banner->title); ?>"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>banners/<?php echo e($banner->image); ?>" alt="<?php echo e($banner->alt_tag); ?>" /></a>-->

           <!--<?php else: ?>-->

           <!--<?php endif; ?>  -->

           <!--<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->



           <!--<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>-->

         </div>

         <!-- Square Banners // --> 

       </div>



     </div>





     <?php $__env->stopSection(); ?>



     <!-- welcome popup 2 -->

     <!-- <div id="myModalpopup" class="modal fade" role="dialog">

  <div class="modal-dialog modal-dialog-centered">

    <div class="modal-content p-0">           

      <div class="modal-body p-0">

        <button type="button" class="close" data-dismiss="modal">&times;</button>        

        <a href="https://www.pharmafocusasia.com/promotion/acg-world-capsules-webinar" target="_blank"> 

             <img src="<?php echo e(config('app.url')); ?>images/acg-world-capsules-webinar.jpg" alt="Pop-Up" class="img-fluid" /> 

        </a> 

      </div>          

    </div>

  </div>

</div>  -->





<!--End welcome popup -->

     <?php $__env->startSection('scripts'); ?>



     <?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/webinars/index.blade.php ENDPATH**/ ?>