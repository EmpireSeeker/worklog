<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="/assets/img/p1.png">
    <link rel="stylesheet" href="{{asset('assets/css/reg.css')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="main-w3layouts wrapper">
		<h1> SignUp Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form  action="{{route ('register') }}" method="post">
                    @csrf
					<input class="text" type="text" name="name" placeholder="Name" required=""></input>
					<input class="text email" type="email" name="email" placeholder="Email" required=""></input>
                    <input type="hidden" placeholder="email" name="role" value="user"></input>
					<input class="text" type="password" name="password" placeholder="Password" required=""></input>
					<input class="text w3lpass" type="password" name="confirm password" placeholder="Confirm Password" required=""></input>

					<input type="submit" value="SIGNUP">
				</form>
				<p>Don't have an Account? <a href="#"> Login Now!</a></p>
			</div>
		</div>

		<div class="colorlibcopy-agile">
			<p>© DevCleon Signup Form. All rights reserved | Design by <a href="#0" target="_blank">Cleon</a></p>
		</div>

		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</body>
</html>
