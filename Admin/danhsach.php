
<?php 
$sql="SELECT*FROM categories inner join clothes on clothes.id_categories= .categories.id_categories";
$query=mysqli_query($mysqli,$sql);

?>


<div class="container-fluid">
    <div class="card">
        <div class="card-header">
         <h2>Danh  sách sản phẩm</h2>
         <a class="btn btn-primary" href="index.php?page_layout=add">Thêm mới</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh sản phẩm</th>
                        <th>Giá sản phẩm</th>
                        <th>tiền cọc</th>
                        <th>Thời gian tạo</th>
                        <th>Ngày cập nhật</th>
                        <th>Sửa</th> 
                        <th>Xóa</th> 
                    </tr>
                </thead>
                <tbody>
                    
                   <?php
                   $i=1;
                   while($row= mysqli_fetch_assoc($query)){?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?= $row['name_clothes']; ?></td>
                        <td><img style="width:100px;" src=<?php echo $row['image']; ?>></td>
                        <td><?php echo $row['rent_prices']; ?></td>
                        <td><?php echo $row['tiencoc']; ?></td>
                        <td><?php echo $row['created_at']; ?></td>
                        <td><?php echo $row['updated_at']; ?></td>  
                        <td><a onclick="return edit()" href="index.php?page_layout=edit&id=<?php echo $row['id_clothes']; ?>">sửa</a></td>
                   
                        <td><a onclick="return del('<?=  $row['name_clothes']; ?>')" href="index.php?page_layout=delete&id=<?=  $row['id_clothes']; ?>">xóa</a></td>  

                    </tr> 
                
                
                   
                   <?php }?>
                </tbody>

            </table>
        
        </div>
        
    </div>

</div>
<script>
    function edit(){
        return confirm("Bạn có chắc chắn muốn sửa sản phẩm không? ")
    }
    function del(name){
        return confirm("Bạn có chắc chắn muốn xoa sản phẩm:"+ name + " ?")
    }
</script>