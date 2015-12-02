<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "itse2302001007";
$password = "mjeKaAb3";

$q = intval($_GET['q']);

$con = mysqli_connect($servername, $username, $password, $db);
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"team");
$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Team Name</th>
<th>Best Player</th>
<th>Date Created</th>
<th>Website</th>
<th>City</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['teamname'] . "</td>";
    echo "<td>" . $row['bestplayer'] . "</td>";
    echo "<td>" . $row['reg_date'] . "</td>";
    echo "<td>" . $row['website'] . "</td>";
    echo "<td>" . $row['city'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>