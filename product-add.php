<?php
    session_start();
    if(!isset($_SESSION['user'])) header('location:login.php');
    $_SESSION['table']='product';
    $user=$_SESSION['user'];
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product-Inventory Management System</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
    <script src=
"https://unpkg.com/ag-grid-community/dist/ag-grid-community.min.nostyle.js">
</script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9e2b11e83d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="CSS/login.css?v=<?=time()?>">
</head>
<body>
    <div id="dashboardMainContainer" >
        <?php include('partials/app-sidebar.php') ?>
        <div class="dashboard_content_container" id="dashboard_content_container">
        <?php include('partials/app-topnav.php') ?>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div id="useraddFormContainer">
                    <form action="database/add.php" method="POSt" class="appForm" >
                        <div class="appFormInputContainer">
                            <label for="first_name">Product Name</label>
                            <input type="text" class="appFormInput" id="Product_name" name="Product_name" />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="last_name">Product Size</label>
                            <input type="text" class="appFormInput" id="Product_size" name="Product_size" />
                        </div>
                        <div class="appFormInputContainer">
                            <label for="email">No.of proucts</label>
                            <input type="text" class="appFormInput" id="No_of_products" name="No_of_products" />
                        </div>                   
                   <button type="submit" class="appBtn"><i class="fa fa-plus"></i>Add Product</button>
                            
                        </form>
                    </div>          
                </div>
            </div>
        </div>
    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="JS/script.js?v=<?=time()?>"></script>
</body>
</html>