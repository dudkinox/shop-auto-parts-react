<?php
include('http/client.php');
$act = isset($_GET['act']) ? $_GET['act'] : '';


if ($act == 'cart' && !empty($ID)) {
    if (isset($_SESSION['cart'][$ID])) {
        $_SESSION['cart'][$ID]++;
    } else {
        $_SESSION['cart'][$ID] = 1;
    }
}

$No = $_SESSION["no"];
$queryGetAccount = "SELECT * FROM `account` WHERE `No` = '$No'";
$resultGetAccount = $conn->query($queryGetAccount);
$rowGetAccount = $resultGetAccount->fetch_assoc();


?>

<div class=" container-fluid my-5 ">
    <div class="row justify-content-center ">
        <div class="col-xl-10">
            <div class="card shadow-lg ">
                <div class="row p-2 mt-3 justify-content-between mx-sm-2">
                    <div class="col">
                        <p class="text-muted space mb-0 shop"> Shop No.
                            <?php
                            $num = rand(1, 10000);
                            echo $num;
                            ?>
                        </p>
                    </div>
                </div>
                <form action="services/order.service.php?request=insert" enctype="multipart/form-data" method="POST">
                    <div class="row justify-content-around">
                        <div class="col-md-5">
                            <div class="card border-0">
                                <div class="card-header pb-0">
                                    <h2 class="card-title space ">Checkout</h2>
                                    <p class="card-text text-muted mt-4  space">SHIPPING DETAILS</p>
                                    <hr class="my-0">
                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-between">
                                        <div class="col-auto mt-0">
                                            <p class="h6"><b class="h5">Address : </b> <?php echo $rowGetAccount["Address"]; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6"><b class="h5">Email : </b> <?php echo $rowGetAccount["Email"]; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6"><b class="h5">Phone : </b> <?php echo $rowGetAccount["Phone"]; ?></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6"><b class="h5">Name : <input type="text" name="name" class="form-control" required></b></p>
                                        </div>
                                        <div class="col-auto">
                                            <p class="h6"><b class="h5">Last Name : <input type="text" name="lname" class="form-control" required></b></p>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col">
                                            <p class="text-muted mb-2">PAYMENT DETAILS</p>
                                            <hr class="mt-0">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="Assets/Img/PromptPay.jpg" alt="Prompt Pay" width="250" height="500">
                                    </div>
                                    <div class="form-group text-center">
                                        <img src="Assets/Img/TTB.png" alt="Prompt Pay" width="35" height="30">
                                        <label for="text">&emsp;บัญชีธนาคาร TTB : 057-259-3283 </label>
                                    </div>
                                    <div class="row mb-md-5">
                                        <div class="col">
                                            <button type="button" onclick="uploadImageSlip()" for="upload-slip" class="btn btn-primary btn-block ">แนบสลิป</button>
                                            <input type="file" class="form-control" name="imageSlip" style="display: none" onchange="previewSlip()" id="upload-slip" required/>
                                            <input type="text" style="display: none" name="total" id="total" />
                                            <input type="number" style="display: none" name="count" id="count" readonly/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card border-0 ">
                                <div class="card-header card-2">
                                    <p class="card-text text-muted mt-md-4  mb-2 space">YOUR ORDER <span class=" small text-muted ml-2 cursor-pointer">EDIT SHOPPING BAG</span> </p>
                                    <hr class="my-2">
                                </div>
                                <div class="card-body pt-0" data-spy="scroll" data-offset="50" data-target=".order-list">
                                    <span id="order-list" class="order-list"></span>
                                    <div class="text-right">
                                        <p class="h6"><b class="h3">Total :  <span id="total-price">0</span> บาท</b></p>
                                    </div>
                                    <div class="row mb-5 mt-4 ">
                                        <div class="col-md-7 col-lg-6 mx-auto"><button type="submit" class="btn btn-block btn-outline-primary btn-lg">ยืนยันการชำระเงิน</button></div>
                                        <img id="slip-image-upload" class="img-fluid mt-5" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>