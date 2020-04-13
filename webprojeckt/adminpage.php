
<html>
<link rel="stylesheet" type="text/css" href="profilelistcss.css" />
<head>


<button  onclick="location.href='login.php'" class="button1" type="submit" style="float: right;" >
        Logout </button>
		
 <button  onclick="location.href='search.php'" class="button1" type="submit" style="float: right;" >
         Search Profile </button>
		 
		 
<title> Displaying Profile Lists </title>


</head>


<body>
<center>
<form action="" method="POST" enctype="multipart/form-data">
<header> The Profile Lists </header>
<table>
<thead>
<tr>
<th> Image </th>
<th> informations </th>
</tr>


</thead>


<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'webproject');
$query = "select * from `registration`";
$query_run = mysqli_query($connection,$query);


while($row = mysqli_fetch_array($query_run))
{
  
?>
   
   <tr> 
   
   <td>
   
<?php
   echo '<img src="data:image;base64,'.base64_encode($row['image']).' " alt="image" style="width:300px; height:300px;" >';
   
 ?>
   
   
</td>
  
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
<td> <a href="editprofile.php?iden=<?php echo $row["id"]?>"> Show Profile </a></td>

</tr>
  <?php
}

?>

<?php
while( $row = mysql_fetch_array($query))
	?>


 </table> 
 </form>
 </html>