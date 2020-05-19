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
    <title>Delete House Detail or Account</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body style="background-image: url('./house.jpg');background-repeat: no-repeat;background-size: 100%;">
    <h1 style="padding-left: 45%">Delete House</h1>
    <div class="container" >
        <form class="container center_div well form-horizontal" style="background-color:rgba(0, 0, 0, 0.5);font-weight:bold;color:white;" action="../delete.php" method="POST">
            <div class="form-group">
                <label class="col-md-3 control-label">User id</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="userid" name="userid" class="form-control" required="true" readonly="readonly" value=<?php echo $_SESSION['uid'];?> type="text"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="password" name="password" placeholder="Password" class="form-control" required="true" value="" type="password"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label">House ID</label>
                <div class="col-md-8 inputGroupContainer">
                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <input id="Houseid" name="houseid" placeholder="Houseid" class="form-control" value="None" type="text"></div>
                </div>
            </div>
            <input class="form-group" type="submit" name="btn_submit" value="Delete House" style="margin-top:25px;margin-left: 450px;color:black;"/>
            <input class="form-group" type="submit" name="btn_submit" value="Delete Account" style="color:black;margin-left:100px;">
        </form>           
    </div>
</body>
</html>