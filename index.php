<?php

 $reVgames = array("Resident Evil" => 1996,
 "Resident Evil 2" => 1998,
 "Resident Evil 3: Nemesis" => 1999,
 "Resident Evil Code: Veronica X" => 2001,
 "Resident Evil Zero" => 2002,
 "Resident Evil: Remake"=> 2002,
 "Resident Evil 4" => 2005,
 "Resident Evil 5" => 2009,
 "Resident Evil: Revelations" => 2012,
 "Resident Evil 6" => 2012,
 "Resident Evil: HD Remaster" => 2015,
 "Resident Evil: Revelations 2" => 2015,
 "Resident Evil Zero HD Remaster" => 2016,
 "Resident Evil 7: Biohazard" => 2017,
 "Resident Evil 2 Remake" => 2019);

 //print_r($reVgames);

//echo $reVgames["Resident Evil"];

echo("<h2>Resident Evil Games</h2><br>");

echo("<ul>");

  foreach ($reVgames as $game => $releaseYear) {
      echo "<li> <b> $game </b> : <i>$releaseYear</i><br> </li>";
  }
  

  echo("</ul>");

  

?>
