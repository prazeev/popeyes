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
                           <!-- <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="<?=base_url('img/user/02.jpg'); ?>" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
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
                  <li class="active">
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
                        <li class="active">
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
            <h3>Dashboard
               <small>Event View</small>
               <?php
               $e = json_decode($this->curl->simple_get(SERVER."monitors/{$event->MonitorId}.json"));
               ?>
            </h3>
            <div class="row">
               <div class="col-lg-12">
                  <div class="panel panel-info">
                     <div class="panel-heading">
                        <h3><?=$e->monitor->Monitor->Name?>(ID: <?=$e->monitor->Monitor->Id?>)</h3>
                     </div>
                     <div class="panel-body">
                        <img id="evtStream" class="img-responsive" src="<?=PATH?>/zm/cgi-bin/nph-zms?source=event&mode=jpeg&event=<?=$event->Id; ?>&frame=1&scale=100&rate=100&maxfps=25&replay=all&connkey=<?php $rand=rand(100000,9999999); echo $rand; ?>&rand=1491154508" alt="<?=$event->Name; ?>"><br>
                     </div>
                     <div class="panel-footer text-center">
                       <button class="btn btn-danger fastback"><i class="fa fa-fast-backward"></i></button>
                       <button class="btn btn-success pause"><i class="fa fa-pause"></i></button>
                       <button class="btn btn-primary play" disabled><i class="fa fa-play"></i></button>
                       <button class="btn btn-danger stop" disabled><i class="fa fa-stop"></i></button>
                       <button class="btn btn-danger fastfront"><i class="fa fa-fast-forward"></i></button>
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
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>
   <script type="text/javascript">
   var CMD_NONE = 0;
   var CMD_PAUSE = 1;
   var CMD_PLAY = 2;
   var CMD_STOP = 3;
   var CMD_FASTFWD = 4;
   var CMD_SLOWFWD = 5;
   var CMD_SLOWREV = 6;
   var CMD_FASTREV = 7;
   var CMD_ZOOMIN = 8;
   var CMD_ZOOMOUT = 9;
   var CMD_PAN = 10;
   var CMD_SCALE = 11;
   var CMD_PREV = 12;
   var CMD_NEXT = 13;
   var CMD_SEEK = 14;
   var CMD_QUERY = 99;

   var SCALE_BASE = 100;
        <?=$this->session->flashdata('message'); ?>
        var thisUrl = "<?=PATH?>zm/index.php";
        // var AJAX_TIMEOUT = 3000;
        // var streamReq = new Request.JSON( { url: thisUrl, method: 'post', timeout: AJAX_TIMEOUT, link: 'chain', onSuccess: getCmdResponse } );
        // var streamParms = "view=request&request=stream&connkey="+<?=$rand; ?>;

        

        $(".pause").click(function() {
         $(".pause").attr('disabled','');
         $(".play").removeAttr('disabled');
         $(".fastback").removeAttr('disabled');
         $(".fastfront").removeAttr('disabled');
         $(".stop").removeAttr('disabled');
         $.getJSON(thisUrl, 
                     {
                        view: 'request',
                        request: 'stream',
                        connkey: '<?=$rand?>',
                        command: CMD_PAUSE
                  }, function(json, textStatus) {
         });
        });

        $(".play").click(function() {
         $(".play").attr('disabled', '');
         $(".pause").removeAttr('disabled');
         $(".fastback").removeAttr('disabled');
         $(".fastfront").removeAttr('disabled');
         $(".stop").removeAttr('disabled');

         $.getJSON(thisUrl, 
                     {
                        view: 'request',
                        request: 'stream',
                        connkey: '<?=$rand?>',
                        command: CMD_PLAY
                  }, function(json, textStatus) {
         });
        });

        $(".fastfront").click(function() {
         $(".pause").attr('disabled', '');
         $(".play").attr('disabled','');
         $(".fastback").attr('disabled', '');
         $(".fastfront").removeAttr('disabled');
         $(".stop").removeAttr('disabled');
         $.getJSON(thisUrl, 
                     {
                        view: 'request',
                        request: 'stream',
                        connkey: '<?=$rand?>',
                        command: CMD_FASTFWD
                  }, function(json, textStatus) {
                     console.log(textStatus);
         });
        });

        $(".fastback").click(function() {
         $(".pause").attr('disabled', '');
         $(".play").attr('disabled','');
         $(".fastfront").attr('disabled', '');
         $(".fastback").removeAttr('disabled');
         $(".stop").removeAttr('disabled');
         $.getJSON(thisUrl, 
                     {
                        view: 'request',
                        request: 'stream',
                        connkey: '<?=$rand?>',
                        command: CMD_FASTREV
                  }, function(json, textStatus) {
         });
        });

         $(".stop").click(function() {
         $(".stop").attr('disabled', '');
         $(".play").removeAttr('disabled');
         $(".fastfront").removeAttr('disabled');
         $(".fastback").removeAttr('disabled');
         $(".pause").attr('disabled');
         $.getJSON(thisUrl, 
                     {
                        view: 'request',
                        request: 'stream',
                        connkey: '<?=$rand?>',
                        command: CMD_PAUSE
                  }, function(json, textStatus) {
         });
      });

   </script>
</body>

</html>