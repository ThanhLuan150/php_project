

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Product</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
<?php include('header.php') ?>
    <section class="background" id="trainers">
        <div class="container">
            <br>
            <br>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "rent_";

            // Create connection
            $mysqli = new mysqli($servername, $username, $password, $dbname);
            if ($mysqli === false) {
                die("ERROR: Could not connect. " . $mysqli->connect_error);
            }

            $sql = "SELECT * FROM showcard;";
            $result = $mysqli->query($sql) ?>
 
           <?php if ($result->num_rows > 0) {
                // output data of each row
            ?>
            
            <div class="list_blogs">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <div class="item">
                                <div class="image">
                                    <img class="img" src="<?php echo $row["img"]; ?>" alt="">
                                </div>
                                <br>
                                <button id="btn"  >Blog</button>
                                <div class="informationproduct">
                                    <h2 class="cardname"><?php echo $row["cardname"]; ?></h2>
                                    <p class="description"><?php echo $row["description"]; ?></p>
                               
                                </div>
                            </div>
                        <?php  }
                        } else {
                            echo "Không có kết quả để hiển thị ra";
                        }
                        $mysqli->close();
                        ?>
                    </div>

    </section>
    <?php 
        include ('footer.php') ?>    
</body>

</html>