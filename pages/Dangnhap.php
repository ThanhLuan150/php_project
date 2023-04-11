
<?php
    // Enable error reporting to help with debugging
    error_reporting(E_ALL);
    
    // Function to display an alert box
    function alert($message) {
        echo "<script>alert('$message');</script>";
    }

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "", "ren_cothes");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the login form has been submitted
    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Escape the input to prevent SQL injection attacks
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);

        // Query the database to check if the username and password are correct
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        // Check if a row was returned
        if (!empty($row)) {
            echo "<script>alert('Đăng nhập thành công')</script>";
        } else {
            echo "<script>alert('Tên đăng nhập hoặc mật khẩu không đúng')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/styles/Dangnhap.css">
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
    <div class="header">
        <div class="image">
            <a href="home.php"><img class="img" src="../img/logo (1).jpg" alt=""></a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="banggiaphucvu.php">BẢNG GIÁ PHỤC VỤ</a></li>
                <li><a href="aodoikham.php">ÁO ĐỐI KHÂM</a></li>
                <li><a href="aogiaolinh.php">ÁO GIAO LĨNH</a></li>
                <li><a href="aonhatbinh.php">ÁO NHẬT BÌNH</a></li>
                <li><a href="aotac.php">ÁO TẮC</a></li>
                <li><a href="aonguthan.php">ÁO NGŨ THÂN</a></li>
                <li><a href="blog.php">BLOG</a></li>
                <li><a href="lienhe.php">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div class="function">
            <div class="functionsearch">
                <div class="search">
                    <i  class="fa-sharp fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#myModal"></i>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tìm kiếm</h4>
                                </div>
                                <div class="modal-body">
<input class="input" type="search" name="search" value="" placeholder="Nhập từ khóa">
                                    <button class="button" type="submit" name="submit">Tìm kiếm</button>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="button" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <button class="button"><a  href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a></button>
                <button class="button"><a  href="Dangky.php">Đăng ký</a></button>
            </div>
        </div>
    </div>
    <div class="background">
        <div class="container">
            <div class="dangky">
                <div class="dangky1">
                    <form action="dangky.php" method="post">
                        <p class="dangkyp">ĐĂNG NHẬP</p>
                        <br> <br>
                        <div class="name">
                            <i class="fa-solid fa-user" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="username" placeholder="Tên đăng nhập"  required value="<?php echo  $_POST['username']; ?>">
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-lock" style="position:relative;left:20px;"></i>
                            <input id="search" type="password" class="input" name="password" placeholder=" Mật khẩu"  required value="<?php echo  $_POST['password']; ?>">
                        </div> <br> <br>
                        <p class="dangkyp2" ><input type="checkbox">Nhớ mật khẩu</p> <br>
                        <button type="submit" name="submit" class="button1">Đăng nhập</button> <br> <br> <br> <br>
                        <p class="dangkyp3">Hoặc đặng nhập bằng <i class="fa-brands fa-facebook"></i> <i class="fa-brands fa-google"></i>        <i class="fa-brands fa-instagram"></i>
                    </form></p> 
                </div>
                <div class="img">
                    <img class="img1" src="../img/content.jpg" alt="">
                    <a class="imga" href="Dangky.php">Tạo tài khoản</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="content">
            <div class="content1">
                <p class="content11">ÁO CỔ PHỤC TTDVL</p>
                <p class="content11"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 1: 101b, Lê Hữu Trác , Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content11"><i class="fa-solid fa-phone"></i>   Phone: 0702307677 ( Mr Trung)</p>
<p class="content11"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 2: 99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content11"><i class="fa-solid fa-phone"></i>   Phone: 0787628654 (Mr Luân)</p>
                <p class="content11"><i class="fa-solid fa-envelope"></i>   Email: aocophucttdvl@gmail.com</p>
                <p class="content11"><i class="fa-regular fa-calendar-pen"></i>   Giờ mở cửa: 8h30 đến 21h30 Từ thứ 2 đến Chủ nhật</p>
            </div>
            <div class="content1">
                <p class="content11">DỊCH VỤ CHỤP ẢNH</p>
                <p class="content11">Bảng giá thuê áo cổ phục</p>
                <p class="content11">Thuê  áo đối khâm</p>
                <p class="content11">Thuê áo giao lĩnh</p>
                <p class="content11">Thuê áo nhật bình</p>
                <p class="content11">Thuê áo tắc</p>
                <p class="content11">Thuê áo ngũ thân</p>
            </div>
            <div class="content1">
                <p class="content11">GIỚI THIỆU</p>
                <p class="content11">Giói thiệu cho thuê áo cổ phục</p>
                <p class="content11">Áo đối khâm</p>
                <p class="content11">Áo giao lĩnh</p>
                <p class="content11">Áo nhật bình</p>
                <p class="content11">Áo tấc</p>
                <p class="content11">Áo ngũ thân</p>
                <p class="Content">Liên hệ</p>
            </div>
        </div>
    </div>
</body>
</html>