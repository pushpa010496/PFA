 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-list mb-3">
 	<h2 class="mb-1 PF-TXTBlk000">
 		<a href="<?php echo e(route('interviews.url',[$val->url])); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($val->title); ?></a> 		
 	</h2>
 	<h5 class="PF-Caps text-muted"><?php echo e($val->name); ?></h5>
 	<h6 class="PF-Caps text-muted"><?php echo e($val->designation); ?></h6>
 	<?php echo $val->description; ?>
 </div> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/interviews/loadmore.blade.php ENDPATH**/ ?>