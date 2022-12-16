<?php





?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;
	 }
* {
	box-sizing: border-box;

}
ul li{
    color: #EF4422;
    font-size: 30px;
    font-weight: bold;
    list-style: none;
    display: block;
    text-decoration: none;

}
img{
	width: 20%;
	height: 25%;
	margin-left: 100px;
	margin-bottom: 14vw;
}


input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 26px;
    resize: vertical;
     background-color: #F3EFEE;

}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
		margin-top: 22px;
    margin-left: 36%;
    width: 30%;
}

input[type=submit]:hover {
    background-color: #670067;
}
.line1{
    width: 100%;
     border-top:  2px solid #D4C8C5;
}

.container {
    padding: 20px;
	display: inline-block;
    margin-left: 50px;
    margin-right: auto;
	margin-top:30px;
    width: 60%;


}
</style>
</head>
<body>


<div class="logo">
</div>
<div class=text">
    <ul>
        <li>REGISTRATION FORM</li><br><br>
        <a>Fill in the form below</a>
    </ul>
</div>
<p class="line1"></p>
<div class="container">
  <form action="index.php" method="post">
    <label >Name</label>
    <input type="text"  name="name" placeholder="Your name.." required>

    <label >Address</label>
    <input type="text"  name="address" placeholder="Your current address.." required>

     <label >Contact</label>
    <input type="text"  name="contact" placeholder="Your mobile number.." required>

    <label >Age</label>
    <input type="text"  name="age" placeholder="Your mobile number.." required>

    <label >Any Allergies</label><select name="allergy">
       <option value="volvo">Select</option>
       <option value="yes">Yes</option>
       <option value="no">No</option>
    </select>

     <label >Gender</label><select name="gender">
        <option value="volvo">Select</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select>

     <label>Blood Group</label>
    <select name="blood">
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
    <input type="submit" value="Submit">
  </form>



</div>
	<img src="data:image/jpeg;base64,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" />

</body>
</html>
