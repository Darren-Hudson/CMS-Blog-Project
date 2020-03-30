<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
  <button onclick="signupClose()" class="back-button" type="button" name="back">X</button>
  <h1>Sign Up</h1>
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fistname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lastname"><br>
  <label for="username">Username:</label><br>
  <input type="text" id="fname" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="text" id="lname" name="password"><br>
  <label for="password">Confirm Password:</label><br>
  <input type="text" id="lname" name="password2"><br>
  <input type="submit" value="Sign Up"></button>
</form>
