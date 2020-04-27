@extends('layouts.app')
@section('content')


    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="site-heading">
                        <h1>Add Article</h1>
                        <span class="subheading">Add a new article, write something meaningful.</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row col-7 offset-2">
        <form action='store' method="POST" class="w-100">
        @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Title</label>
              <input type="text" name="title" class="form-control" placeholder="Title" id="title"  value="{{old('title')}}">
              @if(count($errors)>0)
              <p class="help-block text-danger">{{$errors->first('title')}}</p>
              @endif
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Excerpt</label>
              <textarea type="text" rows="2" name="excerpt" placeholder="Excerpt" class="form-control" id="excerpt" required data-validation-required-message="Please enter the excerpt.">{{old('excerpt')}}</textarea>
              @if(count($errors)>0)
              <p class="help-block text-danger">{{$errors->first('excerpt')}}</p>
              @endif
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Article</label>
              <textarea rows="7" name="body" class="form-control" placeholder="Article Text" id="body" required data-validation-required-message="Please enter the article text.">{{old('body')}}</textarea>
              @if(count($errors)>0)
              <p class="help-block text-danger">{{$errors->first('body')}}</p>
              @endif
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Select Tags</label>
              <select multiple name="tags[]" class="select form-control" required>
              @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
              </select>
              @if(count($errors)>0)
              <p class="help-block text-danger">{{$errors->first('body')}}</p>
              @endif
            </div>
          </div>
          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
          </div>
        </form>
        </div>
    </div>

    <hr>
@endsection


