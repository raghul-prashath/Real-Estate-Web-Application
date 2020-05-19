<?php
	$con= mysqli_connect('127.0.0.1','root','','myrp');
	if(!$con)
	{
		echo 'error';
    }
    
	$Uid=$_POST['userid'];
	$Upassword=$_POST['password'];
	$Hid=$_POST['houseid'];

	$sql="CALL `signIn`('$Uid', '$Upassword')";
    if($res= mysqli_query($con,$sql)){
        if(mysqli_num_rows($res) > 0)
        {
			mysqli_close($con);
			$con1= mysqli_connect('127.0.0.1','root','','myrp');
			if($_REQUEST['btn_submit']=="Delete House"){
				$sql="CALL `deleteHid`('$Hid')";
				if($res= mysqli_query($con1,$sql)){
				echo    "<script>
						window.location.href='./Main/main.php';
						alert('House Deleted !!!');
						</script>";
				}
			}
			else if($_REQUEST['btn_submit']=="Delete Account"){
				// Write your query here for deleting account
				$sql="CALL `deleteHUid`('$Uid');";
				if($res= mysqli_query($con1,$sql)){
					mysqli_close($con1);
					$con2= mysqli_connect('127.0.0.1','root','','myrp');
					$sql2="CALL `deleteUser`('$Uid')";
					if($res= mysqli_query($con2,$sql2)){
						echo    "<script>
								window.location.href='../Sign in/Sign in.html';
								alert('Account Deleted !!!');
								</script>";
					}
				}	
			}
		}
	}
	
	echo    "<script>
			window.location.href='./Housedelete/delete.php';
			alert('Login id / Password Wrong or Doesnt exist');
			</script>";
    
	
	
?>
