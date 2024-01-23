
<?php $__env->startSection('style'); ?>
<style type="text/css">
  .media-body{word-break: break-all;}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>



    <div class="clearfix"></div>


      <div class="container">

        <div class="row PF-MobP030">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="<?php echo e(url('/industryupdates')); ?>">Industry Updates</a>
              </li>
              <li class="breadcrumb-item active PF-TXTRED text-capitalize" aria-current="page"><?php echo e(trans('messages.events_title')); ?></li>
            </ol>
          </nav>
        </div>

        <div class="row PF-WytBG">
            <!-- // RIGHT SECTION --> 
            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">

              <div class="col-lg-12 col-md-12 col-sm-12 col-12 pb-2">
                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                  <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.events_title')); ?></h1>            
                </div>
                <p><?php echo e(trans('messages.events_text')); ?></p>
                <p>Please <a href="<?php echo e(url('post-event')); ?>">click here</a> to post Events and Exhibitions</p>
              </div>


              <div class="">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">
                 <nav>
                  <?php $months = array('1' => 'Jan', '2' => 'Feb', '3' => 'Mar', '4' => 'Apr', '5' => 'May', '6' => 'Jun', '7' => 'Jul', '8' => 'Aug', '9' => 'Sep', '10' => 'Oct', '11' => 'Nov', '12' => 'Dec'); ?>

                  <?php if($currentyear>0): ?>
                  <ul class="pagination m-0">
                    <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents">Archives - <span class="PF-IntigerStyle"><?php echo e(date('Y')); ?></span></a> </li>
                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php if($key >= date('n')): ?> 
                    <li><a href="<?php echo e(url('/')); ?>/events/month/<?php echo e($key); ?>/year/<?php echo e(date('Y')); ?>" class="PF-BrdrRds0"><?php echo e($value); ?></a></li>
                    <?php else: ?>
                    <li><a href="#" class="PF-BrdrRds0 PF-Bgeee"><?php echo e($value); ?></a></li>
                    <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <?php endif; ?>

                  <!-- Callender Ends Here & New Calander Starts Here -->
                  <!-- Next Year Archives -->

                  <?php if($nextyear>0): ?>
                  <ul class="pagination m-0 pt-2">
                    <li> <a href="" class="PF-BrdrRds0 PF-TXTBlk PF-PointerEvents"> Archives - <span class="PF-IntigerStyle"><?php echo e(date('Y')+1); ?></span></a> </li>
                    <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li><a href="<?php echo e(url('/')); ?>/events/month/<?php echo e($key); ?>/year/<?php echo e(date('Y')+1); ?>" class="PF-BrdrRds0"><?php echo e($value); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                  <?php endif; ?>
                  <!-- End Of Next Year Archives -->
                </nav>
              </div>
            </div>

            <ul class="media-list col-lg-12 p-0" id="main_content">               
              <?php $tempmonth=""; ?>
              <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $dd=date('F Y', strtotime($val -> start_date));  ?>
                <?php if($tempmonth!=$dd): ?>
                  <h2 class="text-uppercase PF-BrdrBbbbdc2 PF-PB5 PF-TXTRED"><?php echo $dd; ?><span class="PF-IntigerStyle"></span></h2>
                  <?php $tempmonth=$dd;  ?>
                <?php endif; ?>

              <!-- EVENT -->
              <li class="media PF-Brdrnone mb-2"  data-date='<?php echo e($dd); ?>'>
                <div class="media-left">
                  <div class="PF-BrdrDDD text-center p-1">
                   <h3><?php echo e(date('d', strtotime($val->start_date)) .' - '.date('d', strtotime($val->end_date))); ?> </h3>
                    <div class="clearfix"></div>
                     <div class="text-uppercase pt-2"> <?php echo e(date('M Y', strtotime($val->start_date))); ?></div>
                    <div class="clearfix"></div>
                  </div>
                </div>

                <div class="media-body pl-2 PF-PT5">
                  <h3 class="media-heading font-weight-bold"><?php echo e($val->title); ?></h3>
                  <h5 class="mb-1"><?php echo e($val->venue); ?></h5>
                  <h5 class="mb-1"><?php echo e($val->event_organiser); ?></h5>
                  <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="mailto:<?php echo e($val->email); ?>"><?php echo e($val->email); ?></a></h5>
                  <h5 class="mb-1 text-lowercase"><a class="PF-HdngsClrHvr" href="<?php echo e($val->web_link); ?>" target="_blank" rel="nofollow"><?php echo e($val->web_link); ?></a></h5>
                </div>
              </li>
              <!-- END EVENT -->
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>



            
            


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
<script type="text/javascript">
  var url = "<?php echo e(url('events/filtermore')); ?>";
  $(document).ready(function(){
 
// var is_loading = false; 
// var num_messages = <?php echo e($data_count); ?>;
// var loaded_messages = 50;
// $(function() {
//     $(window).scroll(function() {
//         if($(window).scrollTop() + $(window).height() == $(document).height()) {
//             if (is_loading == false) { 
//                 is_loading = true;
//                 $('#loader').show();
              
//                    var date = $("li.media:last-child").attr('data-date');
//                 $.ajax({
//                     url: url + '/' + loaded_messages +'/'+ "<?php echo e(date('n', strtotime($tempmonth))); ?>/<?php echo e(date('Y', strtotime($tempmonth))); ?>/" + date,
//                     type: 'get',
                    
//                     success:function(data){
//                        $('#main_content').append(data);
//                         is_loading = false;
//                         loaded_messages += 50;
//                     }
//                 });
//                 if(loaded_messages >= num_messages - 1)
//                 {
//                   $('#loader').hide();                           
//                 }
//               }
//        }
//     });
// });





  var is_loading = false; 
  var num_messages = <?php echo e($data_count); ?>;
  var loaded_messages = 50;
  var intervals = 0;
  setInterval(function(){    
   if(loaded_messages <= num_messages){
    loadmore();    
  }
  
  intervals += 1;
},4000);

  function loadmore(){
        if (is_loading == false) { 
          is_loading = true;
          $('#loader').show();

          var date = $("li.media:last-child").attr('data-date');
          $.ajax({
            url: url + '/' + loaded_messages +'/'+ "<?php echo e(date('n', strtotime($tempmonth))); ?>/<?php echo e(date('Y', strtotime($tempmonth))); ?>/" + date,
            type: 'get',

            success:function(data){
             $('#main_content').append(data);
             is_loading = false;
             loaded_messages += 50;
           }
         });
          if(loaded_messages >= num_messages - 1)
          {
            $('#loader').hide();                           
          }
        }
      }

});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/events/filter.blade.php ENDPATH**/ ?>