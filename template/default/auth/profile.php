<?php
$page_title = "Profile";
 include 'includes/header.php';?>

        <script src="<?=domain;?>/app/others/js/angularjs/registration.js"></script>

    <!-- BEGIN: Content-->
    <div class="app-content content" ng-controller="RegisterationController" ng-cloak>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php include 'includes/breadcrumb.php';?>

            <h3 class="content-header-title mb-0">Profile</h3>
          </div>
          
          <div class="content-header-right col-md-6 col-12">
            <div style="display: inline;" class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
                      <a class="btn btn-xs btn-outline-primary" href="javascript:void(0);" 
                      data-toggle="modal"
                       data-target="#upload_company_supporting_document" >+<i class="ft-file"></i>Upload</a>
                      <a ng-click="$list.attempt_request_for_review();" class="btn btn-outline-primary" href="javascript:void(0);">Request Review</a>

                    <?php if ($this->admin()):?>

                                    <?php if (!$auth->document_is_approved()):?>
                                      <a  class="btn btn-outline-primary"  href="javascript:void;"  onclick="$confirm_dialog = 
                                        new ConfirmationDialog('<?=domain;?>/admin/approve-user-document/<?=$auth->id;?>')">
                                                <span type='span' class='label label-xs label-primary'>Approve</span>
                                              </a>
                                    <?php endif;?>


                                    <?php if (!$auth->document_is_declined()):?>
                                      <a  class="btn btn-outline-primary"  href="javascript:void;"  onclick="$confirm_dialog = 
                                        new ConfirmationDialog('<?=domain;?>/admin/decline-user-document/<?=$auth->id;?>')">
                                                <span type='span' class='label label-xs label-primary'>Decline</span>
                                              </a>
                                    <?php endif;?>


                    <?php endif ;?>
                    </div>

          </div>
        </div>
        <div class="content-body">

      <section id="video-gallery" class="card">
        <div class="card-header">
          <h4 class="card-title">Profile</h4>
    
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
            </div>
        </div>

          <style>
            .full_pro_pix{
              width: 120px;
              height: 120px;
              object-fit: cover;
              border-radius: 100%;
              border: 1px solid #cc444433;
            }
          </style>


         <div class="card-content">
            <div class="card-body row">
              <div class="col-md-4" style="margin-bottom: 20px;border: 1px solid #14181f42;padding: 19px;">
                  <form class="form-horizontal ajax_form" 
                  id="registration_form" method="post" enctype="multipart/form-data" action="<?=domain;?>/user-profile/update_profile_picture">
                    <div class="user-profile-image" align="center" style="">
                      <img id="myImage" src="<?=domain;?>/<?=$auth->profilepic;?>" alt="your-image" class="full_pro_pix" />
                      <input type='file' name="profile_pix" onchange="form.submit();" id="uploadImage" style="display:none ;" />
                      <h4><?=ucfirst($auth->username);?></h4>
                      <h4><?=ucfirst($auth->fullname);?></h4>
                      <!-- <?=$auth->activeStatus;?> -->
                      <?=$auth->DocumentApproval;?>
                      <label for="uploadImage" class="btn btn-secondary " style=""> Change Picture</label>
                      <span class="label label-primary">
                          <!-- <?=$auth->subscription->package_type;?> -->
                      </span>
                      <br>
                      <!-- <span class="text-danger">*click update profile to apply change</span> -->
                    </div>
                  </form>
              </div>

              <div class="col-md-8" style="margin-bottom: 20px;border: 1px solid #14181f42;padding: 19px;">

                  <div class=" card">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" href="#collapse1">Profile</a>
                        </h4>
                      </div>
                      <div id="collapse1" class=" collapse ">
                        <div class="card-body table-bordered">
                              <form id="profile_form"
                              class="ajax_form" 
                              action="<?=domain;?>/user-profile/update_profile" method="post">
                                <div class="form-group">
                                  <label for="username" class="pull-left">Username *</label>
                                    <input type="text"  name="username" disabled="" value="<?=$auth->username;?>" id="username" class="form-control" value="">
                                </div>

                                <div class="form-group">
                                      <label for="fullname" class="pull-left">Full Name *</label>
                                      <input type="text" name="fullname"  value="<?=$auth->fullname;?>" id="fullname" class="form-control">
                                </div>


                              <div class="form-group">
                                  <label for="email" class="pull-left">Email Address<sup>*</sup></label>
                                  <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                      <span class="input-group-btn input-group-prepend"></span>
                                      <input id="tch3" name="email"   value="<?=$auth->email;?>"
                                        data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control">
                                     <!--  <span class="input-group-btn input-group-append">
                                          <button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button">Require Verification</button>
                                      </span> -->
                                  </div> 
                              </div>

                              
                              <div class="form-group">
                                  <label for="phone" class="pull-left">Phone<sup>*</sup></label>
                                  <div class="input-group bootstrap-touchspin bootstrap-touchspin-injected">
                                      <span class="input-group-btn input-group-prepend"></span>
                                      <span class="input-group-btn input-group-append">
                                          <button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button">+855</button>
                                      </span>
                                      <input id="tch3" minlength="10" maxlength="10"  placeholder="8123546574 (Leave out +855)" name="phone"   value="<?=$this->auth()->phone;?>"
                                        data-bts-button-down-class="btn btn-secondary btn-outline" data-bts-button-up-class="btn btn-secondary btn-outline" class="form-control">
                                    <!--   <span class="input-group-btn input-group-append">
                                          <button class="btn btn-secondary btn-outline bootstrap-touchspin-up" type="button">Require Verification</button>
                                      </span> -->
                                  </div> 
                              </div>                                        
                                                
                          

                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                          <label>Country</label>
                                          <select required="" 
                                          ng-model="$world.$country" ng-change="$world.fetch_states();"
                                           class="form-control" name="country">
                                            <option selected="">Select Country</option>
                                            <option 

                                             ng-repeat="($index, $country) in $world.$countries" value="{{$country.id}}">
                                           {{$country.name}}
                                            </option>

                                          </select>
                                                      <span class="text-danger"><?=@$this->inputError('country');?></span>
                                        </fieldset>

                                      
                                        <fieldset class="form-group position-relative has-icon-left mb-1">
                                          <label>Province/State</label>
                                          <select required="" 
                                          ng-model="$world.$state" ng-change="$world.fetch_cities();"
                                          class="form-control" name="state">
                                            <option>Select State</option>
                                            <option ng-repeat="($index, $state) in $world.$states" value="{{$state.id}}">{{$state.name}}</option>

                                          </select>

                                                      <span class="text-danger"><?=@$this->inputError('state');?></span>
                                        </fieldset>




                                        <div class="form-group">
                                              <label for="birthdate" class="pull-left">Date of Birth *</label>
                                              <input required="" type="date" name="birthdate"  value="<?=$auth->birthdate;?>" id="birthdate" class="form-control">
                                        </div>

                                        <div class="form-group">
                                              <label class="pull-left">Gender *</label>
                                              <select required="" class="form-control" name="gender" required="">
                                                <option>Select </option>
                                                <?php foreach (User::$genders as $key => $value) :?>
                                                  <option <?=($auth->gender==$value)?'selected':'';?>
                                                   value="<?=$value;?>"><?=ucfirst($value);?> </option>
                                                <?php endforeach;?>


                                              </select>

                                        </div>

                                        <div class="form-group">
                                              <label for="address" class="pull-left">Address*</label>
                                              <textarea class="form-control" rows="3" name="address" required=""><?=$auth->address;?></textarea>
                                        </div>


                                <div class="form-group">

                                      <button type="submit" class="btn btn-secondary btn-block btn-flat">Update Profile</button>

                                </div>
                              </form>
                             
                          
                        </div>
                      </div>
                  </div>

                  
                  <div class=" card">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" href="#bank_details">Bank Details</a>
                        </h4>
                      </div>
                      <div id="bank_details" class=" collapse">
                        <div class="card-body table-bordered">
                          <form id="bank_form"
                          class="ajax_form" 
                          action="<?=domain;?>/user-profile/update_bank_info" method="post">

                                  <div class="form-group">
                                      <label for="bank_name" class="pull-left">Bank Name <sup>*</sup></label>
                                      <input type="" name="bank_name"  value="<?=$auth->bank_name;?>" id="bank_name" class="form-control" >
                                  </div>

                                
                              
                              <div class="form-group">
                                 <label for="bank_account_name" class="pull-left"> Account Name<sup></sup></label>
                                  <input type="bank_account_name" name="bank_account_name"  value="<?=$auth->bank_account_name;?>" id="bank_account_name" class="form-control" >
                              </div>

                              
                              

                              
                              <div class="form-group">
                                 <label for="bank_account_number" class="pull-left"> Account Number <sup></sup></label>
                                  <input type="bank_account_number" name="bank_account_number"  value="<?=$auth->bank_account_number;?>" id="bank_account_number" class="form-control" >
                              </div>








                                <div class="form-group">
                                      <button type="submit" class="btn btn-secondary btn-block btn-flat">Update</button>
                                </div>
                          </form> 
                          
                        </div>
                      </div>
                  </div>                          




                                                    <!-- The Modal -->
                  <div class="modal" id="upload_company_supporting_document">
                    <div class="modal-dialog modal-lg" >
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                          <h4 class="modal-title">Documents</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>



                        <!-- Modal body -->
                          <form id="document_form" data-function="refresh_page"  class="col-md-12 ajax_form" enctype="multipart/form-data" 
                          action="<?=domain;?>/user-profile/upload_supporting_document" method="post" >  
                            <div class="modal-body">
                              <style>
                                td{padding:0px !important;}
                              </style>



                                                <button type="button" class="btn btn-secondary float-right btn-sm" 
                                                ng-click="$list.add_component();">+Add Document</button>
                                                  <br>
                                                  <i class="card-text"> *All documents will be verified.</i>
                                                  <br>
                                                     <table class="table table-hover table-condensed">

                                                        <thead>
                                                          <tr>
                                                            <th>Label</th>
                                                            <th>Files</th>
                                                          </tr>
                                                        </thead>
                                                        <tbody>
                                                          <tr ng-repeat="(key, $hospital) in $list.$active_list">
                                                           <td>
                                                              <input 
                                                                  placeholder="Name" required="" 
                                                                 class="form-control" type=""  
                                                                  name="label[]"></td>

                                                            <td>

                                                                  <div
                                                                   class="input-group col-md-12">
                                                                       
                                                              <input 
                                                                  placeholder="Name" required="" 
                                                                 class="form-control" type="file" 
                                                                  name="files[]">                                        
                                                                        <span class="input-group-btn">
                                                                          <button ng-click="$list.delete_component($hospital);"
                                                                           class="btn btn-default" type="button">
                                                                              <span class="fa fa-times text-danger"></span>
                                                                          </button>
                                                                        </span>
                                                                  </div>  

                                                              </td>
                                                          </tr>
                                                        </tbody>
                                                      </table>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                      <button ng-hide="$list.$active_list.length==0" type="submit" class="btn btn-success" >Save</button>
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                            </div>
                          </form>  

                      </div>
                    </div>
                  </div>

                  <script>
                      refresh_page = function(){
                          angular.element($('#document_form')).scope().fetch_page_content();
                      }
                  </script>


                  
                  <div class=" card">
                      <div class="card-header">
                        <h4 class="card-title">
                          <a data-toggle="collapse" href="#documents">Documents</a>
                        <div style="display: inline;" class="btn-group float-right" role="group" aria-label="Button group with nested dropdown">
                                            <a class="btn btn-sm btn-outline-primary" href="javascript:void(0);" 
                                            data-toggle="modal"
                                             data-target="#upload_company_supporting_document" >+<i class="ft-file"></i>Upload</a>
                                            <a ng-click="$list.attempt_request_for_review();" class="btn btn-sm btn-outline-primary" href="javascript:void(0);">Request Review</a>

                                          <?php if ($this->admin()):?>

                                                          <?php if (!$auth->document_is_approved()):?>
                                                            <a  class="btn btn-sm btn-outline-primary"  href="javascript:void;"  onclick="$confirm_dialog = 
                                                              new ConfirmationDialog('<?=domain;?>/admin/approve-user-document/<?=$auth->id;?>')">
                                                                      <span type='span' class='label label-xs label-primary'>Approve</span>
                                                                    </a>
                                                          <?php endif;?>


                                                          <?php if (!$auth->document_is_declined()):?>
                                                            <a  class="btn btn-sm btn-outline-primary"  href="javascript:void;"  onclick="$confirm_dialog = 
                                                              new ConfirmationDialog('<?=domain;?>/admin/decline-user-document/<?=$auth->id;?>')">
                                                                      <span type='span' class='label label-xs label-primary'>Decline</span>
                                                                    </a>
                                                          <?php endif;?>


                                          <?php endif ;?>
                                          </div>

                        </h4>
                      </div>
                      <div id="documents" class=" collapse show">
                        <div class="card-body table-bordered">
                            <ul class="list-group list-group-flush">
                              <li ng-repeat="(key, $doc) in $list.$lists" class="list-group-item" style="text-transform: capitalize;">
                                <a href="javascript:void(0);" ng-click="$list.attempt_delete($doc, key);"
                                class="fa fa-trash text-danger float-right" style="font-size: 20px;"><i class=""></i></a>
                                <a target="_blank" href="<?=domain;?>/{{$doc.files}}"><b>{{$doc.label}}</b></a>
                              </li>
                            
                            </ul>

                          
                        </div>
                      </div>
                  </div>                          

              </div>
            </div>
        </div>
      </section>




<!-- 
      <div class=" card">
          <div class="card-header">
            <h4 class="card-title">
              <a data-toggle="collapse" href="#collapse1">Collapsible panel</a>
            </h4>
          </div>
          <div id="collapse1" class=" collapse">
            <div class="card-body">Panel Body</div>
          </div>
      </div> -->

    <!--   <section id="video-gallery" class="card">
        <div class="card-header">
          <h4 class="card-title">Profile</h4>
          <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
              <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                </ul>
            </div>
        </div>
      </section> -->


        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include 'includes/footer.php';?>
