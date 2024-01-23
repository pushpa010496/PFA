<!DOCTYPE html>

<html>

<head>

  <title>Ebook</title>

  <!-- <?php

    header('X-XSS-Protection:0');

  ?> -->

</head>

<body>


<!-- 
  <?php if(!empty($ebook)): ?>

      <div data-configid="2216358/<?php echo e($ebook->ebook_script); ?>" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>



  <?php endif; ?>  -->



    <?php if(!empty($ebook)): ?>



          <?php if($ebook->script_type == 0): ?>

          <div data-configid="2216358/<?php echo e($ebook->ebook_script); ?>" style="width:1006px; height:826px;" class="issuuembed"></div><script type="text/javascript" src="https://e.issuu.com/embed.js" async="true"></script>

          <?php else: ?>

           <?php echo $ebook->ebook_script; ?>


          <!--  <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:326px;" src="//e.issuu.com/embed.html?d=pfa_36_-_2019&u=verticaltalk"></iframe>        --> 

          <?php endif; ?>

        

        

        <?php endif; ?>

</body>

</html>



<?php /**PATH /home/pharmafocusasia/public_html/resources/views/magazine/ebook/ebookview.blade.php ENDPATH**/ ?>