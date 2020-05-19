<?php
    session_start();
	$con= mysqli_connect('127.0.0.1','root','','myrp');
	if(!$con)
	{
		echo 'error';
	}
	$uname=$_POST['uname'];
	$uemail=$_POST['uemail'];
	$umobile=$_POST['unumber'];
	$upass=$_POST['upass'];
    $uid=$_POST['uid'];
	$sql="CALL `checkUid`('$uid');";
	if($res= mysqli_query($con,$sql)){
        if(mysqli_num_rows($res) == 0)
        {
			mysqli_close($con);
			$con1= mysqli_connect('127.0.0.1','root','','myrp');
			$sql="CALL `signUp`('$uname', '$uemail', '$umobile', '$upass', '$uid');";
			$res = mysqli_query($con1,$sql);
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$_SESSION['uid'] = $_POST['uid'];            
				if($_SESSION['uid']) {
					echo    "<script>
							window.location.href='./Main/main.php';
							alert('Successfully Registered !');
							</script>";
				}
			}   
        }
    }
	echo    "<script>
            window.location.href='../Register/register.html';
            alert('Id not available');
            </script>";
    
?>