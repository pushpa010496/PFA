<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list mb-3">


 <h2 class="mb-1 PF-TXTBlk000">


   <a href="<?php echo e(route('articles.url',[$val->url])); ?>" title="<?php echo e($val->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($val->title); ?></a>


 </h2>


 <h5 class="PF-Caps text-muted"><?php echo e($val->sub_title); ?></h5>


<!--   <?php echo $val->short_description; ?> -->


   <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...')); ?>



</div> 


<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/articles/loadmore.blade.php ENDPATH**/ ?>