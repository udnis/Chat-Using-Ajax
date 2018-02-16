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
$name2 = $_GET['misa'];

$conn = mysqli_connect('localhost','root','','chats');
if (!$conn) {
    die('Could not connect: ' . mysqli_error($con));
}


$sql="INSERT INTO udapp (message) VALUES ('$name2')";
$conn->query($sql);
$sql="SELECT message FROM udapp ";
$result = $conn->query($sql);

if (1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["message"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

?>

</body>
</html>