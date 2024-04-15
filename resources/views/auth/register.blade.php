@extends('welcome')

@section('content')
<div class="container my-5">
   <h1 class="register_text">Just enter your username, email, and a password</h1>
   <form action="{{ route('register.post') }}" method="POST">
      @csrf
      <div class="row">
         <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username">
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6">
            <input type="email" class="form-control" placeholder="Email Address" name="email" id="email">
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6 ">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password">
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-6 ">
            <input type="password" class="form-control" placeholder="Retype Password" name="retype_password" id="retype_password">
         </div>
      </div>
      <div class="row my-2">
         <div class="col-md-2">
            <div id="captcha"></div>
            <input type="text" id="captchaInput" class="form-control" placeholder="Enter Captcha" required>
            <a href="#" onclick="generateCaptcha();">Refresh Captcha</a>
            <p id="captchaMessage" style="color: red"></p>
         </div>
      </div>
      <input type="submit" value="Register" class="btn btn-primary">
   </form>
</div>
@endsection

<script>
    function generateCaptcha() {
        var num1 = Math.floor(Math.random() * 10) + 1,
            num2 = Math.floor(Math.random() * 10) + 1,
            operator = ['+', '-', '*'][Math.floor(Math.random() * 3)],
            captcha = num1 + ' ' + operator + ' ' + num2 + ' = ?';
        document.getElementById('captcha').textContent = captcha;
    }

    function checkCaptcha() {
        var userInput = parseInt(document.getElementById('captchaInput').value),
            captchaData = document.getElementById('captcha').textContent.split('=')[1].trim(),
            answer = eval(captchaData),
            messageElement = document.getElementById('captchaMessage');
        messageElement.textContent = userInput === answer ? 'CAPTCHA is correct!' : 'CAPTCHA is incorrect. Please try again.';
        generateCaptcha(); // Show a new CAPTCHA after submission
    }

    // Display a new CAPTCHA when the page is loaded
    window.onload = function() {
        generateCaptcha();
    };
</script>
