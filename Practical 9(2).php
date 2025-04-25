<?php 
// Set cookie when the bu on is pressed 
if (isset($_POST['set_cookie'])) { 
setcookie('username', 'JohnDoe', me() + 3600, '/'); 
$message = "Cookie set! Welcome, JohnDoe!"; 
} else { 
$message = isset($_COOKIE['username']) ? "Hello, " . $_COOKIE['username'] : "Click to set a cookie!"; 
} 
?> 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, ini al-scale=1.0"> 
< tle>Cookie Demo</ tle> 
</head> 
<body> 
<h2>PHP Cookie Example</h2> 
    <p><?php echo $message; ?></p> 
 
    <!-- Bu on to set the cookie --> 
    <form method="POST"> 
        <bu on type="submit" name="set_cookie">Set Cookie</bu on> 
    </form> 
</body> 
</html> 
