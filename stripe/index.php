<?php
require('config.php');
session_start();
$total = $_SESSION['total_price'];
$s = $total * 100 * 75;
?>
<form action="submit.php" method="post">
	<script
		src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		data-key="<?php echo $publishableKey?>"
		data-amount="<?php echo $s?>"
		data-name="Gift Cards and Coupons"
		data-description="Gift Cards and Coupons"
		data-image="https://www.meme-arsenal.com/memes/100773de10bd652a2366e129c5053a0a.jpg"
		data-currency="inr"
		data-email="atharvasawant31221@gmail.com"
	>
	</script>

</form>