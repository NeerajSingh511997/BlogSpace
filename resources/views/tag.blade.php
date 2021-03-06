@extends('layouts.website')

@section('content')

<!-- Stunning Header -->

<div class="stunning-header stunning-header-bg-lightviolet">
    <div class="stunning-header-content">
        <h1 class="stunning-header-title">Category: {{ $selectedTag->name }}</h1>
    </div>
</div>	<!-- /Stunning Header -->

<!-- Category Section-->

<div class="container">
    <div class="row medium-padding120">
        <main class="main">

            <!-- Post Details -->
            <div class="row">
                <div class="case-item-wrap">
                @foreach($selectedTag->posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="case-item">
                            <div class="case-item__thumb">
                                <img src="{{ asset($post->featured) }}" alt="{{ $post->title }}">
                            </div>
                            <h6 class="case-item__title">
                            	<a href="{{ route('get.post', ['slug' => $post->slug]) }}">
                            	   {{ $post->title }}	
                            	</a>
                            </h6>
                        </div>
                    </div>
                @endforeach
            	</div>
            </div>	<!-- /Post Details -->


            <br>
            <br>
            
            <!-- Sidebar-->
            <div class="col-lg-12">
                <aside aria-label="sidebar" class="sidebar sidebar-right">
                    <div  class="widget w-tags">
                        <div class="heading text-center">
                            <h4 class="heading-title">ALL BLOG TAGS</h4>
                            <div class="heading-line">
                                <span class="short-line"></span>
                                <span class="long-line"></span>
                            </div>
                        </div>

                        <div class="tags-wrap">
                        @foreach($tags as $tag)
                            <a href="{{ route('get.tag', ['id' => $tag->id]) }}" class="w-tags-item">
                                {{ $tag->name }}</a>
                        @endforeach
                        </div>
                    </div>
                </aside>
            </div>  <!-- /Sidebar-->

        </main>
    </div>
</div>	<!-- /Category Section-->



@endsection
