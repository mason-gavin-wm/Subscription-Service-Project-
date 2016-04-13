<?php
/**
 * Created by PhpStorm.
 * User: session1
 * Date: 4/11/16
 * Time: 2:40 PM
 */
?>
<!DOCTYPE html>
<html>

<head>
    <title>The Mr.Club - Sign Up</title>

    <!-- Icon in title-->
    <link rel="icon" type="image/png" href="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,f_auto,h_1440,q_80,w_720/v1/276997/tie3-2_esnpw2.png">

    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
<!-- Materialize-->
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="materialize.min.css">

<!-- Logo-->
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<!--scrolling thingy-->
    <script src="classie.js"></script>
    <script src="jquery.js"></script>
    <script>
        function init() {
            window.addEventListener('scroll', function(e){
                var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                    shrinkOn = 300,
                    header = document.querySelector("header");
                if (distanceY > shrinkOn) {
                    classie.add(header,"smaller");
                } else {
                    if (classie.has(header,"smaller")) {
                        classie.remove(header,"smaller");
                    }
                }
            });
        }
        window.onload = init();
    </script>
</head>

<body style="height:1100px">
<header>
    <div class="container clearfix">
        <h1 id="logo">
            The Mr. Club
        </h1>
        <nav>
            <a href="login.php">LOGIN</a>
            <a href="collection.php">GET STARTED</a>
            <a href="faq.html">FAQ</a>
        </nav>
    </div>
</header>
<!--NAV START-->
<div style="margin-top:145px;" class="nav">

</div>
<!--NAV END-->

<div class="neighborhood-guides">
    <div class="container">
        <h2>Sign Up</h2>
        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                        <input placeholder="Frist Name" id="first_name" type="text" class="validate">
                        <label for="first_name"></label>
                    </div>
                    <div class="input-field col s6">
                        <input id="last_name" type="text" class="validate">
                        <label for="last_name">Last Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="learn-more">
    <div style = "margin-top:75px;background-color:rgba(238, 238, 238, 0.38);" class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>PlaceHolder</h3>
                <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
                <p><a href="#">See how to travel on Airbnb</a></p>
            </div>
            <div class="col-md-4">
                <h3>PlaceHolder</h3>
                <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
                <p><a href="#">Learn more about hosting</a></p>
            </div>
            <div class="col-md-4">
                <h3>PlaceHolder</h3>
                <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
                <p><a href="#">Learn about trust at Airbnb</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>

