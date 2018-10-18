<a id="top" name="top" accesskey="t"></a>
			<div id="page-header">
				<div id="above-headerbar">
					<ul class="user-links">
						<li><a href="#login-box" class="login-window" title="Login" accesskey="x">Login</a><a href="./ucp.php?style=2&amp;mode=login" class="login-link" title="Login" accesskey="x">Login</a></li>
					</ul>
					<div id="login-box" class="login-popup">
						<a href="#" class="close"><img src="{{ Theme::image_src('theme/pub/images/close_popup.png') }}" class="close-button" title="Close" alt="Close" /></a>
						<div id="login-text">Login</div>
						<form method="post" action="./ucp.php?style=2&amp;mode=login" class="quick-login">
							<fieldset>
								<div class="navbar_username_outer">
									<label for="username">Username:</label>&nbsp;<br /><input type="text" name="username" id="navbar_username" size="10" class="inputbox" title="Username" />
								</div>
								<div class="navbar_password_outer">
									<label for="password">Password:</label>&nbsp;<br /><input type="password" name="password" id="navbar_password" size="10" class="inputbox" title="Password" />
								</div>
								<div class="login-buttons">
									<input type="submit" name="login" value="Login" class="button2" />
									<input type="hidden" name="redirect" value="./index.php?style=2&amp;style=2" />
									<label id="autologin_label" for="autologin">Log me on automatically each visit <input type="checkbox" name="autologin" id="autologin" /></label>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="search-box">
						<form action="./search.php?style=2" method="get" id="search">
							<fieldset>
								<div class="search-box-inner">
									<input class="button2" value="Search" type="submit" />
									<input name="keywords" id="keywords" type="text" maxlength="128" title="Search for keywords" class="inputbox search" value="Search…" onclick="if(this.value=='Search…')this.value='';" onblur="if(this.value=='')this.value='Search…';" />
								</div>
								&nbsp;<a href="./search.php?style=2" class="search-adv-link" title="View the advanced search options">Advanced search</a> <input type="hidden" name="style" value="2" />
							</fieldset>
						</form>
					</div>
				</div>
				<div id="header">
					<a href="./index.php?style=2" id="logo" title="Board index"><img src="{{ Theme::image_src('theme/pub/images/site_logo.png') }}" width="125" height="31" alt="" title="" /></a>
					<div class="tabs-outer">
						<a href="javascript:void(0);" title="Menu" class="toggleMenuButton"></a>
						<ul class="tabs">
							<li id="faq-link"><a href="./faq.php?style=2" title="Frequently Asked Questions"><span>FAQ</span></a></li>
							<li id="news-link"><a href=""><span>News</span></a></li>
							<li id="contacts-link">
								<a href="#" title="">
								<span>Feedback</span>
								</a>
							</li>
							<li id="sample-link">
								<a href="#" title="">
								<span>Sample Link</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="subheader-menu">
					<ul class="links right"></ul>
					<ul class="links">
						<li id="submenu-unanswered"><a href="./search.php?style=2&amp;search_id=unanswered">View unanswered posts</a></li>
						<li id="submenu-active-topics"><a href="./search.php?style=2&amp;search_id=active_topics">View active topics</a></li>
					</ul>
				</div>
				<div id="breadcrumbs">
					<a class="icon-home" href="./index.php?style=2" accesskey="h">Board index</a>
				</div>
				<ul class="thread-icons"></ul>
			</div>
			<a name="start_here"></a>
