<div class="widget">
	<div class="widget-body">
		@if (count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $k=>$error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		@includeFirst([$view.'.form',$view_default.'.form.'.$edit_type])
	</div>
</div>