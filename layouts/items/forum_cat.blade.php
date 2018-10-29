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
            {{--
            @foreach($row->linked->forumItems()->paginate() as $item0)
            --}}
            @foreach($row->related('forum_item')->paginate() as $item0)
                @include('pub_theme::layouts.items.forum_item',['row'=>$item0])
            @endforeach
        </ul>
    </div>