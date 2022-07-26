<?php
require './lib.php';
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
        <div class="home-heading">
            <h4 class="text-center">Choose the right plan for you</h4>
        </div>
        <div class="subscription-body">
            <div class="sub-heading">
                <div class="row">
                    <div class="col-4">
                        <div class="btn-group monthyear" role="group">
                            <button class="btn month-btn btn-active " id="monthly">Monthly</button>
                            <button class="btn Year-btn" id="yearly">Yearly</button>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="row plan-heading">
                            <div class="col-3">
                                <div class="plan-col head-active" id="mobile-head">
                                    mobile
                                </div>
                            </div>
                            <div class="col-3">
                                <div class=" plan-col" id="basic-head">
                                    Basic
                                </div>
                            </div>
                            <div class="col-3">
                                <div class=" plan-col" id="standard-head">
                                    standard
                                </div>

                            </div>
                            <div class="col-3">
                                <div class="plan-col" id="premium-head">
                                    Premium
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <?php 
        
        $sql1 = "SELECT * FROM `plans` WHERE plan_id = 1;";
        $sql2 = "SELECT * FROM `plans` WHERE plan_id = 2;";
        $sql3 = "SELECT * FROM `plans` WHERE plan_id = 3;";
        $sql4 = "SELECT * FROM `plans` WHERE plan_id = 4;";
        $result1 = mysqli_query($conn,$sql1);
        $result2 = mysqli_query($conn,$sql2);
        $result3 = mysqli_query($conn,$sql3);
        $result4 = mysqli_query($conn,$sql4);
        $row1 = mysqli_fetch_array($result1);
        $row2 = mysqli_fetch_array($result2);
        $row3 = mysqli_fetch_array($result3);
        $row4 = mysqli_fetch_array($result4);
        
                echo '<div class="row" id="price_m">
                <div class="col-4">
                    Monthly price
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="head-active-ele col-3 mobile ">
                            $'.$row1[2].'
                        </div>
                        <div class="col-3 basic">
                        $'.$row2[2].'
                        </div>
                        <div class="col-3 standard">
                        $'.$row3[2].'
                        </div>
                        <div class="col-3 premium">
                        $'.$row4[2].'
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="row d-none" id="price_y">
                <div class="col-4">
                   Yearly Price
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="head-active-ele col-3 mobile ">
                        $'.$row1[3].'
                        </div>
                        <div class="col-3 basic">
                            $'.$row2[3].'
                        </div>
                        <div class="col-3 standard">
                        $'.$row3[3].'
                        </div>
                        <div class="col-3 premium">
                        $'.$row4[3].'
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="row">
                <div class="col-4">
                Video Quality
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="head-active-ele col-3 mobile ">
                        '.$row1[4].'
                        </div>
                        <div class="col-3 basic">
                        '.$row2[4].'
                        </div>
                        <div class="col-3 standard">
                        '.$row3[4].'
                        </div>
                        <div class="col-3 premium">
                        '.$row4[4].'
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="row">
                <div class="col-4">
                  Resolution
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="head-active-ele col-3 mobile ">
                        '.$row1[5].'
                        </div>
                        <div class="col-3 basic">
                        '.$row2[5].'
                        </div>
                        <div class="col-3 standard">
                        '.$row3[5].'
                        </div>
                        <div class="col-3 premium">
                        '.$row4[5].'
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="row">
            <div class="col-4">
              Devices you can use to watch
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="head-active-ele col-3 mobile ">
                        <p> Phone </p>
                    </div>
                    <div class="col-3 basic">
                    <p> Phone </p>
                    <p> Tablet </p>
                    </div>
                    <div class="col-3 standard">
                    <p> Phone </p>
                    <p> Tablet </p>
                    <p>Computer</p>
                    </div>
                    <div class="col-3 premium">
                    <p> Phone </p>
                    <p> Tablet </p>
                    <p>TV</p>
                    </div>
                </div>
            </div>
            <hr>
        </div>';
        ?>

        </div>
        <div class="row">
            <div class="next-sec" id="next-sec">
                <form action="create-checkout-session.php" method="post">
                    <div id="planSelect"></div>
                    <button class="btn next-btn btn-block" onClick=>Next</button>
                </form>`
            </div>
        </div>
    </div>
    <script>
    let current = document.getElementsByClassName("head-active");
    let form = document.getElementById("next-sec");
    let active = current[0].innerHTML;
    let value = active.trim();
    console.log(value);

    form.innerHTML = `<form action="create-checkout-session.php" method="post">
    <input type="text" name="priceId" value=` + value + ` />
    <button class="btn next-btn btn-block">Next</button>
    </form>`
    </script>


    <script>
    var monthly = document.getElementById("monthly");
    console.log(monthly);
    var yearly = document.getElementById("yearly");
    console.log(yearly);
    var price_m = document.getElementById("price_m");
    var price_y = document.getElementById("price_y");

    monthly.addEventListener("click", function() {
        console.log("month button pressed");
        let current = document.getElementsByClassName("btn-active");
        current[0].className = current[0].className.replace(" btn-active", "")
        monthly.className += " btn-active"
        price_y.className += " d-none"
        price_m.classList.remove("d-none")
    });
    yearly.addEventListener("click", function() {
        console.log("year button pressed")
        let current = document.getElementsByClassName("btn-active");
        current[0].className = current[0].className.replace(" btn-active", "")
        yearly.className += " btn-active"
        price_m.className += " d-none"
        price_y.classList.remove("d-none")
    });

    var mobile_head = document.getElementById("mobile-head");
    console.log(mobile_head);
    var basic_head = document.getElementById("basic-head");
    console.log(basic_head);
    var standard_head = document.getElementById("standard-head");
    var premium_head = document.getElementById("premium-head");
    var basic = document.getElementsByClassName("basic");
    var mobile = document.getElementsByClassName("mobile");
    var standard = document.getElementsByClassName("standard");
    var premium = document.getElementsByClassName("premium");
    console.log(basic);

    mobile_head.addEventListener("click", function() {
        console.log("clicked mobile button");
        let current = document.getElementsByClassName("head-active");
        current[0].className = current[0].className.replace("head-active", "");
        mobile_head.className += " head-active";
        let currtext = document.getElementsByClassName("head-active-ele");
        console.log(currtext);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[0]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[1]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[2]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[3]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[4]);
        for (let i = 0; i < basic.length; i++) {
            mobile[i].className += " head-active-ele";
        }
        let form = document.getElementById("next-sec");
        let active = mobile_head.innerHTML;
        let value = active.trim();
        console.log(value);

        form.innerHTML = `<form action="create-checkout-session.php" method="post">
    <input type="text" name="priceId" value=` + value + ` />
    <input type="text" name="monthyear" value="month" />
    <button class="btn next-btn btn-block">Next</button>
    </form>`

    });
    basic_head.addEventListener("click", function() {
        console.log("clicked basic button");
        let current = document.getElementsByClassName("head-active");
        current[0].className = current[0].className.replace(" head-active", "");
        basic_head.className += " head-active";
        let currtext = document.getElementsByClassName("head-active-ele");
        console.log("currtext", currtext);

        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[0]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[1]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[2]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[3]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[4]);



        console.log(basic);
        for (let i = 0; i < basic.length; i++) {
            basic[i].className += " head-active-ele";
        }
        let form = document.getElementById("next-sec");
        let active = basic_head.innerHTML;
        let value = active.trim();
        console.log(value);
        form.innerHTML = `<form action="create-checkout-session.php" method="post">
    <input type="text" name="priceId" value=` + value + ` />
    <button class="btn next-btn btn-block">Next</button>
    </form>`
    });
    standard_head.addEventListener("click", function() {
        let current = document.getElementsByClassName("head-active");
        current[0].className = current[0].className.replace(" head-active", "");
        standard_head.className += " head-active";
        let currtext = document.getElementsByClassName("head-active-ele");
        console.log(currtext);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[0]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[1]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[2]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[3]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[4]);
        for (let i = 0; i < standard.length; i++) {
            standard[i].className += " head-active-ele";
        }

    });
    premium_head.addEventListener("click", function() {
        console.log("clicked basic button");
        let current = document.getElementsByClassName("head-active");
        current[0].className = current[0].className.replace(" head-active", "");
        premium_head.className += " head-active";
        let currtext = document.getElementsByClassName("head-active-ele");
        console.log(currtext);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[0]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[1]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[2]);
        currtext[1].classList.remove("head-active-ele");
        console.log(currtext[3]);
        currtext[0].classList.remove("head-active-ele");
        console.log(currtext[4]);
        for (let i = 0; i < premium.length; i++) {
            premium[i].className += " head-active-ele";
        }

    });
    </script>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>