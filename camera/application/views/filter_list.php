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
                  <li class=" ">
                     <a href="#dashboard" title="Home" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Navigation</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Navigation</li>
                        <li class="">
                           <a href="<?=site_url('main/index'); ?>" title="Home">
                              <span>Corporate Command</span>
                           </a>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('main/system_overview'); ?>" title="Systems Overview">
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
                  <li class="active">
                     <a href="#filter" title="Filter" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Filter</span>
                     </a>
                     <ul id="filter" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Filters</li>
                        <li class="<?=($link == 'void') ? 'active' : '' ?>">
                           <a href="<?=site_url('main/system_overview/void'); ?>" title="Void">
                              <span>Void</span>
                           </a>
                        </li>
                        <li class="<?=($link == 'refunds') ? 'active' : '' ?>">
                           <a href="<?=site_url('main/system_overview/refunds'); ?>" title="Refunds">
                              <span>Refunds</span>
                           </a>
                        </li>
                        <li class="<?=($link == 'discounts') ? 'active' : '' ?>">
                           <a href="<?=site_url('main/system_overview/discounts'); ?>" title="Discounts">
                              <span>Discounts</span>
                           </a>
                        </li>
                        <li class="<?=($link == 'custom') ? 'active' : '' ?>">
                           <a href="<?=site_url('main/system_overview'); ?>" title="Custom">
                              <span>Custom</span>
                           </a>
                        </li>
                        <li class="<?=($link == 'employee') ? 'active' : '' ?>">
                           <a href="<?=site_url('main/system_overview/employee'); ?>" title="Custom">
                              <span>Employee</span>
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
            <h3><?=$panel_head;?></h3>
            <div class="row">
               <div class="panel panel-danger b">
                  <div class="panel-heading">
                     <h4><?=$panel_head; ?></h4>
                  </div>
                  <div class="panel-body">
                     <table class="table">
                        <thead>
                           <tr>
                              <?php foreach($header as $val): ?>
                                 <th><?=$val; ?></th>
                              <?php endforeach; ?>
                           </tr>
                        </thead>
                        <tbody>
                              <?php foreach($list as $val): ?>
                              <tr>
                                 <td><?=rand(1000,2000); ?></td>
                                 <td><?=alternator('California','Los Vegas','Nepal','Florida','Japan'); ?></td>
                                 <td><?=alternator('Joseph R. Greenfield','Bashudev Paudel','Jhon Doe','Baby Doe','Suman Wagle'); ?></td>
                                 <td><?=alternator('Yes','No'); ?></td>
                                 <td><a href="<?=site_url('main/system_overview/'.$link.'/'.$val->Employee); ?>" class="btn btn-sm btn-danger">View</a></td>
                              </tr>
                              <?php endforeach; ?>
                        </tbody>
                     </table>
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