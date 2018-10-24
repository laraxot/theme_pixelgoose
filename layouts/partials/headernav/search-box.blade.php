<div class="search-box">
	{{--
	<form action="./search.php?style=2" method="get" id="search">
		<fieldset>
			<div class="search-box-inner">
				<input class="button2" value="Search" type="submit" />
				<input name="keywords" id="keywords" type="text" maxlength="128" title="Search for keywords" class="inputbox search" value="Search…" onclick="if(this.value=='Search…')this.value='';" onblur="if(this.value=='')this.value='Search…';" />
			</div>
			&nbsp;<a href="./search.php?style=2" class="search-adv-link" title="View the advanced search options">Advanced search</a> <input type="hidden" name="style" value="2" />
		</fieldset>
	</form>
	--}}
{{ Form::open(['method'=>'GET','class'=>'navbar-form navbar-right','role'=>'search']) }}
<div class="input-group ">
	{{--
	<span class="input-group-addon btn btn-default">
		<a href="?scoutimport" ><i class="fa fa-refresh"></i></a>
	</span>
	--}}
	<input type="text" class="form-control" name="q" value="{{ \Request::input('q') }}" placeholder="search ..">
	<span class="input-group-btn">
		<button class="btn btn-default" type="submit">
			<i class="fa fa-search"></i>
		</button>
	</span>
</div>
{{ Form::close() }}
</div>

