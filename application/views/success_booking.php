<?php
$night = $booking['Total_nights'];
$Total_cost = $booking['Package_Cast'] + $booking['Other_Charge'] + $booking['Online_Charge'];
$amount = $Total_cost;
$Total = round($amount / $night);
?>
<div class="page-title-container">
    <div class="container">
        <div class="page-title pull-left">
            <h2 class="entry-title">Booking</h2>
        </div>
        <ul class="breadcrumbs pull-right">
            <li><a href="index.php/Index_controller/index">HOME</a></li>
            <li class="active">BOOKING</li>
        </ul>
    </div>
</div>
<section id="content" class="gray-area">
    <div class="container shortcode">
        <div class="block">
            <h1 class="s-title">Successful Booking</h1>

            <div class="row " style="   ">
                <div class="panel panel-default col-lg-4 col-sm-4 col-xs-4">
                    <div class=" panel-body">

                        <div class="col-sm-12 col-xs-12">
                            <div class="form-group"> 
                                <label class="label-control">Name:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php
                                    if (isset($user_data)) {
                                        echo $user_data['first_name'];
                                    } elseif (isset($user_data2)) {
                                        echo $user_data2['fname'];
                                    } else {
                                        
                                    }
                                    ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Phone:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php
                                    if (isset($user_data)) {
                                        echo $user_data['phone'];
                                    } else {
                                        echo $user_data2['phone'];
                                    }
                                    ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Email:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php
                                    if (isset($user_data)) {
                                        echo $user_data['email'];
                                    } else {
                                        echo $user_data2['email'];
                                    }
                                    ?></span>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-2"></div>
                <div class="panel panel-default col-lg-6 col-sm-6 col-xs-6">
                    <div class=" panel-body">
                        <div class="col-sm-6 col-xs-6">
                            <img src="<?php echo $booking['Packages_image']; ?>" alt="Image" height="150px" width="250px"/>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group"> 
                                <label class="label-control">Packages:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $booking['Packages_Name']; ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Night:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $booking['Total_nights']; ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Price:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $Total_cost; ?></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">

                        <div class="panel-body" style="">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Packages</th>
                                        <th>Guest</th>
                                        <th>Price/Night</th>
                                        <th>Nights</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo $booking['Packages_Name']; ?></td>
                                        <td><?php
                                            if (isset($user)) {
                                                $coun1 = $user['countt'];
                                                echo $coun1;
                                            } else {
                                                $coun2 = $guest['countt'];
                                                echo $coun2;
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo $Total; ?></td>
                                        <td><?php echo $night = $booking['Total_nights']; ?></td>
                                        <td><?php echo $amount = $Total_cost; ?></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row" style="    font-size: 17px;">
                <div class="col-xs-11 col-md-11 form-group text-right wll">
                    <input type="checkbox" id="wallet" value="<?php echo $user_data['wallet'] ?>" />
                    <b>Do you want to use your wallet money&nbsp <i class="fa fa-inr"></i><?php echo $user_data['wallet'] ?></b>
                    <div id="show"></div>
                </div>
            </div>
            <div class="row" style="">
                <div class="col-xs-11 col-md-11 form-group text-right wll" style="margin: 0px 0px 0px 150px;">
                    <label class=""><strong style="font-size: large;">Grand Total: <i class="fa fa-inr"></i> 
                            <input style="background: none;border: none;" readonly id="grand"value="<?php
                                   if (isset($user)) {
                                       $count = $user['countt'];
                                       echo $coun1 * $amount;
                                   } else {
                                       $count = $guest['countt'];
                                       echo $coun2 * $amount;
                                   }
                                   ?>">
                        </strong></label>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 form-group panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-6 col-md-6">
                        <input type="checkbox" required autofocus="">
                        <label class="control-label">
                            <p>I accept <a href="http://noravillas.com/index.php/nora/call_view/terms_view" target="blank">terms And conditions</a></p>
                        </label>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <?php echo form_open('Index_controller/pay_u') ?>
                        <input type="hidden" name="packages" value="<?php echo $booking['l_id']; ?>" />
                        <input type="hidden" name="email" value="<?php
                        if (isset($user_data)) {
                            echo $user_data['email'];
                        } else {
                            echo $user_data2['email'];
                        }
                        ?>"/>			
                        <input type="hidden" name="firstname"        value="<?php
                        if (isset($user_data)) {
                            echo $user_data['first_name'];
                        } elseif (isset($user_data2)) {
                            echo $user_data2['fname'];
                        } else {
                            
                        }
                        ?>" />			
                        <input type="hidden" name="productinfo"      value="<?php echo $booking['Packages_Name']; ?>" />
                        <input type="hidden" name="phone"            value="<?php
                        if (isset($user_data)) {
                            echo $user_data['phone'];
                        } else {
                            echo $user_data2['phone'];
                        }
                        ?>" />
                        <input type="hidden" name="night"            value="<?php echo $night = $booking['Total_nights']; ?>" />
                        <input type="hidden" id="grand2" name="amount"           value="<?php
                        if (isset($user)) {
                            $count = $user['countt'];
                            echo $coun1 * $amount;
                        } else {
                            $count = $guest['countt'];
                            echo $coun2 * $amount;
                        }
                        ?>" />
                        <input type="hidden"  name="lastname"         value="<?php
                        if (isset($user_data)) {
                            echo $user_data['last_name'];
                        } elseif (isset($user_data2)) {
                            echo $user_data2['lname'];
                        } else {
                            
                        }
                        ?>" />
                        <input type="hidden" name="surl"            value="<?php echo site_url('Index_controller/pay_u_sucess'); ?>" />
                        <input type="hidden" name="furl"            value="<?php echo site_url('Index_controller/pay_u_failure'); ?>" />




                        <a href="<?php echo site_url('Index_controller/booked'); ?>"><button class="btn btn-primary pull-right" type="submit">Book</button></a>
                        <a class="btn btn-danger pull-right" style="    margin-right: 9px;" href="<?php echo site_url('Index_controller/cancle_booking'); ?>">cancle</a>
                        </form>
                    </div>
                </div>
            </div>
            <h1>Continue Booking &nbsp;<a href="index.php/Index_controller/leisures" class="s-title">Click</a></h1>

        </div>
    </div>
</section>
<!-- Twitter Bootstrap -->
<script type="text/javascript" src="assest/js/bootstrap.js"></script>
<!-- load revolution slider scripts -->
<script type="text/javascript" src="assest/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="assest/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
<!-- parallax -->
<script type="text/javascript" src="assest/js/jquery.stellar.min.js"></script>
<!-- waypoint -->
<script type="text/javascript" src="assest/js/waypoints.min.js"></script>
<!-- load page Javascript -->
<script type="text/javascript" src="assestjs/theme-scripts.js"></script>
<script>
    $(document).ready(function () {
        $('#wallet').change(function () {
            if ($(this).prop('checked') === true) {
                var wallet = $('#wallet').val();
                var grand = $('#grand').val();
                var deduct = grand - wallet;
                $('#grand').val(deduct);
                $('#grand2').val(deduct);
                //alert(deduct);
            } else {
                var wallet = $('#wallet').val();
                var grand = $('#grand').val();
                var deduct = parseInt(grand) + parseInt(wallet);
                $('#grand').val(deduct);
                $('#grand2').val(deduct);
                //alert(deduct);
            }
        });
    });
</script>
</body>
</html>
