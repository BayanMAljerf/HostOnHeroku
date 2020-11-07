@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Soft deleted Articles</div>

                <div class="card-body">
                

                  <table class="table table-striped">
                    <thead>
                      @if ($posts->count()>0)
                      <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> Title </th>
                        <th scope="col"> Restore </th>
                        <th scope="col">delete</th>
                       {{-- <th scope="col">edit</th>  --}}
                      
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                    <th>
                      <img src="{{$post->featured}}" alt="{{$post->title}}" class="image_thumbnail" width="100px" height="100px">
                    </th>
                      <th scope="row">{{$post->title}}</th>

                     <td>
                     <a class="" href="{{route('post.restore',['id'=>$post->id])}}">
                        <i class="fas fa-trash-restore" ali></i>
                      </a>        
                     </td>
                      <td> <a class="" href="{{route('post.hdelete',['id'=>$post->id])}}"> 
                        <i class="far fa-trash-alt"></i>
                      </a> 

                      </td>
                    </tr>
                    @endforeach                        
                    @else
                      <p  class="text-center" >No trashed posts found </p>
                    @endif
                    </tbody>
                  </table>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
