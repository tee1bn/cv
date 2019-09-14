<?php
$page_title = "Register";
include 'includes/auth_header.php';?>








				<h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Create Account</span></h6>
				</div>
				<div class="card-content">	
					<div class="card-body" style="padding-top: 0px;">
                <form data-toggle="validator"  class="form-horizontal form-simple"
                 id="loginform" action="<?=domain;?>/register/register" method="post">


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
									<input type="" required="" class="form-control form-control-lg" value="<?=@Input::old('firstname');?>" name="firstname" placeholder="First Name">
	                        		<span class="text-danger"><?=@$this->inputError('firstname');?></span>
									<div class="form-control-position">
									    <i class="ft-user"></i>
									</div>
								</fieldset>



								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
	                     		   <input type="" required="" class="form-control form-control-lg" value="<?=@Input::old('lastname');?>" name="lastname" placeholder="Last Name">
	                       			<span class="text-danger"><?=@$this->inputError('lastname');?></span>
									<div class="form-control-position">
									    <i class="ft-user"></i>
									</div>
								</fieldset>

							</div>




							<div class="row">

								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
	                     		    <input type="email" required="" class="form-control form-control-lg" value="<?=@Input::old('email');?>" name="email" placeholder="Email">
	                        		<span class="text-danger"><?=@$this->inputError('email');?></span>
									<div class="form-control-position">
									    <i class="ft-mail"></i>
									</div>
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
	                     		    <input type="text" required="" class="form-control form-control-lg" <?=$readonly;?>
	                     		    value="<?=$introduced_by;?>" name="introduced_by" placeholder="Sponsor">
	                        		<span class="text-danger"><?=@$this->inputError('introduced_by');?></span>
									<div class="form-control-position">
									    <i class="ft-user"></i>
									</div>
								</fieldset>
							


								<fieldset class="form-group col-md-6 position-relative has-icon-left">
									<input type="password" name="password" class="form-control form-control-lg" placeholder="Enter Password" required>
									<div class="form-control-position">
									    <i class="fa fa-key"></i>
									</div>
								</fieldset>

						
							


								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<select class="form-control form-control-lg" name="country">
										<option>Select Country</option>

										<?php foreach (Config::countries() as $key => $country) :?>

											<option value="<?=$country;?>"><?=$country;?></option>

										<?php endforeach;?>

									</select>

	                        		<span class="text-danger"><?=@$this->inputError('country');?></span>
									<div class="form-control-position">
									    <i class="ft-globe"></i>
									</div>
								</fieldset>

							

								<?php 

								$loko = Config::cities('cambodia') ;

								// print_r($loko);


								;?>
								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<select class="form-control form-control-lg" name="city">
										<option>Select City</option>

										<?php foreach (Config::cities('cambodia') as $key => $city) :?>

											<option value="<?=$city;?>"><?=$city;?></option>

										<?php endforeach;?>

									</select>

	                        		<span class="text-danger"><?=@$this->inputError('city');?></span>
									<div class="form-control-position">
									    <i class="ft-globe"></i>
									</div>
								</fieldset>

								<fieldset class="form-group col-md-6 position-relative has-icon-left mb-1">
									<select class="form-control form-control-lg" name="province">
										<option>Select Province</option>

										<?php foreach (Config::provinces('cambodia') as $key => $province) :?>

											<option value="<?=$province;?>"><?=$province;?></option>

										<?php endforeach;?>

									</select>

	                        		<span class="text-danger"><?=@$this->inputError('province');?></span>
									<div class="form-control-position">
									    <i class="ft-globe"></i>
									</div>
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
			
<?php include 'includes/auth_footer.php';