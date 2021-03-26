<!DOCTYPE html>
<html lang="en">
<head>
	<title>LOG IN</title>
	<link rel="stylesheet" type="text/css" href="logincumsignup.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	
	
	
	<img src="meeting.jpg" class="bg">
	
	
	<form class="box" action="login.php" method="post">
		
		<h1><b><u>WELCOME</u></b></h1>
		<input type="text" name="username" placeholder="Username" required="">
		<input type="password" name="password" placeholder="Password" required="">
		<input type="submit" name="submit" value="LOGIN">


		<div class="d-flex flex-row justify-content-center">
			<div class="account" style="color:blue;">
           <h5><b><center>Don't have an Account...</center></b></h5>
           <h5><b>Sign Up now</b></h5>
          <a href="signup page.php" class="btn btn-info" role="button" >SIGN UP</a>
      </div>
      <div class="d-flex ">
      	<br>
      <a href="#" style="color:blue;">FORGOT PASSWORD?</a>
      </div>
  </div>
  </form>
        
	

	
		
</body>
</html>