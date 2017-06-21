<?php
header('Content-Type: application/json');                                                                                                                                                                      
$serverdate=date('Y-m-d-H-i-s');                                                                                                                                                               
$host=gethostname();
$input = array("Things are only impossible until they're not!", 
  "The Prime Directive is not just a set of rules; it is a philosophy", 
  "It is possible to commit no mistakes and still lose. That is not a weakness; that is life.", 
  "Being first at any cost is not always the point.", 
  "There are times, sir, when men of good conscience cannot blindly follow orders",
  "There can be no justice so long as laws are absolute. Even life itself is an exercise in exceptions.");
$rand_keys = array_rand($input, 2);
$message=$input[$rand_keys[0]];
$version="2.0";
echo("{\"version\":\"$version\",\"message\":\"$message\",\"host\":\"$host\",\"server-timestamp\":\"$serverdate\"}");                                                                                                                          
?>  

