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
               <li><a href="<?php echo base_url();?>index.php/User_login/User_account">My Account</a></li>
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
               <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
               <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
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
		 
         <form action ="<?php echo base_url();?>index.php/Login/save_signup" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <input type="text" class="input-text full-width" placeholder="first name" name="f_name" required>
            </div>
            <div class="form-group">
               <input type="text" class="input-text full-width" placeholder="last name" name="l_name" required>
            </div>
            <div class="form-group">
               <input type="email" class="input-text full-width" placeholder="email address" name="email" required>
            </div>
            <div class="form-group">
               <input type="password" class="input-text full-width" placeholder="password" name="pass" required>
            </div>
            <div class="form-group">
               <input type="password" class="input-text full-width" placeholder="confirm password" required>
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
         <form action ="<?php echo base_url();?>index.php/Login/check_user" method="POST" enctype="multipart/form-data">
            <div class="form-group">
               <input type="email" class="input-text full-width" placeholder="email address" name="email">
            </div>
            <div class="form-group">
               <input type="password" class="input-text full-width" placeholder="password" name="pass" required>
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
