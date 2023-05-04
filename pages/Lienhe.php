<?php
if(isset($_POST['submit'])){
    // Lấy thông tin từ biểu mẫu
    $name = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['sdt'];
    $message = $_POST['message'];

    // Thiết lập địa chỉ email người nhận
    $to = "youremail@example.com";

    // Thiết lập tiêu đề email
    $subject = "Liên hệ từ $name";

    // Thiết lập nội dung email
    $body = "Tên: $name\n\nEmail: $email\n\nSố điện thoại: $phone\n\nNội dung:\n$message";

    // Thiết lập tiêu đề và địa chỉ email người gửi
    $headers = "From: $name <$email>";

    // Gửi email
    if(mail($to, $subject, $body, $headers)){
        echo "Nội dung của bạn đã được gửi đi thành công.";
    } else {
        echo "Có lỗi xảy ra khi gửi nội dung của bạn.";
    }
}
?>
<?php
session_start();
// Kiểm tra trạng thái đăng nhập của người dùng
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    // Hiển thị thông tin đăng nhập của người dùng
    echo "Chào mừng $username đến với trang chủ!";
    // Thêm nút đăng xuất
    echo "<a href='Dangxuat.php'>Đăng xuất</a>";
} else {
    // Nếu người dùng chưa đăng nhập, đưa họ đến trang đăng nhập
    header("Location: Dangnhap.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../styles/Lienhe.css">
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
        <?php include('header.php') ?>

        <div class="container-boy">
            <h1 class="element-title">LIÊN HỆ</h1>
            <div class="title2">
                <a class="title-name" href="Home.php">Home /</a> 
                <span class="current">LIÊN HỆ</span>
            </div>																	
        </div>
        <div id="content" class="main">

            <div id="post">
            <div class="content-name">

                <h2>ÁO CỔ PHỤC TTDVL</h2>
                <img class="" src="../img/logo.jpg" alt="" width="100px" height="100px">
                <p class="content22"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 1: 101b, Lê Hữu Trác , Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content22"><i class="fa-solid fa-phone"></i>   Phone: 0702307677 ( Mr Trung)</p>
                <p class="content22"><i class="fa-solid fa-location-dot"></i>   Chi Nhánh 2: 99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng</p>
                <p class="content22"><i class="fa-solid fa-phone"></i>   Phone: 0787628654 (Mr Luân)</p>
                <p class="content22"><i class="fa-solid fa-envelope"></i>   Email: aocophucttdvl@gmail.com</p>
                <p class="content22"><i class="fa-regular fa-calendar-pen"></i>   Giờ mở cửa: 8h30 đến 21h30 Từ thứ 2 đến Chủ nhật</p>
            </div>

                    <div class="content-fromt">
                        <form action="lienhe.php" method="post">
                            <label for="fname">Tên của bạn </label><br>
                            <input style="width:900px" type="text"  id="fname" name="fname"><br><br>
                            <label for="fname">Email</label><br>
                            <input style="width:900px" type="text"  id="email" name="email"><br><br>
                            <label for="fname">Số điệnthoại</label><br>
                            <input style="width:900px" type="text"  id="sdt" name="sdt"><br><br>
                            <label for="fname">Nội dung</label><br>
                            <textarea style="width:900px" name="message" id="" cols="30" rows="10"></textarea> <br><br>

                             <input type="button" class="button-fromt" name="submit" value="Gửi nội dung">
                        </form><br>
                        <h2 class="h2chiduong">CHỈ ĐƯỜNG ĐI ĐẾN ÁO CỔ PHỤC TTDVL</h2>
                        <div class="wpb_map_wraper"><iframe style="width:900px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.1122480382614!2d108.23859831416979!3d16.05966394396151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142177f0057f675%3A0xdec5dbe31838c835!2zMzY1UitWOUcsIDEwMUIgTMOqIEjhu691IFRyw6FjLCBQaMaw4bubYyBN4bu5LCBTxqFuIFRyw6AsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1680865040827!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
                    </div>
            </div>
    
   <?php include('footer.php') ?>

       
       

</body>
</html>