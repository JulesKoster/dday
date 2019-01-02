<?php
include 'footer.php';
include 'nav.php';
?>


<!doctype html>
<html lang="en">

<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom/custom.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
</head>

<body id="body-color">



<div class="jumbotron jumbotron-fluid">
    <div class="container">                
        <h1 class="display-4">D-Day Museum Arromanches</h1>
        <p class="lead">Musee du Debarquement</p>
        <hr class="my-2">
        <p>More infornation about the museum can be found below. If you require more information please contact us</p>
         </p>
    </div>
</div>
<div class="row justify-content-center">
<button type="button" class="btn btn-dark btn-lg" data-toggle="modal" data-target="#myModal" data-name="name">
  Email Us
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Send us an email</h4>
      </div>
      <div class="modal-body">
      <form
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger">Send E-mail</button>
      </div>
    </div>
  </div>
</div>
 
<div class="container-fluid" id="fluid-color">

<div class="row justify content-between"style="margin-bottom:200px">
            <div class="col-xl-4 col-sm-6">
                <!-- <span class="border"> </span> -->
                <img class="img-fluid" src="img/entry_museum.jpg" alt="Generic placeholder image">
                <div class="caption">
                <h4>About The Museum</h4>
                </div> 
            </div>
            <div class="col-xl-7 col-sm-6" id="border">
                On the initiative of Raymond TRIBOULET, I (France's first sub-prefect after the Liberation), the permanent exhibition on the Normandy Landings was officially opened on June 5th 1954 in Arromanches by Monsieur René COTY, the then President of the French Republic.
                It was the first museum to be built in commemoration of June 6th 1944 and the Normandy Campaign.
                The D-day Museum overlooks the very spot where one of the Mulberry Harbours was constructed and where its remains can still be seen today, just a few hundred metres from the shore.</p>
            </div>
</div>
 
</footer> 

<!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        <script type="text/javascript">
      
          $('#myModal').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget) 
              var recipient = button.data('name') 
              var modal = $(this)
              modal.find('.modal-title').text('New message to ' + 'info@arromanches-museum.fr')
        })
          
          $("#myModal").on("hidden.bs.modal", function (event) {
              
              alert("Thanks for your message!")
              
          })
        
          
        </script>

</body>       
</html>    