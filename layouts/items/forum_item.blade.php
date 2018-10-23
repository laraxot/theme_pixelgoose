<li class="row">
    <dl class="icon" style="background-image: url(./styles/metro_blue/imageset/forum_read.png); background-repeat: no-repeat;">
        <dt title="No unread posts">
            [{{ $row->pivot->url }}]
            <a href="{{ $row->pivot->url }}" class="forumtitle">{{ $row->title }}</a><br />
            {{$row->subtitle}}
        </dt>
        <dd class="topics">4 <dfn>Topics</dfn></dd>
        <dd class="posts">9 <dfn>Posts</dfn></dd>
        <dd class="lastpost"><span>
            <dfn>Last post</dfn> by <a href="./memberlist.php?style=2&amp;mode=viewprofile&amp;u=57">lutvia</a>
            <a href="./viewtopic.php?style=2&amp;f=2&amp;p=19#p19"><img src="{{ Theme::image_src('theme/pub/images/icon_topic_latest.png') }}" width="12" height="10" alt="View the latest post" title="View the latest post" /></a> <br />Wed Apr 09, 2014 2:28 pm</span>
        </dd>
    </dl>
</li>