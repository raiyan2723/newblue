<?php // echo "<pre>"; var_dump($page_data);echo "</pre>"; die;?>
<body class="dashboard style1">
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle blue-bg">Mobile Menu Toggle</a>
            <div class="container">
                <h1 class="logo navbar-brand">
                    <a href="index.php/booking" title="benzy">
                        <img src="booking/images/logo2.png" alt="benzy" />
                    </a>
                </h1>
                <ul class="quick-menu pull-right hidden-mobile">
                    <li class="ribbon menu-color-blue">
                        <a><?php echo $user->first;?></a>
                        <ul class="menu mini uppercase">
                            <li><a href="#profile" class="location-reload">Profile</a></li>
                            <li><a href="#booking" class="location-reload">Bookings</a></li>
                            <li><a href="#settings" class="location-reload">settings</a></li>
                            <li><a href="index.php/login/logout">signout</a></li>
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
                                        <a title="" href="#"><img width="270" height="263" alt="" src="<?php echo (($user->profile)?$user->profile:"upload/profile/1.jpg");?>"></a>
                                    </figure>
                                    <div class="details">
                                        <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a>
                                        <h2 class="box-title fullname"><?php echo ucwords ($user->first." ".$user->last);?></h2>
                                        <dl class="term-description">
                                            <dt>user name:                </dt><dd><?php echo $user->email ;?></dd>
                                            <dt>first name:               </dt><dd><?php echo $user->first ;?></dd>
                                            <dt>last name:                </dt><dd><?php echo $user->last ;?></dd>
                                            <dt>phone number:             </dt><dd><?php echo $user->phn ;?></dd>
                                            <dt>Date of birth:            </dt><dd><?php echo (($user->dob      )? $user->dob     :'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                            <dt>Street Address and number:</dt><dd><?php echo (($user->street   )? $user->street  :'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                            <dt>Town / City:              </dt><dd><?php echo (($user->city     )? $user->city    :'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                            <dt>State:                    </dt><dd><?php echo (($user->state    )? $user->state   :'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                            <dt>ZIP code:                 </dt><dd><?php echo (($user->zip_code )? $user->zip_code:'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                            <dt>Country:                  </dt><dd><?php echo (($user->country  )? $user->country :'Not Given <a href="#" class="badge label-warning pull-right edit-profile-btn">Add details</a>');?></dd>
                                        </dl>
                                    </div>
						           </article>
                                <hr>
                                <h2>About You</h2>
                                    <div class="intro">
                                    <p><?php echo (($user->about)?$user->about:"No Given");?></p>
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
                                <form class="edit-profile-form" action="index.php/booking/update" method="post" >
                                    <h2>Personal Details</h2>
                                    <div class="col-sm-9 no-padding no-float">
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>First Name</label>
                                                <input type="hidden" class="form-control full-width" name="table_id" value="<?php echo $user->table_id;?>" required placeholder="">
                                                <input type="text"   class="form-control full-width" name="first"    value="<?php echo $user->first ;?>" required placeholder="">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Last Name</label>
                                                <input type="text"   class="form-control full-width" name="last"     value="<?php echo $user->last ;?>" required placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Email Address</label>
                                                <input type="email"  class="form-control full-width" name="email"    value="<?php echo $user->email ;?>" required placeholder="">
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
                                                <input type="text" class="form-control full-width" name="phn" value="<?php echo $user->phn ;?>" required placeholder="">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label class="col-xs-12">Date of Birth</label>
                                            <div class="col-xs-4 col-sm-6">
                                                <input type="date" class="form-control full-width" name="dob" value="<?php echo $user->dob ;?>" required placeholder="">
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
                                                <input type="text" class="form-control full-width" name="zip_code" value="<?php echo $user->zip_code ;?>" required placeholder="">
                                            </div>											
                                            <div class="col-sms-8 col-sm-6">
                                                <label>Address</label>
                                                <input type="text" class="form-control full-width" name="address" value="<?php echo $user->address ;?>" required >
                                            </div>

                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>City</label>
                                                <div class="selector">
                                                    <input type="text" class="form-control full-width" name="city"  value="<?php echo $user->city ;?>"required >
                                                 </div>
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Country</label>
                                                <div class="selector " >
                                                    <input type="text" class="form-control full-width" name="country" value="<?php echo $user->country ;?>" required >												
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                                <label>Region State</label>
                                                <div class="selector">
                                                   <input type="text" class="form-control full-width" name="state" value="<?php echo $user->state ;?>"  required >
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Upload Profile Photo</h2>
                                        <div class="row form-group">
                                            <div class="col-sms-12 col-sm-6 no-float">
                                                <div class="fileinput full-width">
                                                    <input type="file" class="input-text" name="profile" value="<?php echo $user->profile ;?>" required data-placeholder="select image/s">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <h2>Describe Yourself</h2>
                                        <div class="form-group">
                                            <textarea rows="5" class="input-text full-width" name="about"  required placeholder="please tell us about you"><?php echo $user->about ;?></textarea>
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
							<?php foreach($page_data as $row){?>
                                <div class="booking-info clearfix <?php echo $row["booking_status"];?>">
                                    <div class="date">
								<?php   
									list($month,$date,$year)       = explode("/",$row["checkin"]);	
								    $date_day                      = date("D",mktime(0, 0, 0, $month,$date,$year));
								    $date_month                    = date("M",mktime(0, 0, 0, $month,$date,$year));
								    list($t_date,$t_time)          = explode(" ",$row["time"]);
									list($c_year,$c_month,$c_date) = explode("-",$t_date);	
									$date_current_day              = date("l",mktime(0, 0, 0, $c_month,$c_date,$c_year));
								    $date_current_month            = date("M",mktime(0, 0, 0, $c_month,$c_date,$c_year));									
								 ?>
                                        <label class="month"><?php echo $date_month;?></label>
                                        <label class="date"><?php echo $date;?></label>
                                        <label class="day"><?php echo $date_day;?></label>
                                    </div>
                                    <h4 class="box-title"><i class="icon soap-icon-hotel blue-color circle"></i><?php echo $row["bk_title"];?> &amp; <?php echo $row["bk_loc"];?><small>
									<?php echo $row["adults"]= ($row["adults"]!=0)?$row["adults"]:" No ";?> 
									adults
									<?php echo $row["kids"]  = ($row["kids"]!=0)  ?$row["kids"]  :" No Kids ";?> 
									staying 
									<?php echo " For ".$row["days"]." Days";?></small></h4>
                                    <dl class="info">
                                        <dt>TRIP ID</dt>
                                        <dd><?php echo $row["table_id"]?></dd>
                                        <dt>booked on</dt>
                                        <dd><?php echo $date_current_day." ".$date_current_month." ".$c_date." ".$c_year." on ".$t_time;?></dd>
                                    </dl>
                                    <a href="index.php/booking/cancel/<?php echo $row["table_id"]?>"><label class="badge badge-danger cancel_me"  >X</label></a>
                                    <button class="btn-mini status"><?php echo $row["booking_status"];?></button>
                                    <button class="btn-mini status" style="background-color:red" >Rs.<?php echo $row["total"]?>/-</button>
                                </div>
							<?php }?>
						
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


