<div class="destinations section">
                <div class="container">
                    <h2>Leisure Packages</h2>
					
                    <div class="row image-box style1 add-clearfix">
					<?php foreach ($home_data as $employee) { ?>
                        <div class="col-sms-6 col-sm-6 col-md-3">
						
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1">
                                    <a href="index.php/Index_controller/i_package/<?php echo $employee["Country_name"];?>" title="" ><img src="<?=$employee["image"]; ?>" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small>STARTING</small>Rs. <?=$employee["Packages_Cost"]; ?></span>
                                    <h4 class="box-title"><a href="index.php/Index_controller/i_package/<?php echo $employee["Country_name"];?>"><?=$employee["City_name"]; ?><small><?=$employee["Country_name"]; ?></small></a></h4>
                                </div>
                            </article>
                        </div>
						<?php } ?> 
						
                       <div class="col-sms-6 col-sm-6 col-md-3">
                            <article class="box">
                                <figure class="animated" data-animation-type="fadeInDown" data-animation-duration="1" data-animation-delay="0.9">
                                    <a href="index.php/Index_controller/leisures" title="" ><img src="assest/images/home/more-package.jpg" alt="" width="270" height="160" /></a>
                                </figure>
                                <div class="details">
                                    <span class="price"><small></verysmall> </span>
                                    <h4 class="box-title"><a href="index.php/Index_controller/leisures">More<small>PACKAGES</small></a></h4>
                                </div>
                            </article>
                        </div>
						
                    </div>
                </div>
            </div>
            