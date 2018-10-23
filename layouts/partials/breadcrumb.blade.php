<div id="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
	<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
	<a class="icon-home" itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset('/') }}" accesskey="h">
		<span itemprop="name">Board index</span>
	</a>
	<meta itemprop="position" content="2" />
	</span>
	&nbsp;&raquo;&nbsp;
	<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
				<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ asset(App::getLocale()) }}">
					<span itemprop="name">{{ App::getLocale() }}</span>
				</a>
				 <meta itemprop="position" content="2" />
			</span>
	
	@foreach(array_values($params) as $k=>$v)
        		@if(isset($v->title))
				&nbsp;&raquo;&nbsp;
        			<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
						@php
							switch($k){
								case 0:$url=route('container.index',$params);break;
								case 1:$url=route('container.show',$params);break;
								case 2:$url=route('container.container1.index',$params);break;
								case 3:$url=route('container.container1.show',$params);break;
								case 4:$url=route('container.container1.container2.index',$params);break;
								case 5:$url=route('container.container1.container2.show',$params);break;
								case 6:$url=route('container.container1.container2.container3.index',$params);break;
								case 7:$url=route('container.container1.container2.container3.show',$params);break;

							}
						@endphp
						<a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="{{ $url }}">
							<span itemprop="name">{{ ($v->title!=''?$v->title:$v->guid) }}[{{$k}}]</span>
						</a>
				 		<meta itemprop="position" content="{{ $k+3 }}" />
					</span>
        		@endif
        	@endforeach
</div>

