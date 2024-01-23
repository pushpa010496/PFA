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
           @if(@$pdf1)
       
                <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_Limit_of_Cetyl_Alcohol_and_Aliphatic_Alcohol_Application_Note.PDF">
                Download - GC-FID: Limit of Cetyl Alcohol and Aliphatic Alcohol Impurities According to USP</a>
                <br>      
            @endif
           
            @if(@$pdf2)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_How_to_enable_sustainable_GC_lab_operations.pdf">Download - How to enable sustainable GC lab operations?</a>
            <br>   
              @endif
             
              @if(@$pdf3)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_What_Are_the_Key_Features_of_a_GC_Smart_Connected_Lab.pdf">Download - What Are the Key Features of a GC Smart Connected Lab?</a>
            <br>  
              @endif
            
              @if(@$pdf4)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_Limit_of_Diethylene_Glycol_and_Ethylene_Glycol_Application_Note.pdf">Download - GC-FID: Limit of Diethylene Glycol and Ethylene Glycol according to USP Propylene Glycol Monograph</a>
            <br>    
              @endif
              
              @if(@$pdf5)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_Limit_of_Ethylene_Glycol_and_Diethylene_Glycol_Application_Note.pdf">Download - GC-FID: Limit of Ethylene Glycol and Diethylene Glycol in Polyethylene Glycol 400 according to USP Monograph</a>
            <br>
              @endif
            
              @if(@$pdf6)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_Simplifying_the_GC_Laboratory_for_Improved_Efficiency.pdf">Download - Simplifying the GC Laboratory for Improved Efficiency</a>
            <br>  
              @endif
             
              @if(@$pdf7)
            
            <a href="https://industry.pharmafocusasia.com/promotions/pdf/Perkin_Elmer_GC_2400_Platform_with_Detachable_Touchscreen.pdf">Download - GC 2400™ Platform with Detachable Touchscreen</a>
                  
              @endif
            <tr>
            <td style=""></td>
          </tr>
          
            <tr>
            <td style=""></td>
          </tr>
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
