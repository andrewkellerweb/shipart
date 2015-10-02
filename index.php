<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Ship/Art</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="
Fine Art Storage, Climate Controlled storage, Fine Art Transportation, Museum Quality storage, Storage Insurance, fine art crating, fine art handlers, fine art installation, fine art packing, fine art services,sculpture rigging, transporting artwork,San Francisco CA, California, Denver Co, Colorado and Aspen Colorado"/>
<meta name="Description" content="
Trained Professionals providing Fine Art Storage, Fine Art Shipping, Fine Art Transportation, fine art packing, fine art crating,  rigging of fine art, artifacts, and antiques in San Francisco CA California, and Denver, CO Colorado and Aspen Colorado.
"/>

<?php include 'includes/header.php'; ?>
<script src="js/responsiveslides.min.js"> //SLIDESHOW </script>
<script>
  $(function () {
    $("#slider").responsiveSlides({
      maxwidth: 960,
      speed: 800,
      pager: true,
      timeout: 4000,
      pause: true
    });
  });
</script>
<body class="page-home">
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

  <section class="featured">
  	<div class="container-common">
    	<div class="container-slider">
  			<ul class="slides_container rslides" id="slider">
          <li>
            <a href="/shuttle-overview.php">
            <picture>
              <source 
                media="(min-width: 34em)"
                srcset="images/pic-home-slider-shuttle.jpg"
              />
              <img src="images/pic-home-slider-shuttle-mobile.jpg" />
            </picture>
            </a>
          </li>
          <li>
            <a href="/storage.php">
            <picture>
              <source 
                media="(min-width: 34em)"
                srcset="images/pic-home-slider-storage.jpg 950w"
              />
              <img src="images/pic-home-slider-storage-mobile.jpg" />
            </picture>
            </a>
          </li>
          <li>
            <a href="/installations-fineart.php">
            <picture>
              <source 
                media="(min-width: 34em)"
                srcset="images/pic-home-slider-fineart.jpg 950w"
              />
              <img src="images/pic-home-slider-fineart-mobile.jpg" />
            </picture>
            </a>
          </li>
          <li>
            <a href="/installations-rigging.php">
            <picture>
              <source 
                media="(min-width: 34em)"
                srcset="images/pic-home-slider-rigging.jpg 950w"
              />
              <img src="images/pic-home-slider-rigging-mobile.jpg" />
            </picture>
            </a>
          </li>
          <li>
            <a href="/pc-overview.php">
            <picture>
              <source 
                media="(min-width: 34em)"
                srcset="images/pic-home-slider-crating.jpg 950w"
              />
              <img src="images/pic-home-slider-crating-mobile.jpg" />
            </picture>
            </a>
          </li>
  			</ul>
      </div>
    </div>
  </section> 

  <section class="content clearfix">
  	<div class="container-common">
    	<article>
      	<h2>NY Express Shuttle</h2>
          <img src="images/pic-home-shuttle.jpg" />
          <p>Ship/Art is proud to offer climate-controlled, air-ride Express Fine Art Shuttles three times a month to New York and Denver.</p>
        	<article>
          	<a href="/shuttle-overview.php" class="btn-more">More</a>
          </article>
      </article>
    	<article>
        	<h2>Green Statement</h2>
            <img src="images/pic-home-green.jpg" />
            <p>Ship/Art has developed an extensive environmental program at both our San Francisco and Denver Offices. </p>
      </article>
    	<article class="last testimonial">
      	<h2>Testimonial</h2>
          <blockquote>
          	<p>Packing and shipping mastery on the West Coast, with climate-controlled transportation anywhere.</p>
          	<h4>The New York Times</h4>
              <div class="title"></div>
          </blockquote>
      </article>
      <div class="container-more">
        <article>
        	<a href="/green.php" class="btn-more">More</a>
        </article>
        <article class="last">
        </article>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>
