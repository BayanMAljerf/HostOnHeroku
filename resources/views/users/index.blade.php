@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                 @if($users->count()>0)
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col"> No </th>
                        <th scope="col"> UserName </th>
                       <th scope="col">edit permission</th>  
                       <th scope="col">delete</th>  
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <th>
                        <img src="{{asset('uploads\avatar\1.png')}}" alt="{{$user->name}}" class="image_thumbnail" width="50px" height="50px">
                      </th>
                        <th scope="row">{{$user->name}}</th>

                       <td>
                       @if ($user->admin)
                       <a class="" href="{{route('user.deleteadmin',['id'=>$user->id])}}"> 
                        delete admin
                       </a> 
                       @else
                       <a class="" href="{{route('user.makeadmin',['id'=>$user->id])}}"> 
                       make admin
                      </a> 
                       @endif
                       </td>
                        <td> <a class="" href="{{route('user.delete',['id'=>$user->id])}}"> 
                          <i class="far fa-trash-alt"></i>
                        </a> 

                        </td>
                      </tr>
                      @endforeach
                      @else
                      <p  class="text-center" >No users found </p>
                      @endif
                    </tbody>
                  </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
