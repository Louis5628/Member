var product = document.querySelectorAll('.product')
var add_btn = document.querySelectorAll('.addBtn')
var sub_btn = document.querySelectorAll('.subBtn')
var number = document.querySelectorAll('.number')
var price = document.querySelectorAll('.price')

var qty = document.querySelector('.qty')
var subtotal = document.querySelector('.sub-total')
var total_price = document.querySelector('.total-price')
var shipment = document.querySelector('.shipment')

var product_qty = 0
var product_subtotal = 0
var shipment_free = 500
var shipment_price = 60

console.log(qty);

function updateCart() {
    product_qty = 0
    product_subtotal = 0
    for (let i = 0; i < product.length; i++) {
        let item_subtotal = number[i].value * price[i].dataset.price
        price[i].innerHTML = '$' + item_subtotal

        product_qty += parseInt(number[i].value)
        product_subtotal += item_subtotal

    }

    qty.innerHTML = product_qty
    subtotal.innerHTML = '$' + product_subtotal
    calcShipment()
    total_price.innerHTML = '$' + parseFloat(product_subtotal + shipment_price)
    console.log(product_qty);

}


updateCart();


add_btn.forEach(function (ele, i) {
    ele.addEventListener('click', function () {
        number[i].value = parseInt(number[i].value) + 1
        updateCart()
        console.log(add_btn);
    })

})

sub_btn.forEach(function (ele, i) {
    ele.addEventListener('click', function () {
        if (number[i].value > 1) {
            number[i].value = parseInt(number[i].value) - 1
            updateCart()
        }
    })
})

number.forEach(function (ele) {
    ele.addEventListener('change', function () {
        if (ele.value == '' || ele.value == 0) {
            ele.value = 1;
        }
        updateCart();
    });

    ele.addEventListener('keyup', function () {
        ele.value = ele.value.replace(/\D+/g, '');
    })
})


function calcShipment() {
    if (product_subtotal >= shipment_free) {
        shipment_price = 0
        shipment.innerHTML = '$' + shipment_price

    } else {
        shipment_price = 60
        shipment.innerHTML = '$' + shipment_price
    }
}


