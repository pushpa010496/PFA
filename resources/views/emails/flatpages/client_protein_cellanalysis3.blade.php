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
              <table width="1000" border="0" cellpadding="5">
                  <tr>
                    
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">Dear {{$name}},</td>
                  </tr>

                   <tr>
                    <td height="10">&nbsp;</td>                   
                  </tr>
                  <tr>
                  
                    
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                    Thank You for showing interest in Thermofisher Attune CytPix Flow Cytometer eBook.   </td>
                  </tr>   

                   <tr>
                  
                    
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                    Direct link to the eBook download is given below –
                <br><br>
                <span>
                @if(@$pdf != '')      

                  <a href="{{$pdf}}">Download Link</a>    

                @endif
                </span>
                </td>
              </tr>
                       
       
<tr>

                      <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                      If you have also selected requests for Demo and Quotes, a subject matter expert will get in touch with you shortly.
                    </td>
                  </tr>  
                  <tr>

          
                  
                   <tr>
                    
                    <td width="900" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                    <div style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                    Regards,
                    </div>
                    <div style="font-family:Arial, Helvetica, sans-serif;font-size:15px;line-height: 20px;">
                    {{trans('messages.sitename')}}.
                    </div>
                    </td>
                  </tr>                  
                  
                  
              </table>

            </td>
          </tr> 
          <tr>
            <td align="left" valign="middle">
              <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.siteshortname')}}" width="150" />   
            </td>
        </tr>
       
        </table>
    </td>
  </tr>
</table>   
</body>
</html>
