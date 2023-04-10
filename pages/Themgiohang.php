<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm giỏ hàng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/footer/footer.css">
    <link rel="stylesheet" href="../assets/header/header.css">
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
    <?php include('header/header.php')?>
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
    <?php include('footer/footer.php') ?>
</body>