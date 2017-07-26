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
   <style type="text/css">
      .hidden {
         display: none;
      }
   </style>
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
            <h3>Duck Donuts
               <small>System Overview</small>
            </h3>
            <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-12" style="display: none;" id="left-row">
               <!-- video section -->
                  <div class="panel widget panel-danger">
                     <div class="panel-heading"><h4>Video Playback</h4></div>
                     <div class="panel-body" style="min-height: 300px"></div>
                  </div>
               <!-- information section -->
                  <div class="panel widget panel-danger">
                     <div class="panel-body table-responsive">
                        <table class="table" width="100%">
                           <tbody>
                              <tr>
                                 <td><strong>Manager Approval</strong></td>
                                 <td>Bashudev Paudel</td>
                              </tr>
                              <tr>
                                 <td><strong>Register#:</strong></td>
                                 <td>3</td>
                              </tr>
                              <tr>
                                 <td><strong>Date</strong></td>
                                 <td><?=Date('h:m:s A'); ?>-12:10:06 PM</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12" id="right-row">
                  <div id="store-list">
                     <div class="col-md-4">
                        <button class="btn btn-block btn-lg btn-danger">Store 1</button>
                     </div>
                     <div class="col-md-4">
                        <button class="btn btn-block btn-lg btn-danger">Store 2</button>
                     </div>
                     <div class="col-md-4">
                        <button class="btn btn-block btn-lg btn-danger">Store 3</button>
                     </div>
                  <br><br><br>
                  </div>
               <div class="col-md-12">
                  <div class="panel b">
                     <div class="panel-heading clearpanel" style="display: none;">
                        <button class="btn btn-danger" id="clearpanel">Clear</button>
                     </div>
                     <div class="panel-body">
                        <div class="table-responsive">
                           <table class="table table-striped table-hover">
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
                                 <tr class="data-row" data-val="20">
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
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-danger" style="display: none;" id="right-row-info">
                     <div class="panel-heading"><h4>Receipt</h4></div>
                     <div class="panel-body">
                        <div class="treeview"></div>
                     </div>
                  </div>
               </div>
               </div>
            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer class="">
         <div class="container-fluid">
            <span>&copy; <?=Date('Y'); ?> powered by XG for Duck Donuts - All Rights Reserved - Secure Access</span>
         </div>
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
   <script src="<?=base_url('js/treeview.js'); ?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>

   <script type="text/javascript">
        <?=$this->session->flashdata('message'); ?>

  $(function(){
   function panelaction(action) {
      if(action == 'show') {
         $('#right-row').removeClass('col-lg-12').removeClass('col-md-12').addClass('col-md-7').addClass('col-lg-7');
         $('#right-row-info').slideDown();
         $('#left-row').fadeIn();
         $('#store-list').slideUp();
         $('.clearpanel').slideDown();
      }
      if(action == 'hide') {
       $('#right-row').addClass('col-lg-12').addClass('col-md-12').removeClass('col-md-7').removeClass('col-lg-7');
         $('#left-row').slideUp();  
         $('#store-list').slideDown();
         $('#right-row-info').slideUp();
         $('.clearpanel').hide();
      }
   }
    $(document).on("click",".data-row", function() {
      var data = $(this).data('val');
      panelaction('show');
    });
    $(document).on("click","#clearpanel", function() {
      panelaction('hide');
    });
    var tree = [
  {
    text: "Parent 1",
    nodes: [
      {
         selectable: false,
        text: "Donutes: <span class='pull-right'>20.20$</span>"
      }
    ]
  },
  {
    text: "Parent 2",
    nodes: [
      {
         selectable: false,
         text: "Child 2"
      }
    ]
  },
  {
    text: "Parent 3"
  },
  {
    text: "Parent 4"
  },
  {
    text: "Parent 5"
  }
];
$('.treeview').treeview({data: tree,levels: 1,selectedBackColor: "#FFFFFF", selectedColor: "#000"});
$(document).on('nodeSelected',".treeview", function(e, node){
     var NodeID=node.nodeId;

    });

})(window, document, window.jQuery);


</script>
</body>

</html>