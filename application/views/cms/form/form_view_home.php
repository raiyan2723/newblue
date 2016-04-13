<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>Add Home Packages<span>.</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
            <li><a href="index.php/Cms/index">Minimal</a></li>
            <li><a href="form-elements.html">Forms</a></li>
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
         <div class="col-md-6">
            <!-- tile -->
            <section class="tile color transparent-black">
               <!-- tile header -->
               <div class="tile-header">
                  <h1><strong>Add</strong> Packages</h1>
                  <div class="controls">
                     <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                     <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                     <a href="#" class="remove"><i class="fa fa-times"></i></a>
                  </div>
               </div>
               <!-- tile header -->
               <!-- tile body -->
               <div class="tile-body">
                  <form class="form-horizontal" role="form" parsley-validate=""  action ="<?php echo base_url();?>index.php/Cms/insert_home_packages" id="basicvalidations" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="p_name" class="col-sm-4 control-label">Packages Name *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="p_name" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                        </div>
                     </div>
			
					<div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Country Name*</label>
                        <div class="col-sm-8" id="selectbox">
                           <select class="chosen-select chosen-transparent form-control parsley-validated"  name="country_name" id="input07" parsley-trigger="change" parsley-required="true" parsley-error-container="#selectbox">
                              <option value="">Please choose</option>
                              <option value="Thailand">Thailand</option>
                              <option value="MALAYSIA">MALAYSIA</option>
							   <option value="SINGAPORE">SINGAPORE</option>
                             
                           </select>
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label for="city_name" class="col-sm-4 control-label">City Name *</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control parsley-validated" name="city_name" id="fullname" parsley-trigger="change" parsley-required="true" parsley-minlength="4" parsley-validation-minlength="1">
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="p_cost" class="col-sm-4 control-label"> Packages Cost *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="p_cost" id="price" parsley-trigger="change" parsley-required="true" parsley-minlength="6" parsley-type="alphanum" parsley-validation-minlength="1">
                        </div>
                     </div>
					
                      <div class="form-group">
                        <label for="input08" class="col-sm-4 control-label">Upload Thumb image *</label>
                        <div class="col-sm-8" id="selectbox2">
                         <input type="file" name="fileinput">
                        </div>
                     </div>
					
                   
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
