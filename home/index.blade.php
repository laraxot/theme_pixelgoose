@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
<div id="page-body-inner">
	{!! Form::bsBtnCreate(['row'=>$forum_cat->getLinkedModel(),'txt'=>'Add Category']) !!}
	@foreach($forum_cat->archive()->get() as $item0)
		@include('pub_theme::layouts.default.index.item.forum_cat',['row'=>$item0])
	@endforeach

	@include('pub_theme::widgets.who_is_online')
	@include('pub_theme::widgets.statistics')
</div>
@include($view.'.sidebar')
@endsection
