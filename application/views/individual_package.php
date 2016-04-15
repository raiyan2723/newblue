<?php 
//echo "<pre>"; print_r($home_data);echo "</pre>";

?>
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
                  <div class="post-meta">
                     <div class="post-content-wrapper">
                        <figure class="image-container">
                           <a href="index.php/Index_controller/thailand" ><img src="<?=$home_data[0]["Packages_image"]; ?>" alt="" /></a>
                        </figure>
						    <?php
                            $i=0;
							foreach ($home_data as $employee) { ?>			
                        <div class="details">
                           <h2 class="text-uppercase"><?php echo $employee["Packages_Name"]; ?></h2>
                           <div class="tab-container full-width-style white-bg">
                              <ul class="tabs">
                                 <li class="active"><a href="#first-tab<?= $i; ?>" data-toggle="tab"><i class="soap-icon-beach circle"></i>Package</a></li>
                                 <li class=""><a href="#second-tab<?= $i+1 ?>" data-toggle="tab"><i class="soap-icon-check circle"></i>Inclusion</a></li>
                                 <li class=""><a href="#third-tab<?= $i+2 ?>" data-toggle="tab"><i class="soap-icon-restricted circle"></i>Exclusion</a></li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane fade active in" id="first-tab<?= $i; ?>">
                                    <h2 class="tab-content-title"><?=$employee["Package_Details_titel"]; ?></h2>
                                    <p>The entitlement is for: </br> <?=$employee["Package_Entitlement"]; ?></br></p>
                                    <p><span class="price"><small>PACKAGE COST</small>Rs.  <?=$employee["Package_Cast"]; ?></span> 
                                    </p>
                                    <p>&nbsp;</p>
                                    <p>Simple And Easy booking process </br> <?=$employee["Package_Bokking_Process"]; ?></p>
                                    <button><a href="index.php/Index_controller/is_login_in/<?php echo $employee["l_id"]; ?>">Book Now</a></button>
                                 </div>
                                 <div class="tab-pane fade" id="second-tab<?= $i+1; ?>">
                                    <h2 class="tab-content-title">Inclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <?=$employee["Inclusion"]; ?>
                                    </ul>
                                    </p>
                                 </div>
                                 <div class="tab-pane fade" id="third-tab<?= $i+2; ?>">
                                    <h2 class="tab-content-title">Exclusion</h2>
                                    <p>
                                    <ul class="discover triangle">
                                       <?=$employee["Exclusion"]; ?>
                                    </ul>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
				  <?php  $i++; } ?>                         
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
