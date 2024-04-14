@extends('welcome')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

<div class="container my-5">
   <h1 class="register_text">Just enter your username, email and a password</h1>
   <form action="{{route('register')}}" method="POST">
   @csrf
      <div class="row">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" >
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Email-Address" name="email" id="email" >
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6 ">
            <input type="text" class="form-control" placeholder="Passowrd" name="password" id="password" >
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6 ">
            <input type="text" class="form-control" placeholder="Retype Passowrd" name="password" id="username" >
         </div>
      </div>

      <div id="captcha"></div>
<input type="text" id="captchaInput"  required>
<a onclick="checkCaptcha()">refresh</a>
<p id="captchaMessage" style="color: red"></p>
     
<input type="submit" value="Register" class="btn btn-primary">

   </form>

</div>

@endsection

<!-- captcha js -->

<script>
function generateCaptcha() {
    var num1 = Math.floor(Math.random() * 10) + 1,
        num2 = Math.floor(Math.random() * 10) + 1,
        operator = ['+', '-', '*'][Math.floor(Math.random() * 3)],
        captcha = num1 + ' ' + operator + ' ' + num2 + ' = ?';
    return { captcha: captcha, answer: eval(num1 + operator + num2) };
}

function displayCaptcha() {
    var captchaData = generateCaptcha();
    document.getElementById('captcha').textContent = captchaData.captcha;
    return captchaData.answer;
}

function checkCaptcha() {
    var userInput = parseInt(document.getElementById('captchaInput').value),
        answer = displayCaptcha(),
        messageElement = document.getElementById('captchaMessage');
    messageElement.textContent = userInput === answer ? 'CAPTCHA is correct!' : 'CAPTCHA is incorrect. Please try again.';
    displayCaptcha(); // Show a new CAPTCHA after submission
}

// Display a new CAPTCHA when the page is loaded
window.onload = function() {
    displayCaptcha();
};
</script>


<!-- captcha js end -->
