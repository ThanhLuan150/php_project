<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="containers">
  <img class="containers_image" src="https://s120-ava-talk.zadn.vn/2/2/f/0/13/120/d6032707f2e221caa1043bae8f155dd5.jpg" alt="">
  <h1> admin</h1>
  <div class="row">
    <div class="col-sm-3 admin-menu">
      <h2>Menu</h2>
      <div class="admin-menu">
        <ul>
          <li><a href="#">Trang chủ</a></li>
          <li><a href="#">Quản lý sản phẩm</a></li>
          <li><a href="#">Quản lý đơn hàng</a></li>
          <li><a href="#">Quản lý khách hàng</a></li>
          <li><a href="#">Thống kê báo cáo</a></li>
        </ul>
      </div>
      <form method="get" action="edit_product.php">
        <div class="container">
          <h2> form</h2>
    <label for="id">ID:</label>
    <input type="number" id="id" name="id" required><br><br>
    <label for="name">Tên sản phẩm:</label>
    <input type="text" id="name" name="name" required><br><br>
    <label for="description">Mô tả:</label>
    <textarea id="description" name="description"></textarea><br><br>
    <label for="price">Giá:</label>
    <input type="number" id="price" name="price" required><br><br>
    <label for="image">Hình ảnh:</label>
    <input type="file" id="image" name="image"><br><br>
    <button class="editButton">Sửa</button>
    </div>
  </form>  
    </div>
  <div class="col-sm-9 p-3 admin-menu">
      <h2>Danh sách sản phẩm</h2>
    <form class="search-form" action="#">
      <input type="text" placeholder="Tìm kiếm sản phẩm...">
      <button type="submit">Tìm kiếm</button>
    </form>
    <table id="productTable">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tên sản phẩm</th>
          <th>Giá</th>
          <th>Hình ảnh</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Trang phục Quý Phi</td>
          <td>500,000 đ</td>
          <td><img src="https://image.xahoi.com.vn/resize_580x1100/news/2014/11/25/trang-phuc-ao-dai-cua-hoa-hau-8.jpg"></td>
          <td>
            <button class="editButton"onclick="newDoc()">Sửa</button>
            <button class="deleteButton">Xóa</button>
            <button class="addButton">Thêm</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Trang phục Hoàng Hậu</td>
          <td>600,000 đ</td>
          <td><img src="https://hoaigiangshop.com/wp-content/uploads/2018/06/trang-phuc-hoang-thuong-hoang-hau-5.jpg"></td>
          <td>
            <button class="editButton">Sửa</button>
            <button class="deleteButton">Xóa</button>
            <button class="addButton">Thêm</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Trang phục Hoàng Thượng</td>
          <td>500,000 đ</td>
          <td><img src="https://hoaigiangshop.com/wp-content/uploads/2018/06/trang-phuc-hoang-thuong-hoang-hau-2.jpg"></td>
          <td>
            <button class="editButton">Sửa</button>
            <button class="deleteButton">Xóa</button>
            <button class="addButton">Thêm</button>
          </td>
        </tr>
        <tr>
          <tr>
            <td>4</td>
            <td>Trang phục Thái Hậu</td>
            <td>500,000 đ</td>
            <td><img src="https://static1.bestie.vn/Mlog/ImageContent/201710/4b-20171011171655.jpg"></td>
            <td>
              <button class="editButton">Sửa</button>
              <button class="deleteButton">Xóa</button>
              <button class="addButton">Thêm</button>
            </td>
          </tr>
          <tr>
      </tbody>
    </table>
  </div>
  </div>
  </div>
</body>
</html>
  