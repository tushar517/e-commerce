<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
    require 'includes/common.php';
    include 'includes/header.php';
    if (isset($_SESSION['email'])) { header('location:ProductPage.php'); }
    ?>
    <div class="content">
        <div class="banner-image">
            <div class="inner-banner-image">
                <div class="banner_content">
                    <h1>We sell lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p><br>
                    <a class="button" href="ProductPage.html">shop now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail col-xs-4">
                    <a href=""><img src="images/watch.jpg" class="img-responsive" alt=""></a>
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </div>
                <div class="thumbnail col-xs-4">
                    <a href=""><img src="images/shirt.jpg" class="img-responsive" alt=""></a>
                    <div class="caption">

                        <h2>Shirts</h2>
                        <p>Our exquisite collection of shirts</p>
                    </div>
                </div>
                <div class="thumbnail col-xs-4">
                    <a href=""><img src="images/camera.jpg" class="img-responsive" alt=""></a>
                    <div class="caption">
                        <h2>Cameras</h2>
                        <p>Choose among the best available in the world.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>

</html>