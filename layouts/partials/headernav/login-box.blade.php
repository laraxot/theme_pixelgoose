{{--
<div id="login-box" class="login-popup modal fade" role="dialog" aria-labelledby="myModalLabel">
	<a href="#" class="close">
		<img src="{{ Theme::image_src('theme/pub/images/close_popup.png') }}" class="close-button" title="Close" alt="Close" />
	</a>
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
--}}
<div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Login</h4>
      </div>
      <div class="modal-body">
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
				<label id="autologin_label" for="autologin">Log me on automatically each visit 
					<input type="checkbox" name="autologin" id="autologin" />
				</label>
			</div>
		</fieldset>
	</form>
      </div>
      {{--
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
      --}}
    </div>
  </div>
</div>