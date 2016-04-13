

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="index.php/Index_controller/index">HOME</a></li>
                    
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3769.2885476029946!2d72.82597731485913!3d19.138842654967714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1ssunrise+lokhandwala+andheri+west-400053!5e0!3m2!1sen!2sin!4v1456309984420" width="1170" height="225" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <div class="contact-address row block">
                        <div class="col-md-4">
                            <div class="icon-box style5">
                                <i class="soap-icon-phone"></i>
                                <div class="description">
                                    <small>We are on 24/7</small>
                                    <h5>Local: <?php echo $contact_details['phone']; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box style5">
                                <i class="soap-icon-message"></i>
                                <div class="description">
                                    <small>Send us email on</small>
                                    <h5><?php echo $contact_details['email']; ?></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-box style5">
                                <i class="soap-icon-address"></i>
                                <div class="description">
                                    <small>meet us at</small>
                                    <h5><?php echo $contact_details['address']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="travelo-box box-full">
                        <div class="contact-form">
                            <h2>Send us a Message</h2>
                            <form action="<?php echo base_url();?>index.php/Index_controller/save_contact" method="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" name="name" class="input-text full-width">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email</label>
                                            <input type="email" name="email" class="input-text full-width">
                                        </div>
                                        <div class="form-group">
                                            <label>Subject</label>
                                            <input type="text" name="subject" class="input-text full-width">
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            <label>Your Message</label>
                                            <textarea name="message" rows="8" class="input-text full-width" placeholder="write message here"></textarea>
                                        </div>
                                    </div>
                                </div>
								<div class="col-sms-offset-6 col-sm-offset-6 col-md-offset-8 col-lg-offset-9">
                                    <button class="btn-medium full-width">SEND MESSAGE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
       
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="assest/js/bootstrap.js"></script>

    <!-- Google Map Api -->
    <script type='text/javascript' src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script type="text/javascript" src="assest/js/gmap3.min.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="assest/js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="assest/js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="assest/js/theme-scripts.js"></script>
    <script type="text/javascript" src="assest/js/scripts.js"></script>

    <script type="text/javascript">
        tjq(".travelo-google-map").gmap3({
            map: {
                options: {
                    center: [48.85661, 2.35222],
                    zoom: 12
                }
            },
            marker:{
                values: [
                    {latLng:[48.85661, 2.35222], data:"Paris"}

                ],
                options: {
                    draggable: false
                },
            }
        });
    </script>
</body>
</html>

