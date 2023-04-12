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
    <?php include('header/header.php') ?>
    <div class="background">
        <div class="container">
            <div class="dangky">
                <div class="dangky1">
                    <form action="dangky.php" method="post">
                        <p class="dangkyp">ĐĂNG KÝ</p>
                        <br> <br>
                        <div class="name">
                            <i class="fa-solid fa-user" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="username'" placeholder="Tên đăng nhập" >
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-envelope"style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="email"placeholder=" Email" >
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-lock" style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="password" placeholder=" Mật khẩu">
                        </div> <br>
                        <div class="name">
                            <i class="fa-solid fa-user"style="position:relative;left:20px;"></i>
                            <input id="search" type="text" class="input" name="confirm_password"placeholder=" Nhập lại mật khẩu" >
                        </div>
                        <br> <br>
                        <p class="dangkyp2" ><input type="checkbox">           Tôi đồng ý với tất cả các tuyên bố trong Điều khoản dịch vụ</p> <br>
                        <button type="submit" name="btn_submit"  class="button1">Đăng ký</button> 
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