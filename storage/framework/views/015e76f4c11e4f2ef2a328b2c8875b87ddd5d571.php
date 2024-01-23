
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo e(config('app.url')); ?>css/jquery.ui.autocomplete.css">

<style type="text/css">

  .TXT-BLUE{color: #1a0dab;font-size: 18px;}
  .TXT-GREEN{color: #006621;font-size: 14px;}
  .TXT-BLK{color: #6a6a6a;font-size: 14px;line-height: 1.4;}

  .tab-content {font-family: arial,sans-serif !important;}
  .nav-tabs > li{background-color: #fafafa;margin-right: 3px;}
  .nav-tabs a {border-radius: 0px;font-weight: bold;color: #858383;}
  .nav-tabs .nav-item.show .nav-link{
    border: none;
    position: relative;
  }
  .nav-tabs .nav-item {
    margin-bottom: 0px;
  }
  .nav-tabs .nav-link:hover{border: 1px solid transparent;background-color: #f3f3f3   }
  .nav-tabs .nav-link.active{
    position: relative;
    background-color: #fff;
    border: 0px 0px 0 0px;
    border-bottom: 3px solid #ED1A3B;
  }
  
</style>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="container PF-BrdrDDD mt-4">
      <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 mb-3">
        <h1 class="PF-Bshelf pt-2">SEARCH RESULT</h1>            
      </div>


     
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#tab_all" data-toggle="tab">All</a>
          </li>
          
          <?php if(sizeof($earticles) != 0): ?>
            <li class="nav-item">
              <a class="nav-link" href="#tab-earticles" data-toggle="tab">Editorial Articles</a>
            </li>
          <?php endif; ?>

          <?php if(sizeof($authors) != 0): ?>
            <li class="nav-item">
              <a class="nav-link" href="#tab-authors" data-toggle="tab">Authors</a>
            </li>
          <?php endif; ?>

           <?php if(sizeof($knowledgebank) != 0): ?>
            <li class="nav-item">
              <a class="nav-link" href="#tab-knowledgebank" data-toggle="tab">Knowledge Bank</a>
            </li>
          <?php endif; ?>
          

           <?php if(sizeof($industryupdates) != 0): ?>
            <li class="nav-item">
              <a class="nav-link" href="#tab-industryupdates" data-toggle="tab">Industry Updates</a>
            </li>
          <?php endif; ?>
        </ul>
        
        <div class="tab-content mt-3" id="myTabContent">

          <!-- Tab for all -->
          <div class="tab-pane fade show active" id="tab_all" role="tabpanel" aria-labelledby="home-tab">
            <?php if(sizeof($earticles) != 0): ?>
              <?php $__currentLoopData = $earticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>              
                <h2 class="TXT-BLUE mb-1">
                  <a href="<?php echo e(url($val['url'])); ?>" class="TXT-BLUE"><?php echo e($val['title']); ?></a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val['url'])); ?>" class="TXT-GREEN"><?php echo e(url($val['url'])); ?></a></p>
                <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...')); ?>

                </p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            <?php endif; ?>

            <?php if(sizeof($authors) != 0): ?>
            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
                <h2 class="TXT-BLUE mb-1 author">
                  <a href="<?php echo e($val['url']); ?>" class="TXT-BLUE"><?php echo e($val['title']); ?></a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val['url'])); ?>" class="TXT-GREEN"><?php echo e(url($val['url'])); ?></a></p>
                <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...')); ?>

                </p>
              
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
          <?php endif; ?>

          <?php if(sizeof($knowledgebank) != 0): ?>            
              <?php $__currentLoopData = $knowledgebank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h2 class="TXT-BLUE mb-1">
                  <a href="<?php echo e(url($val->url)); ?>" class="TXT-BLUE"><?php echo e($val->title); ?></a>
                </h2>
                <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val->url)); ?>" class="TXT-GREEN"><?php echo e(url($val->url)); ?></a></p>
                <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...')); ?>

                </p>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                         
          <?php endif; ?>

          </div>
          <!-- End For all  -->

          <?php if(sizeof($earticles) != 0): ?>
              <div class="tab-pane fade show" id="tab-earticles" role="tabpanel" aria-labelledby="home-tab">
                <?php $__currentLoopData = $earticles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h2 class="TXT-BLUE mb-1">
                    <a href="<?php echo e(url($val['url'])); ?>" class="TXT-BLUE"><?php echo e($val['title']); ?></a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val['url'])); ?>" class="TXT-GREEN"><?php echo e(url($val['url'])); ?></a></p>
                  <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...')); ?>

                  </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>
          <?php endif; ?>

          <?php if(sizeof($authors) != 0): ?>
              <div class="tab-pane fade show" id="tab-authors" role="tabpanel" aria-labelledby="home-tab">
                <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h2 class="TXT-BLUE mb-1">
                    <a href="<?php echo e(url($val['url'])); ?>" class="TXT-BLUE"><?php echo e($val['title']); ?></a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val['url'])); ?>" class="TXT-GREEN"><?php echo e(url($val['url'])); ?></a></p>
                  <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val['description'])))),$limit = 400, $end = '...')); ?>

                  </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>
          <?php endif; ?>
          <!-- knowledgebank -->

           <?php if(sizeof($knowledgebank) != 0): ?>
              <div class="tab-pane fade show" id="tab-knowledgebank" role="tabpanel" aria-labelledby="home-tab">
                <?php $__currentLoopData = $knowledgebank; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h2 class="TXT-BLUE mb-1">
                    <a href="<?php echo e(url($val->url)); ?>" class="TXT-BLUE"><?php echo e($val->title); ?></a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val->url)); ?>" class="TXT-GREEN"><?php echo e(url($val->url)); ?></a></p>
                  <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...')); ?>

                  </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>
          <?php endif; ?>
           <!-- End knowledgebank -->

            <!-- knowledgebank -->

           <?php if(sizeof($industryupdates) != 0): ?>
              <div class="tab-pane fade show" id="tab-industryupdates" role="tabpanel" aria-labelledby="home-tab">
                <?php $__currentLoopData = $industryupdates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h2 class="TXT-BLUE mb-1">
                    <a href="<?php echo e(url($val->url)); ?>" class="TXT-BLUE"><?php echo e($val->title); ?></a>
                  </h2>
                  <p class="TXT-GREEN mb-1"><a href="<?php echo e(url($val->url)); ?>" class="TXT-GREEN"><?php echo e(url($val->url)); ?></a></p>
                  <p class="TXT-BLK"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$val->description)))),$limit = 400, $end = '...')); ?>

                  </p>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
              </div>
          <?php endif; ?>
           <!-- End industryupdates -->
        </div> 
      </div> 
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/search/searchlanding.blade.php ENDPATH**/ ?>