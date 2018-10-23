<form id="viewtopic" method="post" action="./viewtopic.php?style=2&amp;f=2&amp;t=3">
    <fieldset class="display-options" style="margin-top: 0; ">
        <label>
            Display posts from previous: 
            <select name="st" id="st">
                <option value="0" selected="selected">All posts</option>
                <option value="1">1 day</option>
                <option value="7">7 days</option>
                <option value="14">2 weeks</option>
                <option value="30">1 month</option>
                <option value="90">3 months</option>
                <option value="180">6 months</option>
                <option value="365">1 year</option>
            </select>
        </label>
        <label>
            Sort by 
            <select name="sk" id="sk">
                <option value="a">Author</option>
                <option value="t" selected="selected">Post time</option>
                <option value="s">Subject</option>
            </select>
        </label>
        <label>
            <select name="sd" id="sd">
                <option value="a" selected="selected">Ascending</option>
                <option value="d">Descending</option>
            </select>
            <input type="submit" name="sort" value="Go" class="button2" />
        </label>
    </fieldset>
</form>
<hr />
<div class="topic-actions">
    <div class="buttons">
        <div class="reply-icon"><a href="./posting.php?style=2&amp;mode=reply&amp;f=2&amp;t=3" title="Post a reply"><span></span>Post a reply</a></div>
    </div>
    <div class="pagination">
        6 posts
        &bull; Page <strong>1</strong> of <strong>1</strong>
    </div>
</div>
<a href="./viewforum.php?style=2&amp;f=2" class="left-box left block-link" accesskey="r">Return to Your first forum</a>
<form method="post" id="jumpbox" action="./viewforum.php?style=2" onsubmit="if(this.f.value == -1){return false;}">
    <fieldset class="jumpbox">
        <label for="f" accesskey="j">Jump to:</label>
        <select name="f" id="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">
            <option value="-1">Select a forum</option>
            <option value="-1">------------------</option>
            <option value="1">Your first category</option>
            <option value="2" selected="selected">&nbsp; &nbsp;Your first forum</option>
            <option value="4">&nbsp; &nbsp;Your second forum</option>
            <option value="5">&nbsp; &nbsp;Your third forum</option>
            <option value="3">Your second category</option>
            <option value="6">&nbsp; &nbsp;Your first forum</option>
            <option value="7">&nbsp; &nbsp;Your second forum</option>
            <option value="10">&nbsp; &nbsp;Buy &quot;Quarto&quot; theme!</option>
            <option value="8">&nbsp; &nbsp;Buy &quot;Metro&quot; theme!</option>
            <option value="9">&nbsp; &nbsp;Buy &quot;Marina&quot; theme!</option>
        </select>
        <input type="submit" value="Go" class="button2" />
    </fieldset>
</form>
<h3 class="dark-header">Who is online</h3>
<div class="dark-header-content">Users browsing this forum: No registered users and 3 guests</div>