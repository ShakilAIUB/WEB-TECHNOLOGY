<html>
<head>
	<title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  	<script src="js/bootstrap.min.js"></script>
  	<style type="text/css">
  		.error
  		{
  			color:red;
  		}
  	</style>
</head>

<body class="container">
<br>
<a href="index.php"><span class="btn btn-primary">Home</span></a> <br />
<?php
include("config.php");
//connect to db here

    $passErr = $cpassErr = $aiubidErr = $fullnameErr = $emailErr = $phoneErr = "";

    $password = $confirm_password = $aiubid = $fullname = $email = $phone = "";


    if($_SERVER["REQUEST_METHOD"]== "POST"){

    	if(empty($_POST["aiubid"])){
		$aiubidErr="ID is Required";
		}
		else{
			$aiubid = test_input($_POST["aiubid"]);
			if(!preg_match("/^[0-9]{2}-[0-9]{5}-[1-3]{1}$/", $aiubid)) {
				$aiubidErr = "Invalid AIUB ID Format: 00-00000-0";
			}
		}

		if(empty($_POST["fullname"])){
		$fullnameErr="Name is Required";
		}
		else{
			$fullname = test_input($_POST["fullname"]);
			
			if(!preg_match("/^([a-zA-Z' ]+)$/",$fullname)){
				$fullnameErr = "only Letters and white space";
			}
		}
		
		if(empty($_POST["email"])){
		$emailErr="Email is Required";}
		else{
			$email = test_input($_POST["email"]);
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$emailErr = "Invalid Email format";
			}
		}


    	if(empty($_POST["phone"])){
		$phoneErr="Phone Number is Required";}
		else{
			$phone = test_input($_POST["phone"]);
			
			if(!preg_match("/^[0-9]{11}$/", $phone)) {
				$phoneErr = "Invalid phone Number";
			}
		}

		if(empty($_POST["password"])){
		$passErr="Password is Required";}
		else{
			$password = test_input($_POST["password"]);
			$passlen=strlen($password);
			if ($passlen < 6) {
				$passErr="Password must be 6 character.";
			}	
		}

		if(empty($_POST["confirm_password"])){
		$cpassErr="Password is Required";}
		else{
			$confirm_password = test_input($_POST["confirm_password"]);
			if ($password != $confirm_password) {
				$cpassErr="Password is not Matched";
			}
    	}

   
   
	if(empty ($passErr || $cpassErr || $aiubidErr || $fullnameErr || $emailErr || $phoneErr )) {
		mysqli_query($conn,"INSERT INTO user(aiubid,fullname,email,phone,password) VALUES('$aiubid','$fullname','$email','$phone', md5('$password'))")
			or die("Could not execute the insert query.");
			
		echo "<hr><div class='alert alert-success'>Registration successfully done. Click Home for login Now</div>";
		echo "<br/><hr>";
		
	}
}

	function test_input($data)
	{
		$data=trim($data);
		$data= stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
?>

	<center><h2>New User Registration</h2><hr></center>
	<form name="form1" method="post" action="">
		<table class="table table-striped table-bordered table-condensed">
            <tr>
                <td>AIUB ID</td>
                <td><input type="text" name="aiubid" class="form-control" value="<?php echo $aiubid;?>">
  				<span class="error">* <?php echo $aiubidErr;?></span></td>

            </tr>
            <tr>
                <td>Full Name</td>
                <td><input type="text" name="fullname" class="form-control" value="<?php echo $fullname;?>">
  				<span class="error">* <?php echo $fullnameErr;?></span></td>
            </tr>
            <tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control"  value="<?php echo $email;?>">
  				<span class="error">* <?php echo $emailErr;?></span></td>
			</tr>
            <tr>
                <td>Phone Number</td>
                <td><input type="text" name="phone" class="form-control"  value="<?php echo $phone;?>">
  				<span class="error">* <?php echo $phoneErr;?></span></td>
            </tr>
			<tr> 
				<td>Password</td>
				<td><input type="password" name="password" class="form-control"  value="<?php echo $password;?>">
  				<span class="error">* <?php echo $passErr;?></span></td>
			</tr>
			<tr> 
				<td>Confirm Password</td>
				<td><input type="password" name="confirm_password" class="form-control"  value="<?php echo $confirm_password;?>">
  				<span class="error">* <?php echo $cpassErr;?></span></td>
			</tr>


			<tr>
            <td colspan="2"><br></td>
            </tr>
            <tr> 
				
				<td colspan="2"><input type="submit" class="btn btn-success btn-block btn-lg" name="submit" value="Register"></td>
			</tr>
		</table>
	</form>
</body>
</html>