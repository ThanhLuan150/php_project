<?php
//lay du lieu id cần xóa
$id= $_GET['id'];
//echo $id;
// ket noi
require_once '../connect.php';
// cau lenh sql
$delete_sql = "DELETE FROM lienhe WHERE id_lienhe=$id";
mysqli_query($conn, $delete_sql);
//echo "<h1> xoa thanh cong </h1>";
// tro ve trang liet ke
header("location: contact.php");
?>