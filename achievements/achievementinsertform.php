<html>
<head>
<style>
.button4 {
    background-color:  #3e6f89 ;
    border: none;
    color: white;
    padding: 10px 25px; 
    padding-left:20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    margin-left:30px;
    cursor: pointer;
}

.container1 {
  width: 450px;
  padding-left:100px;
}
.container {
  width: 350px;
  padding-right:150px;
  
}
.container1 input {
  width: 100%;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
body {
   background-image: url("/sportpics/athletebackground.jpeg");
   background-size: cover;
}
</style>
</head>
<body>
<div>
<h1><center>Insert Achievement Details</center></h1>
<div style="float:left" class="container1">
<h2>Insert Individual Achievement</h2>
<form action="" method="post" style="width:350px">

Name: <input type="text" name="name" /><br><br>

Game: <input type="text" name="game" /><br><br>

Represented: <input type="text" name="represented" /><br><br>

Venue:<input type="text" name="venue" /><br><br>

Year:<input type="text" name="year" /><br><br>

Result: <input type="text" name="result" /><br><br>

<center><button class="button4" name="submit" > Submit</button>
<button class="button4" type="reset" value="Reset">Reset</button></center>

</form>
</div>
<div style="float:right" class="container">
<h2>Insert Team Achievement</h2>
<form action="" method="post">

Game: <input type="text" name="game" /><br><br>

Represented: <input type="text" name="represented" /><br><br>

Venue:<input type="text" name="venue" /><br><br>

Year:<input type="text" name="year" /><br><br>

Result: <input type="text" name="result" /><br><br>

<center><button class="button4" name="submit1" > Submit</button>
<button class="button4" type="reset" value="Reset">Reset</button></center>
</form>
</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "bhavya444";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO individual (name,game,represented,venue,year,result)
VALUES ('".$_POST["name"]."','".$_POST["game"]."','".$_POST["represented"]."','".$_POST["venue"]."','".$_POST["year"]."','".$_POST["result"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
<?php
if(isset($_POST["submit1"])){
$servername = "localhost";
$username = "root";
$password = "bhavya444";
$dbname = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO team (game,represented,venue,year,result)
VALUES ('".$_POST["game"]."','".$_POST["represented"]."','".$_POST["venue"]."','".$_POST["year"]."','".$_POST["result"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>
