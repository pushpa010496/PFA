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

            <td style=""></td>

          </tr>

           @if(@$pdf != '')

       

                <a href="{{ $pdf }}">Download Link</a>

                     

            @endif
            <tr>

<td style=""></td>

</tr>

@if(@$pdf1 != '')



    <a href="{{ $pdf1 }}">Biozen dSEC Column Product Guide</a>

         

@endif
<tr>

<td style=""></td>

</tr>

@if(@$pdf2 != '')



    <a href="{{ $pdf2 }}">Drugs and Metabolites Guide</a>

         

@endif
<tr>

<td style=""></td>

</tr>

@if(@$pdf3 != '')



    <a href="{{ $pdf3 }}">bioZen Nano LC Application Guide</a>

         

@endif
<tr>

<td style=""></td>

</tr>

@if(@$pdf4 != '')



    <a href="{{ $pdf4 }}">Sample Preparation Made Simple</a>

         

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

    







</body>

</html>
