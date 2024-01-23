<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


 /* For mobile devices */
 @media only screen and (max-width: 600px) {
                .image1 {
                  display:none;
                }
              }
              /* For desktop devices */
              @media only screen and (min-width: 601px) {
                .image2 {
                  display: none;
                }
              }
  .alert-warning{
    padding: 0px;
    background-color: #f03e3e;
    text-align: center;
    color: #fff;
    border:0px;
    border-radius: 0px;
    font-size: 18px;
    font-family: Century Gothic;
  }
  .close{line-height: 14px;}
  .alert .btn-warning {
    font-size: 16px;
    color: #222;
    background-color: #fffe65;
    border-color: #fffe65;
    border-radius: 15px;
  }
</style>
 </br> 
     <?php 
     $page_id =  getpage(Request::segment(1));
     ?>
   
   <?php if(@$banners): ?> 
      <div class="container pt-2" align="center">
          <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
            <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($homebanner12->positions[0]->id == 1 and $pcount->id == $page_id): ?>
                <?php if($homebanner12->type == 'script'): ?>
                     <?php echo $homebanner12->script; ?>

                  <?php else: ?>
                    <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->img_alt); ?>">
                     <img class="img-fluid border mt-2" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" loading="lazy" alt="<?php echo e($homebanner12->img_alt); ?>" />
                    </a>
                  <?php endif; ?>
                <?php else: ?>
              <?php endif; ?>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
       <!-- static banner-->
      </div>
   <?php endif; ?>
    <!-- End Prime Banner -->
    <!-- <div class="container pt-2 image1" align="center">
        
      <ins align="center"  class='dcmads banner ' style='display:inline-block;width:728px;height:90px'
        data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B29606711.362309849'
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
  <div class="container pt-2 image2" align="center">
        
     <ins  align="center" class='dcmads banner ' style='display:inline-block;width:300px;height:150px'
        data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B29606711.365963941'
        data-dcm-rendering-mode='script'
        data-dcm-https-only
        data-dcm-gdpr-applies='gdpr=${GDPR}'
        data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
        data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
        data-dcm-ltd='false'
        data-dcm-resettable-device-id=''
        data-dcm-app-id=''>
      <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
    </ins>
  </div> -->



    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-5 col-12 pt-1 pb-1">
          <a href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(config('app.url')); ?>images/logo.png" class="PF-MT5 PF-MB5" title="<?php echo e(trans('messages.sitename')); ?>" loading="lazy" alt="<?php echo e(trans('messages.sitename')); ?>">
          </a>
        </div>
        <div class="col-lg-4 offset-lg-5 col-md-5 offset-md-2 col-sm-5 col-9 pt-1 mb-2 align-self-center float-right">  
          <span class="pt-2 d-none d-sm-block"></span>
         <?php echo e(Form::open(['url' => 'search'])); ?>

          <div class="input-group col-md-12" id="main-search">
            <input type="text" name="q" class="form-control input-md" id="autoComplete" required placeholder="Search...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i></button>
              </span>
            </div>
            <?php echo e(Form::close()); ?>

        </div>  
        <div class="col-lg-2 col-md-2 col-sm-2 col-3 pt-1 pb-1 align-self-center navbar-expand-lg">
          <button class="navbar-toggler border bg-light" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon pt-1"><i class="fa fa-bars" aria-hidden="true"></i></span>
          </button> 
        </div>
      </div>
    </div>
<header>
              <?php if(@$banners): ?> 
          <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
            <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($homebanner12->positions[0]->id == 12 and $pcount->id == $page_id): ?>
                <?php if($homebanner12->type == 'script'): ?>
                      <div class="container" align="center">
                     <?php echo $homebanner12->script; ?>

 </div>
                  <?php else: ?>
                                        <div class="container" align="center">
                    <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->img_alt); ?>">
                     <img class="img-fluid border mt-2" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" loading="lazy" alt="<?php echo e($homebanner12->img_alt); ?>" />
                    </a>
 </div>
                  <?php endif; ?>
                <?php else: ?>
              <?php endif; ?>  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
   <?php endif; ?>
   <div class="pb-2"></div>
 <?php 
   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
     $ip=$_SERVER['HTTP_CLIENT_IP'];
   }
   elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
     $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
   } else {
     $ip=$_SERVER['REMOTE_ADDR'];}
?>
      <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-91608244-2', 'auto');
  ga('send', 'pageview');
</script>
    <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom">         
      <div class="collapse navbar-collapse justify-content-lg-center" id="main-nav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo e(url('/')); ?>">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="<?php echo e(url('/editorialsection')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EDITORIAL SECTION</a>
            <div role="menu" class=" dropdown-menu">                    
              <a class="dropdown-item" href="<?php echo e(url('/strategy')); ?>">Strategy</a>
              <a class="dropdown-item" href="<?php echo e(url('/research-development')); ?>">Research & Development</a>
              <a class="dropdown-item" href="<?php echo e(url('/clinical-trials')); ?>">Clinical Trials</a>
              <a class="dropdown-item" href="<?php echo e(url('/manufacturing')); ?>">Manufacturing</a>
              <a class="dropdown-item" href="<?php echo e(url('/information-technology')); ?>">Information Technology </a>
              <a class="dropdown-item" href="<?php echo e(url('/expert-talk')); ?>">Expert Talk</a>
              <a class="dropdown-item" href="<?php echo e(url('/advertorials')); ?>">Advertorials</a>
              
            </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/magazine')); ?>"  id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MAGAZINE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/archives')); ?>">Previous Issues</a>
                <a class="dropdown-item" href="<?php echo e(url('/forthcoming-issue')); ?>">Forthcoming Issue</a>
                <a class="dropdown-item" href="<?php echo e(url('/e-book')); ?>">e-Book Archives</a>
                <a class="dropdown-item" href="<?php echo e(url('/foreword')); ?>">Foreword</a>
                <a class="dropdown-item" href="<?php echo e(url('/author-guidelines')); ?>">Author Guidelines</a>
                <a class="dropdown-item" href="<?php echo e(url('/advisory-board')); ?>">Advisory Board</a>
                <a class="dropdown-item" href="<?php echo e(url('/editorial-calendars')); ?>">Editorial Calendar</a>
                <a class="dropdown-item" href="<?php echo e(url('/testimonials')); ?>">Testimonials</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/e-newsletter')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">E-NEWSLETTER</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/e-newsletter-subscribe')); ?>">Subscribe</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/knowledgebank')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">KNOWLEDGE BANK</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/articles')); ?>">Articles</a>
                <a class="dropdown-item" href="<?php echo e(url('/interviews')); ?>">Interviews</a>
                <a class="dropdown-item" href="<?php echo e(url('/technotrends')); ?>">Techno Trends</a>
                <a class="dropdown-item" href="<?php echo e(url('/projects')); ?>">Projects</a>
                <a class="dropdown-item" href="<?php echo e(url('/pharma-reports')); ?>">Industry Reports</a>
                <a class="dropdown-item" href="<?php echo e(url('/researchinsights')); ?>">Research Insights</a>
                <a class="dropdown-item" href="<?php echo e(url('/bookshelf')); ?>">Book Shelf</a>
                <a class="dropdown-item" href="<?php echo e(url('/casestudies')); ?>">Case Studies</a>
                <a class="dropdown-item" href="<?php echo e(url('/whitepapers')); ?>">White Papers</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/industryupdates')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">INDUSTRY UPDATE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/news')); ?>">News</a>
                <a class="dropdown-item" href="<?php echo e(url('/pressreleases')); ?>">Press Releases</a>
                <a class="dropdown-item" href="<?php echo e(url('/events')); ?>">Events</a>
               <!--  <a class="dropdown-item" href="<?php echo e(url('/reports')); ?>">Reports</a> -->
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="<?php echo e(url('/advertise')); ?>" id="dropdown10" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADVERTISE</a>
              <div role="menu" class=" dropdown-menu">
                <a class="dropdown-item" href="<?php echo e(url('/print')); ?>">Print</a>
                <a class="dropdown-item" href="<?php echo e(url('/online')); ?>">Online</a>
                <a class="dropdown-item" href="<?php echo e(url('/target-market')); ?>">Target Market</a>
                <a class="dropdown-item" href="<?php echo e(url('/target-audience')); ?>">Target Audience</a>
                <a class="dropdown-item" href="<?php echo e(url('/tech-specs')); ?>">Tech Specs</a>
                <a class="dropdown-item" href="<?php echo e(url('/mediapacks')); ?>">Mediapack</a>
                <a class="dropdown-item" href="<?php echo e(url('/terms')); ?>">Terms</a>
                <a class="dropdown-item" href="<?php echo e(url('/clients')); ?>">Clientele</a>
              </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(url('subscribe')); ?>">SUBSCRIBE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="<?php echo e(url('/webinars')); ?>">WEBINARS</a>
          </li>
        </ul>
      </div>
    </nav> 
</header>
<!-- leader board banner -->
           </br>


<!--old code banner-->
           <!-- <div class="container" align="center">

<ins  align="center" class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N5716.5092928PHARMAFOCUS/B30811058.379162604'
    data-dcm-rendering-mode='script'
    data-dcm-https-only
    data-dcm-api-frameworks='[APIFRAMEWORKS]'
    data-dcm-omid-partner='[OMIDPARTNER]'
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-ltd='false'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>

  </div> -->

  <!--NEW CODE BANNER LIVE 02-01-2024-->
  <div class="container" align="center">
  <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
    data-dcm-placement='N5716.5092928PHARMAFOCUS/B30811058.383803274'
    data-dcm-rendering-mode='script'
    data-dcm-https-only
    data-dcm-api-frameworks='[APIFRAMEWORKS]'
    data-dcm-omid-partner='[OMIDPARTNER]'
    data-dcm-gdpr-applies='gdpr=${GDPR}'
    data-dcm-gdpr-consent='gdpr_consent=${GDPR_CONSENT_755}'
    data-dcm-addtl-consent='addtl_consent=${ADDTL_CONSENT}'
    data-dcm-ltd='false'
    data-dcm-resettable-device-id=''
    data-dcm-app-id=''>
  <script src='https://www.googletagservices.com/dcm/dcmads.js'></script>
</ins>
</div> 

     <!-- <div class="" align="center">
              <ins class='dcmads' style='display:inline-block;width:728px;height:90px'
                 data-dcm-placement='N1229050.3016915PHARMAFOCUSASIA/B27597841.334033149'
                    data-dcm-rendering-mode='script'
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


   <!-- <div class="" align="center">

<a href="https://servedby.flashtalking.com/click/2/216765;7605467;50126;211;0/?ft_width=1&ft_height=1&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&url=36929703">
  <img src="https://industry.pharmafocusasia.com/promotions/images/hhm-siemens-healthineers-banner.gif" alt="HHM-Siemens">
</a>
<img style="width:1px; height:1px;" src=https://servedby.flashtalking.com/imp/2/216765;7605467;201;pixel;asianhhmcom;wwwwshsMKdirectWWCompanyMKValuePromisesRelaunchFY2310482consasianhhmhdm728x90displaywwhc232095/?gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_78}&us_privacy=${US_PRIVACY}&cachebuster=[CACHEBUSTER]/>
</div> -->
                    <?php 
  $page_id =  getpage(Request::segment(1));
  ?>
<?php if(@$banners): ?>
  <div align="center" class="mt-2 mb-2 hidden-xs">
       <?php $__currentLoopData = $banners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$homebanner12): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
         <?php $__currentLoopData = $homebanner12->pagesCount; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $j=>$pcount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
           <?php if($homebanner12->positions[0]->id == 3 and $pcount->id == $page_id): ?>
            <a href="javascript:void(0)" onclick="trackOutboundLink('<?php echo e($homebanner12->url); ?>'); return false;" target="_blank" title="<?php echo e($homebanner12->title); ?>"><img class="img-fluid border" src="<?php echo e(config('app.url')); ?>ensign/<?php echo e($homebanner12->image); ?>" loading="lazy" alt="<?php echo e($homebanner12->title); ?>" /></a>
           <?php else: ?>
           <?php endif; ?>  
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
<?php endif; ?>
   
<?php /**PATH /home/pharmafocusasia/public_html/resources/views/layouts/partials/_header.blade.php ENDPATH**/ ?>