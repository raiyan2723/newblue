<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>Update About Details<span>.</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
			<li><a href="index.php/Cms/View_Package_table">Table</a></li>
            <li class="active">Update About</li>
         </ol>
      </div>
   </div>
   <!-- /page header -->
   <!-- content main container -->
   <div class="main">
      <!-- row -->
      <div class="row">
         <!-- col 12 -->
         <div class="col-md-6">
            <!-- tile -->
            <section class="tile color transparent-black">
               <!-- tile header -->
               <div class="tile-header">
                  <h1><strong>Update</strong> About</h1>
                  <div class="controls">
                     <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                     <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                     <a href="#" class="remove"><i class="fa fa-times"></i></a>
                  </div>
               </div>
               <!-- tile header -->
               <!-- tile body -->
               <div class="tile-body">
                  <form class="form-horizontal" role="form" parsley-validate=""  action ="<?php echo base_url();?>index.php/Action/Update_about_data/<?php echo $employee['about_id']?>" id="basicvalidations" method="POST" enctype="multipart/form-data">
                     <div class="form-group transparent-editor">
                        <label for="p_name" class="col-sm-4 control-label">	ABOUT BLUE SKY EXCURSIONS *</label>
                        <div class="col-sm-8">
                           <textarea type="text"  class="form-control" name="Blue_Sky" id="input06"><?php echo strip_tags($employee["blue_sky"]) ;?></textarea>
                        </div>
                     </div>
					 <div class="form-group transparent-editor">
                        <label for="p_name" class="col-sm-4 control-label">	ABOUT BLUE SKY EXCURSIONS *</label>
                        <div class="col-sm-8">
                           <textarea type="text"  class="form-control" name="Mission" id="input07"><?php echo strip_tags($employee["mission"]) ;?></textarea>
                        </div>
                     </div>
					 
                   
					 
					 <!---
					   <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Category (Silver / Gold) *</label>
                        <div class="col-sm-8" id="selectbox">
                           <select class="chosen-select chosen-transparent form-control parsley-validated"  name="category" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
                              <option value="">Please choose</option>
                              <option value="Silver">Silver</option>
                              <option value="Gold">Gold</option>
                             
                           </select>
                        </div>
                     </div> -->
					 
					 
                     <div class="form-group form-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="reset" class="btn btn-default">Reset</button>
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
