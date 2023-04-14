<?php
                 include('../database/ketnoidatabase.php');

                // Lấy dữ liệu từ form tìm kiếm
                if (isset($_GET['search'])) {
                    $search_query = $_GET['search_query'];

                    // Tìm kiếm dữ liệu trong cơ sở dữ liệu
                    $sql="SELECT*FROM categories inner join clothes on clothes.id_categories= .categories.id_categories where name_clothes  LIKE '%$search_query%'";
                    $result = $mysqli->query($sql);

                    // Hiển thị kết quả tìm kiếm
                    if ($result->num_rows > 0) {
                        // output data of each row
                    ?>
                        <br><br>
                        <div class="list_schools">
                            <?php while ($row = $result->fetch_assoc()) { ?>
                                    <div class="item">
                                        <div class="image11">
                                            <img class="img4" src="<?php echo $row["image"]; ?>" alt="">
                                        </div>
                                        <br>
                                        <div class="informationproduct">
                                            <p class="informationproductp1"><?php echo $row["name_clothes"]; ?></p>
                                            <p class="informationproductp2"><?php echo $row["rent_prices"]; ?></p>
                                        <div class="button111">
                                            <button class="bt2"><a class="a1"  href="detail.php?id=<?php echo $row["id_clothes"];?>">Detail</a></button>  
                                            <button class="bt2"><a class="a1" href="orders.php?id=<?php echo $row["id_clothes"];?>">Đặt thuê</a></button>
                                        </div>
                                    </div>
                            </div>
                        <?php  }
                        } else {
                            echo "Không có kết quả để hiển thị ra";
                        }
                }

        ?>