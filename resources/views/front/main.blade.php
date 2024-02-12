@extends('layout.front')

@section('content')


<div class="main">

    <div class="container">

        <!--
          - BLOG SECTION
        -->

        <div class="blog">

            <h2 class="h2">Latest Blog Post</h2>

            <div class="blog-card-group">

                @foreach($blogs as $blog)
                <div class="blog-card">

                    <div class="blog-card-banner">
                        <img src="{{ url('storage/' . $blog->image) }}" alt="Building microservices with Dropwizard, MongoDB & Docker"
                             width="250" class="blog-banner-img">
                    </div>

                    <div class="blog-content-wrapper">

                        <h3>
                            <a href="{{route('front.singlepage',['blog'=>$blog->id])}}" class="h3">
                                {{$blog->title}}
                            </a>
                        </h3>

                        <p class="blog-text">
                            {!! Str::limit(strip_tags($blog->description),20)  !!}
                        </p>
                    </div>

                </div>
                @endforeach

            </div>

{{--            <button class="btn load-more">Load More</button>--}}

        </div>

    </div>

</div>
@endsection
