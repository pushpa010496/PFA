

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
   "headline": "<?php echo e($interviews->title); ?>",
  "description": "<?php echo e($interviews->description); ?>",
    "image": "https://industry.pharmafocusasia.com/images/logo.png",  
  "author": {
    "@type": "Person",
     "name": "<?php echo e($interviews->name); ?>",
     "url": "<?php echo e($path); ?>"
  },  
  "publisher": {
    "@type": "Organization",
    "name": "Pharma Focus Asia",
    "logo": {
      "@type": "ImageObject",
      "url": "https://industry.pharmafocusasia.com/images/logo.png"
    }
  },
   "datePublished": "<?php echo e($interviews->created_at); ?>",
  "dateModified": "<?php echo e($interviews->updated_at); ?>"
}
</script>

<div class="clearfix"></div>





  <div class="container">



    <div class="row PF-MobP030">

      <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item">

            <a href="<?php echo e(url('/knowledgebank')); ?>">Knowledge Bank</a>

          </li>

          <li class="breadcrumb-item active PF-TXTRED" aria-current="page">Interviews</li>

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 PF-BrdrDDD p-1">

       

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <h1 class="pt-2 PF-TXTRED"><?php echo $interviews->title; ?></h1>        

        </div> 



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-2 pb-3"> 

          <div class="media PF-BGf7f7f7 PF-BrdrDDD mb-3 author-brdr">

            <div class="row">

              <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 pr-0" align="text-center">

                <img src="<?php echo e(config('app.url').'knowledgebank/interview/'.$interviews->photo); ?>" alt="<?php echo e($interviews->alt_tag); ?>" width="100%">

              </div>



              <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">

                <h3 class="PF-TXTRED display-5"><?php echo e($interviews->name); ?> ,&nbsp;

                  <small class="PF-TXTBlk"><?php echo e($interviews->designation); ?></small>

                </h3>

                <p class="mb-0"><?php echo $interviews->description; ?></p>

              </div>

            </div>

          </div>

        </div>



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

          <?php echo $interviews->quest_answer; ?>


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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/interviews/show.blade.php ENDPATH**/ ?>