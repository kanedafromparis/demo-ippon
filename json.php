<?php
header('Content-Type: application/json');                                                                                                                                                                      
$serverdate=date('Y-m-d-H-i-s');                                                                                                                                                               
$host=gethostname();
$message="On my way";
$version="1.0";
echo("{\"version\":\"$version\",\"message\":\"$message\",\"host\":\"$host\",\"server-timestamp\":\"$serverdate\"}");                                                                                                                          
?>  

