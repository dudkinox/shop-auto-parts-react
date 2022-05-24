function InputValidation() {
    var emailRegister = document.getElementById("email-register").value;
    var PasswordRegister = document.getElementById("password-register").value;
    var ConfirmPasswordRegister = document.getElementById("confirm-password").value;
    var addressRegister = document.getElementById("address").value;
    var zipCodeRegister = document.getElementById("zip-code").value;
    var phoneegister = document.getElementById("phone").value;
    if (emailRegister === "") {
        document.getElementById("alert-email").style.display = "block";
        document.getElementById("alert-email").innerHTML = "▶ กรุณากรอก Email";
    }else{
        if (PasswordRegister === "") {
            document.getElementById("alert-email").style.display = "none";
            document.getElementById("alert-password").style.display = "block";
            document.getElementById("alert-password").innerHTML = "▶ กรุณากรอก Password";
        }else{
            if (ConfirmPasswordRegister === "") {
                document.getElementById("alert-password").style.display = "none";
                document.getElementById("alert-confirm-password").style.display = "block";
                document.getElementById("alert-confirm-password").innerHTML = "▶ กรุณากรอก Confirm Password";
            }else{
                if(PasswordRegister !== ConfirmPasswordRegister){
                    document.getElementById("alert-confirm-password").style.display = "none";
                    document.getElementById("alert-confirm-password").style.display = "block";
                    document.getElementById("alert-confirm-password").innerHTML = "▶ Password ไม่ตรงกัน";
                }else{
                    if (addressRegister === "") {
                        document.getElementById("alert-confirm-password").style.display = "none";
                        document.getElementById("alert-address").style.display = "block";
                        document.getElementById("alert-address").innerHTML = "▶ กรุณากรอก Address";
                    }else{
                        if (zipCodeRegister === "") {
                            document.getElementById("alert-address").style.display = "none";
                            document.getElementById("alert-zip-code").style.display = "block";
                            document.getElementById("alert-zip-code").innerHTML = "▶ กรุณากรอก Zip Code";
                        }else{
                            if (phoneegister === "") {
                                document.getElementById("alert-zip-code").style.display = "none";
                                document.getElementById("alert-phone").style.display = "block";
                                document.getElementById("alert-phone").innerHTML = "▶ กรุณากรอก Phone";
                            }else{
                                document.getElementById("alert-phone").style.display = "none";
                                document.getElementById("alert-validate").className = "alert alert-success";
                                document.getElementById("header-alert-register").innerHTML = "✔ รูปแบบการกรอกข้อมูลถูกต้อง";
                                document.getElementById("submit-register").disabled = false;
                            }
                        }
                    }
                }
            }
        }
    }
}  

const itemCart = window.sessionStorage.itemCart ? JSON.parse(window.sessionStorage.itemCart) : [];

function uploadImageSlip(){
    document.getElementById("upload-slip").click();
}

function previewSlip(){
    var file = document.getElementById("upload-slip").files[0];
    var reader = new FileReader();
    reader.onloadend = function() {
        document.getElementById("slip-image-upload").src = reader.result;
    }
    if (file) {
        reader.readAsDataURL(file);
    } else {
        document.getElementById("slip-image-upload").src = "";
    }
}

function removeOrder(index){
    itemCart.splice(index, 1);
    window.sessionStorage.itemCart = JSON.stringify(itemCart);
    window.location.reload();
}