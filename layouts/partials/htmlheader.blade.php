<head>
	{!! Theme::metatags() !!}
	@php
	Theme::add('/theme/bc/bootstrap/dist/css/bootstrap.min.css');
	Theme::add('/theme/bc/bootstrap/dist/js/bootstrap.min.js');
	Theme::add('/theme/bc/font-awesome/css/font-awesome.min.css');
	//Theme::add('theme/pub/js/styleswitcher.js');
	//Theme::add('theme/pub/js/forum_fn.js');
	//Theme::add('theme/pub/css/print.css',[media="print" title="printonly"])    
	Theme::add('theme/pub/css/style.css');    
	//Theme::add('theme/pub/css/normal.css'); //   rel="stylesheet" type="text/css" title="A"
	//Theme::add('theme/pub/css/medium.css');  //  rel="alternate stylesheet" type="text/css" title="A+"
	Theme::add('theme/pub/css/large.css');  //  rel="alternate stylesheet" type="text/css" title="A++" 
	@endphp
	<link href='//fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	{!! Theme::showStyles(false) !!}
	@stack('styles')
</head>