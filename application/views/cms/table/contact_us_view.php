
<link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
<!-- Page content -->
<div id="content" class="col-md-12">
   <!-- page header -->
   <div class="pageheader">
      <h2><i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>Contact Us User <span></span></h2>
      <div class="breadcrumbs">
         <ol class="breadcrumb">
            <li>You are here</li>
            <li><a href="index.php/Cms/index">cms</a></li>
            <li class="active"></li>
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
            <section class="tile transparent">
               <!-- tile header -->
            <!--    <div> <a href="index.php/Cms/Slider_Image"><button type="button" class="btn btn-primary margin-bottom-20">Add Record</button></a></div> -->
               <div class="tile-header transparent">
                
                  <div class="controls">
                     <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                     <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                     <!--<a href="#" class="remove"><i class="fa fa-times"></i></a>-->
                    
                  </div>
               </div>
               <!-- /tile header -->
               <!-- tile body -->
               <div class="tile-body color transparent-black rounded-corners">
                  <div class="table-responsive">
                     <table  class="table table-datatable table-custom" id="basicDataTable">
                        <thead>
                           <tr>
							<th class="sort-alpha">Sr.No</th>
							<th class="sort-alpha">Name</th>
							<th class="sort-alpha">Email</th>
							<th class="sort-alpha">Subject</th>
							<th class="sort-alpha">Message</th>
                             
							<th>Options</th>
                           </tr>
                        </thead>
                        <tbody>
							<?php foreach($menu as $data){?>
						<tr>
						<td><?=$data["c_id"];?></td>
						<td><?=$data["Name"];?></td>
						<td><?=$data["email"];?></td>
						<td><?=$data["subject"];?></td>
						<td><?=substr($data["message"],0,30);?></td>
						
					
						
						<td>
							<a href="<?php echo base_url()?>index.php/User/Contact_Details/<?= $data["c_id"]; ?>"><button type="button" class="btn btn-info"><b>View</b></button></a>
							&nbsp; <a href="<?php echo base_url()?>index.php/User/Delete_Contact/<?= $data["c_id"]; ?>"><button type="button" class="btn btn-danger"><b>Delete</b></button></a>
						</td>
						</tr>
							<?php }?>
                            </tbody>
                     </table>
                  </div>
               </div>
               <!-- /tile body -->
            </section>
            <!-- /tile -->
         
         </div>
         <!-- /col 12 -->
      </div>
      <!-- /row -->
   </div>
   <!-- /content container -->
</div>
<!-- Page content end -->

