
<link href="<?php echo assets_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="<?php echo assets_url() ?>js/bootstrap.min.js" type="text/javascript"></script>

<?php
$status = $_POST["status"];
$firstname = $_POST["firstname"];
$amount = $_POST["amount"];
$txnid = $_POST["txnid"];
$posted_hash = $_POST["hash"];
$key = $_POST["key"];
$productinfo = $_POST["productinfo"];
$email = $_POST["email"];
$salt = "GQs7yium";

If (isset($_POST["additionalCharges"])) {
    $additionalCharges = $_POST["additionalCharges"];
    $retHashSeq = $additionalCharges . '|' . $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
} else {

    $retHashSeq = $salt . '|' . $status . '|||||||||||' . $email . '|' . $firstname . '|' . $productinfo . '|' . $amount . '|' . $txnid . '|' . $key;
}
$hash = hash("sha512", $retHashSeq);

if ($hash != $posted_hash) {
    echo "Invalid Transaction. Please try again";
    echo "<a class='btn btn-success' href='" . site_url('Wallet/error_wallet') . "'>Next</a>";
} else {

    echo "<h3>Thank You. Your order status is " . $status . ".</h3>";
    echo "<h4>Your Transaction ID for this transaction is " . $txnid . ".</h4>";
    echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>";
    echo "<a class='btn btn-success' href='" . site_url('Index_controller/money_added?transaction="' . $txnid . '"&amount='.$amount.'') . "'>Next</a>";
}
?>	