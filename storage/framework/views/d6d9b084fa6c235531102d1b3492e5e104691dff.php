<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--
      <?php if(\Request::url() =='https://www.pharmafocusasia.com/advertorials/cytiva-global-life-science-leader'): ?>

       <div align="center" class="mt-2 mb-2 hidden-xs">

        <a href="javascript:void(0)" onclick="trackOutboundLink('https://track.pharmafocusasia.com/202111241025081918697407/'); return false;" target="_blank" title="Cytiva || Offshoring drug manufacturing to low-cost countries"><img class="img-fluid border" src="https://industry.pharmafocusasia.com/ensign/1637749523-cytiva-low-cost-manufacturing.jpg" alt="Cytiva || Offshoring drug manufacturing to low-cost countries"></a>

        </div>

      <?php endif; ?>

      -->

      
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
          $author="";
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
    "name": "Editorial Section",
    "item": "<?php echo e(url('/editorialsection')); ?>"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "<?php echo e($data->category->name); ?>",
    "item": "<?php echo e(url(Request::segment(1))); ?>"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "<?php echo e(strip_tags(html_entity_decode(ucfirst($data->title)))); ?>",
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

                <a href="<?php echo e(url('/editorialsection')); ?>">Editorial Section</a>

              </li>

              <li class="breadcrumb-item active  text-capitalize" aria-current="page"><a href="<?php echo e(url(Request::segment(1))); ?>"><?php echo e($data->category->name); ?> </a> </li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list pb-2">

                <h1 class="mb-1 mt-2 PF-TXTRED "><?php echo e(strip_tags(html_entity_decode(ucfirst($data->title)))); ?></h1>

                <h2> 

                  <?php echo e(ucfirst($data->sub_title)); ?>


                </h2>               

              </div>  



              <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                

                





                <?php $__currentLoopData = $data->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

                <?php if($val->title !="No Author"): ?>             

                   <h3 class="PF-MT10">

                  <span class="PF-TXTRED"><?php echo e($val->title); ?>,</span> 

                  <small> <!--  <?php echo e(preg_replace('/[^a-zA-Z0-9\s]/', '', strip_tags(html_entity_decode(ucfirst($val->details))))); ?> -->

                    <?php echo e(ucfirst($val->details)); ?>


                  </small>

                </h3>

                

                <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                

              

               <?php if($data->abstract != ''): ?>

                <div class="media bloq-bg mb-3">          

                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">

                    <blockquote>

                      <h4 class="PF-Quotes">   <?php echo $data->abstract; ?>




                     </h4>

                    </blockquote>

                  </div>

                </div>

                <?php endif; ?>

                <div style="word-wrap: break-word;">        

                <?php echo $data->description; ?>

      </div>


              

              </div>
      

               <?php if($data->authors->count() != 0): ?>

              <?php if($data->authors[0]->title != 'No Author'): ?>

               <?php if($data->authors->count() != 0): ?>

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">



                <h4 class="font-weight-bold">Author Bio</h4>



                <?php if($data->authors->count() != 0): ?>

                  <?php $__currentLoopData = $data->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  

                   <?php if($val->title !="No Author"): ?>                              

                  <div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3">

                    <div class="row PF-BGf7f7f7 PF-BrdrDDD author-brdr">            

                      <div class="col-lg-2 p-2 text-center"> 

                        <img class="img-fluid shadow-sm" src="<?php echo e(config('app.url').'contributors/'. $val->image); ?>" alt="<?php echo e($val->alt_tag); ?>" style="min-width: 110px;" />



                      </div>

                      <div class="col-lg-10 p-2">                        

                        <span class="font-14 MB-0">

                          

                          <?php echo ucfirst($val->authorbio); ?>


                          





                        </span>

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





              </div>

                 <?php endif; ?>

                <?php endif; ?>

                <?php endif; ?>

            </div>    

            <!-- // RIGHT SECTION // --> 



            <!--// RIGHT SECTION - Square Banners -->

            <div class="col-lg-3 col-md-3 col-sm-3 d-none d-sm-block text-center">               

               <?php echo $__env->make('layouts.partials._square_banner', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>

            <!-- RIGHT SECTION - Square Banners // --> 

        </div>



      </div>





<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/editorial/view.blade.php ENDPATH**/ ?>