

<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<script type="text/javascript">

   sessionStorage.setItem('advertOnce','true');

</script>
<?php
      $path = Request::url();
      if($data->authors->count() != 0){
            foreach($data->authors as $val)  {

      if($val->title !="No Author")       {      
      $author=$val->title;


            }else{
              $author="Noauthor";      
                }
          }
        }else{
              $author="Noauthor";  
        }
      ?>
      
   
     <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
   "@id": "<?php echo e($path); ?>"
  },
   "headline": "<?php echo e($data->title); ?>",
  "description": "<?php echo e($data->abstract); ?>",
    "image": "https://industry.pharmafocusasia.com/images/logo.png",  
  "author": {
    "@type": "Person",
     "name": "<?php echo e($author); ?>",
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
   "datePublished": "<?php echo e($data->created_at); ?>",
  "dateModified": "<?php echo e($data->updated_at); ?>"
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
    "name": "Pharma Articles",
    "item": "<?php echo e(url('articles')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo e($data->title); ?>",
    "item": "<?php echo e(Request::url()); ?>"  
  }]
}
</script>

<div class="clearfix"></div>



  <div class="container" style="word-wrap: break-word;">



    <div class="row PF-MobP030">

      <nav aria-label="breadcrumb">

        <ol class="breadcrumb">

          <li class="breadcrumb-item">

            <a href="<?php echo e(url('/knowledgebank')); ?>">Knowledge Bank</a>

          </li>

          <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><a href="<?php echo e(url('articles')); ?>">Pharma Articles</a></li>

        </ol>

      </nav>

    </div>



    <div class="row PF-WytBG">

      <!-- // RIGHT SECTION --> 

      <div class="col-lg-9 col-xs-12 PF-BrdrDDD p-1">

       

        <div class="col-lg-12 col-xs-12">

          <h1 class="pt-2 PF-TXTRED"><?php echo e($data->title); ?></h1>

          <h2 class="PF-Quotes mt-0"><?php echo $data->sub_title; ?></h2>        

        </div> 



        <!-- Author Details -->

        <?php if($data->authors->count() != 0): ?>

        

          <div class="col-lg-12 col-xs-12">

            <?php $__currentLoopData = $data->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <?php if($val->title !="No Author"): ?>

            <h3 class="PF-TXTRED mt-2"><?php echo e($val->title); ?>,



            <span class="PF-TXTBlk" style="font-size:13px;">  <?php echo e(strip_tags(ucfirst($val->authorbio))); ?></span>

          </h3>

             <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>



          <?php endif; ?>

          <!-- End Author Details -->

          <?php if($data->abstract): ?>

          <div class="col-lg-12 pt-2 pb-3"> 

            <div class="media bloq-bg">  

              <div class="col-lg-12">

                <blockquote>

                  <h4 class="PF-Quotes mb-0"><?php echo $data->abstract; ?></h4>

                </blockquote>

              </div>

            </div>

          </div>

          <?php endif; ?>



          <!-- MAIN BODY -->

          <div class="col-lg-12">

            <?php echo $data->main_body; ?>


          </div> 

          <!-- END MAIN BODY -->



          <!-- AUTHOR BIO -->

            <?php if($data->authors->count() != 0): ?>

           <?php $__currentLoopData = $data->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <?php if($val->title !="No Author"): ?>

          <div class="col-lg-12"> 

            <div class="media PF-BGf7f7f7 PF-BrdrDDD mb-4 author-brdr">   

              <div class="row">  

              <?php if($val->image): ?>       

                <div class="col-lg-2 pr-0" align="text-center">

                  <img class="img-fluid" src="<?php echo e(config('app.url').'/contributors/'.$val->image); ?>" alt="<?php echo e(@$val->alt_tag); ?>" title="<?php echo e(@$val->title_tag); ?>" style="min-width: 110px;"> 

                </div>  

                <?php else: ?>

                    <div class="col-lg-2 pr-0" align="text-center">

                <img class="img-fluid shadow-sm" src="<?php echo e(config('app.url').'contributors/'); ?>/1421757887-img-contributer.jpg" style="min-width: 110px;" />

                </div>

                <?php endif; ?>

                <div class="col-lg-10">

                  <div class="pt-1">

                    <p class="mb-0"> <?php echo $val->details; ?></p>

                  </div>

                </div>

              </div>                   

            </div>

          </div>

          <?php endif; ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>

                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">

                    <div class="row PF-BGf7f7f7 PF-BrdrDDD author-brdr">            

                      <div class="col-lg-2 p-2 text-center"> 

                        <img class="img-fluid shadow-sm" src="<?php echo e(config('app.url').'contributors/'); ?>/1421757887-img-contributer.jpg" style="min-width: 110px;" />



                      </div>

                      <div class="col-lg-10 p-2">                        

                       

                      </div>

                    </div>

                  </div>

                <?php endif; ?>

          <!-- END AUTHOR BIO -->

        

        </div>

        <!-- // RIGHT SECTION // --> 



      <!--// RIGHT SECTION - Square Banners -->

      <div class="col-lg-3 col-xs-12 text-center"> 

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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/knowledgebank/articles/show.blade.php ENDPATH**/ ?>