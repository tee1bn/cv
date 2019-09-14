<?php include 'includes/header.php';?>



    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
          <?php //include 'includes/breadcrumb.php';?>

          <div class="row">

        <div class="col-12 d-flex align-items-center justify-content-center">

          <div class="col-md-7 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 px-2 py-2 m-0">
                  <div class="card-header border-0">
                    <div class="card-title text-center">
                      <img src="http://localhost/cv/template/default/app-assets/images/logo/nsw-t.png" style="height: 110px;" alt="branding logo">
                    </div>


                              

                    <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Log in</span></h6>
                  </div>
                  <div class="card-content">  
                    <div class="card-body" style="padding-top: 0px;">
                        <form data-toggle="validator" class="form-horizontal form-simple" id="loginform" action="http://localhost/cv/login/authenticate" method="post" novalidate="true">

                                  
                              
                        <fieldset class="form-group position-relative has-icon-left mb-1">
                          <input type="text" class="form-control form-control-lg" placeholder="Username or Email" name="user">
                          <div class="form-control-position">
                              <i class="ft-user"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">
                          <input type="password" class="form-control form-control-lg" name="password" placeholder="Enter Password" required="">
                          <div class="form-control-position">
                              <i class="fa fa-key"></i>
                          </div>
                        </fieldset>

                        <fieldset class="form-group position-relative has-icon-left">

                          <div class="g-recaptcha form-group" data-sitekey="6Lc1n60UAAAAAC-AqBtn5EgF7QreRh2sXm4R_GBy"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lc1n60UAAAAAC-AqBtn5EgF7QreRh2sXm4R_GBy&amp;co=aHR0cDovL2xvY2FsaG9zdDo4MA..&amp;hl=en&amp;v=v1566858990656&amp;size=normal&amp;cb=scejn11ptnn" width="304" height="78" role="presentation" name="a-ziz01h3wl4g" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>


                        </fieldset>



                        <button type="submit" class="btn btn-primary btn-lg btn-block disabled"><i class="ft-unlock"></i> Login</button>
                      </form>
                    </div>
                    <p class="text-center">Don't have an account ? <a href="http://localhost/cv/register" class="card-link">Register</a></p>
                    <p class="text-center"> <a href="http://localhost/cv/forgot-password" class="card-link"> Forgot Password ?</a></p>
                  </div>

                  
                </div>
              </div>



        </div>
        </div>


        </div>
      </div>
    </div>
    <!-- END: Content-->

    <?php //include 'includes/cutomiser.php';?>


<?php include 'includes/footer.php';?>