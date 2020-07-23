<?php 
define( 'HTTPHOST', $_SERVER['HTTP_HOST'] );
define( 'SITENAME', 'Agenzia Immobiliare Letizia' );
define( 'COMPANY_NAME', 'Agenzia Immobiliare Letizia' );
define( 'COMPANY_ADDR', 'Corso Virginia Marini, 99 - 15121 Alessandria' );
define( 'COMPANY_TEL', '0131 227297' );
define( 'COMPANY_CELL1', '339 4480565' );
define( 'COMPANY_CELL2', '347 3836674' );
define( 'COMPANY_EMAIL', 'info@letiziaimmobiliare.com' );
define( 'COMPANY_FB', 'https://www.facebook.com/agenzialetizia' );
define( 'COLOR', '#015622' );
?>
<!doctype html>
<html lang="it">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title><?php echo SITENAME; ?></title>
  </head>
  <body>
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-md-6 offset-md-3 text-center mt-5">
                <img src="logo.png" alt="" class="img-responsive center-block">
                <h1 class="mt-3" style="color: <?php echo COLOR; ?>">Sito in costruzione</h1>
                <p>Il sito <?php echo HTTPHOST; ?> è in costruzione.</p>
                <p class="mt-5">
                    <strong style="color: <?php echo COLOR; ?>"><?php echo COMPANY_NAME ?></strong><br>
                    <?php echo COMPANY_ADDR ?><br><br>
                    <ion-icon name="call-outline"></ion-icon> Tel.: <?php echo COMPANY_TEL ?><br>
                    <ion-icon name="phone-portrait-outline"></ion-icon> Cell.: <?php echo COMPANY_CELL1 ?><br>
                    <ion-icon name="phone-portrait-outline"></ion-icon> Cell.: <?php echo COMPANY_CELL2 ?><br><br><br>
                    <a href="<?php echo COMPANY_FB ?>" target="_blank"><ion-icon name="logo-facebook"></ion-icon> Facebook</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>