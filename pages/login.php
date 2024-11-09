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
        <div class="container d-flex flex-wrap justify-content-around align-items-center">
            <div class="login-container">
                <h1 style="font-family: 'Roboto Slab', sans-serif;">Login</h1>
                <form action="" method="post">
                    <input type="email" name="email" id="email" placeholder="Email Address" required> <br>
                    <input type="password" name="password" id="password" placeholder="Password" required> <br>
                    <button type="submit" style="font-family: 'Roboto Slab', sans-serif;">Login</button>
                </form>
            </div>

            <div class="welcome-container ">
                <img src="../assets/images/saintjohnboscologo-removebg.png" alt="School Logo">
                <h1 style="color: #97BC9B; font-family:'Roboto Slab', sans-serif; text-align:center;">Welcome <br>to <br> Saint John Bosco</h1>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>