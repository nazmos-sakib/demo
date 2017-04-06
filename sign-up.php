<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
  //some random comment
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["First_Name"]);
  $name = test_input($_POST["Last_Name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["password"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    <label for="firstname">First Name:</label>
<input id="firstname" type="text" name="First_Name">
  <br><br>
  <label for="lastname">Last Name:</label>
<input id="lastname" type="text" name="Last_Name">
  <br><br>
      <label for="email">E-mail:</label>
<input id="email" type="text" name="email">
  <br><br>
      <label for="website">Website:</label>
<input id="website" type="text" name="website">
  <br><br>
  Gender:
  <input id="Female" type="radio" name="gender" value="female">
    <label for="Female">Female</label>
  <input id="Male" type="radio" name="gender" value="male">
    <label for="Male">Male</label>
  <br><br>
  <label for="password">Password:</label>
<input id="password" type="password" name="password">
  <br><br>
  <label for="conpass">Comfirm Password:</label>
<input id="conpass" type="password" name="conpass">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>
