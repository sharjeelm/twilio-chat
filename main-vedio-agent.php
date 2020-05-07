<?php
$link = '/home/sharjeel/Documents/twilio-helper/twilio-php-master/twiliohelper.php';
include ($link);

 
if (isset($_POST['createagentroom'])) {
    session_start();
    echo setupenvironment($_POST['createagentroom']);
}
if (isset($_POST['joinagentroom'])) {
    echo getclientaccesstoken($_POST['joinagentroom']);
}

if (isset($_POST['pausevedioandchatroom'])) {
    echo pausevedioandchatroom($_POST['agentname']);
}

if (isset($_POST['createnewagent'])) {
    echo createnewagent();
}

if(isset($_POST['createagentchatroom']))
{

    echo createchatroom("Aliza");

}

function createnewagent()
{
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username =$_POST['username'];
    $password = $_POST['password'];


    $allsum  = $firstname.$lastname.$username.$password;


    $twiliohelper = new twiliohelper();

    $result =  $twiliohelper->createnewagent($firstname,$lastname,$username,$password);

    return $result;




}

function createchatroom($userna)
{

    //$username = "Aliza";

    

    $username = $_POST['agentusername'];
    $newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $username);

    $newstr = str_replace(' ', '', $newstr);

    $_SESSION["twiliolink"] = new twiliohelper();

    $tokenaccess=  $_SESSION["twiliolink"]->setupchatroom($newstr);

    




}

function pausevedioandchatroom($agentname)
{

    $newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $agentname);

    $newstr = str_replace(' ', '', $newstr);



    //echo "username to pause services is".$newstr.":so chedck it";

    $_SESSION["twiliolink"] = new twiliohelper();
    $_SESSION["twiliolink"]->pausevideoandchatroom($newstr);

}

function cleanstring($strings)
{


}


function setupenvironment()
{
    


    $username = $_POST['agentusername'];
    $newstr = preg_replace("/[^A-Za-z0-9 ]/", '', $username);

    $newstr = str_replace(' ', '', $newstr);


    $_SESSION["twiliolink"] = new twiliohelper();

    $tokenaccess=  $_SESSION["twiliolink"]->setupvediocall($newstr);

    //$twiliolink->sendmessage tosim("+923054491767","hello lul from twilio server side implementataion:");

    //echo "token access code :\n";

    return $tokenaccess;

}

function getclientaccesstoken($username)
{
    //$twiliolink =new twiliohelper();

    //$username = "client";

    $_SESSION["twiliolink"] = new twiliohelper();

    $twiliolink=$_SESSION["twiliolink"];


    $tokenaccess=$twiliolink->joinvediocallroomaccesstoken($username);


    return $tokenaccess;
}

?>


