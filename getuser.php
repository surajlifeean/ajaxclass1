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
$username = "root";
$password = "";
$phn_no=$_GET['q'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=testmybest", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
catch(PDOException $e)
    {
    $e->getMessage();
    }
    $sql = "SELECT * FROM password where phn_no like '".$q."%'";
$result = $conn->query($sql);
echo "<table>
<tr>
<th>PHONE NO.</th>
<th>PASSWORD</th>
</tr>";
    while($row = $result->fetch_assoc()) {
            echo "<tr>";
    echo "<td>" . $row['phn_no'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
$conn->close();
?>
</body>
</html>