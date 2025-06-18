<?php
include('condb.php');
header('Content-Type: application/json');

$sql = "SELECT * FROM member";
$result = mysqli_query($con, $sql);

$members = [];
while ($row = mysqli_fetch_assoc($result)) {
    $members[] = $row;
}

echo json_encode($members);
