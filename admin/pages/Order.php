<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"> รายการสั่งซื้อ </h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="Order">
                            <thead class="text-primary">
                                <th class="text-center">
                                    NO.
                                </th>
                                <th class="text-center">
                                    Order
                                </th>
                                <th class="text-center">
                                    Name
                                </th>
                                <th class="text-center">
                                    Email
                                </th>
                                <th class="text-center">
                                    Address
                                </th>
                                <th class="text-center">
                                    Phone
                                </th>
                                <th class="text-center">
                                    Slip
                                </th>
                                <th class="text-right">
                                    Total
                                </th>
                                <th class="text-right">
                                    Date&Time
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                               
                            </thead>
                            <tbody>
                                <?php
                                $queryProductList = "SELECT * FROM product";
                                $queryProductList = "SELECT * FROM oders";
                                $resultProductList = $conn->query($queryProductList);
                                while ($rowProductList = $resultProductList->fetch_assoc()) {
                                ?>
                                   
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>