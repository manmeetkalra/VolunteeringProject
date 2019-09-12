<?php

?>

<!Doctype html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
</head>
<body>
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
    <h4>Sign in to XYZ</h4>
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
    <span class="admlogin"><a href="admlogin.php" target="_blank">Click here for Administrator Login</a></span>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
