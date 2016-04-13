<?php 
$p_cost=10;
$onlin_charge=20;
$other_charge=30;
$total=($p_cost+$onlin_charge+$other_charge);
//echo $total;

?>
 <div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>Add Leisure Packages<span>.</span></h2>
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
                  <form class="form-horizontal" role="form" parsley-validate=""  action ="<?php echo base_url();?>index.php/Cms/insert_leisure_packages" id="basicvalidations" method="POST" enctype="multipart/form-data">
                     <div class="form-group">
                        <label for="p_name" class="col-sm-4 control-label">Packages Name *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="p_name" id="fullname" parsley-trigger="change" parsley-required="true"  parsley-validation-minlength="1">
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="country_name" class="col-sm-4 control-label">Packages Titel *</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control parsley-validated" name="p_Details" id="fullname" parsley-trigger="change" parsley-required="true"  parsley-validation-minlength="1">
                        </div>
                     </div>
					 
					  <div class="form-group">
                        <label for="p_price" class="col-sm-4 control-label"> Packages Cost *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="p_Cost" id="price" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="p_price" class="col-sm-4 control-label"> Online Charge *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="Online_Charge" id="price" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
                        </div>
                     </div>
					 <div class="form-group">
                        <label for="p_price" class="col-sm-4 control-label"> Other Charge *</label>
                        <div class="col-sm-8">
                           <input type="text"  class="form-control parsley-validated" name="Other_Charge" id="price" parsley-trigger="change" parsley-required="true" parsley-validation-minlength="1">
                        </div>
                     </div>
					 
					    <div class="form-group transparent-editor">
                        <label class="col-sm-4 control-label">Entitlement</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input06" name="p_Entitlement"></textarea>
                        </div>
                      </div>
					
                     <div class="form-group transparent-editor">
                        <label class="col-sm-4 control-label">  Packages Booking Process *</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input07" name="p_Booking"></textarea>
                        </div>
                      </div>
				 
					 <div class="form-group transparent-editor">
                        <label class="col-sm-4 control-label"> Inclusion *</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input08" name="p_Inclusion"></textarea>
                        </div>
                      </div>
					<div class="form-group transparent-editor">
                        <label class="col-sm-4 control-label"> Exclusion *</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input09" name="p_Exclusion"></textarea>
                        </div>
                      </div>
				
					 <div class="form-group">
                        <label for="country_name" class="col-sm-4 control-label">Total Nights *</label>
                        <div class="col-sm-8">
                           <input type="text" class="form-control parsley-validated" name="night" id="fullname" parsley-trigger="change" parsley-required="true"  parsley-validation-minlength="1">
                        </div>
                     </div>
					 
					 <div class="form-group">
                        <label for="input07" class="col-sm-4 control-label">Location_name *</label>
                        <div class="col-sm-8" id="selectbox">
                           <select class="chosen-select chosen-transparent form-control parsley-validated"  name="L_name"  parsley-trigger="change" parsley-error-container="#selectbox">
								<option value="">Please choose</option>
								<?php foreach($menu as $data){?>
								<option value="<?php echo $data['L_Name']; ?>"><?php echo $data['L_Name']; ?></option>
								<?php }?>
                           </select>
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
