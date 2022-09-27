<?php
include'./header.php';

echo "Hello fellowship". "<br>";

$wearRing = "Frodon Sacquet: Celui qui porte l'anneau";
echo $wearRing ."<br>";

$inventorRing = "Maia Sauron";
echo $inventorRing. "le Seigneur des Ténèbres: créateur de l'anneau"."<br>";

$fellowshipRing = 9;

// echo $fellowshipRing." membres compose la compagnie";

$fingerRing = false;
echo var_export($fingerRing). "<br>";

$wearRing = "Bilbon Sacquet";
echo "<strong>$wearRing</strong>: " ."Celui qui porte maintenant l'anneau"."<br>";

$fellowshipRing++;

echo $fellowshipRing.'<br>';


//echo $middleEath.'<br>';

$middleEath = "";

echo $middleEath.'<br>';

echo 'Le porteur est '.$wearRing.'<br>';

$NewVariable = "L'anneau est porté par $wearRing";
echo $NewVariable." et $inventorRing ,le recherche"."<br>";

echo strtoupper($inventorRing)."<br>";

$inventorRing = strtoupper($inventorRing);

echo $inventorRing."<br>";

$wizard = 'Gandalf';

include "./footer.php";

require "wizard.php";