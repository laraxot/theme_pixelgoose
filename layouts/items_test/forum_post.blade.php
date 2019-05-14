<div id="p3" class="post bg2">
    <div class="postbody">
        <h3 class="first">
            <img src="./images/icons/misc/fire.gif" width="16" height="16" alt="" /> 
            <a href="#{{ $row->guid }}">{{ $row->title }}</a>
        </h3>
        <p class="author">
            <a href="">
                <img src="./styles/metro_blue/imageset/icon_post_target.png" width="11" height="9" alt="Post" title="Post" />
            </a>by 
            <strong>
                <a href="" style="color: #AA0000;" class="username-coloured">{{ $row->created_by }}</a>
            </strong> &raquo; {{ $row->created_at }} 
        </p>
        <div class="content">{!! $row->txt !!}</div>
        <div id="sig3" class="signature">Some signature text</div>
    </div>
    <dl class="postprofile" id="profile3">
        <dt>
            <a href="">
                <img src="" width="100" height="100" alt="User avatar" />
            </a><br />
            <a href="" style="color: #AA0000;" class="username-coloured">{{ $row->created_by }}</a>
        </dt>
        <dd>Site Admin</dd>
        <dd>&nbsp;</dd>
        <dd><strong>Posts:</strong> 16</dd>
        <dd><strong>Joined:</strong> Fri Apr 12, 2013 9:26 pm</dd>
    </dl>
    <div class="back2top"><a href="#wrap" class="top" title="Top">Top</a></div>
</div>
<hr class="divider" />