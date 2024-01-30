<?php
  //variable
  $name = 'Moussa';
  $age = 36;
  $famille = array("plume","Louis","Bérénice","Albane");
  $famille2 = ["plume","Louis","Bérénice","Albane"];
echo "Je m'appelle" .$name. "<br> et j'ai" .age."ans" ;

echo "Ma fille" .$famille[0];

echo  "<h3> Boucle For </h3>";
// init / condition  sortie / incrémentation

for ( $initFamille = 0 ; $initFamille <4;$initFamille++) {
    echo $famille2[$initFamille]. "<br>";
};