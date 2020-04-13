<?php
include 'connection.php';
?>

<!DOCTYPE html>


<link rel="stylesheet" type="text/css" href="regpagecss.css" />
<h1 id="title">Registration Page</h1>
  <p id="description">Please complete the following form </p>
  
    <form id="registration-form" form action="registration.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
      <label id="name-label" for="name">Name:</label>
      <input id="name" type="text" required placeholder="Enter your first name" name = "username">

      </div>      
      
 
      
      <div class="form-group">
      <label for="dob">Date of Birth</label>
    <input type="date" id="dob" name="dob" placeholder="Date of Birth">
      </div>
     
      <div class="form-group">
      <label id="number-label" for="number">Age:</label>
      <input id="number" type="number" name = "age" required placeholder="Age">
      
      </div>
      
            <div class="form-group">      
      <label id="gender-label" for="dropdown">Gender:</label>
      <select id="gender" name="gender">
        <option value="" disabled selected>Select an option</option>
        <option value="male">Male</option>
        <option value="female">Female</option>

      </select>
      </div>
     
     
      <div class="form-group">
      <label id="nationality-label" for="nation">Nationality:</label>
      <input id="nationality" type="text" name="nationality" required placeholder="Nationality">

      </div> 
      

      
      <div class="form-group">      
      <label id="religion-label" for="dropdown">Religion:</label>
      <select id="religion" name="religion">
        <option value="" disabled selected>Select an option</option>
        <option value="muslim">Muslim</option>
        <option value="hindu">Hindu</option>
        <option value="christian">Christian</option>
        <option value="buddho">Buddho</option>
      </select>
      </div>
     
      <div class="form-group">      
      <label id="marital-label" for="dropdown">Marital Status:</label>
      <select id="marital status" name="maritalstats">
        <option value="" disabled selected>Select an option</option>
        <option value="unmarried">Unmarried</option>
        <option value="divorced">Divorced</option>
        <option value="widow">Widow</option>
        <option value="separated">Separated</option>
      </select>
      </div>
      
      
      
      
     
      <div class="form-group">
      <label id="textarea-label" for="comments">Tell us something about yourself:</label>
      <textarea id="comments" name="about" placeholder="Enter your comments here ..."  cols="10" rows="5"></textarea>
      </div>
      
           <div class="form-group">
      <label id="email-label" for="email">Email:</label>
      <input id="email" type="email" name="email"  required placeholder="Enter your answer">
      
      </div>
      
      
        <div class="form-group">
      <label id="phn-label" for="number">Phone Number:</label>
      <input id="phnnumber" type="number" required placeholder="Enter Phone number" name="phonenumber">
      </div>
      
        <div class="form-group">
<label for="pwd">Password:</label>
<input type="password" id="pwd" name="password">
      </div>
	  
	  <div class="form-group">
<label for="imgae">Image:</label>
<input type="file" id="image" name="image"  value = "Upload image">
      </div>

      
      
      <div class="form-group">
      <input id="submit" class="button" type="submit" value="Register Now " name ="submit">
      </div>

    </form>
	</html>
	
<?php
$query_run = "";
$query="";


if(isset($_POST['submit'])){
	



$username = $_POST['username'];
$dob = $_POST['dob'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$religion = $_POST['religion'];
$maritalstats = $_POST['maritalstats'];
$about = $_POST['about'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$file = addslashes(file_get_contents($_FILES['image']['tmp_name']));

$query = "INSERT INTO `registration` (`username`, `dob`, `age`, `gender`, `nationality`, `religion`, `maritalstats`, `about`, `email`, `phonenumber`, `password`, `image`) VALUES ('$username','$dob','$age','$gender','$nationality','$religion','$maritalstats','$about','$email','$phonenumber','$password','$file')";
$query_run = mysqli_query($con,$query);
}



if($query_run){
    echo "Records inserted successfully.";
	header('Location: login.php');
	
	
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($con);
}


?>