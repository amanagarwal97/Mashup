<?php

    require(__DIR__ . "/../includes/config.php");

    // numerically indexed array of places
    $places = [];

    // search database for places matching $_GET["geo"], store in $places
    if(is_numeric($_GET["geo"])) {
        $rows=CS50::query("SELECT * FROM places WHERE postal_code LIKE ?",$_GET["geo"]."%");
    }
    else if(is_string($_GET["geo"])) {
        $rows=CS50::query("SELECT * FROM places WHERE MATCH(postal_code,place_name,admin_name1) AGAINST (?)",$_GET["geo"]);
    }
    foreach($rows as $row) {
        $places[]=[
            "name" => $row["place_name"],
            "code" => $row["postal_code"],
            "state" => $row["admin_name1"],
            "latitude" => $row["latitude"],
            "longitude" => $row["longitude"]
        ];
    }
    
    

    // output places as JSON (pretty-printed for debugging convenience)
    header("Content-type: application/json");
    print(json_encode($places, JSON_PRETTY_PRINT));

?>