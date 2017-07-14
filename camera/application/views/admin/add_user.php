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
   <!-- SELECT2-->
   <link rel="stylesheet" href="<?=base_url('vendor/select2/dist/css/select2.css'); ?>">
   <link rel="stylesheet" href="<?=base_url('vendor/select2-bootstrap-theme/dist/select2-bootstrap.css'); ?>"> 
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
            </div>
            <!-- END Nav wrapper-->
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
                          <div class="user-block-picture">
                              <div class="user-block-status">
                                 <img src="<?=base_url('img/user/02.jpg'); ?>" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                                 <div class="circle circle-success circle-lg"></div>
                              </div>
                           </div>
                           <div class="user-block-info">
                              <span class="user-block-name"><?=$user->fullname; ?></span>
                              <span class="user-block-role"><?=$user->location; ?></span>
                           </div>
                        </div>
                     </div>
                  </li>
                  <!-- END user info-->
                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading ">
                     <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
                  </li>
                  <li class="active">
                     <a href="#dashboard" title="Home" data-toggle="collapse">
                        <em class="icon-speedometer"></em>
                        <span data-localize="sidebar.nav.HOME">Dashboard</span>
                     </a>
                     <ul id="dashboard" class="nav sidebar-subnav collapse">
                        <li class="sidebar-subnav-header">Dashboard</li>
                        <li class=" ">
                           <a href="<?=site_url('admin/index'); ?>" title="Home">
                              <span>Home</span>
                           </a>
                        </li>
                        <li class="active">
                           <a href="#users" title="Users" data-toggle="collapse">
                              <span>Users</span>
                           </a>
                           <ul id="users" class="nav sidebar-subnav collapse">
                              <li class="active">
                                 <a href="<?=site_url('admin/add_user'); ?>" title="Add User">
                                    <span>Add User</span>
                                 </a>
                              </li>
                              <li class=" ">
                                 <a href="<?=site_url('admin/view_users'); ?>" title="View Users">
                                    <span>View Users</span>
                                 </a>
                              </li>
                           </ul>
                        </li>
                        <li class=" ">
                           <a href="<?=site_url('auth/logout'); ?>" title="Locate Camera">
                              <span>Logout</span>
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
            <h3>Control Panel
               <small>Add User</small>
            </h3>
            <div class="row">
               <div class="col-md-8">
                  <div class="panel panel-info">
                     <div class="panel-heading">Add user*</div>
                     <div class="panel-body">
                        <form method="post" action="<?=site_url('admin/add_user_form'); ?>">
                           <div class="col-md-6">
                              <div class="form-group has-feedback">
                                 <label for="fullname">Full Name*</label>
                                 <input id="fullname" placeholder="Enter Fullname" autocomplete="off" required="" class="form-control" type="text" name="fullname">
                                 <span class="fa fa-users form-control-feedback text-muted red"></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group has-feedback">
                                 <label for="location">Location * (store id)</label>
                                 <input id="location" placeholder="Enter Storename/Location" autocomplete="off" required="" class="form-control" type="text" name="location">
                                 <span class="fa fa-location-arrow form-control-feedback text-muted red"></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group has-feedback">
                                 <label for="username">Username*</label>
                                 <input id="username" placeholder="Enter Username" autocomplete="off" required="" class="form-control" type="text" name="username">
                                 <span class="fa fa-user form-control-feedback text-muted red"></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group has-feedback">
                                 <label for="password">Password*</label>
                                 <input id="password" placeholder="Enter Password" autocomplete="off" required="" class="form-control" type="password" name="password">
                                 <span class="fa fa-key form-control-feedback text-muted red"></span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="type">Role*</label>
                                 <select id="type" class="form-control" name="type" name="type">
                                    <option value="1">Store Manager</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                           <label for="btn-group">&nbsp;</label><br>
                              <div class="btn-group">
                                 <button type="submit" class="btn btn-md btn-success">Submit </button>
                                 <button type="submit" class="btn btn-md btn-danger"> Reset</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <?php
               include "include/leftbar-c.php";
               ?>
            </div>
         </div>
      </section>
      <!-- Page footer-->
      <footer>
         <span>&copy; <?=Date('Y');?> Popeyes Control Panel - Powered by XG. Developed by - Bashudev Paudel</span>
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
   <!-- SELECT2-->
   <script src="<?=base_url('vendor/select2/dist/js/select2.js'); ?>"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <script src="<?=base_url('vendor/sweetalert/dist/sweetalert.min.js'); ?>"></script>
   <!-- JQUERY UI-->
   <script src="<?=base_url('vendor/jquery-ui/jquery-ui.js'); ?>"></script>
   <script src="<?=base_url('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.min.js'); ?>"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="<?=base_url('js/app.js'); ?>"></script>
   <script type="text/javascript">

       $('select').select2();
        <?=$this->session->flashdata('message'); ?>
   </script>
</body>

</html>