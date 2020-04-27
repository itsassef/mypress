@extends('layouts.app')
@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Articles</h1>
                        <span class="subheading">A list of articles</span>
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
                @forelse($articles as $article)
                <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            <a href="{{$article->path()}}">
                            {{$article->title}}
                            </a>
                        </h2>
                        <h3 class="post-subtitle h5">
                            {{ Str::of($article->excerpt)->limit(90)}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">{{$article->user->name}}</a>
                        on July 8, 2019</p>
                        @foreach($article->tags as $tag)
                        <small class="badge badge-success"><a href="/articles?tag={{$tag->name}}">{{$tag->name}}</a></small>
                        @endforeach
                </div>
                <hr>
                @empty
                <p>No articles are here yet.</p>
                @endforelse
                <!-- Pager -->
                <div class="clearfix">
                    <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <hr>
@endsection
