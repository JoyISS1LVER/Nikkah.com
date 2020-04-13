<html>
<link rel="stylesheet" type="text/css" href="profilepage.css" />
<head>
<title> Displaying Profile Lists </title>
<button  onclick="location.href='login.php'" class="button" type="submit" style="float: right;" >
         Logout</button>


</head>


<body>


<button  onclick="location.href='login.php'" class="button" type="submit" style="float: right;" >
         Logout</button>
		 

<center>
<form action="" method="POST" enctype="multipart/form-data">

<header>Profile </header>
<table  width="400">
<thead>
<tr>

</tr>
</thead>
	
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'webproject');
$query = "select * from `registration`";
$query_run = mysqli_query($connection,$query);

if(isset($_REQUEST["iden"]))
{
	$iden=$_REQUEST["iden"];
	$query= "select * from `registration` where id = '$iden' ";
	$query_run = mysqli_query($connection,$query);


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
<?php echo "Username: ";
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
 </form>
 </html>

