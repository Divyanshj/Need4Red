<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){

  $NAME=$_POST['name'];
  $ADDRESS=$_POST['address'];
  $CONTACT=$_POST['contact'];
  $AGE=$_POST['age'];
  $ALLERGY=$_POST['allergy'];
  $GENDER=$_POST['gender'];
  $BGROUP=$_POST['blood'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "blood_bank";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if (!$conn){
    die("Sorry we failed to connect : " . mysqli_connect_error());
  }
  else{
    $sql = "INSERT INTO `donors` (`S.No.`, `Name`, `Address`, `Contact`, `Age`, `Any Allergies`, `Gender`, `Blood Group`) VALUES (NULL, '$NAME', '$ADDRESS', '$CONTACT', '$AGE', '$ALLERGY', '$GENDER', '$BGROUP')";
    $result = mysqli_query($conn,$sql);
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
	<style>
	header{

	}
	body{
		background: url(images/download.jpg);
		background-size: cover;
		font-family: 'Titillium Web', sans-serif;
		text-shadow: 2px 3px 3px black;
	}
	.title h1{
		margin-top:5%;
		font-size: 47px;
		color: #EF1515;
		opacity: 1;
		margin-left: 8%;
	}


	#btn1{
		font-family: 'Titillium Web', sans-serif;
		margin-left: 8%;
		margin-top: 2.5%;
		float: left;
		font-size: 25px;
		border-radius: 5px;
		text-align: center;
		width: 200px;
		border:1px solid #F2F1F1;
		background-color: #6C6A6A;
		padding:10px;
		color: white;
		list-style: none;
		text-decoration: none;
	}#btn1:hover{
		background-color: #393131;
		transition: 0.5s ease-in;
	}
	#btn2:hover{
		background-color: #393131;
		transition: 0.5s ease-in;
	}
	#btn2{
		order:1px solid red;
		font-family: 'Titillium Web', sans-serif;
		text-decoration: none;
		list-style: none;
		color: white;
		margin-left: 3%;
		margin-top: 2.5%;
		float: left;
		font-size: 25px;
		border-radius: 5px;
		text-align: center;
		width: 200px;
		border:1px solid #F2F1F1;
		background-color: #6C6A6A;
		padding:10px;
	}
	#btn2:after{
		clear: both;
		content: "";
		display: block;
	}
	#btn1:after{
		display: block;
		clear: both;
	}
	.text{
		display: block;
	}
</style>
</head>
<body>
	<header>
		<div class="logo">
		</div>
			<div class="title">
				<strong><h1>Welcome to <br />Blood Donors<br /> Management System</h1></strong>
				<a href="Reg.php" id="btn1">Register As Donor</a>
				<a href="Donors.php" id="btn2">Find A donor</a>
			</div>
	</header>
</body>
</html>
