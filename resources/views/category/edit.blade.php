@extends('template')

@section('content')

<!-- Page Header -->
  <header class="masthead" style="">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Category Edit Form</h1>
            @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
            @endif
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
      <form method="post" action="{{route('category.update',$category->id)}}" >
        @csrf
        @method('PUT')
          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name" value="{{$category->name}}">
          </div>
          
          <div class="form-group">
           <input type="submit" class="btn btn-primary" name="btnsubmit" value="Update">
          </div>
      </form>
      </div>
    </div>
  </div>
  @endsection
