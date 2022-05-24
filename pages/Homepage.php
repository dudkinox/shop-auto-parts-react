<section class="section-content bg padding-y-sm">
    <div class="container">

        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 410px;">
                    <img class="img-fluid" src="Assets/Img/1.jpeg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Fashionable Dress</h3>
                            <a href="?pages=Shop" class="btn btn-light py-2 px-3">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="Assets/Img/2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                            <a href="?pages=Shop" class="btn btn-light py-2 px-3">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 410px;">
                    <img class="img-fluid" src="Assets/Img/3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 700px;">
                            <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                            <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                            <a href="?pages=Shop" class="btn btn-light py-2 px-3">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
        <div class="container-fluid pt-5">
            <div class="row px-xl-5 pb-3">
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=Car Shock Absorber&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">SUSPENSION SYSTEMS</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=Brake pads&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">BRAKE SYSTEMS</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=?type=Filter&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">AIR INTAKES</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=Head linght&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">HALO HEADLIGHTS</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=Bearings,Ball Bearings,Ball Bearings&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">BEARINGS,BALL</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pb-1">
                    <div class="cat-item d-flex flex-column border mb-4" style="padding: 30px;">

                        <a href="?type=Side Mirror&pages=Shop" class="cat-img position-relative overflow-hidden mb-3">
                            <img class="img-fluid" src="" alt="">
                        </a>
                        <h5 class="font-weight-semi-bold m-0">SIDE MIRROR</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-sm">
            <?php
            include('http/client.php');

            $type = isset($_GET["type"]) ? $_GET["type"] : "";

            $where = "";

            if ($type != "") {
                $where = "WHERE type = '$type'";
            }

            $sql = "SELECT * FROM product " . $where . " ORDER BY ID DESC";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                while ($row_prd = mysqli_fetch_array($result)) {
            ?>
                    <div class="col-md-3 col-sm-6">
                        <figure class="card card-product">
                            <div class="img-wrap"> <img src="<?php echo $row_prd['Imges']; ?>" width=' 200' height='200' /> </div>
                            <figcaption class="info-wrap">
                                <a href="#" class="title"><b><?php echo $row_prd["NameProduct"]; ?></b></a>
                                <div class="price-wrap">
                                    <span class="price-new"><b>Type:</b> &nbsp; <?php echo $row_prd["Type"]; ?></span><br>
                                    <span class="price-new"><b>Data:</b> &nbsp; <?php echo $row_prd["DataProduct"]; ?></span><br>
                                    <span class="price-new">ราคา &nbsp; <?php echo number_format($row_prd["Price"]); ?> &nbsp; <b>บาท</b></span> <br>
                                    <span class="price-new"><b>คงเหลือ:</b> &nbsp; <?php echo $row_prd["Quantity"]; ?></span>
                                </div>
                                <div class="card-footer d-flex justify-content-between bg-light border" style="cursor: pointer" onclick="addToCart(
                                            `<?php echo $row_prd['Code']; ?>`, 
                                            `<?php echo $row_prd['NameProduct']; ?>`,
                                            `<?php echo $row_prd['Price']; ?>`,
                                            `<?php echo $row_prd['Imges']; ?>`
                                            )">
                                    <a> <i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
            <?php }
            } ?>

            <div>
                <a href="?pages=Shop" class="btn btn-light py-2 px-3">See More</a>
            </div>

        </div>
</section>