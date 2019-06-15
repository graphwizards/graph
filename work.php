<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/animation.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <title>Work | Graphwizards</title>
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

            <div style="width:100%; height: 70px;"></div> <!-- Extra blank div for navbar -->
<!-- ++++++++++++++++++++++++++++ End of Navbar ++++++++++++++++++++++++-->

<div class="work-container">
    <h1 class="work-head-1">Our Work</h1>

    <ul class="work-ul">

            <li class="work-li">
                    <a id="all-btn"  class="work-a" href="#">All</a>
                </li>

        <li class="work-li">
            <a class="work-a" id="lables-btn" href="#">Product packaging and labels</a>
        </li>

        <li class="work-li">

            <a class="work-a" id="marketing-btn" href="#">Marketing materials</a>
        </li>

        <li class="work-li">
            <a class="work-a" id="identity-btn" href="#">Visual identity</a>
        </li>


        <li class="work-li">
            <a class="work-a" href="#">Promotional Marketing Materials</a>
        </li>

        <li class="work-li">
            <a class="work-a" href="#">Websites & digital Plateforms</a>
        </li>

    </ul>
    

    <div class="workk-images-container">

        <!---++++++++++++ Work Images Main Div +++++++++++++++++++-->

        <?php
        include  "connection.php";
        $image = mysqli_query($connect,"SELECT * FROM gallery ORDER BY id DESC");
        while($row = mysqli_fetch_array($image)){
            $id=$row['id'];
            $img=$row['image'];
            $date=$row['date'];
            $cat=$row['category'];
            $desc=$row['description'];
            echo "
            <div  class='work-images-main $cat'><a href=' work-master.php?id=$id'>
<img src='portfolio/$img' class='work-image' >
</a>
        </div>
            
            ";
        }

        ?>
       

<script>
$("#lables-btn").click(function(){
$(".marketing_materials").hide();
$(".visual_identity").show();
$(".work-head-1").text( "Product packaging and labels" );
});

$("#all-btn").click(function(){
    $(".marketing_materials, .visual_identity").show();
    $(".work-head-1").text( "Our Work" );
});

$("#marketing-btn").click(function(){
    $(".marketing_materials").show();
    $(".visual_identity").hide();
    $(".work-head-1").text( "Marketing Materials" );
});

</script>

</div>
<!-- 
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
            Copyright Ã‚Â© 2018, Graphwizards All rights reserved.  </footer>
    </div> -->


    </section>
</body>
</html>