<?php
    session_start();
    $con= mysqli_connect('127.0.0.1','root','','myrp');
    if(!$con)
    {
        echo 'error';
    }    
    $uid=$_POST['uid'];
    $upass=$_POST['upass'];
    $sql="CALL `signIn`('$uid','$upass')";

    if($res= mysqli_query($con,$sql))
	{
        if(mysqli_num_rows($res) == 1)
        {
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
            {
                $_SESSION['uid'] = $_POST['uid'];       
                if($_SESSION['uid']) 
                {
					echo    "<script>
							window.location.href='./Main/main.php';
							alert('Successfully Logged in !!!');
							</script>";
                }
            }
        }
    }
    echo    "<script>
            window.location.href='../Sign in/Sign in.html';
            alert('Login id / Password Wrong or Doesnt exist');
            </script>";
?>
    
