@extends('layouts.app')
@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>About us</h1>
                        <span class="subheading">A Blog Theme by Start Bootstrap</span>
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
                @foreach($articles as $article)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <a href="/articles/{{$article->id}}">
                            {{$article->title}}
                            </a>
                        </h2>
                        <h3 class="post-subtitle h5">
                            {{ Str::of($article->excerpt)->limit(90)}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on July 8, 2019</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
