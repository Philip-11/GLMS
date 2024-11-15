<?php 

include "../includes/db.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    
</head>
    <body>
        <!-- Fix components into center -->
        <!-- This is the main container -->
        <div class="container d-flex justify-content-around align-items-center">
            <!-- Left Container -->
            <div class="login-container">
                <h1 style="font-family: 'Roboto Slab', sans-serif;">Login</h1>
                <?php include "../partials/login_form.php" ?>
            </div>
            <!-- Right Container -->
            <div class="welcome-container ">
                <img src="../assets/images/saintjohnboscologo-removebg.png" alt="School Logo">
                <h1 style="color: #97BC9B; font-family:'Roboto Slab', sans-serif; text-align:center;">Welcome <br>to <br> Saint John Bosco</h1>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>