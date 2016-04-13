
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
                                <label class="label-control">Name:</label>
                                <span><?php echo $user_data['first_name']; ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Phone:</label>
                                <span><?php echo $user_data['phone']; ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Email:</label>
                                <span><?php echo $user_data['email']; ?></span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-2 col-xs-2"></div>
                <div class="panel panel-default col-lg-6 col-sm-6 col-xs-6">
                    <div class=" panel-body">
                        <div class="col-sm-6 col-xs-6">
                            <img href="#" alt="Image" height="240px" width="200px"/>
                        </div>
                        <div class="col-sm-6 col-xs-6">
                            <div class="form-group"> 
                                <label class="label-control">Packages:</label>
                                <span><?php echo $productinfo = $this->input->post('productinfo'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Night:</label>
                                <span><?php echo $night = $this->input->post('night'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Price:</label>
                                <span><?php echo $amount = $this->input->post('amount'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Your Name:</label>
                                <span><?php echo $firstname = $this->input->post('firstname'); ?>&nbsp;&nbsp;<?php echo $lastname = $this->input->post('lastname'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Email:</label>
                                <span><?php echo $email = $this->input->post('email'); ?></span>
                            </div>
                            <div class="form-group"> 
                                <label class="label-control">Phone:</label>
                                <span><?php echo $phone = $this->input->post('phone'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading col-sm-12" style="    padding-bottom: 0px;">
                            <div class="form-group col-xs-2">
                                <label>Villa</label>
                            </div>
                            <div class="form-group col-xs-3">
                                <label>Guest</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Price/Night</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Nights</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Total Price</label>
                            </div>
                        </div>
                        <div class="panel-body" style="    padding-bottom: 0px;padding-top: 66px;">
                            <table class="table">
                            <></>
                                </table>
                            <div class="form-group col-xs-2">
                                <label>Villa</label>
                            </div>
                            <div class="form-group col-xs-3">
                                <label>Guest</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Price/Night</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Nights</label>
                            </div>
                            <div class="form-group col-xs-2">
                                <label>Total Price</label>
                            </div>
                        </div>
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
