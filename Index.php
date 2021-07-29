<?php?>

<html>
    <head>
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="Styles.css">

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">

    </head>

    <body>
        <div class="container"> <!-- conatiner -->
        
            <h1>Welcome to Sticker Valley!</h1>

            <br>

            <?php include 'Partials/ProductCards.php'?>

            <br>

        </div> <!-- end of container -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-4" style="background-color: #282C2F;">

            <h2 style="text-align: center;">Request a Custom Sticker</h2>

            <!-- form -->
            <?php include 'Partials/Forms.php';?>

            </div> <!-- end of the first col -->

            <div class="col-lg-7 col-md-8" style="text-align: center;">
                
            <h1 style="margin-top: 30%;">Test</h1>

            </div> <!-- end of the second col -->
        </div> <!-- end of the row -->
    </div> <!-- end of container-fluid -->

    <?php include 'Partials/Footer.php'?>
        
    </body>
</html>
