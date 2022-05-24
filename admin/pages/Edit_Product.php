<?php
$code = isset($_GET["code"]) ? $_GET["code"] : '';
$queryProductUpdate = "SELECT * FROM product WHERE Code = '$code'";
$resultProductUpdate = $conn->query($queryProductUpdate);
$rowProductUpdate = $resultProductUpdate->fetch_assoc();
?>
<section class="section-content bg padding-y-sm">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="services/products.service.php?request=Edit_Product&code=<?php echo $code; ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="Code">Code</label>
                        <input type="text" class="form-control" value="<?php echo $rowProductUpdate["Code"]; ?>" readonly name="Code" onchange="InputValidation()" id="Code" placeholder="Enter Code" required>
                    </div>
                    <div class="form-group">
                        <label for="Type">Choose a flavor:</label>
                        <input list="Type" class="form-control" value="<?php echo $rowProductUpdate["Type"]; ?>" name="typeProduct" id="Type name=" Type />

                        <datalist id="Type">
                            <option value="Car Shock Absorber">
                            <option value="Brake pads">
                            <option value="Front and Rear Bumbers and Bumber Frame">
                            <option value="Filter">
                            <option value="Bearings,Ball Bearings,Ball Bearings">
                            <option value="Side Mirror">
                            <option value="Head linght">
                        </datalist>

                    </div>
                    <div class="form-group">
                        <label for="NameProduct">Name Product</label>
                        <input type="text" class="form-control" value="<?php echo $rowProductUpdate["NameProduct"]; ?>" id="NameProduct" name="NameProduct" placeholder="Name Product" required>
                    </div>
                    <div class="form-group">
                        <label for="DataProduct">Data Product</label>
                        <input type="text" class="form-control" value="<?php echo $rowProductUpdate["DataProduct"]; ?>" id="DataProduct" name="DataProduct" placeholder="Data Product" required>
                    </div>
                    <div class="form-group">
                        <label for="Price">Price</label>
                        <input type="Number" class="form-control" value="<?php echo $rowProductUpdate["Price"]; ?>" id="Price" name="Price" placeholder="Price" required>
                    </div>
                    <div class="form-group">
                        <label for="Quantity">Quantity</label>
                        <input type="text" class="form-control" value="<?php echo $rowProductUpdate["Quantity"]; ?>" id="Quantity" name="Quantity" placeholder="Quantity" required>
                    </div>

                    <div class="form-group text-center">
                        <img src="<?php echo '../' . $rowProductUpdate["Imges"]; ?>" id="image-update" width="200" height="200" alt="image" />
                        <label for="Images">Choose a picture:</label>
                        <input type="file" id="Images" onchange="document.getElementById('image-update').style.display = `none`;" name="Images" accept="image/png, image/jpeg">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary col-3" id="submit-register">EDIT PRODUCT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>