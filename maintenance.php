<?php 
define( 'HTTPHOST', $_SERVER['HTTP_HOST'] );
define(  'SITENAME', 'Ultralux Italia' );
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manutenzione in corso | <?php echo SITENAME; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-8">
                <img src="logo.png" alt="" class="img-responsive center-block">
                <h1>Sito in manutenzione</h1>
                <p>Il sito <?php echo HTTPHOST; ?> è in manutenzione, ci scusiamo per il disagio.<br>Riprova tra qualche minuto.</p>
            </div>
        </div>
    </div>
    
</body>
</html>