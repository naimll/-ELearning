<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../resources/css/style.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


<div class="wrapper fadeInDown">
  <div id="formContent">



    <div class="fadeIn first">
      <img src="https://cdn3.vectorstock.com/i/thumb-large/53/42/user-member-avatar-face-profile-icon-vector-22965342.jpg" id="icon" alt="User Icon" />
    </div>

    @if ($alert = Session::get('alert-danger'))
    <div class="alert alert-danger" role="alert">
       {{$alert}}
      </div>
        @endif


    <form action="{{route('login')}}" method="POST">
        @csrf
      <input type="text" id="login" class="fadeIn second" name="email" placeholder="email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>


    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>
