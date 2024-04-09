<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/p1.png">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{ route('login')}}" method="post">
        @csrf
        <h3>Dev Logistics Login </h3>

        <label for="email">Email</label>
        <input type="text" placeholder="Email " id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password" required>
        <br>
        <a href="{{route('register')}}">Register</a>

        <button type="submit">Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>
        </div>
        @csrf
    </form>

</body>
</html>
