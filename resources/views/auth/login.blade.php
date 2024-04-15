@extends('welcome')
@section('content')


<div class="container my-5">
   <h1 class="register_text">Please type in your username and password:</h1>
   <form action="" method="POST"> 
      <div class="row">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="username" name="username" id="username" >
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Password" name="password" id="password" >
         </div>
      </div>
   </form>
   <input type="submit" value="Login" class="btn btn-primary ">
   <br>
   <a href="{{route('register')}}">I have no user, register a new one!</a>

</div>

@endsection




