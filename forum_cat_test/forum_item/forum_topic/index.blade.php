@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash') 
    <h2>Topics List</h2>
    {{-- ddd($item1->title) --}}
    <ul class="topiclist topics">
    <ul class="topiclist forums">
    @foreach($item1->forumTopics()->paginate() as $item0)
        @include('pub_theme::layouts.items.forum_topic',['row'=>$item0])
    @endforeach
    </ul>
    </ul>
    
@endsection