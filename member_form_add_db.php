<?php
include('condb.php');

// รับค่าจากฟอร์มแบบปลอดภัย
$m_user = mysqli_real_escape_string($con, $_POST["m_user"]);
$m_pass = password_hash($_POST["m_pass"], PASSWORD_DEFAULT);
$m_name = mysqli_real_escape_string($con, $_POST["m_name"]);
$m_email = mysqli_real_escape_string($con, $_POST["m_email"]);
$m_tel = mysqli_real_escape_string($con, $_POST["m_tel"]);
$m_address = mysqli_real_escape_string($con, $_POST["m_address"]);

// เพิ่มเข้าไปในฐานข้อมูล
$sql = "INSERT INTO tbl_member(m_user, m_pass, m_name, m_email, m_tel, m_address)
        VALUES('$m_user', '$m_pass', '$m_name', '$m_email', '$m_tel', '$m_address')";

$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error($con));

mysqli_close($con);

if($result){
    echo "<script type='text/javascript'>";
    echo "alert('เพิ่มข้อมูลเรียบร้อย');";
    echo "window.location = 'member.php'; ";
    echo "</script>";
} else {
    echo "<script type='text/javascript'>";
    echo "alert('Error back to register again');";
    echo "</script>";
}
?>
