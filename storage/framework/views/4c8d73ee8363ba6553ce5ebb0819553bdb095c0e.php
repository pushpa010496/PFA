
<?php $__env->startSection('style'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="clearfix"></div>

<div class="container">

  <div class="row PF-MobP030">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo e(url('magazine')); ?>"><?php echo e(trans('messages.magazine_title')); ?> </a>
        </li>

      </ol>
    </nav>
  </div>

  <div class="row">
    <!-- // RIGHT SECTION --> 
    <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

      <div class="col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
          <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.magazine_title')); ?></h1>            
        </div>

       
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-12">                                  
        
          <div class="text-center">  
            <img src="<?php echo e(config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->magazine_image); ?>" alt="<?php echo e($ebook->alt_tag); ?>" title="<?php echo e($ebook->title_tag); ?>" class="img-fluid" />
          </div>
          <div class="PF-IMGCap">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                <h2 class="PF-TXTRED font-weight-bold pl-3"><?php echo e(ucfirst($ebook->issue->issue_no)); ?></h2>
              </div>
              <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="row">
                  <?php $__currentLoopData = $ebook->issue->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-lg-6 col-md-6 col-sm-8 col-12">
                    <li class="ml-3"><a href="#<?php echo e($category->name); ?>"><?php echo e($category->name); ?></a></li>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
              </div>
            </div>
          </div>
      </div>


      <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

        <?php $__currentLoopData = $ebook->issue->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                                         
        <div class="pt-2">
          <h2 class="PF-Caps PF-TXTRED" id="<?php echo e($category->name); ?>">
            <a id="Healthcare Management" href="<?php echo e(url($category->url)); ?>"><?php echo e($category->name); ?>

            </a>
          </h2>
          
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($article->category_id ==  $category->id): ?>
          <h3 class="mb-1">
            

            <?php if($current_issue->id === $article->issue->id): ?>
            <a href="<?php echo e(url('latest-ebook')); ?>" title="<?php echo e($article->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($article->title); ?></a>
            <?php else: ?>
            <a href="<?php echo e(url('/') .'/'.$category->url.'/'. $article->url); ?>" title="<?php echo e($article->title_tag); ?>" class="PF-TXTBlk000"><?php echo e($article->title); ?></a>
            <?php endif; ?>    
          </h3>
          <h4 class="text-muted small mb-1 mt-2"><?php echo e($article->sub_title); ?></h4>
          <p class="PF-TXTBlk">
            <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($article->short_description)))),$limit = 350, $end = '...')); ?>


          </p>

          <?php endif; ?>

          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
          
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/index.blade.php ENDPATH**/ ?>