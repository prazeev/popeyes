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
                          <!--  <div class="user-block-picture">
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
                        <li class=" ">
                           <a href="<?=site_url('main/index'); ?>" title="Home">
                              <span>Corporate Command</span>
                           </a>
                        </li>
                        <li class="active">
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
            <h3>Dashboard
               <small>Edit Camera</small>
            </h3>
            <div class="row">
               <div class="col-lg-12">
                  <form method="post" data-parsley-validate="" novalidate="" action="<?=site_url('main/edit_camera_form'); ?>">
                     <!-- START panel-->
                     <div class="panel panel-default">
                        <div class="panel-heading">
                           <div class="panel-title">Edit Camera (<?=$camera->monitor->Monitor->Name;?>)<span class="pull-right">Camera ID: <?=$camera->monitor->Monitor->Id;?></span></div>
                        </div>
                        <div class="panel-body">
                           <div class="col-lg-12">
                           <div class="form-group">
                              <label class="control-label">Camera name *</label>
                              <input name="name" required="" class="form-control" type="text" placeholder="Camera name (eg. Demo)" value="<?=$camera->monitor->Monitor->Name;?>">
                              <input name="Id" required="" class="form-control" type="hidden" value="<?=$camera->monitor->Monitor->Id;?>">
                           </div>
                           </div>
                           <div class="col-lg-6">
                           <div class="form-group">
                              <label class="control-label">Function *</label>
                              <select id="function-select" class="form-control" name="function">
                                 <option value="Mocord">Mocord</option>
                                 <option value="Modect">Modect</option>
                                 <option value="Monitor">Monitor</option>
                                 <option value="Record">Record</option>
                              </select>
                           </div>
                           </div>
                           <div class="col-lg-6">
                           <div class="form-group">
                              <label class="control-label">Protocol *</label>
                              <select name="protocol" class="form-control">
                                 <option value="rtsp">Rtsp</option>
                              </select>
                           </div>
                           </div>
                           <div class="col-lg-8">
                           <div class="form-group">
                              <label class="control-label">Path (full)*</label>
                              <input name="path" required="" class="form-control" type="text" placeholder="Full path (eg. rtsp://admin:admin@192.168.1.168/mainStream)" value="<?=$camera->monitor->Monitor->Path;?>">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Port *</label>
                              <input name="port" required="" class="form-control" type="text" placeholder="Port (eg. 80)" value="<?=$camera->monitor->Monitor->Port;?>">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Width</label>
                              <input name="width" required="" class="form-control" type="text" placeholder="Width (eg. 1280)" value="<?=$camera->monitor->Monitor->Width;?>">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Height</label>
                              <input name="height" required="" class="form-control" type="text" placeholder="Height (eg. 720)" value="<?=$camera->monitor->Monitor->Height;?>">
                           </div>
                           </div>
                           <div class="col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Colours</label>
                              <input name="colours" required="" class="form-control" type="text" value="4" readonly="">
                           </div>
                           </div>

                           <div class="col-lg-12">
                           <div class="form-group">
                              <label class="control-label location">Location *</label>
                              <input name="location" required="" class="form-control" type="text" placeholder="Location (eg. Area)" id="location" value="<?=$location;?>">
                           </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="control-label">Longitude *</label>
                                 <input name="longitude" required="" class="form-control" type="text" placeholder="Longitude" readonly="readonly">
                              </div>
                           </div>
                           <div class="col-lg-6">
                              <div class="form-group">
                                 <label class="control-label">Latitude *</label>
                                 <input name="latitude" required="" class="form-control" type="text" placeholder="Latitude" readonly="readonly">
                              </div>
                           </div>
                           
                           <div class="col-md-12">
                              <div class="form-group">
                                 <div id="map1" style="min-height: 400px"></div>
                              </div>
                           </div>
                           <div class="col-lg-12">
                           <div class="required">* Required fields</div>
                           </div>
                        </div>
                        <div class="panel-footer">
                           <button type="submit" class="btn btn-primary">Edit Camera</button>
                           <button type="submit" class="btn btn-danger">Clear</button>
                        </div>
                     </div>
                     <!-- END panel-->
                  </form>
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
   <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key= AIzaSyCUZfyHvC7jE-yR40zs5w5a04rRJCUdncU"></script>
   <script src="<?=base_url('js/locationpicker.jquery.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>
   <script type="text/javascript">
       $('select').select2();
       <?=$this->session->flashdata('message'); ?>
  $(function() {
   $('#map1').locationpicker({
      location: {
         latitude: <?=$latitude; ?>,
         longitude: <?=$longitude; ?>
      },
      enableAutocomplete: true,
      inputBinding: {
         latitudeInput: $('[name=latitude]'),
         longitudeInput: $('[name=longitude]'),
         locationNameInput: $('#location')
      },
      zoom: 12
   });
});
   </script>
</body>

</html>