<?php 
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

// filtro per parcheggio in base a valore checkbox
$parkingFilter = isset($_GET['parking']) && $_GET['parking'] == 'on';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio hotel</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container-fluid">
    <!-- titolo -->
    <div class="row text-center"> 
        <h1>PHP Hotel</h1>
         
    </div>

    <div class="row justify-content-center">
        <!-- filtri -->
        <div class="col-8">

            <form action="index.php" method="GET">

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="on" name="parking" id="flexCheckDefault" >
                    <label class="form-check-label" for="flexCheckDefault">
                        Parcheggio
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Filtra</button>
            </form>

        </div>
        <!-- tabella -->
        <div class="col-8">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrizione</th>
                        <th scope="col">Parcheggio</th>
                        <th scope="col">Voto</th>
                        <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel): ?>
                        <!-- se checkbox non cliccata stampa tutto se cliccata stampa quelli con parcheggio = true -->
                        <?php if ($parkingFilter === false || $hotel['parking'] === true): ?>
                            <tr>
                                <td><?php echo $hotel['name'] ?></td>
                                <td><?php echo $hotel['description'] ?></td>
                                <!-- condizione parcheggio -->
                                <td>
                                    <?php if ($hotel['parking'] === true): ?>
                                        Si
                                    <?php else: ?>
                                        No
                                    <?php endif; ?>
                                </td>

                                <td><?php echo $hotel['vote'] ?></td>
                                <td><?php echo $hotel['distance_to_center'] ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                
                </tbody>
            </table>

        </div>
    </div>
</div>
    



<!-- script bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>