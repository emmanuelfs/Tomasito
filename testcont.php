<?php
// Create connection
$servername = "localhost";
$username = "test";
$password = "Facebook2017";
$hash = password_hash($password, PASSWORD_DEFAULT);
$dbname = "dbo.INVENTORY";
$conn = new PDO("sqlsrv:Server=localhost;Database=dbo.sINVENTORY", $username, $password);
//$conn = new mssql_connect($servername, $username, $password, $dbname);?>

<p> <?php echo $test; ?></p>

<?php
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{  
     echo "Connection established.\n";  
} 
?>