<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "products";

// Create connection to database
$connect = mysqli_connect($servername, $username, $password, $db);

// Check connection status
if (!$connect) {
    die ("Connection Failed: " . mysqli_connect_error());
}

// Retrieve from database
$sql = 'SELECT id, firstname, dateadded FROM test';
$query = mysqli_query($connect, $sql);

?>

<!doctype html>
<html>
<head>
    <title>Hotels NG | First Task</title>
</head>
<body style="text-align:center; background-color:Red;">

<marquee><h1>Hotels NG First Task by Destiny Ogbonna.(DSPARKLE)</h3></marquee>
<div style="margin-left:500px;">
<?php

echo '<table>
        <thead>
            <tr>
                <th>S/N</th>
                <th>NAME</th>               
                <th>DATE ADDED</th>
            </tr>
        </thead>
        <tbody>
      ';

while ($row = mysqli_fetch_array($query)) {
    echo '
    <tr>
        <td>' . $row['id'] . '</td>
        <td>' . $row['firstname'] . '</td>
        <td>' . $row['dateadded'], '</td>            
    </tr>';
}
echo '
    </tbody>
</table>';
?>
<div>
</body>
</html>