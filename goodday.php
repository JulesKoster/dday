<?php
include 'nav.php';
include 'footer.php';
?>

<!doctype html>
<html lang="en">

<head>
    <title>D-DAY Museum Arromanches - Is it a good day to Visit?</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom/custom.css">
</head>
<body id="body-color">

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">D-Day Museum Arromanches</h1>
                <p class="lead">Musee du Debarquement</p>
                <hr class="my-2">
                <hr class="my-2">
                <p class="lead">
                    <a class="btn btn-secondary btn-inv" href="#current_weather"  role="button">Show me if it's a good day to visit!</a>
                </p>
            </div>
        </div>

    </div>
 
    <div class="row" style="margin-bottom:200px">
        <div class="col-xl-3"></div>
        <div class="col-xl-6 col-sm-3">
            <div class="container" id="current_weather">
                <div class="card-img-top">
                    <img class="img-fluid" src="img/arromanches_bay.jpg" alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">What is the current Weather in Arromanches </h5>
                <h6 class="card-subtitle mb-2 text-muted">Part of the community Saint-Côme-de-Fresné</h6>
                <p class="card-text">
                The climate of Normandy (France)
                Normandy is one of the rougher areas of France. The desert coast with its chalk-cliffs battered by the waves can produce beautiful images. Also the D-day beaches know a rough history. Normandy knows a large difference in ebb- and high tide. In some places, for instance at St. Michel, it can be as much as 16 meters. The weather in Normandy is very much comparable to that in Holland, the temperature is somewhat higher and it rains just a little less often there. The winters are sometimes boisterous there but mostly mild and agreeable. The summers are agreeable, also because of the constant seabreeze, but can certainly not be called too warm, an excellent destination for an active holiday.
                </p>
                    <?php
                
                    
                    $url = "http://api.openweathermap.org/data/2.5/weather?id=2981028&appid=6fdffba214c3c38f07ba3454f2b27f65&units=metric";  
                    $json = file_get_contents($url);
                    
                    $weatherObject = json_decode($json);  

                    
                    
                    // echo '<h1>' . $weatherObject -> name . '</h1>';
                    echo '<h2>' . 'Current Temperature is: ' . $weatherObject -> main -> temp   . ' &#8451' . '</h2>';
                    echo '<h2>' . 'Weather condition: ' . $weatherObject -> weather[0] -> description . '</h2>';
                ?>
                
                <a href="#" class="btn btn-secondary">Go back to Top</a>
            </div>
        </div>
            </div>
         
        
 
      


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
</body>

</html>
        