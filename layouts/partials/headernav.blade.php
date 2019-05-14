<a id="top" name="top" accesskey="t"></a>
<div id="page-header">
	<div id="above-headerbar">
		<ul class="user-links">
			@include('lu::auth.links')
		</ul>
		@include('pub_theme::layouts.partials.headernav.search-box')
	</div>
	<div id="header">
		<a href="{{ url('/'.$lang) }}" id="logo" title="Board index">
			<h2 class="text-white">{{ (isset($home) && is_object($home))?$home->title:'' }}</h2>
		</a>
		<div class="tabs-outer">
			<a href="javascript:void(0);" title="Menu" class="toggleMenuButton"></a>
			<ul class="tabs">
				<li id="faq-link">
					<a href="./faq.php?style=2" title="Frequently Asked Questions"><span>FAQ</span></a>
				</li>
				<li id="news-link">
					<a href=""><span>News</span></a>
				</li>
				<li id="contacts-link">
					<a href="#" title=""><span>Feedback</span></a>
				</li>
				<li id="sample-link">
					<a href="#" title=""><span>Sample Link</span></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="subheader-menu">
		<ul class="links right"></ul>
		<ul class="links">
			<li id="submenu-unanswered">
				<a href="#">View unanswered posts</a>
			</li>
			<li id="submenu-active-topics">
				<a href="#">View active topics</a>
			</li>
		</ul>
	</div>
	{{--  
	@include('pub_theme::layouts.partials.breadcrumb')
	--}}
	<ul class="thread-icons"></ul>
</div>
<a name="start_here"></a>