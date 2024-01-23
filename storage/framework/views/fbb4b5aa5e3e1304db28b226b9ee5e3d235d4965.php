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
          <?php if(@$pdf != ''): ?>

<tr>



<td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Direct link to the eBook download is given below – 
</td>


</tr>
<tr>

<td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">
<a href="<?php echo $pdf; ?>">Download Link</a></td>

</tr>

<?php endif; ?>
</tr>
          <tr>

<td style=""></td>

</tr>


        


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

<?php /**PATH /home/pharmafocusasia/public_html/resources/views/emails/flatpages/client_msg_antibody.blade.php ENDPATH**/ ?>