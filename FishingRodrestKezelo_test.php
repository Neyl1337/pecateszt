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
//echo "<br>";


// horgászbot by id lekérdezésének tesztje
//json-ben van, ki szeretném íratni
echo json_encode([
    "message" => "Horgászbot Id alapján: \n",
    "data" =>$fishingRodRestKezelo->getFRodById(1)
]);
//echo "<br>";

// horgászbot by NONEXISTED id lekérdezésének tesztje
//json-ben van, ki szeretném íratni
echo json_encode([
    "message" => "Horgászbot NEMLÉTEZŐ Id alapján: \n",
    "data" =>$fishingRodRestKezelo->getFRodById(9999)
]);
//echo "<br>";

?>