<?php $__env->startSection('style'); ?>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<!--

<div class="" align="center" id="cytiva-lets-talk">

                  <a href= "https://ad.doubleclick.net/ddm/trackclk/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;ltd="target="_blank" title="Cytiva Let's Change">

                  <img class="img-fluid border mt-2" src="https://industry.pharmafocusasia.com/promotions/images/cytiva-lets-talk.jpg" alt="Cytiva Let's Talk" /></a>

                    

              </div> 

             <SCRIPT language='JavaScript1.1' SRC="https://ad.doubleclick.net/ddm/trackimpj/N1440248.3016915PHARMAFOCUSASIA/B28341468.347430555;dc_trk_aid=538710228;dc_trk_cid=175752665;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;gdpr=${GDPR};gdpr_consent=${GDPR_CONSENT_755};ltd=?"></SCRIPT>

-->

    <div class="clearfix"></div>



      <div class="container">



        <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('/editorialsection')); ?>">Editorial Section</a>

              </li>

              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"> <?php echo $healthcarectg[0]->category->name; ?></li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2  text-capitalize"> <?php echo $healthcarectg[0]->category->name; ?></h1>  





                </div>

               

                <?php if($healthcarectg->count() == 0): ?>

                <p> Description for Category</p>

                 

                <?php else: ?>

                <?php echo $healthcarectg[0]->category->description; ?>


                <?php endif; ?> 

              </div>   



          

              <?php $__currentLoopData = $healthcarectg; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $healthcareinfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            

             

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

               <h2 class="mt-3 mb-0 PF-TXTBlk000">

                

                   <a href="<?php echo e(url(Request::segment(count(Request::segments())) .'/'. $healthcareinfo->url)); ?>" title="<?php echo e($healthcareinfo->title); ?>" class="PF-TXTBlk000"><?php echo e($healthcareinfo->title); ?></a>

                              

               </h2>

                <h3 class="PF-Caps text-muted small mb-0 pt-1"><?php echo e($healthcareinfo->sub_title); ?></h3>

              



                 <p class="m-0 text-justify text-dark"><?php echo e(\Illuminate\Support\Str::limit(preg_replace('/[^a-zA-Z\s]/', '', strip_tags(html_entity_decode(ucfirst($healthcareinfo->short_description)))),$limit = 350, $end = '...')); ?></p>           

              </div> 

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



              <div  id="main_content"></div>

              <div class="clearfix"></div>

              <h3 class="text-center PF-ArrowAnimation" >

                <span id="loader" style="cursor:pointer;">

                  <img src=" <?php echo e(config('app.url').'/images/ajax-loader.gif'); ?>">

                </span>

              </h3>

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

<script type="text/javascript">

  

  

   var is_loading = false; 

    var num_messages = <?php echo e($data_count); ?>;



var loaded_messages = 0;

var intervals = 0;

setInterval(function(){    

 if(loaded_messages <= num_messages){

  loadmore();    

}

console.log(intervals);

intervals += 1;

},4000);



function loadmore(){

var url = "<?php echo e(url('editorialloadmore')); ?>";

var slug = "<?php echo e(Request::segment(1)); ?>";

if (is_loading == false) { 

        is_loading = true;

        $('#loader').show();

         loaded_messages += 10;

        

        $.ajax({

          url: url + '/' + slug +'/'+ loaded_messages,

          type: 'get',              

          success:function(data){

           $('#main_content').append(data);

           is_loading = false;              

         }

       });

               

        if(loaded_messages >= num_messages - 1)

        {

            is_loading = true;

          $('#loader').hide();                           

        }

       }

     }





</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/editorial/list.blade.php ENDPATH**/ ?>