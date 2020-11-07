@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                 @if($posts->count()>0)
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> Title </th>

                       <th scope="col">edit</th>  
                       <th scope="col">delete</th>  
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <th scope="row">
                            {{--  عرض الصورة تبع البوست  --}}
                        <img src="{{$post->featured}}" alt="{{$post->title}}" class="image_thumbnail" width="100px" height="100px">
                      </th>
                        <th scope="row">{{$post->title}}</th>

                       <td>
                        <a class="" href="{{route('post.edit',['id'=>$post->id])}}" > 
                        <i class="fas fa-edit"></i>
                         </a>  
                       </td>
                        <td> <a class="" href="{{route('post.delete',['id'=>$post->id])}}"> 
                          <i class="far fa-trash-alt"></i>
                        </a> 

                        </td>
                      </tr>
                      @endforeach
                      @else
                      <p  class="text-center" >No posts found </p>
                      @endif
                    </tbody>
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
