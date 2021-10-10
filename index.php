<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | The Mstore</title>
        <link rel="shortcut icon" href="img\srtcticon.png" type="image/png">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="css/bootstrap.css" rel="stylesheet">
          <link href="./css/style.css" rel="stylesheet">
          <script src="js/jquery.js"></script>
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;" style="background">

        <?php
        include 'includes/header.php';
        ?>
               <div id="content">
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Biggest Online Mobile Store</h1>
                            <h4><p>Flat 20% OFF on all products.</p></h4>
                            <br>
                            <br>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <br>
            <br>
    
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div class="panel-heading  color">
                            <h3 style="color:#11A8FE">Choose&nbsp;&nbsp;From&nbsp;&nbsp;wide&nbsp;&nbsp;ranges&nbsp;&nbsp;of&nbsp;&nbsp;brands</h3>
                        </div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                    <img src="./img/iphone11.png" alt="iphone 11" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                    <img src="./img/samsungs20c.png" alt="s20" style="height:240px">
                                        <div class="caption">
                                            <h3>Samsung</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#oneplus">
                               <div class="thumbnail">
                                    <img src="./img/op8.png" alt="oneplus 8">
                                        <div class="caption">
                                            <h3>OnePlus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>

                         <div class="col-sm-3">
                            <a href="products.php#xiaomi">
                               <div class="thumbnail">
                                    <img src="./img/xiaomi.png" alt="note 9">
                                        <div class="caption">
                                            <h3>Xioami</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="products.php#dell">
                               <div class="thumbnail">
                                    <img src="./img/dell2.png" alt="dell" style="height:170px">
                                        <div class="caption">
                                            <h3>Dell</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="products.php#Apple">
                               <div class="thumbnail">
                                    <img src="./img/apple3.png" alt="Macbook" style="height:170px">
                                        <div class="caption">
                                            <h3>Apple Macbooks</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="products.php#Asus">
                               <div class="thumbnail">
                                    <img src="./img/asus2.png" alt="asus" >
                                        <div class="caption">
                                            <h3>Asus</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="products.php#Acer">
                               <div class="thumbnail">
                                    <img src="./img/acer2.png" alt="acer" >
                                        <div class="caption">
                                            <h3>Acer</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    
                    
                    
                    </div>
                </div>



                </div>
            </div>

        </div>

        <?php
        include 'includes/footer.php';
        ?>

    </body>
</html>
