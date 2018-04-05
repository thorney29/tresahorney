<?php 
include("includes/top.php"); 
?>

<title>Make a Payment || Modern Cultivator</title>
<?php 
include("includes/middle.php"); 
?>
<!-- Custom page code -->

<article>  
<h1>Payment for Services</h1>
 

<p style="text-align:center;">
Pay your invoice to Tresa Horney, LLC.<br/>Enter your payment amount and payment notes in the form below. 

	<!-- START PAYPAL FORM -->

	<div class="pp-canvasarea">
	
		<div class="pp-formbox">

		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" class="pp-form">
		  	<img src="/img/paypal-badge.png" class="pp-badge" alt="Payments through Paypal">
			<input type="hidden" name="cmd" value="_xclick">
			<input type="hidden" name="business" value="tresa@tresahorney.com">
			<input type="hidden" name="item_name" value="Paypal Payment">
			<input type="hidden" name="no_note" value="1">
			<input type="hidden" name="currency_code" value="USD">

			Enter amount:<br>

			<input type="text" name="amount" value="" class="pp-input"><br>

			<input type="hidden" name="on0" value="Payment Details">

			Payment notes:<br>

			<textarea name="os0" rows="4" cols="16" class="pp-textarea"></textarea><br>

			<input type="submit" name="PaypalPayment" value="Send Payment" class="pp-button button"><br>

		</form>
		</div>
	</div>
	
	 

<!-- END PAYPAL FORM -->

 

</article>
<!-- Custom page code -->
<script src="https://www.paypalobjects.com/api/checkout.js"></script>
 
<?php 
include("includes/bottom.php"); 
?>