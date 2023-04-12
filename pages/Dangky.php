<?php 
error_reporting(0);
function alert($mes){
    echo "<script> alert('$mes');</script>";
}
   // Kết nối CSDL
$conn = mysqli_connect("localhost","root","","ren_cothes");
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password =$_POST['confirm_password'];
    $a=0;
    if ( $password !=  $confirm_password ){
    //    header("location:dangky.php");
        alert("password not the same");
        $a++;
    }
    // Kiểm tra tính hợp lệ của email và mật khẩu
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        alert("wrong email");
        $a++;
    }
    if (strlen($password) < 6) {
        // header("location:dangky.php");
        alert("need length password");
        $a++;
    }
    if(!$a){
        $date = date('m/d/Y h:i:s a', time());
        $result= mysqli_query($conn,"INSERT INTO `users`(`username`, `email`, `password`, `confirm_password`, `created_at`) VALUES ('$username','$email','$password','$confirm_password','$date')");
        if($result){
            alert('thanh cong');
            header("https://www.facebook.com/");
            
        }
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
    <link rel="stylesheet" href="../assets/footer/footer.css">
    <link rel="stylesheet" href="../assets/header/header.css">
    <link rel="stylesheet" href="../assets/styles/Dangky.css">
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
    <div class="header">
        <div class="image">
            <a href="home.php"><img class="img" src="../img/logo.jpg" alt=""></a>
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
                <button class="button"><a  href="Dangnhap.php">Đăng nhập</a></button>
            </div>
        </div>
    </div>
    <div class="background">
        <div class="container">
            <div class="dangky">
                <div class="dangky1">
                    <form action="dangky.php" method="post">
                        <p class="dangkyp">ĐĂNG KÝ</p>
                        <br> <br>
                        <div class="name">
                            <i class="fa-solid fa-user" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="username" placeholder="Tên đăng nhập"  required value="<?php echo  $_POST['username']; ?>" >
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-envelope"style="position:relative;left:20px;"></i>
                            <input id="em" type="email" class="input" name="email" placeholder=" Email"  required value="<?php echo  $_POST['email']; ?>" >
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-lock" style="position:relative;left:20px;"></i>
                            <input id="search" type="password" class="input" name="password" placeholder="Mật khẩu"  required value="<?php echo $_POST['password']; ?>">
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-user"style="position:relative;left:20px;"></i>
                            <input id="search" type="password" class="input" name="confirm_password" placeholder=" Nhập lại mật khẩu"  required value="<?php echo $_POST['confirm_password']; ?>" >
                        </div>
                        <br> <br>
                        <p class="dangkyp2" ><input type="checkbox">Tôi đồng ý với tất cả các tuyên bố trong Điều khoản dịch vụ</p> <br>
                        <button type="submit" name="submit"  class="button1">Đăng ký</button> 
                    </form>
                </div>
                <div class="img">
                    <img class="img1" src="../img/content.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <?php include('footer/footer.php') ?>
</body>
</html>