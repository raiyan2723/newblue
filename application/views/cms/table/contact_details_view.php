<?php 
//echo "<pre>" ;print_r($menu);die;
?>

<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>Contact Details<span>.</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
            
            <li class="active">Contact Details</li>
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
                  <h1><strong>Contact</strong>Details</h1>
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
                        <label for="Name" class="col-sm-4 control-label">Name </label>
						 <div class="col-sm-8">
                           <label for="Name" class="col-sm-8"><?php echo $menu["Name"]; ?></label>
                        </div>
                     </div>
					<div class="form-group">
                        <label for="p_name" class="col-sm-4 control-label">Email</label>
						 <div class="col-sm-8">
                           <label for="p_name" class="col-sm-8"><?php echo $menu["email"]; ?></label>
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="Subject" class="col-sm-4 control-label">Subject</label>
                        <div class="col-sm-8">
                          <label for="subject" class="col-sm-8"><?php echo $menu["subject"]; ?></label>
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="Message" class="col-sm-4 control-label">Message</label>
                        <div class="col-sm-8">
                              <label for="Message" class="col-sm-8"><?php echo $menu["message"]; ?></label>
                        </div>
                     </div>
					
					
                     <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                         <a href="index.php/User/contact_user">  <button type="Button" class="btn btn-primary">Go Back</button></a>
                           
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
