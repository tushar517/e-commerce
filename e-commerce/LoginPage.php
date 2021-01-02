<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
    <div class="container">
        <div class="row" style="margin: 15px;">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4>LOGIN</h4>
                    </div>
                    <div class="panel-body">
                        <p class="text-warning"><b><em>Login to make purchase</em></b></p>
                        <form method="POST" action="includes/login.php">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <input type="submit" value="Login" class="btn btn-primary btn-xs">

                        </form>
                    </div>
                    <div class="panel-footer"><p>Don't have account?<a href="SignUpPage.html"><b> Register</b></p></a></div>
                </div>
            </div>
        </div>
    </div>
    <div style="position: absolute;width: 100%; bottom: 0;">  
    <?php
    include 'includes/footer.php';
    ?> 
    </div>
</body>
</html>