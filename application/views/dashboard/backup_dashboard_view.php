<?php // echo "<pre>"; var_dump($page_data);echo "</pre>"; die;?>
<body class="dashboard style1">
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle blue-bg">Mobile Menu Toggle</a>
            <div class="container">
                <h1 class="logo navbar-brand">
                    <a href="index.php/Index_controller/index" title="benzy">
                        <img src="assest/images/logo/skin1-logo.png" alt="BlueskyExcursions" />
                    </a>
                </h1>
                <ul class="quick-menu pull-right hidden-mobile">
                    <li class="ribbon menu-color-blue">
                        <a>User</a>
                        <ul class="menu mini uppercase">
                           
                            <li><a href="#booking" class="location-reload">Bookings</a></li>
                            <li><a href="#settings" class="location-reload">settings</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Login/logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        
        <section id="content" class="">
            <div class="container">
                <div class="tab-container full-width-style arrow-left dashboard">
                    <ul class="tabs">
                        <li class="active"><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profile</a></li>
                        <li class=""><a data-toggle="tab" href="#booking"><i class="soap-icon-businessbag circle"></i>Booking</a></li>
                        <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="profile" class="tab-pane fade in active ">
                            <div class="view-profile">
                                <article class="image-box style2 box innerstyle personal-details">
                                    <figure>
                                        <a title="" href="#"><img width="270" height="263" alt="" src="use.png"></a>
                                    </figure>
                                    <div class="details">
                                        <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a>
                                        <h2 class="box-title fullname"></h2>
                                        <dl class="term-description">
                                            <dt>user name:                </dt><dd></dd>
                                            <dt>first name:               </dt><dd></dd>
                                            <dt>last name:                </dt><dd></dd>
                                            <dt>phone number:             </dt><dd></dd>
                                            <dt>Date of birth:            </dt><dd></dd>
                                            <dt>Street Address and number:</dt><dd></dd>
                                            <dt>Town / City:              </dt><dd></dd>
                                            <dt>State:                    </dt><dd></dd>
                                            <dt>ZIP code:                 </dt><dd></dd>
                                            <dt>Country:                  </dt><dd></dd>
                                        </dl>
                                    </div>
						           </article>
                                <hr>
                                <h2>About You</h2>
                                    <div class="intro">
                                    <p></p>
                                </div>
                                <hr>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4>Need Travelo Help?</h4>
                                        <div class="contact-box">
                                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                            <address class="contact-details">
                                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                                <br>
                                                <a class="contact-email" href="#">benzy@softbunch.com</a>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-profile">
                                <form class="edit-profile-form" action="index.php/booking/update" method="post">
                                    <h2>Personal Details</h2>
                                    <div class="col-sm-9 no-padding no-float">
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>First Name</label>
                                                <input type="hidden" class="form-control full-width" name="table_id" value="" required placeholder="">
                                                <input type="text"   class="form-control full-width" name="first"    value="" required placeholder="">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Last Name</label>
                                                <input type="text"   class="form-control full-width" name="last"     value="" required placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Email Address</label>
                                                <input type="email"  class="form-control full-width" name="email"    value="" required placeholder="">
                                            </div>
										</div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Country Code</label>
                                                <div class="selector">
                                                    <select class="full-width">
                                                        <option>India (+91)</option>
                                                        <option>United Kingdom (+44)</option>
                                                        <option>United States (+1)</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control full-width" name="phn" value="" required placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-xs-12">Date of Birth</label>
                                            <div class="col-xs-4 col-sm-6">
                                                <input type="date" class="form-control full-width" name="dob" value="" required placeholder="">
                                            </div>

                                        </div>
                                        <hr>
                                        <h2>Contact Details</h2>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Street Name</label>
                                                <input type="text" value="<?php echo $user->street ;?>" name="street" required class="form-control full-width">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Zip code</label>
                                                <input type="text" class="form-control full-width" name="zip_code" value="" required placeholder="">
                                            </div>											
                                            <div class="col-sms-8 col-sm-6">
                                                <label>Address</label>
                                                <input type="text" class="form-control full-width" name="address" value="" required >
                                            </div>

                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>City</label>
                                                <div class="selector">
                                                    <input type="text" class="form-control full-width" name="city"  value=""required >
                                                 </div>
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Country</label>
                                                <div class="selector " >
                                                    <input type="text" class="form-control full-width" name="country" value="" required >												
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Region State</label>
                                                <div class="selector">
                                                   <input type="text" class="form-control full-width" name="state" value=""  required >
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Upload Profile Photo</h2>
                                        <div class="row form-group">
                                            <div class="col-sms-12 col-sm-6 no-float">
                                                <div class="fileinput full-width">
                                                    <input type="file" class="input-text" name="profile" value="" required data-placeholder="select image/s">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Describe Yourself</h2>
                                        <div class="form-group">
                                            <textarea rows="5" class="input-text full-width" name="about"  required placeholder="please tell us about you"></textarea>
                                        </div>
                                        <div class="from-group">
                                            <button type="submit" class="btn-medium col-sms-6 col-sm-4">UPDATE SETTINGS</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="booking" class="tab-pane fade" style="height: 650px;overflow: auto;" >
                            <h2>Trips You have Booked!</h2>
                            <div class="booking-history">
							
                                <div class="booking-info clearfix ">
                                    <div class="date">
								
                                        <label class="month">tt</label>
                                        <label class="date">rr</label>
                                        <label class="day">tt</label>
                                    </div>
                                    <h4 class="box-title"><i class="icon soap-icon-hotel blue-color circle"></i> &amp; sss<small>
									
									adults
								
									staying 
								</small></h4>
                                    <dl class="info">
                                        <dt>TRIP ID</dt>
                                        <dd></dd>
                                        <dt>booked on</dt>
                                        <dd></dd>
                                    </dl>
                                    <a href="index.php/booking/cancel/<label class="badge badge-danger cancel_me"  >X</label></a>
                                    <button class="btn-mini status"></button>
                                    <button class="btn-mini status" style="background-color:red" >Rs.789</button>
                                </div>
							
						
                            </div>
                        </div>
                        <div id="settings" class="tab-pane fade">
                            <h2>Account Settings</h2>
                            <h5 class="skin-color">Change Your Password</h5>
                            <form>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Old Password</label>
                                        <input type="text"  class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Enter New Password</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Confirm New password</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn-medium">UPDATE PASSWORD</button>
                                </div>
                            </form>
                            <hr>
                            <h5 class="skin-color">Change Your Email</h5>
                            <form>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Old email</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Enter New Email</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <label>Confirm New Email</label>
                                        <input type="text" class="input-text full-width">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn-medium">UPDATE EMAIL ADDRESS</button>
                                </div>
                            </form>
                            <hr>
                            <h5 class="skin-color">Send Me Emails When</h5>
                            <form>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Travelo has periodic offers and deals on really cool destinations.
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Travelo has fun company news, as well as periodic emails.
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I have an upcoming reservation.
                                    </label>
                                </div>
                                <button class="btn-medium uppercase">Update All Settings</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="main-menu tab-container full-width-style clearfix">
                        <div class="tab-content pull-right">
                            <nav id="main-menu" role="navigation" class="hidden-mobile inline-block">
                                <ul class="menu">
                                    <li class="menu-item-has-children menu-color-blue">
                                        <a href="index.php/booking">Home</a>
 
                                    </li>
                                    <li class="menu-item-has-children menu-color-blue">
                                        <a href="index.php/booking">Hotels</a>
                                        <ul>
											<li><a href="index.php/booking">Home Hotels</a></li>
		    								<li><a href="index.php/booking/detailed">Detailed</a></li>
											<li><a href="index.php/booking/booking">Booking</a></li>
											<li><a href="index.php/booking/thanku">Thank You</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="copyright">
                                <p>&copy; 2014 Travelo</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>


