<html>
<head>
<title>UserLogin</title>
<link rel="stylesheet" type="text/css"  href="style.css">
<link rel="stylesheet" type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
</head>

<body>
<div class="container">
	<div class="login-box">
	<div class="row">
	<div class="col-mid-6 login-center">
		<h2>Login Here</h2>
		<form action="validation.php" method="post">
			<div class="form-group">
			<lable>Username</lable>
			<input type="text" name="user" class="form-control" requried>
			</div>
	
	<div class="form-group">
	<lable>Password</lable>
	<input type="password" name="password" class="form-control" requried>
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Login</button><br><br>
	<a class="btn btn-primary" href="index.php">Sign Up!</a>
</form>
</div>
</div>
</div>
</div>
</body>
</html>