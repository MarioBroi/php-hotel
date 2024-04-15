<?php

//echo ("test");

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

//var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- bootstrap -->
    <title>Hotel list</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex">
                <?php

                foreach ($hotels as $hotel) {

                    echo ('<div class="card p-2 m-2">');

                    echo ("<h2>") . ($hotel["name"]) . ("</h2>") . ($hotel["description"]);
                    //hotel name and description

                    if ($hotel["parking"] == true) {
                        echo ('<div>') . ("Disponibilitá di parcheggio ✅") . ("</div>");
                    } else {
                        echo ('<div>') . ("Parcheggio non disponibile ❌") . ('</div>');
                    };
                    //available parking

                    echo ("<div>Voto complessivo: ") . ($hotel["vote"]) . ("</div>");
                    //vote

                    echo ("<div>Distanza dal centro: ") . ($hotel["distance_to_center"]) . (" Km</div>");
                    //distance

                    echo ('</div>');
                };

                ?>
            </div>
        </div>

    </div>
</body>

</html>