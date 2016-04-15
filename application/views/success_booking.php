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
                                    } else {
                                        echo $user_data2['fname'];
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
                        <div class="col-sm-8 col-xs-8">
                            <img src="<?php echo $booking['Packages_image']; ?>" alt="Image" style="height: 151px" width="100%"/>
                        </div>
                        <div class="col-sm-3 col-xs-3">
                            <div class="form-group"> 
                                <label class="label-control">Packages:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $productinfo = $this->input->post('productinfo'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Night:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $night = $this->input->post('night'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Price:</label>&nbsp;&nbsp;&nbsp;
                                <span><?php echo $amount = $this->input->post('amount'); ?></span>
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
                                        <td><?php echo $amount = $this->input->post('productinfo'); ?></td>
                                        <td><?php
                                            if (isset($user)) {
                                                echo $user['countt'];
                                            } else {
                                                echo $guest['countt'];
                                            }
                                            ?></td>
                                        <td>Price/Night</td>
                                        <td>Nights</td>
                                        <td>Total Price</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-xs-11 col-md-11 form-group text-right wll">
                    <label class=""><strong style="font-size: large;">Grand Total: <i class="fa fa-inr"></i> <?php echo $amount = $this->input->post('amount'); ?></strong></label>
                </div>
            </div>

            <div class="col-xs-12 col-md-12 form-group panel panel-default">
                <div class="panel-body">
                    <div class="col-xs-6 col-md-6">
                        <input type="checkbox" required="" autofocus="">
                        <label class="control-label">
                            <p>I accept <a href="http://noravillas.com/index.php/nora/call_view/terms_view" target="blank">terms And conditions</a></p>
                        </label>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <button class="btn btn-primary pull-right" type="submit">Book</button>
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
</body>
</html>
