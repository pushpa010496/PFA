<?php $__env->startSection('style'); ?>
<style>
    .ahhm-editorial-calendar .editorial-calendar-form {
    background-color: #231F20;
    padding: 8rem;
    display: flex;
    background-image: url(https://industry.asianhhm.com/images/editorial-calendar-bg.svg);
    background-size: contain;
    background-repeat: no-repeat;
    background-position: left;
}
h1 {
    color: #fff !important;
    font-size: 2.2rem;
    font-family: "Lustria", serif;
    margin-top: 2rem;
    display: inline-block;
}
.ahhm-editorial-calendar .editorial-calendar-form .download-form {
    flex-grow: 1;
    margin-left: 0;
}
.download-form {
    padding: 3rem;
    flex-basis: 0;
    flex-grow: 1;
    background-color: #3c3438;
    margin-left: 5rem;
}
input[type="text"],
input[type="email"],
input[type="tel"],
textarea {
    border:1px solid #686567 !important;
    background-color:#3c3438 !important;
    padding:20px !important;
    color:#fff !important;
}
::placeholder{
    color:#999 !important;
}
select:required:invalid {
    border:1px solid #686567 !important;
    color:#999 !important;
    background-color:#3c3438 !important;
    padding-left: 20px;;
}



</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="login_form_wrapper">
<div class="container">

<div class="row">

    <!-- // RIGHT SECTION --> 

    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

    <div class="row">

<div class="col-12 ahhm-editorial-calendar">
<div class="row">

<div class="col-12">
<?php if(Session('status') == 'true'): ?> 

<h2 style="color: green;" align="center">Thank you! Your subscription was successful.</h2>



<?php endif; ?>
<div class="editorial-calendar-form">
<div class="row">
<div class="col-md-7">
<div class="text-center mt-5">
    <h1  class="text-white" style="color:#fff !important;">PLEASE LOGIN TO ACCESS MAGAZINE ARTICLES <br>(OR)<br> E-BOOK</h1> 
</div>
</div>



<div class="col-md-5">

<form action="" method="post" id="form-validation">
    
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="type" value="">
                          
                            <input type="hidden" name="client_subject"
                                value="Thank You for Registration">
                            <input type="hidden" name="admin_subject"
                                value="Thank You for Registration">
                                <input type="hidden" name="from" value="ourservices-ebook">
                            <input type="hidden" name="thank_message"
                                value="You will receive a welcome email along with download link to your registered email-id.">
                            <div class="download-form ">
                            <h3 class="text-center" style="font-size:18px;color:#fff !important;">Access Latest E-Book / Magazine Articles</h3>
                                    <div class="input-group mb-3 mt-3 ">
                                        <input class="form-control bg-color" id="firstName" name="firstname"
                                            placeholder="First Name *" required="" value="" type="text">
                                        <span class="help-block"></span>
                                    </div>
                              
                                    <div class="input-group mb-3 mt-3">
                                        <input required="" class="form-control bg-color" id="lastName" name="lastname"
                                            placeholder="Last Name *" value="" type="text">
                                        <span class="help-block"></span>
                                    </div>
                              
                                
                                    <div class="input-group mb-3 mt-3 ">
                                        <input class="form-control bg-color" id="email" name="email" placeholder="Business e-Mail *"
                                            required="" type="email">
                                        <span class="help-block"></span>
                                    </div>
                              
                            
                               
                                    <div class="input-group mb-3 mt-3">
                                        <input required="" class="form-control bg-color" id="company" name="company"
                                            placeholder="Company *" value="" type="text">
                                        <span class="help-block"></span>
                                    </div>
                           
                               <?php if(session('latestarticle')): ?>
             <input type="hidden" name="previous_url" value="https://www.asianhhm.com/<?php echo e(session('category')); ?>/<?php echo e(session('url')); ?>">
            <?php elseif(session('statusebook')): ?>
                <input type="hidden" name="previous_url" value="https://www.asianhhm.com/<?php echo e(session('url')); ?>/<?php echo e(session('ebookid')); ?>">
                <input type="hidden" name="ebookid" value="<?php echo e(session('ebookid')); ?>">
             <?php elseif(session('latestebook')): ?>
                <input type="hidden" name="previous_url" value="https://www.asianhhm.com/<?php echo e(session('url')); ?>">
            <?php else: ?>
                <input type="hidden" name="previous_url" value="<?php echo e(url()->previous()); ?>">
            <?php endif; ?>

            
                             
                                        <div class="input-group mb-3 mt-3  ">
                                            <select required="" class="form-control bg-color arrow" id="country" name="country"
                                                placeholder="Country *" value="">
                                                <option value="">Country *</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American Samoa</option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla</option>
                                                <option value="Antarctica">Antarctica</option>
                                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option value="Argentina">Argentina</option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia</option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan</option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Barbados">Barbados</option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option value="Bolivia">Bolivia</option>
                                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option value="Botswana">Botswana</option>
                                                <option value="Bouvet Island">Bouvet Island</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="British Indian Ocean Territory">British Indian Ocean
                                                    Territory</option>
                                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option value="Bulgaria">Bulgaria</option>
                                                <option value="Burkina Faso">Burkina Faso</option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia</option>
                                                <option value="Cameroon">Cameroon</option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde</option>
                                                <option value="Cayman Islands">Cayman Islands</option>
                                                <option value="Central African Republic">Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">Christmas Island</option>
                                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option value="Cook Islands">Cook Islands</option>
                                                <option value="Costa Rica">Costa Rica</option>
                                                <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech Republic</option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti</option>
                                                <option value="Dominica">Dominica</option>
                                                <option value="Dominican Republic">Dominican Republic</option>
                                                <option value="East Timor">East Timor</option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El Salvador</option>
                                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia</option>
                                                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe Islands</option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="France, Metropolitan">France, Metropolitan</option>
                                                <option value="French Guiana">French Guiana</option>
                                                <option value="French Polynesia">French Polynesia</option>
                                                <option value="French Southern Territories">French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar</option>
                                                <option value="Guernsey">Guernsey</option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland</option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala</option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands
                                                </option>
                                                <option value="Honduras">Honduras</option>
                                                <option value="Hong Kong">Hong Kong</option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Isle of Man">Isle of Man</option>
                                                <option value="Indonesia">Indonesia</option>
                                                <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Ivory Coast">Ivory Coast</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan</option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati</option>
                                                <option value="Korea, Democratic People's Republic of">Korea, Democratic
                                                    People's Republic of</option>
                                                <option value="Korea, Republic of">Korea, Republic of</option>
                                                <option value="Kosovo">Kosovo</option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option value="Lao People's Democratic Republic">Lao People's Democratic
                                                    Republic</option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                <option value="Liechtenstein">Liechtenstein</option>
                                                <option value="Lithuania">Lithuania</option>
                                                <option value="Luxembourg">Luxembourg</option>
                                                <option value="Macau">Macau</option>
                                                <option value="Macedonia">Macedonia</option>
                                                <option value="Madagascar">Madagascar</option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia</option>
                                                <option value="Maldives">Maldives</option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">Marshall Islands</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mauritania">Mauritania</option>
                                                <option value="Mauritius">Mauritius</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option value="Micronesia, Federated States of">Micronesia, Federated
                                                    States of</option>
                                                <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia</option>
                                                <option value="Montenegro">Montenegro</option>
                                                <option value="Montserrat">Montserrat</option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique</option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">Netherlands</option>
                                                <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                <option value="New Caledonia">New Caledonia</option>
                                                <option value="New Zealand">New Zealand</option>
                                                <option value="Nicaragua">Nicaragua</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk Island</option>
                                                <option value="Northern Mariana Islands">Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Palau">Palau</option>
                                                <option value="Palestine">Palestine</option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua New Guinea</option>
                                                <option value="Paraguay">Paraguay</option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">Philippines</option>
                                                <option value="Pitcairn">Pitcairn</option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal</option>
                                                <option value="Puerto Rico">Puerto Rico</option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Reunion">Reunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">Russian Federation</option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option value="Saint Lucia">Saint Lucia</option>
                                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the
                                                    Grenadines</option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino</option>
                                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option value="Saudi Arabia">Saudi Arabia</option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles</option>
                                                <option value="Sierra Leone">Sierra Leone</option>
                                                <option value="Singapore">Singapore</option>
                                                <option value="Slovakia">Slovakia</option>
                                                <option value="Slovenia">Slovenia</option>
                                                <option value="Solomon Islands">Solomon Islands</option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South Africa</option>
                                                <option value="South Georgia South Sandwich Islands">South Georgia South
                                                    Sandwich Islands</option>
                                                <option value="South Sudan">South Sudan</option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="St. Helena">St. Helena</option>
                                                <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname</option>
                                                <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen
                                                    Islands</option>
                                                <option value="Swaziland">Swaziland</option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">Switzerland</option>
                                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option value="Taiwan">Taiwan</option>
                                                <option value="Tajikistan">Tajikistan</option>
                                                <option value="Tanzania, United Republic of">Tanzania, United Republic
                                                    of</option>
                                                <option value="Thailand">Thailand</option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">Turkmenistan</option>
                                                <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">United Arab Emirates</option>
                                                <option value="United Kingdom">United Kingdom</option>
                                                <option value="United States">United States</option>
                                                <option value="United States minor outlying islands">United States minor
                                                    outlying islands</option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan</option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option value="Vatican City State">Vatican City State</option>
                                                <option value="Venezuela">Venezuela</option>
                                                <option value="Vietnam">Vietnam</option>
                                                <option value="Virgin Islands (British)">Virgin Islands (British)
                                                </option>
                                                <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                                <option value="Wallis and Futuna Islands">Wallis and Futuna Islands
                                                </option>
                                                <option value="Western Sahara">Western Sahara</option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zaire">Zaire</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                            <span class="help-block"></span>
                                        </div>
                                        <span class="help-block"></span>
                                  

  <div class="" align="center">
<button type="submit" name="submit" id="checkBtn1"  style="padding:10px 20px; background-color:#ed1a3b; color:#fff; font-size: 12px;"
class="btn btn-sm btn-danger w-100"><b>SUBMIT</b></button>
</div>
</div>
</form>
</div>

</div>




</div>

</div>

</div>  

</div>

</div>            

    </div>

    <!-- // RIGHT SECTION // --> 






</div>



</div>
		
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('../layouts/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/pharmafocusasia/public_html/resources/views/forms/login.blade.php ENDPATH**/ ?>