
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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../assets/styles/Home.css">
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
                                    <input class="input" type="search" name="search" value=""
                                        placeholder="Nhập từ khóa">
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
            <br><br>
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <label class="checkboxgiohang">
                            <input class="checkboxall" type="checkbox">
                        </label>
                    </div>
                    <div class="col-4 rowgionameproducts">
                        Sản phẩm
                    </div>
                    <div class="col-1 rowgiosizeproducts">
                        Size
                    </div>
                    <div class="col-1 rowgiopriceproducts">
                        Giá
                    </div>
                    <div class="col-1 rowgiotrangthaiproducts">
                        Trạng thái
                    </div>
                    <div class="col-1 rowgioquantityproducts">
                        Số lượng
                    </div>
                    <div class="col-2 rowgiopricecocs">
                        Tiền cọc
                    </div>
                    <div class="col-1 rowgiototalprices">
                        Tổng tiền
                    </div>
                </div>
            </div>

            <br><br><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-auto">
                        <label class="checkboxgiohang">
                            <input class="checkboxall" type="checkbox">
                        </label>
                    </div>
                    <div class="col-4 rowgionameproducts">
                        <div class="rowimgproduct">
                            <img class="anhproduct"
                                src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg"
                                alt="">
                        </div>
                        <div class="nameproduct">
                            Áo giao lĩnh- tân niên hoài niệm
                        </div>
                    </div>
                    <div class="col-1 rowgiosizeproducts">
                        L
                    </div>
                    <div class="col-1 rowgiopriceproducts">
                        100.000đ
                    </div>
                    <div class="col-1 rowgiotrangthaiproducts">
                        Tốt
                    </div>
                    <div class="col-1 rowgioquantityproducts">
                        10
                    </div>
                    <div class="col-2 rowgiopricecocs">
                        500.000đ
                    </div>
                    <div class="col-1 rowgiototalprices">
                        600.000đ
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <label class="checkboxgiohang">
                            <input class="checkboxall" type="checkbox">
                        </label>
                    </div>
                    <div class="col-4 rowgionameproducts">
                        <div class="rowimgproduct">
                            <img class="anhproduct"
                                src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg"
                                alt="">
                        </div>
                        <div class="nameproduct">
                            Áo giao lĩnh- tân niên hoài niệm
                        </div>
                    </div>
                    <div class="col-1 rowgiosizeproducts">
                        L
                    </div>
                    <div class="col-1 rowgiopriceproducts">
                        100.000đ
                    </div>
                    <div class="col-1 rowgiotrangthaiproducts">
                        Tốt
                    </div>
                    <div class="col-1 rowgioquantityproducts">
                        10
                    </div>
                    <div class="col-2 rowgiopricecocs">
                        500.000đ
                    </div>
                    <div class="col-1 rowgiototalprices">
                        600.000đ
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <label class="checkboxgiohang">
                            <input class="checkboxall" type="checkbox">
                        </label>
                    </div>
                    <div class="col-4 rowgionameproducts">
                        <div class="rowimgproduct">
                            <img class="anhproduct"
                                src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg"
                                alt="">
                        </div>
                        <div class="nameproduct">
                            Áo giao lĩnh- tân niên hoài niệm
                        </div>
                    </div>
                    <div class="col-1 rowgiosizeproducts">
                        L
                    </div>
                    <div class="col-1 rowgiopriceproducts">
                        100.000đ
                    </div>
                    <div class="col-1 rowgiotrangthaiproducts">
                        Tốt
                    </div>
                    <div class="col-1 rowgioquantityproducts">
                        10
                    </div>
                    <div class="col-2 rowgiopricecocs">
                        500.000đ
                    </div>
                    <div class="col-1 rowgiototalprices">
                        600.000đ
                    </div>
                </div>
                <div class="row">
                    <div class="col-auto">
                        <label class="checkboxgiohang">
                            <input class="checkboxall" type="checkbox">
                        </label>
                    </div>
                    <div class="col-1 chooseall">
                        Chọn tất cả
                    </div>
                    <div class="col-1 closeproduct">
                        Xóa
                    </div>
                    <div class="col-6 totalproducts">
                        Tổng tiền (có 3 sản phẩm)
                    </div>
                    <div class="col-1 totalprices">
                        3.300.000đ
                    </div>
                    <div class="col-2 thanhtoanall">
                        <a href=""><button class="thanhtoan">Thanh toán</button></a>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="container">
                <p class="backgroundp1">Xem thêm sản phẩm</p>

                <div class="list_schools">
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="image11">
                            <img class="img4" src="https://dongphuchaianh.com/wp-content/uploads/2019/08/nhung-hinh-anh-ao-lop-dep-nhat-01.jpg" alt="">
                        </div>
                        <br>
                        <div class="informationproduct">
                            <p class="informationproductp1"></p>
                            <p class="informationproductp2"></p>
                            <div class="button111">
                                <button class="bt2"><a class="a1" href="Chitietsanpham.php">Details</a></button>
                                <button class="bt2"><a class="a1" href="orders.php">Đặt thuê</a></button>
                            </div>
                        </div>
                    </div>

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