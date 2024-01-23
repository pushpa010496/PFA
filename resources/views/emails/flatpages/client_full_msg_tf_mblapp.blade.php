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

              <span class="pb-3">Dear <strong>{{ ucfirst($name)}}</strong>,</span> 

              <tr>

                <td style=""></td>

              </tr>

              

              {!!$client_message!!}
              <tr>

<td style="">If you have any questions regarding the app, feel free to reach out to ebusiness.sg@thermofisher.com.</td>

</tr>


			                <tr>
        <td style=""><b>Android Store:</b> https://play.google.com/store/apps/details?id=com.thermofisher.mobile.android.APJMobileApp&hl=en</td>
        </tr>
        <tr>
        <td style=""><b>Apple Store:</b> https://apps.apple.com/in/app/thermo-fisher-from-cart-to-lab/id6444495595</td>
        </tr>
        <tr>
        <td align="left" valign="middle"  width="">
        <img src="https://industry.pharmafocusasia.com/images/qr-code.png" alt="QR" height="70"/> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <img src="https://industry.pharmafocusasia.com/images/Mobileapp_HomepgPromopod_310x160.png" alt="QR" height="70"/> 
        </td>
        </tr>
        
        
        <tr>

<td style="">
<a class="btn btn-primary" style="color:red; background-color:#fff;border:none;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
			<i class="fa fa-plus"></i>
			Terms and conditions apply.
</a>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
 <ul><li>This promotion is open only to customers in&nbsp;Singapore.​</li><li>Promotion is only valid for new and existing registered customers of&nbsp;Thermo&nbsp;Fisher Scientific Mobile app and has made at least one transaction of min SGD100 during the promotion period.​</li><li>Promotion will run from now till 30<sup>th</sup> June 2023, while stocks last.</li><li>Prizes cannot be used to exchange for cash or other&nbsp;items.​</li><li>Prizes cannot be transferred to another&nbsp;party.&nbsp;​</li><li>Gifts are only for fulfilled orders.</li><li>Cap to one redemption per&nbsp;customer.​</li><li>Healthcare&nbsp;professionals may not participate in this&nbsp;promotion*​​​.​</li><li>By participating in the promotion, customers warrant that they are not prohibited by employment,&nbsp;contract, law, regulation, agency/institutional policy, or any applicable professional code of conduct&nbsp;from accepting a gift from&nbsp;Thermo&nbsp;Fisher&nbsp;Scientific.​​​​</li><li>Offer void where prohibited, licensed or restricted by local laws or regulation or&nbsp;agency/institutional&nbsp;policy.&nbsp;​</li><li>Prices are subject to prevailing&nbsp;GST.​</li><li>Thermo&nbsp;Fisher Scientific reserves the right to change the prizes or the value of the prizes or the promotion at any given&nbsp;time.​</li><li>Terms &amp; conditions are subjected to change.</li><li>Other terms &amp; conditions may apply.&nbsp;​</li></ul></div><div class="text parbase section"><p><i>*The term&nbsp;Healthcare&nbsp;Professionals includes clinical or non-clinical physicians (including MDs and MDs/Ph.D.s), and physician assistants, nurses, technicians, research coordinators, administrators and&nbsp;purchasing personnel) and entities (including hospitals, rehabilitation centers, nursing facilities, home health agencies, clinics and group purchasing organizations, managed care organizations, physician group&nbsp;practices, medical directors for health insurance organizations) and their employees and representatives who are involved in the actual provision of&nbsp;health care&nbsp;services.​</i></p>

  </div>
</div>
</td>
</tr>
           @if(@$pdf != '')

       

                <a href="{{ $pdf }}">Download Link</a>

                     

            @endif

            <tr>

              <td style=""></td>

            </tr>

           @if(@$video != '')

                 

                   <a href="{{ $video }}">Download Video</a>

                   

                    

                    

            @endif

            <td style=""></td>

            </tr>

            @if(@$ebook != '')
                <a href="{{ $ebook }}">Download Link</a>
            @endif
            <tr>
              <td style=""></td>
            </tr>
          @if(@$brochure != '')
                <a href="{{ $brochure }}">Download Link</a>
     

            @endif

            <tr>

              <td style=""></td>

            </tr>

          @if(@$whitepaper != '')

          

                <a href="{{ $whitepaper }}">Download Link</a>

                

                    <br><br>

            @endif



              <span class="pt-3">Thanks & Regards,</span>

              {{-- <br> --}}

         

              {{-- Pharma Focus Asia, --}}

            </td>

            </tr>

          

         

         <tr>

        <td align="left" valign="middle"  width="500">

          <img src="https://industry.pharmafocusasia.com/images/logo.png" alt="{{$site_name}}" height="40"/> 

           

        </td>

  </tr>

      </table>



    </td>

  </tr>

</table>

    </td>

  </tr>

  

</table> 
 

<script>$(document).ready(function(){$('#collapseExample').on('shown.bs.collapse',function(){$('.btn-primary i').removeClass('fa-plus').addClass('fa-minus');$('.btn-primary span').text('Hide Content');});$('#collapseExample').on('hidden.bs.collapse',function(){$('.btn-primary i').removeClass('fa-minus').addClass('fa-plus');$('.btn-primary span').text('Show Content');});});</script>
<script src="https://industry.pharmafocusasia.com/js/jquery-3.3.1.js"></script>
<script src="https://industry.pharmafocusasia.com/js/popper.min.js" crossorigin="anonymous"></script>
<script src="https://industry.pharmafocusasia.com/js/bootstrap.min.js" crossorigin="anonymous"></script>


</body>

</html>

