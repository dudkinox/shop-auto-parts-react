<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> สินค้า</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="product-list">
                            <thead class="text-primary">
                                <th class="text-center">
                                    Code
                                </th>
                                <th class="text-center">
                                    Date
                                </th>
                                <th class="text-center">
                                    Type
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Imges
                                </th>
                                <th class="text-center">
                                    Detail
                                </th>
                                <th class="text-right">
                                    Price
                                </th>
                                <th class="text-center">
                                    Stock
                                </th>
                                <th class="text-center">
                                    Manager
                                </th>
                            </thead>
                            <tbody>
                                <?php
                                $queryProductList = "SELECT * FROM product";
                                $resultProductList = $conn->query($queryProductList);
                                while ($rowProductList = $resultProductList->fetch_assoc()) {
                                ?>
                                    <tr class="text-center">
                                        <td><?php echo $rowProductList["Code"]; ?></td>
                                        <td><?php echo $rowProductList["CreateAt"]; ?></td>
                                        <td><?php echo $rowProductList["Type"]; ?></td>
                                        <td><?php echo $rowProductList["NameProduct"]; ?></td>
                                        <td> <img src="../<?php echo $rowProductList["Imges"]; ?>" width="100" height="100" alt="image product"> </td>
                                        <td><?php echo $rowProductList["DataProduct"]; ?></td>
                                        <td class="text-right"><?php echo $rowProductList["Price"]; ?> บาท</td>
                                        <td><?php echo $rowProductList["Quantity"]; ?></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="#">
                                                        <img src="https://img.icons8.com/office/30/000000/edit.png" />
                                                    </a>
                                                </div>
                                                <div class="col-6">
                                                    <a href="#" onclick="ConfirmDelete(`<?php echo $rowProductList['Code']; ?>`)">
                                                        <img src="https://img.icons8.com/plasticine/30/000000/filled-trash.png" />
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>