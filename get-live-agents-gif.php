<?php

$link = '/home/sharjeel/Documents/twilio-helper/twilio-php-master/twilio-database-helper.php';
include ($link);



$database = new twiliodatabasehelper();


$availableagents = $database->getliveagentscount();

$agentsdiv = "";

if($availableagents > 0)
{

    $list = $database->getliveagentsnames();



    
    for ($x = 0; $x <= 3 and $x <  count($list); $x++) {
        
        echo '<div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
        <div class="card" style="background-image: url(assets/img/'.$list[$x].'-preview.gif);">
          <div class="card-body">
            <h5 class="card-title"><a href="agent-help.html?name='.$list[$x].'">Agent '.$list[$x].'</a></h5>
            <p class="card-text">One of our best agent known for poviding right solution to its customers.</p>
            <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Select Agent</a></div>
          </div>
        </div>
      </div>';




    }

    echo $agentsdiv;
}
else
{



    echo " Sorry No agents are available right now";
}











?>
