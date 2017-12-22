<?php  
$serverName = "localhost";  
$connectionInfo = array("UID" => "test", "PWD" => "Facebook2017", "Database"=>"INVENTORY");  
$conn = sqlsrv_connect( $serverName, $connectionInfo);  

if( $conn )  
{  
     echo "Connection established.\n";  
}  
else  
{  
     echo "Connection could not be established.\n";  
     die( print_r( sqlsrv_errors(), true));  
}  

//-----------------------------------------------  
// Perform operations with connection.  
//-----------------------------------------------  

/* Close the connection. */  
sqlsrv_close( $conn);  
?>  