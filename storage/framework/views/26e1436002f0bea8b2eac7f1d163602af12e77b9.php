 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">
 	<h2 class="mb-1 PF-TXTBlk000">
 		<a href="<?php echo e(route('news.url',[$val->url])); ?>" title="Patient Experience" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>
 	</h2>
 	<small class="PF-Caps text-muted"><?php echo e(date('l, F d, Y ', strtotime($val->date))); ?></small>
 	
 	 <p><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 250, $end = '...')); ?> </p>
 </div> 
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/news/loadmore.blade.php ENDPATH**/ ?>