<!DOCTYPE html>
<html>
    <head>
        <title>Pete's BIG Website</title>
        <meta name="description" content="SSC Big web site for Pete "/>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width"/>
        <meta name="robots" content="noindex,nofollow"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/> 
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/big.css"/>
        <link rel="stylesheet" href="css/nav.css"/>
        <link rel="stylesheet" href="css/contact-form.css"/>
    </head>
    <body>
        <div class="wrapper">
        <header>
    
        <h1>Pete Soukup's Web Development Examples</h1>
<nav id="cssmenu">
  <ul>
     <li>
         <a href="../index.html">
             <span>
                 <i class="fa fa-fw fa-home"></i> WEB110
             </span>
         </a>
      </li>
    <li>
    </li>
     <li><a href="index.html"><span><i class="fa fa-fw fa-home"></i> Main Page</span></a></li>
     <li><a href="accessibility.html"><span>Accessibility</span></a></li>
     <li><a href="htmlelements.html"><span>HTML Elements</span></a></li>
     <li><a href="smo.html"><span>SMO</span></a></li>
     <li><a href="gallery.html"><span>Image Gallery</span></a></li>
     <li><a href="#"><span><i class="fa fa-fw fa-bars"></i> Google Tools</span></a>
        <ul>
           <li><a href="calendar.html"><span><i class="fa fa-fw fa-calendar"></i> Calendar</span></a></li>
           <li><a href="map.html"><span><i class="fa fa-fw fa-map-o"></i> Map</span></a></li>
           <li><a href="seo.html"><span><i class="fa fa-fw fa-video-camera"></i> SEO (YouTube)</span></a></li>
        </ul>
     </li>
     <li><a href="contact.php"><span><i class="fa fa-fw fa-file-text-o"></i> Contact Pete</span></a></li>
  </ul>
    </nav>
        </header>
            <h2>Contact Peter Soukup</h2>
            <?php include "includes/multiple.php";?>
            <p class="clear-recaptcha"></p>
            
    <footer>
        <small>&copy; 2017, Pete Soukup, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small>  
    </footer>
        </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
      </script>
    </body>
</html>

            
            