<html>
<link rel="stylesheet" type="text/css" href="profilepage.css" />
<head>
<title> Displaying Profile Lists </title>



</head>


<body>


<button  onclick="location.href='login.php'" class="button" type="submit" style="float: right;" >
         Logout</button>
		 <button onclick="location.href='homelogin.php'" type="button" style="float:right;">
        Home</button>


<center>
<form action="" method="POST" enctype="multipart/form-data">
<h1  >              Search for A Profile With Username </h1>
	 <h1> Search from database </h1>
	 
	 
	 <div class = "container">
	 <form action="" method="POST" >
             <input type ="text" name="username" placeholder = "Enter Username" />
			 <input type = "submit" name = "search" value="search">

       </form>

<header>Profile </header>
<table  width="400">
<thead>
<tr>

</tr>
</thead>










<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'webproject');
if(isset($_POST['search'])){
	
	$username = $_POST['username'];
	$query = "select * from `registration` where username='$username'";
	$query_run = mysqli_query($con,$query);
	
	
	while($row = mysqli_fetch_array($query_run))
	{
		?>
		<header> Profile of <?php echo $row['username']; ?>  </header> 
		<td>
		<?php
   echo '<img src="data:image;base64,'.base64_encode($row['image']).' " alt="image" style="width:400px; height:400px;" >';
   
 ?>
 
</tr>
<tr>  
<td> 
<?php
	
		echo "Username: ";
      echo $row['username']; 
	  echo "<br>\n";
	  echo "date of Birth: " ;
      echo $row['dob'];
	  echo "<br>\n";
      echo "Age: ";
      echo $row['age']; 
	  echo "<br>\n";
	  echo "Gender: ";
      echo $row['gender']; 
	  echo "<br>\n";
	  echo "Nationality: ";
      echo $row['nationality']; 
	  echo "<br>\n";
	  echo "Religion: ";
      echo $row['religion']; 
	  echo "<br>\n";
	  echo "Marital Status: ";
      echo $row['maritalstats']; 
	  echo "<br>\n";
	  	  echo "Email Address: ";
      echo $row['email']; 
	  echo "<br>\n";
	  	  echo "Phone Number: ";
      echo $row['phonenumber']; 
	  echo "<br>\n";
		
		
?>
	</tr>
<?php	
	}
}

?>
</table>

<button onclick="location.href='profilelist.php'" type="button">
         Back to list</button>




</html>	  