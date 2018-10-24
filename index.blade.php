@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
<<<<<<< Updated upstream
<div id="page-body-inner">
	{{--
	it/forum_cat/create
		it/{container}/create   => container.create    
	--}}
	@can('create',$forum_cat->linkedOrCreate)
	<a href="{{ route('container.create',array_merge($params,['container'=>'forum_cat'])) }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Category</a>
	@else
	NON PUOI
	@endcan
	@foreach($forum_cat->archive as $item)
		@include('pub_theme::layouts.items.forum_cat',['row'=>$item])
	@endforeach
	@include('pub_theme::widgets.who_is_online')
	@include('pub_theme::widgets.statistics')
</div>
@include($view.'.sidebar')
@endsection
				
=======
	<div id="page-body-inner">
		{{--
		it/forum_cat/create
		 it/{container}/create   => container.create    
		--}}
		@php
			$url=route('container.create',array_merge($params,['container'=>'forum_cat']));
		@endphp
		<a href="{{ $url }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Category</a>
		@foreach($forum_cat->archive as $item)
			@include('pub_theme::layouts.items.forum_cat',['row'=>$item])
		@endforeach
		@include('pub_theme::widgets.who_is_online')
		@include('pub_theme::widgets.statistics')
	</div>
	@include($view.'.sidebar')
@endsection
>>>>>>> Stashed changes
