@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                  @if($categories->count()>0)

                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"> No </th>
                        <th scope="col">edit</th>
                        <th scope="col">delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                      <tr>
                        <th scope="row">{{$category->name}}</th>
                       <td><a class="" href="{{route('category.edit',['id'=>$category->id])}}">
                        <i class="fas fa-edit"></i>
                       </a>
                       </td>
                        <td><a class="" href="{{route('category.delete',['id'=>$category->id])}}">
                          <i class="far fa-trash-alt"></i>
                         </a>

                        </td>
                      </tr>
                      @endforeach
                      @else
                      <p  class="text-center" >No categories found </p>
                      @endif
                    </tbody>
                  </table>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
