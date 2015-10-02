  <footer>
  	<div class="container-common">
      	<div class="col1">
          	<h3>Sitemap</h3>
          	<ul>
              	<li><a href="/shuttle-overview.php">Shuttle Services</a></li>
                  <li><a href="/storage.php">Storage</a></li>
                  <li><a href="/pc-overview.php">Packing / Crating</a></li>
                  <li><a href="/installations-fineart.php">Installation</a></li>
                  <li><a href="/estimates.php">Estimates</a></li>
                  <li class="last"><a href="/transport-local.php">Other Services</a></li>
                  <li class="last"><a href="/contact.php">Contact</a></li>
              </ul>
          </div>
          <div class="col2">
          	&copy;
            <script language="javascript" type="text/javascript">
            var today = new Date()
            var year = today.getFullYear()
            document.write(year)
            </script> 
            Ship/Art 
          </div>
          <div class="col3">
          	<h3>Contact</h3>
          	<p class="icons-social"><a class="fb" href="https://www.facebook.com/pages/Ship-Art-International-and-Denver/195853177152069" target="_blank">Facebook</a></p>
      <p><strong>Ship/Art International<br /></strong>
      P.O. Box 1966<br>
      South San Francisco, CA 94083-1966	<br>
      Phone: (650) 952-0100<br>
      Fax: (650) 952-8958</p>
      			    
      <p><strong>Ship/Art Denver</strong><br />
      P.O. BOX 16662<br />
      Denver, CO 80216 <br />
      Phone: (303) 291-3906<br />
      Fax: (303) 291-3912</p>

          </div>
      </div>
  </footer>

<script src="js/slidebar.js"></script> <?php // Slidebar ?>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 

<?php // NAVIGATION ?>
<script type="text/javascript">
  if (window.matchMedia("(min-width: 45em)").matches) {
    $.getScript("js/jquery.hoverIntent.minified.js", function(){
    });
    $.getScript("js/jquery.naviDropDown.1.0.js", function(){
      $('#navigation_horiz').naviDropDown({
        slideDownDuration: 100, //easing duration for slideDown
        slideUpDuration: 100, //easing duration for slideUp'
      });
    });
    $("#slidebar-container").toggleClass("slidebar");
  } else {
    $.getScript("js/accordion.js", function(){
    });
    $(".dropdown").toggleClass("dropdown");
    $(".horizontal").toggleClass("horizontal");
  }
</script>

<?php // PICTUREFILL ?>
<script>
// Picture element HTML shim|v it for old IE (pairs with Picturefill.js)
document.createElement( "picture" );
</script>
<script src="js/picturefill.js" async></script>

<?php // GOOGLE ANALYTICS ?>
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
</body>
</html>