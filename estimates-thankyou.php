<?php

if(isset($_POST['submit'])) 
{ 
include('Mail.php');


$headers['From']        = '"Estimate Request" <estimaterequest@shipart.com>';
$headers['Subject']    .= 'Ship/Art Estimate Request';

$name = $_POST['name'];
$address = $_POST['address'];
$state = $_POST['state'];
$phone = $_POST['phone'];
$fax = $_POST['fax'];
$email = $_POST['email'];
$locations = $_POST['locations'];
$deadlines = $_POST['deadlines'];
$items = $_POST['items'];
$facilities = $_POST['facilities'];
$service = $_POST['service'];
$insure = $_POST['insure'];
$contactpreference = $_POST['contactpreference'];
$hearabout = $_POST['hearabout'];
$receive = $_POST['receive'];


$body = "

From: $name\n 
Address: $address\n 
State: $state\n 
Phone: $phone\n 
Fax: $fax\n 
E-Mail: $email\n 
Pick-up and delivery locations: $locations\n 
Transit deadlines, if any, and when is the shipment available for initial pick up: $deadlines\n 
Items to be transported, including sizes and weights and if the items are packed and/or crated: $items\n
Pick up and delivery location facilities (loading dock, elevators, stairs, etc). Are there any truck size restrictions at either the pick up or delivery locations: $facilitiies\n
Type of service: $service\n
Transportation insurance: $insure\n
Contact method and time: $contactpreference\n
How they heard about Ship Art: $hearabout\n
Send to: $receive\n

";

$params['host'] = 'scriptmail.intermedia.net';
$mail_object =& Mail::factory('smtp', $params);



if($receive == sanshuttle)

{
$recipients             = '"Amy Mutza" <andrewkellerweb@gmail.com>, "Jos Pollard" <raastar@gmail.com.com>';
$headers['To']          = '"Amy Mutza" <andrewkellerweb@gmail.com>, "Jos Pollard" <raastar@gmail.com.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 



if($receive == sanlocal)

{
$recipients             = '"Tim Polishook" <tim@shipart.com>';
$headers['To']          = '"Tim Polishook" <tim@shipart.com>'; 

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 



if($receive == sanimport)

{
$recipients             = '"Becky Ebeling" <becky@shipart.com>, "William" <william@shipart.com>'; 
$headers['To']          = '"Becky Ebeling" <becky@shipart.com>'; 
$headers['Cc']         .= '"William" <william@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == sanexport)

{
$recipients             = '"Becky Ebeling" <becky@shipart.com>, "William" <william@shipart.com>';
$headers['To']          = '"Becky Ebeling" <becky@shipart.com>';
$headers['Cc']         .= '"Becky Ebeling" <becky@shipart.com>, "William" <william@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == sanrigging)

{
$recipients             = '"Tim Polishook" <tim@shipart.com>, "Greg Gahagan" <greg@shipart.com>';
$headers['To']          = '"Tim Polishook" <tim@shipart.com>';
$headers['Cc']         .= '"Greg Gahagan" <greg@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denair)

{
$recipients             = '"Heather Sheldon" <heather@shipart.com>, "Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';  
$headers['To']          = '"Heather Sheldon" <heather@shipart.com>';
$headers['Cc']         .= '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denaspen)

{
$recipients             = '"Heather Sheldon" <heather@shipart.com>, "Kate" <kate@shipart.com>';
$headers['To']          = '"Heather Sheldon" <heather@shipart.com>';
$headers['Cc']         .= '"Kate" <kate@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denlocal)

{
$recipients             = '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';
$headers['To']          = '"Alan Jones" <alan@shipart.com>';
$headers['Cc']         .= '"Kate" <kate@shipart.com>';


if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denimport)

{
$recipients             = '"Heather Sheldon" <heather@shipart.com>, "Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';  
$headers['To']          = '"Heather Sheldon" <heather@shipart.com>';
$headers['Cc']         .= '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denexport)

{
$recipients             = '"Heather Sheldon" <heather@shipart.com>, "Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';  
$headers['To']          = '"Heather Sheldon" <heather@shipart.com>';
$headers['Cc']         .= '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>';

if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 


if($receive == denrigging)

{
$recipients             = '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>'; 
$headers['To']          = '"Alan Jones" <alan@shipart.com>, "Kate" <kate@shipart.com>'; 


if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 

if($receive == denstorage)

{
$recipients             = '<stefani@shipart.com>, "Kate" <kate@shipart.com>'; 
$headers['To']          = '<stefani@shipart.com>, "Kate" <kate@shipart.com>'; 


if ( $mail_object->send($recipients, $headers, $body) ) {
}

} 



}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>ShipArt | Estimates</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="
Fine Art Storage, Climate Controlled storage, Fine Art Transportation, Museum Quality storage, Storage Insurance, fine art crating, fine art handlers, fine art installation, fine art packing, fine art services,sculpture rigging, transporting artwork,San Francisco CA, California, Denver Co, Colorado and Aspen Colorado"/>
<meta name="Description" content="
Trained Professionals providing Fine Art Storage, Fine Art Shipping, Fine Art Transportation, fine art packing, fine art crating,  rigging of fine art, artifacts, and antiques in San Francisco CA California, and Denver, CO Colorado and Aspen Colorado.
"/>

<?php include 'includes/header.php'; ?>

<body class="page-inside one-col">

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
    <?php include 'includes/navigation.php' ?>
    </div>
</header>

<section class="title">
	<div class="container-common clearfix">
    	<h2>Estimates</h2>
    </div>
</section>
<section class="content clearfix">
	<div class="container-common">
		<div class="main">


Your Estimate has been successfully sent. We will contact you soon in regards to your request.

		</div> <!-- /main -->

  
  </div>  <!-- /container-common -->
</section>
<?php include 'includes/footer.php'; ?>