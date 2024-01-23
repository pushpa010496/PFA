<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="800" border="0" align="left" cellpadding="10">
  
  
  <tr>
    <td>
      <table width="800" border="0">
  <tr> 
    <td>
      <table width="800" border="0" cellpadding="5">
          <tr>
            <td align="left" valign="middle" style="font-family: 'Roboto', sans-serif;font-size:13px; line-height:20px">
              <span class="pb-3">Dear <strong><?php echo e(ucfirst($name)); ?></strong>,</span> 
              <tr>
                <td style=""></td>
              </tr>
              
              <?php echo $client_message; ?>

          <tr>
            <td style=""></td>
          </tr>
           <?php if(@$pdf1 != ''): ?>
       
                <a href="<?php echo e($pdf1); ?>">label-free-biosensor-analysis-applications-guide Download Link</a>
                     
            <?php endif; ?>
            <br>
            <?php if(@$pdf2 != ''): ?>
       
       <a href="<?php echo e($pdf2); ?>">systems-superior-performance-unrivaled-flexibility Download Link</a>
            
   <?php endif; ?>
   <br>
   <?php if(@$pdf3 != ''): ?>
       
       <a href="<?php echo e($pdf3); ?>">Download Link</a>
            
   <?php endif; ?>
            <tr>
              <td style=""></td>
            </tr>
           <?php if(@$video != ''): ?>
                 
                   <a href="<?php echo e($video); ?>">Download Video</a>
                   
                    
                    
            <?php endif; ?>
            <td style=""></td>
            </tr>
            <?php if(@$ebook != ''): ?>
            
                <a href="<?php echo e($ebook); ?>">Download Link</a>
                
                    
            <?php endif; ?>
            <tr>
              <td style=""></td>
            </tr>
          <?php if(@$brochure != ''): ?>
          
                <a href="<?php echo e($brochure); ?>">Download Link</a>
                
                    
            <?php endif; ?>
            <tr>
              <td style=""></td>
            </tr>
          <?php if(@$whitepaper != ''): ?>
          
                <a href="<?php echo e($whitepaper); ?>">Download Link</a>
                
                    <br><br>
            <?php endif; ?>

              <span class="pt-3">Thanks & Regards,</span>
              
         
              
            </td>
            </tr>
          
         
         <tr>
        <td align="left" valign="middle"  width="500">
          <img src="https://industry.pharmafocusasia.com/images/logo.png" alt="<?php echo e($site_name); ?>" height="40"/> 
           
        </td>
  </tr>
      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
  
</table>  
    



</body>
</html>
<?php /**PATH /home/pharmafocusasia/public_html/resources/views/emails/flatpages/client_full_msg2.blade.php ENDPATH**/ ?>