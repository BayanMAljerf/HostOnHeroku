@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Post {{$post->title}}</div>

                <div class="card-body">
                   



                  @if(count($errors)>0)

                  <ul class="navbar-nav mr-auto">
                  @foreach($errors->all() as $error)
                  
                    <li class="nav-item active">
                      {{$error}}
                    </li>
                    @endforeach
                   
                  </ul>
                  @endif    


                  <form action="{{route('post.update',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>

                  <div class="form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category_id">
                    @foreach($categories as $category)
                    @if ($category->id == $post->category_id)
                    <option value="{{$category->id}}" selected> {{$category->name}} </option>
                    @else
                    <option value="{{$category->id}}" > {{$category->name}} </option>
                    @endif   

                    @endforeach
                    </select>
                  </div>

                  <label for="tag"> Tags: </label>
                  <br>
                   @foreach($tags as $tag)
                  <div class="form-check form-check-inline">
                    
                   
                    <input class="form-check-input" type="checkbox"  name="tags[]" value="{{$tag->id}}" 
                    
                   @foreach($post->tags as $ta)
                   @if($tag->id==$ta->id)
                   checked
                   @endif
                   @endforeach
                   >
                   <label class="form-check-label" >{{$tag->tag}}</label><br>
                   
                  </div><br>
                  @endforeach

                    <div class="form-group">
                      <label for="content">Content</label>
                      <textarea class="form-control" name="content" id="content" rows="8" cols="8">
                        {!! $post->content !!}
                      </textarea>
                    </div>
                   
                      <div class="form-group">
                        <label for="featured">Photo</label>
                        <input type="file" class="form-control-file" name="featured">
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote0.8.18/summernote.css" rel="stylesheet" >

@endsection

@section('scripts')
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

<script>
$(document).ready(function() {
  $('#content').summernote();
});

</script>
@endsection



