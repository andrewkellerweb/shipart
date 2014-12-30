<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

<link rel="apple-touch-icon" href="favicon/favicon-152.png">
<link rel="icon" href="favicon/favicon-96.png">
<!--[if IE]><link rel="icon" href="favicon/favicon-32.ico"><![endif]-->
<meta name="msapplication-TileColor" content="#D83434">
<meta name="msapplication-TileImage" content="favicon/favicon-144.png">

<script src="js/modernizr.custom.38933.js"> </script> <!-- modernizr -->
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script> <!-- jquery --> 

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