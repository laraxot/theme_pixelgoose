<li class="row bg1">
    <dl class="icon" style="background-image: url(./styles/metro_blue/imageset/topic_read.png); background-repeat: no-repeat;">
        <dt style="background-image: url(./images/icons/misc/fire.gif); background-repeat: no-repeat;" title="No unread posts">
        <a href="{{ $row->pivot->url }}" class="topictitle">{{ $row->title }}</a>
            <br />
            by <a href="" style="color: #AA0000;" class="username-coloured">{{ $row->created_by}}</a> &raquo; {{ $row->created_at }}
        </dt>
        <dd class="posts">5 <dfn>Replies</dfn></dd>
        <dd class="views">197165 <dfn>Views</dfn></dd>
        <dd class="lastpost"><span><dfn>Last post </dfn>by <a href="./memberlist.php?style=2&amp;mode=viewprofile&amp;u=57&amp;sid=63d5644606928aa0b01c2f657aaf47e2">lutvia</a>
            <a href="./viewtopic.php?style=2&amp;f=2&amp;t=3&amp;p=19&amp;sid=63d5644606928aa0b01c2f657aaf47e2#p19"><img src="./styles/metro_blue/imageset/icon_topic_latest.png" width="12" height="10" alt="View the latest post" title="View the latest post" /></a> <br />Wed Apr 09, 2014 2:28 pm</span>
        </dd>
    </dl>
</li>