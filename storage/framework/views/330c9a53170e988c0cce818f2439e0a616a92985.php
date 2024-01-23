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

        <img src="<?php echo e(config('app.url')); ?>images/logo.png" alt="<?php echo e(trans('messages.siteshortname')); ?>" width="200"/>    </td>

      </tr>

      <tr>

        <td>

          <table width="500" border="0">

            <tr>

              <td>

                <table width="500" border="0" cellpadding="5">

                   <?php if(@$title != ''): ?>

                

                   <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Title</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($title); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$lead != ''): ?>

                

                   <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Lead</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($lead); ?></td>

                  </tr>

                  <?php endif; ?>



                  <?php if(@$name != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">First Name</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($name); ?></td>

                  </tr>

                  <?php endif; ?>

                  <?php if(@$last_name != ''): ?>

<tr>

  <td width="20">&nbsp;</td>

  <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Last Name</td>

  <td width="30" align="left" valign="middle"><strong>:</strong></td>

  <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($last_name); ?></td>

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



                   <?php if(@$fax != ''): ?>

                  <tr>



                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Fax</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($fax); ?></td>

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



                   <?php if(@$issue != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Issue</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($issue); ?></td>

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

                   <?php if(@$country != ''): ?>

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($country); ?></td>

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





                  <?php if(@$description != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Message</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($description); ?></td>

                  </tr>

                  <?php endif; ?>





                  <?php if(@$magazine_de != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"><?php echo e(trans('messages.siteshortname')); ?> digital edition</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($magazine_de); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$current_newsletter != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe to e-Newsletter</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($current_newsletter); ?></td>

                  </tr>

                  <?php endif; ?>



                    <?php if(@$content_newsletter != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Subscribe to Event Newsletter</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($content_newsletter); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$special_offers != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"><?php echo e(trans('messages.siteshortname')); ?> and special offers</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($special_offers); ?></td>

                  </tr>

                  <?php endif; ?>





                   <?php if(@$event_name != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Event Name</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($event_name); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$start_date != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">start date</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($start_date); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$end_date != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">end date</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($end_date); ?></td>

                  </tr>

                  <?php endif; ?>



                    <?php if(@$event_organiser != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Event organiser</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($event_organiser); ?></td>

                  </tr>

                  <?php endif; ?>





                  <?php if(@$web_link != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Web link</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($web_link); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$venue != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Venue</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($venue); ?></td>

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



                    <?php if(@$type != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($type); ?></td>

                  </tr>

                  <?php endif; ?>



                   <?php if(@$opt != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;"> E-Newsletters</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e(@$opt =='on'?'On':'Off'); ?></td>

                  </tr>

                  <?php endif; ?>



                     <?php if(@$whom != ''): ?>                           

                  <tr>

                    <td width="20">&nbsp;</td>

                    <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How did you hear about us?</td>

                    <td width="30" align="left" valign="middle"><strong>:</strong></td>

                    <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;"><?php echo e($whom); ?></td>

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

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/emails/admin.blade.php ENDPATH**/ ?>