<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
	@include('pub_theme::layouts.partials.htmlheader')
	<body id="phpbb" class="section-index ltr">
		<div id="wrap">
			@include('pub_theme::layouts.partials.headernav')
			<div id="page-body">
				<div id="page-body-inner">
					@foreach($forum_cat->archive as $item)
						@include('pub_theme::layouts.items.forum_cat',['row'=>$item])
					@endforeach
					@include('pub_theme::widgets.who_is_online')
					@include('pub_theme::widgets.statistics')
				</div>
				@include($view.'.sidebar')
			</div>
			@include('pub_theme::layouts.partials.footer')
		</div>
		<div>
			<a id="bottom" name="bottom" accesskey="z"></a>
		</div>
	</body>
</html>