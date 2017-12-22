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

$tsql = "SELECT *  FROM [INVENTORY].[dbo].[CACHAREL]";
$stmt = sqlsrv_query( $conn, $tsql, array(), array( "Scrollable" => SQLSRV_CURSOR_KEYSET ));
if( $stmt === false)
    {
        echo "Error in query preparation/execution.\n";
        die( print_r( sqlsrv_errors(), true));
    }
else
    {
        $recordcount = sqlsrv_num_rows( $stmt );//count the records
?><table class="table"><th>Nro Local</th><th>Marca</th><th>Nombre</th><th>Dispositivo</th><th>Marca / Modelo</th><th>Nro de Serie</th><th>Sistema Operativo</th><th>SQL</th><?php
        if($recordcount >0)
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC))
        { 
?><tr><td><?php
            echo $row['N° Local']; ?></td>
	    <td><?php echo $row['Marca'];?></td>
	    <td><?php echo $row['Nombre'];?></td>
	    <td><?php echo $row['Dispositivo'];?></td>
	    <td><?php echo $row['Marca / Modelo'];?></td>
	    <td><?php echo $row['N° de Serie'];?></td>
	    <td><?php echo $row['Sistema Operativo'];?></td>
	    <td><?php echo $row['SQL']; 
?></td></tr><?php
    	} 
    else {echo "not found";}
    } ?></table><?php





/* Close the connection. */  
sqlsrv_close( $conn);  
?>  