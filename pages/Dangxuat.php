<?php
session_start();
// Hủy tất cả các biến session
session_unset();
// Hủy phiên đăng nhập
session_destroy();
// Đưa người dùng về trang đăng nhập
header("Location: Dangnhap.php");
exit;
?>