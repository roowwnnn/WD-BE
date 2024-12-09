<?php
session_start();


if (isset($_GET['islandID'])) {
$_SESSION['islandID'] = $_GET['islandID']; 
header("Location: ".$_SERVER['PHP_SELF']);
exit(); 
}

$islandID = $_SESSION['islandID'];

include('connect.php');

// Fetch the island data based on the selected island ID
$getislandDataQuery = "SELECT name, shortDescription, color FROM `islandsofpersonality` WHERE islandOfPersonalityID =
$islandID;";
$islandDataResult = executeQuery($getislandDataQuery);

while ($islandData = mysqli_fetch_assoc($islandDataResult)) {
$islandName = $islandData['name'];
$islandDescription = $islandData['shortDescription'];
$islandImage = $islandData['image'];
$color = $islandData['color'];
$colorarr = explode(',', $color);
}


$getislandContentQuery = "SELECT image, content FROM `islandcontents` WHERE islandOfPersonalityID = $islandID;";
$islandContentResult = executeQuery($getislandContentQuery);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gabriel | Islands of Personality | <?php echo $islandName ?></title>
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

<body style="background-color: #<?php echo $colorarr[0] ?>;">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-animate-right w3-top w3-text-light-grey w3-large"
        style="z-index:3;width:250px;font-weight:bold;display:none;right:0; " id="mySidebar">
        <a href="javascript:void()" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-32">CLOSE</a>
        <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-center w3-padding-16">HOME</a>
    
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-white w3-xlarge w3-padding-16">
        <p class="w3-left w3-padding">Gabriel's Memories</p>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"
        id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->
    <div class="w3-panel w3-center"
        style="padding:150px 16px; background-color:#<?php echo $colorarr[1] ?>; color:white;">
        <h1 class="w3-xlarge">Welcome To</h1>
        <h1 style="color: #<?php echo $colorarr[0] ?>;">My <?php echo $islandName ?>!</h1>
        <h6><?php echo $islandDescription ?></h6>

        <!-- Pagination -->
        <form method="GET">
            <div class="w3-center w3-padding-32">
                <div class="w3-bar" style="background-color:#59a694; border-radius: 20px;">
                    <button name="islandID" value="1" class="w3-bar-item w3-button w3-hover-yellow">Adventure
                        Island</button>
                    <button name="islandID" value="2" class="w3-bar-item w3-button w3-hover-sepia">Nostalgia
                        Island</button>
                    <button name="islandID" value="3" class="w3-bar-item w3-button w3-hover-blue">Family Island</button>
                </div>
            </div>
        </form>
    </div>
        <div class="w3-main w3-content" style="max-width:2000px;margin-top:83px;">

            <!-- Photo grid -->
            <div class="w3-row">
                <?php while ($islandContent = mysqli_fetch_assoc($islandContentResult)) { ?>
                    <div class="w3-half">
                        <img src="imgs/Islands/<?php echo $islandContent['image'] ?>" class="w3-hover-grayscale"
                            style="width:100%" onclick="onClick(this)" alt="<?php echo $islandContent['content'] ?>">
                    </div>
                <?php } ?>
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
        <footer class="w3-container w3-padding-64 w3-center w3-large"
            style="background-color: #<?php echo $colorarr[1] ?>; color: white;">
            <p>©2024, Ramos, Ron Gabriel P. | All Rights Reserved.</p>
        </footer>









</body>

<script>
    // Script to open and close sidebar
    function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
    }

    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

</script>

</html>