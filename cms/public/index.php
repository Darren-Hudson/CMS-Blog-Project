<!DOCTYPE HTML>
<html>
  <?php include("../lib/menu.php"); ?>
    <div class="center">
      <h1>Blogster - Generic Blogging Tings</h1>
      <div class="login-form">
        <div id="signup-form">
          <?php include("../lib/signup.php"); ?>
        </div>
        <div id="login-form">
          <?php include("../lib/login.php"); ?>
          <br>
          <button onclick="signupShow('poop')" type="button">Sign Up</button>
        </div>
      </div>
    </div>
    <script src="../lib/login.js"></script>
  </body>
  </script>
</html>
