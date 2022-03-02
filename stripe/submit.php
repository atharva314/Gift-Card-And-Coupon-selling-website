<?php
require('config.php');
session_start();
$total = $_SESSION['total_price'];
$s = $total * 100 * 75;
if(isset($_POST['stripeToken'])){
	\Stripe\Stripe::setVerifySslCerts(false);

	$token=$_POST['stripeToken'];

	$data=\Stripe\Charge::create(array(
		"amount"=>"$s",
		"currency"=>"inr",
		"description"=>"Giftcard Purchase",
		"source"=>$token,
	));

	echo "<pre>";
	print_r($data);
}
?>