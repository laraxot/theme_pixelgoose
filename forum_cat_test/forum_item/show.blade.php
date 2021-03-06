@extends('pub_theme::layouts.app')
@section('content')
@include('extend::includes.components')
@include('extend::includes.flash')
            <h2>{{ $row->title }}</h2>
            <div>
                <div style="display: none !important;">Description of your first forum.<br /></div>
            </div>
            @include($view.'.body_top')
            <div class="forumbg">
                <ul class="topiclist">
                    <li class="header">
                        <dl class="icon">
                            <dt><span class="forum-name">Topics<span></span></dt>
                            <dd class="posts">Replies</dd>
                            <dd class="views">Views</dd>
                            <dd class="lastpost"><span>Last post</span></dd>
                        </dl>
                    </li>
                </ul>
                <ul class="topiclist topics">
                    <ul class="topiclist forums">
                        {{--
                        @foreach($row->linked->forumTopics()->paginate() as $item0)
                        --}}
                        @foreach($row->related('forum_topic')->paginate() as $item0)
                            @include('pub_theme::layouts.items.forum_topic',['row'=>$item0])
                        @endforeach
                    </ul>
                </ul>
            </div>
            @include($view.'.body_bottom')
@endsection        