<nav aria-label="breadcrumb" id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
	<ol class="breadcrumb">
		<li class="breadcrumb-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a class="icon-home" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset('/') }}" accesskey="h">
			<span itemprop="name">Board index</span>
			</a>
			<meta itemprop="position" content="1" />
		</li>
		<li class="breadcrumb-item"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset(App::getLocale()) }}">
			<span itemprop="name">{{ App::getLocale() }}</span>
			</a>
			<meta itemprop="position" content="2" />
		</li>
		@foreach(array_values($params) as $k=>$v)
		@if(isset($v->title))
		<li class="breadcrumb-item"  itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
			@php
			switch($k){
			case 0:$url=route('container0.index',$params);break;
			case 1:$url=route('container0.show',$params);break;
			case 2:$url=route('container0.container1.index',$params);break;
			case 3:$url=route('container0.container1.show',$params);break;
			case 4:$url=route('container0.container1.container2.index',$params);break;
			case 5:$url=route('container0.container1.container2.show',$params);break;
			case 6:$url=route('container0.container1.container2.container3.index',$params);break;
			case 7:$url=route('container0.container1.container2.container3.show',$params);break;
			}
			@endphp
			<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ $url }}">
			<span itemprop="name">{{ ($v->title!=''?$v->title:$v->guid) }}</span>
			</a>
			<meta itemprop="position" content="{{ $loop->iteration+2 }}" />
		</li>
		@endif
		@endforeach
	</ol>
</nav>