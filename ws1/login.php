<!DOCTYPE html>
<html>
<head>
<title>Log In</title>
<link rel="stylesheet" type="text/css" href="Stylesheet.css">
</head>

<body>
<h2>Cross Site Request Forgery Protection</h2>
<h2>Synchronizer Token Pattern</h2>
<div>
<form name="loginForm" id="loginF" class="login" action="home.php" method="post">
	<h1 class="login">Log In</h1>
	<br>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Username<br>
	<input type="text" id="unametxt" name="unametxt" placeholder="Enter Username" class="login" required><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password<br>
	<input type="password" id="passtxt" name="passtxt" placeholder="Enter Password" class="login" required><br>
    <input name="login" type="submit" value="Login" class="login">&nbsp&nbsp;
	
</form>
<div>
</div>
</body>
</html>