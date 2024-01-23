 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">
 	<div class="row PF-BGf7f7f7 PF-BrdrDDD">            
 		<div class="col-lg-2 p-2 text-center"> 
 			<img class="img-fluid shadow-sm" src="<?php echo e(config('app.url').'advisoryboard/'.$val->image); ?>" title="<?php echo e($val->title); ?>" alt="<?php echo e($val->title); ?>"  width="150" />
 		</div>

 		<div class="col-lg-10 p-2">
 			<h2 class="PF-TXTRED"><?php echo e($val->title); ?></h2>
 			<span class="font-14 MB-0"><?php echo $val->description; ?></span>
 		</div>
 	</div>
 </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/advisoryboard/loadmore.blade.php ENDPATH**/ ?>