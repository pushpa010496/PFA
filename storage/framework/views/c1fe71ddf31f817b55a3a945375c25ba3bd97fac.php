

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<?php
      $path = Request::url();
           
      ?>
      
   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Book",  
  "@id": "<?php echo e($path); ?>",
  "copyrightYear": "<?php echo e(date('Y', strtotime( $data->publisher_date))); ?>",
  "description": "<?php echo $data->description; ?>",
  "genre": "Educational Materials",
  "inLanguage": "en-US",
  "isFamilyFriendly": "true",
  "name": "<?php echo e($data->title); ?>",
  "numberOfPages": "<?php echo e($data->no_pages); ?>",
  "author": {
    "@type": "Person",
    "name": "<?php echo e($data->authors); ?>"
  },
  "publisher": {
    "@type": "Organization",
    "name": "<?php echo e($data->publisher); ?>"
  }
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
    "item": "<?php echo e(url('/knowledgebank')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Book Shelf",
    "item": "<?php echo e(url('/bookshelf')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo e($data->title); ?>",
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

            <a href="<?php echo e(url('/knowledgebank')); ?>">Knowledge Bank</a>

          </li>

          <li class="breadcrumb-item" aria-current="page">

            <a href="<?php echo e(url('/bookshelf')); ?>">Book Shelf</a>

          </li>

          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"></li>

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



        <div class="col-lg-12 pt-2 pb-2">

          <div class="col-lg-12 p-0">

            <h1 class="PF-TXTRED"><?php echo e($data->title); ?></h1>

          </div>

        </div>



        <div class="col-lg-12">

          <div class="row">

            <div class="col-lg-3 col-md-3 col-sm-4 col-12 pb-3"> 

              <img class="img-fluid" src="<?php echo e(config('app.url') .'knowledgebank/bookshelf/'. $data->bookshelf_image); ?>" alt="<?php echo e($data->alt_tag); ?>" title="<?php echo e($data->title_tag); ?>" width="100%"> 

              <div class="pl-2 pt-2 PF-BrdrDDD PF-BGf7f7f7">

                <p><strong>Pages:</strong> <?php echo e($data->no_pages); ?></p>

                <p><strong>Publisher:</strong> <?php echo e($data->publisher); ?></p>

                <p>Year of Publication:<strong> <?php echo e(date('Y', strtotime( $data->publisher_date))); ?></strong></p> 

              </div>

            </div>



            <div class="col-lg-9 col-md-9 col-sm-8 col-12 PF-PB20">

              <p><strong>Author(s) :</strong> <?php echo e($data->authors); ?></p>

              <p><strong>Book Description:</strong></p>

               <?php echo $data->description; ?>  

            </div> 

          </div>  

        </div>

      </div>

      <!-- // RIGHT SECTION // --> 



      <!--// RIGHT SECTION - Square Banners -->

      <div class="col-lg-3 col-md-3 d-none d-sm-block text-center">               

       

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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/bookshelf/show.blade.php ENDPATH**/ ?>