<?php
  //variable
  $name = 'Moussa';
  $age = 36;
  $famille = array("plume","Louis","Bérénice","Albane");
  $famille2 = ["plume","Louis","Bérénice","Albane"];
echo "Je m'appelle" .$name. " <br> et j'ai" . $age ." ans " ;

echo "Ma fille" .$famille[0];

echo  "<h3> Boucle For </h3>";
// init / condition  sortie / incrémentation

for ( $initFamille = 0 ; $initFamille <4;$initFamille++) {
    echo $famille2[$initFamille] . "<br>";

};

$totalTabFaimille=count($famille);
echo  "<h3>Boucle while </h3>";

    $initwhileFamille = 0;
    while ($initwhileFamille < $totalTabFaimille){
        echo $famille[$initwhileFamille] . "<br>";
        $initwhileFamille++;

}

echo "<h3> Boucle foreach </h3>";

    foreach ($famille as $personne) {
        echo $personne . "<br>";
    }

$listVoiture = [
    "tesla" => ["model" => "éléctrique", "eco" => true],
    "BMW" => ["model" => "thermique", "eco" =>false],
    "Fiat" => ["model" => "thermique", "eco" => false],
    "Opel" => ["model" => "Hybride", "eco" => true]
];

    foreach ($listVoiture as $keyMarque => $valConfig) {
        echo  " la marque " . $keyMarque . " est d'un model " . $valConfig [" model "] ."<br>";
        if ($valConfig["eco"]){
            echo " et écologique " ."<br>";
        }
    }





$tabEtudiant = [
    1 => ["prenom" => "Avi", "nom" => "Boukris", "age" => 25, "role" => ["Student"]],
    2 => ["prenom" => "Nathalie", "nom" => "Jim", "age" => 34, "role" => ["Prof", "Student"]],
    3 => ["prenom" => "Eden", "nom" => "Boukris", "age" => 22, "role" => ["Student"]],
    4 => ["prenom" => "Shirel", "nom" => "Boukris", "age" => 20, "role" => ["Student"]],
    5 => ["prenom" => "Anthony", "nom" => "Boukris", "age" => 30, "role" => ["Student"]],
    6 => ["prenom" => "Kevin", "nom" => "Boukris", "age" => 28, "role" => ["Student"]],
    7 => ["prenom" => "Barbara", "nom" => "Boukris", "age" => 26, "role" => ["Student"]],
    8 => ["prenom" => "Julie", "nom" => "Boukris", "age" => 24, "role" => ["Prof"]]
];

// Afficher la phrase suivante :
// Je m'appelle Avi Boukris, j'ai 25 ans et je suis Student
// Attention aux roles

foreach ($tabEtudiant as $numeroR => $ConfigEtu ){
    $flag=0;
    $longueur =count($ConfigEtu["role"]);

    echo  " Je m'appelle " .$ConfigEtu["prenom"]." ". $ConfigEtu["nom"] . " et j'ai " .$ConfigEtu["age"] ." ans ". " je suis ";
     foreach ($ConfigEtu["role"] as $role) {
        echo $role." ";

        if ($flag<$longueur-1){
            echo ", ";
            $flag++;
        }
        else{
            echo ",";
        }
        echo "<br>";

     }


}