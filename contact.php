<?php 
include "connection.php";
if (isset($_POST['submit'])) {
    # code...
    $email=$_POST['email'];

    
	$insert= "INSERT INTO 	newzletter (newzletter_email) VALUES ('$email')";
    $result = mysqli_query($connect,$insert);
   if ($result) {
      echo" <script> alert('Thank You!') </script>";
   }
   else{
       echo "data inserted failed".mysqli_error($connect);
       
   }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    
    <script src="js/animation.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <title>Contact | Graphwizards</title>
    <link rel="shortcut icon" href="icon.ico" /> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <section class="main">
         <!--+++++++++++++++++++++++++++++++++ Navbar ++++++++++++++++++++++++-->
         <nav class="navbar-container">
                <div class="navbar"><a href="index.php">
                    <img class="main-logo" src="images/white-logo.png" alt=""></a>
    
                    <span class="nav-span">
                            <a onclick="goBack()" style="cursor:pointer;"><i class="fas fa-long-arrow-alt-left"></i></i>
                            Back..... </a>
                            <script>
                            function goBack() {window.history.back();}</script>
                    </span>
    
                </div>
            </nav>

            <!--++++++++++++++++++++++++ Contact container ++++++++++++++++++++++++++-->
<div class="main-contact-container ">
    <div class="blank">

    </div>
    <div class="letter-container ">
         <script>
            function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }
        return true;
}</script>
    <form method="post">    
        <label class="newsletter-lable" >Subscribe Newsletter</label>
        <input type="email" onblur="validateEmail(this);" name="email" placeholder="Email" required="required" class="newsletter-input">
        <button type="submit" name="submit" value="submit" class="newsletter-button">Submit</button>
        </form>
    </div>

    <div class="contact-list-container">
        <div class="contact-list-container-content">
            <h2 class="contact-list-headline">Phone</h2>
            <a class="call-btn" href="tel:+91 8059112897">(+91) 80 591 12897</a> <br>
            <a class="call-btn" href="tel:+91 8059112897">(+91) 96 467 52264</a>
        </div>
        
        <div class="contact-list-container-content">
                <h2 class="contact-list-headline">E-mail</h2>
                <a class="call-btn" href="mailto:info@graphwizards.com">info@graphwizards.com</a> <br>
                <a class="call-btn" href="mailto:support@graphwizards.com">support@graphwizards.com</a>
            </div>
            
        <div class="contact-list-container-content">
                <h2 class="contact-list-headline">Address</h2>
                <a class="call-btn" id="address" target="blank" href="https://www.google.com/maps/place/Graphwizards/@30.3534615,76.4536637,17z/data=!3m1!4b1!4m5!3m4!1s0x391029073a83e893:0xddc868121e3920b5!8m2!3d30.3534615!4d76.4558524">
                    Professor Colony, Karheri, Urban Estate, Patiala, Punjab 147002</a>
                    <br>
                    <span id="map">
                        Click  to see map
                    </span>
                    <script>
                    $("#address").mouseover(function(){
                        $("#map").fadeIn(200);
                    });

                    $("#address").mouseout(function(){
                        $("#map").fadeOut(500);
                    });
                    </script>
            </div>

    </div>
 


</div>
<div class="contact-container">
        <div class="contect-left">
            <img class="white-logo" src="images/contect-logo.png" >
        </div>
        <div class="contect-right">
            <ul class="contact-ul">
                <li class="contect-li"><a href="index.php">Home</a></li>
                <li class="contect-li"><a href="work.php">Work</a></li>
                <li class="contect-li"><a href="about.php">About</a></li>
                <li class="contect-li"><a href="contact.php">Meet us</a></li>
                </ul>
            </div>
            <div class="contect-right-3">
                <ul class="contact-ul">
                    <li class="contect-li"><a href="Licence.html">Licence</a></li>
                    <li class="contect-li"><a href="terms.html">Terms</a></li>
                    <li class="contect-li"><a href="policy.html">Privacy Policy</a></li>
                    
                    </ul>
                </div>
            <div class="contact-right-2">
                    <ul class="contact-ul">
                            <li class="contect-li"><a href="#">Facebook</a></li>
                        <li class="contect-li"><a href="#">Instagram</a></li>
                        <li class="contect-li"><a href="#">Twitter</a></li>
                        
                    </ul>
        </div>
        <footer> <span>
            +91-8059112897  |  +91-8146769698  |  hello@graphwizards.com </span> <br>
            Copyright Â© 2018, Graphwizards All rights reserved.  </footer>
    </div>

    </section>
</body>
</html>