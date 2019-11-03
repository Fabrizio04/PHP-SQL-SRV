<?php

$serverName = "";
$sql_dbnm = "";
$sql_user = "";
$sql_pswd = "";

$connectionOptions = array(
    "database" => "$sql_dbnm ",
    "uid" => "$sql_user",
    "pwd" => "$sql_pswd"
);

// Establishes the connection
$conn_sql = sqlsrv_connect($serverName, $connectionOptions);
$tsql = "";
$stmt = sqlsrv_query($conn_sql, $tsql);

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
	
}