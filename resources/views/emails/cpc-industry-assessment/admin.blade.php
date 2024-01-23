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
           
           
            @if(@$question1 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Industry</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question1}}</td>
            </tr>
               @endif
                @if(@$question2 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Job type</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question2}}</td>
            </tr>
         @endif
          @if(@$question3 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Specific to the project that you’re working on, which phase of product development is it at now?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question3}}</td>
            </tr>
            @endif
             @if(@$question4 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Do you work with any type of fluid connection technologies? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question4}}</td>
            </tr>
             @endif
             @if(@$question5 !='')
             <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What is your reason for choosing “No” in the last question?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question5}}</td>
            </tr>
             @endif
           @if(@$question6 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What is your current working environment?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{$question6}}</td>
            </tr>
             @endif
           @if(@$question7 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Would you be interested to try connection technology that allows you to perform aseptic operation in non-Class A environment, even without BSC or LAF support?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question7 }}</td>
            </tr>
             @endif
             @if(@$question8 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which of the below processes do you mainly work with? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question8 }}</td>
            </tr>
             @endif
            @if(@$question9 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which of the below processes do you mainly work with? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question9 }}</td>
            </tr>
             @endif
           @if(@$question10 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Are there any automated processes integrated in your workflow? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question10 }}</td>
            </tr>
             @endif
           @if(@$question11 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which of the below automation equipment brands do you currently use? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question11 }}</td>
            </tr>
             @endif
           @if(@$question12 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Does your workflow involve freeze-thaw? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question12 }}</td>
            </tr>
             @endif
           @if(@$question13 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What kind of connection technology is used on your freeze-thaw bag / bottle?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question13 }}</td>
            </tr>
             @endif
           @if(@$question14 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What type of processing system are you using currently?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question14 }}</td>
            </tr>
             @endif
           @if(@$question15 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which of the below CGT equipment do you mainly work with? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question15 }}</td>
            </tr>
             @endif
           @if(@$question16 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What type of connection technology do you mainly use for your fluid transfer system? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question16 }}</td>
            </tr>
             @endif
           @if(@$question17 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How satisfied overall are you with your current fluid connection technology?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question17 }}</td>
            </tr>
             @endif
           @if(@$question18 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Please explain your choice of satisfaction level.</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question18 }}</td>
            </tr>
             @endif
           @if(@$question19 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What kind of tubing sizes (internal diameter) do you mainly work with? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question19 }}</td>
            </tr>
             @endif
           @if(@$question20 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What type of tubing material do you mainly work with?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question20 }}</td>
            </tr>
             @endif
           @if(@$question21 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How often do you work with tube welders or sealers?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question21 }}</td>
            </tr>
             @endif
           @if(@$question22 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Using a tube welder, how long do you take to make one connection?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question22 }}</td>
            </tr>
             @endif
           @if(@$question23 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which factors are most important when choosing a fluid connection technology for your application?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question23 }}</td>
            </tr>
             @endif
           @if(@$question24 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">What are the biggest challenges you encounter when using your current fluid connection technology? </td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question24 }}</td>
            </tr>
             @endif
           @if(@$question25 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Will you consider adopting aseptic single-use connection technology, which can increase your fluid connection efficiency 4 times than tube welding, while maintaining high integrity without the risk of contamination?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question25 }}</td>
            </tr>
             @endif
           @if(@$question26 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which of the below fields do you work in?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question26 }}</td>
            </tr>
             @endif
           @if(@$question27 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Are you in the process of developing automated CGT systems?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question27 }}</td>
            </tr>
             @endif
           @if(@$question28 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Are you in the process of developing bioprocessing systems?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question28 }}</td>
            </tr>
             @endif
            @if(@$question29 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Will you consider using closed system on your new project?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question29 }}</td>
            </tr>
             @endif
            @if(@$question30 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">How many connections does your project require?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question30 }}</td>
            </tr>
             @endif
            @if(@$question31 !='')
            <tr>
            <td width="20">&nbsp;</td>
            <td width="200" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:14px;font-weight:bold;">Which connection technology do you use for your system design?</td>
            <td width="30" align="left" valign="middle"><strong>:</strong></td>
            <td width="330" align="left" valign="middle" style="font-family:Arial, Helvetica, sans-serif;font-size:15px;">{{@$question31 }}</td>
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
