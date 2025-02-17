<?php
require_once("FishingRodrestKezelo.php");

//Példányosítás...
$fishingRodRestKezelo = new FishingRodrestKezelo();

//teszt
//Összes horgászbot lekérdezésének tesztje
//son-ben van, ki szeretném íratni
echo json_encode([
    "message" => "Összes horgászbotra vonatkozó teszt: \n",
    "data" =>$fishingRodRestKezelo->getAllFRod()
]);
echo "<br>";
?>