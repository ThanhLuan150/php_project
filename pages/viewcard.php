


<?php include 'header.php';
     
   

 
$cart=(isset($_SESSION['cart']))? $_SESSION['cart'] : [];

?>

<div class="container">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-10">
            <div class="panel panel-info">
                <div class="panel-body">
                    
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th> Tiền thuê</th>
                                <th>Tiền cọc</th>
                                <th>Thành Tiền </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total_price =0; ?>
                            <?php foreach ($cart as $key => $value):
                            $total_price += (($value['rent_prices']+ $value['tiencoc']) * $value['quantity'] )
                             ?>
                            <tr id='cart-<?= $value['id'] ?>'>
                                <td><?php echo $key ++ ; ?></td>
                                <td><img src=" <?php echo $value['image']?>" width="100px"></td>
                                <td><?php echo $value['name'] ?></td>
                                <td width="300px"> 
                                    <form action="cart.php">
                                        <input type="hidden" name="action" value="update" >
                                        <input type="number" name="rent-price" id="rent-price" value="<?=$value['rent_prices']?>">
                                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                        <input type="number" name="quantity" value="<?php echo $value['quantity'] ?>">
                                        <button type="submit">Cập nhật</button></input> 
                                   
                                 </td>
                                <td><?php echo number_format($value['rent_prices']* $value['quantity'])?></td>
                               
                                
                                <td><?php echo number_format($value['tiencoc'] *$value['quantity'])?></td>
                                <?php  
                                      if($value['quantity'] >= 1 ){ ?>
                                        <td><?php echo number_format(($value['rent_prices']+ $value['tiencoc']) * $value['quantity'] ) ?></td>
                               <?php } ?>
                                <td>  <a name="" onclick="return del('<?=  $value['name']; ?>')"  class=" btn btn-danger" href="../cart/cart.php?id=<?php echo $value['id']?>&action=delete" >Xóa</a> </td>
                                </form>
                            </tr>
                            <?php endforeach ?>
                            <tr>
                                <td> Tổng Tiền </td>
                                <td colspan="6" class="text-center bg-primary">
                                    <?php 
                              
                                        echo number_format($total_price);
                               ?>
                                VNĐ</td>

                        
                        </tr>
                  

                             
                        </tbody>
                    </table>
                    
                </div>
            </div>
            <div class="panel panel-white">
                <div class="panel-heading">
                    <h3 class="panel-title "><a href="oders.php" class="btn btn-success">Đặt hàng</a> </h3><br>
                    <div class="panel-title bg-info"> <h3>Thông tin chi tiết </h3>

                <div>
              nhiều người iu ơi
                </div>
                    </div>

                            </div>

                            <div class="panel-body deess">

            </div>

            </div>
            </div>
        </div>
    </div>



<?php include 'footer.php' ?>;

<script>
     function del(name){
        return confirm("Bạn có chắc chắn muốn xoa sản phẩm:"+ name + " ?")
    }

</script>