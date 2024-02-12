@extends('layout.front')

@section('content')


    <div class="main">

        <div class="container">

            <!--
              - BLOG SECTION
            -->

            <div class="blog">

                        <img src="{{ url('storage/' . $blog->image) }}" alt="Building microservices with Dropwizard, MongoDB & Docker"
                             width="250" class="blog-banner-img">


                        <h3>
                                {{$blog->title}}
                        </h3>

                        <p class="blog-text">
                            {!!  $blog->description !!}
                        </p>




            </div>
        </div>
    </div>


@endsection
