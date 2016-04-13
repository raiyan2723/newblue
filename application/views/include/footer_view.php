<footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
							 <?php foreach ($discover_data as $employee) { ?>
                                <li class="col-xs-6"><a href="index.php/Index_controller/<?php echo $employee["Name"]; ?>"><?php echo $employee["Name"]; ?></a></li>
							
							 <?php } ?>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Travel News</h2>
                            <ul class="travel-news">
							<?php foreach ($news_data as $employee) { ?>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="<?=($employee["image"]); ?>" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#"><?=($employee["title"]); ?></a></h5>
                                        <p><?=($employee["content"]); ?>..</p>
                                        <span class="date"><?=($employee["date"]); ?></span>
                                    </div>
                                </li>
							<?php }?>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br/>
							<form action="index.php/Index_controller/subscribe" method="post">
							<div class="input-group">
							<input type="email" class="form-control" name="email" placeholder="Your Email" required>
							<span class="input-group-btn">
							<button class="btn btn-secondary" type="submit">Subscribe</button>
							</span>
							</div>
                           <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>About Blue Sky</h2>
                            <p><?php echo $footer_about["content"];?></p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i><?php echo $footer_about["phone"];?></span>
                                <br />
                                <a href="index.php/Index_controller/index" class="contact-email"><?php echo $footer_about["email"];?></a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.php/Index_controller/index" title="Blue Sky - home">
                            <img src="assest/images/logo.png" alt="Blue Sky " />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2016 Blue Sky</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="assest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assest/js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="assest/js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="assest/js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="assest/js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="assest/js/jquery-ui.1.10.4.min.js"></script>
    
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