<link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
<!-- Page content -->
<div id="content" class="col-md-12">
<!-- page header -->
<div class="pageheader">
   <h2><i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>Register User <span></span></h2>
   <div class="breadcrumbs">
      <ol class="breadcrumb">
         <li>You are here</li>
         <li><a href="index.php/Cms/index">Register User</a></li>
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
   <div class="col-md10">
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
         <?php echo  $link ?>
         <div class="tile-body color transparent-black rounded-corners">
            <div class="table-responsive">
               <table  class="table table-datatable table-custom" id="basicDataTable">
                  <thead>
                     <tr>
                        <th class="sort-alpha">Sr.No</th>
                        <th class="sort-alpha">Email</th>
                        <th class="sort-alpha">First Name</th>
                        <th class="sort-alpha">Last Name</th>
                        <th class="sort-alpha">DOB</th>
                        <th class="sort-alpha">User Type</th>
                        <th>Options</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php foreach($menu as $data){?>
                     <tr>
                        <td><?php echo $data["u_id"];?></td>
                        <td><?php echo $data["email"];?></td>
                        <td><?php echo $data["first_name"];?></td>
                        <td><?php echo $data["last_name"];?></td>
                        <td><?php echo $data["DOB"];?></td>
                        <td><?php echo $data["user_type"];?></td>
                        <td>	
                           &nbsp;<a href="<?php echo base_url()?>index.php/User/Register_details/<?= $data["u_id"]; ?>"><button type="button" class="btn btn-info"><b>View</b></button></a>
                           <button class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete">  Delete </button></a>
                        </td>
                     </tr>
                     <?php }?>
                  </tbody>
               </table>
            </div>
            <!-- /tile body -->
      </section>
      <!-- /tile -->
      </div>
      <!-- /col 12 -->
   </div>
   <!-- /row -->
</div>
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
            <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
         </div>
         <div class="modal-body">
            <p>You are About to Delete one Detail, This Procedure is Irreversible.</p>
            <p>Do you want to Proceed?</p>
            <p class="debug-url"></p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok"  href="<?php echo base_url()?>index.php/User/delete_register/<?= $data["u_id"]; ?>">Delete</a>
         </div>
      </div>
   </div>
</div>
<!-- /content container --<button button Onclick="return ConfirmDelete();" type="submit" name="actiondelete" value="1" class="btn btn-danger"><b>Delete</b></button></a>>
   </div>
   <!-- Page content end -->

<script>
   bootbox.confirm("Are you sure?", function(result) {
     Example.show("Confirm result: "+result);
   }); 
</script>

