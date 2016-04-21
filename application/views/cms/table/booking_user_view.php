
<link rel="stylesheet" href="assets/js/vendor/datatables/css/dataTables.bootstrap.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/ColVis.css">
<link rel="stylesheet" href="assets/js/vendor/datatables/css/TableTools.css">
<!-- Page content -->
<div id="content" class="col-md-12">
    <!-- page header -->
    <div class="pageheader">
        <h2><i class="fa fa-lightbulb-o" style="line-height: 48px;padding-left: 0;"></i>View Guest Details <span></span></h2>
        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li>You are here</li>
                <li><a href="index.php/Cms/index">cms</a></li>
				   <li>Guest</a></li>
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
                                        <th class="sort-alpha">Prefix</th>
                                        <th class="sort-alpha">First Name</th>
                                        <th class="sort-alpha">Last Name</th> 
                                        <th class="sort-alpha">DOB</th> 
                                        <th class="sort-alpha">Packages</th> 
                                        <th class="sort-alpha">Night</th> 
                                        <th class="sort-alpha">Price</th> 
                                        <th class="sort-alpha">Date</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (isset($booking)) { ?>
                                        <?php foreach ($booking as $bk) { ?>
                                            <tr>
                                                <td><?php echo $bk->prefix ?></td>
                                                <td><?php echo $bk->first_name ?></td>
                                                <td><?php echo $bk->last_name ?></td>
                                                <td><?php echo date('d-M-Y',strtotime($bk->dob));?></td>
                                                <td><?php echo $bk->package ?></td>
                                                <td><?php echo $bk->night ?></td>
                                                <td><?php echo $bk->price ?></td>
                                                <td><?php echo date('d-M-Y',strtotime($bk->created)) ;?></td>
                                            </tr>
                                            <?php
                                        }
                                    } else {
                                        foreach ($booking2 as $bk) {
                                            ?>
                                            <tr>
                                                <td><?php echo $bk->prefix ?></td>
                                                <td><?php echo $bk->first_name ?></td>
                                                <td><?php echo $bk->last_name ?></td>
                                                <td><?php  echo date('d-M-Y',strtotime($bk->dob));?></td>
                                                <td><?php echo $bk->package ?></td>
                                                <td><?php echo $bk->night ?></td>
                                                <td><?php echo $bk->price ?></td>
                                                <td><?php echo date('d-M-Y',strtotime($bk->created)) ?></td>
                                            </tr>
                                        <?php
                                        }
                                    }
                                    ?>
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

