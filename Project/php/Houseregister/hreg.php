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
    <title>User Registration</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image: url('./House.jpg');background-repeat: no-repeat;background-size: 100%;">
    <h1 style="padding-left: 45%;color:white;">User Registration</h1>
    <div class="container" >
        <form class="container center_div well form-horizontal" style="background-color:rgba(0, 0, 0, 0.5);font-weight:bold;color:white;" action="../insert.php" method="POST" >
            <div class="form-group">
                <label class="col-md-3 control-label">User id</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" name="userid" readonly="readonly" class="form-control" required="true" value=<?php echo $_SESSION['uid']; ?> type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">House id</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="Houseid" name="houseid" placeholder="Unique House id" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">House Owner Name</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="fullName" name="name" placeholder="Full Name" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Address Line 1</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="addressLine1" name="add1" placeholder="Address Line 1" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Address Line 2</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="addressLine2" name="add2" placeholder="Address Line 2" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
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
                <label class="col-md-3 control-label">State/Province/Region</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="state" name="state" placeholder="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Postal Code/ZIP</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="postcode" name="pcode" placeholder="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Landmark</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="landmark" name="landmark" placeholder="Landmark" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">BHK</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <input type="radio" value = "1bhk"  name="bhk" required>One BHK
                        <input type="radio" value = "2bhk" name="bhk">Two BHK
                        <input type="radio" value = "3bhk" name="bhk">Three BHK
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">input</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <input type="radio" value = "Rent" name="opt" required>Rent
                        <input type="radio" value = "Sell" name="opt">Sell
                        <input type="radio" value = "Both" name="opt">Either one
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Water Availability</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group">
                        <input type="radio" value = "Yes" name="yn" required>Yes
                        <input type="radio" value = "No"  name="yn">No
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Maintainance Cost</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="mtcost" name="mtcost" placeholder="Maintainance Cost" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Age of House</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="age" name="age" placeholder="Age" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Your Rate</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="rate" name="rate" placeholder="Rate (Rent/month if choice was Rent)" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Square feet</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="sqft" name="sqft" placeholder="Sq.ft" class="form-control" required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Other info</label>
                <div class="col-xs-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="info" name="info" placeholder="Other Info" class="form-control " required="true" value="" type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <button style="margin-left: 470px;margin-top:40px;border-radius: 10%;color:black;width: 30%;overflow: hidden;">
                    Submit
                </button>
            </div>
            
        </form>           
    </div>
</body>
</html>