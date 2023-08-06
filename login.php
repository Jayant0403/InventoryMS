<?php
    
    session_start();
    if(isset($_SESSION['user'])) header('location: dashboard.php');

    $error_message = '';
    if($_POST){
        include('database/connection.php');
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = 'SELECT * FROM user WHERE user.email="'. $username .'"AND user.password="'.$password .'"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

    
        if($stmt->rowCount() > 0) {
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];

            // Captures data of currently login users
            $_SESSION['user'] = $user;
        
            header('Location:dashboard.php');
        } else $error_message = 'Please make sure the username and password is correct';
        
    }


 ?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Inventory Management System</title>
    <script src="https://kit.fontawesome.com/9e2b11e83d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body id="Loginbody">
    <?php if(!empty($error_message)){  ?>
        <div id="errorMessage">
            <p>Error :<?= $error_message?> </p>
        </div>    
    <?php } ?>
    <div class="container">
        <div class="login">
            <h1>NIKE's INVENTORY SYSTEM</h1>
           
        </div>
        <div class="loginbody">
            <form action="login.php" method="POST">
                <div class="loginInputContainer">
                    <label for="">Username</label>
                    <input placeholder="username" name="username" type="text">
                </div>
                <div  class="loginInputContainer">
                    <label for="">Password</label>
                    <input placeholder="password" name="password" type="password">
                </div>
                <div class="loginInputContainer">
                    <button>login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>