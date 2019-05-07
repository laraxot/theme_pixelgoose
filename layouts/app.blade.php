@extends('pub_theme::layouts.plane')
@section('body')
	<div id="wrap">
		@include('pub_theme::layouts.partials.headernav')
		<div id="page-body">
			@yield('content')
		</div>
		@if(isset($footer) && $footer=='off')
		@else
			@include('pub_theme::layouts.partials.footer')
		@endif
	</div>
</div>
@endsection    


