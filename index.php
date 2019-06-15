<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/animation.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Thasadith" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    <title>Design can Miracle | Graphwizards</title>
    <script src="wizards/js/jquery-2.1.4.min.js"></script>
    <script src="wizards/js/jquery-ui.js"></script>
    <link rel="shortcut icon" href="icon.ico" /> 
    <script type='text/javascript' src='js/jquery.ba-hashchange.min.js'></script>
<script type='text/javascript' src='js/dynamicpage.js'></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  
</head>
<body id="body">
        <div class="error-container" id="page-error" >
                <div class="error-container-2" >
                    <div class="error-container-content">
                        <img class="error-img" src="./wizards/images/error.png" alt="Load Image">
                        <h1 class="error-headline">404 ERROR</h1>
                        <p class="error-text">This Page Is Under Construction <br>
                                Please Come Back Latter</p>
    
                                <br>
                                <button class="golden-btn"  id="close-error" >Close</button>
                                
                                <script>
                                    $("#close-error").click(function(){
                                        $("#page-error").fadeOut(500);
                                        
                                    } );
    
                                    $(".error-container-2").click(function(){
                                        $("#page-error").fadeOut(200);
                                                                       } );



                             
                                        
                                    
                                </script>
                    </div>
                </div>
            
                </div>
    <section class="main">
    <!--+++++++++++++++++++++++++++++++++ Navbar ++++++++++++++++++++++++-->
        <nav class="navbar-container">
            <div class="navbar"><a href="http://www.graphwizards.com">
                <svg version="1.2" baseProfile="tiny" id="svg-main-logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                x="0px" y="0px" viewBox="0 0 600 80" xml:space="preserve">
           <g>
               <path d="M219.3,47.7c0-9.3-5.1-12.2-9.5-12.2c-3.2,0-6.5,1.6-8.4,4.6h-0.1V22.8H195v42.7h6.2V47.5c0-4.4,3.2-6.9,6.3-6.9
                   c4.2,0,5.6,3.5,5.6,7.7v17.1h6.2V47.7z"/>
               <path d="M162.5,47.4c0-6.2-2.4-11.9-11-11.9c-3.9,0-7.4,1.1-9.5,2.4l1.3,4.1c1.9-1.2,4.5-2,7.1-2c5.4,0,5.9,3.6,5.9,5.9l0.2,4.8
                   v4.8c0,3.4-2.8,6-6.1,6c-2.3,0-4.3-1.4-4.3-4.7c0-3.4,2.4-5,5.4-5.7c2.9-0.7,3.4-1.2,3.2-4.6c-0.7,0-0.4,0-1.1,0.1
                   c-8.4,0.6-13.6,4.2-13.6,10.8c0,4.5,3.1,8.6,8.6,8.6c3.7,0,6.6-1.7,8.2-4h0.2l0.4,3.4h5.6c-0.4-1.9-0.4-4.5-0.4-7V47.4z"/>
               <path d="M332.3,47.1c0-6.2-2.4-11.9-11-11.9c-3.9,0-7.4,1.1-9.5,2.4l1.3,4.1c1.9-1.2,4.5-2,7.1-2c5.4,0,5.9,3.6,5.9,5.9l0.2,4.8
                   v4.8c0,3.4-2.8,6-6.1,6c-2.3,0-4.3-1.4-4.3-4.7c0-3.4,2.4-5,5.4-5.7c2.9-0.7,3.4-1.2,3.2-4.6c-0.7,0-0.4,0-1.1,0.1
                   c-8.4,0.6-13.6,4.2-13.6,10.8c0,4.5,3.1,8.6,8.6,8.6c3.7,0,6.6-1.7,8.2-4h0.2l0.4,3.4h5.6c-0.4-1.9-0.4-4.5-0.4-7V47.1z"/>
               <path d="M138.1,35.7c-0.5-0.1-1-0.2-1.5-0.2c-3.2,0-6.3,2.3-7.6,6h-0.2l-0.2-5.4h-5.4c0.2,2.7,0.2,5.5,0.2,8.9v20.4h6.2V49.9
                   c0-5.1,2.6-8.5,6.8-8.5c0.7,0,1.3,0.1,1.8,0.2V35.7z"/>
               <path d="M119.2,43.5h-13c0,1.8,0.3,5,3.6,5h3.4V60c-0.9,0.5-2.8,0.9-5.4,0.9c-8,0-13.6-5.4-13.6-15.7c0-10.3,6-15.6,14.4-15.6
                   c3.7,0,6.2,0.7,8.1,1.5l1.4-5.1c-2-1-5.5-1.7-9.5-1.7c-12.2,0-20.9,7.9-20.9,21.1c0,6.5,2.2,20.5,19.9,20.5c4.8,0,9.3-1.2,11.6-2.1
                   V43.5z"/>
               <path d="M401.4,37.2c-1.6-0.9-4.1-1.7-7-1.7c-6.2,0-10.2,3.9-10.2,8.8c0,3.4,2.3,6.3,7.5,8.4c3.5,1.5,4.7,2.7,4.7,5
                   c0,2.2-1.6,3.8-4.9,3.8c-1.7,0-3.5-0.5-5.2-1.3c-11-5.6-7.8-24.6-22.9-24.6c-6.6,0-12.2,5.6-12.2,15.6c0,9.1,5.1,15,11.7,15
                   c3.8,0,6.7-1.8,8.4-4.4c0.2-0.3,0.3-0.5,0.5-0.8h0.2l0.3,4.6h1.8c2-0.1,3.5-2.1,3.4-4c-3.3-4.3-3.5-8.9-6.2-13.5v2.8v2.6
                   c0,4.1-2.6,7.6-6.6,7.6c-4.7,0-7.2-4.4-7.2-10.2c0-5.8,2.6-10.5,7.3-10.5c0.8,0,1.6,0.2,2.4,0.5c1.8,1,3.1,2.7,4.3,4.5
                   c5.6,9.4,6,20.7,20,20.7c6.7,0,11-3.4,11-9c0-4.3-2.6-6.9-7.4-8.9c-3.6-1.5-4.9-2.6-4.9-4.6c0-2,1.5-3.6,4.3-3.6
                   c2.4,0,4.4,0.9,5.6,1.7L401.4,37.2z M377.5,22.8h-6.2v12.8c2.4,1.9,4.5,4.9,6.2,8.9V22.8z"/>
               <path d="M353.9,36.3c-1.5-0.8-3.6-1-5.4-0.8c-2.9,0.3-5.6,2.5-6.9,6h-0.2l-0.2-5.4h-5.4c0.2,2.7,0.2,5.5,0.2,8.9v20.4h6.2V49.9
                   c0-5.1,2.6-8.5,6.8-8.5c0.7,0,1.3,0.1,1.8,0.2C351.7,39.7,352.6,37.8,353.9,36.3"/>
               <path d="M286.5,36.1v5h14v0.1c-1.3,1.5-2.4,3-3.7,4.7l-11.3,15.9v3.7h22.7v-5H293v-0.1c1.3-1.5,2.5-3.1,3.7-4.7L307.8,40v-3.9
                   H286.5z"/>
               <g>
                   <rect x="276.3" y="36.1" width="6.2" height="29.3"/>
                   <path d="M283,28c0-2.1-1.4-3.6-3.6-3.6c-2.1,0-3.6,1.5-3.6,3.6c0,2,1.4,3.6,3.6,3.6C281.6,31.6,283,30,283,28"/>
               </g>
               <g>
                   <path d="M181.6,38.6c-3.3,0-5.9,1.4-7.5,4l-0.1,0.1h-0.5l-0.3-3.6h-5.5c0.1,2.4,0.2,5.1,0.2,8.3v27.9h6.4V62.3h0.6l0.1,0.1
                       c1.2,1.8,3.4,2.9,6,2.9c5.2,0,10.5-4.2,10.5-13.6C191.3,44,187.4,38.6,181.6,38.6z M179.2,60.5c-2.4,0-5-1.9-5-6v-4.9
                       c0-3.4,2.3-6,5.1-6c3.4,0,5.5,3.2,5.5,8.4C184.9,57.2,182.7,60.5,179.2,60.5z"/>
               </g>
               <g>
                   <path d="M274.2,23.7l-11,43.1h-6.8L251.7,46c-1.1-5-2-9.4-2.5-14H249c-0.7,4.6-1.6,8.8-2.9,14L241,66.8h-6.9L224,23.7h6.9
                       l4.3,20.5c1.1,5.3,2,10.6,2.8,15h0.1c0.7-4.6,1.9-9.7,3.2-15.2l4.9-20.4h6.5l4.5,20.5c1.1,5.1,2.1,10,2.7,15h0.2
                       c0.7-5.1,1.7-9.9,2.9-15.2l4.6-20.3H274.2z"/>
               </g>
               <g>
                   <path d="M24.5,24.9l13.6-7.9c1.5-0.8,3.3-0.8,4.7,0l13.6,7.9c1.2,0.7,2,1.8,2.3,3.1c0.1,0.3,0.2,0.6,0.5,0.7l4.3,2.4
                       c0.7,0.4,1.5-0.1,1.5-0.9v-3.9c0-2.3-1.2-4.4-3.2-5.5L43.7,10.3c-2-1.1-4.4-1.1-6.3,0L19.1,20.8c-2,1.1-3.2,3.2-3.2,5.5v21.1
                       c0,2.3,1.2,4.4,3.2,5.5l18.3,10.5c2,1.1,4.4,1.1,6.3,0l18.3-10.5c2-1.1,3.2-3.2,3.2-5.5v-5.8l-6.3,1v2.1c0,1.7-0.9,3.2-2.4,4.1
                       l-13.6,7.9c-1.5,0.8-3.3,0.8-4.7,0l-13.6-7.9c-1.5-0.8-2.4-2.4-2.4-4.1V29C22.2,27.3,23.1,25.8,24.5,24.9z"/>
                   <path d="M62.4,54.7c-0.1,0.1-0.3,0.2-0.4,0.3l-2.5,1.5c-0.4,0.2-0.6,0.6-0.6,1v2.1c0,1.7-0.9,3.2-2.4,4.1l-13.6,7.9
                       c-1.5,0.8-3.3,0.8-4.7,0l-13.6-7.9c-1.5-0.8-2.4-2.4-2.4-4.1v-2.1c0-0.4-0.2-0.8-0.6-1L19.1,55c-0.2-0.1-0.4-0.2-0.6-0.4l-0.8-0.5
                       c-0.8-0.5-1.8,0.1-1.8,1v7.1c0,2.3,1.2,4.4,3.2,5.5l18.3,10.5c2,1.1,4.4,1.1,6.3,0l18.3-10.5c2-1.1,3.2-3.2,3.2-5.5v-7.1
                       c0-0.9-1-1.5-1.8-1L62.4,54.7z M61.9,35.7l-15.3-8.8c-0.4-0.2-1,0.1-1,0.6v5.8c0,0.2,0.1,0.4,0.3,0.6l10.5,6
                       c1.5,0.8,2.4,2.4,2.4,4.1v0.8l6.3-1v-2.5C65.1,39,63.9,36.9,61.9,35.7z"/>
                   <path d="M43.6,25.2v51.3h-6.3V22.3c0-0.2,0.1-0.5,0.2-0.7L43.6,25.2z"/>
               </g>
           </g>
           </svg>
           </a>

                <span class="nav-span">
                        <i class="fab fa-facebook-square"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                        <a href="contact.php">Get in Touch</a>
                </span>

            </div>
        </nav>


        <!--+++++++++++++++++  Banner ++++++++++++++++-->
        <div class="banner-container">

        
        
            <div class="banner-content-right">
                <h1 class="headline"> An Impressive <br> &amp; meaningful Design <br> can boost your <span> business </span> <br> <a href="work.php"> <button class="exp-work">Explore Our Work</button> </a> </h1>
                
            </div>
            <div class="banner-content-left">

            </div>
        </div>
<section class="content-section">
    
        <!--++++++++++++++++ about +++++++++++++++++++++++++ -->
        <div class="about-container">
            <div class="about-left">
<h2 class="about-head">Why a Graphic Partner is needed for your business?</h2>
<p class="about-text">
    When you persistently work with the same design team they will responsible for developing your all company's visual identity, the only things is company has to tell what is requirement for graphic design
    <br><br>
    They can execute future design projects without introducing inconsistencies to your visual identity. The more consistent your company's visual identity across all applications, the more successful your brand can be, because it resonates more effectively with customers that can reduce the amount spent on advertising and marketing, that make your brand standardize, impactful, easier to remember and recognize.  
    
    
</p>
            </div>
            <div class="about-right services-container">
                    <!-- <h2 class="about-head">Services</h2> -->
                    <!-- <ul class="about-ul">
                        <li class="about-li" id="graphic-btn" > <a >Graphic Designing </a></li>
                        <li class="about-li" id="productography-btn"> <a >Productography </a></li>
                        <li class="about-li" id="web-btn"><a href="#">Web Designing & Development</a></li>
                        <li class="about-li" id="mobileapp-btn"><a href="#">Mobile App Development</a></li>
                        <li class="about-li" id="promotion-btn"><a href="#">online Media Promotion</a></li>

                    
                    </ul> -->
                    <div class="service-1-container service-card" id="service-1-container">
<svg version="1.2" baseProfile="tiny" id="graphics" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"x="50%" y="50%" viewBox="0 0 500 550" xml:space="preserve">
<g>
	<g>
		<path  d="M475.2,185.9c-14.9-35.1-42.6-62.4-78-76.7c-17.2-6.9-35.2-10.5-53.5-10.5c-19.3,0-37.8,3.8-54.8,10.8
			c-14.4-33.1-41.3-60.9-77.4-75.5c-17.2-6.9-35.2-10.5-53.5-10.5C99.4,23.6,47.4,58.7,25.4,113c-24,59.3-5.2,125.5,41.9,164.1
			c-0.4,0.9-0.8,1.8-1.2,2.8C36.6,352.9,72,436.4,145,465.9c17.2,6.9,35.2,10.5,53.5,10.5c58.6,0,110.6-35.1,132.6-89.4
			c0.4-0.9,0.8-1.9,1.1-2.8c3.8,0.3,7.6,0.5,11.3,0.5c58.6,0,110.6-35.1,132.6-89.4C490.5,259.9,490.1,221,475.2,185.9z
			 M271.2,210.3c-6-3.5-12.3-6.7-18.9-9.3c-6.7-2.7-13.5-4.9-20.4-6.5c9.5-22.5,25.2-41,44.6-53.9
			C281.4,163,280.1,187.2,271.2,210.3z M261.6,229.7c-9.3,15.5-21.9,28.4-36.5,38.1c-3.8-17.1-3.9-35.1,0.1-52.8
			c6.4,1.4,12.7,3.4,18.9,5.9C250.3,223.4,256.1,226.3,261.6,229.7z M45.4,121.1C64,74.9,108.2,45.1,158,45.1
			c15.6,0,30.9,3,45.4,8.9c31.1,12.6,54.1,36.6,66.2,65.2c-25.8,15.6-46.6,39.4-58.5,68.8c-0.4,0.9-0.8,1.9-1.1,2.8
			c-3.8-0.3-7.6-0.5-11.4-0.5c-50.1,0-95.4,25.7-121.2,67C40.1,224.4,25.6,170,45.4,121.1z M205.6,278.3
			c-14.8,6.3-30.9,9.7-47.7,9.7c-15.6,0-30.9-3-45.4-8.9c-6.2-2.5-12-5.4-17.5-8.8c21.7-36,60.7-58.4,103.8-58.4
			c1.7,0,3.4,0,5.2,0.1C199.1,234.5,199.9,257.1,205.6,278.3z M198.6,454.9c-15.6,0-30.9-3-45.5-8.9
			c-61.4-24.8-91.5-94.6-67.7-156.3c6,3.5,12.3,6.7,18.9,9.3c17.2,6.9,35.2,10.5,53.5,10.5c19.2,0,37.8-3.8,54.8-10.8
			c14.4,33.1,41.3,60.9,77.4,75.5c6.6,2.7,13.4,4.9,20.3,6.5C291.3,425.8,247.7,454.9,198.6,454.9z M317,360.1
			c-6.4-1.4-12.7-3.4-18.9-5.9c-31-12.6-54.1-36.6-66.2-65.2c18.9-11.4,35.1-27.3,47.1-46.5C311.7,271.4,326.9,316.6,317,360.1z
			 M456.2,287.2c-18.6,46.1-62.9,75.9-112.6,75.9c-1.7,0-3.4,0-5.1-0.1c11.1-52.5-8.4-106.6-49.2-140.1c0.4-0.9,0.8-1.8,1.2-2.8
			c12-29.8,13.3-61.3,5.6-90.2c14.8-6.3,30.9-9.7,47.7-9.7c15.6,0,30.9,3,45.4,8.9c30.1,12.2,53.6,35.3,66.3,65.2
			C468.1,224.1,468.3,257.1,456.2,287.2z"/>
	</g>
</g>
</svg>
<h2 class="custom-h2" id="graphics-headline">Graphics Designing</h2>
<p class="basic-text px12" id="graphics-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

</p>
                    </div>

                    <div class="service-2-container service-card" id="service-2-container">
<svg version="1.2" baseProfile="tiny" id="web" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 460" xml:space="preserve">
                       <g>
                           <g>
                               <g>
                                   <path  d="M104.1,247.6l74.1-38.2v11l-62.5,31.3v0.3l62.5,31.3v11l-74.1-38.2V247.6z"/>
                                   <path  d="M222.4,300.6l44.4-115.8h11l-44.7,115.8H222.4z"/>
                                   <path  d="M395.9,256.3l-74.1,38v-11l62.9-31.3v-0.3l-62.9-31.3v-11l74.1,37.9V256.3z"/>
                               </g>
                               <g>
                                   <path  d="M452.4,393H47.6c-22.5,0-40.8-18.3-40.8-40.8V142.8c0-22.5,18.3-40.8,40.8-40.8h404.9
                                       c22.5,0,40.8,18.3,40.8,40.8v209.4C493.2,374.7,474.9,393,452.4,393z M47.6,115.9c-14.9,0-26.9,12.1-26.9,26.9v209.4
                                       c0,14.9,12.1,26.9,26.9,26.9h404.9c14.9,0,26.9-12.1,26.9-26.9V142.8c0-14.9-12.1-26.9-26.9-26.9H47.6z"/>
                               </g>
                           </g>
                           <g>
                               <rect x="26.2" y="143.9"  width="440.3" height="13.9"/>
                           </g>
                           <g>
                               <circle  cx="415.7" cy="130" r="5.4"/>
                           </g>
                           <g>
                               <circle  cx="432.6" cy="130" r="5.4"/>
                           </g>
                           <g>
                               <circle  cx="450.1" cy="130" r="5.4"/>
                           </g>
                       </g>
</svg>

<h2 class="custom-h2" id="web-headline">Web Designing</h2>
<p class="basic-text px12" id="web-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

</p>

                    </div>

                    <div class="service-3-container service-card" id="service-3-container">
<svg version="1.2" baseProfile="tiny" id="app" class="svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
                       <g>
                           <g>
                               <g>
                                   <path  d="M73.4,249.8c12.5,0,14.3-7,14.5-13.2c0-5-0.7-10-1.4-14.8c-0.7-5.2-1.4-10.2-1.4-15
                                       c0-16.4,10.9-23.4,26.1-23.4h3.6v9.8h-3c-10.5,0.2-14.3,5.7-14.3,15.4c0,4.1,0.7,8.4,1.3,12.7c0.7,4.5,1.4,8.8,1.4,13.6
                                       c0.2,11.4-5,17.2-13,19.3v0.4c8,2.1,13,8,13,19.5c0,4.8-0.7,9.3-1.4,13.8c-0.5,4.3-1.3,8.6-1.3,12.9c0,10,4.3,15.4,14.3,15.5h3
                                       v9.8h-3.8c-14.6,0-25.9-6.4-25.9-24.5c0-4.8,0.7-9.8,1.6-14.7c0.5-5,1.3-9.8,1.3-14.5c0-5.7-1.8-13.4-14.5-13.4V249.8z"/>
                               </g>
                               <g>
                                   <path  d="M392.1,258.9c-12.5,0-14.3,7.7-14.5,13.4c0,4.6,0.7,9.5,1.4,14.5c0.7,4.8,1.4,9.8,1.4,14.7
                                       c0,18-11.3,24.5-25.9,24.5h-3.8v-9.8h3c10-0.2,14.3-5.5,14.3-15.5c0-4.3-0.7-8.6-1.2-12.9c-0.7-4.5-1.4-8.9-1.4-13.8
                                       c-0.2-11.4,5-17.3,13-19.5v-0.4c-8-2.1-13-7.9-13-19.3c0-4.8,0.7-9.1,1.4-13.6c0.5-4.3,1.2-8.6,1.2-12.7
                                       c0-9.6-3.7-15.2-14.3-15.4h-3v-9.8h3.6c15.2,0,26.1,7,26.1,23.4c0,4.8-0.7,9.8-1.4,15c-0.7,4.8-1.4,9.8-1.4,14.8
                                       c0,6.3,1.8,13.2,14.5,13.2V258.9z"/>
                               </g>
                           </g>
                           <g>
                               <g>
                                   <path  d="M299,443.9H164.7c-21.6,0-39.1-17.5-39.1-39.1V110.4c0-21.6,17.5-39.1,39.1-39.1H299
                                       c21.6,0,39.1,17.5,39.1,39.1v294.4C338.1,426.4,320.5,443.9,299,443.9z M164.7,89.2c-11.7,0-21.1,9.5-21.1,21.1v294.4
                                       c0,11.7,9.5,21.1,21.1,21.1H299c11.7,0,21.1-9.5,21.1-21.1V110.4c0-11.7-9.5-21.1-21.1-21.1H164.7z"/>
                               </g>
                           </g>
                       </g>
                       <g>
                           <circle cx="231.8" cy="403.1" r="16.5"/>
                       </g>
                       <g>
                           <rect x="200.8" y="98.8"  width="53.4" height="6"/>
                       </g>
</svg>
                       

<h2 class="custom-h2" id="app-headline">App Development</h2>
<p class="basic-text px12" id="app-text">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

</p>
                    </div>
<script>
$(document).ready(function () {
   $(".service-1-container").mouseover(function () {
      $("#graphics,  #graphics-headline, #graphics-text").css('fill', '#F5A22A' ) ;
      $("#graphics-headline").css( 'color' , '#F5A22A') ;      
      
   }) ;

   $(".service-1-container").mouseout(function () {
    
    $("#graphics").css('fill', '#Fff') ;
    $("#graphics-headline").css( 'color' , '#Fff') ;  
   }) ;

   $(".service-2-container").mouseover(function () {
    $("#web").css('fill', '#F5A22A' ) ;
      $("#web-headline").css( 'color' , '#F5A22A') ;      
      
   }) ;

   $(".service-2-container").mouseout(function () {
    $("#web").css('fill', '#Fff') ;
    $("#web-headline").css( 'color' , '#Fff') ;  
   }) ;

   $(".service-3-container").mouseover(function () {
    $("#app").css('fill', '#F5A22A' ) ;
      $("#app-headline").css( 'color' , '#F5A22A') ;      
      
   }) ;

   $(".service-3-container").mouseout(function () {
    $("#app").css('fill', '#Fff') ;
    $("#app-headline").css( 'color' , '#Fff') ;  
   }) ;

   $(".service-card").mousedown(function () {
    $(".custom-h2", this).css("transform","scale(0.95)");
   })

   $(".service-card").mouseup(function () {
    $(".custom-h2", this).css("transform","scale(1)");
   })
});
</script>

            </div>
        </div>


        <!--+++++++++++++++++ Recent Work ++++++++++++++++-->
        <div class="recent">

      
            <h2 class="about-head">Recent Work</h2>
            <?php

include  "connection.php";
$image = mysqli_query($connect,"SELECT * FROM gallery ORDER BY id DESC LIMIT 6");
while($row = mysqli_fetch_array($image)){

    $img=$row['image'];
 
echo " <div class='img-2'> <img class='recent-work-image' src='portfolio/$img'></div>";
}

?>
<!--             
            <div class="img-2">
                <img  class="recent-work-image" src="images/work/2.jpg" alt="">
            </div>
            <div class="img-2">
                <img class="recent-work-image" src="images/work/3.jpg" alt="">
            </div>
            <div class="img-2">
                <img class="recent-work-image" src="images/work/4.jpg" alt="">
            </div>
            <div class="img-2">
                <img  class="recent-work-image" src="images/work/5.jpg" alt="">
            </div>
            <div class="img-2">
                <img class="recent-work-image" src="images/work/6.jpg" alt="">
            </div> -->
            
            <br>
            <br>
<button class="load-more-btn">
    <a href="work.php">Load More</a>
</button>
        </div>

<!-- ++++++++++++++++++++++++ Partners +++++++++++++++++++++ -->
<div class="partner-container"> 
<h1 class="about-head" style="text-align:center;">Partners</h1>
</div>


    </section>

    <!--++++++++++++++++++++++++++++++++ Contact ++++++++++++++++++++++++++++-->
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
                    <li class="contect-li"><a href="Licence.php">Aggrement</a></li>
                    <li class="contect-li"><a href="terms.php" >Terms</a></li>
                    <li class="contect-li"><a href="policy.php  ">Privacy Policy</a></li>
                    

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