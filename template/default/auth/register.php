<?php
$page_title = "Register";
include 'includes/auth_header.php';?>







				<script src="<?=domain;?>/app/others/js/angularjs/registration.js"></script>


				<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Create Account</span></h6>
				</div>
				<div class="card-content" ng-controller="RegisterationController">	
					<div class="card-body" style="padding-top: 0px;">
                <form data-toggle="validator" data-function="complete_registration"  class="form-horizontal form-simple ajax_form"
                 id="registration_form" action="<?=domain;?>/register/register" method="post">


						<!-- 	<fieldset class="form-group position-relative has-icon-left mb-1">
                       			 <input type="" required="" 
                       			 	class="form-control form-control-lg" 
                       			 	value="<?=@Input::old('username');?>" name="username" placeholder="User Name">
                        			<span class="text-danger"><?=@$this->inputError('username');?></span>
								<div class="form-control-position">
								    <i class="ft-user"></i>
								</div>
							</fieldset> -->

							<div class="row">
								
								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>First Name</label>
									<input type="" required="" class="form-control form-control-lg" value="<?=@Input::old('firstname');?>" name="firstname" placeholder="First Name">
	                        		<span class="text-danger"><?=@$this->inputError('firstname');?></span>
								
								</fieldset>



								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>Last Name</label>
	                     		   <input type="" required="" class="form-control form-control-lg" value="<?=@Input::old('lastname');?>" name="lastname" placeholder="Last Name">
	                       			<span class="text-danger"><?=@$this->inputError('lastname');?></span>
								</fieldset>

							</div>




							<div class="row">

								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>Email</label>
	                     		    <input type="email" required="" class="form-control form-control-lg" value="<?=@Input::old('email');?>" name="email" placeholder="Email">
	                        		<span class="text-danger"><?=@$this->inputError('email');?></span>
								</fieldset>


								<?php

									if (isset($_COOKIE['referral'])) {
										$introduced_by = $_COOKIE['referral'];
										$readonly   ="readonly='readonly'";

									}else{

										$introduced_by = Input::old('introduced_by');
									}
								;?>
									



								<div class="form-group col-md-6">
									<label>Phone</label>
								    <div class="input-group">
								        <div class="input-group-btn" style="border: 1px solid #ccd6e6;">
								          <span class="btn btn-default" style="border: ;">
								            +885
								          </span>
								        </div>


								    <input type="" required="" class="form-control form-control-lg" value="<?=@Input::old('phone');?>" name="phone" 
								    maxlength="10" minlength="10" placeholder="Phone (8123546574)"
								    >
								</div>
								    <span class="text-danger"><?=@$this->inputError('phone');?></span>
								</div>
								


								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>Sponsor</label>
	                     		    <input type="text" required="" class="form-control form-control-lg" <?=$readonly;?>
	                     		    value="<?=$introduced_by;?>" name="introduced_by" placeholder="Sponsor">
	                        		<span class="text-danger"><?=@$this->inputError('introduced_by');?></span>
								</fieldset>
							


								<fieldset class="form-group col-md-6 position-relative has-icon-left">
									<label>Password</label>
									<input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
								</fieldset>

						
								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>Country</label>
									<select required="" 
									ng-model="$world.$country" ng-change="$world.fetch_states();"
									 class="form-control form-control-lg" name="country">
										<option selected="">Select Country</option>
										<option 
										 ng-repeat="($index, $country) in $world.$countries" value="{{$country.id}}">{{$country.name}}</option>

									</select>
	                        		<span class="text-danger"><?=@$this->inputError('country');?></span>
								</fieldset>

							
								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>State</label>
									<select required="" 
									ng-model="$world.$state" ng-change="$world.fetch_cities();"
									class="form-control form-control-lg" name="state">
										<option>Select State</option>
										<option ng-repeat="($index, $state) in $world.$states" value="{{$state.id}}">{{$state.name}}</option>

									</select>

	                        		<span class="text-danger"><?=@$this->inputError('state');?></span>
								</fieldset>

								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<label>City</label>
									<select 
									required="" 
									class="form-control form-control-lg" name="city">
										<option>Select City</option>

										<option ng-repeat="($index, $city) in $world.$cities" value="{{$city.id}}">{{$city.name}}</option>

									</select>

	                        		<span class="text-danger"><?=@$this->inputError('city');?></span>
								</fieldset>

							</div>


							<div class="row">
									


								<fieldset class="form-group col-md-6 position-relative has-icon-left">
									  <div class="g-recaptcha form-group" data-sitekey="<?=SiteSettings::site_settings()['google_re_captcha_site_key'];?>"></div>

								</fieldset>
							</div>




							<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Register</button>
						</form>
					</div>
					<p class="text-center">Already have an account ? <a href="<?=domain;?>/login" class="card-link">Login</a></p>
				</div>


	<script>

		complete_registration = function ($data){

			
			switch($data.status) {
			  case 1:
			    // code block
			        location.href = $base_url+ "/login";
			    break;
			 
			    
			  default:
			  	window.notify();
			    break;
			}


		}
		
	</script>

<?php include 'includes/auth_footer.php';