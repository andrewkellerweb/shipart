<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Ship/Art | Pay Invoice</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="
Fine Art Storage, Climate Controlled storage, Fine Art Transportation, Museum Quality storage, Storage Insurance, fine art crating, fine art handlers, fine art installation, fine art packing, fine art services,sculpture rigging, transporting artwork,San Francisco CA, California, Denver Co, Colorado and Aspen Colorado"/>
<meta name="Description" content="
Trained Professionals providing Fine Art Storage, Fine Art Shipping, Fine Art Transportation, fine art packing, fine art crating,  rigging of fine art, artifacts, and antiques in San Francisco CA California, and Denver, CO Colorado and Aspen Colorado.
"/>

<?php include 'includes/header.php'; ?>

<body class="page-inside two-col">

<header class="main">
    <div class="container-common clearfix">
    <a class="logo" href="/">
        <picture>
          <img 
            src="images/logo.png"
            srcset="images/logo-2x.png 2x"
            alt="Shipart"
          />
        </picture>
      </a>
    <?php include 'includes/navigation.php'; ?>
    </div>
</header>

<section class="title">
	<div class="container-common clearfix">
    	<h2>Pay Invoice</h2>
    </div>
</section>
<section class="content clearfix">
	<div class="container-common">
		<div class="main">

<form action="https://checkout.globalgatewaye4.firstdata.com/payment" method="POST">


<?php
      $x_login = "WSP-SHIP-G@BNgwC9Lg";  //  Take from Payment Page ID in Payment Pages interface
      $transaction_key = "wxQkpC3ml4X8GjZVrqGs"; // Take from Payment Pages configuration interface
      $x_amount = ".01";
      $x_currency_code = "USD"; // Needs to agree with the currency of the payment page
      srand(time()); // initialize random generator for x_fp_sequence
      $x_fp_sequence = rand(1000, 100000) + 123456;
      $x_fp_timestamp = time(); // needs to be in UTC. Make sure webserver produces UTC

      // The values that contribute to x_fp_hash 
      $hmac_data = $x_login . "^" . $x_fp_sequence . "^" . $x_fp_timestamp . "^" . $x_amount . "^" . $x_currency_code;
      $x_fp_hash = hash_hmac('sha1', $hmac_data, $transaction_key);

      echo ('<input type="hidden" name="x_login" value="' . $x_login . '">' );
      echo ('<input type="hidden" name="x_amount" value="' . $x_amount . '">' );
      echo ('<input type="hidden" name="x_fp_sequence" value="' . $x_fp_sequence . '">' );
      echo ('<input type="hidden" name="x_fp_timestamp" value="' . $x_fp_timestamp . '">' );
      echo ('<input type="hidden" name="x_fp_hash" value="' . $x_fp_hash . '" size="50">' );
      echo ('<input type="hidden" name="x_currency_code" value="' . $x_currency_code . '">');
?>
      <input type="hidden" name="x_invoice_num" value="12345"/>
      <input type="hidden" name="x_show_form" value="PAYMENT_FORM"/>
      <input type="submit" value="Pay with Payment Pages"/>
    </form>

		</div> <!-- /main -->
	<aside>
    


	</aside>
  
  </div>  <!-- /container-common -->
</section>
<?php include 'includes/footer.php'; ?>
