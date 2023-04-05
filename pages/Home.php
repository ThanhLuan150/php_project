<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../style/home.css">
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
<style>
    .background{
    background: #EFEFEF;
    padding-bottom: 30px;
    }
    .backgroundp1{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    line-height: 29px;

    color: #000000;
    }

    .title{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 24px;
        line-height: 29px;
        color: #000000;
        }

    .list_schools{
            display: grid ;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            gap:30px;
            list-style-type:none;
    }
    .item{
        background: #fff;
        border-radius: 10px 10px 10px 10px;
    }
    .img4{
        Width:262px;
        Height:290px;
        border-radius: 10px 10px 0 0 ;
    }
    .informationproductp1{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #000000;
        margin-left: 13px;
    }
    .informationproductp2{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        line-height: 19px;
        color: #ED2353;
        margin-left: 13px;
    }
    .button111{
        margin-bottom:20px;
        margin-left: 13px;
    }
    .bt2{
        background: #F2DFE3;
        border-radius: 20px;
        border: 1px solid  #F2DFE3 ;
        height:30px;
        width: 100px;
        font-family: 'Inter';
        font-style: normal;
        font-weight: 400;
        font-size: 14px;
        line-height: 17px;
       
    }
    .a1{
        color: #000000;
    }
    * {
    box-sizing:border-box
  }
  h2 {
    text-align: center;
  }
  /* Slideshow container */
  .slideshow-container {
    max-width: 500px;
    position: relative;
    margin: auto;
  }
  /* Ẩn các slider */
  .mySlides {
      display: none;
  }
  /* Định dạng nội dung Caption */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
   
  /* định dạng các chấm chuyển đổi các slide */
  .dot {
    cursor:pointer;
    height: 13px;
    width: 13px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  /* khi được hover, active đổi màu nền */
  .active, .dot:hover {
    background-color: #717171;
  }
   
  /* Thêm hiệu ứng khi chuyển đổi các slide */
  .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 3s;
    animation-name: fade;
    animation-duration: 3s;
  }
   
  @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
   
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }

    
</style>
<body>
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
            <button class="button"><a  href="Dangky.php">Đăng ký</a></button>
        </div>
    </div>
    <div class="poster">
        <div class="mySlides fade">
            <img class="img1" src="../img/poster.jpg" alt=""style="width:100%">
            <div class="text">Nội dung caption của slide đầu tiên!</div>
        </div>
        <div class="mySlides fade">
            <img class="img1" src="../img/poster.jpg" alt=""style="width:100%">
            <div class="text">Nội dung caption của slide thứ 2!</div>
        </div>
        <div class="mySlides fade">
            <img class="img1" src="../img/poster.jpg" alt=""style="width:100%">
            <div class="text">Nội dung caption của slide thứ 3!</div>
        </div>
        </div>
        <br>
        <div style="text-align:center">
        <span class="dot" onclick="currentSlide(0)"></span> 
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
    </div>
    <script src="../js/slide.js">
</script>
    <div class="body" style="background-image: url(../page/img/nen.jpg); ">
        <div class="introduce">
            <div class="container">
                <p class="introducep1">Giới thiệu</p>
                <p class="introductp2">ÁO CỔ PHỤC TTDVL KINH THÀNH HUẾ  DỊCH VỤ THUÊ ÁO  GIÁ RẺ CHẤT LƯỢNG</p>
                <p class="inteoductp3">Giúp cho vẻ đẹp  của bạn muôn phần đẹp hơn</p>
                <div class="introductcontent">
                    <div class="content1">
                        <p class="introductcontentp">Bạn hãy chọn cho mình những bộ cổ phục đẹp nhất, độc đáo nhất với giá thành hợp lý nhất và có những bức ảnh đẹp tôn lên vẻ đẹp dân tộc , cổ kỉnh , uy nguy  bằng cách trao cho áo cổ phục TTDVL cơ hội thực hiện mong muốn của bạn!</p>
                        <p class="introductcontentp">Vài năm trở lại đây, ngày càng có nhiều bạn trẻ quan tâm đến văn hóa truyền thống như lịch sử triều đại, nghi lễ thưởng trà theo cung đình xưa, ý nghĩa của các biểu tượng văn hóa cổ…, khoát lên mình bộ cổ phục uy nguy , tráng lệ tôn vinh thêm vẻ đẹp của cổ kính của bộ đồ.</p>
                        <p class="introductcontentp">Áo cổ phục là một nét đẹp văn hóa truyền thống, lịch sử triều đại, nghi lễ thưởng trà theo cung đình xưa, ý nghĩa của các biểu tượng văn hóa cổ. Thường suất hiện trong hoàng cung, dân ta thường sử dụng áo cổ phục  làm trang phục chính để thực hiện các nghi lễ quan trọng.</p>
                        <div class="icon">
                           <a class="a" href="https://www.facebook.com/lethanhluan150503"> <i class="fa-brands fa-facebook"></i></a>
                           <a class="a" href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-youtube"></i></a>
                           <a  class="a"href="https://www.instagram.com/lu_an8934/"><i class="fa-brands fa-instagram"></i></a>
                           <a class="a" href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-twitter"></i></a>
                           <a class="a"href="https://www.youtube.com/channel/UCpR0Jjt_57gDN91Qf9UAA8w"><i class="fa-brands fa-linkedin"></i></a>
                        </div>
                    </div>
                    <img class="img2" src="../img/content.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="inforproduct">
        <div class="container">
            <p class="inforproductp">Dịch Vụ Chính Cổ Phục TTDVL</p>
            <p class="inforproductp1">Địa điểm cho thuê - Bán cổ phục các loại giá rẻ - Uy tín - Chất lượng</p>
            <center>
                <img class="img3" src="../img/noidung1.jpg" alt="">
                <button class="inforproducbutton" type="submit"><a  style="color:#fff; border-radius:10px;" href="banggiaphucvu.php">THUÊ CỔ PHỤC</a></button>
            </center>
        </div>
    </div>
    <div class="background">
        <div class="container">
            <br>
            <p class="backgroundp1">Áo ngũ thân</p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LISTPRODUCT";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM LISTPRODUCT WHERE names ='Áo ngũ thân-tân niên hoài niệm';";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            ?>
                <div class="list_schools">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="image11">
                                    <img class="img4" src="<?php echo $row["img"]; ?>" alt="">
                                </div>
                                <br>
                                <div class="informationproduct">
                                    <p class="informationproductp1"><?php echo $row["names"]; ?></p>
                                    <p class="informationproductp2"><?php echo $row["price"]; ?></p>
                                <div class="button111">
                                    <button class="bt2"><a class="a1"  href="detail1.php?id=<?php echo $row["id"];?>">Details</a></button>  
                                    <button class="bt2"><a class="a1" href="orders.php?id=<?php echo $row["id"];?>">Đặt thuê</a></button>
                                </div>
                            </div>
                    </div>
                <?php  }
                } else {
                    echo "Không có kết quả để hiển thị ra";
                }
                $mysqli->close();
                ?>
            </div>
        </div>
        <br>
        <div class="container">
            <p class="backgroundp1">Áo tấc</p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LISTPRODUCT";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM LISTPRODUCT WHERE names ='Áo tấc-tân niên hoài niệm';";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            ?>
                <div class="list_schools">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="image11">
                                    <img class="img4" src="<?php echo $row["img"]; ?>" alt="">
                                </div>
                                <br>
                                <div class="informationproduct">
                                <p class="informationproductp1"><?php echo $row["names"]; ?></p>
                                    <p class="informationproductp2"><?php echo $row["price"]; ?></p>
                                <div class="button111">
                                    <button class="bt2"><a class="a1" href="detail1.php?id=<?php echo $row["id"];?>">Details</a></button>  
                                    <button class="bt2"><a  class="a1"href="orders.php?id=<?php echo $row["id"];?>">Đặt thuê</a></button>
                                </div>
                            </div>
                    </div>
                <?php  }
                } else {
                    echo "Không có kết quả để hiển thị ra";
                }
                $mysqli->close();
                ?>
            </div>
        </div>
        <br>
        <div class="container">
            <p class="backgroundp1">Áo giao lĩnh</p>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LISTPRODUCT";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM LISTPRODUCT WHERE names ='Áo giao lĩnh-tân niên hoài niệm';";
            $result = $mysqli->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            ?>
                <div class="list_schools">
                    <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="image11">
                                    <img class="img4" src="<?php echo $row["img"]; ?>" alt="">
                                </div>
                                <br>
                                <div class="informationproduct">
                                <p class="informationproductp1"><?php echo $row["names"]; ?></p>
                                    <p class="informationproductp2"><?php echo $row["price"]; ?></p>
                                <div class="button111">
                                    <button class="bt2"><a class="a1" href="detail1.php?id=<?php echo $row["id"];?>">Details</a></button>  
                                    <button class="bt2"><a class="a1" href="orders.php?id=<?php echo $row["id"];?>">Đặt thuê</a></button>
                                </div>
                            </div>
                    </div>
                <?php  }
                } else {
                    echo "Không có kết quả để hiển thị ra";
                }
                $mysqli->close();
                ?>
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