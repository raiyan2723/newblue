<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
<style>
    .error {color: #FF0000;}
</style>
<body class="dashboard style1">
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle blue-bg">Mobile Menu Toggle</a>
            <div class="container">
                <h1 class="logo navbar-brand">
                    <a href="index.php/Index_controller/index" title="blueskyexcursion">
                        <img src="assest/images/logo/skin1-logo.png" alt="blueskyexcursion" />
                    </a>
                </h1>
                <ul class="quick-menu pull-right hidden-mobile">
                    <li class="ribbon menu-color-blue">
                        <a>user</a>
                        <ul class="menu mini uppercase">
                            <li><a href="#dashboard" class="location-reload">Dashboard</a></li>
                            <li><a href="#profile" class="location-reload">Profile</a></li>
                            <li><a href="#booking" class="location-reload">Bookings</a></li>
							<li><a href="#settings" class="location-reload">settings</a></li>
                            <li><a href="<?php echo base_url();?>index.php/Login/logout">signout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        
        <section id="content" class="">
            <div class="container">
                <div class="tab-container full-width-style arrow-left dashboard">
                    <ul class="tabs">
                        <li class="active"><a data-toggle="tab" href="#dashboard"><i class="soap-icon-anchor circle"></i>Dashboard</a></li>
                        <li class=""><a data-toggle="tab" href="#profile"><i class="soap-icon-user circle"></i>Profile</a></li>
                        <li class=""><a data-toggle="tab" href="#booking"><i class="soap-icon-businessbag circle"></i>Booking</a></li>
                        <li class=""><a data-toggle="tab" href="#settings"><i class="soap-icon-settings circle"></i>Settings</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="dashboard" class="tab-pane fade in active">
                            <h1 class="no-margin skin-color">Hi <?php echo ucfirst($menu["first_name"]);?>, Welcome to Blueskyexcursion!</h1>
                            <p>All your trips booked with us will appear here and you’ll be able to manage everything!</p>
                            <br />
                            <div class="row block">
                                <div class="col-sm-6 col-md-3">
                                    <a href="hotel-list-view.html">
                                        <div class="fact blue">
                                            <div class="numbers counters-box">
                                                <dl>
                                                    <dt class="display-counter" data-value="3200">0</dt>
                                                    <dd>Hotels to Stay</dd>
                                                </dl>
                                                <i class="icon soap-icon-hotel"></i>
                                            </div>
                                            <div class="description">
                                                <i class="icon soap-icon-longarrow-right"></i>
                                                <span>View Hotels</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a href="flight-list-view.html">
                                        <div class="fact yellow">
                                            <div class="numbers counters-box">
                                                <dl>
                                                    <dt class="display-counter" data-value="4509">0</dt>
                                                    <dd>Airlines to Travel</dd>
                                                </dl>
                                                <i class="icon soap-icon-plane"></i>
                                            </div>
                                            <div class="description">
                                                <i class="icon soap-icon-longarrow-right"></i>
                                                <span>View Flights</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a href="car-list-view.html">
                                        <div class="fact red">
                                            <div class="numbers counters-box">
                                                <dl>
                                                    <dt class="display-counter" data-value="3250">0</dt>
                                                    <dd>VIP Transports</dd>
                                                </dl>
                                                <i class="icon soap-icon-car"></i>
                                            </div>
                                            <div class="description">
                                                <i class="icon soap-icon-longarrow-right"></i>
                                                <span>View Cars</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <a href="cruise-list-view.html">
                                        <div class="fact green">
                                            <div class="numbers counters-box">
                                                <dl>
                                                    <dt class="display-counter" data-value="1570">0</dt>
                                                    <dd>Celebrity Cruises</dd>
                                                </dl>
                                                <i class="icon soap-icon-cruise flip-effect"></i>
                                            </div>
                                            <div class="description">
                                                <i class="icon soap-icon-longarrow-right"></i>
                                                <span>View Cruises</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                          
                            
                            <div class="row block">
                                <div class="col-md-6 notifications">
                                    <h2>Notifications</h2>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-plane-right takeoff-effect yellow-bg"></i>
                                            <span class="time pull-right">JUST NOW</span>
                                            <p class="box-title">London to Paris flight in <span class="price">$120</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-hotel blue-bg"></i>
                                            <span class="time pull-right">10 Mins ago</span>
                                            <p class="box-title">Hilton hotel &amp; resorts in <span class="price">$247</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-car red-bg"></i>
                                            <span class="time pull-right">39 Mins ago</span>
                                            <p class="box-title">Economy car for 2 days in <span class="price">$39</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-cruise green-bg"></i>
                                            <span class="time pull-right">1 hour ago</span>
                                            <p class="box-title">Baja Mexico 4 nights in <span class="price">$537</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-hotel blue-bg"></i>
                                            <span class="time pull-right">2 hours ago</span>
                                            <p class="box-title">Roosevelt hotel in <span class="price">$170</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-hotel blue-bg"></i>
                                            <span class="time pull-right">3 hours ago</span>
                                            <p class="box-title">Cleopatra Resort in <span class="price">$247</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-car red-bg"></i>
                                            <span class="time pull-right">3 hours ago</span>
                                            <p class="box-title">Elite Car per day in <span class="price">$48.99</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="icon-box style1 fourty-space">
                                            <i class="soap-icon-cruise green-bg"></i>
                                            <span class="time pull-right">last night</span>
                                            <p class="box-title">Rome to Africa 1 week in <span class="price">$875</span></p>
                                        </div>
                                    </a>
                                    <a href="#">
                                        <div class="load-more">. . . . . . . . . . . . . </div>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <h2>Recent Activity</h2>
                                    <div class="recent-activity">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-plane-right circle takeoff-effect yellow-color"></i>
                                                    <span class="price"><small>avg/person</small>$120</span>
                                                    <h4 class="box-title">
                                                        Indianapolis to Paris<small>Oneway flight</small>
                                                    </h4>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-car circle red-color"></i>
                                                    <span class="price"><small>per day</small>$45.39</span>
                                                    <h4 class="box-title">
                                                        Economy Car<small>bmw mini</small>
                                                    </h4>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-cruise circle green-color"></i>
                                                    <span class="price"><small>from</small>$578</span>
                                                    <h4 class="box-title">
                                                        Jacksonville to Asia<small>4 nights</small>
                                                    </h4>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-hotel circle blue-color"></i>
                                                    <span class="price"><small>Avg/night</small>$620</span>
                                                    <h4 class="box-title">
                                                        Hilton Hotel &amp; Resorts<small>Paris france</small>
                                                    </h4>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-hotel circle blue-color"></i>
                                                    <span class="price"><small>avg/night</small>$170</span>
                                                    <h4 class="box-title">
                                                        Roosevelt Hotel<small>new york</small>
                                                    </h4>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon soap-icon-plane-right circle takeoff-effect yellow-color"></i>
                                                    <span class="price"><small>avg/person</small>$348</span>
                                                    <h4 class="box-title">
                                                        Mexico to England<small>return flight</small>
                                                    </h4>
                                                </a>
                                            </li>
                                        </ul>
                                        <a href="#" class="button green btn-small full-width">VIEW ALL ACTIVITIES</a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h4>Benefits of Blueskyexcursion Account</h4>
                                    <ul class="benefits triangle hover">
                                        <li><a href="#">Faster bookings with lesser clicks</a></li>
                                        <li><a href="#">Track travel history &amp; manage bookings</a></li>
                                        <li class="active"><a href="#">Manage profile &amp; personalize experience</a></li>
                                        <li><a href="#">Receive alerts &amp; recommendations</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-4 previous-bookings image-box style14">
                                    <h4>Your Previous Bookings</h4>
                                    <article class="box">
                                        <figure class="no-padding">
                                            <a title="" href="#">
                                                <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h5 class="box-title"><a href="#">Half-Day Island Tour</a><small class="fourty-space"><span class="price">$35</span> Family Package</small></h5>
                                        </div>
                                    </article>
                                    <article class="box">
                                        <figure class="no-padding">
                                            <a title="" href="#">
                                                <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                            </a>
                                        </figure>
                                        <div class="details">
                                            <h5 class="box-title"><a href="#">Ocean Park Tour</a><small class="fourty-space"><span class="price">$26</span> Per Person</small></h5>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-4">
                                    <h4>Need Travelo Help?</h4>
                                    <div class="contact-box">
                                        <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                        <address class="contact-details">
                                            <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                            <br>
                                            <a class="contact-email" href="#">help@travelo.com</a>
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="profile" class="tab-pane fade">
                            <div class="view-profile">
                                <article class="image-box style2 box innerstyle personal-details">
                                    <figure>
                                        <a title="" href="#"><img width="270" height="263" alt="" src="<?php echo (empty($menu['image'])) ? 'uploads/User_image/1448450106.jpg' : $menu['image']; ?>"></a>
                                    </figure>
                                    <div class="details">
                                        <a href="#" class="button btn-mini pull-right edit-profile-btn">EDIT PROFILE</a>
                                        <h2 class="box-title fullname"><?php echo ucfirst($menu["first_name"]);?>&nbsp;<?php echo ucfirst($menu["last_name"]);?></h2>
                                        <dl class="term-description">
                                            <dt>first name:</dt><dd><?php echo ucfirst($menu["first_name"]);?></dd>
                                            <dt>last name:</dt><dd><?php echo ucfirst($menu["last_name"]);?></dd>
                                            <dt>phone number:</dt><dd><?php echo (empty($menu['phone'])) ? '' : $menu['phone']; ?></dd>
                                            <dt>Date of birth:</dt><dd><?php echo (empty($menu['DOB'])) ? '' : $menu['DOB']; ?></dd>
                                            <dt> Address</dt><dd><?php echo (empty($menu['Address'])) ? '' : $menu['Address']; ?></dd>
                                           
                                        </dl>
                                    </div>
                                </article>
								
								<a href="#"><h1 style="color:red;">Balance Rs. &nbsp; <span style="color:green";>$50</span></h1></a> <button class="btn-medium">ADD MONEY</button>
                                    <div class="intro">
                                    <p> lectus at nulla dictum luctus. Sed risus felis, posuere id condime.</p>
                                </div>
                                <hr>
                                <h2>About You</h2>
                                    <div class="intro">
                                    <p><?php echo (empty($menu['yourself'])) ? '' : $menu['yourself']; ?></p>
                                </div>
                                
                                <hr>
                             
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Benefits of Blueskyexcursion Account</h4>
                                        <ul class="benefits triangle hover">
                                            <li><a href="#">Faster bookings with lesser clicks</a></li>
                                            <li><a href="#">Track travel history &amp; manage bookings</a></li>
                                            <li class="active"><a href="#">Manage profile &amp; personalize experience</a></li>
                                            <li><a href="#">Receive alerts &amp; recommendations</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 previous-bookings image-box style14">
                                        <h4>Your Previous Bookings</h4>
                                        <article class="box">
                                            <figure class="no-padding">
                                                <a title="" href="#">
                                                    <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Half-Day Island Tour</a><small class="fourty-space"><span class="price">$35</span> Family Package</small></h5>
                                            </div>
                                        </article>
                                        <article class="box">
                                            <figure class="no-padding">
                                                <a title="" href="#">
                                                    <img alt="" src="http://placehold.it/63x59" width="63" height="59">
                                                </a>
                                            </figure>
                                            <div class="details">
                                                <h5 class="box-title"><a href="#">Ocean Park Tour</a><small class="fourty-space"><span class="price">$26</span> Per Person</small></h5>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Need Blueskyexcursion Help?</h4>
                                        <div class="contact-box">
                                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                                            <address class="contact-details">
                                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                                <br>
                                                <a class="contact-email" href="#">help@Blueskyexcursion.com</a>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="edit-profile">
                                <form class="edit-profile-form" action="<?php echo base_url();?>index.php/User_login/update_profile/<?php echo $menu['u_id']?>" method="POST" enctype="multipart/form-data">
                                    <div class="col-sm-9 no-padding no-float">
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                               
                                                <input type="text" class="input-text full-width" placeholder="First Name" value="<?php echo ucfirst($menu["first_name"]);?>" name="f_name">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                             
                                                <input type="text" class="input-text full-width" placeholder="Last Name" value="<?php echo ucfirst($menu["last_name"]);?>" name="l_name">
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                               
                                                <input type="email" class="input-text full-width" placeholder="Email Address" value="<?php echo $menu["email"];?>" name="email">
                                            </div>
                                            <div class="col-sms-6 col-sm-6">
                                               
                                               <input type="text" class="input-text full-width" placeholder="Phone Number" name="p_no" value="<?php echo (empty($menu['phone'])) ? '' : $menu['phone']; ?>">
                                            </div>
											</div>
                                       
                                        <div class="row form-group">
                                            <div class="col-sms-6 col-sm-6">
                                              
                                               <input type="date" class="input-text full-width" placeholder="Date of Birth" name="dob" value="<?php echo (empty($menu['DOB'])) ? '' : $menu['DOB']; ?>">
                                            </div>
										 </div>
                                        <hr>
                                        
                                        <div class="row form-group">
                                            <div class="col-sms-12 col-sm-6 no-float">
                                                <div class="fileinput full-width">
                                                    <input type="file" class="input-text" data-placeholder="select image/s" name="user_image">
													 <input type="hidden" name="user_image" value="<?php echo (empty($menu['image'])) ? '' : $menu['image']; ?>"  placeholder="Upload Profile Photo">
                                                </div>
                                            </div>
                                        </div>
										<hr>
                                        <h2>Complete Address</h2>
                                        <div class="form-group">
                                            <textarea rows="2" class="input-text full-width" placeholder="Complete Address" name="Address" ><?php echo (empty($menu['Address'])) ? '' : $menu['Address']; ?></textarea>
                                        </div>
                                        <hr>
                                        <h2>Describe Yourself</h2>
                                        <div class="form-group">
                                            <textarea rows="5" class="input-text full-width" placeholder="Describe Yourself" name="description"><?php echo (empty($menu['yourself'])) ? '' : $menu['yourself']; ?></textarea>
                                        </div>
                                        <div class="from-group">
                                            <button type="submit" class="btn-medium col-sms-6 col-sm-4">UPDATE SETTINGS</button>
                                        </div>
									</div>
                                </form>
                            </div>
                        </div>
                        <div id="booking" class="tab-pane fade">
                            <h2>Trips You have Booked!</h2>
                          <div class="booking-history">
				
		<?php 	foreach ($booking as $value) {
			
			?>
			<div class="booking-info clearfix">
                                    <div class="date">
                              <a title="" href="#"><img width="70" height="70" alt="" src="<?php echo (empty($value['image'])) ? 'uploads/User_image/1448450106.jpg' : $value['image']; ?>"></a>          
									   </div>
                                    <h4 class="box-title"><i class="icon soap-icon-hotel blue-color circle"></i><?php echo (empty($value['Packages'])) ? 'Package Name Not Available' : $value['Packages']; ?><small><?php echo (empty($value['person'])) ? 'No Any Person' : $value['person']; ?> PERSON STAYING</small></h4>
                                    <dl class="info">
                                        <dt>Transaction  ID</dt>
                                        <dd><?php echo (empty($value['Trance_id'])) ? '  Not Available' : $value['Trance_id']; ?></dd>
                                        <dt>booked on</dt>
                                        <dd><?php echo (empty($value['date'])) ? '  Not Available' : $value['date']; ?></dd>
                                    </dl>
                                  
 <a href="aa.php" data-toggle="modal" data-target="#confirm-delete"><button class="btn btn-default" data-href="delete.php?id=9" data-toggle="modal" data-target="#confirm-delete">
        Delete </button></a>			
			</div>
   
					<?php  }   ?>
		
						<?php 	foreach ($booking as $value) { ?>
                           
                                <div class="booking-info clearfix cancelled">
                                    <div class="date">
                                          <a title="" href="#"><img width="70" height="70" alt="" src="<?php echo (empty($booking['image'])) ? 'uploads/User_image/1448450106.jpg' : $menu['image']; ?>"></a>
                                    </div>
                                    <h4 class="box-title"><i class="icon soap-icon-hotel blue-color circle"></i><?php echo (empty($booking['Packages'])) ? 'Package Name Not Available' : $booking['Packages']; ?><small><?php echo (empty($booking['person'])) ? 'No Any Person' : $booking['person']; ?> PERSON STAYING</small></h4>
                                    <dl class="info">
                                        <dt>Transaction  ID</dt>
                                        <dd><?php echo (empty($booking['Trance_id'])) ? '  Not Available' : $booking['Trance_id']; ?></dd>
                                        <dt>booked on</dt>
                                        <dd><?php echo (empty($booking['date'])) ? '  Not Available' : $booking['date']; ?></dd>
                                    </dl>
                                    <button class="btn-mini status">CANCELLED</button>
                                </div>
						<?php  }   ?>
							</div>
						</div>
						<!--- Pops Div-->
						 <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                </div>
            
                <div class="modal-body">
                    <p>You are about to delete one track, this procedure is irreversible.</p>
                    <p>Do you want to proceed?</p>
                    <p class="debug-url"></p>
                </div>
                
                <div class="modal-footer">
				
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <a  href="aa.php" class="btn-mini status">Delete</a>
                </div>
            </div>
        </div>
    </div>
                        <div id="wishlist" class="tab-pane fade">
                            <h2>Your Wish List</h2>
                            <div class="row image-box listing-style2 add-clearfix">
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Savona to Italy</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$170</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Hotel Hilton</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$620</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Forte Do Vale</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$120</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Roosevelt Hotel</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$170</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Miami to Florida</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$620</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Forte Do Vale</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$120</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">New York to Paris</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$170</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Hotel Hilton</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$620</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Forte Do Vale</h4>
                                            <label class="price-wrapper">
											<span class="price-per-unit">$120</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">Roosevelt Hotel</h4>
                                            <label class="price-wrapper">
                                                <span class="price-per-unit">$170</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <article class="box">
                                        <figure>
                                            <a class="hover-effect" title="" href="#"><img width="300" height="160" alt="" src="http://placehold.it/300x160"></a>
                                        </figure>
                                        <div class="details">
                                            <a class="pull-right button uppercase" href="" title="View all">select</a>
                                            <h4 class="box-title">England to Asia</h4>
                                            <label class="price-wrapper">
                                                <span class="price-per-unit">$620</span>avg/night
                                            </label>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div id="travel-stories" class="tab-pane fade">
                            <h2>Share Your Story</h2>
                            <div class="col-sm-9 no-float no-padding">
                                <form>
                                    <div class="row form-group">
                                        <div class="col-sms-6 col-sm-6">
                                            <label>Story Title</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                        <div class="col-sms-6 col-sm-6">
                                            <label>Name</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sms-6 col-sm-6">
                                            <label>Select Miles</label>
                                            <div class="selector full-width">
                                                <select>
                                                    <option>4,528 Miles</option>
                                                    <option>5,218 Miles</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sms-6 col-sm-6">
                                            <label>Email Address</label>
                                            <input type="text" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sms-6 col-sm-6">
                                            <label>Select Category</label>
                                            <div class="selector full-width">
                                                <select>
                                                    <option value="">Adventure, Romance, Beach</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Type Your Story</label>
                                        <textarea rows="6" class="input-text full-width" placeholder="please tell us about you"></textarea>
                                    </div>
                                    <hr>
                                    <div class="form-group">
                                        <h4>Do you have photos to share? <small>(Optional)</small> </h4>
                                        <div class="fileinput col-sm-6 no-float no-padding">
                                            <input type="file" class="input-text" data-placeholder="select image/s" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h4>Share with friends <small>(Optional)</small></h4>
                                        <p>Share your review with your friends on different social media networks.</p>
                                        <ul class="social-icons icon-circle clearfix">
                                            <li class="twitter"><a title="Twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                            <li class="facebook"><a title="Facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                            <li class="googleplus"><a title="GooglePlus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                            <li class="pinterest"><a title="Pinterest" href="#" data-toggle="tooltip"><i class="soap-icon-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <div class="form-group col-sm-5 col-md-4 no-float no-padding no-margin">
                                        <button type="submit" class="btn-medium full-width">SUBMIT REVIEW</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div id="settings" class="tab-pane fade">
                            <h2>Account Settings</h2>
							
                            <h5 class="skin-color">Change Your Password</h5>
							  <h4 class="error"><?php
                                    if (isset($error)) {
                                        echo $error;
                                    }
                                    ?></h4>
                            <form action="<?php echo base_url().'index.php/Login/change_p'?>" id="register-form" method="post">
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        
                                        <input type="pass" name="oldpass" class="input-text full-width" placeholder="Old Password">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        
                                        <input type="pass" name="newpass" id="newpass" class="input-text full-width" placeholder="Enter New Password">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        
                                        <input type="pass" name="c_pass" id="c_pass" class="input-text full-width" placeholder="Confirm New password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button class="btn-medium">UPDATE PASSWORD
									</button>
                                </div>
                            </form>
                            <hr>
                            <h5 class="skin-color">Change Your Email</h5>
                            <form action="<?php echo base_url().'index.php/Login/change_email'?>" id="emailedit" novalidate="novalidate"  method="post">
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <input type="email" class="input-text full-width" name="oldemail" placeholder="Old email" value="" required="required" data-msg-required="Please your email address" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                       
                                        <input type="email" class="input-text full-width"  name="uemail" placeholder="Enter Your New Email" required="required" data-msg-required="Please your email address" />
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        
                                        <input type="email" class="input-text full-width" name="cemail" value="" required="required" data-rule-equalto="input[name=uemail]" data-msg-required="Please confirm your email address" data-msg-equalto="Email addresses do not match"  placeholder="Confirm New Email">
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
                                        <a href="index.php/Index_controller/index">Home</a>
									</li>
                                    <li class="menu-item-has-children menu-color-blue">
                                        <a href="hotel-index.html">Hotels</a>
                                        <ul>
											<li><a href="index.php">Home Hotels</a></li>
											<li><a href="hotel-grid-view.php">Grid View</a></li>
											<li><a href="hotel-detailed.php">Detailed</a></li>
											<li><a href="hotel-booking.php">Booking</a></li>
											<li><a href="hotel-thankyou.php">Thank You</a></li>
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

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
    <script>
        // When the browser is ready...
		
		$(function () {

            // Setup form validation on the #register-form element
            $("#register-form").validate({
                // Specify the validation rules
                rules: {
                    oldpass: "required",
					 c_pass: "required",
				 newpass: {
                        required: true,
                        
                    },
                    c_pass: {
                        equalTo: "#newpass"
                    },
					
                    phone: {
                        required: true,
                        minlength: 10
                    },
                    agree: "required"
                },
                // Specify the validation error messages
                messages: {
                    oldpass: "Please enter your old Password",
                    oldemail: "Please enter your old Email",
                    c_email: "Please confirm your email",
                   
                    phone: {
                        required: "Please provide a Phone No.",
                        minlength: "Your Phone No. must be at least 10 characters long"
                    },
                   
                  c_pass: "Password Does Not Match",
                    agree: "Please accept our policy"
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });

        });
    </script>
	<script>
        // When the browser is ready...
       $(function () {

            // Setup form validation on the #emailedit element
            $("#emailedit").validate({
                // Specify the validation rules
                rules: {
					oldemail: "required",
					c_email: "required",
                    email: {
                        required: true
                   },
                    emailConfirm: {
                        equalTo: "#email"
                    },
					
					
                    agree: "required"
                },
                // Specify the validation error messages
               //.................
                submitHandler: function (form) 
				{
                    form.submit();
                }
            });

        });
    </script>
	 <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>

