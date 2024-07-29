let cart = [];

function addToCart (product, price) {

    cart.push ({ product, price });

    updateCart ();

}

function updateCart () {

    let cartItems = document.getElementById ('cart-items');

    let total = document.getElementById ('total');
    
    let cartData = document.getElementById ('cart_data');

    cartItems.innerHTML = '';

    let totalPrice = 0;

    cart.forEach (item => {

        let li = document.createElement ('li');

        li.textContent = `${item.product} - $${item.price.toFixed (2)}`;

        cartItems.appendChild (li);

        totalPrice += item.price;

    });

    total.textContent = totalPrice.toFixed (2);

    cartData.value = JSON.stringify (cart);

}