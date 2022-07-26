<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css">
    <title>MyApp</title>
</head>

<body>
<!-- <div class="page-header">
			<span class="login-signup"><a href="logout.php">Logout</a></span>
</div> -->
<div class="container-fluid">
    <div class="subscription-body">
        <div class="row">
            <div class="col-4">
                <div class="btn-group monthyear" role="group" >
                    <button class="btn month-btn btn-active " id="monthly">Monthly</button>
                    <button class="btn Year-btn" id="yearly">Yearly</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var monthly = document.getElementById("monthly");
    console.log(monthly);
    var yearly = document.getElementById("yearly");
    console.log(yearly)
    monthly.addEventListener("click",function(){
        console.log("month button pressed");
        let current = document.getElementsByClassName("btn-active");
        current[0].className = current[0].className.replace(" btn-active" , "")
        monthly.className += " btn-active"
    });
    yearly.addEventListener("click",function(){
        console.log("year button pressed")
        let current = document.getElementsByClassName("btn-active");
        current[0].className = current[0].className.replace(" btn-active" , "")
        yearly.className += " btn-active"
    });
</script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>