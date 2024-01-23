<?php $__env->startSection('style'); ?>
<style>
.carousel-caption{
    left:1rem;
    margin-right: auto;
    text-align: left;
    font-family: "Montserrat", sans-serif;
    /* font-size: 3.8rem; */
    max-width: 65%;
    height: auto;
    font-weight: 700;
    bottom:0rem;
    /* line-height: 4.8rem; */
    margin-left: 1.4rem;
}
/* .carousel-caption-new {
    background: rgba(31,38,52,.5);
    bottom: 0;
    color: #fff;
    padding-left: 10px;
    position: absolute;
    width: 100%;
    z-index: 10;
    top:65%;
}  */
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>  



<div class="container mt-4 mb-4">
  <div class="row shadow">

    <div class="col-lg-9 col-md-9 col-sm-8 col-12 p-0">

      
      <div id="mainsliderControls" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
         <?php $i=1; ?>
         <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=> $homesliders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

         <?php if($i==1): ?>

        <div class="carousel-item active">
          <a href="<?php echo e($homesliders->url); ?>" target="_blank" title="<?php echo e($homesliders->title); ?>">
            <img class="d-block w-100" src="<?php echo e(config('app.url')); ?>slider/<?php echo e($homesliders->image); ?>" alt="<?php echo e($homesliders->title); ?>">       
          </a>         
          <div class="carousel-caption-new d-lg-block">
          <i style="font-weight:bold;font-size:16px;">
        <span>
            <?php if($homesliders->issue_id): ?>
                <?php echo e($homesliders->category); ?> - <?php echo e($homesliders->issue_id); ?>

            <?php else: ?>
                <?php echo e($homesliders->category); ?>

            <?php endif; ?>
        </span>
    </i>
            <h3><?php echo e($homesliders->title); ?></h3>
          </div>
        </div>

        <?php else: ?>

        <div class="carousel-item">
          <a href="<?php echo e($homesliders->url); ?>" target="_blank" title="<?php echo e($homesliders->title); ?>">
            <img class="d-block w-100" src="<?php echo e(config('app.url')); ?>slider/<?php echo e($homesliders->image); ?>" alt="<?php echo e($homesliders->img_alt); ?>">       
          </a>         
          <div class="carousel-caption-new d-lg-block">
          <!-- <i style="font-weight:bold;font-size:16px;"> -->
          <span>
            <?php if($homesliders->issue_id): ?>
                <?php echo e($homesliders->category); ?> - <?php echo e($homesliders->issue_id); ?>

            <?php else: ?>
                <?php echo e($homesliders->category); ?>

            <?php endif; ?>
        </span>
            <h3><?php echo e($homesliders->title); ?></h3>
          </div>
        </div>

        <?php endif; ?>
        <?php $i++; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
        <a class="carousel-control-prev" href="#mainsliderControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#mainsliderControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Slider // --> 
    </div>

    <div class="col-lg-3 col-md-3 col-sm-4 col-12 PF-LatestMagzBG">
      

        <img src="<?php echo e(config('app.url').'ebooks/'. Str::slug($ebook->issue->issue_no).'/'.$ebook->image_sm); ?>" alt="Latest Issue" title="Latest Issue" class="img-fluid mb-2">

      
      
      <h5 class="text-white PF-MT5">Get instant access to latest e-book </h5>
      <form action="<?php echo e(url('welcome')); ?>" role="form" id="ebookform"  method="post" accept-charset="utf-8">
        <?php echo e(csrf_field()); ?>

        <div class="form-group <?php echo e($errors->first('email', 'has-error')); ?>">

          <input style="height:30px !important;color: #fff" type="email" name="email" class="form-control bg-transparent border border-white PF-MagField" placeholder="Your Mail ID..." id="inputEmail" data-error="Bruh, that email address is invalid" required="">
          <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
        </div>

        <input value="e-book" name="type" id="e-book" type="hidden">
        <input value="" name="ebook_script" id="ebook_script" type="hidden">
        <button type="submit" id="submit" name="submit" class="btn btn-sm btn-block btn-danger pb-0">
          <img src="<?php echo e(config('app.url')); ?>images/submit.png" class="" alt="submit" title="submit">&nbsp; SUBMIT
        </button>
      </form>
    </div>  

</div>
</div>  


<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-4 mb-2" align="center">
<!--
<div class="" align="center">
   <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B28038815.338869076'
    data-dcm-rendering-mode='iframe'
    data-dcm-https-only
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-ltd='false'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>
     </div>
     -->
 
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
      <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
      <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($homebanner12->positions[0]->id == 4 and $pcount->id == 1): ?>
      <?php if($homebanner12->type == 'script'): ?>
      <?php echo $homebanner12->script; ?>

      <?php else: ?>
      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>">
        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->img_alt); ?>" />
      </a>
      <?php endif; ?>
      <?php else: ?>
      <?php endif; ?>  
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
</div>



<div class="container">
  <div class="row pt-2 bg-white PF-BrdrDDD">
    <!-- // LEFT Section -->
    <div class="col-lg-8 pt-1">
      <!-- // News Section -->
      <div class="col-lg-12 p-0">             
        <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">LATEST NEWS<a href="<?php echo e(route('news')); ?>"><span class="float-right PF-Readmore">Read more...</span></a>
        </h1>
      </div>

    <!-- <div class="" align="center">
                  <a href= "https://track.pharmafocusasia.com/20221017042740805984809/"target="_blank" title="Caidya">
                  <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/caidya.jpg" alt="Caidya" /></a>
                    
              </div>  -->
            

      
      <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="clearfix"></div>
      <div class="col-lg-12 p-0">
        <div class="PF-Brdrnone">
          <div class="media-left">
            <div class="PF-BrdrDDD text-center p-1">
              <h3><?php echo e(date('d', strtotime($val->date))); ?></h3>
              <span class="text-uppercase mt-1 float-left"><?php echo e(date('M Y', strtotime($val->date))); ?></span>
              <div class="clearfix"></div>
            </div>
          </div>

          <div class="media-body pl-2">
            <a href="<?php echo e(route('news.url',[$val->url])); ?>" title="<?php echo e($val->news_img_alt); ?>">
              <h2 class="PF-HdngsClrHvr mt-1 mb-1"><?php echo e($val->home_title); ?></h2>
            </a>
            <p class="text-justify text-dark">
             <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...')); ?>

           </p>                             
         </div>
       </div>
     </div>

     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               

     
     <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">


      <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
      <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php if($homebanner12->positions[0]->id == 7 and $pcount->id == 1): ?>
      <?php if($homebanner12->type == 'script'): ?>
      <?php echo $homebanner12->script; ?>

      <?php else: ?>
      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>">
        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" />
      </a>
      <?php endif; ?>
      <?php else: ?>
      <?php endif; ?>  
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    

    <div class="clearfix mb-2"></div>


    <div class="clearfix"></div>



    <div class="clearfix mb-3"></div>

    
    <div class="col-lg-12 p-0">
      <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">press releases<a href="<?php echo e(route('pressreleases')); ?>"><span class="float-right PF-Readmore">Read more...</span></a>
      </h1>
    </div>
  <!--<div class="" align="center">
                  <a href= "https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="target="_blank" title="Cytiva Let's Change">
                  <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-lets-talk.jpg" alt="Cytiva Let's Talk" /></a>
                    
              </div> 
             <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>
-->
    <?php $__currentLoopData = $pressreleases; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="clearfix"></div>
    <div class="col-lg-12 p-0">
      <div class="PF-Brdrnone">
        <div class="media-left">
          <div class="PF-BrdrDDD text-center p-1">
            <h3><?php echo e(date('d', strtotime($val->date))); ?></h3>
            <span class="text-uppercase mt-1 float-left"><?php echo e(date('M Y', strtotime($val->date))); ?></span>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="media-body pl-2">
          <a href="<?php echo e(route('pressreleases.url',[$val->url])); ?> " title="<?php echo e($val->img_alt); ?>">
            <h2 class="PF-HdngsClrHvr mt-1 mb-1"><?php echo e($val->home_title); ?></h2>
          </a>
          <p class="text-justify text-dark">
           <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($val->short_description)))),$limit = 300, $end = '...')); ?>

         </p>
       </div>
     </div>
   </div>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   <div class="clearfix"></div>       
   

   <div class="clearfix mb-2"></div>


   
   <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($homebanner12->positions[0]->id == 10 and $pcount->id == 1): ?>
    <?php if($homebanner12->type == 'script'): ?>
    <?php echo $homebanner12->script; ?>

    <?php else: ?>
    <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" /></a>
    <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  

  <!-- // Events Section -->
  <div class="col-lg-12 p-0">
    <h1 class="media-heading text-uppercase PF-h1Brdr pt-1">Events<a href="<?php echo e(url('events')); ?>"><span class="float-right PF-Readmore">Read more...</span></a>
    </h1>
  </div>


  <div class="clearfix"></div>
  <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-lg-6 p-0 float-left" style="min-height: 110px">
    <div class="PF-Brdrnone">
      <div class="media-left">
        <div class="PF-BrdrDDD text-center p-1">
          <h3><?php echo e(date('d', strtotime($val->start_date))); ?> - <?php echo e(date('d', strtotime($val->end_date))); ?></h3>
          <span class="text-uppercase mt-1 text-center"><?php echo e(date('M Y', strtotime($val->start_date))); ?></span>
          <div class="clearfix"></div>
        </div>
      </div>

      <div class="media-body pl-2">
        <a href="<?php echo e(url('events')); ?>" title="">
          <h2 class="PF-HdngsClrHvr mt-1 mb-1"><?php echo e($val->home_title); ?></h2>
        </a>
        <p class="text-dark"> <?php echo $val->event_organiser != '' ? $val->event_organiser .'<br>': ''; ?> <?php echo e($val->venue); ?></p>
      </div>
    </div>
  </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



  <!-- Events Section // -->

  <div class="clearfix mb-2"></div>

  
  <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($homebanner12->positions[0]->id == 11 and $pcount->id == 1): ?>
    <?php if($homebanner12->type == 'script'): ?>
    <?php echo $homebanner12->script; ?>

    <?php else: ?>
    <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" /></a>
    <?php endif; ?>
    <?php else: ?>
    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  
</div>
<!-- LEFT Section // -->


<!-- // Right Section -->
<div class="col-lg-4 text-center pb-2">
  <div class="pt-2"></div>

  <div class="bg-gray border-secondary">
   
   <!-- Sky Tower Banner Statr -->
   <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202110270836441333055763/'); return false;"  id="testing-the-world"  target="_blank" class="mb-3" title="Testing The World"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>ensign/thermofisher/testing-the-world.jpg" alt="Testing The World" /></a>
   <!-- Sky Tower Banner End -->

   <!-- Sky Tower Banner Statr -->
   <a href="javascript:void(0)" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20211201035223849283292/'); return false;"  id="celebrating-70years"  target="_blank" class="mb-3" title="Celebrating 70 Years of Nalgene"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>ensign/thermofisher/win-our-birthday-beaker.gif" alt="Celebrating 70 Years of Nalgene" /></a>
   <!-- Sky Tower Banner End -->

<!-- Sky Tower Banner Statr -->

  <!-- Sky Tower Banner End -->
    <!--
    <div class="mt-3">
     <a href="https://www.pharmafocusasia.com/repligens-variable-pathlength-technology-for-oligonucleotide-drug-products" id="repligens-variable"  target="_blank" class="mb-3" title="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products"><img class="img-fluid div-shadow mb-3" src="<?php echo e(config('app.url')); ?>ensign/replign-square-banner.jpg" alt="Development and Validation of a Platform Assay Method Using Variable Pathlength Technology for Oligonucleotide Drug Products" /></a>
   </div>
   <div class="mt-3">
  
  <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd=" target="_blank" title="">

     <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/Cytiva_NoA_Mind_If_We_Drop_In_300x600_APAC.jpg" alt="" />
     <IMG SRC="https://ad.doubleclick.net/ddm/trackimp/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?" BORDER="0" HEIGHT="1" WIDTH="1" ALT="Advertisement">

   </a>

</div>  
<SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28968359.353421106;dc_trk_aid=544532008;dc_trk_cid=181993210;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>
-->
<?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($homebanner12->positions[0]->id == 6 and $pcount->id == 1): ?>
    <div class="mt-3">
      <?php if($homebanner12->type == 'script'): ?>
      <?php echo $homebanner12->script; ?>

      <?php else: ?>
      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>">
        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->img_title); ?>" />
      </a>
      <?php endif; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   



    
   
 
  

    

   

    <a href="javascript:void(0)" id="THERMOFISHER_SEA" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202141034211138296851/'); return false;" target="_blank" title="THERMOFISHER SEA">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/thermofisher_sea_2971_300x600.gif" alt="THERMOFISHER SEA" />
    </a>
    
    <!-- <a href="javascript:void(0)" id="APAC_EDC" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20220201035943202643419/'); return false;" target="_blank" title="APAC EDC">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-edc.png" alt="APAC EDC" />
    </a>
    
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="APAC_CT_Design" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202010402301790896208/'); return false;" target="_blank" title="APAC CT Design">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-ct-design.png" alt="APAC CT Design" />
    </a>
    
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="APAC_Pharma_Virtual" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202202010401201508730567/'); return false;" target="_blank" title="APAC Pharma Virtual">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/apac-pharma-virtual-trials.png" alt="APAC Pharma Virtual" />
    </a> -->
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="upm-raflatac" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202205111046261791849988/'); return false;" target="_blank" title="Upm Raflatac">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/upm-reflatac.jpg" alt="Upm Raflatac" />
    </a>
    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-global" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170825131150121651/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-global.jpg" alt="TFS" />
    </a> -->

    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-korea" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170853531448671386/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-korea.jpg" alt="TFS" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-china" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170946282014855365/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-chinese.jpg" alt="TFS" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="tfs-japan" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206170955171826667218/'); return false;" target="_blank" title="TFS">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/tfs-japan.jpg" alt="TFS" />
    </a>

    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-global" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206201138191289044953/'); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-global2.jpg" alt="SUB" />
    </a> -->
    <!-- <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-korea" onclick="trackOutboundLink('http://track.pharmafocusasia.com/20220620114011611344293/ '); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-korea2.jpg" alt="SUB" />
    </a>
    <div class="mb-2"></div>
    <a href="javascript:void(0)" id="sub-japan" onclick="trackOutboundLink('http://track.pharmafocusasia.com/202206201142071871123676/'); return false;" target="_blank" title="Single Use Biosectors">
        <img class="img-fluid border" src="https://industry.pharmafocusasia.com/promotions/images/sub-japan2.jpg" alt="SUB" />
    </a> -->
   
<!-- southern-star -->

    
    
   
    
    
    <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
    <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($homebanner12->positions[0]->id == 2 and $pcount->id == 1): ?>
    <div class="mt-2">
      <?php if($homebanner12->type == 'script'): ?>
      <?php echo $homebanner12->script; ?>

      <?php else: ?>
      <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>">
        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" />
      </a>
      <?php endif; ?>
    </div>
    <?php else: ?>
    <?php endif; ?>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    

   </br>

    <!-- <a href="https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B27686767.341454641;dc_trk_aid=533334992;dc_trk_cid=170816109;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="  id="cytiva"  target="_blank" class="mb-3" title="Cytiva Change Your Strategy"><img class="img-fluid div-shadow mb-3" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-6-boost-50-300x600.jpg" alt="Celebrating 70 Years of Nalgene" /></a> -->
          </div>
          
        </div>
        <!-- Right Section // -->
      </div>
    </div>




    <div class="container">
      
      <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($homebanner12->positions[0]->id == 8 and $pcount->id == 1): ?>
        <?php if($homebanner12->type == 'script'): ?>
        <?php echo $homebanner12->script; ?>

        <?php else: ?>
        <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" /></a>
        <?php endif; ?>
        <?php else: ?>
        <?php endif; ?>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      
      <div class="row bg-white PF-BrdrDDD mt-2">         

        <!--// Top Articles -->
        <div class="col-lg-3 PF-TAbg"> 
          <h1 class="text-uppercase text-white PF-TopArt pt-3">TOP ARTICLES</h1>
          <?php if(count($articles)): ?>
          <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($key != 0): ?>
          <ul class="media-list col-lg-12 PF-PLRT0B10 PF-BrdrBWYTopacity" >
            <li class="media PF-Brdrnone PF-BGnone text-white p-0 PF-TopArt-maxHyt">
              <div class="media-left">
                <h1 class="PF-NUM m-0"><?php echo e($key); ?></h1>
              </div>
              <div class="media-body pl-2 pt-1">
                <a href="<?php echo e(url('articles').'/'.$val->url); ?>" title="<?php echo e($val->title_tag); ?>">
                  <h2 class="media-heading"><?php echo e($val->title); ?></h2>
                </a>
                <?php $__currentLoopData = $val->authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h5 class="media-heading"><?php echo e($author->title); ?></h5>
                <h5 class="media-heading"><?php echo $author->authorbio; ?></h5>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </li>
          </ul>
          <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endif; ?>
        </div>
        <!--// Top Articles -->

        <!--// Knowledge Bank Content -->
        <div class="col-lg-9 pt-2">
          <div class="row m-0">
            <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">KNOWLEDGE BANK</h1>
            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-0">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-0">
                    <h2 class="media-heading text-uppercase PF-KBHdngs mb-2"><a href="<?php echo e(url('interviews')); ?>">Interviews</a></h2>
                    <div class="pt-0">
                           <?php $__currentLoopData = $interviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interviews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <!-- <img src="<?php echo e(config('app.app_path').'knowledgebank/interview/'.$interviews->photo); ?>" alt="<?php echo e($interviews->alt_tag); ?>" class="shadow-sm mt-0 mr-0 mb-2"> -->
                      <a href="<?php echo e(route('interviews.url',[$interviews->url])); ?>">
                        <h2 class="mt-0 mb-1"><?php echo e($interviews->title); ?></h2>
                      </a>
                      <p class="text-justify text-dark mb-0"><strong><?php echo e($interviews->designation); ?></strong></p>                    

                      <?php echo \Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst( $interviews->description)))),$limit =400, $end = '...'); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                  </div>
                </li>
              </ul>


              <ul class="media-list col-lg-12 pl-0 mb-2">
                 <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(url('articles')); ?>">Articles</a></h2>
                  <!--   <a href="<?php echo e(url('articles').'/'.$articles[0]->url); ?>" title="INVEST IN Eco-sustainable Technologies for a safe processing of healthcare waste">
                      <h2 class="mt-2 mb-1"><?php echo e($articles[0]->title); ?></h2>
                    </a> -->
                      <a href="<?php echo e(url('articles').'/'.$articles[0]->url); ?>" title="<?php echo e($articles[0]->title); ?>">
                      <h2 class="mt-2 mb-1"><?php echo e($articles[0]->title); ?></h2>
                    </a>


                    <p class="m-0 text-justify text-dark"> <?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($articles[0]->short_description)))),$limit = 400, $end = '...')); ?></p>

                  </div>
                </li>
              </ul>
            </div>


            <div class="col-lg-12 p-0">
              
              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">

                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(url('researchinsights')); ?>" title="<?php echo e(@$reaserchinsites->title_tag); ?>">Research Insights</a></h2>
                     <?php $__currentLoopData = $reaserchinsites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reaserchinsites): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($reaserchinsites): ?>
                    <a href="<?php echo e(route('researchinsights.url',[$reaserchinsites->url])); ?>">                     
                      <h2 class="mt-2 mb-1"><?php echo e($reaserchinsites->title); ?></h2>
                    </a>               
                    <p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($reaserchinsites->short_description)))),$limit = 4000, $end = '...')); ?>

                    </p>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </li>
              </ul>
              

              <ul class="media-list col-lg-12 pl-0 mb-2">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1">
                    <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(url('casestudies')); ?>">Case Studies</a></h2>
                     <?php $__currentLoopData = $casestudy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $casestudy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('casestudies.url',[$casestudy->url])); ?>" title="<?php echo e($casestudy->title_tag); ?>">
                      <h2 class="mt-2 mb-1"><?php echo e($casestudy->title); ?></h2></a>
                      <p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($casestudy->short_description)))),$limit = 370, $end = '...')); ?> </p>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </li>
                </ul>
              </div>

              <div class="col-lg-12 p-0">
                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(route('technotrends')); ?>">Techno Trends</a></h2>
                        <?php $__currentLoopData = $technotrend; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $technotrend): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <a href="<?php echo e(route('technotrends.url',[$technotrend->url])); ?>" title="<?php echo e($technotrend->title_tag); ?>"><h2 class="mt-2 mb-1"><?php echo e($technotrend->title); ?></h2></a>
                      <p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($technotrend->short_description)))),$limit = 370, $end = '...')); ?></p>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </li>
                </ul>

                <ul class="media-list col-lg-12 pl-0 mb-2">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1">
                         <?php $__currentLoopData = $whitepaper; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whitepaper): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($whitepaper): ?>
                      <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(url('whitepapers')); ?>">White Papers</a></h2>
                      <a href="<?php echo e(route('whitepapers.url',[$whitepaper->url])); ?>" title="<?php echo e($whitepaper->title_tag); ?>">
                        <h2 class="mt-2 mb-1"><?php echo e($whitepaper->title); ?></h2>
                      </a>

                      <p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($whitepaper->short_description)))),$limit = 400, $end = '...')); ?></p>
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                    </div>
                  </li>
                </ul>

                
              </div>
              <!-- half Banners //-->
            </div>
          </div>
          <!-- Knowledge Bank Content //-->
        </div>
      </div>

      <div class="container">
        
        <div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
        <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/Glocalization.jpg" alt="<?php echo e($homebanner12->img_alt); ?>" /></a>
          <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
          <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($homebanner12->positions[0]->id == 9 and $pcount->id == 1): ?>
          <?php if($homebanner12->type == 'script'): ?>
          <?php echo $homebanner12->script; ?>

          <?php else: ?>
          <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->s); ?>">
            <img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->img_alt); ?>" /></a>
          <?php endif; ?>
          <?php else: ?>
          <?php endif; ?>  
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        
        <div class="row mt-2 PF-WytBG PF-BrdrDDD">
         

          <div class="col-lg-3 col-md-3 col-sm-3 col-12 PF-TAbgissues">             
            <h1 class="text-uppercase text-white PF-TopArt pt-3">Advisory Board</h1>
            <div class="row">
              <?php $__currentLoopData = $advaisoryboard; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-center">
                <img src="<?php echo e(config('app.url').'advisoryboard/homeimage/'.$val->home_image); ?>" alt="<?php echo e($val->alt_tag); ?>" title="<?php echo e($val->title_tag); ?>" width="70" height="70" style="filter: grayscale(100%);-webkit-filter: grayscale(100%); ">
                <a href="<?php echo e(url('advisory-board')); ?>" target="_blank">    
                  <p><?php echo e($val->short_title); ?></p>
                </a>
                <?php echo $val->home_description; ?>

              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             
            </div>
          </div>



          <!--// editorial Section Content -->
          <div class="col-lg-9 mt-2">
            <div class="row m-0">
              <h1 class="text-uppercase mb-2 mt-2 PF-TXTRED">EDITORIAL SECTION</h1>

              <div class="col-lg-12 p-0">

                <ul class="media-list col-lg-12 pl-0 mb-1">
                  <li class="media PF-Brdrnone p-0">
                    <div class="media-body pt-1 pb-1">
                        <h2 class="media-heading text-uppercase PF-KBHdngs"><a href="<?php echo e(url('strategy')); ?>">STRATEGY</a></h2> 
                      <?php $__currentLoopData = $strategy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $strategy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   
                     <a href="<?php echo e(url('strategy').'/'.@$strategy->url); ?>" title="<?php echo e(@$strategy->title_tag); ?>">
                      <h2 class="mt-2 mb-1"><?php echo e(@$strategy->title); ?></h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$strategy->short_description )))),$limit = 150, $end = '...')); ?> </p> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </li>
              </ul>

              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                      <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="<?php echo e(url('research-development')); ?>">RESEARCH DEVELOPMENT</a>
                    </h2>     
                      <?php $__currentLoopData = $research_development; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $research_development): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        
                    <a href="<?php echo e(url('research-development').'/'.@$research_development->url); ?>" title="<?php echo e(@$research_development->title_tag); ?>">
                      <h2 class="mt-2 mb-1"><?php echo e(@$research_development->title); ?></h2>
                    </a>
                    <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$research_development->short_description )))),$limit = 150, $end = '...')); ?></p>  
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                  </div>
                </li>
              </ul>
            </div>

            <div class="col-lg-12 p-0">
              <ul class="media-list col-lg-12 pl-0 mb-1">
                <li class="media PF-Brdrnone p-0">
                  <div class="media-body pt-1 pb-1">
                       <h2 class="media-heading text-uppercase PF-KBHdngs">
                      <a href="<?php echo e(url('clinical-trials')); ?>">CLINICAL TRIALS</a>
                    </h2>        
                     <?php $__currentLoopData = $clinical_trials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clinical_trials): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     
                    <a href="<?php echo e(url('clinical-trials').'/'.@$clinical_trials->url); ?>" title="<?php echo e(@$clinical_trials->title_tag); ?>">
                     <h2 class="mt-2 mb-1"><?php echo e(@$clinical_trials->title); ?></h2>
                   </a>                            
                   <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$clinical_trials->short_description )))),$limit = 150, $end = '...')); ?></p>

                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>
               </li>
             </ul>

             <ul class="media-list col-lg-12 pl-0 mb-1">              
              <li class="media PF-Brdrnone p-0">
                <div class="media-body pt-1 pb-1">
                   <h2 class="media-heading text-uppercase PF-KBHdngs">
                    <a href="<?php echo e(url('manufacturing')); ?>">MANUFACTURING</a>
                  </h2>
                  <?php $__currentLoopData = $manufacturing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $manufacturing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                  <a href="<?php echo e(url('manufacturing').'/'.@$manufacturing->url); ?>" title="<?php echo e(@$manufacturing->title_tag); ?>">                              
                   <h2 class="mt-2 mb-1"><?php echo e(@$manufacturing->title); ?></h2>
                 </a>
                 <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$manufacturing->short_description )))),$limit = 150, $end = '...')); ?></p>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
             </li>
           </ul>

      
       <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
                 <h2 class="media-heading text-uppercase PF-KBHdngs">
                  <a href="<?php echo e(url('information-technology')); ?>">Information Technology</a>
                </h2>      
            
                   <?php $__currentLoopData = $information_technology; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $information_technology): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                  
                <a href="<?php echo e(url('information-technology').'/'.@$information_technology->url); ?>" title="<?php echo e(@$information_technology->title_tag); ?>">
                 <h2 class="mt-2 mb-1"><?php echo e(@$information_technology->title); ?></h2>
               </a>
               <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$information_technology->short_description )))),$limit = 150, $end = '...')); ?></p>
                     
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
         </li>
       </ul>




       





         <ul class="media-list col-lg-12 pl-0 mb-1">
          <li class="media PF-Brdrnone p-0">
            <div class="media-body pt-1 pb-1">
               <h2 class="media-heading text-uppercase PF-KBHdngs">
                <a href="<?php echo e(url('expert-talk')); ?>">EXPERT Talk</a>
              </h2>
               <?php $__currentLoopData = $expert_talk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expert_talk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
              <a href="<?php echo e(url('expert-talk').'/'.@$expert_talk->url); ?>" title="<?php echo e(@$expert_talk->title_tag); ?>" style="color:black !important;" > 

               <h2 class="mt-2 mb-1"><?php echo e(@$expert_talk->title); ?></h2>
             </a>

             <p class="mb-0 text-justify PF-TXTBlk"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst(@$expert_talk->short_description )))),$limit = 150, $end = '...')); ?></p>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </div>
         </li>
       </ul>
     </div>

  </div>
</div>
<!-- editorial Section Content //-->



</div>
</div>

<!--<div id="myModalpopup" class="modal" role="dialog" style="padding-right: 17px; display: block;">-->
<!--  <div class="modal-dialog modal-dialog-centered">-->
<!--    <div class="modal-content p-0">           -->
<!--      <div class="modal-body p-0">-->
<!--        <button type="button" class="close" data-dismiss="modal">×</button>        -->
<!--        <a href="#" target="_blank"> -->
<!--             <img src="https://industry.pharmafocusasia.com/images/lonza-banner.jpg" alt="Pop-Up" class="img-fluid"> -->
<!--        </a> -->
<!--      </div>          -->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->
<!--<div style=''>-->
<!--<div class="" align="center" style='position: fixed;-->
<!--    right: 25vw;-->
<!--    bottom: 0;-->
<!--    z-index: 999;'>-->
             
                                          
    <!--<button type="button" class="close" data-dismiss="modal">×</button>                                      -->
                                          
<!-- <a href="https://go2.lonza.com/enteric-delivery-innovation.html/?utm_source=pharma_focus_asia&utm_medium=media&utm_campaign=web_banner" target="_blank" title="banner">-->
<!--                      <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/images/lonza-banner.jpg" alt="banner">      -->
        
            
<!--      </div>-->
<!--      </div>-->
<!--
<div id="myModalpopup" class="modal fade" role="dialog">

 <div class="modal-dialog modal-dialog-centered">

   <div class="modal-content p-0">          

     <div class="modal-body p-0">

       <button type="button" class="close" data-dismiss="modal">&times;</button>        

       <a href="https://www.pharmafocusasia.com/promotion/acg-360-webinar-episode-6" target="_blank"> 

            <img src="<?php echo e(config('app.url')); ?>images/popup_banner_image_for_Acg.jpg" alt="Pop-Up" class="img-fluid" /> 

       </a> 

     </div>          

   </div>

 </div>

</div>
                      -->

<div class="col-lg-12 col-md-12 hidden-sm hidden-xs mt-2 mb-2" align="center">
  <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
  <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($homebanner12->positions[0]->id == 5 and $pcount->id == 1): ?>
  <?php if($homebanner12->type == 'script'): ?>
  <?php echo $homebanner12->script; ?>

  <?php else: ?>
  <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" alt="<?php echo e($homebanner12->title); ?>" /></a>
  <?php endif; ?>
  <?php else: ?>
  <?php endif; ?>  
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Pharma Focus Asia",
  "alternateName": "Pharmafocusasia",
  "url": "https://www.pharmafocusasia.com/",
  "logo": "https://industry.pharmafocusasia.com/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "040 4961 4567",
    "contactType": "sales",
    "areaServed": "IN",
    "availableLanguage": "en"
  },
  "sameAs": [
    "https://twitter.com/pharmafocusasia",
    "https://www.facebook.com/PharmaFocusAsia",
    "https://www.linkedin.com/company/pharmafocusasia",
    "https://www.pharmafocusasia.com/"
  ]
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Pharma Focus Asia",
  "image": "https://industry.pharmafocusasia.com/images/logo.png",
  "@id": "https://www.pharmafocusasia.com/",
  "url": "https://www.pharmafocusasia.com/",
  "telephone": "040 4961 4567",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Oxford Plaza, SD ROad",
    "addressLocality": "Secunderabad",
    "postalCode": "500003",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 17.4410037,
    "longitude": 78.5012503
  },
  "openingHoursSpecification": {
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Friday",
      "Thursday",
      "Wednesday",
      "Tuesday",
      "Monday"
    ],
    "opens": "09:00",
    "closes": "18:00"
  } 
}
</script>

<?php $__env->stopSection(); ?>



<!-- welcome popup 2 -->
<!-- <div id="myModalpopup" class="modal fade" role="dialog">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content p-0">           
      <div class="modal-body p-0">
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
        <a href="https://www.pharmafocusasia.com/promotion/acg-world-capsules-webinar" target="_blank"> 
             <img src="<?php echo e(config('app.url')); ?>images/acg-world-capsules-webinar.jpg" alt="Pop-Up" class="img-fluid" /> 
        </a> 
      </div>          
    </div>
  </div>
</div>  -->


<!--End welcome popup -->
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/home/index.blade.php ENDPATH**/ ?>