<div class="topic-actions">
    <div class="buttons">
        <div class="post-icon" title="Post a new topic">
            @php
                $url=route('container.container1.container2.create',array_merge($params,['container2'=>'forum_topic']));
            @endphp
            @can('create',$forum_topic->linkedOrCreate)
            <a href="{{ $url }}" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;add Topic</a>
            @endcan
        </div>
    </div>
    <div class="search-box">
        <form method="get" id="forum-search" action="./search.php?style=2&amp;sid=63d5644606928aa0b01c2f657aaf47e2">
            <fieldset>
                <div class="search-box-inner">
                    <input class="button2" type="submit" value="Search" />
                    <input class="inputbox search tiny" type="text" name="keywords" id="keywords" size="20" value="Search this forum…" onclick="if (this.value == 'Search this forum…') this.value = '';" onblur="if (this.value == '') this.value = 'Search this forum…';" />
                    <input type="hidden" name="fid[0]" value="2" />
                    <input type="hidden" name="sid" value="63d5644606928aa0b01c2f657aaf47e2" />
                    <input type="hidden" name="style" value="2" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="pagination">
        4 topics &bull; Page <strong>1</strong> of <strong>1</strong>
    </div>
</div>