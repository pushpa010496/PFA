@extends('../layouts/app')

@section('style')

<!-- <link rel="stylesheet" href="{{ config('app.url') }}css/form-design.css"> -->

<style>

	label{padding-bottom: 0px;margin-bottom: 0px;}

	.form-custom .form-control {border: none !important;border-bottom: 1px dashed #999 !important;}

	select{background-color: #f3f3f3 !important;}

	.form-area .form-control:focus {

		border-color: #f04e23 !important;

		outline: 1;

		transition: all ease-in .5s;

	}

	#input_company_other .form-control, #input_job_other .form-control ,#input_hod .form-control{

		border-color: #e29c8a;

	}



	.form-custom .form-control:focus {

		border-color: #66afe9;

		outline: 0;

		border-bottom: 1px dashed #F04E23 !important;

      /*-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);

      box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);*/

      box-shadow:none;

  }

  .custom-control-label::before{background-color: }



  .custom-control-label1 {

  	position: relative;

  	margin-bottom: 0;

  }
  select{
	background-color:#fff !important;
  }
</style>

@endsection

<script src="https://www.google.com/recaptcha/api.js?render=6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9"></script>

<script> 

    grecaptcha.ready(function() {

      grecaptcha.execute('6Ld3Ni0aAAAAAN-BrU2U95Z9D41TRD0OkdJS9cM9', {action: 'submit'}).then(function(token) {

        document.getElementById("g-recaptcha-response").value=token

      });

    });

</script>

@section('content')

<div id="myModal" class="modal fade" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->

                <div class="modal-content">

                    <div class="modal-header">

                        <h2 class="modal-title text-blue"> Thank You...</h2>

                    </div>

                    <div class="modal-body">

                        <p style="color: green;">Your Magazine Subscription was Successful</p>

						<p style="color: green;">Thank you for subscribing PharmaFocusAsia Magazine. Our team extends its gratitude for your interest in PharmaFocusAsia Magazine.</p>

						<p style="color: green;">We look forward to approaching you soon with the details to your access of the magazine.</p>

                        <p style="color: green;">A world of Pharmaceutical insights and industrial acumen awaits you!</p>

						<br>

                       

                    </div>

                    <div class="modal-footer">

                        <a class="btn btn-primary" role="button" id="aa" name="aa" href="{{url('https://www.pharmafocusasia.com/subscribe')}}"

                            aria-expanded="false">

                            Close

                        </a>

                    </div>

                </div>

            </div>

        </div>
		

		<form action="{{url('magazine-subscribe1-post')}}" method="Post" enctype="multipart/form-data">	
@csrf
		<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">

		<div class="container-fluid">

<div class=" mt-4 mb-4 p-4">
	<div class="row ml-md-5">
		<div class="col-lg-12 col-md-12 col-sm-12 col-12">
		<div class="row ">

<h1 class="mb-2 PF-TXTRED mt-3">Register & Subscribe for Pharma Focus Asia:</h1>
</div>
</div>

<div class="col-lg-8 col-md-8 col-sm-8 col-12 border p-2 mt-2">
<b class="font-16">Your Subscription Type</b>
<div class="p-1"></div>
<!-- check box start-->
<div class="row  p-3">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
		<div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="acceptance[]" value="e-Magazine" id="e-Magazine">
                 <input type="hidden" name="" value="e-Magazine" id="e-Magazine">
                 <label class="form-check-label font-16" for="e-Magazine">I would like to subscribe for e-Magazine (Free)</label>
              </div>
			</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12">
			  <div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="acceptance[]" value="e-Newsletter" id="e-Newsletter">
                 <input type="hidden" name="" value="e-Newsletter" id="e-Newsletter">
                 <label class="form-check-label font-16" for="e-Newsletter">I would like to subscribe for e-Newsletter (Free)</label>
              </div>
			  </div>
</div>
<!-- check box End-->
<div class="p-1"></div>
<b class="font-16">Your Details</b>
<div class="p-1"></div>
<!-- first form section start-->
<div class="row p-3">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
	
  <div class="form-group">
    <label for="First Name">First Name*</label>
    <input type="text" class="form-control" id="First Name*" name="firstname"  placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="Job Title">Job Title*</label>
    <input type="text" class="form-control" name="job_title" id="Job Title*" placeholder="" required="">
  </div>
  
 

	
			</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
			 
  <div class="form-group">
    <label for="Last Name">Last Name*</label>
    <input type="text" class="form-control" name="lastname" id="Last Name"  placeholder="" required="">
  </div>
  <div class="form-group">
    <label for="Company Name">Company Name*</label>
    <input type="text" class="form-control" name="company" id="Company Name*" placeholder="" required="">
  </div>
  <!-- <div class="form-group" >
  <label for="Job Function*">Job Function*</label>
<select class="form-control" id="job_function" name="job_function" placeholder="" required="" style="background-color:#fff !important;">

					<option disabled="" selected="" value="" class="font-weight-bold">Job Function*</option>

									<option value="Academic">Academic</option>

									<option value="Engineering">Engineering</option>

									<option value="Financial/Legal">Financial/Legal</option>

									<option value="IT/Communications">IT/Communications</option>

									<option value="Sales/Marketing/Business Development">Sales/Marketing/Business Development</option>

									<option value="Purchasing/Procurement">Purchasing/Procurement</option>

									<option value="Research/Development">Research/Development</option>

									<option value="Operations">Operations</option>

									<option value="Consulting">Consulting</option>

									<option value="Human Resources">Human Resources</option>

									<option value="Production/Manufacturing">Production/Manufacturing</option>

									<option value="QA/QC">QA/QC</option>

									<option value="Scientist/Technologist">Scientist/Technologist</option>

									<option value="Processing">Processing</option>

									<option value="Other">Other</option>

														

								</select>
</div>
  <div class="form-group" >
  <label for="Company Type*">Company Type*</label>
  <select class="form-control" id="company_type" name="company_type" placeholder="" required="" style="background-color:#fff !important;" >

<option disabled="" selected="" value="" class="font-weight-bold">Company Type</option>

<option value="Academia/Research Institute">Academia/Research Institute</option>

<option value="Association">Association</option>

<option value="Association">Association</option>

<option value="Consultancy">Consultancy</option>

<option value="Contract Manufacturer">Contract Manufacturer</option>

<option value="Financial/Legal">Financial/Legal</option>

<option value="Government/Regulatory Body">Government/Regulatory Body</option>

<option value="Contract Research">Contract Research</option>

<option value="Drug Development">Drug Development</option>

<option value="Manufacturer - Packaging & Labelling">Manufacturer - Packaging & Labelling</option>

<option value="Manufacturer - Pharmaceuticals">Manufacturer - Pharmaceuticals</option>

<option value="Manufacturer - APIs">Manufacturer - APIs</option>

<option value="Media/PR/Agency">Media/PR/Agency</option>

<option value="Retailer">Retailer</option>

<option value="Biotech">Biotech</option>

<option value="IT/Software">IT/Software</option>

<option value="Logistics">Logistics</option>

<option value="Supplier">Supplier</option>

<option value="Other">Other</option>								

</select>
</div> -->
 
			  </div>
</div>
<!-- first form section start End-->
<div class="p-1"></div>
<b class="font-16">Your Contact Details</b>
<div class="p-1"></div>
<!-- first form section start-->
<div class="row p-3">
	<div class="col-lg-6 col-md-6 col-sm-6 col-12">
	
  <div class="form-group">
    <label for="Email">Email*</label>
    <input type="email" class="form-control" name="email" id="Email*"  placeholder="" required="">
  </div>
  <!-- <div class="form-group">
    <label for="Postal Address">Postal Address*</label>
    <input type="text" class="form-control"  name="address" id="Postal Address*" placeholder="">
  </div>
  <div class="form-group">
    <label for="Zip/Postal">Zip/Postal*</label>
    <input type="text" class="form-control"  name="zipcode" id="Zip/Postal*" placeholder="">
  </div> -->
  <div class="form-group">
    <label for="Country*">Country*</label>
    
	{{ Form::select('country', $countries, null, ['class' => 'form-control','required'=>'required']) }}

<span class="help-block">{{ $errors->first('country', ':message') }}
  </div>
 

	
			</div>
			  <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
			 
  <div class="form-group">
    <label for="Telephone">Telephone*</label>
    <input type="tel" class="form-control" name="telephone" id="Telephone*"  placeholder="" required="">
  </div>
  


  
  
  
			  </div>
</div>
<!-- first form section start End-->
<div class="p-1"></div>
<b class="font-16">Your Subscription Type</b>
<div class="p-1"></div>
<!-- check box2 start-->
<div class="row p-3">
	<div class="col-lg-8 col-md-8 col-sm-8 col-12">
			<div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="email_notifications" value="Email Notifications" id="Product/Project">
                 <input type="hidden" name="" value="Product/Project" id="Product/Project">
                 <label class="form-check-label font-16" for="Product/Project">Third Party Email Notifications, Product/Project Updates etc.</label>
              </div>
			  <div class="form-check mb-1">
                 <input type="checkbox" class="form-check-input" name="events_notifications" value="Webinars/Events" id="Webinars/Events">
                 <input type="hidden" name="" value="Webinars/Events" id="Webinars/Events">
                 <label class="form-check-label font-16" for="Webinars/Events">Webinars/Events Notifications</label>
              </div>
			</div>
			
			  </div>

			  <div class="row">
				<div class="col-md-12 col-12">
				<div class="pt-4 pb-3" align="center">

					<button type="submit"  id="checkBtn" class="btn btn-danger pl-4 pr-4 btn-md">Submit</button>

				</div>
				</div>
			  </div>
			 
<!-- check box2 End-->
</div>
<div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2">

	<img  src="https://industry.pharmafocusasia.com/images/latest-issue-devices-banner.jpg" alt="pfe-devices" style="margin-bottom: 30px;">
	<div>	   
          </div>	

</div>
</div>
</div>



					

	
		

		<div class="clearfix"></div>



		

	</div>
</form>

	@endsection



	@section('scripts')



	

<script type="text/javascript">             
            $("#checkBtn").click(function(){ 
                var grpChk1 = $("[name='acceptance[]']:checked"); 
                if(grpChk1.length==0)
                { alert("Please click atleast one check box"); return false; }
			})
		
			</script>


@if(session('status')== true)
<script>
  $('#myModal').modal('show'); 
</script>
  @endif 



	@endsection