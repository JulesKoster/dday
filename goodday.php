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

        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">D-Day Museum Arromanches</h1>
                <p class="lead">Musee du Debarquement</p>
                <hr class="my-2">
                <p>The climate of Normandy (France)
Normandy is one of the rougher areas of France. The desert coast with its chalk-cliffs battered by the waves can produce beautiful images. Also the D-day beaches know a rough history. Normandy knows a large difference in ebb- and high tide. In some places, for instance at St. Michel, it can be as much as 16 meters. The weather in Normandy is very much comparable to that in Holland, the temperature is somewhat higher and it rains just a little less often there. The winters are sometimes boisterous there but mostly mild and agreeable. The summers are agreeable, also because of the constant seabreeze, but can certainly not be called too warm, an excellent destination for an active holiday.
                </p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="#current_weather"  role="button">Show me if it's a good day to visit!</a>
                </p>
            </div>
        </div>

    </div>

<div class="container" id="current_weather">
    <div class="card" style="width: 50rem;">
  <img class="card-img-top" src="img/arromanches_bay.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">What is the current Weather in Arromanches </h5>
    <h6 class="card-subtitle mb-2 text-muted">Part of the community Saint-Côme-de-Fresné</h6>
    <p class="card-text">
    
    <?php
  
    
    $url = "http://api.openweathermap.org/data/2.5/weather?id=2981028&appid=6fdffba214c3c38f07ba3454f2b27f65&units=metric";  
    $json = file_get_contents($url);
    
    $weatherObject = json_decode($json);  

    
    
    echo '<h1>' . $weatherObject -> name . '</h1>';
    echo '<h2>' . $weatherObject -> main -> temp . ' &#8451' . '</h2>';
    echo '<h3>' . 'Weather condition: ' . $weatherObject -> weather[0] -> description . '</h3>';
   
?>
        
    
    
    Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <div class="caption">
                <h4>About The Museum</h4>
                
                </div>
                <section class="about">
                <> On the initiative of Raymond TRIBOULET, France's first sub-prefect after the Liberation » the permanent exhibition on the Normandy Landings was officially opened on June 5th 1954 in Arromanches by Monsieur René COTY, the then President of the French Republic.
                It was the first museum to be built in commemoration of June 6th 1944 and the Normandy Campaign.
                The D-day Museum overlooks the very spot where one of the Mulberry Harbours was constructed and where its remains can still be seen today, just a few hundred metres from the shore.</p>
                </section>
                </div>
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <p> The museum is located in a place redolent with history, overlooking the beach and the remains of the Mulberry Harbour, at the heart of a vibrant, busy square lined with shops and cafés.
                Address:    Place du 6 Juin <br>
14117 Arromanches <br>
Phone number : +33 (0)2 31 22 34 31 <br>
Fax number : +33 (0)2 31 92 68 83 <br>

Museum shop tel. : +33 (0)2 31 51 68 11 <br>


E-Mail : info@arromanches-museum.fr <br>
                </p>
            </div>
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae assumenda laborum odit est
                    dolorum mollitia fuga voluptates, molestias reprehenderit eveniet sit nihil cupiditate eum quae
                    esse quod pariatur suscipit, sint dignissimos nesciunt tempore. Totam rem dolores atque ullam
                    architecto iusto deserunt, at maxime voluptatum, cupiditate similique, fugit aliquid ducimus quos.</p>
            </div>
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae assumenda laborum odit est
                    dolorum mollitia fuga voluptates, molestias reprehenderit eveniet sit nihil cupiditate eum quae
                    esse quod pariatur suscipit, sint dignissimos nesciunt tempore. Totam rem dolores atque ullam
                    architecto iusto deserunt, at maxime voluptatum, cupiditate similique, fugit aliquid ducimus quos.</p>
            </div>
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae assumenda laborum odit est
                    dolorum mollitia fuga voluptates, molestias reprehenderit eveniet sit nihil cupiditate eum quae
                    esse quod pariatur suscipit, sint dignissimos nesciunt tempore. Totam rem dolores atque ullam
                    architecto iusto deserunt, at maxime voluptatum, cupiditate similique, fugit aliquid ducimus quos.</p>
            </div>
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/normandy_supply.jpg" alt="Generic placeholder image">
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae assumenda laborum odit est
                    dolorum mollitia fuga voluptates, molestias reprehenderit eveniet sit nihil cupiditate eum quae
                    esse quod pariatur suscipit, sint dignissimos nesciunt tempore. Totam rem dolores atque ullam
                    architecto iusto deserunt, at maxime voluptatum, cupiditate similique, fugit aliquid ducimus quos.</p>
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
        