<?php //var_dump($this->session->userdata('guest_id')); ?>
<?php
$Total_cost = $booking['Package_Cast'] + $booking['Other_Charge'] + $booking['Online_Charge'];
//echo $Total_cost;die;
?>
<style>
    .error {color: #FF0000;}
</style>
<?php //echo "<pre>";print_r($user);die; ?>
<?php // echo "<pre>"; print_r($posted['first_name']);die;?>
<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "BwcP5P1o";

// Merchant Salt as provided by Payu
$SALT = "YaTUPJvBRc";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if (!empty($_POST)) {
    //echo "<pre>";print_r($_POST);die;
    foreach ($_POST as $key => $value) {
        $posted[$key] = $value;
        //echo "<pre>";print_r( $posted[$key]);die;
    }
}

$formError = 0;

if (empty($posted['txnid'])) {
    // Generate random transaction id
    $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
    $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if (empty($posted['hash']) && sizeof($posted) > 0) {
    if (
            empty($posted['key']) || empty($posted['txnid']) || empty($posted['amount']) || empty($posted['firstname']) || empty($posted['email']) || empty($posted['phone']) || empty($posted['productinfo']) || empty($posted['surl']) || empty($posted['furl']) || empty($posted['service_provider'])
    ) {
        $formError = 1;
    } else {
        //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach ($hashVarsSeq as $hash_var) {
            $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
            $hash_string .= '|';
        }

        $hash_string .= $SALT;


        $hash = strtolower(hash('sha512', $hash_string));
        $action = $PAYU_BASE_URL . '/_payment';
    }
} elseif (!empty($posted['hash'])) {
    $hash = $posted['hash'];
    $action = $PAYU_BASE_URL . '/_payment';
}
?>

<div id="page-wrapper">

    <div class="page-title-container">
        <div class="container">
            <div class="page-title pull-left">
                <h2 class="entry-title">Hotel Booking</h2>
            </div>
            <ul class="breadcrumbs pull-right">
                <li><a href="index.php">HOME</a></li>
                <li class="active">Hotel Booking</li>
            </ul>
        </div>
    </div>
    <section id="content" class="gray-area">
        <div class="container">
            <div class="row">
                <div id="main" class="col-sms-6 col-sm-8 col-md-9">
                    <div class="booking-section travelo-box">

                        <form action="index.php/Index_controller/booking_user" id="person" method="post" id="register-form" novalidate="novalidate" name="payuForm">
                            <input type="hidden" name="curl" value="failure.php" />
                            <input type="hidden" name="surl" value="success.php" size="64" />
                            <input type="hidden" name="furl" value="failure.php" size="64" />
                            <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
                            <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
                            <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
                            <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                            <div class="person-information">
                                <h2>Your Personal Information</h2>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>first name</label>
                                        <input readonly="readonly" type="text" name="firstname" class="input-text full-width"  id="firstname" value="<?php echo (empty($user['first_name'])) ? $guest['fname'] : $user['first_name']; ?>" >
                                        <input type="hidden" name="amount" class="input-text full-width" value="<?php echo $Total_cost; ?>" placeholder="" />
                                        <input type="hidden" name="productinfo" class="input-text full-width" value="<?php echo $booking['Packages_Name']; ?>" placeholder="" />
                                        <input type="hidden" name="night" class="input-text full-width" value="<?php echo $booking['Total_nights']; ?>" placeholder="" />

                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>last name</label>
                                        <input readonly="readonly" type="text" name="lastname" class="input-text full-width" id="lastname"  value="<?php echo (empty($user['last_name'])) ? $guest['lname'] : $user['last_name']; ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>email address</label>
                                        <input readonly="readonly" type="text" name="email" class="input-text full-width" id="email"  value="<?php echo (empty($user['email'])) ? $guest['email'] : $user['email']; ?>" placeholder="" />
                                    </div>
                                    <div class="col-sm-6 col-md-5">
                                        <label>Phone number</label>
                                        <input readonly="readonly" type="text" maxlength="10" size="10" name="phone" class="input-text full-width" id="phone" value="<?php echo (empty($user['phone'])) ? $guest['phone'] : $user['phone']; ?>" placeholder="" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 col-md-5">
                                        <label>Address</label>
                                        <div class="#">
                                            <input readonly="readonly" type="text" class="input-text full-width" id="address" name="address" value="<?php
                                            if ($this->session->userdata('u_id')) {
                                                echo (empty($user['Address'])) ? '' : $user['Address'];
                                            } else {
                                                echo (empty($guest['address'])) ? '' : $guest['address'];
                                            }
                                            ?>" placeholder="" />
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <hr/>
                            <div class="person-information">
                                <h2>Guest  Information</h2>


                                <div class="form-group row" id="newguest">
                                    <div class="form-group row ">

                                        <div class="col-sm-1 col-md-1">

                                            <div class="form-group">
                                                <h4></h4>
                                            </div>
                                        </div>
                                        <div class="pull-left col-sm-1 col-md-1">

                                            <div style="width: 53px;" class="form-group">
                                                <select style="    margin-left: -14px;" name="prefix[]" class="input-text full-width">
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-2 col-md-2">

                                            <div class="form-group">
                                                <input type="text" name="firstname1[]" class="input-text full-width" required="required" data-msg-required="Please Enter First Name"  placeholder="First Name"  id="firstname">
                                                <input type="hidden" name="catagory[]" class="input-text full-width" value="Adult" placeholder="" />
                                                <input type="hidden" name="age[]" class="input-text full-width" value="0" placeholder="" />
                                                <input type="hidden" name="amount[]" class="input-text full-width" value="<?php echo $Total_cost; ?>" placeholder="" />
                                                <input type="hidden" name="productinfo[]" class="input-text full-width" value="<?php echo $booking['Packages_Name']; ?>" placeholder="" />
                                                <input type="hidden" name="night[]" class="input-text full-width" value="<?php echo $booking['Total_nights']; ?>" placeholder="" />
                                            </div>
                                        </div>

                                        <div class="col-sm-2 col-md-2">
                                            <div class="form-group">
                                                <input type="text" name="lastname1[]" class="input-text full-width" required="required" data-msg-required="Please Enter Last Name" placeholder="Last Name" id="lastname">
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3">
                                            <div class="form-group">
                                                <input type="date" name="dob[]" class="input-text full-width" required="required" data-msg-required="Please Enter Date" placeholder="DOB" id="">
                                            </div>
                                        </div>
                                        <div class="pull-left col-sm-1 col-md-1">
                                            <a style="color:grey" class="fa fa-plus-circle fa-2x pull-right bt"></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr />


                            <div class="form-group">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" > By continuing, you agree to the <a href="index.php/Index_controller/contact/"><span class="skin-color">Terms and Conditions</span></a>.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 col-md-5">
                                    <button type="submit"  name="submit" class="full-width btn-large" >CONFIRM BOOKING</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="sidebar col-sms-6 col-sm-4 col-md-3">
                    <div class="booking-details travelo-box">
                        <h4> Booking Details</h4>
                        <article class="image-box hotel listing-style1">
                            <figure class="clearfix">
                                <a href="#" class="hover-effect middle-block"><img class="middle-item" width="270" height="160" alt="" src="<?= $booking["Packages_image"]; ?>"></a>
                                <div class="travel-title">
                                    <h5 class="box-title"><?php echo $booking['Location_name']; ?><small>Packages</small></h5>
                                    <!--<a href="#" class="button">EDIT</a>-->
                                </div>
                            </figure>
                            <div class="details">
                                <div class="feedback">
                                    <div data-placement="bottom" data-toggle="tooltip" class="five-stars-container" title="4 stars"><span style="width: 80%;" class="five-stars"></span></div>
                                    <!--<span class="review">270 reviews</span>-->
                                </div>
                                <div class="constant-column-3 timing clearfix">
                                    <div class="check-in">
                                        <!--<label>Check in</label>-->
                                        <!--<span>FEB 24, 2016<br />11 AM</span>-->
                                    </div>
                                    <div class="duration text-center">
                                        <i class="soap-icon-clock"></i>
                                        <span><?php echo $booking['Total_nights']; ?> Nights</span>
                                    </div>
                                    <div class="check-out">
                                        <!--<label>Check out</label>-->
                                        <!--<span>MAR 02, 2016<br />2 PM</span>-->
                                    </div>
                                </div>
                                <div class="guest">
                                    <small class="uppercase"><?php echo $booking['Package_Entitlement']; ?></span></small>
                                </div>
                            </div>
                        </article>

                        <h4>Other Details</h4>
                        <dl class="other-details">
                            <dt class="feature">Package:</dt><dd class="value"><?php echo $booking['Packages_Name']; ?></dd>
                            <dt class="feature">Package Cost:</dt><dd class="value">RS. <?php echo $booking['Package_Cast']; ?></dd>
                            <dt class="feature">GST @ 3.625%:</dt><dd class="value">RS. <?php echo $booking['Other_Charge']; ?></dd>
                            <dt class="feature">Online Charge:</dt><dd class="value">Rs. <?php echo $booking['Online_Charge']; ?></dd>
                            <dt class="total-price">Total Price</dt><dd class="total-price-value">RS. <?php echo $Total_cost; ?></dd>
                        </dl>
                    </div>

                    <!--<div class="travelo-box contact-box">
                        <h4>Need Blue Sky Excursions Help?</h4>
                        <p>Blue Sky Excursions is a Discount Package based travel club. It is a lifestyle company that focuses on travel and tourism..</p>
                        <address class="contact-details">>
                            <br>
                            <span class="contact-phone"><i class="soap-icon-phone"></i>+91-22-4944 4944</span
                            <a class="contact-email" href="saraswati.jadhav@softbunch.com">info@blueskyexcursions.in</a>
                        </address>
                    </div>-->
                </div>
            </div>
        </div>
    </section>



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
        tjq(document).ready(function () {
            tjq('.revolution-slider').revolution(
                    {
                        dottedOverlay: "none",
                        delay: 8000,
                        startwidth: 1170,
                        startheight: 646,
                        onHoverStop: "on",
                        hideThumbs: 10,
                        fullWidth: "on",
                        forceFullWidth: "on",
                        navigationType: "none",
                        shadow: 0,
                        spinner: "spinner4",
                        hideTimerBar: "on",
                    });
        });
    </script>
   
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
    <!--    <script type="text/javascript" src="assest/js/validation.js"></script>-->

    <script>
        //        $(document).ready(function(){
        //                  //if (iCnt != 0) { $('.new' + iCnt).remove(); iCnt = iCnt - 1;iCntt = iCntt - 1 }
        //            })
        //        })   var iCnt = 0;
        //            var nw = 0;
        //            var iCntt = 1;
        //            $(".bt").click(function(){
        //                iCnt = iCnt + 1;
        //                nw = nw + 1;
        //                iCntt = iCntt + 1;
        //                $("#newguest").append("<div class='form-group row new"+iCnt+"'><a id='btt"+nw+"' onclick='del(this.id)' class='btn btn-success  btt'>delete</a><div class='col-sm-1 col-md-1'><div class='form-group'><h4>"+iCntt+".</h4></div></div><div class='col-sm-2 col-md-2'><div class='form-group'><select name='prefix[]' class='input-text full-width'><option value='Mr'>Mr</option><option value='Mrs'>Mrs</option><option value='Ms'>Ms</option></select></div></div><div class='col-sm-4 col-md-4'><div class='form-group'><input type='text' name='firstname1[]' class='input-text full-width' placeholder='First Name' id='firstname'><input type='hidden' name='catagory[]' class='input-text full-width' value='Adult' placeholder='' /><input type='hidden' name='age[]' class='input-text full-width' value='0' placeholder='' /></div></div><div class='col-sm-3 col-md-3'><input type='text' name='lastname1[]' class='input-text full-width' placeholder='Last Name' id='lastname'></div></div>");
        //            });
        //            
        //        })
        var nw = 0;
        var iCntt = 1;
        $(".bt").click(function () {
            // console.log("test");
            iCntt = iCntt + 1;
            $("#newguest").append("<div id='new' class='form-group row'><a id='btt" + nw + "' onclick='del(this.id)' style='color:red' class='fa fa-minus-circle fa-2x  btt'></a><div class='col-sm-1 col-md-1'><div class='form-group'><h4></h4></div></div><div class='col-sm-1 col-md-1'><div style='    width: 53px;' class='form-group'><select style='margin-left: -14px;' name='prefix[]' class='input-text full-width'><option value='Mr'>Mr</option><option value='Mrs'>Mrs</option><option value='Ms'>Ms</option></select></div></div><div class='col-sm-2 col-md-2    '><div class='form-group'><input type='text' name='firstname1[]' required='required' data-msg-required='Please Enter First Name' class='input-text full-width' placeholder='First Name' id='firstname' aria-required='true' aria-invalid='false'><input type='hidden' name='catagory[]' class='input-text full-width' value='Adult' placeholder='' /><input type='hidden' name='age[]' class='input-text full-width' value='0' placeholder='' /><input type='hidden' name='amount[]' class='input-text full-width' value='<?php echo $Total_cost; ?>' placeholder='' /><input type='hidden' name='productinfo[]' class='input-text full-width' value='<?php echo $booking['Packages_Name']; ?>' placeholder='' /><input type='hidden' name='night[]' class='input-text full-width' value='<?php echo $booking['Total_nights']; ?>' placeholder= /></div></div><div class='col-sm-2 col-md-2'><input type='text' name='lastname1[]' class='input-text full-width' required='required' data-msg-required='Please Enter Last Name' placeholder='Last Name' id='lastname'></div><div class='col-sm-3 col-md-3'><div class='form-group'><input type='date' name='dob[]' class='input-text full-width' required='required' data-msg-required='Please Enter DOB' placeholder='DOB' id=''></div></div></div>");
            nw++;
        });
        $("#btt1").click(function () {
            console.log("test");
        });

    </script>
    <script>
        function del(id)
        {
            iCntt = iCntt - 1;
            document.getElementById('new').remove();

        }
    </script>

    <script>
        // When the browser is ready...
        $(document).ready(function () {

            // Setup form validation on the #register-form element
            $("#person").validate({
                // Specify the validation rules
                rules: {
                    firstname1: "required",
                    lastname1: "required",
                    dob: "required",
                },
                // Specify the validation error messages
                messages: {
                    firstname1: "Please enter your first name",
                    lastname1: "Please enter your last name",
                    dob: "Please enter DOB",
                },
                submitHandler: function (form) {
                    form.submit();
                }
            });

        });
    </script>

</body>
</html>

