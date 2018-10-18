<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="content-style-type" content="text/css" />
	<meta http-equiv="content-language" content="en-gb" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="resource-type" content="document" />
	<meta name="distribution" content="global" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PixelGoose.com &bull; Index page</title>
	<link rel="alternate" type="application/atom+xml" title="Feed - PixelGoose.com" href="http://phpbb3.pixelgoose.com/feed.php" />
	<link rel="alternate" type="application/atom+xml" title="Feed - New Topics" href="http://phpbb3.pixelgoose.com/feed.php?mode=topics" />
	@php
	//Theme::add('theme/pub/js/styleswitcher.js');
	//Theme::add('theme/pub/js/forum_fn.js');
	//Theme::add('theme/pub/css/print.css',[media="print" title="printonly"])    
	Theme::add('theme/pub/css/style.css');    
	Theme::add('theme/pub/css/normal.css'); //   rel="stylesheet" type="text/css" title="A"
	//Theme::add('theme/pub/css/medium.css');    rel="alternate stylesheet" type="text/css" title="A+"
	//Theme::add('theme/pub/css/large.css');    rel="alternate stylesheet" type="text/css" title="A++" 
	@endphp
	{!! Theme::showStyles(false) !!}
	@stack('styles')
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('a.login-window').click(function() {
				
				// Getting the variable's value from a link 
				var loginBox = this.hash;
		
				//Fade in the Popup and add close button
				$(loginBox).fadeIn(300);
				
				//Set the center alignment padding + border
				var popMargTop = ($(loginBox).height() + 24) / 2; 
				var popMargLeft = ($(loginBox).width() + 24) / 2; 
				
				$(loginBox).css({ 
					'margin-top' : -popMargTop,
					'margin-left' : -popMargLeft
				});
				
				// Add the mask to body
				$('body').append('<div id="mask"></div>');
				$('#mask').fadeIn(300);
				
				return false;
			});
			
			// When clicking on the button close or the mask layer the popup closed
			$('a.close, #mask').live('click', function() { 
			  $('#mask , .login-popup').fadeOut(300 , function() {
				$('#mask').remove();  
			}); 
			return false;
			});
			
			$('#navbar_username').focus(function() {
				$('#navbar_username').parent().addClass('active');
			}); 
			$('#navbar_username').blur(function() {
				$('#navbar_username').parent().removeClass('active');
			}); 
			$('#navbar_password').focus(function() {
				$('#navbar_password').parent().addClass('active');
			}); 
			$('#navbar_password').blur(function() {
				$('#navbar_password').parent().removeClass('active');
			}); 
		
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".toggleMenuButton").click(function () {
				$(".tabs").slideToggle("fast");
				$(".toggleMenuButton").toggleClass("active");
			})
		
			$(window).resize(function() {
				//small-screen
				if (window.innerWidth < 767) {
					$(".tabs").css('display', '');
					$('.toggleMenuButton').removeClass('active');
				}
					//end small-screen
			}) .resize(); // trigger resize event
		
		});
	</script>
	<!--[if lte IE 8]><script type="text/javascript" src="./styles/metro_blue/template/respond.min.js"></script><![endif]-->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>