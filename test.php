<?php

$nb = 50;

if ($nb < 20) {
  //echo "tu es trop jeune";
} else {
  //echo "c'est bon, tu as l'âge requis";
}

$couleurs = ["rouge", "vert", "bleu"];
$couleurs2 = ["couleur1"=>"cyan", "couleur2"=>"magenta", "couleur3"=>"rose"];

foreach ($couleurs as $couleur) {
  echo '<p>' . $couleur . '</p>';
}

foreach ($couleurs2 as $key => $value) {
  echo '<p>' . $key . ' => ' . $value . '</p>';
}

echo $couleurs2["couleur2"];

print_r($couleurs2);

 ?>
