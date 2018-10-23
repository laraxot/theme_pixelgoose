<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="://www.w3.org/1999/xhtml" dir="ltr" lang="en-gb" xml:lang="en-gb">
	@include('pub_theme::layouts.partials.htmlheader')
	<body id="phpbb" class="section-index ltr">
		<div id="wrap">
			@include('pub_theme::layouts.partials.headernav')
            <div id="page-body">
                <h2>{{ $row->title }}</h2>
                {{--
                    it/forum_cat/create
                     it/{container}/create   => container.create    
                    --}}
                <a href="{{ route('container.container1.create',array_merge($params,['container1'=>'forum_item'])) }}">Add Item</a>
                <div class="forabg">
                    <ul class="topiclist">
                        <li class="header">
                            <dl class="icon">
                                <dt><span class="forum-name">Forum</span></dt>
                                <dd class="topics">Topics</dd>
                                <dd class="posts">Posts</dd>
                                <dd class="lastpost"><span>Last post</span></dd>
                            </dl>
                        </li>
                    </ul>
                    <ul class="topiclist forums">
                        {{--
                        @foreach($row->linked->forumItems()->paginate() as $item)
                        --}}
                        @foreach($row->related('forum_cat_x_forum_item')->paginate() as $item)
                            @include('pub_theme::layouts.items.forum_item',['row'=>$item])
                        @endforeach
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