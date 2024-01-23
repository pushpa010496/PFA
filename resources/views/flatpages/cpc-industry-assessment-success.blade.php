<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CPC Industry Assessment</title>

		<link rel="shortcut icon" href="{{config('app.url')}}images/favicon.ico" type="image/x-icon">

		<meta property="og:image" content="{{config('app.url')}}zebra/img/cpc-industry-assessment-og.jpg"/>
	

		<link rel="canonical" href="{{url('promotion/cpc-industry-assessment')}}"/>

		<script src="{{config('app.url')}}zebra/jquery-3.2.1.min.js"></script>

		<script src="{{config('app.url')}}zebra/jquery.validate.min.js"></script>

		<script src="{{config('app.url')}}zebra/jquery.bgswitcher.js"></script>

		<link href="{{config('app.url')}}zebra/ProximaNova.css" rel="stylesheet">

		<link href="{{config('app.url')}}zebra/style.css" rel="stylesheet">

		<style>

		 

			td label { cursor:pointer;}

			.progress-numb { 

			margin-top: 10px;

			margin-bottom: 0px;

			padding-top: 5px;

			padding-bottom: 5px;

			text-align: left;

			font-size: 16px;

			color: #f5f5f5;

			}

			.table-sub{

			display: inline;

			}

			.table-sub tr{

			display: inline-table;

			}

			.table-sub tr td{

			font-size:11px;

			}

			.content .copy {

			padding: 0px 15px;

			background-color: #e4e3e4;

			}

			#registration .copy li input[type='text'], #registration .copy li select, #registration .copy li label {
    width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

#registration .copy li input[type='email']{
	width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

#registration .copy li input[type='tel']{
	width: 300px;
    font-size: 20px;
    font-family: 'proxima-nova';
    font-weight: normal;
    vertical-align: middle;
    margin: 0px !important;
    float: none !important;
}

		</style>

		<!-- Global site tag (gtag.js) - Google Analytics -->

		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-91608244-1"></script>

		<script>

			window.dataLayer = window.dataLayer || [];

			function gtag(){dataLayer.push(arguments);}

			gtag('js', new Date());

			

			gtag('config', 'UA-91608244-1');

		</script>

		<meta name="csrf-token" content="{{ csrf_token() }}" />
		<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
 ga('create', 'UA-91608244-2', 'auto');
 ga('send', 'pageview');
</script>
	</head>

	<body>

    <header>

<div class="container" id="header">

    <div class="row">

        <div class="col-xs-6 text-left">

            <img src="{{ config('app.url') }}images/logo.png" class="d-inline-block align-middle"

                alt="Pharma Focus Asia" />    

        </div>

        <!-- <div class="col-xs-6 logo text-right">

            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" class="" target="_blank">

                <img src="{{config('app.url')}}zebra/img/logo.png" class="img-fluid" alt="Zebra">

            </a>    

            </div>                                     -->

    </div>

</div>

<div class="container" id="header-mobile">

    <div class="row">

        <div class="col-xs-6 text-left">

            <img src="{{ config('app.url') }}images/logo.png" class="d-inline-block align-middle"

                alt="Pharma Focus Asia" /> 

        </div>

        <!-- <div class="col-xs-6 text-left">

            <a href="https://www.zebra.com/ap/en.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">

                <img src="{{config('app.url')}}zebra/img/mobile-logo.png" class="img-fluid" srcset="{{config('app.url')}}zebra/img/mobile-logo_2x.png 2x" alt="Zebra">

            </a>

            </div> -->

    </div>

</div>

</header>
<section id="main">

<div id="mask">

    <div id="panelContainer">
	
						<!-- End Modal -->

						<div class="panel" id="results">

							<div class="content center">

								<!-- <img id="resultIcon" src=""> -->

								<!-- <h1 id="resultHeading"></h1> -->

								<!-- <p id="resultCopy">

									<div id="resources"> -->

								<!-- <table></table> -->

								<p>Thank you for answering all the questions.Your assessment is complete.</p>

								<br>

								Thank You

								<br>

								Client Success Team – CRM

								<br>

								Pharma Focus Asia

							</div>

							<!-- <div id="standards">

								Are you complying with GS1 healthcare barcode standards?

								<br>

								<a href="https://www.gs1.org/industries/healthcare?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">Find out now.</a>

								<div class="cta">

								    <a href="https://www.zebra.com/ap/en/solutions/healthcare.html?tactic_type=ADE&tactic_detail=HC_HC+online+tool_ochremedia_APAC_None" target="_blank">Zebra Healthcare Solution</a>

								</div> -->

						</div>

					</div>

				</div>

				<div id="endPanel"></div>

				</div>

				</div>

			</section>

		



<!--	
<script>

    let panel = document.querySelectorAll('.panel');

    let PrvBtn = document.querySelector('.previous');

     let NxtBtn = document.querySelector('.next');

    let panelLength = panel.length - 1;

    console.log(panel.length);

     

  let count = (function(){

         let privateCounter = 0;

         function changeBy(val){

            privateCounter += val;

       }

         

      return {

             countUp: function() {

                 changeBy(1);
              },

             countDown: function(){
                changeBy(-1);

              },

             value: function(){

                 return privateCounter;

             }

         }

   })();

     

     

      function next(){

         

         let currentIndex = count.value();

          currentIndex = currentIndex + 1 ;

        count.countUp();

         

         console.log(currentIndex);

          console.log(panelLength);

         

         

         if(panel[currentIndex] !== undefined){

         panel[currentIndex].classList.add("is-selected");

         }

         

           if(panel[currentIndex - 1] !== undefined){

         panel[currentIndex - 1].classList.remove("is-selected");

         }

     }

     

  </script>
-->
		<footer>

			<div class="container" id="footer">

				<ul class='d-flex justify-content-center list-unstyled m-0' style='list-style: none;'>

					<li class='px-2'>

						<p class="mb-1"><i class="fa fa-globe PF-PR10" aria-hidden="true"></i> www.pharmafocusasia.com - Powered by

							Ochre Media Pvt. Ltd.

						</p>

					</li>

					<li  class='px-2'>

						<p class="mb-1"><i class="fa fa-envelope-o PF-PR10" aria-hidden="true"></i> advertise@pharmafocusasia.com

						</p>

					</li>

				</ul>

			</div>

		</footer>

		<script src="https://industry.pharmafocusasia.com/js/bootstrap.min.js"></script>

		<script src="{{asset('public/styles/js/pf-scripts.js')}}"></script>

		<script>

			$(document).keydown(function(objEvent) {

			if (objEvent.keyCode == 9) {  //tab pressed

			    objEvent.preventDefault(); // stops its action

			}

			})

			

			var resources = {

			    scoreLow: {

			        heading: "Essential Connections",

			        copy: "It’s time to establish some basic connections between your staff, your patients and their data. You'll get more accuracy, enable your team to provide better care and start seeing better overall outcomes. We can help you get started. Here are some resources to help you learn more about implementing some identification technology to start creating the connections you need.",

			        icon: "{{config('app.url')}}zebra/img/results_essential-connections.png",

			        resources: [

			        { title: "Barcode Wristbands: Innovative Solutions for Positive Patient Identification", url: "{{config('app.url')}}zebra/files/positive-patient-id-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeWristbands_WHP_GL',eVar44:'HC-BarcodeWristbands_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Putting Patient Safety First", url: "{{config('app.url')}}zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "{{config('app.url')}}zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "{{config('app.url')}}zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" }

			        ]

			    },

			    scoreMed: {

			        heading: "Moderately Connected",

			        copy: "You’re on the right track with your identification processes, but there’s more you need to know about using mobile devices in patient care. Here are some resources to help you learn more about how your hospital can provide safer and more efficient patient care by leveraging mobile solutions.",

			        icon: "{{config('app.url')}}zebra/img/results_moderately-connected.png",

			        resources: [

			        { title: "Putting Patient Safety First", url: "{{config('app.url')}}zebra/files/healthcare-identity-whitepaper-barcode-medication-administration-en-us.pdf", onClick : "s.trackData({prop44:'HC-PatientSafetyFirst_WHP_GL',eVar44:'HC-PatientSafetyFirst_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Benefiting from Bedside Specimen Labeling", url: "{{config('app.url')}}zebra/files/bedside-specimen-labeling-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BedsideSpecimenLabeling_WHP_GL',eVar44:'HC-BedsideSpecimenLabeling_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Barcode-Based Patient Safety Initiatives in Hospital Pharmacies", url: "{{config('app.url')}}zebra/files/barcoding-hospital-pharmacies-patient-safety-white-paper-en-us-gl-a4.pdf", onClick : "s.trackData({prop44:'HC-Barcode-basedSafety_WHP_GL',eVar44:'HC-Barcode-basedSafety_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Barcode Labeling in the Lab &mdash; Closing the Loop of Patient Safety", url: "{{config('app.url')}}zebra/files/barcode-labeling-lab-white paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-BarcodeLabelingLab_WHP_GL',eVar44:'HC-BarcodeLabelingLab_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "{{config('app.url')}}zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" }

			        ]

			    },

			    scoreHi: {

			        heading: "Advanced Connections",

			        copy: "You have well-established identification processes and a vested interest in the use of mobile devices in patient care. Here are some resources to help you learn more about mobile implementation and best practices for how to improve your current mobile device strategy.",

			        icon: "{{config('app.url')}}zebra/img/results_advanced-connections.png",

			        resources: [

			        { title: "A Five-Step Roadmap to Building Your Mobility Strategy", url: "{{config('app.url')}}zebra/files/mobility-five-step-strategy-roadmap-whitepaper-en-us.pdf", onClick : "s.trackData({prop44:'HC-RoadmapMobilityStrategy_WHP_GL',eVar44:'HC-RoadmapMobilityStrategy_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Separating Myth from Reality: Cleaning and Disinfecting Mobile Devices", url: "{{config('app.url')}}zebra/files/cleaning-disinfecting-mobile-devices-hc-en-us-global.pdf", onClick : "s.trackData({prop44:'HC-CleaningMobileDevices_WHP_GL',eVar44:'HC-CleaningMobileDevices_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "Best Practices for Infection Prevention: Cleaning and Disinfecting Mobile Devices in Healthcare Environments", url: "{{config('app.url')}}zebra/files/mobility-infection-prevention-best-practices-white-paper-en-us.pdf", onClick : "s.trackData({prop44:'HC-InfectionPrevention_WHP_GL',eVar44:'HC-InfectionPrevention_WHP_GL',events:'event38'},'tl_d');" },

			        { title: "The Future of Healthcare: 2022 Hospital Vision Study", url: "{{config('app.url')}}zebra/files/2022-hospital-vision-study-en-global.pdf", onClick : "s.trackData({prop44:'HC-2022HospitalVisionStudy_WHP_GL',eVar44:'HC-2022HospitalVisionStudy_WHP_GL',events:'event38'},'tl_d');" }

			        ]

			    }

			};

			

			var screenWidth = 0;

			var isFormPosted = false;

			function setBackgrounds() {

			    if (screenWidth < 768) {

			        $('#main').bgswitcher({

			            images: [

			                "{{config('app.url')}}zebra/img/background_mobile-0.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-1.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-3.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-4.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-5.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-6.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-7.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-8.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-9.jpg",

			

			            "{{config('app.url')}}zebra/img/background_mobile-0.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-1.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-3.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-4.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-5.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-6.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-7.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-8.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-9.jpg",

			

			            "{{config('app.url')}}zebra/img/background_mobile-0.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-1.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-3.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-4.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-5.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-6.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-7.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-8.jpg",

			            "{{config('app.url')}}zebra/img/background_mobile-9.jpg",

			

			            

			            "{{config('app.url')}}zebra/img/background_mobile-2.jpg"

			            ],

			            effect: "fade",

			            interval: 10000,

			            start: false

			        });

			    } else {

			        $('#main').bgswitcher({

			            images: [

			            "{{config('app.url')}}zebra/img/background-cpn-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-1.jpg",

			            "{{config('app.url')}}zebra/img/background-full-2.jpg",

			            "{{config('app.url')}}zebra/img/background-full-3.jpg",

			            "{{config('app.url')}}zebra/img/background-full-4.jpg",

			            "{{config('app.url')}}zebra/img/background-full-5.jpg",

			            "{{config('app.url')}}zebra/img/background-full-6.jpg",

			            "{{config('app.url')}}zebra/img/background-full-7.jpg",

			            "{{config('app.url')}}zebra/img/background-full-8.jpg",

			            "{{config('app.url')}}zebra/img/background-full-9.jpg",

			

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-2.jpg",

			            "{{config('app.url')}}zebra/img/background-full-3.jpg",

			            "{{config('app.url')}}zebra/img/background-full-4.jpg",

			            "{{config('app.url')}}zebra/img/background-full-5.jpg",

			            "{{config('app.url')}}zebra/img/background-full-6.jpg",

			            "{{config('app.url')}}zebra/img/background-full-7.jpg",

			            "{{config('app.url')}}zebra/img/background-full-8.jpg",

			            "{{config('app.url')}}zebra/img/background-full-9.jpg",

			

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-1.jpg",

			            "{{config('app.url')}}zebra/img/background-full-2.jpg",

			            "{{config('app.url')}}zebra/img/background-full-3.jpg",

			            "{{config('app.url')}}zebra/img/background-full-4.jpg",

			            "{{config('app.url')}}zebra/img/background-full-5.jpg",

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			

			            "{{config('app.url')}}zebra/img/background-full-0.jpg",

			          

			            "{{config('app.url')}}zebra/img/background-full-0.jpg"

			

			            ],

			            effect: "fade",

			            interval: 10000,

			            start: false

			        });

			    }

			}

			

			var currentPanel = 0;

			var currentQuestion = "registration";

			function scrollPanel(question) {

			    currentQuestion = question;

			    $("#panelContainer").animate({ "margin-left": $("#panelContainer").offset().left - $("#" + question).offset().left }, 1000, function () {

			        if (question == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });

			    });

			

			    if (screenWidth < 768) {

			        $("#progress").hide()

			    } 

			    else {

			        if (question.indexOf("question") > -1) $("#progress").show();

			        else $("#progress").hide();

			        if (question == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });

			    }

			

			    if (question != "results") $("html,body").animate({ "scrollTop": $("#" + question).find(".header").offset().top - 33 });

			    else $("html,body").animate({ "scrollTop": $("#" + question).find(".content").offset().top - 33 });

			

			    $("#progress td").removeClass("active").addClass("inactive");

			    $("#progress [data-panel='" + question + "']").removeClass("inactive").addClass("active");

			    $("#progress [data-panel='" + question + "']").removeClass("disabled");

			    $("#main").bgswitcher("select", $("#" + question).index());

			}

			

			function resizeScreen() {

			    if (screenWidth == $(window).width()) return;

			    screenWidth = $(window).width();

			

			    setBackgrounds();

			

			    $("#panelContainer").css({ "margin-left": $("#mask").width() * -1 * currentPanel });

			

			    $("[id^=question] .copy li").each(function () {

			        $(this).find("input").css({ "margin-bottom": $(this).outerHeight() - 15 });

			    });

			

			    if (screenWidth < 768) {

			        $(".panel").width($("#mask").width() - 32);

			        $("#results.panel").width($("#mask").width());

			        $("#progress").hide();

			    }

			    else {

			        $(".panel").width($("#mask").width());

			        $("#progress").show();

			    }

			

			

			//scrollPanel(currentPanel);

			//scrollPanel(currentQuestion);

			$("#panelContainer").css({ "margin-left": $("#panelContainer").offset().left - $("#" + currentQuestion).offset().left });

			if (currentQuestion == "results") $("#main").css({ height: $("#results .content").outerHeight(true) });

			

			}

			

			$("input[type=radio]").change(function () {

			$(this).closest("ul").find("li").removeClass("selected");

			if ($(this).is(":checked")) $(this).closest("li").addClass("selected");

			

			});

			

			$("input[type=checkbox]").change(function () {

			if ($(this).is(":checked")) $(this).closest("li").addClass("selected");

			else $(this).closest("li").removeClass("selected");

			});

			

			$("#progress td").click(function () {

			if ($(this).hasClass("disabled")) return;

			scrollPanel($(this).data("panel"));

			});

			

			

			function calculateScore(question) {

			var score = 0;

			

			$("[name='" + question + "[]']:checked").each(function () {

			    score += $(this).data("score");

			}); 

			

			$("[name='" + question + "Score']").val(score);

			

			calculateOverall()

			}

			

			function calculateOverall() {

			var score =

			$("[name='question1Score']").val() * 1 +

			$("[name='question2Score']").val() * 1 +

			$("[name='question3Score']").val() * 1 +

			$("[name='question4Score']").val() * 1 +

			$("[name='question5Score']").val() * 1 +

			$("[name='question6Score']").val() * 1 +

			$("[name='question7Score']").val() * 1 +

			$("[name='question8Score']").val() * 1 +

			$("[name='question9Score']").val() * 1;

			$("[name='question10Score']").val() * 1 +

			$("[name='question11Score']").val() * 1 +

			$("[name='question12Score']").val() * 1 +

			$("[name='question13Score']").val() * 1 +

			$("[name='question14Score']").val() * 1 +

			$("[name='question15Score']").val() * 1 +

			$("[name='question16Score']").val() * 1;

			$("[name='question17Score']").val() * 1 +

			$("[name='question18Score']").val() * 1 +

			$("[name='question19Score']").val() * 1 +

			$("[name='question20Score']").val() * 1 +

			$("[name='question21Score']").val() * 1 +

			$("[name='question22Score']").val() * 1 +

			$("[name='question23Score']").val() * 1;

			$("[name='question24Score']").val() * 1;

			$("[name='question25Score']").val() * 1;

			$("[name='question26Score']").val() * 1;

			$("[name='question27Score']").val() * 1;

			$("[name='question28Score']").val() * 1;

			$("[name='question29Score']").val() * 1;

			$("[name='question30Score']").val() * 1;

			$("[name='question31Score']").val() * 1;

			

			$("[name='overallAverage']").val(score / 31);

			}

	

			 var  is16tubes,is16tubew=false;

			 var is1cellgen=false;

			 var prevForm='question1';

			 function prevSubmit(currQues){ 
				var cqIndex;var prIndex;
				var cur=currQues.substr(currQues.length-2);
				var prev=prevForm.substr(prevForm.length-2);
				if(isNaN(cur)){
				 cqIndex=currQues.substr(currQues.length-1) ;
				 prIndex=prevForm.substr(prevForm.length-1) ;
				 if(prIndex > cqIndex){
					prIndex=cqIndex-1;
					prevForm=prevForm.slice(0, -1) + prIndex.toString();
				 }				 
				}
				else {
					if(!isNaN(prev)){
						cqIndex=currQues.substr(currQues.length-2) ;
				        prIndex=prevForm.substr(prevForm.length-2) ;
				        if(prIndex > cqIndex) {
							prIndex=cqIndex-1;
					        prevForm=prevForm.slice(0, -2) + prIndex.toString();
				        }
						else{
							cqIndex=currQues.substr(currQues.length-2) ;
				            prIndex=prevForm.substr(prevForm.length-1) ;
				            if(prIndex > cqIndex) {
								prIndex=cqIndex-1;
					            prevForm=prevForm.slice(0, -2) + prIndex.toString();
				            } 
						} 
					} 
				}
				 
				switch(prevForm){

					case "question1": $('#question1').show(); break;
					case "question2": 
						if(currQues==prevForm) $('#question1').show(); 
						else  $('#question2').show();
					break;
					case "question3":
						if(currQues==prevForm) $('#question2').show(); 
						else  $('#question3').show(); 
					break;
					case "question4": 
						if(currQues==prevForm) {$('#question4').hide(); $('#question3').show();} 
						else  $('#question4').show();
					break;  
					case "question5": 
						if(currQues==prevForm) $('#question4').show(); 
						else  $('#question5').show();
					break;
					case "question6":
						if(currQues==prevForm) $('#question5').show(); 
						else  $('#question6').show();						
					break;
					case "question7": 
						if(currQues==prevForm) $('#question6').show(); 
						else  $('#question7').show();
					break;
					case "question8":
						if(currQues==prevForm) $('#question7').show(); 
						else  $('#question8').show();
					break;
					case "question9":
						if(currQues==prevForm) $('#question8').show(); 
						else $('#question9').show();
					break;
					case "question10":
						if(currQues==prevForm) $('#question9').show(); 
						else $('#question10').show();
					break;
					case "question11": 
						if(currQues==prevForm) $('#question10').show(); 
						else $('#question11').show();
					break;
					case "question12": 
						if(currQues==prevForm) { $('#question11').show(); }
						else $('#question12').show(); 
					break;
					case "question13": 
						if(currQues==prevForm) $('#question12').show(); 
						else $('#question13').show(); break;
					case "question14": 
						if(currQues==prevForm) {$('#question14').hide(); $('#question13').show(); }
						else $('#question14').show(); break;  
					case "question15":
						if(currQues==prevForm)  $('#question14').show(); 
						else $('#question15').show(); break;
					case "question16":
						if(currQues==prevForm) { $('#question15').show(); }
						else $('#question16').show(); break;
					case "question17":
						if(currQues==prevForm) $('#question16').show(); 
						else $('#question17').show(); break;
					case "question18":
						if(currQues==prevForm) $('#question17').show(); 
						else $('#question18').show(); break;
					case "question19":
						if(currQues==prevForm) $('#question18').show(); 
						else $('#question19').show(); break;
					case "question20":
						if(currQues==prevForm) $('#question19').show(); 
						else $('#question20').show(); break;
					case "question21":
						if(currQues==prevForm) $('#question20').show(); 
						else $('#question21').show(); break;
					case "question22":
						if(currQues==prevForm) $('#question21').show(); 
						else $('#question22').show(); break;
					case "question23":
						if(currQues==prevForm) $('#question22').show(); 
						else $('#question23').show(); break;
					case "question24":
						if(currQues==prevForm) $('#question23').show(); 
						else $('#question24').show(); break;  
					case "question25":
						if(currQues==prevForm) $('#question24').show(); 
						else $('#question25').show(); break;
					case "question26":
						if(currQues==prevForm) $('#question25').show(); 
						else $('#question26').show(); break;
					case "question27":
						if(currQues==prevForm) $('#question26').show(); 
						else $('#question27').show(); break;
					case "question28":
						if(currQues==prevForm) { $('#question1').show(); }
						else $('#question28').show(); break;
					case "question29":
						if(currQues==prevForm) $('#question28').show(); 
						else $('#question29').show(); break;
					case "question30":
						if(currQues==prevForm) $('#question29').show(); 
						else $('#question30').show(); break;
				 }
			 }
			 var  is16tubescells=false;
			 var  is1stbiopr=false;
			 var  is1stcellgenther=false;
			 var  is1stcmdo=false;
			 var is1stothers=false;
			 
			function formSubmit(btnval){		    

			    switch(btnval){
			        // Question-1		        

			        case "btn1":
						prevForm='question1';
			            var rbnVal=$('input[name="question1"]:checked').val();

			            switch(rbnVal){

			                 case "Traditional pharma":

			                        $('#question1').hide();

			                         is1cellgen=true;
									  
			                        $('#question2').show();

			                 break;

			                 case "Biopharma":

			                        $('#question1').hide();

			                          is1cellgen=true;
									   
			                        $('#question2').show();

			                 break;

			                 case 'Bioprocessing design & consultation':

			                       $('#question1').hide();
								 is1stbiopr=true;
									prevForm='question2';
			                        $('#question2').show();

			                 break;

			                 case 'Cell therapy only':

			                        $('#question1').hide();

			                         is1cellgen=false;
									  
			                        $('#question2').show(); 

			                 break;

			                 case 'Gene therapy only':

			                       $('#question1').hide();

			                         is1cellgen=false;
									  
			                        $('#question2').show(); 

			                        

			                 break;

			                 case 'Both cell & gene therapy':

			                       $('#question1').hide();

			                         is1cellgen=false;
									 
			                        $('#question2').show(); 

			                        

			                 break;

			                 case 'Cell Gene therapy equipment design consultation or maker':
								$('#question1').hide();
								is1stcellgenther=true;
			                        $('#question2').show();

			                 break;

			                 case 'Cell Gene therapy design and consultation':

								$('#question1').hide();
								is1stcellgenther=true;
			                        $('#question2').show();

			                 break;

			                 case 'CDMO / CRO':

			                        $('#question1').hide();

			                          is1stcmdo=true;
									 
			                        $('#question2').show(); 

			                 break;

			                 case 'Others':

			                         $('#question1').hide();

			                          is1stothers=true;
									   
			                        $('#question2').show();

			                 break;

			            }

			        break;

			        case "btn2":

			        $('#question2').hide();
					prevForm='question2';
			        $('#question3').show();

			        break;

			        case "btn3":
					prevForm='question3';
			        $('#question3').hide();

			        $('#question4').show();

			        break;

			        case "btn4":
						prevForm='question4';
			            var rbnVal=$('input[name="question4"]:checked').val().trim();
			            if(rbnVal=='Yes'){
						$('#question4').hide();
						$('#question5').hide();						 
						$('#question6').show();
			            }
			            else{
			                $('#question4').hide();							 
			                $('#question5').show(); 
			            } 
			        break;

			        case "btn5": 
			             $('#question5').hide();
						 prevForm='question5';
			             $('#question6').show(); 
			        break;

			        case "btn6":
						prevForm='question6';
			            var rbnVal=$('input[name="question6"]:checked').val().trim(); 
			         switch(rbnVal.trim()){
			            case "Non-CGMP certified laboratory": 
                        case "Manufacturing facility": 
                        case "Pilot plant manufacturing facility / CGMP laboratory scale": 
                        case "CGMP Class A": 
                             $('#question6').hide(); 
							$('#question7').hide(); 
							if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){ 
								$('#question8').hide(); $('#question9').hide(); $('#question10').hide(); 
								$('#question11').hide(); $('#question12').show(); 
							}else{
                               if(is1cellgen==true){ 
			                     $('#question8').show(); 
			                    } 
			             	 else if(is1cellgen ==false){ 
			                 $('#question8').hide(); 
			                 $('#question9').show();  
			                 } 
							}
                        break; 
                        case "CGMP Class B": 
                        case "CGMP Class C": 
                        case "CGMP Class D": 
                             $('#question6').hide(); 
                             is1cellgen==false 
                             $('#question7').show(); 
							 
                        break;                       

			         }
			         break;
			        case "btn7":
						prevForm='question7';
			            $('#question7').hide();
						if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){ 
								$('#question8').hide(); $('#question9').hide(); $('#question10').hide(); 
								$('#question11').hide(); $('#question12').show(); 
						}else{
			             if(is1cellgen==true){
			                $('#question8').show();
			             }else{
			                 $('#question8').hide();
			                 $('#question9').show();
			             }
						}
			        break;

			        case "btn8":
						prevForm='question8';
			            $('#question8').hide();

			            $('#question9').hide();

			            $('#question10').hide();

			            $('#question11').hide();

			            $('#question12').show();

			        break;

			        case 'btn9':
						prevForm='question9';
			            $('#question9').hide();

			            $('#question10').show();

			        break;

			        case 'btn10':
						prevForm='question10';
			             var rbnVal=$('input[name="question10[]"]:checked').val().trim();

			            if(rbnVal=='No'){

			               $('#question10').hide();

			               $('#question11').hide();

			               $('#question12').show(); 

			            }

			            else{

			                 $('#question10').hide();

			                 $('#question11').show(); 

			            }

			        break;

			        case 'btn11':
						prevForm='question11';
			             $('#question11').hide();

			             $('#question12').show(); 

			        break;

			        case 'btn12':
						prevForm='question12';
			            var rbnVal=$('input[name="question12"]:checked').val().trim();

			            if(rbnVal=='Yes, at -80°C' || rbnVal=='Yes, at -196°C'){

			               $('#question12').hide();

			               $('#question13').show(); 

			            }

			            else{

			                 $('#question12').hide();

			                  $('#question13').hide();

			                 $('#question14').show(); 

			            }

			        break;

			        case 'btn13':
						prevForm='question13';
			            $('#question13').hide();

			            $('#question14').show(); 

			        break;

			        case 'btn14':
						prevForm='question14';
			            $('#question14').hide();
						if(is1stbiopr==true || is1stcellgenther==true || is1stcmdo==true || is1stothers==true){
						$('#question15').hide();
			            $('#question16').show();
						}else{
						if(is1cellgen==false){
							$('#question15').show();
						}else{
							$('#question15').hide();
			            $('#question16').show();
					} 
				}
			        break;

			        case 'btn15':
						prevForm='question15';
			         $('#question15').hide();

			         $('#question16').show(); 

			        break;

			        case 'btn16':
						prevForm='question16';
			             var rbnVal=$('input[name="question16[]"]:checked').val().trim();

			         switch(rbnVal){

			            case "Tube welders":							
							$('#question16').hide();
							is16tubes=false;
							is16tubew=true;
							('#question17').show();
						break;
                        case "Tube sealers":
                             $('#question16').hide(); 
                             $('#question20').hide();
                             is16tubes=true;is16tubew=false;
                             $('#question17').show();
                        break;
                        case "Quick connection":
                        case "Gendered aseptic connectors":
                        case "Genderless aseptic connectors":
                        case "Aseptic disconnect":
                        case "Fitting & Luer locks":
                        case "Others":
                             $('#question16').hide();
                             $('#question21').hide();
                             $('#question22').hide();
                             is16tubes=false;is16tubew=false;
                             $('#question17').show();
                        break;
			         }

			        break;

			         case 'btn17':
						prevForm='question17';
			              $('#question17').hide();

                          $('#question18').show();

			         break;

			         case 'btn18':
						prevForm='question18';
			             $('#question18').hide();
                         $('#question19').show();
			         break;

			         case 'btn19':
						prevForm='question19';
			             $('#question19').hide();			           
			            $('#question20').show(); 
			         break;

			         case 'btn20':
						prevForm='question20';
			             $('#question20').hide();
					 if(is16tubew || is16tubes) {$('#question21').show();}
						 else{
							$('#question21').hide();
							
							$('#question23').show();
						 } 
			         break;

			         case 'btn21':
						prevForm='question21';
			             $('#question21').hide();
                        if(is16tubew==true)  $('#question22').show();  
						else{ $('#question22').hide();$('#question23').show(); } 
			         break;

			         case 'btn22':
						prevForm='question22';
			             $('#question22').hide();
			             $('#question23').show();
			         break;

			         case 'btn23':
						prevForm='question23';
			             $('#question23').hide();
			             $('#question24').show();
			         break;

			         case 'btn24':						
						prevForm='question24';
			             $('#question24').hide();
						 if(is16tubew || is16tubes) {$('#question25').show();}
						 else{
							if(is1stbiopr==true){ 
							$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').show();
							}
							else if(is1stcellgenther ==true){
								$('#question25').hide();
							$('#question26').show();
							}else{
								$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').hide();
							$('#question29').show();
							}
						 } 
			         break;


			         case 'btn25':
						prevForm='question25';
			             var rbnVal=$('input[name="question25"]:checked').val();
						 if(is1stbiopr==true){ 
							$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').show();
							}
							else if(is1stcellgenther ==true){
								$('#question25').hide();
							$('#question26').show();
							}else{
								$('#question25').hide();
							$('#question26').hide();$('#question27').hide();$('#question28').hide();
							$('#question29').show();
							}
			         break;

			          case 'btn26':
						prevForm='question26';
			               $('#question26').hide();

			               $('#question27').show();

			         break;

			          case 'btn27':
						prevForm='question27';
			              $('#question27').hide();

			               $('#question28').hide();

			               $('#question29').show();

			         break;

			         case 'btn28':
						prevForm='question28';
			              var rbnVal=$('input[name="question28"]:checked').val();

			                $('#question28').hide();

			                $('#question29').show();

			         break;

			         case 'btn29':
						prevForm='question29';
			              var rbnVal=$('input[name="question29"]:checked').val();

			                $('#question29').hide();

			                $('#question30').show();

			         break;

			         case 'btn30':
						prevForm='question30';
			              var rbnVal=$('input[name="question30"]:checked').val();

			                $('#question30').hide();

			                $('#question31').show();

			         break;

			          case "btn31":
						prevForm='question31';
						var rbnVal=$('input[name="question30"]:checked').val();
						
	
			         break;

			    }

			    

			} 

			function showResults() {

			if (isRegistrationSubmit) {

			  scrollPanel("question1");

			  isRegistrationSubmit = false;

			  return;

			}

			if (!isFormPosted) return;

			var score = $("[name='overallAverage']").val() * 1;

			var result;

			

			if (score < 2) {

			result = resources.scoreLow;

			$("#standards").show();

			} else if (score < 3) {

			result = resources.scoreMed;

			    // $("#standards").hide();

			    $("#standards").show();

			} else {

			    result = resources.scoreHi;

			    // $("#standards").hide();

			    $("#standards").show();

			}

			

			$("#resultIcon").attr("src", result.icon);

			$("#resultHeading").html(result.heading);

			$("#resultCopy").html(result.copy);

			

			$("#resources table").html("");

			for (var i = 0; i < result.resources.length; ++i) {

			    $("#resources table").append(

			        "<tr>\n" +

			        "   <td><a href=\"" + result.resources[i].url + "\" target=\"_blank\">\n" +

			        "       <img class=\"icon\" src=\"{{config('app.url')}}zebra/img/icon-whitepaper.png\" /></a></td>\n" +

			        "   <td><span>White Paper</span>\n" +

			        "   <a href=\"" + result.resources[i].url + "\" target=\"_blank\" onclick=\"" + result.resources[i].onClick + "\">" + result.resources[i].title + "</a>\n" +

			        "   <div style=\"clear:both\"></div></td>" +

			        "</tr>\n"

			        );

			}

			

			scrollPanel("results");

			

			window.AnalyticsDataLayer = {

			  'siteVersion': 'forms',

			  'site': 'zebra:eloqua',

			  'events': 'event7',

			  'eVar26': 'Australia'

			};

			

			s.trackData(AnalyticsDataLayer);

			}

			

			var isRegistrationSubmit = false;

			

			$(".cta input[type='button']").click(function () {

			var thisPanel = $(this).closest(".panel").attr("id");

		

			if (thisPanel == "registration") {

			if (!$("#elqForm").valid()) return;

			$("[name='submissionType']").val("registration");

			isRegistrationSubmit = true;

			

			$("#elqForm").submit();

			}

			

	

			

		 	if (thisPanel.indexOf("question") > -1) {

			if ($("[name='" + thisPanel + "[]']:checked").length == 0  && $("[name='" + thisPanel + "']:checked").length == 0) {

		

			    alert("A selection is required.");

			    return;

			}

			else {

			    calculateScore(thisPanel);

			}

		

			}

			



		

				

			var next = $(this).closest(".panel").data("next");

			if (next == "results") {

			isFormPosted = true;

			$("[name='submissionType']").val("completion");

			var score = $("[name='overallAverage']").val() * 1;

			var result;

			

			if (score < 2) {

			    result = resources.scoreLow;

			} else if (score < 3) {

			    result = resources.scoreMed;

			} else {

			    result = resources.scoreHi;

			}

			

			$("[name='overallScore']").val(result.heading);

			

			$("#elqForm").submit();

			return;

			}

			

			//scrollPanel(next);

			currentPanel++;

			currentQuestion = next;

			var prev = $(this).closest(".panel").data("prev");
			currentPanel--;
			currentQuestion = next;
		

			});
			
			
			
			$(document).ready(function () {

			//reset form:

			currentPanel = 0; //"registration";

			

			$("#panelContainer input[type=text],#panelContainer select").val("");

			$("#panelContainer input[type=radio],#panelContainer input[type=checkbox]").prop("checked", false);

			

			$("#progress td").addClass("disabled");

			

			$("#elqForm").validate();

			$(".panel").css({ "display": "block" });

			resizeScreen();

			setInterval(resizeScreen, 250);

			

			});

		</script>

	   <iframe id="postFrame" name="postFrame" src="" onload="showResults()" src="" sandbox="allow-top-navigation allow-scripts allow-forms"></iframe>
	   
		<!-- {{config('app.url')}}zebra/eloqua script -->

		<script src="{{config('app.url')}}zebra/registration.js"></script>

		<script>
			  
		
			var optInCountries = ["CA", "DE", "CN", "NZ", "IT", "PL", "RU", "ES", "TR", "NL", "AU"];

			var campaignIds = {"APAC":"12278", "NA": "12529", "EMEA":"12321", "LATAM":"12523"}

			$("[name='Country']").change(function () {

			    if (optInCountries.indexOf($(this).val()) > -1)

			        $("[name=zOptIn]").closest("li").show();

			    else

			        $("[name=zOptIn]").closest("li").hide();

			

			    var region = regionList[$(this).val()];

			    if (region != undefined) {

			      $("[name='region']").val(region.region);

			      $("[name='elqCampaignId']").val(campaignIds[region.region]);

			  } 

			});

			

		</script>

		<script>

			//demandbase

			

			(function (d, b, a, s, e) {

			    var t = b.createElement(a),

			    fs = b.getElementsByTagName(a)[0]; t.async = 1; t.id = e;

			    t.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + s;

			    fs.parentNode.insertBefore(t, fs);

			})(window, document, 'script', 'scripts.demandbase.com/73PwKbIO.min.js', 'demandbase_js_lib');

			

		</script>

		<!-- 

			<script>

			    //eloqua

			    var timerId = null, timeout = 5;

			    function SetCustomerGuid() {

			        if (!!(timerId)) {

			            if (timeout == 0) return;

			

			            if (typeof this.GetElqCustomerGUID === 'function') {

			                document.getElementsByName("elqCustomerGuid")[0].value = GetElqCustomerGUID();

			                return;

			            }

			            timeout -= 1;

			        }

			        timerId = setTimeout("SetCustomerGuid()", 500);

			        return;

			    }

			

			    var email = "";

			    $(document).ready(function () {

			        timerId = setTimeout("SetCustomerGuid()", 500);

			        _elqQ.push(['elqGetCustomerGUID']);

			

			        if (typeof elqId == "undefined") {

			            cookie_look = true;

			            _elqQ.push(['elqDataLookup', escape('732826011b36486e8735eef895c09591'), '']);

			        } else {

			            cookie_look = false;

			            _elqQ.push(['elqDataLookup', escape('08ac4d580ea14b32a8ed58948eb5f273'), '<C_EmailAddress>' + email + '</C_EmailAddress>']);

			        }

			

			    });

			

			    function SetElqContent() {

			

			        if (cookie_look) {

			            if (email == "") {

			                email = GetElqContentPersonalizationValue('V_Email_Address');

			            }

			            browser = GetElqContentPersonalizationValue('V_Browser_Type');

			            cookie_look = false;

			            if (email != "")

			                _elqQ.push(['elqDataLookup', escape('08ac4d580ea14b32a8ed58948eb5f273'), '<C_EmailAddress>' + email + '</C_EmailAddress>']);

			        } else {

			            $("[name='emailAddress']").val(email);

			            $("[name='FirstName']").val(GetElqContentPersonalizationValue('C_FirstName'));

			            $("[name='LastName']").val(GetElqContentPersonalizationValue('C_LastName'));

			            $("[name='company']").val(GetElqContentPersonalizationValue('C_Company'));

			            $("[name='Phone']").val(GetElqContentPersonalizationValue('C_BusPhone'));

			            $("[name='industry']").val(GetElqContentPersonalizationValue('C_Vertical__SFDC_1'));

			            $("[name='Country']").val(GetElqContentPersonalizationValue('C_Country')).change();

			

			        }

			    }

			

			</script>

			

			<script>

			    var AnalyticsDataLayer = {

			        'siteVersion': 'forms',

			        'site': 'zebra:eloqua',

			        'events': 'event47',

			        'eVar50': 'zebra:us:en:hc-global-assessment'

			    }

			

			</script>

			<script src="{{config('app.url')}}zebra/satelliteLib-0a23cff0f753ba0e0ab2bbcf17482bc138ae1238.js"></script>

			

			<script>

			    function getQueryStringParam(ji) {

			        hu = window.location.search.substring(1);

			        gy = hu.split("&");

			        theResult = "";

			

			        for (i = 0; i < gy.length; i++) {

			            ft = gy[i].split("=");

			            if (ft[0] == ji) {

			                theResult = ft[1];

			            }

			        }

			        return theResult;

			    }

			

			    $(document).ready(function () {

			        var tactic_type = "";

			        var tactic_detail = "";

			

			        if (typeof _satellite != "undefined") {

			            tactic_type = _satellite._cookies.get('tactic_type');

			            tactic_detail = _satellite._cookies.get('tactic_detail');

			        } else {

			            tactic_type = getQueryStringParam('tactic_type');

			            tactic_detail = getQueryStringParam('tactic_detail');

			        }

			

			        if (tactic_type != undefined) $("[name='tactic_type']").val(tactic_type);

			        if (tactic_detail != undefined) $("[name='tactic_detail']").val(tactic_detail);

			

			        $("[name='sfid']").val(getQueryStringParam('elqCampaignId'));

			        $("[name='Country']").change();

			    });

			</script>

			<script>

			    _satellite.pageBottom();

			</script> -->

		<!-- <script type="text/javascript">

			@if(Session('thank_message'))

			$('#results').show();

			@endif

			</script> -->

	</body>

</html>