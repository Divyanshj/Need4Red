
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.gstatic.com">
 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Tammudu+2:wght@700&family=Raleway&display=swap" rel="stylesheet">
<style>
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
form{
  text-align: center;
}
h3{
  margin-bottom: 1.2vw;
  font-weight: bold;
  font-size: 2vw;
}
.btn{
  display: block;
  margin-left: 47vw;
  margin-top: 1.2vw;
  margin-bottom: 6vw;
}
label{
  font-size: 1.6vw;
}
select{
  margin-left: 1vw;
  width: 15vw;
}

</style>
</head>
<body>
<form action="filter.php" method="POST">
  <h3>Filter By <span style="color: rgb(235, 33, 19); font-size:2vw;">Blood</span> Group :</h3>
  <label>Select Blood Group  </label>
  <select name="bgroup">
      <option value="volvo">Select</option>
      <option value="A+">A+</option>
      <option value="A-">A-</option>
      <option value="B+">B+</option>
      <option value="B-">B-</option>
      <option value="AB+">AB+</option>
      <option value="AB-">AB-</option>
      <option value="O+">O+</option>
      <option value="O-">O-</option>
  </select>
  <button type="submit" class="btn btn-danger">Search</button>
</form>
</body>
<?php
  $servername = "localhost:3307";
  $username = "root";
  $password = "";
  $database = "blood_bank";

  $conn = mysqli_connect($servername,$username,$password,$database);
  if (!$conn){
    die("Sorry we failed to connect : " . mysqli_connect_error());
  }
  else{
    $sql="SELECT * FROM `donors`";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    echo "<h1>ALL &nbsp; BLOOD &nbsp; DONORS</h1>";
    while($row = mysqli_fetch_assoc($result)){
      echo "<h2>{$row['S.No.']}</h2>";
      echo "<p><span> NAME </span> : {$row['Name']}</p>";
      echo "<p><span> ADDRESS </span> : {$row['Address']}</p>";
      echo "<p><span> CONTACT </span> : {$row['Contact']}</p>";
      echo "<p><span> AGE </span> : {$row['Age']}</p>";
      echo "<p><span> ANY ALLERGIES </span> : {$row['Any Allergies']}</p>";
      echo "<p><span> BLOOD GROUP </span> : {$row['Blood Group']}</p>";
      echo "<hr />";
    }
  }
?>
</html>
