<?php $__env->startSection('style'); ?>

  <link rel="stylesheet" href="<?php echo e(config('app.url')); ?>css/advertise.css">

<style type="text/css">

	.advert-bg{

		background-image: url("<?php echo e(config('app.url')); ?>images/advertising/advertise-bg.jpg");

		background-repeat: no-repeat;

		background-size: cover;

		padding-right:0px;

	}

	#wrap {

		/* fixed width, centered in viewport */

		width:90%;

		left: -490px;

		margin-left:0%;

		position: relative;

	}

	.bullet ul > li{list-style: none !important;}

	.font-21{font-size: 21px;line-height: 120%;}

	.font-18{font-size: 18px;line-height: 120%;}

	.PF-TXTBLU{color: #3c598a;}

	.bullet ul > li{list-style: none !important;}

	.has-error .help-block{

		color: #fff;

	}

	.hover-img{

		padding: 10px;

		margin-right: 10px;

		transition: all .4s ease-in-out;

		    transform: scale(.9) rotate(-11deg) translateY(-19px);

	}

	.hover-img:hover{

		transition: all .4s ease-in-out;

		    transform: scale(1) rotate(0deg) translateY(-30px);

	}

	.form-control {

		height: calc(2rem + 2px);

		font-size: 14px;

	}

	.font-13 {font-size: 13px !important; line-height: 1.2}

	.form-group {

		margin-bottom: 14px;

	}

</style>

<style type="text/css">

  .grecaptcha-badge { 

    bottom: 100px !important;

  }

  .rc-anchor-normal{

    background: #000 !important;

    color: #000 !important; 

  }

</style>

<script src="https://www.google.com/recaptcha/api.js?render=6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>



<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "FAQPage",
"mainEntity": [
{
"@type": "Question",
"name": "What is Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Pharma Focus Asia is a quarterly publication from Ochre Media Pvt. Ltd. It is the leading Pharma title in print and digital versions serving the information needs of key executives from the world’s leading Pharma providers. Our platform covers a wide range of topics including Pharma management, medical sciences, surgical specialty, diagnostics, technology, equipment and devices, facilities & operations management, and information technology."
}
},
{
"@type": "Question",
"name": "How can I benefit from Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "By visiting Pharma Focus Asia, you can stay informed about the latest developments in the Asian Pharma sector. You'll have access to articles, interviews, and reports from industry experts, which can help you make informed decisions and stay ahead in the rapidly evolving Pharma landscape."
}
},
{
"@type": "Question",
"name": "Is Pharma Focus Asia free to access?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, Pharma Focus Asia is a free online platform. We believe in providing valuable information to everyone interested in the Asian Pharma industry. Simply visit our website and start exploring the wealth of content available."
}
},
{
"@type": "Question",
"name": "Can I contribute articles or share my expertise on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Absolutely! We welcome contributions from Pharma professionals, industry experts, and thought leaders. If you have valuable insights, research findings, or innovative ideas to share, please reach out to our editorial team via email at editorial@pharmafocusasia.com."
}
},
{
"@type": "Question",
"name": "How often is the content on Pharma Focus Asia updated?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We strive to provide fresh and up-to-date content on a regular basis. Our team of experienced writers and researchers work diligently to bring you the latest news, trends, and analysis from the Asian Pharma industry. You can expect new articles, interviews, and reports to be published frequently."
}
},
{
"@type": "Question",
"name": "Can I subscribe to Pharma Focus Asia's newsletter?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, we offer a newsletter subscription option to keep you informed about the latest updates and articles. You can sign up for our newsletter by filling up the details on our website: https://www.pharmafocusasia.com/e-newsletter-subscribe. Rest assured, we respect your privacy and will not share your information with third parties."
}
},
{
"@type": "Question",
"name": "How can I contact Pharma Focus Asia for advertising or partnership opportunities?",
"acceptedAnswer": {
"@type": "Answer",
"text": "For advertising or partnership inquiries, please visit our Contact Us page on the website. You can fill out the contact form with your details and specific requirements, and our team will get back to you promptly."
}
},
{
"@type": "Question",
"name": "Can I search for specific topics or articles on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, you can use the search bar located on our website to search for specific topics, articles, or keywords. Simply enter your search query in the search bar on the top right, and the website will display relevant results for you to explore."
}
},
{
"@type": "Question",
"name": "Are the views expressed on Pharma Focus Asia endorsed by the website?",
"acceptedAnswer": {
"@type": "Answer",
"text": "The views expressed in articles, interviews, and opinion pieces published on Pharma Focus Asia belong to the respective authors and contributors. They do not necessarily reflect the views or opinions of Pharma Focus Asia as an organization. We strive to present a diverse range of perspectives to foster healthy discussions within the Pharma community."
}
},
{
"@type": "Question",
"name": "Can I share content from Pharma Focus Asia on social media or other platforms?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, we encourage you to share the content you find valuable on Pharma Focus Asia through social media or other platforms."
}
},
{
"@type": "Question",
"name": "How do I ask permission to reprint all or part of an article?",
"acceptedAnswer": {
"@type": "Answer",
"text": "For all reprint queries, please contact advertise@pharmafocusasia.com."
}
},
{
"@type": "Question",
"name": "Is there a mobile app available for Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Currently, Pharma Focus Asia is accessible through its website only. However, our website is optimized for mobile devices, allowing you to access and browse the content on your smartphones or tablets conveniently."
}
},
{
"@type": "Question",
"name": "Can I request a specific topic to be covered on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Absolutely! We value our readers' feedback and suggestions. If you have a specific topic or area of interest that you would like us to cover, please feel free to reach out to us through the 'Contact Us' page on our website. We appreciate your input and will take it into consideration when planning future content."
}
},
{
"@type": "Question",
"name": "How can I stay updated with the latest content from Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Apart from subscribing to our newsletter, you can also follow us on social media platforms such as Facebook, Twitter, and LinkedIn. We regularly post updates and share new articles through our social media channels, keeping you informed about the latest content and industry news."
}
},
{
"@type": "Question",
"name": "Are there any job or career opportunities available at Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "At Pharma Focus Asia, we are constantly growing and expanding. If you are interested in joining our team or exploring job opportunities, please visit our 'Careers' page on the website. We post any available positions there and provide instructions on how to apply."
}
},
{
"@type": "Question",
"name": "Is Pharma Focus Asia available in multiple languages?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Currently, Pharma Focus Asia is available in English language only. However, we are actively exploring options to expand our language offerings in the future to cater to a wider audience."
}
},
{
"@type": "Question",
"name": "What advertising opportunities are available on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Pharma Focus Asia offers a range of advertising opportunities to promote your products or services to our audience. These opportunities include Print Advertisement, banner advertisements, Sponsored Webinar, Content Syndication, sponsored content, sponsored newsletters, and strategic partnerships. Please visit our 'Advertising' page for more details on each option."
}
},
{
"@type": "Question",
"name": "How can advertising on Pharma Focus Asia benefit my brand?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Advertising on Pharma Focus Asia provides exposure to a targeted audience of Pharma professionals, industry leaders, and decision-makers in the Asian Pharma sector. It allows you to showcase your brand, increase visibility, and generate leads within this specific market. Our platform offers a valuable opportunity to connect with your target audience effectively."
}
},
{
"@type": "Question",
"name": "Can I target specific regions or countries with my advertising campaign?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, we offer the flexibility to target specific regions or countries with your advertising campaign. Pharma Focus Asia covers the entire Asian Pharma market, and we can work with you to tailor your campaign to reach your desired audience effectively."
}
},
{
"@type": "Question",
"name": "How can I measure the effectiveness of my advertising campaign on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "We provide comprehensive reporting and analytics to track the performance of your advertising campaign on Pharma Focus Asia. You will receive detailed metrics such as impressions, clicks, engagement, and conversions. These insights will help you assess the effectiveness of your campaign and make data-driven decisions for future advertising efforts."
}
},
{
"@type": "Question",
"name": "Are there any guidelines or restrictions for advertising on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, we have advertising guidelines and standards to ensure the quality and relevance of the advertisements displayed on Pharma Focus Asia. Our guidelines cover aspects such as content, design, and ethical considerations. Please refer to our 'Advertising Guidelines' page for detailed information."
}
},
{
"@type": "Question",
"name": "How can I get started with advertising on Pharma Focus Asia?",
"acceptedAnswer": {
"@type": "Answer",
"text": "To get started with advertising on Pharma Focus Asia, please fill out the contact form on our 'Advertising' page. Provide us with your contact information and specific requirements, and our advertising team will get in touch with you to discuss further details, pricing, and available options."
}
},
{
"@type": "Question",
"name": "Can I request a custom advertising package or discuss unique advertising needs?",
"acceptedAnswer": {
"@type": "Answer",
"text": "Yes, we understand that each advertiser may have unique requirements. We are open to discussing custom advertising packages tailored to your specific needs. Please reach out to us through the contact form on our 'Advertising' page, and our team will work with you to create a solution that aligns with your objectives."
}
}
]
}
</script>

<div class="container-fluid"> 

	<div class="bullet">

		<div class="container-fluid mob-MR0"> 



			<!-- // Main Container -->

			<div class="container advert">

				<div class="col-lg-12">

					<div class="row PF-BrdrBEEE mb-4 mt-3">

						<h1 class="float-left PF-Bshelf text-uppercase">advertise</h1>

					</div>

				</div>



				<div class="row">

					<!-- // col-9 -->

					<div class="col-lg-8 col-md-8 col-sm-12 col-12 pl-o mob-MR0">

						<div class="col-12 advert-bg min-hyt-580">

							<div class="row">

								<div class="col-lg-5 col-md-5 col-sm-6 col-12 pt-3">

									<h2 class="pt-3">Leverage the power of our targeted platform</h2>

									<p class="text-left pt-2">Big brands look forward to advertise in Pharma Focus Asia as it gives them the right audience they want to reach out to. PFA is read by senior management and key decision makers across top Pharma companies in Asia. Valued for our independent reporting and unbiased coverage on key topics of the industry, PFA is one of the most respected pharma magazines in Asia.</p>

									<p class="text-left pt-2">Leverage today, on our unparalleled reach to your target audience.</p>



									<ul class="px-2 font-16 pb-3">

										<li><h2>Our Services</h2></li>

										<li class="text-white mb-2">

											<img src="<?php echo e(config('app.url')); ?>/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> Magazine Advertisement

										</li>

										<li class="text-white mb-2">

											<img src="<?php echo e(config('app.url')); ?>/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> Banner Advertisements

										</li>

										<li class="text-white mb-2">

											<img src="<?php echo e(config('app.url')); ?>/images/advertising/hand-icon.png" alt="Hand icon" width="20" class="mr-2" /> e-Mail Direct Marketing

										</li>

									</ul>

									<div class="pb-3"></div>

								</div>



								<div class="col-lg-7 col-md-7 col-sm-6 col-12 align-self-end">

									<img src="<?php echo e(config('app.url')); ?>images/advertising/advertise-user.png" alt="" class="img-fluid banner-wrap-img" style="vertical-align: bottom;" />           

								</div>

							</div>

						</div>  

					</div>

					<!-- col-9 // -->



					<!-- // col-3 - Right -->

					<div class="col-lg-4 col-md-4 col-sm-12 col-12 magz-bg pt-2 pb-2 min-hyt-580">  

						<div class="advert">

							<h2 class="text-left pt-2 font-21 mb-1">Have a query or want to know more?</h2>

							<p class="text-left font-13">Please fill in the below form and download our Mediapack.</p>

						</div>    

						<div class="form_error">

						</div>         

						<!--<form name="advertise_form" class="email" id="writemessage" method="post" accept-charset="utf-8">-->

						<form action="<?php echo e(route('advertise.post')); ?>" class="email" id="writemessage" method="post" accept-charset="utf-8">

							<?php echo csrf_field(); ?>

							  <input type="hidden" name="" class="action_url" value="<?php echo e(route('advertise.post')); ?>">

                        	<input type="hidden" name="name" value="pharmafocusasia-advertise">

							<div class="form-group col-12  <?php echo e($errors->first('firstname', 'has-error')); ?>">

								<input type="text" class="form-control" id="name" name="firstname" placeholder="First Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="<?php echo e(old('firstname')); ?>" required>

								<input type="hidden" value="advertise" name="type" id="type" />

								<span class="help-block"><?php echo e($errors->first('firstname', ':message')); ?></span>   

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('lastname', 'has-error')); ?>">

								<input type="text" class="form-control" id="name" name="lastname" placeholder="Last Name*" pattern="[A-Za-z\s]{2,50}" title="Enter only alphabets" value="<?php echo e(old('lastname')); ?>" required>

								<span class="help-block"><?php echo e($errors->first('lastname', ':message')); ?></span>   

							</div>



							<div class="form-group col-lg-12  <?php echo e($errors->first('cf_leads_jobtitle', 'has-error')); ?>">

		                        <input type="text" class="form-control" value="<?php echo e(old('cf_leads_jobtitle')); ?>" name="cf_leads_jobtitle" placeholder="Job Title*" pattern="[A-Za-z0-9\s]{2,50}" required="">

		                          <span class="help-block"><?php echo e($errors->first('cf_leads_jobtitle', ':message')); ?></span>  

                      		</div>



                      		<div class="form-group col-12  <?php echo e($errors->first('company', 'has-error')); ?>">

								<input type="text" class="form-control" id="company" name="company" value="<?php echo e(old('company')); ?>" placeholder="Company*" pattern="[A-Za-z0-9\s]{2,50}" required>      

								<span class="help-block"><?php echo e($errors->first('company', ':message')); ?></span>         

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('email', 'has-error')); ?>">

								<input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Business Email*" required>

								<span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>   

							</div>



							<div class="form-group col-12  <?php echo e($errors->first('mobile', 'has-error')); ?>">

								<input type="tel" class="form-control" id="subject" name="mobile" value="<?php echo e(old('mobile')); ?>" pattern="[0-9\s._*#()+-]+" minlength="8" placeholder="Telephone*" required>       

								<span class="help-block"><?php echo e($errors->first('mobile', ':message')); ?></span>        

							</div>

							

							<div class="form-group col-12  <?php echo e($errors->first('whom', 'has-error')); ?>">  

								<select class="form-control custom-select" name="whom" required="required">

									<option selected disabled>How did you hear about us?*</option>

									<option value="Internet Search">Internet Search</option>

									<option value="Social Media">Social Media</option>

									<option value="Email">Email</option>

									<option value="Other">Other</option>

								</select>        

							</div>

							

							<div class="form-group col-12  <?php echo e($errors->first('description', 'has-error')); ?>">

								<textarea class="form-control" type="textarea" id="message" name="description" value="<?php echo e(old('description')); ?>" placeholder="Message" rows="2"></textarea>

								<span class="help-block"><?php echo e($errors->first('description', ':message')); ?></span>   

							</div>



							<input type="hidden" name ="g-recaptcha-response" id ="g-recaptcha-response">



							<div class="form-group col-12">

								<!--<input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" onclick="return checkform();"><div class="clearfix"></div>-->

								<input type="submit" class="btn btn-block btn-info" id="submit-button" value="SUBMIT" ><div class="clearfix"></div>

							</div>

							<div class="form-group col-12">

								<p class="text-left mb-0 font-13">OR write to us at</p>

								<p class="text-left mb-0">	

									<a href="<?php echo e(trans('messages.advertise_mail_to')); ?>" class="text-white font-weight-bold"><?php echo e(trans('messages.advertise_email')); ?></a>

								</p>

								<!-- <p>Call to us: <a href="tel:+914049614567" title="For Enquiries" class="text-white"> +91 40 49614567</a>

								</p> -->

							</div>

							<div class="clearfix"></div>

						</form>

					</div>

					<!-- col-3 // -->

				</div>  

			</div>

			<!-- Main Container // -->



			<!-- // Visits Container -->

			<div class="container" align="center">

				<div class="col-12 pt-4 adv-visit">

					<div class="row">

						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">

							<div class="row">

								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

								<div class="col-lg-3 col-md-3 col-sm-5 col-6">

									<i class="fa fa-globe fa-cust" aria-hidden="true"></i>

								</div>

								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">

									<p class="font-18 text-center mb-3">

									68% geographical<br>

									coverage in<br>

									Asia-Pacific</p>

								</div>

							</div>

						</div>



						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">

							<div class="row">

								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

								<div class="col-lg-3 col-md-3 col-sm-5 col-6">

									<i class="fa fa-hospital-o fa-cust" aria-hidden="true"></i>

								</div>

								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">

									<p class="font-18 text-center mb-3">

										58% of pharmaceutical<br>

										manufacturers<br>

										covered in Asia

									</p>

								</div> 

							</div>

						</div>   



						<div class="col-lg-4 col-md-6 col-sm-6 col-12 pt-2 pb-2" align="center">

							<div class="row">

								<div class="col-lg-2 col-md-2 hidden-sm hidden-xs"></div>

								<div class="col-lg-3 col-md-3 col-sm-5 col-6">

									<i class="fa fa-users fa-cust" aria-hidden="true"></i>

								</div>

								<div class="col-lg-7 col-md-7 col-sm-7 col-6 pt-3 pb-3" align="center">

									<p class="font-18 text-center mb-3">

										50% of top business<br>

										management<br>

										executives

									</p>

								</div>  

							</div> 

						</div> 

					</div>

				</div>

			</div>  

			<!-- Visits Container // -->



			<!-- Magazines-Container // -->

			<div class="container" align="center">

				<div class="col-12 magz-bg pb-1">

					<h3 class="font-21 pb-0 pt-2 font-weight-bold">

						<a href="<?php echo e(url('archives')); ?>" target="_blank" class="text-white">Our Magazines</a>

					</h3>

					<div class="mt-5"> 

						<?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

							<a href="<?php echo e(url('archives-magazine').'/'.$val->issue_id); ?>" target="_blank">

								<img class=" img-fluid hover-img" src="<?php echo e(config('app.url').'ebooks/'. Str::slug($val->issue->issue_no).'/'.$val->magazine_image); ?>" alt="<?php echo e($val->issue->issue_no); ?>" width="175" height="223"  />

							</a>

						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

					

						<h2 class="text-right mt-0">

							<a href="<?php echo e(url('archives')); ?>" target="_blank" class="text-white">Our Previous Issues 

								<i class="fa fa-angle-double-right" aria-hidden="true"></i> <i class="fa fa-angle-double-right" aria-hidden="true"></i>

							</a>

						</h2>                   

					</div>           

				</div>

			</div>   



	       	<!-- // Clients-Container -->

	       	<div class="container" align="center">

		       	<div class="col-12 pt-4">

		       		<h2 class="font-21 PF-TXTRED mt-0 pt-2 pb-2">Our Clients</h2>

		       		<div class="row">

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/tsi-logo.png" alt="TSI" class="img-fluid" width="50%" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/pall-corporation-logo.png" alt="pall" class="img-fluid" width="50%" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/abbott.png" alt="abbott" class="img-fluid" width="50%" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/emirates-skycargo-logo.png" alt="abemirates-skycargo" class="img-fluid" width="50%" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/vetter-logo.png" alt="vetter" class="img-fluid" width="50%" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/etihad-logo.png" alt="etihad" class="img-fluid" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/meco-logo.png" alt="meco" class="img-fluid" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/perkinelmer-logo.png" alt="perkinelmer" class="img-fluid pl-4 pr-4" />

		       			</div>

		       		

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/lufthansa-cargo.png" alt="lufthansa" class="img-fluid pl-4 pr-4" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/turkish-cargo-logo.png" alt="turkish-cargo" class="img-fluid" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2" align="center">

		       				<img src="<?php echo e(config('app.url')); ?>/advertisers/chemspeed-logo.png" alt="chemspeed" class="img-fluid" />

		       			</div>

		       			<div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-2 align-items-center" valign="middle" align="center">

		       				<a href="<?php echo e(url('clients')); ?>" target="_blank" class="text-primary">

		       					<h6 class="pt-3 pb-2 mb-2 font-21 font-weight-bold">More...</h6>

		       				</a>

		       			</div>

		       		</div>

		   		</div>

	   		</div>

	   		<!-- Clients-Container // -->



    	</div>

   	</div>

</div>

<div id="alertModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <!-- Modal content-->

    <div class="modal-content">

     <div class="modal-header">

      <h5 class="modal-title text-danger">Error</h5>

      <button type="button" class="close" data-dismiss="modal">&times;</button>



    </div>

    <div class="modal-body">

      <p class="">Please fill the all required fields....!!</p>





    </div>

    <div class="modal-footer">

     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>



   </div>

 </div>

</div>

</div>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('scripts'); ?>

<script type="text/javascript">

      var url = "<?php echo e(route('advertise.post')); ?>";

		function OnButton1(){

		    setTimeout(function(){

		      document.advertise_form.action = url;

		      document.advertise_form.submit();

		        },200);

		  }

    

      function checkform() {      

       var flag = true;

       var form = $('#writemessage');

       $("#writemessage input").each(function(){

        if($(this)[0].hasAttribute("required")){



          if($(this)[0].value == ""){

            $('#alertModal').modal('show');                 

            

            flag = false;

          }

        }

      });

       if (!flag) { return false; }

         OnButton1();

     }

  </script> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/forms/advertise/index.blade.php ENDPATH**/ ?>