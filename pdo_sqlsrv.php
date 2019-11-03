<?php
$sql_host = "";
$sql_dbnm = "";
$sql_user = "";
$sql_pswd = "";

try {
	$conn = new PDO("sqlsrv:Server=$sql_host,1433;Database=$sql_dbnm", "$sql_user", "$sql_pswd");		
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}

catch(Exception $e){
	die( print_r( $e->getMessage() ) );
}

$tsql = "";
$getResults = $conn->prepare($tsql);
$getResults->execute();

$results = $getResults->fetchAll(PDO::FETCH_BOTH);

foreach($results as $row){
	
}