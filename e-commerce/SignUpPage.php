<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <br><br>
    <div class="container" style="width: 40%;">
        <div class="row" style="margin: 15px;">            
            <div class="col-xs-6">                
                <h4>Sign Up</h4>
            </div>
            <form method="POST" action="includes/registration.php">
                <div class="form-group" >
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <input type="text" name="contact" class="form-control" placeholder="Contact">
                </div>
                <div class="form-group">
                    <input type="text" name="city" class="form-control" placeholder="City">
                </div>
                <div class="form-group">
                    <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <input type="submit" value="Submit" class="btn btn-primary btn-xs">
            </form>        
        </div>
    </div>
    <div style="position: absolute;width: 100%; bottom: 0;">  
    <?php
    include 'includes/footer.php';
    ?> 
    </div>
</body>

</html>