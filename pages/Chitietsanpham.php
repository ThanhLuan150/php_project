<!DOCTYPE html>
<html lang="en">
<head>
  <title>Detail</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/detail1.css">
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
    .noiquyp1{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 22px;
    line-height: 27px;
    color: #FF0000;
}
.noiquy2 ul{
    font-family: 'Inter';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 19px;
    color: #000000;
}
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
    .listproductssp1{
      font-family: 'Inter';
      font-style: normal;
      font-weight: 400;
      font-size: 22px;
      line-height: 27px;

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
                <button class="button"><a  href="signin.php">Đăng nhập</a></button>
                <button class="button"><a  href="signin.php">Đăng ký</a></button>
            </div>
        </div>
    </div>
    <div class="body">
      <div class="container">
        <?php
            $id = $_GET["id"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "LISTPRODUCT";
            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
              die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM LISTPRODUCT;";
            $result = $mysqli->query($sql);
        ?>
        <!-- ***** Call to Action Start ***** -->
        <div class="detail">
          <div class="container">
            <?php if ($result->num_rows > 0) {
              // dữ liệu đầu ra của mỗi hàng //fetch_assoc là một hàm trong PHP dùng để trả về dòng kết quả từ một truy vấn SQL dưới dạng một mảng kết hợp.
            ?>
              <div class="detail1">             
                <?php while ($row = $result->fetch_assoc()) {
                  if ($id == $row["id"]) {
                ?>
                  <div class="img">
                    <img class="img1" src="<?php echo $row["img"]; ?>" alt="Card image">
                  </div>
                  <div class="detail2">
                      <div class="category">
                          <ul>
                            <li><a class="categorya" href="home.php">Trang chủ</a></li>
                            <li><a class="categorya" href="sanpham.php">Sản phẩm</a></li>
                            <li><a class="categorya" href="<?php echo ""  ?>"><?php echo $row["names"]; ?></a></li>
                          </ul>
                      </div>
                      <br>
                      <p class="categoryp1"><?php echo $row["names"]; ?></p>
                      <p class="categoryp2"><?php echo $row["price"]; ?></p>
                      <div class="list">
                          <ul>
                            <li>Có Hàng Tại : Quận Sơn Trà</li>
                            <li>Giá Thuê lẻ 1 Bộ giá 200.000/ Bộ</li>
                            <li>Giá Thuê 2-3 Bộ Giá 170,000/ Bộ</li>
                            <li>Giá Thuê Trên 4 Bộ Giá 150,000</li>
                            <li>Hỗ Trợ Chỉnh Sửa Vừa Vặn Áo Cho Tất Cả Mọi Người</li>
                          </ul>
                      </div>
                      <br> 
                      <div class="address">
                        <p class="addressp1">Áo Cổ Phục TTDVL Chi Nhánh Sơn Trà:</p>
                        <ul>
                          <li>101B, Lê Hữu Trác, Phường Phước Mỹ, Quận Sơn Trà, Tp.Đà Nẵng</li>
                          <li>Phone: 0702 307 6771 ( Mr Trung)</li>
                          <li>Thời gian làm việc:Từ 9h sáng đến 21 giờ tối mỗi ngày .</li>
                        </ul>
                      </div>
                      <div class="function">
                          <button type="submit"class="functionbutton"><a href="">Đặt mua</a> </button>
                          <button class="functionbutton"><a class="functionbutton1"  href="themgiohang.php">Giỏ hàng <i class="fa-sharp fa-solid fa-cart-shopping"></i> </a></button>
                      </div>
                    </div>
                  </div>
                <?php
                 break;
                  }
                } ?>
              </div>
            <?php }  ?>
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br><br>
    <br><br><br><br><br>
    <div class="mota">
        <div class="container">
        <p>Mô tả</p>
        <br>
        <br>
        <br>
        <br>
          <center>
            <img class="img1" src="<?php echo $row["img"]; ?>" alt="Card image">
            <br><br><br>
            <img class="img1" src="<?php echo $row["img"]; ?>" alt="Card image">
            <br><br><br>
            <img class="img1" src="<?php echo $row["img"]; ?>" alt="Card image">
          </center>
        </div>
    </div>
    <br><br> <br>
    <div class="noiquy">
      <div class="container">
        <p class="noiquyp1">Khi đến với ÁO CỔ PHỤC TTDVL  khách hàng không phải lo lắng khi đi thuê áo dài</p>
        <div class="noiquyp2">
            <ul>
              <li>Sửa đồ theo size cho khách hàng ( chỉ cần chiều cao và cân nặng- có số đo càng càng tốt )</li>
              <li>Đổi mẫu tùy ý mà không phát sinh bất kỳ chi phí nào ( nếu mẫu đó chưa có khách đặt mẩu đó)</li>
              <li>Miễn phí lấy và trả đồ trong 3-5 ngày ( Có thể hỗ trợ thêm nếu khách cần)</li>
              <li>Giặt ủi ngay ngắn , dán tên ghi chú vào áo trước khi giao cho khách hàng.</li>
              <li>Tư vấn tận tình về màu sắc, cách phối đồ ton-sur-ton, chất liệu nào hợp với dáng người</li>
            </ul>
        </div>
        <p class="noiquyp1">Quy định thuê và trả đồ tại ÁO CỔ PHỤC TTDVL</p>
        <p class="noidungp3">1.QUY ĐỊNH THUÊ:</p>
        <div class="noiquyp2">
            <ul>
              <li>Quý khách có thể liên hệ xem mẫu trước sau đó sẽ đặt cọc cho chúng tôi 50% tổng giá trị hợp đồng.</li>
              <li>Trước ngày lấy hàng quý khách cung cấp cho chúng tôi size của chúng tôi để chúng tôi chuẩn bị cho quý khách.</li>
              <li>Chúng tôi sẽ ủi đồ, bỏ bịch và ghi tên của rõ ràng cho khách.</li>
              <li>Khi quý khách lấy hàng, quý khách sẽ thanh toán đủ tiền thuê đồng thời cọc thêm tiền hoặc giấy tờ tuỳ thân (CMND, GPLX, …) Để lấy đồ mang về</li>
              <li>Thời gian giữ áo thuê từ 4 -5 ngày kể từ ngày lấy áo(Trong trường hợp cần nhiều thời gian hơn quý khách vui lòng liên hệ trưc cho chúng tôi để được tư vấn)</li>
            </ul>
        </div>
        <p class="noidungp3">1.QUY ĐỊNH TRẢ VÀ LƯU Ý</p>
        <div class="noiquyp2">
            <ul>
              <li>Quý khách trả hàng chúng tôi sẽ kiểm tra và trả lại cọc cho quý khách.</li>
              <li>Trước ngày lấy hàng quý khách cung cấp cho chúng tôi size của chúng tôi để chúng tôi chuẩn bị cho quý khách.</li>
              <li>Nên dùng kim chỉ may tay thưa để lên lai quần hoặc tà áo dài.</li>
              <li>Sản phẩm không dính những chất khó giặt tẩy như: rượu, bia, băng keo, chewing gum, cà ri, v.v Sản phẩm không bị rách và hư hại.</li>
              <li>Thời gian nhận áo và trả áo đúng theo ngày ghi trên biên nhận.</li>
            </ul>
        </div>
        <p class="noidung4">Chú ý: Khách hàng làm rách hoặc hư hại phải bồi thường dựa trên giá trị sản phẩm.</p>
      </div>
    </div>
    <div class="background">
      <br>
      <div class="container">
          <p class="listproductssp1">SẢN PHẨM GỢI Ý</p>
          <div class=".list_schools">
            <div class="container">
            <br>
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

            $sql = "SELECT * FROM LISTPRODUCT ";
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