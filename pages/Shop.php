<!DOCTYPE html>
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
                            <a><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                        </div>
                    </figcaption>
                </figure>
            </div>
    <?php }
    } ?>
</div>