<?php
session_start(); 
if ( isset($_GET["adventure"])){
    $ID = 1;
    $_SESSION['islandID'] = $ID; 
    header("Location: islands.php");
}

if ( isset($_GET["nostalgia"])){
    $ID = 2;
    $_SESSION['islandID'] = $ID; 
    header("Location: islands.php");
}

if ( isset($_GET["family"])){
    $ID = 3;
    $_SESSION['islandID'] = $ID; 
    header("Location: islands.php");
}



?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gabriel | Core Memories</title>
    <link href="style.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="imgs/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        .w3-quarter img {
            margin-bottom: -6px;
            cursor: pointer
        }

        .w3-quarter img:hover {
            opacity: 0.6;
            transition: 0.3s
        }
    </style>
</head>

<body style="background-color: 	#e0b359;">



    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding"><b>Gabriel's Memories</b></span>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-panel w3-center" style="padding:150px 16px; background-color:#446eb6; color:white;">
        <h1 class="w3-xlarge">My</h1>
        <h1 style="color: 	#fdeb4c;">Core Memories</h1>
        <h6>Select an Island:</h6>

        <!-- Pagination -->
         <form method="GET">
         <div class="w3-center w3-padding-32">
            <div class="w3-bar" style="background-color:#59a694; border-radius: 20px;">
                <button name="adventure" class="w3-bar-item w3-button w3-hover-yellow">Adventure Island</button>
                <button name="nostalgia" class="w3-bar-item w3-button w3-hover-sepia">Nostalgia Island</button>
                <button name="family" class="w3-bar-item w3-button w3-hover-blue">Family Island</button>
            </div>
        </div>

         </form>
        
    </div>


    <div class="w3-main w3-content" style="max-width:2000px;margin-top:83px;">

        <!-- Photo grid -->
        <div class="w3-row">
            <div class="w3-half">
                <img src="imgs/Home/home (1).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (2).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (3).jpg" class="w3-hover-grayscale" style="width:100%">
            </div>
            <div class="w3-half">
                <img src="imgs/Home/home (4).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (5).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (6).jpg" class="w3-hover-grayscale" style="width:100%">
            </div>
            <div class="w3-half">
                <img src="imgs/Home/home (7).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (8).jpg" class="w3-hover-grayscale" style="width:100%">
                <img src="imgs/Home/home (9).jpg" class="w3-hover-grayscale" style="width:100%">
            </div>
           



        </div>



        <!-- Modal for full size images on click-->
        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
            </div>
        </div>




    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-large" style="background-color: #446eb6; color: white;">
        <p>©2024, Ramos, Ron Gabriel P. | All Rights Reserved</p>
    </footer>

</body>



</html>