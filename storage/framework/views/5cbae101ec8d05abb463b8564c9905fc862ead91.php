<?php $__env->startSection('style'); ?>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>



    <div class="clearfix"></div>



      <div class="container">



        <div class="row PF-MobP030">

          <nav aria-label="breadcrumb">

            <ol class="breadcrumb">

              <li class="breadcrumb-item">

                <a href="<?php echo e(url('magazine')); ?>">Magazine</a>

              </li>

              <li class="breadcrumb-item active PF-TXTRED" aria-current="page"><?php echo e(trans('messages.e-book_title')); ?></li>

            </ol>

          </nav>

        </div>



        <div class="row PF-WytBG">

            <!-- // RIGHT SECTION --> 

            <div class="col-lg-9 col-md-9 col-sm-9 col-12 PF-BrdrDDD p-1">



              <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="PF-BrdrBEEE col-lg-12 col-md-12 col-sm-12 col-12 p-0 mb-3">

                  <h1 class="PF-Bshelf pt-2"><?php echo e(trans('messages.e-book_title')); ?></h1>            

                </div>



                  <p><?php echo e(trans('messages.e-book_text')); ?></p>

              </div>

            



               <div class="col-lg-12 col-md-12 col-sm-12 col-12 title-list">

                <div class="row">

                  <?php $__currentLoopData = $ebook; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                  <div class="col BookList mb-2" >

                    <div class="card shadow" style="width:180px !important;">

                      <a   id="show_confirm" data-toggle="modal" href="#" data-target="#modal_confirm" data-id ="<?php echo e(Str::slug($book->issue->id)); ?>" data-eid ="<?php echo e($book->id); ?>" data-title ="<?php echo e($book->issue->issue_no); ?>" data-script ="<?php echo e($book->ebook_script); ?>">

                        <img src="<?php echo e(config('app.url').'ebooks/'. Str::slug($book->issue->issue_no).'/'.$book->magazine_image); ?> " alt="<?php echo e($book->issue->issue_no); ?>" title="<?php echo e($book->issue->issue_no); ?>" width="100%">

                        <div class="card-body p-0">

                          <h3 class="card-title bg-dark text-white pl-3 pr-2 pt-2 pb-2 m-0"><?php echo e($book->issue->issue_no); ?></h3>

                          <!-- <div class="card-text pt-2 pb-3 pr-1">

                            <ul>

                              <?php if($book->topic_1): ?><li><?php echo e($book->topic_1); ?></li><?php endif; ?>                               

                              <?php if($book->topic_2): ?><li><?php echo e($book->topic_2); ?></li><?php endif; ?>

                              <?php if($book->topic_3): ?><li><?php echo e($book->topic_3); ?></li><?php endif; ?>

                              <?php if($book->topic_4): ?><li><?php echo e($book->topic_4); ?></li><?php endif; ?>

                              <?php if($book->topic_5): ?><li><?php echo e($book->topic_5); ?></li><?php endif; ?> 

                            </ul>

                          </div> -->

                        </div>

                      </a>

                    </div>

                  </div>

                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                

                </div>

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

    





<div class="modal fade" id="modal_confirm" tabindex="-1" role="dialog" aria-labelledby="modal_confirm" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="modal_confirm"><?php echo e(old('title')); ?></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

        <form action="<?php echo e(route('ebook.post')); ?>" method="post" target="_blank" accept-charset="utf-8">

          <?php echo e(csrf_field()); ?> 

       <!--    <?php if($errors->any()): ?>

          <ul>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li><?php echo e($error); ?></li>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </ul>      

          <?php endif; ?>      -->  

          <div class="help-block with-errors"></div>

          <div class="input-group">

            <input type="email" name="email" class="form-control" placeholder="Enter your email id to access magazine..." id="inputEmail" data-error="Bruh, that email address is invalid" required >  

            

            <input type="hidden" value="<?php echo e(old('title')); ?>" name="title">

            <input type="hidden" value="<?php echo e(old('ebook_id')); ?>" name="ebook_id">

            <input type="hidden" value="<?php echo e(old('issue_id')); ?>" name="issue_id">

            <!-- <input type="hidden" value="<?php echo e(old('ebook_script')); ?>" name="ebook_script"> -->

            <input type="hidden" value="ebook" name="page">

            

            <span class="input-group-btn">

              <button class="btn btn-danger" type="submit" name="submit">Submit</button>

            </span>

          </div><!-- /input-group -->

          <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>

        </form>

      </div>

    </div>

  </div>

</div>





<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<script>

  <?php if($errors->any()): ?>      

      $(document).ready(function(){ 

        $('#modal_confirm').modal('show');   

      });                  

  <?php endif; ?>



$(function () {

  $('body').on('hidden.bs.modal', '.modal', function () {

    $(this).removeData('bs.modal');

  });

});

var $url_path = '<?php echo url('/'); ?>';



$('body').on('click','#show_confirm', function (event) {



  var ebook_id = $(this).data("eid");

  var issue_id = $(this).data("id");

  var script = $(this).data("script");

  

  var action = "<?php echo e(url('archives-magazine')); ?>" +'/' + ebook_id;

  $('.modal-title').text($(this).data("title"));

  // $("form").attr('action',action);

  $("[name=title]").val($(this).data("title"));

  $("[name=issue_id]").val(issue_id);

  $("[name=ebook_id]").val(ebook_id); 

  $("[name=ebook_script]").val(script);   



});

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/ebook/index.blade.php ENDPATH**/ ?>