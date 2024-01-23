 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
 	<h2 class="mt-3 mb-0 PF-TXTBlk000">
 		<?php if($current_issue->id === $val->issue->id): ?>
 		<a href="<?php echo e(url('latest-ebook')); ?>" title="<?php echo e($val->title); ?>" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>
 		<?php else: ?>
 		<a href="<?php echo e(url($cat->url) .'/'. $val->url); ?>" title="<?php echo e($val->title); ?>" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>
 		<?php endif; ?>                 
 	</h2>
 	<h3 class="PF-Caps text-muted small mb-0 pt-1"><?php echo e($val->sub_title); ?></h3>
 	
 	<p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...')); ?></p> 
 </div> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/editorial/loadmore.blade.php ENDPATH**/ ?>