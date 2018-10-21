<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
	@include('pub_theme::layouts.partials.htmlheader')
	<body id="phpbb" class="section-index ltr">
		<div id="wrap">
			@include('pub_theme::layouts.partials.headernav')
            
        <div id="page-body">
            <h2>{{ $row->title }}</h2>
            <div style="display: none !important;">Description of your first forum.<br /></div>
            @include($view.'.body_top')
            @foreach($row->linked->forumPosts()->paginate() as $item)
                @include('pub_theme::layouts.items.forum_post',['row'=>$item])
            @endforeach
            @include($view.'.body_bottom')
        </div>
   
            
			@include('pub_theme::layouts.partials.footer')
		</div>
		<div>
			<a id="bottom" name="bottom" accesskey="z"></a>
		</div>
	</body>
</html>