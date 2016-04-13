<?php 
//echo "<pre>" ;print_r($menu);die;
?>

<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>View Leisure Packages<span>.</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
            <li><a href="index.php/Cms/index">Minimal</a></li>
            <li><a href="index.php/Cms/index">Forms</a></li>
            <li class="active">Leisure Packages</li>
         </ol>
      </div>
   </div>
   <!-- /page header -->
   <!-- content main container -->
   <div class="main">
      <!-- row -->
      <div class="row">
         <!-- col 12 -->
         <div class="col-md-8">
            <!-- tile -->
            <section class="tile color transparent-black">
               <!-- tile header -->
               <div class="tile-header">
                  <h1><strong>View</strong> Packages</h1>
                  <div class="controls">
                     <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                     <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                     <a href="#" class="remove"><i class="fa fa-times"></i></a>
                  </div>
               </div>
               <!-- tile header -->
               <!-- tile body -->
               <div class="tile-body">
                  <form class="form-horizontal" role="form" parsley-validate=""   id="basicvalidations" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="p_name" class="col-sm-4 control-label">Packages Image </label>
                        <img src="<?php echo $menu["Packages_image"]; ?>"class="img-thumbnail" alt="Cinque Terre" width="330" height="200" alt="" />
                     </div>
					<div class="form-group">
                        <label for="p_name" class="col-sm-4 control-label">Packages Name </label>
						 <div class="col-sm-8">
                           <label for="p_name" class="col-sm-8"><?php echo $menu["Packages_Name"]; ?></label>
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="input05" class="col-sm-4 control-label">Package Details Titel</label>
                        <div class="col-sm-8">
                            <label for="input05" class="col-sm-8"><?php echo $menu["Package_Details_titel"]; ?></label>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label for="city_name" class="col-sm-4 control-label">Package Entitlement</label>
                        <div class="col-sm-8">
                          <label for="city_name" class="col-sm-8"><?php echo $menu["Package_Entitlement"]; ?></label>
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label">Package Bokking Process</label>
                        <div class="col-sm-8">
                              <label for="p_cost" class="col-sm-8"><?php echo $menu["Package_Bokking_Process"]; ?></label>
                        </div>
                     </div>
					
						 <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label">Package Cast</label>
                        <div class="col-sm-8">
                              <label for="p_cost" class="col-sm-8"><?php echo $menu["Package_Cast"]; ?></label>
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label">	Inclusion</label>
                        <div class="col-sm-8">
                              <label for="p_cost" class="col-sm-8"><?php echo $menu["Inclusion"]; ?></label>
                        </div>
                     </div>
                    <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label">	Exclusion</label>
                        <div class="col-sm-8">
                              <label for="p_cost" class="col-sm-8"><?php echo $menu["Exclusion"]; ?></label>
                        </div>
                     </div>
					  <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label">	Location name</label>
                        <div class="col-sm-8">
                              <label for="p_cost" class="col-sm-8"><?php echo $menu["Location_name"]; ?></label>
                        </div>
                     </div>
                     <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                         <a href="index.php/Cms/View_Package_table">  <button type="Button" class="btn btn-primary">Go Back</button></a>
                           
                        </div>
                     </div>
                  </form>
               </div>
               <!-- /tile body -->
            </section>
            <!-- /tile -->
         </div>
         <!-- /col 6 -->
         <!-- col 12 -->
         <div class="col-md-6">
            <!-- tile -->
            <!-- /tile -->
         </div>
         <!-- /col 6 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /content container -->
</div>
