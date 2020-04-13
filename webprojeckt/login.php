<?php
include 'connection.php';
?>
<?php

session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'webproject');
if(isset($_POST['submit'])){

$name= $_POST['email'];

		$pass= $_POST['password'];

		

		$check = "select*from registration where email='$name' AND password ='$pass'";

		$check_work= mysqli_query($con,$check);

		

		if($check_work){

			if(mysqli_num_rows($check_work) > 0 ){

				

				echo"

				<script>

				alert('You are Successfully  Logged in');

				window.location.href='homelogin.php';
				
				

				</script>

				";
				

				

			}else{

				

				echo"

				<script>

				alert('Password Wrong :D ');


				</script>

				";

			}

			

			

		}else{

			

			

				echo"

				<script>

				alert('Database Error  ');


				</script>

				";

		}

		

		

		

	}







?>


<!DOCTYPE HTML>
<html>

<head>
	<title>nikkah.com</title>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link rel="stylesheet" href="css/loginstyle.css" type="text/css" media="all" />
	<link href="css/font-awesome.min.css" rel="stylesheet">

	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>

<body>
	<h1>
		<span>N</span>
		<span>i</span>
		<span>k</span>
		<span>k</span>
		<span>a</span>
		<span>h</span>
	</h1>

	<div class="sub">
		<form class="login" action="#" method="POST">
			<p class="legend">Login Here<span class="fa fa-hand-o-down"></span></p>
			<div class="input">
				<input type="email" placeholder="Email" name="email" required />
				<span class="fa fa-envelope"></span>
			</div>
			<div class="input">
				<input type="password" placeholder="Password" name="password" required />
				<span class="fa fa-unlock"></span>
			</div>
			<button type="submit" name="submit" class="submit">
				<span class="fa fa-sign-in"></span>
			</button>
		</form>
	</div>
	<div class="col-sm-6">
	    <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		</ul>
	  </div>
	<div class="footer">
		<h2>
			&copy; CopyRight claim.
		</h2>
	</div>

</body>

</html>