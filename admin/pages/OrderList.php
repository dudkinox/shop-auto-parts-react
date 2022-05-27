<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center"> รายการสั่งซื้อ </h4> 
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center" id="product-list">
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
                                $queryOrderList = "SELECT `Number`, Oder, `Name`, Email, `Address`, Phone, ImgSlip, `Sum`, `DateTime`, `Status`
                                                   FROM oders as o 
                                                   INNER JOIN account as a 
                                                   ON o.id_user = a.No";
                                $resultOrderList = $conn->query($queryOrderList);
                                $i=1;
                                while ($rowOrderList = $resultOrderList->fetch_assoc()) {
                                ?>
                                <tr class="text-center">
                                        <td><?php echo  $i;?></td>
                                        <td><?php echo $rowOrderList["Oder"]; ?></td>
                                        <td><?php echo $rowOrderList["Name"]; ?></td>
                                        <td><?php echo $rowOrderList["Email"]; ?></td>
                                        <td><?php echo $rowOrderList["Address"]; ?></td>
                                        <td><?php echo $rowOrderList["Phone"]; ?></td>
                                        <td> <img src="../<?php echo $rowOrderList["ImgSlip"]; ?>" width="100" height="100" alt="Slip"> </td>                           
                                        <td class="text-right"><?php echo number_format($rowOrderList["Sum"]); ?> บาท</td>
                                        <td><?php echo $rowOrderList["DateTime"]; ?></td>
                                        <td><?php echo $rowOrderList["Status"]; ?></td>
                                        <td>
                                           
                                        </td>
                                    </tr>
                                   
                                <?php $i++;} ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
