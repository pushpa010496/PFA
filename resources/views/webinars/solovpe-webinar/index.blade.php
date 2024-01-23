<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="{{ config('app.url') }}/images/favicon.ico" type="image/x-icon">

	<title>UV-Vis measurement using SoloVPE® slope spectroscopy | Solovpe Webinar</title>
	<!-- Meta Tags -->
	<meta name="description" content="The SoloVPE system uses patented variable optical path technology (VPT) to accurately measure the target concentration of various analytes." />
	<meta name="keywords" content="Solovpe Webinar, SoloVPE slope spectroscopy, Solovpe Online Webinar" />

	<meta property="og:title" content="UV-Vis measurement using SoloVPE® slope spectroscopy | Solovpe Webinar" />
	<meta property="og:description" content="The SoloVPE system uses patented variable optical path technology (VPT) to accurately measure the target concentration of various analytes." />
	<meta property="og:Keywords" content="Solovpe Webinar, SoloVPE slope spectroscopy, Solovpe Online Webinar" />

	<meta property="og:image" content="{{config('app.url')}}webinars/solovpe/solovpe-webinar-og.jpg" />

	<link rel="canonical" href="{{url('solovpe-webinar')}}"/>

	<meta property="geo.region" content="US, GB, DE, MY, RU, SG, FR, IT, BE, DK, AT, IE, NL, SE, FI, HK, NO, TW, TH, JP" />

	<meta property="geo.position" content="37.09024;-95.712891, 55.378051;-3.435973, 51.165691;10.451526" />

	<meta property="ICBM" content="37.09024, -95.712891, 55.378051, -3.435973, 51.165691, 10.451526" />

	<meta property="twitter:account_id" content="" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="{{url('solovpe-webinar')}}" />
	
	<meta property="og:site_name" content="Pharma Focus Asia" />

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<meta name="robots" content="index, follow" />

	<meta name="revisit-after" content="1 days" />

	<meta name="google-site-verification" content="vrUJfBkdzevt8C6ksHdL2TvxH9GGWWUoG9CdvL7MPU0" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-91608244-2');
	</script>

	<!--AS per Basco& sudhakar Canonical -->
	<script type="application/ld+json">
		{
			"@context" : "http://schema.org",
			"@type" : "Organization",
			"name" : "Pharmafocusasia",
			"url" : "https://www.pharmafocusasia.com/",
			"sameAs" : [
			" https://www.facebook.com/PharmaFocusAsia ",
			" https://twitter.com/pharmafocusasia ",
			" https://plus.google.com/+Pharmafocusasia/about ",
			" https://www.linkedin.com/groups?home=&gid=6750706&trk=anet_ug_hm ",
			" https://www.tumblr.com/blog/pharmafocusasia "
			]
		}
	</script>

	<!--AS per Basco& sudhakar Schema code -->
	<link rel="stylesheet" href="{{ config('app.url') }}css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ config('app.url') }}css/font-awesome.min.css"> 
	<link rel="stylesheet" href="{{ config('app.url') }}css/custom-styles.css">

	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">  -->
	<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/latest-styles.css">   -->

	<script src="{{ config('app.url') }}styles/js/jquery-2.1.3.min.js"></script> 

	<style type="text/css">
		body {font-size: 16px;}
		.person-area {
			background: #fff none repeat scroll 0 0;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
			padding-top: 25px;
			font-size: 15px;
		}
		.audience-title {
			font-size: 26px;
			margin-bottom: 10px;
		}
		.person {
			margin-bottom: 10px;
		}
		.person-name{
			font-size: 20px;
		}

		.gray-text {
			color: #7a7a7a;
			font-size: 14px;
		}
		.TXT-GREEN {
			color: #899b01;
		}
		.TXT-PINK{
			color: #b43495;
		}
		.TXT-YELLOW{
			color: #ffd167;
		}
		.date-meta {
			font-size: 18px;
			font-weight: 600;
			color: #555;
		}
		.text-white{
			color:#ffffff !important;
		}
		.custom-list li::before {
			content: "\f138";
			font-family: FontAwesome;
			position: absolute;
			color: #337ab7;
			font-size: 14px;
			left: 20px;
		}

		.b-shadow{
			box-shadow:0 2px 4px 0 rgba(0,0,0,.1);
		}
		input[type="submit"]{
			padding-left: 25px;
			padding-right:25px;
		}

		footer i{
			color: #f04e23;
			font-size: 17px;
			border-radius: 5px;
			transition: 500ms;
			background: #f1f1f1;
			margin-right: 5px;
		}
		.TXT-RED {
			color: #F1474E;
		}
		.fa-facebook{
			padding: 5px 8px;
		}
		.fa-google-plus{
			padding: 5px 3px;
		}
		.fa-linkedin,.fa-twitter{
			padding: 5px 5px; 
		}

		footer i:hover{
			color: #fff;
			transition: 500ms;
			background: #f04e23;
		}
		.modal-dialog{
			top:0 !important;
		}
		.video:hover{cursor: pointer;}

		.BG-BLUE{background-color: #1D3D88;}
		.TXT-BLUE{color: #094693;}
		.BG-LightBLUE{background-color: #1c95ca;}

		.form-control{border-color: #ccc; font-size: 14px; height: calc(2rem + 2px);}
		.btn-danger {
			color: #fff;
			background-color: #F04E23;
			border-color: #F04E23;
		}
		.form-group{margin-bottom: 10px;}
		.custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
			background-color: #f01414;
		}
		#state{
			display: none;
		}
		#state2{
			display: none;
		}
		.font-16 { font-size: 16px; line-height: 1.2; }
		.font-18 { font-size: 18px; line-height: 1.2; }
	</style>

</head>

<body> 

	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-4 my-auto">
				<img src="{{config('app.url')}}images/logo.png" alt="Pharma Focus Asia" class="img-fluid" width="200">
			</div>
			<div class="col-lg-4 col-md-4 col-sm-8 my-auto offset-lg-5 pt-2 pb-2 text-right gray-text align-self-center">
				<p class="mb-0">
					<em class="mt-5"><span>Webinar Sponsored by</span></em>
					<img src="{{config('app.url')}}webinars/solovpe/solovpe-webinar-logo.png" alt="solovpe-webinar logo" class="ml-2 img-fluid"> 
				</p>
			</div>
		</div>
	</div>

	<div class="border-top mb-3"></div>


	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mb-3 mt-2 text-center">
				<img src="{{config('app.url')}}webinars/solovpe/solovpe-webinar-banner.jpg" alt="solovpe-webinar" title="solovpe-webinar" class="img-fluid shadow" />
			</div>

			<div class="col-lg-7 col-md-7 col-sm-12 col-12">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-3">
						<h2 class="font-weight-bold TXT-PINK font-20 mb-4">
						使用SoloVPE®斜率光谱法进行UV-Vis测量的革命性方法 </h2>
						<p>传统的UV / Vis光谱法使用固定的光程来测量生物样品中的不同分析物,
						例如核酸，蛋白质和细胞。这些样品通常体积有限或高度浓缩, 
						这带来了各种挑战。	</p>
						<p>
							SoloVPE系统使用获得专利的可变光程技术（VPT）来精确测量各种
							分析物的目标浓度该系统能够在不依赖样品体积或样品浓度的情况下测量
							浓度，从而消除了任何稀释要求。
						</p>
						<p>
							在此网络研讨会中，我们将回顾VPT及其在蛋白质治疗到基因治疗
							等各种场景中的应用。我们分享真实的案例研究，展示公司如何将
							SoloVPE系统集成到其制造工作流程中以进行放行测试和过程中测试。
						</p>

						<p class="TXT-PINK font-weight-bold mb-3">您将在此网络研讨会中学到什么</p>
						<ul style="padding-left: 20px; line-height: 1.8;">
							<li>斜率光谱学以及为什么可变光程优于固定光程的科学原理</li>
							<li>SoloVPE系统及其优点概述：</li>
							<ul style="padding-left: 20px; line-height: 1.8;">
								<li>没有样品稀释</li>
								<li>保证线性结果</li>
								<li> 没有基线校正</li>
								<li> 从0.01 mg / mL到300mg / mL（MAbs）的低浓度和极高浓度样品的测试	</li>
								<li>在分析／质 量控制实验室或生产过程中实施以进行在线测试 ( IPT )</li>
							</ul>
							<li>回 顾SoloVPE在多种应用中实现的定量分析 ( A280 , DNA / RNA , PS80 , 金颗粒测试 ，质粒 纯度 ）</li>
						</ul>
					</div>	


				</div> 
			</div>

			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-3">
				<img type="button" data-toggle="modal" data-target="#videoFormModal" src="{{config('app.url')}}webinars/solovpe/solovpe-webinar-video-thumb.jpg" alt="solovpe" title="solovpe" class="img-fluid video shadow border text-center" />


				<div class="pt-5"> 
					<div class="p-2 PF-BrdrDDD mb-1 bg-light shadow" align="center">
						<h2 class="mb-1 pt-2 TXT-RED font-20"><strong>11th March 2021</strong> <span class="small text-secondary ml-3">(Thursday)</span></h2>
						<!-- <p class="small mb-1 gray-text">(Tuesday)</p> -->
						<p class="mt-2 mb-2 font-weight-bold font-16">10:30 AM (China)</p>
					</div>
				</div>
				<p class="TXT-BLUE font-weight-bold pt-3 mb-3">谁该参加：</p>
				<ul style="padding-left: 20px; line-height: 1.8;">
					<li>工艺开发科学家</li>
					<li>分析方法开发科学家</li>
					<li>质量控制，质量保证科学家</li>
					<li>制造科学与技术（MSAT）科学家</li>
				</ul>
			</div>

		</div>
	</div>

	<div class="container pt-3">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12 col-12 person"> 
				<div class="p-2 PF-BrdrDDD mb-2 mt-2 bg-sky shadow" align="center">	 
					<h2 class="font-weight-bold font-20 TXT-PINK text-center">演讲者</h2>                     	
					<img src="{{config('app.url')}}webinars/solovpe/solovpe-webinar-speaker.jpg" alt="徐天闻" title="徐天闻" class="img-fluid rounded-circle pt-2">
					<div class="pt-2">
						<p class="person-name PF-TXTAQUA mb-1">徐天闻</p>
						<p class="gray-text mb-1"><em>C Technologies, Inc 的技术专家
						</em></p>
					</div>                 
				</div> 
			</div>
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 person"> 
				<h3 class="font-weight-bold font-18 pt-4 mb-3">关于演讲者 - <span class="TXT-PINK">徐天闻</span></h3>
				<p>徐天闻服务于C Technologies Inc ( 一家Repligen公司 ）6 年，负责中国SoloVPE / FlowVPE业务的销售和客户服务支持。在C Technologies Inc之前 ，徐天闻在分析仪器行业拥有超过15年的工作经验，曾任职于FEI电子显微镜和GE生命科学部门担任销售经理职务，还曾在ThermoFisher和Agilent 担任销售职务。</p>
				<p>徐天闻毕业于华东理工大学，拥有生物化学工程硕士学位。</p>
			</div>
		</div>
	</div>


	<div class="container">
		<div id="videoFormModal" class="modal fade" role="dialog">
			<div class="modal-dialog modal-md">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title PF-TXTRED">现在注册</h2>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form action="{{ url('solovpe-webinar-success') }}" method="post" id='writemessage' >
							{{ csrf_field() }}
							<div class="row">
								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('firstname', 'has-error')}}">
										<input class="form-control" id="firstname" name="firstname" placeholder="名字 *" required=""  value="{{ old('name') }}"  type="text">	
										<input type="hidden" name="type" id="type" value="solovpe-webinar-ondemand" />
										<input type="hidden" name="formtype"  value="modal-form" />
										<input type="hidden" name="thank_message" value="Thank You.">
										<input type="hidden" name="client_message" value="Thank You for showing interest in  Solovpe Webinar">
										<span class="help-block">{{ $errors->first('name', ':message') }}</span>
									</div>
								</div>
								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('lastname', 'has-error')}}">
										<input class="form-control" id="lastname" name="lastname" placeholder="姓 *" required=""  value="{{ old('name') }}"  type="text">
									</div>
								</div>


								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('company', 'has-error')}}">
										<input type="text" class="form-control" id="company" name="company" placeholder="公司 *" value="{{ old('company') }}" required/>
										<span class="help-block">{{ $errors->first('company', ':message') }}</span> 
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('job_title', 'has-error')}}">
										<input class="form-control" id="job_title" name="job_title" placeholder="职称 *"  value="{{ old('job_title') }}"  required="" type="text">
										<span class="help-block">{{ $errors->first('job_title', ':message') }}</span>   
									</div>
								</div>


								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('address', 'has-error')}}">
										<input class="form-control" id="address" name="address" placeholder="地址 *"  value="{{ old('address') }}"  required="" type="text">
										<span class="help-block">{{ $errors->first('address', ':message') }}</span>   
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('city', 'has-error')}}">
										<input class="form-control" id="city" name="city" placeholder="市 *"  value="{{ old('city') }}"  required="" type="text">
										<span class="help-block">{{ $errors->first('city', ':message') }}</span>   
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('email', 'has-error')}}">

										<input type="email" class="form-control"  name="email" id="email" value="{{ old('email') }}" pattern="^[^@]+@(?!(qq.com|163.com))[^@]+\.[a-z]{2,}$" title="Please enter valid  email id" placeholder="电子邮件 *" required="required">

										<span class="help-block">{{ $errors->first('email', ':message') }}</span>
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group {{ $errors->first('phone', 'has-error')}}">
										<input class="form-control" id="phone" name="phone" placeholder="电话 *" required=""  value="{{ old('phone') }}"  type="text">

										<span class="help-block">{{ $errors->first('phone', ':message') }}</span> 
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<div class="form-group  {{ $errors->first('country', 'has-error')}}">
										<select class="form-control" id="country" name="country" placeholder="Country *" required=""  value="{{ old('country') }}" >
											<option value="">选择国家*</option>
											@foreach($countries as $value)               	
											<option value="{{$value->title}}">{{$value->title}}</option>
											@endforeach    
										</select>
										<span class="help-block">{{ $errors->first('country', ':message') }}</span>   
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group {{ $errors->first('state', 'has-error')}}">
										<input type="text" class="form-control" id="state" name="state" placeholder="State *" value="{{ old('state') }}" required/>
										<span class="help-block">{{ $errors->first('state', ':message') }}</span> 
									</div>
								</div>

								<div class="col-md-12 mb-2">
									<p class="">我们可以通过电子邮件与您联系吗？</p>
									<p class="">SoloVPE系统使用获得专利的可变光程技术来准确测量各种目标浓度。您想让Repligen分析技术专家与您联系以了解有关SoloVPE系统的更多信息吗？</p>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="quotation">
										<label class="custom-control-label small" for="quotation">是</label>
									</div>
									<div class="custom-control custom-checkbox mb-1">
										<input type="checkbox" class="custom-control-input" name="quotation" value="Yes" id="representative">
										<label class="custom-control-label small" for="representative">没有</label>
									</div>

									<div class="text-danger verifi"></div>

								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group text-center mb-1">
									<button type="submit" id="checkBtn" value="submit" class="btn btn-sm btn-block btn-danger">提交</button>
								</div>
							</div>
						</div>
					</form>
				</div>				
			</div>
		</div>
	</div>
</div>




	
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">	          		
					<p>&copy; Ochre Media Pvt Ltd., <?php echo date("Y"); ?>. All rights reserved.</p>
				</div>

				<div class="col-md-5 col-12 pb-2">	   
					<!-- // FOOTER-SOCIAL MEDIA -->
					<div class="ft-right">  
						<a href="https://www.linkedin.com/company/pharmafocusasia-magazine" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
						<a href="https://twitter.com/pharmafocusasia" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
						<a href="https://www.facebook.com/PharmaFocusAsia" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					</div>                                  
					<!-- FOOTER-SOCIAL MEDIA // --> 
				</div>
			</div>   
		</div>
	</footer>

	<!-- main container --> 

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title text-blue"> Thank You...</h2>
				</div>
				<div class="modal-body">
					<p style="color: green;">{{session('thank_message')}}</p>
					<br>
					Thank You
					<br>
					Client Success Team – CRM
					<br>
					Pharma Focus Asia
				</div>
				<div class="modal-footer">				
					<a class="btn btn-primary" role="button" id="aa" name="aa"  href="{{url('solovpe-webinar')}}" aria-expanded="false">
						Close
					</a>					
				</div>
			</div>
		</div>
	</div> 


	<script src="{{ config('app.url') }}js/jquery-3.3.1.js"></script>
	<script src="{{ config('app.url') }}js/popper.min.js" crossorigin="anonymous"></script>
	<script src="{{ config('app.url') }}js/bootstrap.min.js" crossorigin="anonymous"></script>

	<script src='https://vjs.zencdn.net/7.4.1/video.js'></script>
	<script type="text/javascript">
		$('#country').on('change', function() {
			if( this.value  == "India"){
				$('#state').css('display','block').attr('required','true');
			}else{
				$('#state').css('display','none').removeAttr('required');
			}
		});

		$('#country2').on('change', function() {
			if( this.value  == "India"){
				$('#state2').css('display','block').attr('required','true');
			}else{
				$('#state2').css('display','none').removeAttr('required');
			}
		});
	</script>
	<script type="text/javascript">
		@if(session('thank_message'))	
		$('#myModal').modal('show');
		@endif	  	
	</script>
	<script>
	$(document).ready(function () {
    $('#checkBtn').click(function() {
    	var form = $('#writemessage');
        checked = $("input[name=quotation]:checked").length;
	      if(checked==0) {
	      	form.find('.verifi').html("You must check at least one checkbox.");
	        return false;
	      }else{
	      	form.find('.verifi').html("");
	      	return true;
	      }
    });
});
</script>
</body>

</html>

