@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
	<h2>{{ $row->title }}</h2>
	{{--
		it/forum_cat/create
		 it/{container}/create   => container0.create    
		--}}
	@php
	$url=route('container0.container1.create',array_merge($params,['container1'=>'forum_item']));
	@endphp
	<a href="{{ $url }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Item</a>
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
			@foreach($row->linked->forumItems()->paginate() as $item0)
			--}}
			@foreach($row->related('forum_cat_x_forum_item')->paginate() as $item0)
				@include('pub_theme::layouts.items.forum_item',['row'=>$item0])
			@endforeach
		</ul>
	</div>
	@include($view.'.body_bottom')
@endsection