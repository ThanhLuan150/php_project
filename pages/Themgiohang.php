<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/styles/Themgiohang.css">
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
            <a href="home.php"><img class="img" src="./img/logo.jpg" alt=""></a>
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
                    <i class="fa-sharp fa-solid fa-magnifying-glass" data-toggle="modal" data-target="#myModal"></i>
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
            <button class="button"><a href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                </a></button>
            <button class="button"><a href="Dangnhap.php">Đăng nhập</a></button>
            <button class="button"><a href="Dangky.php">Đăng ký</a></button>
        </div>
    </div>
    <div class="body">
        <div class="container">
            <div class="row title">
                <div class="col-md-12">
                    <label class="checkboxgiohang">
                        <input class="checkboxall" type="checkbox">
                    </label>
                    <div class="rowgionameproducts">
                        Sản phẩm
                    </div>
                    <div class="rowgiosizeproducts">
                        Size
                    </div>
                    <div class="rowgiopriceproducts">
                        Giá
                    </div>
                    <div class="rowgiotrangthaiproducts">
                        Trạng thái
                    </div>
                    <div class="rowgioquantityproducts">
                        Số lượng
                    </div>
                    <div class="rowgiopricecoc">
                        Tiền cọc
                    </div>
                    <div class="rowgiototalprices">
                        Tổng tiền
                    </div>
                </div>
            </div>
            <div class="row contentgiohang">
                <div class="col-md-12 rowproduct">
                    <label class="checkboxgiohang">
                        <input class="checkboxproduct" type="checkbox">
                    </label>
                    <div class="rowgionameproduct">
                        <div class="rowimgproduct">
                            <img class="anhproduct" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <div class="nameproduct">
                            Áo giao lĩnh- tân  niên hoài niệm
                        </div>
                    </div>
                    <div class="rowgiosizeproduct">
                        L
                    </div>
                    <div class="rowgiopriceproduct">
                        100.000đ
                    </div>
                    <div class="rowgiotrangthaiproducts">
                        100%
                    </div>
                    <div class="rowgioquantityproducts">
                        10
                    </div>
                    <div class="rowgiopricecoc">
                        400.000đ
                    </div>
                    <div class="rowgiototalprices">
                        500.000đ
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>