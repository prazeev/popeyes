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
   <link rel="stylesheet" href="<?=base_url('vendor/spinkit/css/spinkit.css'); ?>">
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
                        <li class="">
                           <a href="<?=site_url('main/index'); ?>" title="Home">
                              <span>Corporate Command</span>
                           </a>
                        </li>
                        <li class="active">
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
               <small>System Overview</small>
            </h3>
            <div class="row">
               <div class="col-lg-5 col-md-5 col-sm-12" style="display: none;" id="left-row">
               <!-- video section -->
                  <div class="panel widget panel-danger">
                     <div class="panel-heading" style="min-height: 55px">
                        <div class="col-md-7"><strong>Video Playback</strong></div>
                        <div class="col-md-5" id="video_angle"></div>
                     </div>
                     <div class="panel-body" style="min-height: 250px" align="center" id="video_playback"></div>
                     <div class="panel-footer text-center">
                       <button class="btn btn-danger fastback"><i class="fa fa-fast-backward"></i></button>
                       <button class="btn btn-success pause"><i class="fa fa-pause"></i></button>
                       <button class="btn btn-primary play" disabled><i class="fa fa-play"></i></button>
                       <button class="btn btn-danger stop" disabled><i class="fa fa-stop"></i></button>
                       <button class="btn btn-danger fastfront"><i class="fa fa-fast-forward"></i></button>
                     </div>
                  </div>
               <!-- information section -->
                  <div class="panel widget panel-danger">
                     <div class="panel-body table-responsive">
                        <table class="table" width="100%">
                           <tbody>
                              <tr>
                                 <td><strong>Cashier</strong></td>
                                 <td id="cashier">Bashudev Paudel</td>
                              </tr>
                              <tr>
                                 <td><strong>Register#:</strong></td>
                                 <td id="register">3</td>
                              </tr>
                              <tr>
                                 <td><strong>Date</strong></td>
                                 <td id="date"><?=Date('h:m:s A'); ?>-12:10:06 PM</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-md-12 col-sm-12" id="right-row">
                  <div id="store-list">
                     <div class="col-md-4">
                        <a class="btn btn-block btn-lg btn-danger" href="<?=site_url('main/system_overview/store/44'); ?>">Store 44</a>
                     </div>
                     <div class="col-md-4">
                        <a class="btn btn-block btn-lg btn-danger" href="<?=site_url('main/system_overview/store/43'); ?>">Store 43</a>
                     </div>
                     <div class="col-md-4">
                        <a class="btn btn-block btn-lg btn-danger" href="<?=site_url('main/system_overview/store/44'); ?>">Store 44</a>
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
                                    <th>#ID</th>
                                    <th>Store</th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Employee</th>
                                    <th>Total</th>
                                 </tr>
                              </thead>
                              <tbody class="trans_list">
                                 <?php
                                 foreach ($Transaction as $key => $value): ?>
                                 <tr class="data-row" data-val="<?=$value->Trans; ?>">
                                    <td><?=$value->Trans; ?></td>
                                    <td class="text-nowrap">
                                       <?=$value->Store_Number; ?>
                                    </td>
                                    <td><?=nice_date($value->Date,'j M, Y'); ?></td>
                                    <td>
                                       <?=nice_time($value->Time_Start); ?>
                                    </td>
                                    <td><?=nice_time($value->Time_End); ?>
                                    </td>
                                    <td>
                                    <?=$value->Employee; ?>
                                    </td>
                                    <td>
                                    &#xFF04;<?=number_format($value->Order_Total, 2); ?>
                                    </td>
                                 </tr>
                                 <?php
                                 endforeach;
                                 ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-danger" style="display: none;" id="right-row-info">
                     <div class="panel-heading"><h4>Receipt</h4></div>
                     <div class="panel-body">
                        <div class="treeview"></div>
                        <div class="row" id="bottom_data"></div>
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
   function spin(selector) {
      var data =               '<div class="sk-three-bounce">\
                           <div class="sk-child sk-bounce1"></div>\
                           <div class="sk-child sk-bounce2"></div>\
                           <div class="sk-child sk-bounce3"></div>\
                        </div>';
      $(selector).html(data);
}
function make_tree(tree) {
   $('.treeview').treeview({data: tree,levels: 1,selectedBackColor: "#FFFFFF", selectedColor: "#000"});
}
function extract_data(data) {
   data = data.split(',');
   if(data[data.length - 1] == '')
      data.splice(data.length - 1, 1);
   return data;
}
function get_data(data, i) {
   if(data == 'n/a')
      return '';
   data = extract_data(data);
   if(data.length > i) {
      return data[i];
   }
   else
      return '';
}
function add_text(selector,data) {
   spin(selector);
   $(selector).html('');
   for(var i = 0; i< data.length; i++) {
      // console.log(data[i])
      $(selector).append('<div class="col-md-12 single_item">'+data[i]+'</div>');
   }
}
function rand_num(max = 10) {
    return Math.floor(Math.random() * max) + 1;
  }

  var rand = rand_num(20000);
    $(document).on("click",".data-row", function() {
      spin('#video_playback');
      $('#video_angle').html('')
      spin('.treeview');
      var data = $(this).data('val');
      var trans = data;
      $(".data-row").not(this).remove();
      panelaction('show');
      $.ajax({url: "<?=site_url('main/data_list/"+data+"'); ?>", success: function(result){
         var bottom_data = [];
         rand = rand_num(20000);
         $.each(result, function(i, val) {
            // Video playback data goes here
            $.ajax({url: "<?=site_url('main/video_data/"+val.Store_Number+"'); ?>",  type: 'POST', data: {
               'start': val.Time_Start,
               'end': val.Time_End,
               'date': val.Date
            }, success: function(vid) {
                  $.each(vid, function(vid_id, video) {
                     // Play with video
                     if(video.length == 0) {
                        var html = "Video footage not found!";
                     }
                     else {
                        // // CAmera angles
                        $.ajax({url: "<?=site_url('main/get_camera_by_store/"+val.Store_Number+"'); ?>",
                           success: function(angle) {
                              var video_angle = '<select name="change_angle" class="form-control">';
                              $.each(angle, function(z_id, zm_data) {
                                 if(z_id == 0)
                                    video_angle += "<option value='"+zm_data.zm+"%"+trans+"' selected>"+zm_data.cname+"</option>";
                                 else
                                    video_angle += "<option value='"+zm_data.zm+"%"+trans+"'>"+zm_data.cname+"</option>";
                                 console.log(video_angle)
                              });
                                 video_angle += "</select>";
                                 $("#video_angle").html(video_angle);
                           }
                        });
                        // Add video andles
                        var html = '<img id="evtStream" class="img-responsive" src="<?=PATH;?>zm/cgi-bin/nph-zms?source=event&amp;mode=jpeg&amp;event='+video[0].Event.Id+'&amp;frame=1&amp;scale=100&amp;rate=100&amp;maxfps=25&amp;replay=single&amp;connkey='+rand+'&amp;rand='+rand+'" alt="Event-1">';
                     }
                     // console.log(html)
                     $('#video_playback').html(html);
                     return false;
                  });
            },
            error: function(request, status, error) {
               console.log(request.responseText);
            }});
            // Item filter
            var item = extract_data(val.Item_Name);
            var tree = [];
            for(var j=0; j<item.length; j++) {
               if(get_data(val.Item_QTY, j))
                  var cap = get_data(val.Item_QTY, j)+"&nbsp;&nbsp;"+item[j]+" <span class='pull-right'> $"+get_data(val.Item_Price, j)+"</span>";
               else
                  var cap = get_data(val.Item_QTY, j)+"&nbsp;&nbsp;"+item[j]+" <span class='pull-right'> "+get_data(val.Item_Price, j)+"</span>";
               var itm = {
                  text: cap
               };
               tree.push(itm);
               // console.log(cap);
            }
            // Making total data receipt
             // total data
               var sub_total = "&nbsp;&nbsp;&nbsp;Sub Total <span class='pull-right'> $"+val.Subtotal+"</span>";
               bottom_data.push(sub_total);
               //Tax
               var tax = "&nbsp;&nbsp;&nbsp;Tax <span class='pull-right'> $"+val.Total_Tax+"</span>";
               bottom_data.push(tax);
               //Total Discount
               var total_discount = "&nbsp;&nbsp;&nbsp;Discount <span class='pull-right'> $"+val.Total_Discount+"</span>";
               bottom_data.push(total_discount);
               //Total
               var sub_total = "&nbsp;&nbsp;&nbsp;Total <span class='pull-right'> $"+val.Order_Total+"</span>";
               bottom_data.push(sub_total);
               //Tender
               var tender_type = "&nbsp;&nbsp;&nbsp;Tender <span class='pull-right'> $"+val.Tender_Type+"</span>";
               bottom_data.push(tender_type);
               add_text('#bottom_data',bottom_data);
            make_tree(tree);
         });




         // Mking tree for receipt
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
      }});
    });
    $(document).on("click","#clearpanel", function() {
      spin('.trans_list');
      $.ajax({url: "<?=site_url('main/trans_list'); ?>", success: function(result){
        $(".trans_list").html(result);
      }});
      panelaction('hide');
    });
    $(document).on('change', '[name=change_angle]', function() {
      var data = $(this).find(":selected").val().split('%');
      spin('#video_playback');
      $.ajax({
         url: "<?=site_url('main/video_data_change/"+data[0]+"/"+data[1]+"'); ?>",
         success: function(video) {
            $.each(video, function(v,vi) {
               console.log(vi);
               rand = rand_num(100000);
               if(video.length == 0) {
                  var html = "Video footage not found!";
                  $('#video_playback').html(html);
               } else {
                  var html = '<img id="evtStream" class="img-responsive" src="<?=PATH;?>zm/cgi-bin/nph-zms?source=event&amp;mode=jpeg&amp;event='+vi[0].Event.Id+'&amp;frame=1&amp;scale=100&amp;rate=100&amp;maxfps=25&amp;replay=single&amp;connkey='+rand+'&amp;rand='+rand+'" alt="Event-1">';
                  $('#video_playback').html(html);
               }
               return false;
            })
         }
      })
    });
  
$(document).on('nodeSelected',".treeview", function(e, node){
     var NodeID=node.nodeId;

    });

})(window, document, window.jQuery);



</script>

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
                        connkey: rand,
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
                        connkey: rand,
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
                        connkey: rand,
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
                        connkey: rand,
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
                        connkey: rand,
                        command: CMD_PAUSE
                  }, function(json, textStatus) {
         });
      });

   </script>

</body>

</html>