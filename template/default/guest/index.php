
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

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

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
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mega</a>
                <ul class="mega-dropdown-menu dropdown-menu row">
                  <li class="col-md-2 col-sm-6">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i> News</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img class="rounded img-fluid mb-1" src="<?=$asset;?>/images/slider/slider-2.png" alt="First slide"><a class="news-title mb-0 d-block" href="#">Poster Frame PSD</a>
                        <p class="news-content"><span class="font-small-2">January 26, 2016</span></p>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-3 col-sm-6">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-random"></i> Menu</h6>
                    <ul>
                      <li class="menu-list">
                        <ul>
                          <li><a class="dropdown-item" href="layout-fixed.html"><i class="ft-file"></i> Page layouts</a></li>
                          <li><a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color pallet</a></li>
                          <li><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/vertical-menu-template/layout-static.html"><i class="ft-edit"></i> Starter kit</a></li>
                          <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                          <li><a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="fa fa-life-ring"></i> Support center</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="col-md-3 col-sm-6">
                    <h6 class="dropdown-menu-header text-uppercase"><i class="fa fa-list-ul"></i> Accordion</h6>
                    <div class="mt-1" id="accordionWrap" role="tablist" aria-multiselectable="true">
                      <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                        <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" href="#accordionOne" aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                        <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true" data-parent="#accordionWrap">
                          <div class="card-content">
                            <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon. Jelly wafer jelly beans. Caramels chocolate cake liquorice cake wafer jelly beans croissant apple pie.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                        <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" data-parent="#accordionWrap">
                          <div class="card-content">
                            <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu dessert pie. Tiramisu macaroon muffin jelly marshmallow cake. Pastry oat cake chupa chups.</p>
                          </div>
                        </div>
                        <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                        <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" data-parent="#accordionWrap">
                          <div class="card-content">
                            <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes lollipop macaroon. Cake dragée jujubes donut chocolate bar chocolate cake cupcake chocolate topping.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="col-md-4 col-sm-6">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope-o"></i> Contact Us</h6>
                    <form class="form form-horizontal">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputName1">Name</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                              <div class="form-control-position pl-1"><i class="fa fa-user-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                              <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                              <div class="form-control-position pl-1"><i class="fa fa-commenting-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-primary float-right" type="button"><i class="fa fa-paper-plane-o"></i> Send</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                <div class="search-input">
                  <input class="input" type="text" placeholder="Explore Stack...">
                </div>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">
              <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-gb"></i><span class="selected-language"></span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-gb"></i> English</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> Chinese</a><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a></div>
              </li>
              <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
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
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"><span class="avatar avatar-online"><img src="<?=$asset;?>/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span><span class="user-name">John Doe</span></a>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i> Chats</a>
                  <div class="dropdown-divider"></div><a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
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
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-monitor"></i><span>Templates</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vertical</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-modern-menu-template" data-toggle="dropdown">Modern Menu</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template" data-toggle="dropdown">Semi Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark" data-toggle="dropdown">Semi Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-nav-dark" data-toggle="dropdown">Nav Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-light" data-toggle="dropdown">Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-overlay-menu-template" data-toggle="dropdown">Overlay Menu</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Horizontal</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template" data-toggle="dropdown">Classic</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template-nav" data-toggle="dropdown">Nav Dark</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-layout"></i><span>Layouts</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-stack-2"></i>Page Layouts</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="horizontal-layout-1-column.html" data-toggle="dropdown">1 column</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Det. Sidebar</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sidebar.html" data-toggle="dropdown">Detached left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Detached sticky left sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sidebar.html" data-toggle="dropdown">Detached right sidebar</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Detached sticky right sidebar</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-static.html" data-toggle="dropdown">Static layout</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="layout-light.html" data-toggle="dropdown">Light layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="layout-dark.html" data-toggle="dropdown">Dark layout</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/" data-toggle="dropdown">Semi dark layout</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-navicon2"></i>Navbars</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="navbar-light.html" data-toggle="dropdown">Navbar Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-dark.html" data-toggle="dropdown">Navbar Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-semi-dark.html" data-toggle="dropdown">Navbar Semi Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-brand-center.html" data-toggle="dropdown">Brand Center</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/" data-toggle="dropdown">Fixed Top</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Hide on Scroll</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/" data-toggle="dropdown">Hide on Scroll Top</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/" data-toggle="dropdown">Hide on Scroll Bottom</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-components.html" data-toggle="dropdown">Navbar Components</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="navbar-styling.html" data-toggle="dropdown">Navbar Styling</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Vertical Nav</a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Navigation Types</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template" data-toggle="dropdown">Semi Light</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-semi-dark" data-toggle="dropdown">Semi Dark</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-nav-dark" data-toggle="dropdown">Nav Dark</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-menu-template-light" data-toggle="dropdown">Light</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/vertical-overlay-menu-template" data-toggle="dropdown">Overlay Menu</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Horizontal Nav</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template" data-toggle="dropdown">Left Icon Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-fixed.html" data-toggle="dropdown">Fixed Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-flipped.html" data-toggle="dropdown">Flipped Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-submenu-click.html" data-toggle="dropdown">Submenu on Click</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-submenu-hover.html" data-toggle="dropdown">Submenu on Hover</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-light.html" data-toggle="dropdown">Light Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-dark.html" data-toggle="dropdown">Dark Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-right-side-icons.html" data-toggle="dropdown">Right side icons</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-no-dropdown.html" data-toggle="dropdown">No Dropdown Arrow</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-disabled.html" data-toggle="dropdown">Disabled Navigation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-tags-pills.html" data-toggle="dropdown">Tags &amp; Pills</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="horizontal-nav-styling.html" data-toggle="dropdown">Navigation Styling</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-header"></i>Page Headers</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-basic.html" data-toggle="dropdown">Breadcrumbs basic</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-top.html" data-toggle="dropdown">Breadcrumbs top</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-bottom.html" data-toggle="dropdown">Breadcrumbs bottom</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-button.html" data-toggle="dropdown">Breadcrumbs with button</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-round-button.html" data-toggle="dropdown">Breadcrumbs with round button 2</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="headers-breadcrumbs-with-stats.html" data-toggle="dropdown">Breadcrumbs with stats</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-vertical_align_bottom"></i>Footers</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="footer-light.html" data-toggle="dropdown">Footer Light</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-dark.html" data-toggle="dropdown">Footer Dark</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-transparent.html" data-toggle="dropdown">Footer Transparent</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-fixed.html" data-toggle="dropdown">Footer Fixed</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="footer-components.html" data-toggle="dropdown">Footer Components</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-zap"></i><span>Starter kit</span></a>
            <ul class="dropdown-menu">
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/horizontal-layout-1-column.html" data-toggle="dropdown">1 column</a>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content Det. Sidebar</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sidebar.html" data-toggle="dropdown">Detached left sidebar</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-left-sticky-sidebar.html" data-toggle="dropdown">Detached sticky left sidebar</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sidebar.html" data-toggle="dropdown">Detached right sidebar</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-content-detached-right-sticky-sidebar.html" data-toggle="dropdown">Detached sticky right sidebar</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown-divider"></li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-fixed-navigation.html" data-toggle="dropdown">Fixed navigation</a>
              </li>
              <li class="dropdown-divider"></li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-fixed.html" data-toggle="dropdown">Fixed layout</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-boxed.html" data-toggle="dropdown">Boxed layout</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-static.html" data-toggle="dropdown">Static layout</a>
              </li>
              <li class="dropdown-divider"></li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-light.html" data-toggle="dropdown">Light layout</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-dark.html" data-toggle="dropdown">Dark layout</a>
              </li>
              <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/starter-kit/ltr/horizontal-menu-template-nav/layout-semi-dark.html" data-toggle="dropdown">Semi dark layout</a>
              </li>
            </ul>
          </li>
          <li class="dropdown mega-dropdown nav-item" data-menu="megamenu"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-box"></i><span>Apps</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="app-email.html"><i class="ft-mail"></i>Email Application</a>
                      </li>
                      <li><a class="dropdown-item" href="app-chat.html"><i class="ft-message-square"></i>Chat Application</a>
                      </li>
                      <li><a class="dropdown-item" href="app-todo.html"><i class="ft-check-square"></i>Todo Application</a>
                      </li>
                      <li><a class="dropdown-item" href="app-contacts.html"><i class="ft-users"></i>Contacts</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="project-summary.html"><i class="ft-airplay"></i>Project Summary</a>
                      </li>
                      <li><a class="dropdown-item" href="invoice-template.html"><i class="ft-printer"></i>Invoice Template</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-share"></i>Timelines</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="timeline-center.html"><i></i>Timelines Center</a>
                          </li>
                          <li><a class="dropdown-item" href="timeline-horizontal.html"><i></i>Timelines Horizontal</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-user"></i>Users</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i>Users Profile</a>
                          </li>
                          <li><a class="dropdown-item" href="user-cards.html"><i class="ft-user-plus"></i>Users Cards</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="ft-plus-square"></i>Calender</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="full-calender-basic.html"><i></i>Full Calender Basic</a>
                          </li>
                          <li><a class="dropdown-item" href="full-calender-events.html"><i></i>Full Calender Events</a>
                          </li>
                          <li><a class="dropdown-item" href="full-calender-advance.html"><i></i>Full Calender Advance</a>
                          </li>
                          <li><a class="dropdown-item" href="full-calender-extra.html"><i></i>Full Calender Extra</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-image"></i>Gallery</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="gallery-grid.html"><i></i>Gallery Grid</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-grid-with-desc.html"><i></i>Gallery Grid with Desc</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-masonry.html"><i></i>Masonry Gallery</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-masonry-with-desc.html"><i></i>Masonry Gallery with Desc</a>
                          </li>
                          <li><a class="dropdown-item" href="gallery-hover-effects.html"><i></i>Hover Effects</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-search"></i>Search</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="search-page.html"><i></i>Search Page</a>
                          </li>
                          <li><a class="dropdown-item" href="search-website.html"><i></i>Search Website</a>
                          </li>
                          <li><a class="dropdown-item" href="search-images.html"><i></i>Search Images</a>
                          </li>
                          <li><a class="dropdown-item" href="search-videos.html"><i></i>Search Videos</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-unlock"></i>Authentication</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="login-simple.html"><i></i>Login Simple</a>
                          </li>
                          <li><a class="dropdown-item" href="login-with-bg.html"><i></i>Login with Bg</a>
                          </li>
                          <li><a class="dropdown-item" href="login-with-bg-image.html"><i></i>Login with Bg Image</a>
                          </li>
                          <li><a class="dropdown-item" href="register-simple.html"><i></i>Register Simple</a>
                          </li>
                          <li><a class="dropdown-item" href="register-with-bg.html"><i></i>Register with Bg</a>
                          </li>
                          <li><a class="dropdown-item" href="register-with-bg-image.html"><i></i>Register with Bg Image</a>
                          </li>
                          <li><a class="dropdown-item" href="unlock-user.html"><i></i>Unlock User</a>
                          </li>
                          <li><a class="dropdown-item" href="recover-password.html"><i></i>Recover Password</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="ft-alert-triangle"></i>Error</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="error-400.html"><i></i>Error 400</a>
                          </li>
                          <li><a class="dropdown-item" href="error-401.html"><i></i>Error 401</a>
                          </li>
                          <li><a class="dropdown-item" href="error-403.html"><i></i>Error 403</a>
                          </li>
                          <li><a class="dropdown-item" href="error-404.html"><i></i>Error 404</a>
                          </li>
                          <li><a class="dropdown-item" href="error-500.html"><i></i>Error 500</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="ft-watch"></i>Coming Soon</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="coming-soon-flat.html"><i></i>Flat</a>
                          </li>
                          <li><a class="dropdown-item" href="coming-soon-bg-image.html"><i></i>Bg image</a>
                          </li>
                          <li><a class="dropdown-item" href="coming-soon-bg-video.html"><i></i>Bg video</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="under-maintenance.html"><i class="ft-cloud-off"></i>Maintenance</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-droplet"></i><span>UI</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Content</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle="dropdown">Grid</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle="dropdown">Typography</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle="dropdown">Text utilities</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle="dropdown">Syntax highlighter</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle="dropdown">Helper classes</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="card-bootstrap.html" data-toggle="dropdown">Bootstrap</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-headings.html" data-toggle="dropdown">Headings</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-options.html" data-toggle="dropdown">Options</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-actions.html" data-toggle="dropdown">Action</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-draggable.html" data-toggle="dropdown">Draggable</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Advance Cards</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="card-statistics.html" data-toggle="dropdown">Statistics</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-weather.html" data-toggle="dropdown">Weather</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-charts.html" data-toggle="dropdown">Charts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-maps.html" data-toggle="dropdown">Maps</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-social.html" data-toggle="dropdown">Social</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="card-ecommerce.html" data-toggle="dropdown">E-Commerce</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Color Palette</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="color-palette-primary.html" data-toggle="dropdown">Primary palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-danger.html" data-toggle="dropdown">Danger palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-success.html" data-toggle="dropdown">Success palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-warning.html" data-toggle="dropdown">Warning palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-info.html" data-toggle="dropdown">Info palette</a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-red.html" data-toggle="dropdown">Red palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-pink.html" data-toggle="dropdown">Pink palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-purple.html" data-toggle="dropdown">Purple palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-blue.html" data-toggle="dropdown">Blue palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-cyan.html" data-toggle="dropdown">Cyan palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-teal.html" data-toggle="dropdown">Teal palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-yellow.html" data-toggle="dropdown">Yellow palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-amber.html" data-toggle="dropdown">Amber palette</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="color-palette-blue-grey.html" data-toggle="dropdown">Blue Grey palette</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Icons</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="icons-feather.html" data-toggle="dropdown">Feather</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-font-awesome.html" data-toggle="dropdown">Font Awesome</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-simple-line-icons.html" data-toggle="dropdown">Simple Line Icons</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="icons-meteocons.html" data-toggle="dropdown">Meteocons</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-briefcase"></i><span>Components</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Bootstrap Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle="dropdown">Alerts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-callout.html" data-toggle="dropdown">Callout</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html" data-toggle="dropdown">Basic Buttons</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="component-buttons-extended.html" data-toggle="dropdown">Extended Buttons</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle="dropdown">Carousel</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle="dropdown">Collapse</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle="dropdown">Dropdowns</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle="dropdown">List Group</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle="dropdown">Modals</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle="dropdown">Pagination</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle="dropdown">Navs Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle="dropdown">Tabs Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle="dropdown">Pills Component</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle="dropdown">Tooltips</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle="dropdown">Popovers</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle="dropdown">Badges</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle="dropdown">Pill Badges</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle="dropdown">Progress</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle="dropdown">Media Objects</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-scrollable.html" data-toggle="dropdown">Scrollable</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-bs-spinner.html" data-toggle="dropdown">Spinner</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-bs-toast.html" data-toggle="dropdown">Toasts</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Extra Components</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="ex-component-sweet-alerts.html" data-toggle="dropdown">Sweet Alerts</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-ratings.html" data-toggle="dropdown">Ratings</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-toastr.html" data-toggle="dropdown">Toastr</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-noui-slider.html" data-toggle="dropdown">NoUI Slider</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-knob.html" data-toggle="dropdown">Knob</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-block-ui.html" data-toggle="dropdown">Block UI</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-date-time-picker.html" data-toggle="dropdown">DateTime Picker</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-file-uploader-dropzone.html" data-toggle="dropdown">File Uploader</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="ex-component-image-cropper.html" data-toggle="dropdown">Image Cropper</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="component-spinners.html" data-toggle="dropdown">Spinners</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Forms</a>
                <ul class="dropdown-menu">
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-wpforms"></i>Form Elements</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown">Form Inputs</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle="dropdown">Input Groups</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-input-grid.html" data-toggle="dropdown">Input Grid</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-extended-inputs.html" data-toggle="dropdown">Extended Inputs</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-checkboxes-radios.html" data-toggle="dropdown">Checkboxes &amp; Radios</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown">Switch</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-select2.html" data-toggle="dropdown">Select2</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-tags-input.html" data-toggle="dropdown">Tags Input</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown">Validation</a>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-wpforms"></i>Form Layouts</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="form-layout-basic.html" data-toggle="dropdown">Basic Forms</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-horizontal.html" data-toggle="dropdown">Horizontal Forms</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-hidden-labels.html" data-toggle="dropdown">Hidden Labels</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-form-actions.html" data-toggle="dropdown">Form Actions</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-bordered.html" data-toggle="dropdown">Bordered</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="form-layout-striped-rows.html" data-toggle="dropdown">Striped Rows</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown"><i class="icon-paste"></i>Form Wizard</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="form-repeater.html" data-toggle="dropdown"><i class="icon-paste"></i>Form Repeater</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-grid"></i><span>Tables</span></a>
            <ul class="dropdown-menu">
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-table2"></i>Bootstrap Tables</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="table-basic.html" data-toggle="dropdown">Basic Tables</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-border.html" data-toggle="dropdown">Table Border</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-sizing.html" data-toggle="dropdown">Table Sizing</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-styling.html" data-toggle="dropdown">Table Styling</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="table-components.html" data-toggle="dropdown">Table Components</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-th"></i>DataTables</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="dt-basic-initialization.html" data-toggle="dropdown">Basic Initialisation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-advanced-initialization.html" data-toggle="dropdown">Advanced initialisation</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-styling.html" data-toggle="dropdown">Styling</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-data-sources.html" data-toggle="dropdown">Data Sources</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-api.html" data-toggle="dropdown">API</a>
                  </li>
                </ul>
              </li>
              <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon-th-large"></i>DataTables Ext.</a>
                <ul class="dropdown-menu">
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-autofill.html" data-toggle="dropdown">AutoFill</a>
                  </li>
                  <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">Buttons</a>
                    <ul class="dropdown-menu">
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-basic.html" data-toggle="dropdown">Basic Buttons</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-html-5-data-export.html" data-toggle="dropdown">HTML 5 Data Export</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-flash-data-export.html" data-toggle="dropdown">Flash Data Export</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-column-visibility.html" data-toggle="dropdown">Column Visibility</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-print.html" data-toggle="dropdown">Print</a>
                      </li>
                      <li data-menu=""><a class="dropdown-item" href="dt-extensions-buttons-api.html" data-toggle="dropdown">API</a>
                      </li>
                    </ul>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-reorder.html" data-toggle="dropdown">Column Reorder</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-fixed-columns.html" data-toggle="dropdown">Fixed Columns</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-key-table.html" data-toggle="dropdown">Key Table</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-row-reorder.html" data-toggle="dropdown">Row Reorder</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-select.html" data-toggle="dropdown">Select</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-fix-header.html" data-toggle="dropdown">Fix Header</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-responsive.html" data-toggle="dropdown">Responsive</a>
                  </li>
                  <li data-menu=""><a class="dropdown-item" href="dt-extensions-column-visibility.html" data-toggle="dropdown">Column Visibility</a>
                  </li>
                </ul>
              </li>
              <li data-menu=""><a class="dropdown-item" href="table-jsgrid.html" data-toggle="dropdown"><i class="icon-table"></i>jsGrid</a>
              </li>
            </ul>
          </li>
          <li class="dropdown mega-dropdown nav-item" data-menu="megamenu"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="ft-bar-chart-2"></i><span>Charts &amp; Maps</span></a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-bubble_chart"></i>Echarts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="echarts-line-area-charts.html"><i></i>Line &amp; Area charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-bar-column-charts.html"><i></i>Bar &amp; Column charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-pie-doughnut-charts.html"><i></i>Pie &amp; Doughnut charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-scatter-charts.html"><i></i>Scatter charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-radar-chord-charts.html"><i></i>Radar &amp; Chord charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-funnel-gauges-charts.html"><i></i>Funnel &amp; Gauges charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-combination-charts.html"><i></i>Combination charts</a>
                          </li>
                          <li><a class="dropdown-item" href="echarts-advance-charts.html"><i></i>Advance charts</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-stats-dots"></i>Chartjs</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="chartjs-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-pie-doughnut-charts.html"><i></i>Pie &amp; Doughnut charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-scatter-charts.html"><i></i>Scatter charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-polar-radar-charts.html"><i></i>Polar &amp; Radar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartjs-advance-charts.html"><i></i>Advance charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="morris-charts.html"><i class="icon-graphic_eq"></i>Morris Charts</a>
                      </li>
                      <li><a class="dropdown-item" href="#"><i class="icon-pie-graph2"></i>Flot Charts</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="flot-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="flot-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="flot-pie-charts.html"><i></i>Pie charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i class="icon-stats-bars"></i>Chartist</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="chartist-line-charts.html"><i></i>Line charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartist-bar-charts.html"><i></i>Bar charts</a>
                          </li>
                          <li><a class="dropdown-item" href="chartist-pie-charts.html"><i></i>Pie charts</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3" data-mega-col="col-md-3">
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul class="mega-menu-sub">
                      <li><a class="dropdown-item" href="#"><i></i>Maps</a>
                        <ul class="mega-menu-sub">
                          <li><a class="dropdown-item" href="#"><i></i>google Maps</a>
                            <ul class="mega-menu-sub">
                              <li><a class="dropdown-item" href="gmaps-basic-maps.html"><i></i>Maps</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-services.html"><i></i>Services</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-overlays.html"><i></i>Overlays</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-routes.html"><i></i>Routes</a>
                              </li>
                              <li><a class="dropdown-item" href="gmaps-utils.html"><i></i>Utils</a>
                              </li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="vector-maps-jvector.html"><i></i>jVector Map</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /horizontal menu content-->
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Stats -->
<div class="row">
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-primary bg-darken-2">
                        <i class="icon-camera font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-primary white media-body">
                        <h5>Products</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-plus"></i> 28</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-danger bg-darken-2">
                        <i class="icon-user font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-danger white media-body">
                        <h5>New Users</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>1,238</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-warning bg-darken-2">
                        <i class="icon-basket-loaded font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-warning white media-body">
                        <h5>New Orders</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-down"></i> 4,658</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-12">
        <div class="card">
            <div class="card-content">
                <div class="media align-items-stretch">
                    <div class="p-2 text-center bg-success bg-darken-2">
                        <i class="icon-wallet font-large-2 white"></i>
                    </div>
                    <div class="p-2 bg-gradient-x-success white media-body">
                        <h5>Total Profit</h5>
                        <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i> 5.6 M</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Stats -->
<!--Product sale & buyers -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Products Sales</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="products-sales" class="height-300"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Buyers</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content px-1">
                <div id="recent-buyers" class="media-list height-300 position-relative">
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">$1,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span><span class="badge badge-warning ml-1">Decor</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">$2,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Appliances</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-busy"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Linda Olson <span class="font-medium-4 float-right pt-1">$1,112</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span> <span class="badge badge-success ml-1">Office</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-10.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Roy Clark <span class="font-medium-4 float-right pt-1">$2,815</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-warning">Decor</span> <span class="badge badge-danger ml-1">Appliances</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-online"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-11.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Kristopher Candy <span class="font-medium-4 float-right pt-1">$2,021</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-primary">Electronics</span><span class="badge badge-warning ml-1">Decor</span></p>
                        </div>
                    </a>
                    <a href="#" class="media border-0">
                        <div class="media-left pr-1">
                            <span class="avatar avatar-md avatar-away"><img class="media-object rounded-circle" src="<?=$asset;?>/images/portrait/small/avatar-s-12.png" alt="Generic placeholder image">
                            <i></i>
                            </span>
                        </div>
                        <div class="media-body w-100">
                            <h6 class="list-group-item-heading">Lawrence Fowler <span class="font-medium-4 float-right pt-1">$1,321</span></h6>
                            <p class="list-group-item-text mb-0"><span class="badge badge-danger">Appliances</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Product sale & buyers -->
<!--Recent Orders & Monthly Salse -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Recent Orders</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Total paid invoices 240, unpaid 150. <span class="float-right"><a href="project-summary.html" target="_blank">Invoice Summary <i class="ft-arrow-right"></i></a></span></p>
                </div>
                <div class="table-responsive">
                    <table id="recent-orders" class="table table-hover mb-0 ps-container ps-theme-default">
                        <thead>
                            <tr>
                                <th>SKU</th>
                                <th>Invoice#</th>
                                <th>Customer Name</th>
                                <th>Status</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-truncate">PO-10521</td>
                                <td class="text-truncate"><a href="#">INV-001001</a></td>
                                <td class="text-truncate">Elizabeth W.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 1200.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-532521</td>
                                <td class="text-truncate"><a href="#">INV-01112</a></td>
                                <td class="text-truncate">Doris R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">$ 5685.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-05521</td>
                                <td class="text-truncate"><a href="#">INV-001012</a></td>
                                <td class="text-truncate">Andrew D.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 152.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-15521</td>
                                <td class="text-truncate"><a href="#">INV-001401</a></td>
                                <td class="text-truncate">Megan S.</td>
                                <td class="text-truncate"><span class="badge badge-success">Paid</span></td>
                                <td class="text-truncate">$ 1450.00</td>
                            </tr>
                            <tr>
                                <td class="text-truncate">PO-32521</td>
                                <td class="text-truncate"><a href="#">INV-008101</a></td>
                                <td class="text-truncate">Walter R.</td>
                                <td class="text-truncate"><span class="badge badge-warning">Overdue</span></td>
                                <td class="text-truncate">$ 685.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-content">
                <div class="card-body sales-growth-chart">
                    <div id="monthly-sales" class="height-250"></div>
                </div>
            </div>
            <div class="card-footer">
                <div class="chart-title mb-1 text-center">
                    <h6>Total monthly Sales.</h6>
                </div>
                <div class="chart-stats text-center">
                    <a href="#" class="btn btn-sm btn-primary mr-1">Statistics <i class="ft-bar-chart"></i></a> <span class="text-muted">for the last year.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Recent Orders & Monthly Salse -->
<!-- Social & Weather -->
<div class="row match-height">
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-danger">
            <div class="card-content">
                <div class="card-body">
                    <div class="animated-weather-icons text-center float-left">
                        <svg version="1.1" id="cloudHailAlt2" class="climacon climacon_cloudHailAlt climacon-blue-grey climacon-darken-2 height-100" viewBox="15 15 70 70">
                            <g class="climacon_iconWrap climacon_iconWrap-cloudHailAlt">
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                        <circle cx="42" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                        <circle cx="49.999" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                        <circle cx="57.998" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                        <circle cx="42" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                        <circle cx="49.999" cy="65.498" r="2"></circle>
                                    </g>
                                    <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                        <circle cx="57.998" cy="65.498" r="2"></circle>
                                    </g>
                                </g>
                                <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                                    <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.941v-4.381c2.39-1.384,3.999-3.961,3.999-6.92c0-4.417-3.581-8-7.998-8c-1.602,0-3.084,0.48-4.334,1.291c-1.23-5.317-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.998c0,3.549,1.55,6.728,3.999,8.924v4.916c-4.776-2.768-7.998-7.922-7.998-13.84c0-8.835,7.162-15.997,15.997-15.997c6.004,0,11.229,3.311,13.966,8.203c0.663-0.113,1.336-0.205,2.033-0.205c6.626,0,11.998,5.372,11.998,12C71.998,58.863,68.656,63.293,63.999,64.941z"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="weather-details text-center">
                        <span class="block white darken-1">Snow</span>
                        <span class="font-large-2 block white darken-4">-5&deg;</span>
                        <span class="font-medium-4 text-bold-500 white darken-1">London, UK</span>
                    </div>
                </div>
                <div class="card-footer bg-gradient-x-danger border-0">
                    <div class="row">
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-wind font-large-1 lighten-3 align-middle"></i> <span class="align-middle">2MPH</span>
                        </div>
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-sun2 font-large-1 lighten-3 align-middle"></i> <span class="align-middle">2%</span>
                        </div>
                        <div class="col-4 text-center display-table-cell white">
                            <i class="me-thermometer font-large-1 lighten-3 align-middle"></i> <span class="align-middle">13.0&deg;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-info white">
            <div class="card-content">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="fa fa-twitter font-large-2"></i>
                    </div>
                    <div class="tweet-slider">
                        <ul>
                            <li>Congratulations to Rob Jones in accounting for winning our <span class="yellow">#NFL</span> football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Contests are a great thing to partner on. Partnerships immediately <span class="yellow">#DOUBLE</span> the reach.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Puns, humor, and quotes are great content on <span class="yellow">#Twitter</span>. Find some related to your business.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Are there <span class="yellow">#common-sense</span> facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card bg-gradient-x-primary white">
            <div class="card-content">
                <div class="card-body text-center">
                    <div class="mb-2">
                        <i class="fa fa-facebook font-large-2"></i>
                    </div>
                    <div class="fb-post-slider">
                        <ul>
                            <li>Congratulations to Rob Jones in accounting for winning our #NFL football pool!
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Contests are a great thing to partner on. Partnerships immediately #DOUBLE the reach.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Puns, humor, and quotes are great content on #Twitter. Find some related to your business.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                            <li>Are there #common-sense facts related to your business? Combine them with a great photo.
                                <p class="text-italic pt-1">- John Doe</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ Social & Weather -->
<!-- Basic Horizontal Timeline -->
<div class="row match-height">
    <div class="col-xl-8 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Horizontal Timeline</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div class="card-text">
                        <section class="cd-horizontal-timeline">
                            <div class="timeline">
                                <div class="events-wrapper">
                                    <div class="events">
                                        <ol>
                                            <li><a href="#0" data-date="16/01/2015" class="selected">16 Jan</a></li>
                                            <li><a href="#0" data-date="28/02/2015">28 Feb</a></li>
                                            <li><a href="#0" data-date="20/04/2015">20 Mar</a></li>
                                            <li><a href="#0" data-date="20/05/2015">20 May</a></li>
                                            <li><a href="#0" data-date="09/07/2015">09 Jul</a></li>
                                            <li><a href="#0" data-date="30/08/2015">30 Aug</a></li>
                                            <li><a href="#0" data-date="15/09/2015">15 Sep</a></li>
                                        </ol>
                                        <span class="filling-line" aria-hidden="true"></span>
                                    </div>
                                    <!-- .events -->
                                </div>
                                <!-- .events-wrapper -->
                                <ul class="cd-timeline-navigation">
                                    <li><a href="#0" class="prev inactive">Prev</a></li>
                                    <li><a href="#0" class="next">Next</a></li>
                                </ul>
                                <!-- .cd-timeline-navigation -->
                            </div>
                            <!-- .timeline -->
                            <div class="events-content">
                                <ol>
                                    <li class="selected" data-date="16/01/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-5.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="28/02/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/04/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="20/05/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-8.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="09/07/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-9.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="30/08/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-6.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                    <li data-date="15/09/2015">
                                        <blockquote class="blockquote border-0">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="media-object img-xl mr-1" src="<?=$asset;?>/images/portrait/small/avatar-s-7.png" alt="Generic placeholder image">
                                                </div>
                                                <div class="media-body">
                                                    Sometimes life is going to hit you in the head with a brick. Don't lose faith.
                                                </div>
                                            </div>
                                            <footer class="blockquote-footer text-right">Steve Jobs
                                                <cite title="Source Title">Entrepreneur</cite>
                                            </footer>
                                        </blockquote>
                                        <p class="lead mt-2">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum praesentium officia, fugit recusandae ipsa, quia velit nulla adipisci? Consequuntur aspernatur at.
                                        </p>
                                    </li>
                                </ol>
                            </div>
                            <!-- .events-content -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Card</h4>
            </div>
            <div class="card-content">
                <img class="img-fluid" src="<?=$asset;?>/images/carousel/06.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted">
                <span class="float-left">3 hours ago</span>
                <span class="float-right">
                    <a href="#" class="card-link">Read More <i class="fa fa-angle-right"></i></a>
                  </span>
            </div>
        </div>
    </div>
</div>
<!--/ Basic Horizontal Timeline -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer border-left-blue-grey border-left-lighten-4 d-none d-xl-block"><a class="customizer-close" href="#"><i class="ft-x font-medium-3"></i></a><a class="customizer-toggle bg-danger" href="#"><i class="ft-settings font-medium-3 fa-spin fa fa-spin fa-fw white"></i></a><div class="customizer-content p-2">
  <h4 class="text-uppercase mb-0">Theme Customizer</h4>
  <hr>
  <p>Customize & Preview in Real Time</p>
  
  <h5 class="mt-1 text-bold-500">Layout Options</h5>
  <ul class="nav nav-tabs nav-underline nav-justified layout-options">
    <li class="nav-item">
      <a class="nav-link layouts active" id="baseIcon-tab21-base" data-toggle="tab" aria-controls="tabIcon21-base" href="#tabIcon21-base" aria-expanded="true">Layouts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navigation" id="baseIcon-tab22-base" data-toggle="tab" aria-controls="tabIcon22-base" href="#tabIcon22-base" aria-expanded="false">Navigation</a>
    </li>
    <li class="nav-item">
      <a class="nav-link navbar" id="baseIcon-tab23-base" data-toggle="tab" aria-controls="tabIcon23-base" href="#tabIcon23-base" aria-expanded="false">Navbar</a>
    </li>
  </ul>
  <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active" id="tabIcon21-base" aria-expanded="true" aria-labelledby="baseIcon-tab21-base">
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="collapsed-sidebar" id="collapsed-sidebar">
          <label class="custom-control-label" for="collapsed-sidebar">Collapsed Menu</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="fixed-layout" id="fixed-layout">
          <label class="custom-control-label" for="fixed-layout">Fixed Layout</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="boxed-layout" id="boxed-layout">
          <label class="custom-control-label" for="boxed-layout">Boxed Layout</label>
        </div>

        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="static-layout" id="static-layout">
          <label class="custom-control-label" for="static-layout">Static Layout</label>
        </div>
      
    </div>
    <div class="tab-pane" id="tabIcon22-base" aria-labelledby="baseIcon-tab22-base">
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="native-scroll" id="native-scroll">
          <label class="custom-control-label" for="native-scroll">Native Scroll</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="right-side-icons" id="right-side-icons">
          <label class="custom-control-label" for="right-side-icons">Right Side Icons</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="bordered-navigation" id="bordered-navigation">
          <label class="custom-control-label" for="bordered-navigation">Bordered Navigation</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="flipped-navigation" id="flipped-navigation">
          <label class="custom-control-label" for="flipped-navigation">Flipped Navigation</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="collapsible-navigation" id="collapsible-navigation">
          <label class="custom-control-label" for="collapsible-navigation">Collapsible Navigation</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="static-navigation" id="static-navigation">
          <label class="custom-control-label" for="static-navigation">Static Navigation</label>
        </div>
      
    </div>
    <div class="tab-pane" id="tabIcon23-base" aria-labelledby="baseIcon-tab23-base">
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="brand-center" id="brand-center">
          <label class="custom-control-label" for="brand-center">Brand Center</label>
        </div>
      
        <div class="custom-control custom-checkbox mb-1">
          <input type="checkbox" class="custom-control-input" name="navbar-static-top" id="navbar-static-top">
          <label class="custom-control-label" for="navbar-static-top">Static Top</label>
        </div>
      
    </div>
  </div>

  <hr>

  <h5 class="mt-1 text-bold-500">Navigation Color Options</h5>
  <ul class="nav nav-tabs nav-underline nav-justified color-options">
    <li class="nav-item">
      <a class="nav-link nav-semi-light active" id="color-opt-1" data-toggle="tab" aria-controls="clrOpt1" href="#clrOpt1" aria-expanded="false">Semi Light</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-semi-dark" id="color-opt-2" data-toggle="tab" aria-controls="clrOpt2" href="#clrOpt2" aria-expanded="false">Semi Dark</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-dark" id="color-opt-3" data-toggle="tab" aria-controls="clrOpt3" href="#clrOpt3" aria-expanded="false">Dark</a>
    </li>
    <li class="nav-item">
      <a class="nav-link nav-light" id="color-opt-4" data-toggle="tab" aria-controls="clrOpt4" href="#clrOpt4" aria-expanded="true">Light</a>
    </li>
  </ul>
  <div class="tab-content px-1 pt-1">
    <div role="tabpanel" class="tab-pane active" id="clrOpt1" aria-expanded="true" aria-labelledby="color-opt-1">
      <div class="row">
        <div class="col-6">
          <h6>Solid</h6>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="default-solid">
              <label class="custom-control-label" for="default-solid">Default</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="primary-solid">
              <label class="custom-control-label" for="primary-solid">Primary</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="danger-solid">
              <label class="custom-control-label" for="danger-solid">Danger</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-success" id="success-solid">
              <label class="custom-control-label" for="success-solid">Success</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="blue">
              <label class="custom-control-label" for="blue">Blue</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="cyan">
              <label class="custom-control-label" for="cyan">Cyan</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="pink">
              <label class="custom-control-label" for="pink">Pink</label>
            </div>
          
        </div>
        <div class="col-6">
          <h6>Gradient</h6>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" checked class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue">
              <label class="custom-control-label" for="bg-gradient-x-grey-blue">Default</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary">
              <label class="custom-control-label" for="bg-gradient-x-primary">Primary</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger">
              <label class="custom-control-label" for="bg-gradient-x-danger">Danger</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success">
              <label class="custom-control-label" for="bg-gradient-x-success">Success</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue">
              <label class="custom-control-label" for="bg-gradient-x-blue">Blue</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan">
              <label class="custom-control-label" for="bg-gradient-x-cyan">Cyan</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-slight-clr" class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink">
              <label class="custom-control-label" for="bg-gradient-x-pink">Pink</label>
            </div>
          
        </div>
      </div>
    </div>
    <div class="tab-pane" id="clrOpt2" aria-labelledby="color-opt-2">
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" checked class="custom-control-input bg-default" data-bg="bg-default" id="opt-default">
          <label class="custom-control-label" for="opt-default">Default</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="opt-primary">
          <label class="custom-control-label" for="opt-primary">Primary</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="opt-danger">
          <label class="custom-control-label" for="opt-danger">Danger</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="opt-success">
          <label class="custom-control-label" for="opt-success">Success</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="opt-blue">
          <label class="custom-control-label" for="opt-blue">Blue</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="opt-cyan">
          <label class="custom-control-label" for="opt-cyan">Cyan</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-sdark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="opt-pink">
          <label class="custom-control-label" for="opt-pink">Pink</label>
        </div>
      
    </div>
    <div class="tab-pane" id="clrOpt3" aria-labelledby="color-opt-3">
      <div class="row">
        <div class="col-6">
          <h3>Solid</h3>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey" id="solid-blue-grey">
              <label class="custom-control-label" for="solid-blue-grey">Default</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-primary" data-bg="bg-primary" id="solid-primary">
              <label class="custom-control-label" for="solid-primary">Primary</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-danger" data-bg="bg-danger" id="solid-danger">
              <label class="custom-control-label" for="solid-danger">Danger</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-success" data-bg="bg-success" id="solid-success">
              <label class="custom-control-label" for="solid-success">Success</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue" data-bg="bg-blue" id="solid-blue">
              <label class="custom-control-label" for="solid-blue">Blue</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan" id="solid-cyan">
              <label class="custom-control-label" for="solid-cyan">Cyan</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-pink" data-bg="bg-pink" id="solid-pink">
              <label class="custom-control-label" for="solid-pink">Pink</label>
            </div>
          
        </div>

        <div class="col-6">
          <h3>Gradient</h3>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" class="custom-control-input bg-blue-grey" data-bg="bg-gradient-x-grey-blue" id="bg-gradient-x-grey-blue1">
              <label class="custom-control-label" for="bg-gradient-x-grey-blue1">Default</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-primary" data-bg="bg-gradient-x-primary" id="bg-gradient-x-primary1">
              <label class="custom-control-label" for="bg-gradient-x-primary1">Primary</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-danger" data-bg="bg-gradient-x-danger" id="bg-gradient-x-danger1">
              <label class="custom-control-label" for="bg-gradient-x-danger1">Danger</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-success" data-bg="bg-gradient-x-success" id="bg-gradient-x-success1">
              <label class="custom-control-label" for="bg-gradient-x-success1">Success</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-blue" data-bg="bg-gradient-x-blue" id="bg-gradient-x-blue1">
              <label class="custom-control-label" for="bg-gradient-x-blue1">Blue</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-cyan" data-bg="bg-gradient-x-cyan" id="bg-gradient-x-cyan1">
              <label class="custom-control-label" for="bg-gradient-x-cyan1">Cyan</label>
            </div>
          
            <div class="custom-control custom-radio mb-1">
              <input type="radio" name="nav-dark-clr" checked class="custom-control-input bg-pink" data-bg="bg-gradient-x-pink" id="bg-gradient-x-pink1">
              <label class="custom-control-label" for="bg-gradient-x-pink1">Pink</label>
            </div>
          
        </div>
      </div>
    </div>
    <div class="tab-pane" id="clrOpt4" aria-labelledby="color-opt-4">
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue-grey" data-bg="bg-blue-grey bg-lighten-4" id="light-blue-grey">
          <label class="custom-control-label" for="light-blue-grey">Default</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-primary" data-bg="bg-primary bg-lighten-4" id="light-primary">
          <label class="custom-control-label" for="light-primary">Primary</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-danger" data-bg="bg-danger bg-lighten-4" id="light-danger">
          <label class="custom-control-label" for="light-danger">Danger</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-success" data-bg="bg-success bg-lighten-4" id="light-success">
          <label class="custom-control-label" for="light-success">Success</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-blue" data-bg="bg-blue bg-lighten-4" id="light-blue">
          <label class="custom-control-label" for="light-blue">Blue</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-cyan" data-bg="bg-cyan bg-lighten-4" id="light-cyan">
          <label class="custom-control-label" for="light-cyan">Cyan</label>
        </div>
      
        <div class="custom-control custom-radio mb-1">
          <input type="radio" name="nav-light-clr" class="custom-control-input bg-pink" data-bg="bg-pink bg-lighten-4" id="light-pink">
          <label class="custom-control-label" for="light-pink">Pink</label>
        </div>
      
    </div>
  </div>

  <hr>

  <h5 class="mt-1 mb-1 text-bold-500">Menu Color Options</h5>
  <div class="form-group">
    <!-- Outline Button group -->
    <div class="btn-group customizer-sidebar-options" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-outline-info" data-sidebar="menu-light">Light Menu</button>
      <button type="button" class="btn btn-outline-info" data-sidebar="menu-dark">Dark Menu</button>
    </div>
  </div>
</div>
    </div>
    <!-- End: Customizer-->

    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/stack_admin" target="_blank" class="btn bg-gradient-directional-purple white btn-purple btn-glow px-2">Buy Now</a></div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2019 <a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">PIXINVENT       </a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?=$asset;?>/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?=$asset;?>/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/raphael-min.js"></script>
    <script src="<?=$asset;?>/vendors/js/charts/morris.min.js"></script>
    <script src="<?=$asset;?>/vendors/js/extensions/unslider-min.js"></script>
    <script src="<?=$asset;?>/vendors/js/timeline/horizontal-timeline.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?=$asset;?>/js/core/app-menu.min.js"></script>
    <script src="<?=$asset;?>/js/core/app.min.js"></script>
    <script src="<?=$asset;?>/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?=$asset;?>/js/scripts/ui/breadcrumbs-with-stats.min.js"></script>
    <script src="<?=$asset;?>/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

  </body>
  <!-- END: Body-->

<!-- Mirrored from pixinvent.com/stack-responsive-bootstrap-4-admin-template/html/ltr/horizontal-menu-template-nav/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Sep 2019 05:01:49 GMT -->
</html>