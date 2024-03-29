<?php
$page_title = "Settings";
 include 'includes/header.php';?>

<script type="text/javascript" src="<?=$this_folder;?>/angularjs/settings.js"></script>
    <script src="<?=asset;?>/angulars/admin_settings.js"></script>



    <!-- BEGIN: Content-->
    <div ng-controller="Settings" ng-cloak class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-6 col-12 mb-2">
            <?php include 'includes/breadcrumb.php';?>

            <h3 class="content-header-title mb-0">Settings</h3>
          </div>
          
         <!--  <div class="content-header-right col-md-6 col-12">
            <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
              <div class="btn-group" role="group">
                <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a><a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a></div>
              </div><a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a><a class="btn btn-outline-primary" href="timeline-center.html"><i class="ft-pie-chart"></i></a>
            </div>
          </div> -->
        </div>
        <div class="content-body">

                 <div class="row" >
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#demo">
                                <a href="javascript:void;" class="card-title">Settings</a>
                                 <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                       </div>

                            </div>
                            <div class="card-body row collapse" id="demo">

                                <div ng-repeat="($key, $setting) in $site_settings" class="form-group col-md-6">
                                    <span class="badge badge-secondary">{{$index+1}}</span>
                                    <label>{{$key |replace: '_':' '}}</label>
                                    <input type="" placeholder="{{$key}}" ng-model="$site_settings[$key]" class="form-control">
                                </div>                              



                              <form action="<?=domain;?>/settings/update_site_settings" method="post" class="ajax_form" id="site_settings_form">

                                <textarea style="display: none;" name="content">{{$site_settings}}</textarea>

                                              
                                <div class="text-center col-12">
                                    <button ng-show="$site_settings.length != 0" class="btn btn-success" type="submit">Update 
                                        </button>
                                </div>
                              </form>

                             </div>

                        </div>
                    </div>
                </div>

              
                 <div class="row" >
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#commission_settings">
                                <a href="javascript:void;" class="card-title">Commission Settings</a>
                                 <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                       </div>

                            </div>
                            <div class="card-body row collapse" id="commission_settings">


                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>SN</th>
                                    <th>Commission</th>
                                    <th>Order (%)</th>
                                   <!--  <th>Packages (%)</th>
                                    <th>Disagio (%)</th> -->
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr ng-repeat="(key, $commission_setting) in $commission_settings">
                                    <td>{{$index + 1}}</td>
                                    <td>{{$commission_setting.level}}</td>
                                    <td contenteditable="true" ng-model="$commission_setting.on_order">{{$commission_setting.on_order}}</td>
<!--                                     <td contenteditable="true" ng-model="$commission_setting.packages">{{$commission_setting.packages}}</td>
                                    <td contenteditable="true" ng-model="$commission_setting.disagio">{{$commission_setting.disagio}}</td>
 -->                                  </tr>
                                
                                </tbody>
                              </table>

                                
                              <form action="<?=domain;?>/settings/update_commission_settings" method="post" class="ajax_form" id="commission_settings_form">

                                <textarea style="display: none;" name="content">{{$commission_settings}}</textarea>

                                <div class="text-center col-12">
                                    <button ng-show="$commission_settings.length != 0" class="btn btn-success" type="submit">Update </button>
                                </div>
                              </form>

                             </div>

                        </div>
                    </div>
                </div>



              <!-- 
                 <div class="row" >
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header"  data-toggle="collapse" data-target="#pools_settings">
                                <a href="javascript:void;" class="card-title">Pools Settings</a>
                                 <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                       </div>

                            </div>
                            <div class="card-body row collapse" id="pools_settings">
                              
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>SN</th>
                                    <th>Level</th>
                                    <th>Min Merchants </th>
                                    <th>Disagio (%)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr ng-repeat="(key, $pools_setting) in $pools_settings">
                                    <td>{{$index + 1}}</td>
                                    <td>{{$pools_setting.level}}</td>
                                    <td contenteditable="true" ng-model="$pools_setting.min_merchant_recruitment">    
                                        {{$pools_setting.min_merchant_recruitment}}
                                    </td>

                                    <td contenteditable="true" ng-model="$pools_setting.percent_disagio">{{$pools_setting.percent_disagio}}</td>
                                  </tr>
                                
                                </tbody>
                              </table>

                                
                              <form action="<?=domain;?>/settings/update_pools_settings" method="post" class="ajax_form" id="commission_settings_form">

                                <textarea style="display: none;" name="content">{{$pools_settings}}</textarea>

                                <div class="text-center col-12">
                                    <button ng-show="$pools_settings.length != 0" class="btn btn-success" type="submit">Update </button>
                                </div>
                              </form>

                             </div>

                        </div>
                    </div>
                </div> -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

<?php include 'includes/footer.php';?>
