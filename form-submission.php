<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$fname = $lname = $gender =  $birthday = $religion = $w3review = $w3review = $phone = $email = $uname = $psw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
//String Validation
  if (empty($_POST["fname"]))
  {
    $fname = " First name is required";
    $flag = True;
  }
  
  if (empty($_POST["lname"]))
  {
    $lname = " Last name is required";
    $flag = True;
  }

  if (empty($_POST["gender"]))
  {
    $gender = " Gender is required";
    $flag = True;
  }

 if (empty($_POST["birthday"]))
  {
    $birthday = " Birthday is required";
    $flag = True;
  }

 if (empty($_POST["religion"]))
  {
    $religion = " Religion is required";
    $flag = True;
  }

  if (empty($_POST["w3review"]))
  {
    $w3review = " w3review is required";
    $flag = True;
  }

  if (empty($_POST["w3review"]))
  {
    $w3review = " w3review is required";
    $flag = True;
  }
 
  if (empty($_POST["phone"]))
  {
    $phone = " Phone number is required";
    $flag = True;
  }

  if (empty($_POST["email"]))
  {
    $email = " Email is required";
    $flag = True;
  }

  if (empty($_POST["uname"]))
  {
    $uname = " User name is required";
    $flag = True;
  }

  if (empty($_POST["psw"]))
  {
    $psw = " Password is required";
    $flag = True;
  }


  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $gender = test_input($_POST["gender"]);
  $birthday = test_input($_POST["birthday"]);
  $religion = test_input($_POST["religion"]);
  $w3review = test_input($_POST["w3review"]);
  $w3review = test_input($_POST["w3review"]);
  $phone = test_input($_POST["phone"]);
  $email = test_input($_POST["email"]);
  $uname = test_input($_POST["uname"]);
  $psw = test_input($_POST["psw"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Registration Forms</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>
	<legend>Basic Information</legend>
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="Sazid"><br>
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="Al Farabi"><br><br>
   <p>Gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label> <br>
  <label for="birthday">Date of Birth:</label>
  <input type="date" id="birthday" name="birthday">
  <input type="submit"> <br>
   <label for="religion">Religion:</label>
  <select name="religion" id="religions">
    <option value="muslim">Muslim</option>
    <option value="hindu">Hindu</option>
    <option value="christian">Christian</option>
    <option value="buddhist">Buddhist</option>
  </select>
  </fieldset> <br>
  <fieldset>
	<legend>Contact Information</legend>
	<label for="w3review">Present Address:</label>
<textarea id="w3review" name="w3review" rows="4" cols="50">
  </textarea>
  <br><br>
  <label for="w3review">Permanent Address:</label>
<textarea id="w3review" name="w3review" rows="4" cols="50">
  </textarea>
  <br><br>
<label for="phone">Phone:</label>
  <input type="tel" id="phone" name="phone" placeholder="" required><br><br>

   <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <a href="https://www.facebook.com/profile.php?id=100008538936344">This is my fb profile</a>

</fieldset>
<fieldset>
  <legend>Account Information</legend>

  <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

</fieldset>

<input type="submit" value="Submit">
  
</form> 


<?php
echo "<h2> Printing registration form :</h2>";
echo $fname;
echo "<br>";
echo $lname;
echo "<br>";
echo $gender;
echo "<br>";
echo $birthday;
echo "<br>";
echo $religion;
echo "<br>";
echo $w3review;
echo "<br>";
echo $w3review;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $uname;
echo "<br>";
echo $psw;
?>

</body>
</html>