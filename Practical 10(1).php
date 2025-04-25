
CREATE TABLE employees ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL, 
    email VARCHAR(100) NOT NULL UNIQUE, 
    password VARCHAR(255) NOT NULL 
); 

<?php 
$conn = new mysqli("localhost", "root", "", "employee_db"); 
if ($conn->connect_error) { 
    die("Connec on failed: " . $conn->connect_error); 
} 
if ($_SERVER["REQUEST_METHOD"] === "POST") { 
    $name = $conn->real_escape_string($_POST["name"]); 
    $email = $conn->real_escape_string($_POST["email"]); 
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 
    $sql = "INSERT INTO employees (name, email, password) VALUES ('$name', '$email', '$password')"; 
    if ($conn->query($sql)) { 
        header("Loca on: login.php"); 
        exit; 
    } else { 
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>"; 
    } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
    < tle>Register Employee</ tle> 
</head> 
<body> 
    <h2>Employee Registra on</h2> 
    <form method="POST" ac on=""> 
        <label>Name:</label><br> 
        <input type="text" name="name" required><br><br> 
        <label>Email:</label><br> 
        <input type="email" name="email" required><br><br> 
        <label>Password:</label><br> 
        <input type="password" name="password" required><br><br> 
        <bu on type="submit">Register</bu on> 
    </form> 
</body> 
</html> 
