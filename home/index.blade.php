@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
<div id="page-body-inner">
	{{--
	it/forum_cat/create
		it/{container}/create   => container0.create    
	--}}

	@can('create',$forum_cat->linkedOrCreate)
	<a href="{{ route('container0.create',array_merge($params,['container'=>'forum_cat'])) }}" class="btn btn-default">
		<i class="fa fa-plus"></i>&nbsp;Add Category</a>
	@else
	
	{{ Form::bsBtnCreate($forum_cat) }}

	@endcan
	@foreach($forum_cat->archive()->get() as $item0)
		@include('pub_theme::layouts.items.forum_cat',['row'=>$item0])
	@endforeach
	@include('pub_theme::widgets.who_is_online')
	@include('pub_theme::widgets.statistics')
</div>
@include($view.'.sidebar')
@endsection

