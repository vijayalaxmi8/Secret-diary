<html>
<head>
<title>Secreat Dairy</title>
<link rel="stylesheet" type="text/css"  href="style.css">
<link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

<script type="text/javascript">
        function over()
        {
            document.getElementById("b1").innerHTML="Intrested! Signup Here";
        }
        function loginover()
        {
            document.getElementById("b1").innerHTML="Login using your username and password";
        }
    </script>
</head>

<body>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-mid-12 login-center">
		<h2>Secreat Dairy</h2>
		<p>Store your thoughts permanebtly and securly</p>
		<p id="b1">Intrested! Signup Here</p>
		<form action="registration.php" method="post">
			<div class="form-group">
			<lable>Username</lable>
			<input type="email" name="user" class="form-control" placeholder="Your Emailid" required>
			</div>
	
	<div class="form-group">
	<br>
	<input type="password" name="password" class="form-control" placeholder="Password" required>
	</div>
	<br>

	<div class="btn-box">
	<button type="submit" class="btn btn-primary" onmouseover="over()">Sign Up!</button><br><br>
	<a href="login.php" onmouseover="loginover()">login</a>
	</div>
</form>
</div>
</div>
</div>
</div>
</body>
</html>