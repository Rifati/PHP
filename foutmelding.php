<?php
   echo 'Rifati Php website!';
$leeftijd = 0;
$reiskosten = 10;
$gratis = 0;

echo "<br> De reiskosten zijn:" . $reiskosten;
echo "€ zonder korting,";
echo "<br>";

for ($i = 0; $i < 9; $i++) {
if ($leeftijd <= 3) {

  echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $gratis;
 echo "&euro;";
} else if ($leeftijd  <= 12) {

  echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten/2;
 echo "&euro;";
 } else if ($leeftijd  > 65) {
 
  echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten/2;
  echo "&euro;";
 
} else {

  echo "<br>u bent: ". $leeftijd; echo"jaar. De reiskosten zijn " . $reiskosten;
  echo "&euro;";
}
$leeftijd += 5;
}