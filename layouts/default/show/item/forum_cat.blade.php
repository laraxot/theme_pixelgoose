{!! Form::bsBtnCreate(['row'=>$row,'txt'=>'Add Category']) !!}
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
		@foreach($row->forumItems as $item0)
			@include('pub_theme::layouts.items.forum_item',['row'=>$item0])
		@endforeach
	</ul>
</div>