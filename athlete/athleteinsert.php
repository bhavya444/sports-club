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
  width: 350px;
}
.container1 input {
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
<center>
<div>
<h1>Insert Athlete Details</h1>
<div class="container1">
<form action="" method="post">

Name: <input type="text" name="name" /><br><br>

Age: <input type="text" name="age" /><br><br>

Address: <input type="text" name="address" /><br><br>

Contact:<input type="text" name="contact" /><br><br>

game:<input type="text" name="game" /><br><br>

achievements: <input type="text" name="achievements" /><br><br>

<center><button class="button4" name="submit" > Submit</button>
<button class="button4" type="reset" value="Reset">Reset</button></center>

</form>
</div>
</center>
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

$sql = "INSERT INTO athlete (name,age,address,contact,game,achievements)
VALUES ('".$_POST["name"]."','".$_POST["age"]."','".$_POST["address"]."','".$_POST["contact"]."','".$_POST["game"]."','".$_POST["achievements"]."')";

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
