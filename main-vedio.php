<?php

$link = '/home/sharjeel/Documents/twilio-helper/twilio-php-master/twiliohelper.php';
include ($link);


 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 

 

if (isset($_POST['joinagentchatroom'])) {
    session_start();

   

    //$obj = json_decode($_POST['joinagentroom']); 
  
    // Display the value of json object 
    

    //$clientname = "client"+$obj->{'joinagentroom'};

    //$clientname = "clinet"+ $_GET['joinagentroom'];


    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $clientname = "client". generate_string($permitted_chars,10);

    
    echo getavailchatroom($clientname);
}


if (isset($_POST['joinagentroom'])) {
    session_start();

   

    //$obj = json_decode($_POST['joinagentroom']); 
  
    // Display the value of json object 
    

    //$clientname = "client"+$obj->{'joinagentroom'};

    //$clientname = "clinet"+ $_GET['joinagentroom'];


    $permitted_chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $clientname = "client"+ generate_string($permitted_chars,10);

    
    echo getclientaccesstoken($clientname);
}



function getclientaccesstoken($username)
{
    

    $agentname = $_POST['data'];

    

    $_SESSION["twiliolink"] = new twiliohelper();
    //$username = "client";

    $clientname = "client" . $username;
    $tokenaccess=$_SESSION["twiliolink"]->joinvediocallroomaccesstoken($clientname,$agentname);


    return $tokenaccess;
}

function getavailchatroom($username)
{
    $_SESSION["twiliolink"] = new twiliohelper();
    //$username = "client";

   
    $agentname = $_POST['data'];

    $channelsid = $_SESSION["twiliolink"]->joinchatrooom($username,$agentname);




}
?>


