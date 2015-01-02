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
$recipients             = '"Amy Mutza" <amy@shipart.com>, "Jos Pollard" <jos@shipart.com>';
$headers['To']          = '"Amy Mutza" <amy@shipart.com>, "Jos Pollard" <jos@shipart.com>';

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
<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShipArt | Estimates</title>

<meta name="Keywords" content="
Fine Art Storage, Climate Controlled storage, Fine Art Transportation, Museum Quality storage, Storage Insurance, fine art crating, fine art handlers, fine art installation, fine art packing, fine art services,sculpture rigging, transporting artwork,San Francisco CA, California, Denver Co, Colorado and Aspen Colorado"/>

<meta name="Description" content="
Trained Professionals providing Fine Art Storage, Fine Art Shipping, Fine Art Transportation, fine art packing, fine art crating,  rigging of fine art, artifacts, and antiques in San Francisco CA California, and Denver, CO Colorado and Aspen Colorado.
"/>
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />

<script src="js/modernizr.custom.38933.js"> </script> <!-- modernizr -->
<script src="js/selectivizr-min.js"> </script> <!-- selectivizr -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> <!-- jquery --> 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script> <!-- slideshow -->
<script src="js/slides.min.jquery.js"></script> <!-- slideshow -->
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> <!-- dropdown -->
<script src="js/jquery.hoverIntent.minified.js" type="text/javascript"></script> <!-- dropdown -->
<script src="js/jquery.naviDropDown.1.0.js" type="text/javascript"></script> <!-- dropdown -->

<script type="text/javascript">
$(function(){
 
    $('#navigation_horiz').naviDropDown({
        slideDownDuration: 100, //easing duration for slideDown
        slideUpDuration: 100, //easing duration for slideUp'
    });

});
</script>

<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'images/pic-home-slider-storage.jpg',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				effect: 'fade',
				crossfade: true,
			});
		});
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
	_gaq.push(
	  ['_setAccount', 'UA-16596458-2'],
	  ['_trackPageview'],
	  ['b._setAccount', 'UA-45401139-1'],
	  ['b._trackPageview']
	);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body class="page-inside one-col">

<header class="main">
	<div class="container-common clearfix">
	<a class="logo" href="/">ShipArt</a>
    <nav>
    	<ul id="navigation_horiz">
            <li><a href="/storage.html">Storage</a></li>
            <li><a href="/pc-overview.html">Packing / Crating</a>
            	<ul class="dropdown">
            		<li><a href="/pc-overview.html">Overview</a></li>
            		<li><a href="/pc-standard-crates.html">Standard Crates</a></li>
            		<li><a href="/pc-museum-crates.html">Museum Crates</a></li>
            		<li><a href="/pc-packing-services.html">Packing Services</a></li>
            	</ul>
            </li>
            <li><a href="/installations-fineart.html">Installation</a>
            	<ul class="dropdown">
            		<li><a href="/installations-fineart.html">Fine Art Installation</a></li>
            		<li><a href="/installations-rigging.html">Rigging</a></li>
            	</ul>
            </li>
            <li><a href="/shuttle-overview.html">Art Transport</a>
            	<ul class="dropdown">
            		<li><a href="/shuttle-overview.html">Shuttle Services</a></li>
            		<li><a href="/transport-local.html">Local Transport</a></li>
            		<li><a href="/transport-air.html">Airfreight / Import & Export</a></li>
            		<li><a href="/transport-certified.html">Certified Screening Facility</a></li>
            	</ul>
            </li>
            <li class="active"><a href="/estimates.html">Estimates</a></li>
            <li class="last"><a href="/contact.html">Contact</a></li>
        </ul>
    </nav>
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
<footer class="clearfix">
	<div class="container-common">
	<div class="col1">
    	<h3>Sitemap</h3>
    	<ul>
            <li><a href="/storage.html">Storage</a></li>
            <li><a href="/pc-overview.html">Packing / Crating</a></li>
            <li><a href="/installations-fineart.html">Installation</a></li>
            <li><a href="/shuttle-overview.html">Art Transport</a></li>
            <li><a href="/estimates.html">Estimates</a></li>
            <li class="last"><a href="/contact.html">Contact</a></li>
        </ul>
    </div>
    <div class="col2">
    	&copy;2012 Ship Art 
    </div>
    <div class="col3">
    	<h3>Contact</h3>
    	<p class="icons-social"><a class="fb" href="https://www.facebook.com/pages/Ship-Art-International-and-Denver/195853177152069" target="_blank">Facebook</a></p>
<p><strong>Ship Art International<br /></strong>
P.O. Box 1966<br>
South San Francisco, CA 94083-1966	<br>
Phone: (650) 952-0100<br>
Fax: (650) 952-8958</p>
			    
<p><strong>Ship Art Denver</strong><br />
P.O. BOX 16662<br />
Denver, CO 80216 <br />
Phone: (303) 291-3906<br />
Fax: (303) 291-3912</p>

    </div>
    </div>
</footer>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try{ 
var pageTracker = _gat._getTracker("UA-29423609-1");
pageTracker._trackPageview();
} catch(err) {} 
</script>


</body>
</html>

