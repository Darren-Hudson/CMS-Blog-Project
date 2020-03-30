<?php
// define variables and set to empty values
$usernameErr = $passwordErr = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if(empty($_POST["username"])){
    $usernameErr = "Must enter a username!";
  }
  else{
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])){
    $passwordErr = "Must enter a password!";
  }
  else{
    $password = test_input($_POST["password"]);
  }

  $password = test_input($_POST["password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
  <h1>Login</h1>
  <label for="uname">Username:</label><br>
  <input type="text" id="username" name="username">
  <span class="error">* <br> <?php echo $usernameErr;?></span><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password">
  <span class="error">* <br> <?php echo $passwordErr;?></span><br>
  <input type="submit" value="Login">
</form>

<?php echo $_POST["username"]; ?>
