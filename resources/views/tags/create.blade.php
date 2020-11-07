@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Tag</div>

                <div class="card-body">
                   
{{-- errors --}}

                  @if(count($errors)>0)

                  <ul class="navbar-nav mr-auto">
                  @foreach($errors->all() as $error)
                  
                    <li class="nav-item active">
                      {{$error}}
                    </li>
                    @endforeach
                   
                  </ul>
                  @endif    

{{-- end errors --}}


                  <form action="{{route('tag.store')}}" method="POST" >
                    {{ csrf_field() }}

                    <div class="form-group">
                      <label for="tag">Name</label>
                      <input type="text" class="form-control" name="tag" placeholder="Enter tag name">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
