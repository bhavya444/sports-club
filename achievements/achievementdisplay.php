
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
<h1><center> Individual Achievements</center></h1>
<?php
$con=mysqli_connect("localhost","root","bhavya444","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM individual");

echo "<center><table border='2'  cellspacing='0'  width='700'>
<tr>
<th>name</th>
<th>game</th>
<th>represented</th>
<th>venue</th>
<th>date</th>
<th>result</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" ."<center>". $row['name'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['game'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['represented'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['venue'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['year'] . "</center>"."</td>";
echo "<td>" . "<center>".$row['result'] ."</center>". "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</div>
<div>
<h1><center> Team Achievements</center></h1>
<?php
$con=mysqli_connect("localhost","root","bhavya444","demo");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM team");

echo "<center><table border='2'  cellspacing='0'  width='700'>
<tr>
<th>game</th>
<th>represented</th>
<th>venue</th>
<th>year</th>
<th>result</th>
</tr></center>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" ."<center>". $row['game'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['represented'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['venue'] ."</center>". "</td>";
echo "<td>" ."<center>". $row['year'] . "</center>"."</td>";
echo "<td>" . "<center>".$row['result'] ."</center>". "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</div>


</body>
</html>











