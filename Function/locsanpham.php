<?php
// Kết nối đến cơ sở dữ liệu
include('../database/ketnoidatabase.php');
// Kiểm tra kết nối
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

// Lấy thông tin từ form lọc sản phẩm
$category = $_POST["category"];
$price = $_POST["price"];
$sort = $_POST["sort"];

// Tạo câu truy vấn SQL dựa trên các điều kiện lọc
$sql = "SELECT * FROM products WHERE 1=1";

if (!empty($category)) {
  $sql .= " AND category='$category'";
}

if (!empty($price)) {
  $sql .= " AND price<=$price";
}

if (!empty($sort)) {
  $sql .= " ORDER BY $sort ASC";
}

// Thực hiện truy vấn SQL
$result = $conn->query($sql);

// Hiển thị sản phẩm đã lọc
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Product Name: " . $row["product_name"] . " - Category: " . $row["category"] . " - Price: " . $row["price"] . "<br>";
  }
} else {
  echo "Không tìm thấy sản phẩm nào.";
}

$conn->close();
?>