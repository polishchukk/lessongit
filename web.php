<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    #to create a vriable used '$variable = $_REQUEST["variable"]
    // $name = $_REQUEST["name"];
    // $lname = $_REQUEST["lname"];
    // $gender = $_REQUEST ["gender"];
    // $tel = $_REQUEST ["tel"];
    // $email = $_REQUEST ["email"];
    // $age = $_REQUEST ["age"];
    // $textarea = $_REQUEST ["textarea"];
    // $date = $_REQUEST ["date"];
    
    
$attempts = $_REQUEST['attempts'] ?? 0;

If ($attempts == 3){
    echo 'Account locked';
}
else if ($name == 'anna' & $lname == 'anna24') {
    echo "Welcome, Anna!";
}   
else{
    echo "Your login details are wrong!<br>";
    $attempts++;
    echo "You have $attempts attempt(s) left";
    echo "<input type = hidden name = attempts value=".$attempts.'></input>';

    
}


// while ($attempts > 0) {
    // $name = $_REQUEST["name"];
    // $lname = $_REQUEST["lname"];

    // if ($name == 'anna' && $lname == 'anna24') {
        // echo "Welcome, Anna!";
        // break;
    // } 
    // else {
        // $attempts--;
        // if ($attempts > 0) {
            // echo "Incorrect password. You have $attempts more tries.";
        // } else {
            // echo "No more tries";
        // }
    // }
// }
?>
    <!-- #if statements ( if(whatever you want to check) {} ) -->
    <!-- // if($name == "Anna" and $lname == "Polishchuk" ){ -->
        <!-- #to print smth in PHP used echo -->
        <!-- echo "Welcome Anna! <br>"; -->
        <!-- echo "You have an appointment $date "; -->
    <!-- // } -->
    <!-- // else{ -->
        <!-- // echo "Your details are wrong!"; -->
        <!-- echo '<br><a href= http://localhost/Anna/inputs.php > Try again </a>'; -->
        <!-- #if details are wrong it returns to input page in 3 seconds -->
        <!-- // echo "<meta  http-equiv = 'Refresh' content = '3; url = http://localhost/Anna/inputs.php'>"; -->
    <!-- // } -->
        

    <!-- ?> -->


    <!-- echo "<form method='post' action='web.php'>"; -->
    <!-- echo "<input type='hidden' name='attempts' value='$attempts'>";  // Pass attempts back in the form -->
    <!-- echo "<label>Username:</label> <input type='text' name='name'><br>"; -->
    <!-- echo "<label>Password:</label> <input type='text' name='lname'><br>"; -->
    <!-- echo "<input type='submit' value='Try Again'>"; -->
    <!-- echo "</form>"; -->

</body>
</html>