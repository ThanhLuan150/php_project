
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="../styles/home.css">
    <link rel="stylesheet" href="/bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <script src="/bootstrap-5.2.2-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-5.2.2-dist/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
   
    <?php
    include '../pages/header.php';
    ?>
    <div class="background">
        <div class="container">
            <br>
        <form method="GET" action="../Function/locsanpham.php">
                <select class="input" name="id_categories" id="categories">
                    <?php
                    // Kết nối đến cơ sở dữ liệu
                    include('../database/ketnoidatabase.php');
                    
                    // Truy vấn danh sách các danh mục
                    $sql = "SELECT * FROM categories";
                    $result = mysqli_query($mysqli, $sql);
                    
                    // Hiển thị danh sách các danh mục trong dropdown list
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['id_categories'] . '">' . $row['name_categories'] . '</option>';
                    }
                    
                    // Đóng kết nối
                    mysqli_close($mysqli);
                    ?>
            </select>
            <button class="button" type="submit">Lọc</button>
        </form>
        <?php
                // Kết nối tới cơ sở dữ liệu
                 include('../database/ketnoidatabase.php');

                // Lấy id_categories từ form submit lọc sản phẩm
                if (isset($_GET['id_categories'])) {
                    $id_categories = $_GET['id_categories'];

                    // Lọc sản phẩm từ cơ sở dữ liệu theo id_categories
                    $sql = "SELECT * FROM categories INNER JOIN clothes ON clothes.id_categories = categories.id_categories WHERE categories.id_categories = '$id_categories'";

                    $result = $mysqli->query($sql);

                    
                    // Hiển thị kết quả tìm kiếm
                    if ($result->num_rows > 0) {
                        // output data of each row
                    ?>
                        <br><br>
                        <div class="list_schools">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                    <div class="item">
                                        <div class="image11">
                                            <img class="img4" src="<?php echo $row["image"]; ?>" alt="">
                                        </div>
                                        <br>
                                        <div class="informationproduct">
                                            <p class="informationproductp1"><?php echo $row["name_clothes"]; ?></p>
                                            <p class="informationproductp2"><?php echo $row["rent_prices"]; ?></p>
                                            <p class="informationproductp2"><?php echo $row["sex"]; ?></p>
                                        <div class="button111">
                                            <button class="bt2"><a class="a1"  href="../pages/Chitietsanpham.php?id=<?php echo $row["id_clothes"];?>">Detail</a></button>  
                                            <button class="bt2"><a class="a1" href="orders.php?id=<?php echo $row["id_clothes"];?>">Đặt thuê</a></button>
                                        </div>
                                    </div>
                            </div>
                        <?php  }
                        } else {
                            echo "Không có kết quả để hiển thị ra";
                        }
                }

        ?>  
        </div>
    </div>
    </div>
    <?php
    require "../pages/footer.php"
    ?>
</body>
</html>

