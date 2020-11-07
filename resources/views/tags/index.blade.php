@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tags</div>

                <div class="card-body">
                 @if($tags->count()>0)
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"> No </th>
                       <th scope="col">edit</th>  
                       <th scope="col">delete</th>  
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tags as $tag)
                      <tr>
                        <th scope="row">{{$tag->tag}}</th>

                       <td>
                        <a class="" href="{{route('tag.edit',['id'=>$tag->id])}}" > 
                        <i class="fas fa-edit"></i>
                         </a>  
                       </td>
                        <td> <a class="" href="{{route('tag.delete',['id'=>$tag->id])}}"> 
                          <i class="far fa-trash-alt"></i>
                        </a> 

                        </td>
                      </tr>
                      @endforeach
                      @else
                      <p  class="text-center" >No  tags found </p>
                      @endif
                    </tbody>
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
