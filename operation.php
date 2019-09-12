<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Operations</title>
  <link href="perinfo.css" rel='stylesheet' type='text/css'>
</head>
<body>
  <section>
  <div class="container">
    <h1>XYZ Volunteership</h1>
    <h2>Create a new account</h2>
    <hr>

    <label for="firstname"><b>Volunteering for: </b></label>
    <button class="dropbtn">Dropdown</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>

    <label for="lstname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lastname" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label for="gender"><b>Gender</b></label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type="radio" name="gender" value="other"> Other<br><br>

    <label for="phn-num"><b>Mobile Number</b></label>
    <input type="number" placeholder="Mobile Number" name="phn-num" required><br><br>

    <label for="bday"><b>Birthday</b></label>
    <input type="date" placeholder="Bithday" name="bday" required><br><br>


    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
  </section>
  </body>
  </html>
