<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title><?=$title; ?></title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?=base_url('vendor/fontawesome/css/font-awesome.min.css'); ?>">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?=base_url('vendor/simple-line-icons/css/simple-line-icons.css'); ?>">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?=base_url('vendor/animate.css/animate.min.css'); ?>">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?=base_url('vendor/whirl/dist/whirl.css'); ?>">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- SWEET ALERT-->
   <link rel="stylesheet" href="<?=base_url('vendor/sweetalert/dist/sweetalert.css'); ?>">
   <!-- VECTOR MAP-->
   <link rel="stylesheet" href="<?=base_url('vendor/ika.jvectormap/jquery-jvectormap-1.2.2.css'); ?>">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?=base_url('css/bootstrap.css'); ?>" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?=base_url('css/app.css'); ?>" id="maincss">
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav role="navigation" class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a href="#/" class="navbar-brand">
                  <div class="brand-logo">
                     <img src="<?=base_url('img/logo.png'); ?>" alt="App Logo" class="img-responsive">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img src="<?=base_url('img/logo-single.png'); ?>" alt="App Logo" class="img-responsive">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Nav wrapper-->
            <div class="nav-wrapper">
               <!-- START Left navbar-->
               <ul class="nav navbar-nav">
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a href="#" data-trigger-resize="" data-toggle-state="aside-collapsed" class="hidden-xs">
                        <em class="fa fa-navicon"></em>
                     </a>
                     <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                     <a href="#" data-toggle-state="aside-toggled" data-no-persist="true" class="visible-xs sidebar-toggle">
                        <em class="fa fa-navicon"></em>
                     </a>
                  </li>
                  <!-- START User avatar toggle-->
                  <li>
                     <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                     <a id="user-block-toggle" href="#user-block" data-toggle="collapse">
                        <em class="icon-user"></em>
                     </a>
                  </li>
                  <!-- END User avatar toggle-->
               </ul>
               <!-- END Left navbar-->
               <!-- START Right Navbar-->
               <ul class="nav navbar-nav navbar-right">
                  <!-- Search icon-->
                  <li>
                     <a href="#" data-search-open="">
                        <em class="icon-magnifier"></em>
                     </a>
                  </li>
                  <!-- Fullscreen (only desktops)-->
                  <li class="visible-lg">
                     <a href="#" data-toggle-fullscreen="">
                        <em class="fa fa-expand"></em>
                     </a>
                  </li>
                  <!-- END Offsidebar menu-->
               </ul>
               <!-- END Right Navbar-->
            </div>
            <!-- END Nav wrapper-->
            <!-- START Search form-->
            <form role="search" action="<?=site_url('main/search'); ?>" class="navbar-form" id="search-event">
               <div class="form-group has-feedback">
                  <input type="text" placeholder="Type and hit enter ..." class="form-control">
                  <div data-search-dismiss="" class="fa fa-times form-control-feedback"></div>
               </div>
               <button type="submit" class="hidden btn btn-default">Submit</button>
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>
      <!-- sidebar-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav data-sidebar-anyclick-close="" class="sidebar">
               <!-- START sidebar nav-->
               <ul class="nav">
                  <!-- START user info-->
                  <li class="has-user-block">
                     <div id="user-block" class="collapse">
                        <div class="item user-block">
                           <!-- User picture--><!-- 
                           <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                                 <div class="circle circle-success circle-lg"></div>
                              </div>
                           </div> -->
                           <!-- Name and Job-->
                           <div class="user-block-info">
                              <span class="user-block-name">Logged In As: Jon Giles</span>
                              <span class="user-block-role">Store #: 16657</span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading">
                     <span data-localize="sidebar.heading.HEADER">Corporate Access</span>
                  </li>
                  <li class="active">
                     <a href="#dashboard" title="Home" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Navigation</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Navigation</li>
                        <li class="active">
                           <a href="<?=site_url('main/system_overview'); ?>" title="Home">
                              <span>Corporate Command</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Systems Overview">
                              <span>Systems Overview</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Store Level">
                              <span>Store Level</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#monitoring" title="Home" data-toggle="collapse">
                        <em class="icon-social-dropbox"></em>
                        <span data-localize="sidebar.nav.HOME">Monitoring</span>
                     </a>
                     <ul id="monitoring" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Monitoring</li>
                        <li class=" ">
                           <a href="<?=site_url('main/camera_list'); ?>" title="Live">
                              <span>Live</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/event_list'); ?>" title="Playback">
                              <span>Playback</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Saved Video">
                              <span>Saved Video</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#auditcenter" title="Home" data-toggle="collapse">
                        <em class="icon-diamond"></em>
                        <span data-localize="sidebar.nav.HOME">Audit Center</span>
                     </a>
                     <ul id="auditcenter" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Audit Center</li>
                        <li class=" ">
                           <a href="<?=site_url('main/audit_center_case_review'); ?>" title="Level3 Item">
                              <span>Cases for Review</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/audit_center_case_hist'); ?>" title="Level3 Item">
                              <span>Case History</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Voids">
                              <span>Voids</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="No Sale">
                              <span>No Sale</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Refunds">
                              <span>Refunds</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Discounts">
                              <span>Discounts</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Waste">
                              <span>Waste</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/#'); ?>" title="Custom">
                              <span>Custom</span>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class=" ">
                     <a href="#filter" title="Filter" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Filter</span>
                     </a>
                     <ul id="filter" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Filters</li>
                        <li class=" ">
                           <a href="<?=site_url('main/system_overview/void'); ?>" title="Void">
                              <span>Void</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/system_overview/refunds'); ?>" title="Refunds">
                              <span>Refunds</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/system_overview/discounts'); ?>" title="Discounts">
                              <span>Discounts</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/system_overview'); ?>" title="Custom">
                              <span>Custom</span>
                           </a>
                        </li>
                     </ul>
                  </li>
               </ul>
               <!-- END sidebar nav-->
            </nav>
         </div>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- Main section-->
      <section>
         <!-- Page content-->
         <div class="content-wrapper">
            <h3>Duck Donuts
               <small>Corporate Management Access</small>
            </h3>
            <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-12">
                  <!-- START widget-->
                  <div class="panel widget bg-purple">
                     <div class="row row-table">
                        <div class="col-xs-3 text-center bg-primary-dark pv-lg">
                           <div class="h4 mt0"><?=Date('d'); ?></div>
                           <div class="h3 mt0"><?=Date('M'); ?></div>
                        </div>
                        <div class="col-xs-6 pv-lg">
                           <div class="h3 mt0 text-uppercase"><?=Date('l'); ?></div>
                           <div class="text-uppercase"><?=Date('g:i'); ?></div>
                        </div>
                        <div class="col-xs-3 pv-lg bg-primary">
                           <div class="h3 mt0 text-uppercase">8</div>
                           <div class="text-uppercase">Cases</div>
                        </div>
                     </div>
                  </div>

               <div class="panel widget">
                  <div id="panelchart1" class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Refunds</div>
                     </div>
                     <div class="panel-body">
                        <div class="chart-bar flot-chart"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div role="tabpanel">
                              <!-- Nav tabs-->
                              <ul role="tablist" class="nav nav-tabs">
                                 <li role="presentation" class="active"><a href="#onedayrefund" aria-controls="home" role="tab" data-toggle="tab">1 Day</a>
                                 </li>
                                 <li role="presentation"><a href="#sevendaysrefund" aria-controls="profile" role="tab" data-toggle="tab">7 Days</a>
                                 </li>
                                 <li role="presentation"><a href="#onemonthrefund" aria-controls="messages" role="tab" data-toggle="tab">30 Days</a>
                                 </li>
                              </ul>
                              <!-- Tab panes-->
                              <div class="tab-content">
                                 <div id="onedayrefund" role="tabpanel" class="tab-pane active">$1,076</div>
                                 <div id="sevendaysrefund" role="tabpanel" class="tab-pane">$1,076</div>
                                 <div id="onemonthrefund" role="tabpanel" class="tab-pane">$76</div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="panel widget">
                  <div id="panelchart2" class="panel panel-default">
                     <div class="panel-heading">
                        <div class="panel-title">Discounts</div>
                     </div>
                     <div class="panel-body">
                        <div class="chart-bar1 flot-chart"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div role="tabpanel">
                              <!-- Nav tabs-->
                              <ul role="tablist" class="nav nav-tabs">
                                 <li role="presentation" class="active"><a href="#onedaydiscount" aria-controls="home" role="tab" data-toggle="tab">1 Day</a>
                                 </li>
                                 <li role="presentation"><a href="#sevendaysdiscount" aria-controls="profile" role="tab" data-toggle="tab">7 Days</a>
                                 </li>
                                 <li role="presentation"><a href="#onemonthdiscount" aria-controls="messages" role="tab" data-toggle="tab">30 Days</a>
                                 </li>
                              </ul>
                              <!-- Tab panes-->
                              <div class="tab-content">
                                 <div id="onedaydiscount" role="tabpanel" class="tab-pane active">$1,076</div>
                                 <div id="sevendaysdiscount" role="tabpanel" class="tab-pane">$1,076</div>
                                 <div id="onemonthdiscount" role="tabpanel" class="tab-pane">$76</div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
               <div class="col-lg-7 col-md-7 col-sm-12">
                  <div class="col-md-4">
                     <button class="btn btn-block btn-lg btn-danger">Store 1</button>
                  </div>
                  <div class="col-md-4">
                     <button class="btn btn-block btn-lg btn-danger">Store 2</button>
                  </div>
                  <div class="col-md-4">
                     <button class="btn btn-block btn-lg btn-danger">Store 3</button>
                  </div>
                  <hr>
               <div class="col-md-12">
                  <div class="mb-lg clearfix">
                     <div class="pull-left">
                        <button type="button" class="btn btn-sm btn-info">New ticket</button>
                        <button type="button" class="btn btn-sm btn-default">
                           <em class="fa fa-user-plus"></em>
                        </button>
                        <button type="button" class="btn btn-sm btn-default">
                           <em class="fa fa-pencil"></em>
                        </button>
                        <button type="button" class="btn btn-sm btn-default">
                           <em class="fa fa-mail-forward"></em>
                        </button>
                        <button type="button" class="btn btn-sm btn-default">
                           <em class="fa fa-print"></em>
                        </button>
                     </div>
                     <div class="pull-right">
                        <p class="mb0 mt-sm">19 bugs / 16 issues</p>
                     </div>
                  </div>
                  <div class="panel b">
                     <div class="panel-body">
                        <div class="table-responsive">
                           <table id="datatable1" class="table">
                              <thead>
                                 <tr>
                                    <th>Type</th>
                                    <th>#ID</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Employee</th>
                                    <th>Discount</th>
                                    <th>Amount</th>
                                    <th>Time</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:54678</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Sylvia Daniels</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:55778</td>
                                    <td class="text-nowrap">
                                       <small>Aliquam felis nibh, ultrices non elementum</small>
                                    </td>
                                    <td>01/05/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="low" class="circle circle-lg circle-gray"></div>
                                    </td>
                                    <td><a href="">Sherry Carroll</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:56878</td>
                                    <td class="text-nowrap">
                                       <small>Aliquam condimentum enim a risus cursus blandit.</small>
                                    </td>
                                    <td>05/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Mitchell Jones</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:57978</td>
                                    <td class="text-nowrap">
                                       <small>Sed at libero augue, in euismod tellus.</small>
                                    </td>
                                    <td>01/11/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Tracey Parker</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1107</td>
                                    <td class="text-nowrap">
                                       <small>Praesent lacinia ultricies neque.</small>
                                    </td>
                                    <td>01/01/2015</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="high" class="circle circle-lg circle-danger"></div>
                                    </td>
                                    <td><a href="">Warren Gray</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:1117</td>
                                    <td class="text-nowrap">
                                       <small>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small>
                                    </td>
                                    <td>11/05/2013</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Jackson Ramos</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:10127</td>
                                    <td class="text-nowrap">
                                       <small>Pellentesque habitant morbi tristique</small>
                                    </td>
                                    <td>05/02/2014</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Ernest Berry</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:54678</td>
                                    <td class="text-nowrap">
                                       <small>Integer venenatis ultrices vulputate.</small>
                                    </td>
                                    <td>01/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Sylvia Daniels</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:55778</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/05/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="low" class="circle circle-lg circle-gray"></div>
                                    </td>
                                    <td><a href="">Sherry Carroll</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:56878</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Mitchell Jones</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:57978</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/11/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Tracey Parker</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1107</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2015</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="high" class="circle circle-lg circle-danger"></div>
                                    </td>
                                    <td><a href="">Warren Gray</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:1117</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>11/05/2013</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Jackson Ramos</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:10127</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/02/2014</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Ernest Berry</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:54678</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Sylvia Daniels</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:55778</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/05/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="low" class="circle circle-lg circle-gray"></div>
                                    </td>
                                    <td><a href="">Sherry Carroll</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:56878</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Mitchell Jones</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:57978</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/11/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Tracey Parker</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1107</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2015</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="high" class="circle circle-lg circle-danger"></div>
                                    </td>
                                    <td><a href="">Warren Gray</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1117</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>11/05/2013</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Jackson Ramos</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:10127</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/02/2014</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Ernest Berry</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:54678</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Sylvia Daniels</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:55778</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/05/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="low" class="circle circle-lg circle-gray"></div>
                                    </td>
                                    <td><a href="">Sherry Carroll</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:56878</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Mitchell Jones</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:57978</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/11/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Tracey Parker</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1107</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2015</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="high" class="circle circle-lg circle-danger"></div>
                                    </td>
                                    <td><a href="">Warren Gray</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:1117</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>11/05/2013</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Jackson Ramos</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:10127</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/02/2014</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Ernest Berry</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:54678</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Sylvia Daniels</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:55778</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/05/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="low" class="circle circle-lg circle-gray"></div>
                                    </td>
                                    <td><a href="">Sherry Carroll</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:56878</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/01/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Mitchell Jones</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:57978</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/11/2016</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Tracey Parker</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-warning">pending</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1107</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>01/01/2015</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="high" class="circle circle-lg circle-danger"></div>
                                    </td>
                                    <td><a href="">Warren Gray</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">16657</div>
                                    </td>
                                    <td>BI:1117</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>11/05/2013</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Jackson Ramos</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-success">open</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <div class="badge bg-gray-lighter">issue</div>
                                    </td>
                                    <td>BI:10127</td>
                                    <td class="text-nowrap">
                                       <small>Maecenas mollis egestas convallis.</small>
                                    </td>
                                    <td>05/02/2014</td>
                                    <td>
                                       <div data-toggle="tooltip" data-title="normal" class="circle circle-lg circle-warning"></div>
                                    </td>
                                    <td><a href="">Ernest Berry</a>
                                    </td>
                                    <td>
                                       <div class="inline wd-xxs label label-danger">closed</div>
                                    </td>
                                    <td>
                                       10:23 PM
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; <?=Date('Y'); ?> powered by XG for Duck Donuts - All Rights Reserved - Secure Access</span>
      </footer>
   </div>
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="<?=base_url('vendor/modernizr/modernizr.custom.js'); ?>"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="<?=base_url('vendor/matchMedia/matchMedia.js'); ?>"></script>
   <!-- JQUERY-->
   <script src="<?=base_url('vendor/jquery/dist/jquery.js'); ?>"></script>
   <!-- BOOTSTRAP-->
   <script src="<?=base_url('vendor/bootstrap/dist/js/bootstrap.js'); ?>"></script>
   <!-- STORAGE API-->
   <script src="<?=base_url('vendor/jQuery-Storage-API/jquery.storageapi.js'); ?>"></script>
   <!-- JQUERY EASING-->
   <script src="<?=base_url('vendor/jquery.easing/js/jquery.easing.js'); ?>"></script>
   <!-- ANIMO-->
   <script src="<?=base_url('vendor/animo.js/animo.js'); ?>"></script>
   <!-- SLIMSCROLL-->
   <script src="<?=base_url('vendor/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
   <!-- SCREENFULL-->
   <script src="<?=base_url('vendor/screenfull/dist/screenfull.js'); ?>"></script>
   <!-- LOCALIZE-->
   <script src="<?=base_url('vendor/jquery-localize-i18n/dist/jquery.localize.js'); ?>"></script>
   <!-- RTL demo-->
   <script src="<?=base_url('js/demo/demo-rtl.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <script src="<?=base_url('vendor/sweetalert/dist/sweetalert.min.js'); ?>"></script>
    <!-- FLOT CHART-->
   <script src="<?=base_url('vendor/Flot/jquery.flot.js'); ?>"></script>
   <script src="<?=base_url('vendor/flot.tooltip/js/jquery.flot.tooltip.min.js'); ?>"></script>
   <script src="<?=base_url('vendor/Flot/jquery.flot.resize.js'); ?>"></script>
   <script src="<?=base_url('vendor/Flot/jquery.flot.pie.js'); ?>"></script>
   <script src="<?=base_url('vendor/Flot/jquery.flot.time.js'); ?>"></script>
   <script src="<?=base_url('vendor/Flot/jquery.flot.categories.js'); ?>"></script>
   <script src="<?=base_url('vendor/flot-spline/js/jquery.flot.spline.min.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- VECTOR MAP-->
   <script src="<?=base_url('vendor/ika.jvectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
   <script src="<?=base_url('vendor/ika.jvectormap/jquery-jvectormap-us-aea.js'); ?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>

   <script type="text/javascript">
        <?=$this->session->flashdata('message'); ?>
        (function(window, document, $, undefined){

  $(function(){

    var data = [{
      "label": "Sales",
      "color": "#9cd159",
      "data": [
        ["Jan", 27],
        ["Feb", 82],
        ["Mar", 56],
        ["Apr", 14],
        ["May", 28],
        ["Jun", 77],
        ["Jul", 23],
        ["Aug", 49],
        ["Sep", 81],
        ["Oct", 20]
      ]
    }];

    var options = {
                    series: {
                        bars: {
                            align: 'center',
                            lineWidth: 0,
                            show: true,
                            barWidth: 0.6,
                            fill: 0.9
                        }
                    },
                    grid: {
                        borderColor: '#eee',
                        borderWidth: 1,
                        hoverable: true,
                        backgroundColor: '#fcfcfc'
                    },
                    tooltip: true,
                    tooltipOpts: {
                        content: function (label, x, y) { return x + ' : ' + y; }
                    },
                    xaxis: {
                        tickColor: '#fcfcfc',
                        mode: 'categories'
                    },
                    yaxis: {
                        // position: 'right' or 'left'
                        tickColor: '#eee'
                    },
                    shadowSize: 0
                };

    var chart = $('.chart-bar');
    var chart1 = $('.chart-bar1');
    var chart2 = $('.chart-bar2');
    if(chart.length && chart1.length) {
      $.plot(chart, data, options);
      $.plot(chart1, data, options);
      $.plot(chart2, data, options);
    }
  });

})(window, document, window.jQuery);


// Vector map
(function(window, document, $, undefined){

  $(function(){
   var markersData = [
    { latLng:[42.1852501, -83.24730890000001],  name:'Michigan '          },
    { latLng:[45.73, -89.41],   name:'Michigan '                }
  ];
   $('.usavector').vectorMap({map: 'us_aea',backgroundColor: '#FFF',
regionStyle: {
  initial: {
    fill: '#9DA5A6',
    "fill-opacity": 1,
    stroke: 'none',
    "stroke-width": 0,
    "stroke-opacity": 1
  },
  hover: {
    "fill-opacity": 0.6,
    cursor: 'pointer'
  },
  selected: {
    fill: 'yellow'
  },
  selectedHover: {
  }
},markers: markersData,series: {
    regions: [{
        values: {
            'US-MI': '#A0D360'
        },
        attribute: 'fill'
    }]
},
    markerStyle: {
      initial: {
        fill: '#CE0034',
        stroke: '#CE0034'
      }
    }});
  
  //   var element = $('.usavector');
    
  //   new VectorMap(element, seriesData, markersData);
    
  // });

  // var seriesData = {
  //  map: 'us_aea'
  // };
  
  // var markersData = [
  //   { latLng:[42.1852501, -83.24730890000001],  name:'Michigan '          },
  //   { latLng:[45.73, -89.41],   name:'Michigan '                }
  // ];

  });
})(window, document, window.jQuery);
   </script>
</body>

</html>