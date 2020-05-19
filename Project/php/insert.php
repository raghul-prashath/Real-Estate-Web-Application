<?php
	$con= mysqli_connect('127.0.0.1','root','','myrp');
	if(!$con)
	{
		echo 'error';
	}
	
    $Uid=$_POST['userid'];
    $Hid=$_POST['houseid'];
    $Name=$_POST['name'];
    $Add1=$_POST['add1'];
    $Add2=$_POST['add2'];
    $Area=$_POST['area'];
    $City=$_POST['city'];
    $State=$_POST['state'];
    $Pcode=$_POST['pcode'];
    $Landmark=$_POST['landmark']; 
    $BHK=$_POST['bhk'];
    $Option=$_POST['opt'];
    $Wa=$_POST['yn'];
    $Mcost=$_POST['mtcost'];
    $Age=$_POST['age'];
    $Rate=$_POST['rate'];
    $Sqft=$_POST['sqft'];
    $Info=$_POST['info'];

    $sql="CALL `checkHid`('$Hid');";
    if($res= mysqli_query($con,$sql)){
            if(mysqli_num_rows($res) == 0)
            {
				mysqli_close($con);
				$con1= mysqli_connect('127.0.0.1','root','','myrp');
                $sql3="CALL `regHouse`('$Uid','$Hid','$Name','$Add1','$Add2','$Area','$City','$State','$Pcode','$Landmark','$BHK','$Option','$Wa','$Mcost','$Age','$Rate','$Sqft','$Info');";
				$res = mysqli_query($con1,$sql3);
				echo    "<script>
						window.location.href='./Main/main.php';
						alert('Successfully Registered !');
						</script>";
            }
    }
    echo    "<script>
            window.location.href='./Houseregister/hreg.php';
            alert('House Id not available ! Click back '<-' to get back data !');
            </script>";
    
?>