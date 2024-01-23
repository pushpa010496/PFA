<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ochre Media</title>
</head>

<body>
<table width="500" border="0" align="left" cellpadding="10">
  <tr>
    <td align="left" valign="middle" style="padding-left:20px;" width="200">
       <img src="{{ config('app.url') }}images/logo.png" alt="{{trans('messages.siteshortname')}}" height="40"/>  
    </td>
 
  </tr>
  
  <tr>
    <td>
      <table width="500" border="0">
  <tr>
    <td>
      <table width="500" border="0" cellpadding="5">
        <tr>
          <td width="20">&nbsp;</td>
          <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Type</td>
          <td width="30" align="left" valign="middle"><strong>:</strong></td>
          <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$type}}</td>
        </tr>

        <tr>
          <td width="20">&nbsp;</td>
          <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">FirstName</td>
          <td width="30" align="left" valign="middle"><strong>:</strong></td>
          <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$FirstName}}</td>
        </tr>
        <tr>
          <td width="20">&nbsp;</td>
          <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">LastName</td>
          <td width="30" align="left" valign="middle"><strong>:</strong></td>
          <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$LastName}}</td>
        </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Company</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$company}}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Country</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$Country}}</td>
            </tr>

          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Telephone</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$Phone}}</td>
            </tr>
          <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Email</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$emailAddress}}</td>
            </tr>
           
            

            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question1}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question1Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question2}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question2Score }}</td>
            </tr>

            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question3}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question3Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question4}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question4Score }}</td>
            </tr>
             <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question5}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question5Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question6}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question6Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question7}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question7Score }}</td>
            </tr>
              <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question8}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question8Score }}</td>
            </tr>
             <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question9}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question9Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question10}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question10Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question11}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question11Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question12}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question12Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question13}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question13Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question14}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question14Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question15}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question15Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question16}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question16Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question17}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question17Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question18}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question18Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question19}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question19Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question20}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question20Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question21}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question21Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question22}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question22Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question23}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question23Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question24}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question24Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question25}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question25Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question26}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question26Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question27}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question27Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question28}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question28Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question29}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question29Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question30}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question30Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question31}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question31Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question32}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question32Score }}</td>
            </tr>
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">{{$question33}}</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question33Score }}</td>
            </tr>
            <!-- @if(@$overallScore != '')
             <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Overall Score</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$overallScore }}</td>
            </tr>
            @endif -->
             @if(@$avgscore != '')
             <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Average Score</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$avgscore }}</td>
            </tr>
            @endif

            

      </table>

    </td>
  </tr>
</table>
    </td>
  </tr>
</table>  
    



</body>
</html>
