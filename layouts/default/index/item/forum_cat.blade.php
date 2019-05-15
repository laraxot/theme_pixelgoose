<div class="forabg">
	<ul class="topiclist">
		<li class="header">
			<dl class="icon">
				<dt><a href="{{ $row->url }}">{{ $row->title }}</a></dt>
				<dd class="topics">Topics</dd>
				<dd class="posts">Posts</dd>
				<dd class="lastpost"><span>Last post</span></dd>
			</dl>
		</li>
	</ul>
	<ul class="topiclist forums">
		{!! Form::bsBtnCreateRelated(['row'=>$row,'related'=>$forum_item->getLinkedModel()]) !!}
		@can('create',$forum_item->getLinkedModel())
		<li>
			<a href="{{ route('container0.container1.create',['container0'=>'forum_cat','item0'=>$row,'container1'=>$forum_item->post_type]) }}" class="btn btn-secondary"><i class="fa fa-plus"></i>&nbsp;Add Item</a>
		</li>
		@endcan

		@foreach($row->forumItems()->paginate() as $item0)
			@include('pub_theme::layouts.default.index.item.forum_item',['row'=>$item0])
		@endforeach
	</ul>
</div>