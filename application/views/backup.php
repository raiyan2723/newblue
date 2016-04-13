<div class="page-title-container">
   <div class="container">
      <div class="page-title pull-left">
         <h2 class="entry-title">Leisures</h2>
      </div>
      <ul class="breadcrumbs pull-right">
         <li><a href="index.php/Index_controller/index">HOME</a></li>
         <li class="active">Leisure</li>
      </ul>
   </div>
</div>
<section id="content">
   <div class="container">
      <div id="main">
	  <div class="page">
            <div class="post-content">
               <div class="blog-infinite">
			    <?php foreach ($van as $employee) { ?>
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="index.php/Index_controller/thailand" ><img src="<?=$employee["Packages_image"]; ?>" alt="" /></a>
                        </figure>
                        <div class="details">
                           <h2> SILVER PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#first-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#second-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#third-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="first-tab">
                                    <h2 class="tab-content-title">Silver Package Details</h2>
                                    <p>The entitlement is for: </br> <?=$employee["Package_Details"]; ?></br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs.  <?=$employee["Packages_Cost"]; ?></span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple. </br>  *Taxes Extra Applicable</p>
                                    <button><a href="index.php/Index_controller/booking_silver">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="second-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 1 nights in Bangkok</li>
                                       <li>Accommodation for 2 nights in Pattaya </li>
                                       <li>Coral Island with lunch</li>
                                       <li>Alcazar Show </li>
                                       <li>Half Day Bangkok City Tour,</li>
                                       <li>Buddha Temple and Gems Gallery </li>
                                       <li>Daily breakfast & Dinner </li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="third-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Airfare</li>
                                       <li>Visa Cost & Insurance Premium.</li>
                                       <li>Peak Season charges are extra.</li>
                                       <li>Any other expenses not mention in the package inclusions.</li>
                                       <li>Any other expenses of personal nature.</li>
                                       <li>Tips/Portages at hotels, airport & seaport.</li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="details">
                           <h2> GOLD PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#forth-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#fifth-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#sixth-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="forth-tab">
                                    <h2 class="tab-content-title">Gold Package Details</h2>
                                    <p>The entitlement is for: </br> 2 Night Pattaya | 2 Night Bangkok In a 3 star resort/hotel </br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs.  20,000</span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple. </br>  *Taxes Extra Applicable</p>
                                    <button><a href="index.php/Index_controller/booking_gold">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="fifth-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 2 nights in Bangkok</li>
                                       <li>Accommodation for 2 nights in Pattaya </li>
                                       <li>Coral Island with lunch</li>
                                       <li>Alcazar Show </li>
                                       <li>Half Day Bangkok City Tour,</li>
                                       <li>Buddha Temple and Gems Gallery </li>
                                       <li>Daily breakfast & Dinner </li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="sixth-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Airfare</li>
                                       <li>Visa Cost & Insurance Premium.</li>
                                       <li>Peak Season charges are extra.</li>
                                       <li>Any other expenses not mention in the package inclusions.</li>
                                       <li>Any other expenses of personal nature.</li>
                                       <li>Tips/Portages at hotels, airport & seaport.</li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
				  <?php } ?> 
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="index.php/Index_controller/malaysia" ><img src="assest/images/leisure/malaysia.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                           <h2> MALAYSIA PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#seven-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#eight-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#nine-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="seven-tab">
                                    <h2 class="tab-content-title">Malaysia Package Details</h2>
                                    <p>The entitlement is for: </br> 3 Nights / 4 Days In a 3 star resort/hotel </br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs.  25,000</span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple.</p>
                                    <button><a href="package-booking-malaysia.php">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="eight-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 2 nights in Kuala Lumpur, Malaysia</li>
                                       <li>Accommodation for 1 night in Genting Highland</li>
                                       <li>One way cable car ride to Genting Highland</li>
                                       <li>Visit to Batu caves</li>
                                       <li>Kuala Lumpur City Tour on SIC basis</li>
                                       <li>Daily breakfast & Dinner </li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="nine-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li> Airfare</li>
                                       <li> Visa Cost & Insurance Premium.</li>
                                       <li> Peak Season charges are extra.</li>
                                       <li> Any other expenses not mention in the package inclusions.</li>
                                       <li> Any other expenses of personal nature.</li>
                                       <li> Tips/Portages at hotels, airport & seaport</li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="index.php/Index_controller/singapore"><img src="assest/images/leisure/singapore.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                           <h2> SINGAPORE PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#ten-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#eleven-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#twelve-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="ten-tab">
                                    <h2 class="tab-content-title">Package Details</h2>
                                    <p>The entitlement is for: </br> 3 Nights / 4 Days In a 3 star resort/hotel </br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs.  30,000</span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple.</p>
                                    <button><a href="package-booking-singapore.php">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="eleven-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 3 nights in Singapore.</li>
                                       <li>Visit Statue of Merilon and Raffles’ Landing site.</li>
                                       <li>Tour to Suntec city and Fountain of Wealth.</li>
                                       <li>Night Safari.</li>
                                       <li>Half day Panoramic Singapore City Drive on SIC basis.</li>
                                       <li>Daily breakfast.</li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="twelve-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Airfare</li>
                                       <li>Visa Cost & Insurance Premium.</li>
                                       <li>Peak Season charges are extra.</li>
                                       <li>Any other expenses not mention in the package inclusions.</li>
                                       <li>Any other expenses of personal nature.</li>
                                       <li>Tips/Portages at hotels, airport & seaport. </li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="#" ><img src="assest/images/leisure/dubai.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                           <h2> DUBAI PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#thirteen-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#forteen-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#fifteen-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="thirteen-tab">
                                    <h2 class="tab-content-title">Package Details</h2>
                                    <p>The entitlement is for: </br> 4 Nights / 5 Days In a 3 star resort/hotel </br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs. 45,000 </span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple.</p>
                                    <button><a href="package-booking-dubai.php">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="forteen-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 4 nights in Dubai</li>
                                       <li>Dhow Cruise with exotic Dinner</li>
                                       <li>Enjoy Belly dance on Desert Safari with Dinner</li>
                                       <li>Dubai City Tour on SIC basis</li>
                                       <li>Musical Fountain and Burj Khalifa at Dubai Mall </li>
                                       <li>Daily breakfast </li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="fifteen-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Airfare</li>
                                       <li>Visa Cost & Insurance Premium.</li>
                                       <li>Peak Season charges are extra.</li>
                                       <li>Any other expenses not mention in the package inclusions.</li>
                                       <li>Any other expenses of personal nature.</li>
                                       <li> Tips/Portages at hotels, airport & seaport. </li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="#" ><img src="assest/images/leisure/hongkong.jpg" alt="" /></a>
                        </figure>
                        <div class="details">
                           <h2> HONGKONG PACKAGE </h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#sixteen-tab" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#seventeen-tab" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#eighteen-tab" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="sixteen-tab">
                                    <h2 class="tab-content-title">Package Details</h2>
                                    <p>The entitlement is for: </br> 2 Nights Hongkong / 2 Night Macau In a 3 star resort/hotel </br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs. 55,000 </span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> *The rates are per person and not couple.</p>
                                    <button><a href="package-booking-hongkong.php">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="seventeen-tab">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Accommodation for 2 nights in Macau</li>
                                       <li>Accommodation for 2 nights in Hongkong</li>
                                       <li>Transfer Hongkong – Macau - Hongkong</li>
                                       <li>Macau city tour with Indian Lunch</li>
                                       <li>Hongkong city Tour includes Sky 100 + one way Peak Tram Ride</li>
                                       <li>Visit to the Ocean Park </li>
                                       <li>Daily breakfast</li>
                                       <li>All land transfers*</li>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="eighteen-tab">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <li>Airfare</li>
                                       <li>Visa Cost & Insurance Premium.</li>
                                       <li>Peak Season charges are extra.</li>
                                       <li>Any other expenses not mention in the package inclusions.</li>
                                       <li>Any other expenses of personal nature.</li>
                                       <li>Tips/Portages at hotels, airport & seaport. </li>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<!-- Javascript -->
<script type="text/javascript" src="assest/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="assest/js/jquery.noconflict.js"></script>
<script type="text/javascript" src="assest/js/modernizr.2.7.1.min.js"></script>
<script type="text/javascript" src="assest/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="assest/js/jquery.placeholder.js"></script>
<script type="text/javascript" src="assest/js/jquery-ui.1.10.4.min.js"></script>
<!-- Twitter Bootstrap -->
<script type="text/javascript" src="assest/js/bootstrap.js"></script>
<!-- Flex Slider -->
<script type="text/javascript" src="assest/components/flexslider/jquery.flexslider-min.js"></script>
<!-- Fit Video -->
<script type="text/javascript" src="assest/js/jquery.fitvids.min.js"></script>
<!-- parallax -->
<script type="text/javascript" src="assest/js/jquery.stellar.min.js"></script>
<!-- waypoint -->
<script type="text/javascript" src="assest/js/waypoints.min.js"></script>
<!-- load page Javascript -->
<script type="text/javascript" src="assest/js/theme-scripts.js"></script>
<script type="text/javascript" src="assest/js/scripts.js"></script>
</body>
</html>
