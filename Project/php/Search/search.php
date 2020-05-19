<?php 
    session_start();
    $isTouch = isset($_SESSION['uid']);
    
    if(!$isTouch=='1'){
        header('Location: ../../homepage.html');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image:url('./house.jpg');background-repeat: no-repeat;background-size: 100%;">
    <h1 style="padding-left: 45%">Search your home</h1>
    <div class="container" >
        <form class="container center_div well form-horizontal" style="background-color:rgba(0, 0, 0, 0.5);font-weight:bold;color:white;" action="../search.php" method="POST" >
            
            <div class="form-group">
                <label class="col-md-3 control-label">Area</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="area" name="area" placeholder="Area" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">City</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="city" name="city" placeholder="City" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">BHK</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <input type="radio" value = "1bhk" name= "bhk" required>One BHK
                        <input type="radio" value = "2bhk" name= "bhk" >Two BHK
                        <input type="radio" value = "3bhk" name= "bhk" >Three BHK
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Method</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <input type="radio" value = "Rent" name= "opt" required>Rent
                        <input type="radio" value = "Sell" name= "opt" >Buy
                        <input type="radio" value = "Both" name= "opt" >Either one
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Your Maximum Rate</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="rate" name="rate" placeholder="Rate (Rent/month if input is Rent)" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <button style="margin-left: 470px;margin-top:40px;border-radius: 10%;color:black;width: 30%;overflow: hidden;">
                    Search
                </button>
            </div>
            
        </form>           
    </div>
</body>
</html>