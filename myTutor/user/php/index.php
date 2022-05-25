<?php 

    session_start();
    if (!isset($_SESSION['sessionid'])) {
        echo "<script>alert('Session is not available Please login');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com.ajax.libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../js/menu.js" defer></script>
    <title>MyTutor</title>
</head>

<body>
    <div class="w3-sidebar w3-bar-block" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <div class="w3-card w3-container w3-padding w3-center" style="height: 200px;width=200px"></div>\
    </div>    

    <div class="w3-cyan">
        <button class="w3-button w3-cyan w3-xlarge" onclick="w3_open()">☰</button>
        <div class="w3-container">
            <h3>My Tutor</h3>
        </div>
    </div>

    <footer class="w3-footer w3-center w3-cyan w3-bottom">
        <p>copyright mytutor</p>
    </footer> 

</body>

</html>