@extends('welcome')
@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<div class="container my-5">
   <h1 class="register_text">Add a new link</h1>
   <form action="" method="POST"> 
      <div class="row">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="http://www.example.com/story" name="username" id="username" >
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Type Categories" name="password" id="password" >
         </div>
      </div>
   </form>
   <input type="submit" value="Add Url" class="btn btn-primary ">

</div>

@endsection




