 <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


 <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">


 	<h2 class="mb-1 PF-TXTBlk000">


 		<a href="<?php echo e(route('technotrends.url',[$val->url])); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>


 	</h2>


 		<!-- <p class="PF-TXTBlk pt-1">


 			<?php echo e($val->short_description); ?>...</p>  -->


 	<p class="PF-TXTBlk"><?php echo e(Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 350, $end = '...')); ?></p>            


 </div> 


 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/technotrends/loadmore.blade.php ENDPATH**/ ?>