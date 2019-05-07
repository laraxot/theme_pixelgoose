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
			@foreach($row->forumTopics()->paginate() as $item0)
				@include('pub_theme::layouts.items.forum_topic',['row'=>$item0])
			@endforeach
		</ul>
	</ul>
</div>