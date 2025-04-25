<?php 
session_start(); 
$conn = new mysqli("localhost", "root", "", "employee_db"); 
 
if (!isset($_SESSION["user_id"])) { 
    die("Please log in first."); 
} 
 
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["employee_id"])) { 
    $employeeId = $_POST["employee_id"]; 
    $conn->query("DELETE FROM employees WHERE id = $employeeId"); 
    echo $conn->affected_rows > 0 ? "Employee deleted." : "Error dele ng employee."; 
} 
 
$result = $conn->query("SELECT id, name FROM employees"); 
?> 
 
<form method="POST"> 
    <select name="employee_id" required> 
        <op on value="">Select Employee</op on> 
        <?php while ($employee = $result->fetch_assoc()) { ?> 
            <op on value="<?php echo $employee['id']; ?>"><?php echo $employee['name']; ?></op on> 
        <?php } ?> 
    </select><br><br> 
    <bu on type="submit">Delete Employee</bu on> 
</form>
