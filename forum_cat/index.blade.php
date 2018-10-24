@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
<div id="page-body-inner">
	{{--
	it/forum_cat/create
		it/{container}/create   => container.create    
	--}}
	@can('create',$forum_cat->linkedOrCreate)
	<a href="{{ route('container.create',array_merge($params,['container'=>'forum_cat'])) }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Add Category</a>
	@else
	
	@endcan
	@foreach($forum_cat->archive()->paginate() as $item)
		@include('pub_theme::layouts.items.forum_cat',['row'=>$item])
	@endforeach
	@include('pub_theme::widgets.who_is_online')
	@include('pub_theme::widgets.statistics')
</div>
@include($view.'.sidebar')
@endsection

