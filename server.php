<?php
header("Access-Control-Allow-Origin:http://localhost:63342");
header("Access-Control-Allow-Credentials:true");

header("Context-Type:text/json");


$userName = array('userName'=>'123');
echo json_encode($userName);

