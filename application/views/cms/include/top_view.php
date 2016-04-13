<body class="bg-1">
   <!-- Preloader -->
   <div class="mask">
      <div id="loader"></div>
   </div>
   <!--/Preloader -->
   <!-- Wrap all page content here -->
   <div id="wrap">
   <!-- Make page fluid -->
   <div class="row">
   <!-- Fixed navbar -->
   <div class="navbar navbar-default navbar-fixed-top navbar-transparent-black mm-fixed-top collapsed" role="navigation" id="navbar">
   <!-- Branding -->
   <div class="navbar-header col-md-2">
      <a class="navbar-brand" href="index.html">
      <strong>SUPER</strong>ADMIN
      </a>
      <div class="sidebar-collapse">
         <a >
         <i class="fa fa-bars"></i>
         </a>
      </div>
   </div>
   <!-- Branding end -->
   <!-- .nav-collapse -->
   <div class="navbar-collapse">
   <!-- Page refresh -->
   <ul class="nav navbar-nav refresh">
      <li class="divided">
         <a  class="page-refresh"><i class="fa fa-refresh"></i></a>
      </li>
   </ul>
   <!-- /Page refresh -->
   <!-- Search -->
   
   <!-- Search end -->
   <!-- Quick Actions -->
   <ul class="nav navbar-nav quick-actions">
    
     
     
      <li class="dropdown divided user" id="current-user">
         <div class="profile-photo">
            <img src="assets/images/skin1-logo.png"  width="100px"  height="35px" alt />
         </div>
         <a class="dropdown-toggle options" data-toggle="dropdown" >
         Admin <i class="fa fa-caret-down"></i>
         </a>
         <ul class="dropdown-menu arrow settings">

           

            <li>
               <a href="<?php echo base_url()?>index.php/login/logout"><i class="fa fa-power-off"></i> Logout</a>
            </li>
         </ul>
      </li>
      <li>
         <a><i ></i></a>
      </li>
   </ul>
   <!-- /Quick Actions -->
