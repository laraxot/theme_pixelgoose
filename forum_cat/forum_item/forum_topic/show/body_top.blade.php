<div class="topic-actions">
	<div class="buttons">
		<div class="reply-icon">
			@php
			$url=route('container0.container1.container2.container3.create',array_merge($params,['container3'=>'forum_post']));
			@endphp
			<a href="{{ $url }}" title="Post a reply" class="btn btn-default"><i class="fa fa-plus"></i>&nbsp;Post a reply</a>
		</div>
	</div>
	@include($view.'.search-box')
	
	<div class="pagination">
		6 posts
		&bull; Page <strong>1</strong> of <strong>1</strong> 
	</div>
</div>
<div class="clear"></div>