<?php 
    session_start();
    $isTouch = isset($_SESSION['uid']);
    
    if(!$isTouch=='1'){
        header('Location: ../../homepage.html');
        exit;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Myrp Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
    </head>
    <body>
        <div class="intro">
            <form action="./signout.php" method="POST">
                <button class="logout">
                    Logout
                </button>
            </form>
            <div class="container">
                
                <div class="row">
                    <div class="col-md-12 ">
                        <h4>Welcome to MyRp Real Estate!</h4>
                        <h6>Don't wait to buy Real estate,<br>Buy Real estate and wait</h6>
                    </div>
                </div>
            </div>
        </div>


        <section id="about" class="page-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="service-item first-service">
                            <div class="icon">
                                <img src="img/register.png" alt="Italian Trulli" style="width:40px;height:50px;">
                            </div>
                            <h4><a href="../Houseregister/hreg.php">Register</a></h4>
                            <p>Do you wanna sell or rent your house?<br>Enter here and register</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item second-service">
                            <div class="icon">
                                <img src="img/search.png" alt="Italian Trulli" style="width:40px;height:50px;">
                            </div>
                            <h4><a href="../Search/search.php">Search</a></h4>
                            <p>Do you wanna buy or rent a house?<br>You are in the right place</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-item third-service">
                            <div class="icon">
                                <img src="img/delete.png" alt="Italian Trulli" style="width:40px;height:50px;">
                            </div>
                            <h4><a href="../Housedelete/delete.php">Delete</a></h4>
                            <p>Did your house got sold? <br>Delete your record or your account itself.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </body>
</html>