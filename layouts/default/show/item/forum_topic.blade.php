<h2>{{ $row->title }}</h2>
@foreach($row->forumPosts()->paginate() as $item0)
    @include('pub_theme::layouts.items.forum_post',['row'=>$item0])
@endforeach