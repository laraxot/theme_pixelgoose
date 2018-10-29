@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash') 
    <h2>Topics List</h2>
    {{-- ddd($item01->title) --}}
    <ul class="topiclist topics">
    <ul class="topiclist forums">
    @foreach($item01->related('forum_topic')->paginate() as $item0)
        @include('pub_theme::layouts.items.forum_topic',['row'=>$item0])
    @endforeach
    </ul>
    </ul>
    
@endsection