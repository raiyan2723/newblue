<?php include "include/head_view.php";?> 
<body>
    <div id="page-wrapper">
        
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Hotel Booking</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="index.php">HOME</a></li>
                    <li class="active">Hotel Booking</li>
                </ul>
            </div>
        </div>
        <section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                        <div class="booking-section travelo-box">
                              <?php if($formError) { ?>	
								  <span style="color:red">Please fill all mandatory fields.</span>
								  <br/>
								  <br/>
								<?php } ?>
                             <form action="<?php echo $action; ?>" method="post" name="payuForm">
								  <input type="hidden" name="curl" value="failure.php" />
								  <input type="hidden" name="surl" value="success.php" size="64" />
								  <input type="hidden" name="furl" value="failure.php" size="64" />
								  <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
								  <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
								  <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
								  <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                                <div class="person-information">
                                    <h2>Your Personal Information</h2>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>first name</label>
                                            <input type="text" name="firstname" class="input-text full-width"  value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" placeholder="" />
                                            <input type="hidden" name="amount" class="input-text full-width" value="26683.00" placeholder="" />
                                            <input type="hidden" name="productinfo" class="input-text full-width" value="Malaysia Packages" placeholder="" />
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>last name</label>
                                            <input type="text" name="lastname" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>email address</label>
                                            <input type="text" name="email" class="input-text full-width"  value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" placeholder="" />
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Confirm E-mail Address</label>
                                            <input type="text" class="input-text full-width" value="" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 col-md-5">
                                            <label>Country code</label>
                                            <div class="#">
                                               <input type="text" class="input-text full-width" value="" placeholder="+91-" />
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-5">
                                            <label>Phone number</label>
                                            <input type="text" name="phone" class="input-text full-width" value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" placeholder="" />
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I want to receive <span class="skin-color">Travelo</span> promotional offers in the future
                                            </label>
                                        </div>
                                    </div>-->
                                </div>
                                <hr />
                                
                                
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> By continuing, you agree to the <a href="#"><span class="skin-color">Terms and Conditions</span></a>.
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <button type="submit" class="full-width btn-large" >CONFIRM BOOKING</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                        <div class="booking-details travelo-box">
                            <h4>Booking Details</h4>
                            <article class="image-box hotel listing-style1">
                                <figure class="clearfix">
                                    <a href="#" class="hover-effect middle-block"><img class="middle-item" width="270" height="160" alt="" src="assest/images/img/tnews.jpg"></a>
                                    <div class="travel-title">
                                        <h5 class="box-title">Malaysia <small>Packages</small></h5>
                                        <!--<a href="#" class="button">EDIT</a>-->
                                    </div>
                                </figure>
                                <div class="details">
                                    <div class="feedback">
                                        <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                        <!--<span class="review">270 reviews</span>-->
                                    </div>
                                    <div class="constant-column-3 timing clearfix">
                                        <div class="check-in">
                                          
                                            <!--<span>FEB 24, 2016<br />11 AM</span>-->
                                        </div>
                                        <div class="duration text-center">
                                            <i class="soap-icon-clock"></i>
                                            <span>3 Nights</span>
                                        </div>
                                        <div class="check-out">
                                            
                                            <!--<span>MAR 02, 2016<br />2 PM</span>-->
                                        </div>
                                    </div>
                                    <div class="guest">
                                        <small class="uppercase">3 Nights / 4 Days in Malaysia</small>
                                    </div>
                                </div>
                            </article>
                            
                            <h4>Other Details</h4>
                            <dl class="other-details">
                               <dl class="other-details">
                                <dt class="feature">Package:</dt><dd class="value">Malaysia</dd>
                                <dt class="feature">Package Cost:</dt><dd class="value">RS. 25,000</dd>
                                
                                <dt class="feature">GST @ 3.625%:</dt><dd class="value">RS. 906</dd>
								<dt class="feature">Online Charge:</dt><dd class="value">Rs. 777</dd>
                                <dt class="total-price">Total Price</dt><dd class="total-price-value">RS. 26,683</dd>
                               </dl>
                            </dl>
                        </div>
                        
                        <!--<div class="travelo-box contact-box">
                            <h4>Need Blue Sky Excursions Help?</h4>
                            <p>Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism..</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i>+91-22-4944 4944</span>
                                <br>
                                <a class="contact-email" href="saraswati.jadhav@softbunch.com">info@blueskyexcursions.in</a>
                            </address>
                        </div>-->
                    </div>
                </div>
            </div>
        </section>
        
       <?php include "include/footer_view.php";?> 
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="assest/js/bootstrap.min.js"></script>
    
    <!-- load revolution slider scripts -->
    <script type="text/javascript" src="assest/components/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assest/components/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
    
    <!-- load BXSlider scripts -->
    <script type="text/javascript" src="assest/components/jquery.bxslider/jquery.bxslider.min.js"></script>

    <!-- Flex Slider -->
    <script type="text/javascript" src="assest/components/flexslider/jquery.flexslider.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="assest/js/jquery.stellar.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="assest/js/jquery.stellar.min.js"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="assest/js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="assest/js/theme-scripts.js"></script>
    <script type="text/javascript" src="assest/js/scripts.js"></script>
    
    <script type="text/javascript">
        tjq(document).ready(function() {
            tjq('.revolution-slider').revolution(
            {
                dottedOverlay:"none",
                delay:8000,
                startwidth:1170,
                startheight:646,
                onHoverStop:"on",
                hideThumbs:10,
                fullWidth:"on",
                forceFullWidth:"on",
                navigationType:"none",
                shadow:0,
                spinner:"spinner4",
                hideTimerBar:"on",
            });
        });
    </script>
</body>
</html>

