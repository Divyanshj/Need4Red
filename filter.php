<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $BGROUP=$_POST['bgroup'];

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "blood_bank";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if (!$conn){
    die("Sorry we failed to connect : " . mysqli_connect_error());
  }
  else{
    $sql = "SELECT * FROM `donors` WHERE `Blood Group` = '{$BGROUP}'";
    $mysqli_result = mysqli_query($conn,$sql);
    $num=mysqli_num_rows($mysqli_result);

    $count=1;
    if ($num>0){
      echo "<h1>{$BGROUP} &nbsp; BLOOD &nbsp; DONORS</h1>";
      while($row = mysqli_fetch_assoc($mysqli_result)){
        echo "<h2>{$count}</h2>";
        echo "<p><span> NAME </span> : {$row['Name']}</p>";
        echo "<p><span> ADDRESS </span> : {$row['Address']}</p>";
        echo "<p><span> CONTACT </span> : {$row['Contact']}</p>";
        echo "<p><span> AGE </span> : {$row['Age']}</p>";
        echo "<p><span> ANY ALLERGIES </span> : {$row['Any Allergies']}</p>";
        echo "<p><span> BLOOD GROUP </span> : {$row['Blood Group']}</p>";
        echo "<hr />";
        $count=$count+1;
      }
    }
    else{
      echo "<h3>There are no {$BGROUP} Blood Donors available !</h3>";


    }


  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&family=Raleway&display=swap" rel="stylesheet">
<style>
.ex{
  margin-top: 10vw;
}
body{
  text-align: center;
}
h2{
  text-align: left;
  margin-left: 32vw;
  color: rgb(235, 33, 19);
  margin-top: 4vw;
}
h1{
  font-family: 'Baloo Tammudu 2', cursive;
  font-size: 3.8vw;
  margin-top: 3vw;
  margin-bottom: 3vw;
  color: rgb(235, 33, 19);
  text-shadow: 2px 3px 3px black;
}
h3{
  font-family: 'Baloo Tammudu 2', cursive;
  font-size: 3.8vw;
  margin-top: 14vw;
  /* margin-bottom: 3vw; */
  color: rgb(235, 33, 19);
  text-shadow: 2px 3px 3px black;
  word-spacing: 1vw;
}
span{
  font-size: 1.5vw;
  font-weight: bold;
  color: rgb(252, 26, 10);

}
p{
  font-size: 1.5vw;
  margin-bottom: 1vw;
  font-family: 'Raleway', sans-serif;
}
hr{
  margin-top: 3vw;
  margin-bottom: 2vw;
  width: 45vw;
  height: 0.4vw;
  background-color: rgb(235, 33, 19);
  border-radius: 30vw;
  border: 2px black;
}
.btn{
  margin-top: 5vw;
  width: 11vw;
  margin-left: 0vw;
}
</style>
</head>
<body>
  <form action="Donors.php">
    <button type="submit" class="btn btn-danger">BACK</button>
  </form>
</body>
</html>
