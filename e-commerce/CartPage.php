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
    <div>
        <div class="container" style="margin-top: 60px;">
            <div class="table-responsive">
                <table class="table ">
                    <thead>
                        <tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Total</td>
                            <td>Rs 0/-</td>
                            <td><a href="SuccessPage.html"><input type="submit" value="Confirm Order" class="btn btn-primary btn-xs" style="padding: 8px;"></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
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