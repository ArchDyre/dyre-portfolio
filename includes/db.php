<?php
// DB Connection
$db = ["db_Host"=>"localhost", "db_Username" => "root", "db_Password" => "", "db_Name" => "archon"];

foreach ($db as $key => $value){
    
    define (strtoupper($key),$value);
    
}


$link = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($link === false){
    
    mysqli_error("DB connection error");
    
    
}


?>