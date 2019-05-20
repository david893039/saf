<?php
    
    header("Content-Type:application/json");

    $response = '{
        "ResultCode":0,
        "ResultDescription":"Confirmation Success" 
    }';


    //data

    $mpesaResponse = file_get_contents('php:://input');

    //log the response

    $logFile = "M-PESAResponse.txt";

    $jsonResponse = json_decode($mpesaResponse,true);

    //write to file
    $log = fopen($logFile,'a');

    fwrite($log, $jsonResponse);
    fclose($log);

    echo $response;

    ?>