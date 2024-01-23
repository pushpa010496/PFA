<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>Ochre Media</title>

</head>



<body>

  <table width="500" border="0" align="left" cellpadding="10">

    <tr>

      <td align="left" valign="middle" style="padding-left:30px;">

        <img src="<?php echo e(config('app.url')); ?>images/logo.png" alt="<?php echo e(trans('messages.siteshortname')); ?>" width="300"/>    </td>

      </tr>

      <tr>

        <td>

          <table width="500" border="0">

            <tr>

              <td>

                <table width="500" border="0" cellpadding="5">

                  

                  <?php if(@$type != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Webinar</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($type); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$name != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Fullname</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($name); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$company != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($company); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$phone != ''): ?>

                  <tr>



                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($phone); ?></td>

                  </tr>

                  <?php endif; ?>              



                  <?php if(@$email != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($email); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$job_title != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Designation</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($job_title); ?></td>

                  </tr>

                  <?php endif; ?>

                

                

                <?php if(@$job_role != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job Role</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($job_role); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$purchase_intrest != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Purchase Time Frame</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($purchase_intrest); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$country != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($country); ?></td>

                  </tr>

                  <?php endif; ?>



                  



                 



                  <?php if(@$state != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">State</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($state); ?></td>

                  </tr>

                  <?php endif; ?>

                  

                  <?php if(@$company_size != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company Size</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($company_size); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$industry != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($industry); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$city != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">City</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($city); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$address != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Address</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($address); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$trafic != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Trafic From</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($trafic == 'zebra'?$trafic:'Ochre Media'); ?></td>

                  </tr>

                  <?php endif; ?>

                



                  <?php if(@$terms != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Terms</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">

                      <?php echo e($terms === 'opt-in'? $terms : 'opt-out'); ?>


                    </td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$email_updates != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email updates</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($email_updates); ?></td>

                  </tr>

                  <?php endif; ?>

                  

                  <?php if(@$declaration != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Declaration</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($declaration); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$representative != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Representative</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($representative); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$quotation != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Quotation</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($quotation); ?></td>

                  </tr>

                  <?php endif; ?>



                 

                   <?php if(@$zip != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">zip_code</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($zip); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$headquarters != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Headquarters</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($headquarters); ?></td>

                  </tr>

                  <?php endif; ?>

                    <?php if(@$subscribe != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($subscribe); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$research != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Primary Area of Research</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($research); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$interest != ''): ?>  

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Do you currently have an Ambr system in your lab?*</td>


                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($interest); ?></td>

                  </tr>

                  <?php endif; ?>



                </table>



              </td>

            </tr>

          </table>

        </td>

      </tr>

    </table>  



  </body>

  </html>

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/emails/webinars/admin_waters_virtual.blade.php ENDPATH**/ ?>