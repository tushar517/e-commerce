<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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
    
    ?>
    
    <div class="container">        
        <div class="jumbotron" style="margin-top:80px">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                have all in one place.</p>
        </div>
        <div class="row">
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/5.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Cannon EOS</h3>
                        <p>Price:Rs36000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/2.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs40000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/3.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Sony DSLR</h3>
                        <p>Price:Rs50000.00</p> 
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/4.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price:Rs80000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/9.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price:Rs13000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/10.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price:Rs8000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/11.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price:Rs8000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/12.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Faber Luba #111</h3>
                        <p>Price:Rs18000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/8.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>H&W</h3>
                        <p>Price:Rs800.00</p>
                        <br>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/6.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <h3>Luis Phill</h3>
                        <p>Price:Rs1000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/13.jpg" class="img-responsive" alt=""></a>
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price:Rs15000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
            <div class="thumbnail col-md-3 col-sm-6">
                <img src="images/14.jpg" class="img-responsive" alt=""></a>
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price:Rs13000.00</p>
                        <input type="submit" value="Add to cart" class="btn btn-primary btn-block">
                    </div>
            </div>
        </div>
    </div>        
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>