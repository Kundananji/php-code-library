<?php

 //set default timezone
 date_default_timezone_set("Africa/Lusaka");

 //error reporting settings
 $driver = new mysqli_driver();
 $driver->report_mode = MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ERROR;

 try{
    $db_host="localhost";
    $db_user="mydbuser";
    $db_password ="b*WK/[01l3Dor";
    $db_name ="mydatabase";

    $mysqli = new mysqli($db_host,$db_user,$db_password,$db_name);

    if($mysqli->connec_error){
        exit("Failed to connect to database");
    }

    $mysqli->set_charset("utf8");
    //database connection is now avaiable for running queries

 }
 catch(Exception $ex){
    //log database error
    $logFile ="logs/errors/database_".date("d_M_Y_H").".txt";
    $logHandle = fopen($logFile,"a");
    if($logHandle){
        fwrite($logHandle,date("d-M-Y H:i:s")." :Connection error: ".($ex->getMessage())." > ".($ex->getTraceAsString()));

        fclose($logHandle);
    }

    exit("Failed to connect to database");

 }

