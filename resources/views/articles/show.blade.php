@extends('layouts.app')
@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">

                        <h1>{{$article->title}}</h1>

                        <span class="subheading"> {{ Str::of($article->excerpt)->limit(20)}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <hr>

                    <div class="post-preview">
                       
            
                            <p class="post-subtitle">
                                {{ $article->body}}
                            </p>
                        
                        <p class="post-meta">Posted by
                            <a href="#">Start Bootstrap</a>
                            on July 8, 2019</p>
                        @foreach($article->tags as $tag)
                        <small class="badge badge-success"><a href="{{route('articles.index', ['tag'=>$tag->name])}}">{{$tag->name}}</a></small>
                        @endforeach
                    </div>
                    <hr>

            <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
