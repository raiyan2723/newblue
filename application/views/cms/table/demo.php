<div id="content" class="col-md-12" tabindex="5001" style="overflow: hidden; outline: none; padding-left: 265px;">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-check-square" style="line-height: 48px;padding-left: 1px;"></i>Add About<span>.</span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
           <li><a href="index.php/Cms/index">Forms</a></li>
            <li class="active">About</li>
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
                  <h1><strong>Add</strong>About</h1>
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
                        <label class="col-sm-4 control-label">Blue Sky Excursions</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input06" name="Blue_Sky" value="<?php echo $employee['blue_sky']; ?>"></textarea>
                        </div>
                      </div>
				
					 <div class="form-group transparent-editor">
                        <label class="col-sm-4 control-label"> Mission Statement *</label>
                        <div class="col-sm-8">
                          <textarea class="form-control" id="input07" name="Mission" value="<?php echo $employee['mission']; ?>" ></textarea>
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
         </div>
            <!-- /tile -->
         <!-- /col 6 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /content container -->
</div>
