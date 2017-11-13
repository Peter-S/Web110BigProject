<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Pete's WEB110 portal</title>
        <meta name="description" content="SSC WEB 110 student portal for Pete ">
        <link rel="stylesheet" href="css/portal.css">
        <link rel="stylesheet" href="css/aia.css">
        <link rel="stylesheet" href="css/contact-form.css">
    </head>
    <body>
        <div class="wrapper">
        <header>
        <h1>Pete Soukup's Web Portal</h1>
        <nav class="topnav" id="myTopnav">
            <ul>
               <a href="index.html">Welcome</a>
               <a href="aia.html">Audience, Issues and Approach</a>
                <a href="big/index.html">Big</a>
                <a href="fl.html">Flowchart and Layout</a>
                <a href="fp/index.html">Final Project</a>
                <a href="contact.php">Contact Peter</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </ul>
        </nav>
        <header/>
            <h2>Contact Peter Soukup</h2>
            <?php include "includes/simple.php";?>
            <p class="clear-recaptcha"></p>   
            
    <footer>
        <small>&copy; 2017, Pete Soukup, All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small>  
    </footer>
  
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
            
            