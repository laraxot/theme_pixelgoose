<div class="topic-actions">
    {{ route('container.container1.container2.container3.create',array_merge($params,['container3'=>'forum_post'])) }}
    <div class="buttons">
        <div class="reply-icon">

            <a href="{{ route('container.container1.container2.container3.create',array_merge($params,['container3'=>'forum_post'])) }}" title="Post a reply">Post a reply</a>

        </div>
    </div>
    <div class="search-box">
        <form method="get" id="forum-search" action="./search.php?style=2">
            <fieldset>
                <div class="search-box-inner">
                    <input class="button2" type="submit" value="Search" />
                    <input class="inputbox search tiny" type="text" name="keywords" id="keywords" size="20" value="Search this topic…" onclick="if (this.value == 'Search this topic…') this.value = '';" onblur="if (this.value == '') this.value = 'Search this topic…';" />
                    <input type="hidden" name="t" value="3" />
                    <input type="hidden" name="sf" value="msgonly" />
                    <input type="hidden" name="style" value="2" />
                </div>
            </fieldset>
        </form>
    </div>
    <div class="pagination">
        6 posts
        &bull; Page <strong>1</strong> of <strong>1</strong> 
    </div>
</div>
<div class="clear"></div>