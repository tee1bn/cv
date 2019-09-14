
<!DOCTYPE html>
<html ng-app="app" class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="<?=@$page_description;?>">
    <meta name="keywords" content="<?=@$page_keywords;?>">
    <meta name="author" content="<?=@$page_author;?>">
    <title><?=@$page_title;?> | <?=project_name;?></title>
    <link rel="apple-touch-icon" href="<?=$logo;?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=$logo;?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/extensions/unslider.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/fonts/meteocons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/vendors/css/charts/morris.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/menu/menu-types/horizontal-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?=$asset;?>/css/pages/timeline.min.css">
    <!-- END: Page CSS-->

    <link rel="stylesheet" type="text/css" href="<?=asset;?>/fonts/feather/style.min.css">

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="horizontal-layout horizontal-menu 2-columns  " data-open="click" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-static-top navbar-dark bg-gradient-x-grey-blue navbar-border navbar-brand-center">
      <div class="navbar-wrapper">
        <div class="navbar-header">
          <ul class="nav navbar-nav flex-row">
            <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
            <li class="nav-item"><a class="navbar-brand" href="index-2.html"><img class="brand-logo" alt="stack admin logo" src="<?=$asset;?>/images/logo/stack-logo-light.png">
                <h2 class="brand-text">Stack</h2></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>
        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
            </ul>

            <ul class="nav navbar-nav float-right">
            

              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-shopping-cart"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span><span class="notification-tag badge badge-danger float-right m-0">5 New</span></h6>
                  </li>
                  <li class="scrollable-container media-list"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">You have new order!</h6>
                          <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading red darken-1">99% Server load</h6>
                          <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                          <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Complete the task</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal"></i></div>
                        <div class="media-body">
                          <h6 class="media-heading">Generate monthly report</h6><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
              </li>
              <!-- 
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-mail"></i><span class="badge badge-pill badge-warning badge-up">3</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                  <li class="dropdown-menu-header">
                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Messages</span><span class="notification-tag badge badge-warning float-right m-0">4 New</span></h6>
                  </li>
                  <li class="scrollable-container media-list"><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Margaret Govan</h6>
                          <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Bret Lezama</h6>
                          <p class="notification-text font-small-3 text-muted">I have seen your work, there is</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Tuesday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Carie Berra</h6>
                          <p class="notification-text font-small-3 text-muted">Can we have call in this week ?</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Friday</time></small>
                        </div>
                      </div></a><a href="javascript:void(0)">
                      <div class="media">
                        <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="<?=$asset;?>/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                        <div class="media-body">
                          <h6 class="media-heading">Eric Alsobrook</h6>
                          <p class="notification-text font-small-3 text-muted">We have project party this saturday.</p><small>
                            <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">last month</time></small>
                        </div>
                      </div></a></li>
                  <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all messages</a></li>
                </ul>
              </li> -->


              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class=" ft ft-lock" style="position: relative;top: 5px;font-size: 20px;"></span></a>

                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="<?=domain;?>/register"><i class=""></i> Sign Up</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=domain;?>/login"><i class=""></i> Sign In</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- END: Header-->



    <!-- BEGIN: Main Menu-->
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal navbar-fixed navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
      <!-- Horizontal menu content-->
      <div class="navbar-container main-menu-content" data-menu="menu-container">
        <!-- include ../../../includes/mixins-->
        <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index-2.html" data-toggle="dropdown"><i class="ft-home"></i><span>Dashboard</span></a>
            <ul class="dropdown-menu">
              <li class="active" data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown">eCommerce</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown">Analytics</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="dashboard-fitness.html" data-toggle="dropdown">Fitness</a>
              </li>
            </ul>
          </li>
      
        </ul>
      </div>
      <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->

