<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="500" border="0" align="left" cellpadding="10">
 
  <tr>
    <td>
        <table width="1000" border="0">
          <tr>
            <td>
              <table width="1000" border="0" cellpadding="">
                  <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Dear <?php echo e($name); ?>,</td>
                 <br>
                  </tr>

                  <tr>
                  
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Thank You for showing interest in Thermo-fisher The Technology Debate: </td>

                  </tr>   
                  <tr>
                  
                  <td width="20">&nbsp;</td>
                  <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Single-Use vs. Stainless Steel One Demand Webinar. </td>

           

                
                  <tr>

                 <?php if(@$pdf): ?>    

                       <br>

                     <td> <a href="<?php echo e($pdf); ?>">Watch Webinar</a></td>

                           <br>

                                 <br>

                            <?php endif; ?>



  </tr>

                 
                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Regards,</td>
                  </tr>

                   <tr>
                    <td width="20">&nbsp;</td>
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;"><?php echo e(trans('messages.sitename')); ?>.</td>
                  </tr>
                  
              </table>

            </td>
          </tr> 
          <tr>
            <td align="left" valign="middle" style="padding-left:30px;">
              <img src="<?php echo e(config('app.url')); ?>images/logo.png" alt="<?php echo e(trans('messages.siteshortname')); ?>" width="150" />   
            </td>
        </tr>
       
        </table>
    </td>
  </tr>
</table>   
</body>
</html>
<?php /**PATH /home/pharmafocusasia/public_html/resources/views/emails/webinars/client_single_use_msg.blade.php ENDPATH**/ ?>