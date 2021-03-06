@php
	Theme::add('/vendor/laravel-filemanager/js/lfm.js');
	Theme::add('/vendor/laravel-filemanager/css/lfm.css');
	Theme::add('pub_theme::includes/components/form/unisharp/js/imgman.js');
	$src=Form::getValueAttribute($name);
	if($src=='') $src='/images/nophoto.png';

@endphp

<div class="input-group">
	<span class="input-group-btn">
		<a id="lfm_img" data-input="thumbnail" data-preview="holder" class="btn btn-success">
			<i class="fa fa-folder-open-o"></i> Sfoglia
		</a>
	</span>
<input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<img id="holder" style="margin-top:15px;max-height:100px;">
