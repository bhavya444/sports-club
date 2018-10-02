
<html>

<head>
<style>
body {
   background-image: url("/sportpics/athletebackground.jpeg");
   background-size: cover;
}
</style>
</head>
<body>
<div>
<h1><center> Athlete Details</center></h1>
<?php
$con=mysqli_connect("localhost","root","bhavya444","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM athlete");

echo "<center><table border='2'  cellspacing='0'  width='700'>
<tr>
<th>name</th>
<th>age</th>
<th>address</th>
<th>contact</th>
<th>game</th>
<th>achievements</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" ."<center>". $row['name'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['age'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['address'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['contact'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['game'] . "</center>"."</td>";
echo "<td>" . "<center>".$row['achievements'] ."</center>". "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</div>
</body>
</html>











