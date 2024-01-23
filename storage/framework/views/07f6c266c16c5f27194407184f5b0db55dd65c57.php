

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
      $path = Request::url();
           
      ?>

      
       <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
   "@id": "<?php echo e($path); ?>"
  },
   "headline": "<?php echo e($whitepapers->title); ?>",
  "description": "<?php echo e($whitepapers->short_description); ?>",
    "image": "https://industry.pharmafocusasia.com/images/logo.png",  
  "publisher": {
    "@type": "Organization",
    "name": "Pharma Focus Asia",
    "logo": {
      "@type": "ImageObject",
      "url": "https://industry.pharmafocusasia.com/images/logo.png"
    }
  },
   "datePublished": "<?php echo e($whitepapers->created_at); ?>",
  "dateModified": "<?php echo e($whitepapers->updated_at); ?>"
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Knowledge Bank",
    "item": "<?php echo e(url('knowledgebank')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Whitepapers",
    "item": "<?php echo e(url('whitepapers')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo e($whitepapers->title); ?>",
    "item": "<?php echo e(Request::url()); ?>"  
  }]
}
</script>



<script>$breadcrumb-divider: quote(">");</script>



    <div class="clearfix"></div>



      <div class="container">



        <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('knowledgebank')); ?>">Knowledge Bank</a>

              </li>

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('whitepapers')); ?>">Whitepapers</a>

              </li>

              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

                <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

                <h1 class="mb-1 mt-2 PF-TXTRED"><?php echo e($whitepapers->title); ?></h1>               

                <p><?php echo $whitepapers->description; ?></p> 

                  <?php if(@$whitepapers->pdf): ?>

                   <h2 class="mb-1 mt-2 PF-TXTRED">Download '.pdf' Format of the whitepaper.</h2> 

                    <a href="<?php echo e(route('whitepapersform.download',[$whitepapers->url])); ?>" title="Download Whitepapers">

                      <span class="download">

                        <img src="<?php echo e(config('app.url')); ?>images/pdf-big.gif" alt="Download Whitepapers">

                      </span>

                    </a>  

                  <?php endif; ?>           

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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/whitepapers/show.blade.php ENDPATH**/ ?>