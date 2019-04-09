@php
	$item_view=$view.'.item.'.snake_case($row->post_type);
	$item_view_default=$view_default.'.item.'.snake_case($row->post_type);
	if(!\View::exists($item_view) && !\View::exists($item_view_default)){
		ddd('not exist ['.$item_view.'] ['.$item_view_default.']');
	}
	/*
	$add_item_view=$view.'.item.add.'.snake_case($row->post_type);
	$add_item_view_default=$view_default.'.item.add.'.snake_case($row->post_type);
	if(!\View::exists($add_item_view) && !\View::exists($add_item_view_default)){
		ddd('not exist ['.$add_item_view.'] ['.$add_item_view_default.']');
	}
	*/
@endphp
{!! Form::bsBtnCreate() !!}
@foreach($rows as $key=>$row)
	@includeFirst([$item_view,$item_view_default],['key'=>$key,'row'=>$row])
@endforeach
{{ $rows->links('pub_theme::layouts.partials.pagination') }}
