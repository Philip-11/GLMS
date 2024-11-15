<?php 
    include "../includes/db.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM profile_students WHERE email='$email'";
        $query = $conn->query($sql);

        if ($query->num_rows > 0){
            $user = $query->fetch_assoc();

            if ($password == $user["password"]){
                header("Location: ../pages/dashboard.php");
            }
        }
    }
?>

<form action="" method="post">
    <input type="email" name="email" id="email" placeholder="Email Address" required> <br>
    <input type="password" name="password" id="password" placeholder="Password" required> <br>
    <button type="submit" style="font-family: 'Roboto Slab', sans-serif;">Login</button>
</form>