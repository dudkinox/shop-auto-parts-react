<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">
<title>TK Auto Parts Shop</title>
<link rel="shortcut icon" type="image/x-icon" href="https://bit.ly/3MWuVJo">
<link rel="stylesheet" href="assets/css/main.css">
<script src="Template/user/js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="Template/user/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/main.js"></script>
<link href="Template/user/css/bootstrap-custom.css" rel="stylesheet" type="text/css" />
<link href="Template/user/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
<script src="Template/user/plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
<link href="Template/user/plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">
<link href="Template/user/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="Template/user/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="Template/user/plugins/owlcarousel/owl.carousel.min.js"></script>
<link href="Template/user/css/uikit.css" rel="stylesheet" type="text/css" />
<link href="Template/user/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<script src="Template/user/js/script.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        <?php if ($_SESSION['error']) { ?>
            $('#pop-up-error').modal('show');
        <?php
            $_SESSION['error'] = false;
        }
        ?>
        document.getElementById("item-cart").innerHTML = itemCart.length;
        var orders = window.sessionStorage.itemCart ? JSON.parse(window.sessionStorage.itemCart) : [];
        if (orders !== []) {
            let index = 0;
            while (index < orders.length) {
                document.getElementById("order-list").innerHTML += '<div class="row justify-content-between">' +
                    '<div class="col-auto col-md-7">' +
                    '<div class="media flex-column flex-sm-row">' +
                    '<img class=" img-fluid" src="' + orders[index].image + '" width="62" height="62">' +
                    '<div class="media-body my-auto">' +
                    '<div class="row ">' +
                    '<div class="col-auto">' +
                    '<p class="mb-0"><b>&emsp;' + orders[index].name + '</b></p><small class="text-muted">&emsp;' + orders[index].code + '</small>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '<div class=" pl-0 flex-sm-col col-auto  my-auto ">' +
                    '<p><b>' + orders[index].price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ' บาท</b>&emsp;<img style="cursor: pointer" onclick="removeOrder(' + index + ')" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/30/000000/external-delete-web-flaticons-lineal-color-flat-icons.png"/></p>' +
                    '</div>' +
                    '</div>' +
                    '<hr class="my-2">' +
                    '<input type="text" style="display:none" value="' + orders[index].name + '" name="orderName' + index + '" readonly />' +
                    '<input type="text" style="display:none" value="' + orders[index].price + '" name="orderPrice' + index + '" readonly />';
                index++;
            }
            const count = index++;
            document.getElementById("count").value = count;
            var totalPrice = 0;
            for (let index = 0; index < orders.length; index++) {
                totalPrice += Number(orders[index].price);
            }
            document.getElementById("total-price").innerHTML = totalPrice.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            document.getElementById("total").value = totalPrice;
        }
    });
    <?php if (isset($_SESSION["no"])) { ?>

        function addToCart(codes, names, prices, images) {
            itemCart.push({
                code: codes,
                name: names,
                price: prices,
                image: images
            });
            window.sessionStorage.setItem('itemCart', JSON.stringify(itemCart));
            document.getElementById("item-cart").innerHTML = itemCart.length;
        }
    <?php } else { ?>

        function addToCart(product) {
            alert("กรุณาเข้าสู่ระบบก่อนทำการสั่งซื้อ");
        }
    <?php } ?>
</script>