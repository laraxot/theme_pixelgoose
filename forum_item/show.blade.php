<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
	@include('pub_theme::layouts.partials.htmlheader')
	<body id="phpbb" class="section-index ltr">
		<div id="wrap">
			@include('pub_theme::layouts.partials.headernav')
            
        <div id="page-body">
            <h2>{{ $row->title }}</h2>
            <div>
                <div style="display: none !important;">Description of your first forum.<br /></div>
            </div>
            @include($view.'.body_top')
            <div class="forumbg">
                <ul class="topiclist">
                    <li class="header">
                        <dl class="icon">
                            <dt><span class="forum-name">Topics<span></span></dt>
                            <dd class="posts">Replies</dd>
                            <dd class="views">Views</dd>
                            <dd class="lastpost"><span>Last post</span></dd>
                        </dl>
                    </li>
                </ul>
                <ul class="topiclist topics">
                    <ul class="topiclist forums">
                        @foreach($row->linked->forumTopics()->paginate() as $item)
                            @include('pub_theme::layouts.items.forum_topic',['row'=>$item])
                        @endforeach
                       
                    </ul>
                    
                    
                    
                </ul>
            </div>
            @include($view.'.body_bottom')
        </div>
    

            
			@include('pub_theme::layouts.partials.footer')
		</div>
		<div>
			<a id="bottom" name="bottom" accesskey="z"></a>
		</div>
	</body>
</html>