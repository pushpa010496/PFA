<?php
echo '<?xml version="1.0"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
   <?php $__currentLoopData = $advertorials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $advertorial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <url>
        <loc><?php echo e(url('/')); ?>/advertorials/<?php echo e($advertorial->url); ?></loc>
    
    
        <lastmod> <?php echo e($advertorial->updated_at); ?> </lastmod>
    
        <changefreq>daily</changefreq>
    
        <priority>0.1</priority>
    </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH /home/pharmafocusasia/public_html/resources/views/sitemaps/advertorials.blade.php ENDPATH**/ ?>