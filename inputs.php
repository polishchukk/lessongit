<?php
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- to create heading used h, to correct size can be 1,2,3 or just  to then stylise -->
<h2><mark>Login System</mark></h2>

<!-- to connect html to php -->
<form action = "web.php" method = get>

<!-- To get name -->
<label style = "font-size:17px"><b> Username:</b></label><input type = "text" name = "name" size="20" required></input>
<br>
<!-- To get surname -->
<label style = "font-size:17px"><b> Password:</b></label><input type="text" id="lname" size="20" name="lname" required></input>
<br>
<!-- To create a selection button -->
<!-- <label for="gender" style = "font-size:17px">Choose your gender:</label> -->
<!-- <select id="gender" name="gender"> -->
  <!-- <option value="male">Male</option> -->
  <!-- <option value="female">Female</option> -->
  <!-- <option value="nogender">Prefer Not to Say</option> -->
<!-- </select> -->
<!-- <br> -->
<!-- To get telephone -->
<!-- <label style = "font-size:17px"><b> Phone Number:</b></label><input type="tel" name="tel" size="20" required></input> -->
<!-- <br> -->
<!-- To get email-->
<!-- <label style = "font-size:17px"><b> Email:</b></label><input type="email" name="email" placeholder="your@email.com" size="30" required></input> -->
<!-- <br> -->
<!-- To get age-->
<!-- <label style = "font-size:17px"><b> Age:</b></label><input type="number" name="age" step="1" value="1" min="0" max="100" required> -->
<!-- <br> -->
<!-- To create textbox -->
<!-- <label style = "font-size:17px"><b> In a short words explain the reason for appointment:</b><br></label><textarea name="textarea" placeholder="Your message here" cols="60" rows="10" minlength="10" maxlength="500" required></textarea> -->
<!-- <br> -->
<!-- To get the date -->
<!-- <label style = "font-size:17px"><b> Choose the date when to come:</b></label><input type="date" name="date" value="2024-09-06"> -->
<!-- To submit -->
<input type = "submit" name = "submit" style = "font-size:15px" ></input>
</form>


</body>
</html>