







<link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/media/css/dataTables.bootstrap4.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/examples/resources/syntax/shCore.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/examples/resources/demo.css">
<style type="text/css" class="init">

</style>
<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js">
</script>
<script type="text/javascript" language="javascript" src="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299//media/js/jquery.dataTables.js">
</script>
<script type="text/javascript" language="javascript" src="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/media/js/dataTables.bootstrap4.js">
</script>
<script type="text/javascript" language="javascript" src="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/examples//resources/syntax/shCore.js">
</script>
<script type="text/javascript" language="javascript" src="<?php echo asset_url() ?>/DataTables-b69ccaeb6c102b2c55df22b173fab36ce9063299/examples//resources/demo.js">
</script>
<script type="text/javascript" language="javascript" class="init">

    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
<!-- Page content -->
<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>View Details <span></span></h2>
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
            <div class="col-md-12">
                <!-- tile -->
                <section class="tile transparent">
                    <!-- tile header -->
                    <div> <a href="index.php/Cms/Home_Packages"><button type="button" class="btn btn-primary margin-bottom-20">Add Record</button></a></div>
                    <div class="tile-header transparent">

                        <div class="controls">
                            <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                            <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                            <!--<a href="#" class="remove"><i class="fa fa-times"></i></a>-->

                        </div>
                    </div>
                    <!-- /tile header -->
                    <!-- tile body -->
                    <?php echo $link ?>
                    <div class="tile-body color transparent-black rounded-corners">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>email</th>
                                        <th>User type</th>
                                        <th>Date & Time</th>
                                        <th>Package</th>
                                        <th>Total Price</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($booking as $bk): ?>
                                        <tr>
                                            <td><?php echo $bk->first_name ?></td>
                                            <td><?php echo $bk->last_name ?></td>
                                            <td><?php echo $bk->phone ?></td>
                                            <td><?php echo $bk->email ?></td>
                                            <td><?php echo $bk->user_type ?></td>
                                            <td><?php echo date('d-M-Y H:i:a', strtotime($bk->date)); ?></td>
                                            <td><?php echo $bk->Packages; ?></td>
                                            <td><span class="fa fa-inr"> <?php echo $bk->total_price; ?></span></td>
                                            <td><a href="<?php echo site_url('Cms/booking_user_view?id=' . $bk->user_id . '&user_type=' . $bk->user_type . '&number=' . $bk->random . '') ?>"><button class="btn btn-success">View</button></a></td>
                                        </tr>
                                    <?php endforeach; ?>
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

