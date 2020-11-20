<!DOCTYPE html>
<html lang="en-US">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>zixControl</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/icons.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="css/lightcase.css">
      <!-- CUSTOM STYLE -->      
      <link rel="stylesheet" href="css/template-style.css">
      <link href="https://fonts.googleapis.com/css?family=Barlow:100,300,400,700,800&amp;subset=latin-ext" rel="stylesheet">  
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script> 
      <script type="text/javascript" src="js/validation.js"></script>    
   </head>
   
   <!--
    You can change the color scheme of the page. Just change the class of the <body> tag. 
    You can use this class: "primary-color-white", "primary-color-yellow", "primary-color-red", "primary-color-orange", "primary-color-pink", "primary-color-purple", "primary-color-blue", "primary-color-light-blue", "primary-color-aqua", "primary-color-green", "primary-color-dark" 
    -->
    
    <!--
    Each element is able to have its own background or text color. Just change the class of the element.  
    You can use this class: 
    "background-white", "background-yellow", "background-red", "background-orange", "background-pink", "background-purple", "background-blue", "background-light-blue", "background-aqua", "background-green", "background-grey", "background-sand",  "background-primary" 
    "text-white", "text-yellow", "text-red", "text-orange", "text-pink", "text-purple", "text-blue", "text-light-blue", "text-aqua", "text-green", "text-primary"
    -->
    
    <!-- 
    If you want animated elements after scroll, add class "animated-element" or "animated-element slow" (for slower animation) to the elements.
    -->
    
    <!-- 
    If you want the hover zoom animation effect, wrapp the element to <div class="hover-zoom"> ... </div>
   -->
   <body class="size-1520 primary-color-red" data-image-src="img/background-02.jpg">
      <!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
      <div id="page-overlay" class="background-dark"></div>
      
      <!-- HEADER -->
      <header class="grid">
        <!-- Top Navigation -->

        <nav class="s-12 grid background-none background-primary-hightlight">
           <!-- logo -->
           <a href="/" class="m-12 l-3 padding-2x logo">
              <img src="img/logo.svg">
           </a>
           <div class="top-nav s-12 l-9">
              <ul class="top-ul right chevron">
                    <li><a href="/">Home</a></li>
                    <li><a href="/system">Sistema</a></li>
                    <li>
                        <a>Soluciones</a>
                        <ul>
                            <!-- <li><a href="/solutions#header01">Cabezales</a></li> -->
                            <li><a href="/solutions">KNX</a></li>
                            <li><a href="/solutions">Sonoff</a></li>
                            <li><a href="/solutions">Otros</a></li>
                        </ul>
                    </li>
                    <li><a href="/faq">FAQ</a></li>
                    <li><a href="/contact">Contacto</a></li>  
                       
              </ul>
           </div>
        </nav>
      </header>
      
      <!-- MAIN -->
      <main role="main">    
        @yield('content')
      </main>
       
      <!-- FOOTER -->
      <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
        <div class="s-12 l-3 m-row-3 margin-bottom background-image" style="background-image:url(img/img-04.jpg)"></div>
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Who We Are?</h2>
           <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy.</p>
        </div>
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Where We Are?</h2>
           <img class="full-img" src="img/map.svg" alt=""/>
        </div>
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Contact Us</h2>
           <p><b class="text-primary margin-right-10">P</b> 0800 4521 800 50</p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:contact@sampledomain.com">contact@sampledomain.com</a></p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:office@sampledomain.com">office@sampledomain.com</a></p>
        </div>
        
        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
          <p class="text-size-12">Copyright 2019, Vision Design - graphic zoo</p>
          <p class="text-size-12">All images have been purchased from Bigstock. Do not use the images in your website.</p>
          <p><a class="text-size-12 text-primary-hover" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a></p>
        </div>
      </footer>

      <script type="text/javascript" src="js/responsee.js"></script>
      <script type="text/javascript" src="js/plugins.min.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
      <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
      <script type="text/javascript" src="js/template-scripts.js"></script>

      <!-- <script>
         $(document).ready(function(){
            $("#logo").click(function(){
               $("#Mindex").show();
               $("#Msistem").hide();
               $("#Msolutions").hide();
               $("#Mfaq").hide();
               $('#Lindex').addClass('active-item');
               $('#Lsistem').removeClass('active-item');
               $('#Lsolutions').removeClass('active-item');
               $('#Lfaq').removeClass('active-item');
            });
            $("#index").click(function(){
               $("#Mindex").show();
               $("#Msistem").hide();
               $("#Msolutions").hide();
               $("#Mfaq").hide();
               $("#Lindex").addClass('active-item');
               $('#Lsistem').removeClass('active-item');
               $('#Lsolutions').removeClass('active-item');
               $('#Lfaq').removeClass('active-item');
            });
            $("#sistem").click(function(){
               $("#Mindex").hide();
               $("#Msistem").show();
               $("#Msolutions").hide();
               $("#Mfaq").hide();
               $('#Lindex').removeClass('active-item');
               $('#Lsistem').addClass('active-item');
               $('#Lsolutions').removeClass('active-item');
               $('#Lfaq').removeClass('active-item');
            });
            $("#solutions").click(function(){
               $("#Mindex").hide();
               $("#Msistem").hide();
               $("#Msolutions").show();
               $("#Mfaq").hide();
               $('#Lindex').removeClass('active-item');
               $('#Lsistem').removeClass('active-item');
               $('#Lsolutions').addClass('active-item');
               $('#Lfaq').removeClass('active-item');
            });
            $("#faq").click(function(){
               $("#Mindex").hide();
               $("#Msistem").hide();
               $("#Msolutions").hide();
               $("#Mfaq").show();
               $('#Lindex').removeClass('active-item');
               $('#Lsistem').removeClass('active-item');
               $('#Lsolutions').removeClass('active-item');
               $('#Lfaq').addClass('active-item');
            });
            $("#contact").click(function(){
               $("#Mindex").hide();
               $("#Msistem").hide();
               $("#Msolutions").hide();
               $("#Mfaq").hide();
               $("#Mcontact").hide();
               $('#Lindex').removeClass('active-item');
               $('#Lsistem').removeClass('active-item');
               $('#Lsolutions').removeClass('active-item');
               $('#Lfaq').addClass('active-item');
               $('#Lcontactfaq').addClass('active-item');
            });
         });
      </script> -->
      

      
   </body>
</html>