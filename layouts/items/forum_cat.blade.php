<div class="forabg">
        <ul class="topiclist">
            <li class="header">
                <dl class="icon">
                    <dt><a href="./viewforum.php?style=2&amp;f=1">{{ $row->title }}</a></dt>
                    <dd class="topics">Topics</dd>
                    <dd class="posts">Posts</dd>
                    <dd class="lastpost"><span>Last post</span></dd>
                </dl>
            </li>
        </ul>
        <ul class="topiclist forums">
            @foreach($row->linked->forumItems as $item)
                @include('pub_theme::layouts.items.forum_item')
            @endforeach
        </ul>
    </div>