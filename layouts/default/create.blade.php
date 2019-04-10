@extends('pub_theme::layouts.app')
@section('page_heading',trans($view.'.page_heading'))
@section('content')
@include('extend::includes.flash')
@include('extend::includes.components')
<div class="page-wrapper">
	@includeFirst([$view.'.inner_page',$view_default.'.inner_page.'.snake_case($row->post_type),$view_default.'.inner_page'])
	@include('pub_theme::layouts.partials.breadcrumb')
	<section class="create-page inner-page">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
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
							@php
								if(!\View::exists($view.'.form') && !\View::exists($view_default.'.form.'.snake_case($row->post_type)) ){
									ddd('non esiste ne ['.$view.'.form] ne ['.$view_default.'.form.'.snake_case($row->post_type).'] ');
								}
							@endphp
							@includeFirst([$view.'.form',$view_default.'.form.'.snake_case($row->post_type)])
						</div>
					</div>
				</div>
				<div class="col-md-4">
					@includeFirst([$view.'.right',$view_default.'.right'])
				</div>
			</div>
		</div>
	</section>
</div>
@endsection