<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Search Results</title>
</head>
<body>
	<?php
		$con= mysqli_connect('127.0.0.1','root','','myrp');
		if(!$con)
		{
			echo 'error';
		}
		$Area=$_POST['area'];
		$City=$_POST['city'];
		$BHK=$_POST['bhk'];
		$Option=$_POST['opt'];
		$Rate=$_POST['rate'];
		$sql1="CALL `search`('$Area', '$City', '$BHK', '$Option', '$Rate')";
		if($res= mysqli_query($con,$sql1)){
			if (mysqli_num_rows($res)> 0) {
				echo '<h1 style="margin-left:18px;">Results:</h1><div class="row" style="padding-left:10px;">';
				while($row = mysqli_fetch_assoc($res)) {
					echo '<div class="col-sm-3"><div class="card"> <div class="card-body"> <h5 class="card-title">Owner Name:</h5> <h6 class="card-text">'.$row["Name"].'</h6><h5 class="card-title">Address:</h5><h6 class="card-text">'.$row["Add1"].',<br>'.$row["Add2"].',<br>'.$row["Area"].",<br>".$row["City"].",<br>".$row["State"]."-".$row["Pcode"].'.<br></h6><h5 class="card-title">Landmark:</h5><h6 class="card-text">'.$row["Landmark"].'.<br></h6><h5 class="card-title">BHK:<h6 class="card-text">'.$row["BHK"].'.<br></h6><h5 class="card-title">Rent/Sale/Both:<h6 class="card-text">'.$row["Option"].'.<br></h6><h5 class="card-title">Water Availability:<h6 class="card-text">'.$row["Wa"].'.<br></h6><h5 class="card-title">Maintanance Cost:</h5><h6 class="card-text">'.$row["Mcost"].'.<br></h6><h5 class="card-title">Age of House:</h5><h6 class="card-text">'.$row["Age"].'.<br></h6><h5 class="card-title">Rate of House:</h5><h6 class="card-text">'.$row["Rate"].'.<br></h6><h5 class="card-title">Sqft:</h5><h6 class="card-text">'.$row["Sqft"].'.<br></h6><h5 class="card-title">Other Info:</h5><h6 class="card-text">'.$row["Info"].'</h6>';
					echo '</div></div></div>';
				}
				
			}
		}
		mysqli_close($con);
		$con1= mysqli_connect('127.0.0.1','root','','myrp');
		$sql2="CALL `searchCityRateOpt`('$City', '$Rate', '$Option', '$Area', '$BHK')";
		if($res= mysqli_query($con1,$sql2)){
			if (mysqli_num_rows($res)> 0) {
				echo '<h1 style="margin-left:18px;">Results:</h1><div class="row" style="padding-left:10px;">';
				while($row = mysqli_fetch_assoc($res)) {
					echo '<div class="col-sm-3"><div class="card"> <div class="card-body"> <h5 class="card-title">Owner Name:</h5> <h6 class="card-text">'.$row["Name"].'</h6><h5 class="card-title">Address:</h5><h6 class="card-text">'.$row["Add1"].',<br>'.$row["Add2"].',<br>'.$row["Area"].",<br>".$row["City"].",<br>".$row["State"]."-".$row["Pcode"].'.<br></h6><h5 class="card-title">Landmark:</h5><h6 class="card-text">'.$row["Landmark"].'.<br></h6><h5 class="card-title">BHK:<h6 class="card-text">'.$row["BHK"].'.<br></h6><h5 class="card-title">Rent/Sale/Both:<h6 class="card-text">'.$row["Option"].'.<br></h6><h5 class="card-title">Water Availability:<h6 class="card-text">'.$row["Wa"].'.<br></h6><h5 class="card-title">Maintanance Cost:</h5><h6 class="card-text">'.$row["Mcost"].'.<br></h6><h5 class="card-title">Age of House:</h5><h6 class="card-text">'.$row["Age"].'.<br></h6><h5 class="card-title">Rate of House:</h5><h6 class="card-text">'.$row["Rate"].'.<br></h6><h5 class="card-title">Sqft:</h5><h6 class="card-text">'.$row["Sqft"].'.<br></h6><h5 class="card-title">Other Info:</h5><h6 class="card-text">'.$row["Info"].'</h6>';
					echo '</div></div></div>';
				}
			}
		}
		echo'</div>';	
	?>
</body>
</html>
