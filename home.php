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
    <title>The Mr.Club - Home</title>
    <link rel="icon" type="image/png" href="http://res.cloudinary.com/hrscywv4p/image/upload/c_limit,f_auto,h_1440,q_80,w_720/v1/276997/tie3-2_esnpw2.png">
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">

    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

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

<body>

<!--NAV START-->
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
<!--NAV END-->

<!--JUMBOTRON START-->
<div class="jumbotron">
    <div class="container">
        <h1>Rent from The Mr. Club</h1>
        <p>Personalized style for everyone.</p>
        <p>Rent unlimited styles hand-selected just for you.</p>
        <a href="signup.php"><input type="button" class="enjoy-css" value="BECOME A MEMBER" /></a>
        <script type="text/javascript" script-name="montserrat" src="http://use.edgefonts.net/montserrat.js"></script>
    </div>
</div>
<!--JUMBOTRON END-->
<!--extra info-->
<div id="what-it-is" >
    <h2 style="text-emphasis: ;text-align:center;margin-top:50px;"><strong>What is The Mr. Club?</strong></h2>
    <hr>
    <p style="font-size:19px; color:#616161; text-align: center;">
        A clothing subscription service for the man who loves surprises, and has the desire to be stylish, with minimal effort involved.
    </p>
    <br>
    <p style="font-size:19px; color:#616161; text-align: center;">
        Rent clothing and accessories, with the option to purchase items that are too good to send back. You can now keep a rotating closet and never grow bored with your clothing again. Packs feature a mix of menswear designer labels,
        everyday brands and key essentials you will love, at a low monthly cost you can love even more.
    </p>
    <br>
    <p style="font-size:19px; color:#616161; text-align: center;">
        Spend less on the <strong><span style="color: #12372a; text-align: center;">latest fashion trends</span></strong> for men.
    </p>
</div>
<!--Extra INfo-->
<div id="how-it-works" style="background-color:#616161;">
    <h2 style="color:white; width:100%; line-height:50px; text-align:center; margin-top:50px;">HOW IT WORKS</h2>
</div>

<div class="neighborhood-guides">
    <div class="container">


        <p>Not sure where to start? We've created an easy process to find the pet you want. <a href="#">Click here to start it</a></p>
        <div class="row">

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://goo.gl/0sX3jq">
                </div>
                <div class="thumbnail">
                    <img src="http://goo.gl/an2HXY">
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://goo.gl/Av1pac">
                </div>
                <div class="thumbnail">
                    <img src="http://goo.gl/vw43v1">
                </div>
            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="http://goo.gl/0Kd7UO">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="learn-more">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3></h3>
                <p>From apartments and rooms to treehouses and boats: stay in unique spaces in 192 countries.</p>
                <p><a href="#">See how to travel on Airbnb</a></p>
            </div>
            <div class="col-md-4">
                <h3>Questions</h3>
                <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
                <p><a href="#">Learn more about hosting</a></p>
            </div>
            <div class="col-md-4">
                <h3>Trust and Safety</h3>
                <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
                <p><a href="#">Learn about trust at Airbnb</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
