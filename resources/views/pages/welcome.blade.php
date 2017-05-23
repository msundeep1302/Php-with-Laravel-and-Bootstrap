@extends('main')

@section('title', 'Home')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1>Welcome to my blog!</h1>
                <p class="lead">Bootstrap with Laravel!</p>
                <p><a class="btn btn-primary btn-lg" href="/blog" role="button">Popular Posts</a></p>
            </div>
        </div>
    </div> <!-- end of a header row -->

    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{substr($post->body,0,250) }}{{ strlen($post->body) > 250 ? '...' : "" }}</p>
                    <a href="{{ URL::route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>

                <hr>
            @endforeach

        </div>

    </div>
@endsection