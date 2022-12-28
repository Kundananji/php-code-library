<?php

//declare and initialize an array holding mandatory fields
$mandatoryFields = ["firstName","lastName","email","password"];

//now loop though the post variable to collect values
foreach($_POST as $key=>$value){
    $$key = trim($value);
}

//validate collected values, checking for null for mandatory fields
foreach($mandatoryFields as $field){
    if(!isset($$field) || $$field == null){
        exit("$field is missing");
    }

}
