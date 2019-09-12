<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Personal Information</title>
  <link href="admlogin.css" rel='stylesheet' type='text/css'>
</head>
<body>
  <center><h1>Administrator Login</h1></center>
  <section>
    <div class="card">
      <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
          <button type="button" class="cancelbtn" onclick="window.location.href='login.php';" target="_blank">Cancel</button>
          <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </div>
  </section>
 </body>
</html>
