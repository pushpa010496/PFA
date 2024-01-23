<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
      $path = Request::url();
      ?>
      
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NewsArticle",
  "mainEntityOfPage": {
    "@type": "WebPage",
   "@id": "<?php echo e($path); ?>"
  },
   "headline": "<?php echo e($pressreleases->title); ?>",
  "description": "<?php echo e($pressreleases->short_description); ?>",
    "image": "https://industry.pharmafocusasia.com/images/logo.png",  
 
  "publisher": {
    "@type": "Organization",
    "name": "Pharma Focus Asia",
    "logo": {
      "@type": "ImageObject",
      "url": "https://industry.pharmafocusasia.com/images/logo.png"
    }
  },
   "datePublished": "<?php echo e($pressreleases->created_at); ?>",
  "dateModified": "<?php echo e($pressreleases->updated_at); ?>"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Industry Updates",
    "item": "<?php echo e(url('/industryupdates')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Pharma Pressreleases",
    "item": "<?php echo e(url('/pressreleases')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo e($pressreleases->title); ?>",
    "item": "<?php echo e(Request::url()); ?>"  
  }]
}
</script>

<div class="clearfix"></div>



  <div class="container">



    <div class="row PF-MobP030">

      <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item">

            <a href="<?php echo e(url('/industryupdates')); ?>">Industry Updates</a>

          </li>

          <li class="breadcrumb-item">

            <a href="<?php echo e(url('/pressreleases')); ?>">Pharma Pressreleases</a>

          </li>

          <li class="breadcrumb-item PF-TXTRED text-capitalize" aria-current="page"></li>

         

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">       

        <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

          <h2 class="mb-3 mt-2 PF-TXTRED "><?php echo e($pressreleases->title); ?></h2>

          <p class="small PF-Caps text-muted mb-2 mt-2"><?php echo e(date('l, F d, Y ', strtotime($pressreleases->date))); ?></p>

          <?php echo $pressreleases->description; ?>


        </div> 

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



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/pressreleases/show.blade.php ENDPATH**/ ?>