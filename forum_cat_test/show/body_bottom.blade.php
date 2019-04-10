<form method="post" id="jumpbox" action="./viewforum.php?style=2" onsubmit="if(this.f.value == -1){return false;}">
    <fieldset class="jumpbox">
        <label for="f" accesskey="j">Jump to:</label>
        <select name="f" id="f" onchange="if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }">
            <option value="-1">Select a forum</option>
            <option value="-1">------------------</option>
            <option value="1" selected="selected">Your first category</option>
            <option value="2">&nbsp; &nbsp;Your first forum</option>
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
<div class="dark-header-content">Users browsing this forum: No registered users and 1 guest</div>