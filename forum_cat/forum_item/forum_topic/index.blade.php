@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash') 
    <h2>Topics List</h2>
    {{-- ddd($item1->title) --}}
    <ul class="topiclist topics">
    <ul class="topiclist forums">
    @foreach($item1->related('forum_topic')->paginate() as $item)
        @include('pub_theme::layouts.items.forum_topic',['row'=>$item])
    @endforeach
    </ul>
    </ul>
    
@endsection