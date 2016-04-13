  <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                        <div class="booking-details travelo-box">
                            <h4>Booking Details</h4>
                            <article class="image-box hotel listing-style1">
                                <figure class="clearfix">
                                    <a href="#" class="hover-effect middle-block"><img class="middle-item" width="270" height="160" alt="" src="assest/images/img/tnews.jpg"></a>
                                    <div class="travel-title">
                                        <h5 class="box-title"><?php echo $booking['Packages_Name']; ?><small>Packages</small></h5>
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
                                            <!--<label>Check in</label>-->
                                           <!-- <span>FEB 24, 2016<br />11 AM</span>-->
                                        </div>
                                        <div class="duration text-center">
                                            <i class="soap-icon-clock"></i>
                                            <span><?php echo $booking['Total_nights']; ?> Nights</span>
                                        </div>
                                        <div class="check-out">
                                            <!--<label>Check out</label>-->
                                           <!-- <span>MAR 02, 2016<br />2 PM</span>-->
                                        </div>
                                    </div>
                                    <div class="guest">
                                        <small class="uppercase"><?php echo $booking['Package_Entitlement']; ?></small>
                                    </div>
                                </div>
                            </article>
                            
                            <h4>Other Details</h4>
                            <dl class="other-details">
                                <dt class="feature">Package:</dt><dd class="value"><?php echo $booking['Packages_Name']; ?></dd>
                                <dt class="feature">Package Cost:</dt><dd class="value">Rs. <?php echo $booking['Package_Cast']; ?></dd>
                                
                                <dt class="feature">GST @ 3.625%:</dt><dd class="value">Rs. <?php echo $booking['Other_Charge']; ?></dd> 
								<dt class="feature">Online Charge:</dt><dd class="value">Rs. <?php echo $booking['Online_Charge']; ?></dd>
                                <dt class="total-price">Total Price</dt><dd class="total-price-value"><?php echo $Total_cost; ?></dd>
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