function ConfirmDelete($code){
    var choice = confirm("Are you sure you want to delete this record?");
    if(choice){
        window.location.href = "services/products.service.php?request=delete&code=" + $code;
    }
}