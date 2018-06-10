function sendEmail(){
    var ename = $('#cart-name').val();
    var email = $('#cart-email').val();
    var ephone = $('#cart-phone').val();
    if(ename!='' && email!='' && ephone!=''){
        if(isEmpty(cart) || isEmpty(cartGuitar)){
            $.post(
                "core/cart-mail.php",
                {
                    "ename" : ename,
                    "email" : email,
                    "ephone" : ephone,
                    "cart" : cart,
                    "cartGuitar" : cartGuitar,
                    "cartPiano" : cartPiano,
                    "cartDrums" : cartDrums,
                },
                function (data) {
                    if (data==1) {
                        alert("Заказ отправлен")
                    }
                    else {
                        alert("Повторите заказа")
                    }
                }
            );

        }
        else{
            alert("Корзина пуста");
        }
    }
    else {
        alert("Заполните все поля");
    }
}
