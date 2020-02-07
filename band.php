<?php 

$ary = array("Citizen of Glass" => 4.5, "Night" => 9, "New Eyes" => 5, "Strange Tails" => 10);

echo "Het albumoverzicht: " . "\n";

$pr = 0;

foreach($ary as $alb => $bg){
    echo $alb . " kost €" . $bg . "\n";
    $pr = $bg + $pr;
}

echo "Het totaalbedrag van alle albums is €" . $pr . "\n";
echo "De gemiddelde prijs van alle albums is €" . ($pr / count($ary)) . "\n";
