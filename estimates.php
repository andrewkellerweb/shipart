<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShipArt | Estimates</title>
<meta name="Keywords" content="
Fine Art Storage, Climate Controlled storage, Fine Art Transportation, Museum Quality storage, Storage Insurance, fine art crating, fine art handlers, fine art installation, fine art packing, fine art services,sculpture rigging, transporting artwork,San Francisco CA, California, Denver Co, Colorado and Aspen Colorado"/>
<meta name="Description" content="
Trained Professionals providing Fine Art Storage, Fine Art Shipping, Fine Art Transportation, fine art packing, fine art crating,  rigging of fine art, artifacts, and antiques in San Francisco CA California, and Denver, CO Colorado and Aspen Colorado.
"/>

<?php include 'includes/header.php'; ?>

<body class="page-inside one-col">

<header class="main">
    <div class="container-common clearfix">
    <a class="logo" href="/">ShipArt</a>
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


<form id="estimatesform" class="form-long" action="estimates-thankyou.php" name="estimatesform" method="post" onsubmit="MM_validateForm('name','','R','email','','RisEmail','state','','R','locations','','R','items','','R','insure','','R','receive','','R');return document.MM_returnValue">

 
  <article class="full"><span class="red">*</span> Denotes required field</article>

  <label>Name:</label>
  <article class="required_text"><input name="name" type="text" class="field_med" /></article>

  <label>Street Address:</label>
  <article><input name="address" type="text" class="field_long"/></article>

  <label>State:</label>
  <article class="required_text"><input name="state" type="text" class="field_shortest" maxlength="2" /></article>

  <label>Phone:</label>
  <article><input name="phone" type="text" class="field_med" /></article>

  <label>Fax:</label>
  <article><input name="fax" type="text" class="field_med" /></article>

  <label>Email:</label>
  <article class="required_text"><input name="email" type="text" class="field_med"/></article>

  <label>What are the pick-up and delivery locations? <br />(City, State, ZIP):</strong></label>
  <article class="required_text"><textarea name="locations" rows="4" class="field_message" ></textarea></article>

  <label>What are the transit deadlines, if any, and when is the shipment available for initial pick up?</label>
  <article><textarea name="deadlines" rows="4" class="field_message" ></textarea></article>

  <label>Please describe the items that you would like transported, including sizes and weights and if the items are packed and/or crated:</label>
  <article class="required_text"><textarea name="items" rows="10" class="field_message" ></textarea></article>

  <label>Please describe both the pick up and delivery location facilities (loading dock, elevators, stairs, etc).  Are there any 
                  truck size restrictions at either the pick up or delivery locations?</label>
  <article><textarea name="facilities" rows="10" class="field_message" ></textarea></article>

  <label>What type of service are your looking for: Crate and Freight, Shuttle, Last On-First Off, Expedited, Exclusive Use?</label>
  <article><textarea name="service" rows="4" class="field_message"></textarea></article>

  <label>Do you need transportation insurance?</label>
  <article class="required_text">
    <div class="radiobutton_container">
      <input name="insure" type="radio" value="Yes" />Yes
    </div>
    <div class="radiobutton_container">
      <input name="insure" type="radio" value="No" />No
    </div>          
  </article>

  <label>How do you prefer to be contacted?  Phone, fax, or email? Is there a best time to reach you?</label>
  <article><textarea name="contactpreference" rows="4" class="field_message" ></textarea></article>

  <label>How did you hear about us?</label>
  <article><textarea name="hearabout" rows="4" class="field_message"></textarea></article>

  <label>Who would you like to receive your message?</label>
  <article class="required_text">
    <strong>San Franciso: </strong>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="sanshuttle" />
      Shuttle Airfreight &amp; Installation
    </div>                    
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="sanlocal" />
      Local Transport</div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="sanimport" />
    International Shipping  - Import</div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="sanexport" />
      International Shipping  - Export </div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="sanrigging" />
      Rigging and Museum Exhibits </div>
    <br />
                    
    <strong>Denver:</strong>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="denaspen" />
      Aspen Shuttle </div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="denlocal" />
      Local Transport &amp; Installation</div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="denimport" />
    International Shipping  - Import</div>
    <div class="radiobutton_container2">
      <input name="receive" type="radio" value="denexport" />
      International Shipping  - Export </div>
    <div class="radiobutton_container2"><input name="receive" type="radio" value="denrigging" /> Rigging and Museum Exibits </div>
  </article>

  <article><input name="submit" type="submit" class="field_text" id="submit" value="Submit" /></article>
</form>

  </div> <!-- /main -->

  
  </div>  <!-- /container-common -->
</section>
<?php include 'includes/footer.php'; ?>
