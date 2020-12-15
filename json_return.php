<?php
// wenn im browser aufgerufen wird eine json zurückgeliefert

include "seeder.php";
header("Content-Type: application/json");

$data = Seeder::getDemoData();

if (!isset($_GET["ost_id"]))
    echo json_encode([
        "success" => true,
        "data" => $data
    ]);

else {
    $parsed = urlencode($_GET["ost_id"]);
    if (is_numeric($parsed) && is_int(intval($parsed))) {
        $specific_ost = null;
        for ($i = 0; $i < sizeof($data); $i++)
            if ($data[$i]->uid == intval($parsed))
                $specific_ost = $data[$i];
        if ($specific_ost != null)
            echo json_encode([
                "success" => true,
                "data" => $specific_ost
            ]);
        else
            echo json_encode([
                "success" => false,
                "message" => "no ost with id '$parsed' was found"
            ]);
    } else
        echo json_encode([
            "success" => false,
            "message" => "specified ost id '$parsed' is not a valid id"
        ]);
}