<?php //echo "<pre>"; print_r($top_user);die;         ?>

<style>
    .error {color: #FF0000;}
</style>

<body>
    <style type="text/css">

        input:required:invalid, input:focus:invalid {
            background-image: url(assest/images/form-icon/nvalid.png);
            background-position: right top;
            background-repeat: no-repeat;
        }
        input:required:valid {
            background-image: url(assest/images/form-icon/valid.png);
            background-position: right top;
            background-repeat: no-repeat;
        }

    </style>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            <div class="topnav hidden-xs">
                <div class="container">
                    <ul class="quick-menu pull-left">
                        <li><a href="<?php echo base_url(); ?>index.php/User_login/User_account">My Account</a></li>
                        <li class="ribbon">
                            <a href="index.php/Index_controller/index">English</a>
                            <ul class="menu mini">
                                <li class="active"><a href="index.php/Index_controller/index" title="English">English</a></li>
                                <li><a href="index.php/Index_controller/index" title="Dansk">Dansk</a></li>
                                <li><a href="index.php/Index_controller/index" title="Deutsch">Deutsch</a></li>
                                <li><a href="index.php/Index_controller/index" title="Español">Español</a></li>
                                <li><a href="index.php/Index_controller/index" title="Français">Français</a></li>
                                <li><a href="index.php/Index_controller/index" title="Italiano">Italiano</a></li>
                                <li><a href="index.php/Index_controller/index" title="Magyar">Magyar</a></li>
                                <li><a href="index.php/Index_controller/index" title="Nederlands">Nederlands</a></li>
                                <li><a href="index.php/Index_controller/index" title="Norsk">Norsk</a></li>
                                <li><a href="index.php/Index_controller/index" title="Polski">Polski</a></li>
                                <li><a href="index.php/Index_controller/index" title="Português">Português</a></li>
                                <li><a href="index.php/Index_controller/index" title="Suomi">Suomi</a></li>
                                <li><a href="index.php/Index_controller/index" title="Svenska">Svenska</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="quick-menu pull-right">
                        <?php
                        if ($top_user !== null) {
                            ?>
                            <li><a href="index.php/User_login/User_account" > <?php echo $top_user['first_name']; ?>  </a></li>
                            <li><a href="index.php/User_login/User_account" ><li class="ribbon menu-color-blue">
                                        <a>user</a>
                                        <ul class="menu mini uppercase">
                                            <li><a href="index.php/User_login/User_account/#dashboard" class="location-reload">Dashboard</a></li>
                                            <li><a href="index.php/User_login/User_account/#profile" class="location-reload">Profile</a></li>
                                            <li><a href="index.php/User_login/User_account/#booking" class="location-reload">Bookings</a></li>
                                            <li><a href="index.php/User_login/User_account/#settings" class="location-reload">settings</a></li>
                                            <li><a href="http://localhost/Vandana_work/blueskyexcursion/index.php/Login/logout">signout</a></li>
                                        </ul>
                                    </li> </a></li>

                            <?php
                        } else {
                            ?>
                            <li><a href="#travelo-login" class="soap-popupbox">  LOGIN  </a></li>
                            <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                        <?php } ?>


                        <li class="ribbon currency">
                            <a href="index.php/Index_controller/index" title="">INR</a>
                            <ul class="menu mini">
                                <li class="active"><a href="index.php/Index_controller/index" title="INR">INR</a></li>
                                <li><a href="index.php/Index_controller/index" title="AUD">AUD</a></li>
                                <li><a href="index.php/Index_controller/index" title="BRL">BRL</a></li>
                                <li><a href="index.php/Index_controller/index" title="CAD">CAD</a></li>
                                <li><a href="index.php/Index_controller/index" title="CAD">USD</a></li>
                                <li><a href="index.php/Index_controller/index" title="CHF">CHF</a></li>
                                <li><a href="index.php/Index_controller/index" title="CNY">CNY</a></li>
                                <li><a href="index.php/Index_controller/index" title="CZK">CZK</a></li>
                                <li><a href="index.php/Index_controller/index" title="DKK">DKK</a></li>
                                <li><a href="index.php/Index_controller/index" title="EUR">EUR</a></li>
                                <li><a href="index.php/Index_controller/index" title="GBP">GBP</a></li>
                                <li><a href="index.php/Index_controller/index" title="HKD">HKD</a></li>
                                <li><a href="index.php/Index_controller/index" title="HUF">HUF</a></li>
                                <li><a href="index.php/Index_controller/index" title="IDR">IDR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="main-header">
                <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                    Mobile Menu Toggle
                </a>
                <?php
//                if ($this->session->flashdata('msg')) {
//                    $message = $this->session->flashdata('msg');
                ?>
                <div style="text-align: center;color: red;font-size: 20px;" class="<?php // echo $message['class']       ?>"><?php //echo $message['message'];       ?>
                </div>
                <?php
                //}
                ?>

                <div style="text-align: center;font-size: 18px; color: red" class="success" >
                    <?php
                    if ($this->session->flashdata('msg')) {
                        $message = $this->session->flashdata('msg');
                        echo "<script>alert('This Email Id already registered, please signup with differant Email.')</script>";
                    }
                    ?>
                    <?php
                    if ($this->session->flashdata('msg2')) {
                        $message = $this->session->flashdata('msg2');
                        echo "<script>alert('Incorrect Email or Password.')</script>";
                    }
                    ?>
                </div>
                <div class="container">
                    <h1 class="logo navbar-brand">
                        <a href="index.php/Index_controller/index" title="Blue Sky - home">
                            <img src="assest/images/logo.png" alt="Blue Sky " />
                        </a>
                    </h1>
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Home</a>
                            </li>
                            <li class="menu-item-has-children megamenu-menu">
                                <a href="index.php/Index_controller/leisures">Leisure</a>
                                <div class="megamenu-wrapper container" data-items-per-column="4">
                                    <div class="megamenu-holder">
                                        <ul class="megamenu">
                                            <li class="menu-item-has-children">
                                                <a href="index.php/Index_controller/leisures">All Leisure Package</a>
                                                <ul class="clearfix">
                                                    <?php
                                                    foreach ($menu as $data) {
                                                        ?>
                                                        <li><a href="index.php/Index_controller/i_package/<?php
                                                            echo $data["Location_name"];
                                                            ?>"><?= $data["Location_name"]; ?></a></li>
                                                            <?php
                                                        }
                                                        ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Flights</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Hotels</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Flight + Hotels</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Cars</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Cruises</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="index.php/Index_controller/index">Utilities</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div>
                    <center>
                        <h1>User Signup</h1>
                    </center>
                </div>

                <form id="register-form2" action ="<?php echo base_url(); ?>index.php/Login/save_signup" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="first name" name="f_name" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="last name" name="l_name" >
                    </div>
                    <div class="form-group">
                        <input type="email" class="input-text full-width" placeholder="email address" name="email" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" maxlength="10" size="10" placeholder="Phone Number" name="phone" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" id="pass" placeholder="password" name="pass" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" name="cpass" placeholder="confirm password" >
                    </div>
                    <div class="form-group">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Tell me about Blue Sky news
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <p class="description">By signing up, I agree to Blue Sky's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                    </div>
                    <button type="submit" class="full-width btn-medium">SIGNUP</button>
                </form>
                <div class="seperator"></div>
                <p>Already a Blue Sky member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div>
                    <center>
                        <h1>User Login</h1>
                    </center>
                </div>
                <form id="login1" action ="<?php echo base_url(); ?>index.php/Login/check_user" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="email" class="input-text full-width" placeholder="email address" name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width"  placeholder="password" name="pass" required>
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label><input type="checkbox"> Remember me </label>
                        </div>
                    </div>
                    <div><button type="submit" class="full-width btn-medium">Login</button></div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>
        <link rel="stylesheet" href="assest/css/bootstrap.min.css">
        <link rel="stylesheet" href="assest/css/font-awesome.min.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assest/css/animate.min.css">

        <!-- Current Page Styles -->
        <link rel="stylesheet" type="text/css" href="assest/components/revolution_slider/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/revolution_slider/css/style.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/jquery.bxslider/jquery.bxslider.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="assest/components/flexslider/flexslider.css" media="screen" />

        <!-- Main Style -->
        <link id="main-style" rel="stylesheet" href="assest/css/style.css">

        <!-- Custom Styles -->
        <link rel="stylesheet" href="assest/css/custom.css">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="assest/css/updates.css">

        <!-- Updated Styles -->
        <link rel="stylesheet" href="assest/css/updates.css">

        <!-- Responsive Styles -->
        <link rel="stylesheet" href="assest/css/responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assest/js/validation.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
        <script>
            // When the browser is ready...
            $(document).ready(function () {

                // Setup form validation on the #register-form element
                $("#register-form2").validate({
                    // Specify the validation rules
                    rules: {
                        f_name: "required",
                        l_name: "required",
                        email: "required",
                        pass: "required",
                        cpass: "required",
                        phone: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        pass: {
                            required: true,
                        },
                                cpass: {
                                    equalTo: "#pass"
                                },
                        phone: {
                            required: true,
                            minlength: 10
                        },
                        agree: "required"
                    },
                    // Specify the validation error messages
                    messages: {
                        f_name: "Please enter your first name",
                        l_name: "Please enter your last name",
                        email: "Please enter your email",
                        phone: {
                            required: "Please provide a Phone No.",
                            minlength: "Your Phone No. must be at least 10 characters long"
                        },
                        pass: "Please enter password address",
                        cpass: "password Does Not Match",
                        agree: "Please accept our policy"
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }
                });
                $("#login1").validate({
                    // Specify the validation rules
                    rules: {
                        email: "required",
                        pass: "required",
                        email: {
                            required: true,
                            email: true
                        },
                        pass: {
                            required: true,
                        },
                                cpass: {
                                    equalTo: "#pass"
                                },
                    },
                    // Specify the validation error messages
                    messages: {
                        email: "Please enter your email",
                        pass: "Please enter password",
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }
                });

            });
        </script>
        <script>
            tjq = jQuery.noConflict();
        </script>   
        <script>
            // assumes you're using jQuery
            tjq(document).ready(function () {
                tjq("#new").fadeOut(4000);
            });

        </script>
