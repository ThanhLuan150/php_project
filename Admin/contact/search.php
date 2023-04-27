<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
require_once '../connect.php';

if(isset($_GET['search']) && !empty($_GET['search'])){
  $search_id = $_GET['search'];
  $search_sql = "SELECT * FROM lienhe WHERE id_lienhe = $search_id";
  $result = mysqli_query($conn, $search_sql);

  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    // display search result
    echo "<table class='table'>
            <thead class='thead-dark'>
            <tr>
                        <th>ID</th>
                        <th>Nameuser</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Content</th>
                        <th>Function</th> 
                    </tr>
    </thead>
    <tbody>
            <tr>
            <td>".$row['id_lienhe']."</td>
            <td>".$row['nameuser']."</td>

            <td> ".$row['email']." </td>
            <td> ".$row['tieude']."</td>
            <td> ".$row['noidung']."</td>
            
            <td>
                  <a href='edit.php?id=".$row['id_lienhe']."' class='btn btn-success'>sửa</a>
                  <a onclick='return confirm(\"bạn có muốn xóa liên hệ này không\");' href='delete.php?id=".$row['id_lienhe']."' class='btn btn-danger'>xóa</a>
                </td>
        </tr> 
              </tr>
            </tbody>
          </table>";
  } else {
    echo "<p>No results found</p>";
  }
} else {
  echo "<p>Please enter an id to search</p>";
}
?> 
</body>
</html>