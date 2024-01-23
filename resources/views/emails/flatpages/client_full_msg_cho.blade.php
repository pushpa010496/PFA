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
           @if($test1 == 'Applicationnote')
       
                <a href="https://industry.pharmafocusasia.com/promotions/pdf/efficient-pro-medium-and-feeds-app-note.pdf">App-Note: Efficient-Pro Medium and Feeds deliver strong product quality while enhancing productivity in CHO-K1 and CHO-S cells</a>
                     
            @endif
            <tr>
              <td style=""></td>
            </tr>
            @if($test2 == 'CaseStudy')
       
       <a href="https://industry.pharmafocusasia.com/promotions/pdf/difco-tcy-us-in-scale-up-optimization-case-study.pdf">Case Study: Difco TC Yeastolate Ultra-Filtered (TCY UF) in scale-up Optimization</a>
            
   @endif
   <tr>
            <td style=""></td>
          </tr>
            @if($test3 == 'Whitepaper')
       
       <a href="https://industry.pharmafocusasia.com/promotions/pdf/enabling-high-performing-perfusion-cell-culture-white-paper.pdf">Whitepaper: Enabling high-performing perfusion cell culture</a>
            
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
