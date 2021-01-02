<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="container" style="width: 50%; margin-top: 30px;">
        <div class="row" style="margin: 15px;">            
            <div class="col-xs-6">                
                <h2>Change Password</h2>
            </div>
            <form>
                <div class="form-group" >
                    <input type="text" name="oldpassword" class="form-control" placeholder="Old Password">
                </div>
                <div class="form-group">
                    <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                </div>
                <div class="form-group">
                    <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                </div>
                <input type="submit" value="Change" class="btn btn-primary btn-xs">
            </form>        
        </div>
    </div>
    <?php
    include 'includes/footer.php';
    ?>
</body>
</html>