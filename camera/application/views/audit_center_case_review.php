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
   <!-- SELECT2-->
   <link rel="stylesheet" href="<?=base_url('vendor/select2/dist/css/select2.css'); ?>">
   <link rel="stylesheet" href="<?=base_url('vendor/select2-bootstrap-theme/dist/select2-bootstrap.css'); ?>">  
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- SWEET ALERT-->
   <link rel="stylesheet" href="<?=base_url('vendor/sweetalert/dist/sweetalert.css'); ?>">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?=base_url('css/bootstrap.css'); ?>" id="bscss">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="<?=base_url('vendor/datatables-colvis/css/dataTables.colVis.css'); ?>">
   <link rel="stylesheet" href="<?=base_url('vendor/datatables/media/css/dataTables.bootstrap.css'); ?>">
   <link rel="stylesheet" href="<?=base_url('vendor/dataTables.fontAwesome/index.css'); ?>">
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
            <form role="search" id="search-event" action="<?=site_url('main/search'); ?>" class="navbar-form">
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
                           <!-- User picture-->
                           <!-- <div class="user-block-picture">
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
                  <li class=" ">
                     <a href="#dashboard" title="Home" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Navigation</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Navigation</li>
                        <li class=" ">
                           <a href="<?=site_url('main/index'); ?>" title="Home">
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
                  <li class="active">
                     <a href="#auditcenter" title="Home" data-toggle="collapse">
                        <em class="icon-diamond"></em>
                        <span data-localize="sidebar.nav.HOME">Audit Center</span>
                     </a>
                     <ul id="auditcenter" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Audit Center</li>
                        <li class="active">
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
            <h3>Audit Center</h3>
            <div class="row">
               <div class="col-md-4">
                  <!-- Aside panel-->
                  <div class="panel b">
                     <div class="panel-body bb">
                        <p>Open Cases to be Reviewed</p>
                        <div class="table-grid table-grid-align-middle mv">
                           <div class="col">
                              <div class="progress progress-xs m0">
                                 <div style="width:78%" class="progress-bar progress-bar-info">78%</div>
                              </div>
                           </div>
                           <div class="hidden-xs col wd-xxs text-right">
                              <div class="text-bold text-muted">78%</div>
                           </div>
                        </div>
                     </div>
                     <div class="panel-body">
                        <p>Cases</p>
                        <div class="row text-center">
                           <div class="col-xs-3 col-md-6 col-lg-3">
                              <div class="inline mv">
                                 <div data-sparkline="" values="20,80" data-type="pie" data-height="50" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#23b7e5&quot;]" class="sparkline"></div>
                              </div>
                              <p class="mt-lg">Discounts</p>
                           </div>
                           <div class="col-xs-3 col-md-6 col-lg-3">
                              <div class="inline mv">
                                 <div data-sparkline="" values="60,40" data-type="pie" data-height="50" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#27c24c&quot;]" class="sparkline"></div>
                              </div>
                              <p class="mt-lg">Open</p>
                           </div>
                           <div class="col-xs-3 col-md-6 col-lg-3">
                              <div class="inline mv">
                                 <div data-sparkline="" values="20,80" data-type="pie" data-height="50" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#ff902b&quot;]" class="sparkline"></div>
                              </div>
                              <p class="mt-lg">Refunds</p>
                           </div>
                           <div class="col-xs-3 col-md-6 col-lg-3">
                              <div class="inline mv">
                                 <div data-sparkline="" values="30,70" data-type="pie" data-height="50" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#f05050&quot;]" class="sparkline"></div>
                              </div>
                              <p class="mt-lg">Red Lighted</p>
                           </div>
                        </div>
                     </div>
                     <table class="table bb">
                        <tbody>
                           <tr>
                              <td>
                                 <strong>Assigned Hours</strong>
                              </td>
                              <td>68 hs</td>
                           </tr>
                           <tr>
                              <td>
                                 <strong>Time Consumed</strong>
                              </td>
                              <td>32 hs</td>
                           </tr>
                           <tr>
                              <td>
                                 <strong>Health</strong>
                              </td>
                              <td>
                                 <em class="fa fa-smile-o fa-lg text-warning"></em>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <strong>Commits</strong>
                              </td>
                              <td>140</td>
                           </tr>
                           <tr>
                              <td>
                                 <strong>Recently closed</strong>
                              </td>
                              <td>
                                 <div data-height="120" data-scrollable="" class="list-group">
                                    <table class="table table-bordered bg-transparent">
                                       <tbody>
                                          <tr>
                                             <td><a href="" class="text-muted">BI:54678</a>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><a href="" class="text-muted">BI:55778</a>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><a href="" class="text-muted">BI:56878</a>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><a href="" class="text-muted">BI:57978</a>
                                             </td>
                                          </tr>
                                          <tr>
                                             <td><a href="" class="text-muted">BI:1107</a>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </td>
                           </tr>
                           <tr>
                              <td>
                                 <strong>Last closed on</strong>
                              </td>
                              <td>12/01/2016</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- end Aside panel-->
               </div>
               <div class="col-md-8">
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
   <!-- SELECT2-->
   <script src="<?=base_url('vendor/select2/dist/js/select2.js'); ?>"></script>
   <!-- RTL demo-->
   <script src="<?=base_url('js/demo/demo-rtl.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SWEET ALERT-->
   <script src="<?=base_url('vendor/sweetalert/dist/sweetalert.min.js'); ?>"></script>
    <script src="<?=base_url('vendor/parsleyjs/dist/parsley.min.js'); ?>"></script>
    <!-- Google map -->
   <!-- SPARKLINE-->
   <script src="<?=base_url('vendor/sparkline/index.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <script src="<?=base_url('vendor/datatables/media/js/jquery.dataTables.min.js'); ?>"></script>
   <script src="<?=base_url('vendor/datatables-colvis/js/dataTables.colVis.js'); ?>"></script>
   <script src="<?=base_url('vendor/datatables/media/js/dataTables.bootstrap.js'); ?>"></script>
   <script src="<?=base_url('js/demo/demo-datatable.js'); ?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>
   <script src="<?=base_url('js/costum.js'); ?>"></script>
   <script type="text/javascript">
       $('select').select2();
       <?=$this->session->flashdata('message'); ?>
   </script>
</body>

</html>