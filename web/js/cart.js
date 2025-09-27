async function loadCartItems() {



    const response = await fetch(
            "LoadCartItems"
            );

    const popup = Notification();

    if (response.ok) {

        const json = await response.json();

        if (json.length == 0) {

   const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Cart is empty"
            });

//            popup.error({
//                message: "Cart is empty"
//            });

        } else {
            let cartItemContainer = document.getElementById("cart-item-container");
            let cartItemRow = document.getElementById("cart-item-row");

            cartItemContainer.innerHTML = "";

            let totalQty = 0;
            let total = 0;

            json.forEach(item => {

                let itemSubTotal = item.product.price * item.qty;

                totalQty += item.qty;
                total += itemSubTotal;

                let cartItemRowClone = cartItemRow.cloneNode(true);
                cartItemRowClone.querySelector("#cart-item-a").href = "single-product.html?id=" + item.product.id;
                cartItemRowClone.querySelector("#cart-item-img").src = "product-images/" + item.product.id + "/image2.png";
                cartItemRowClone.querySelector("#cart-item-title").innerHTML = item.product.title;
              cartItemRowClone.querySelector("#cart-item-seller").innerHTML = item.product.user;
                cartItemRowClone.querySelector("#cart-item-price").innerHTML = "Rs." + new Intl.NumberFormat(
                        "en-US",
                        {
                            minimumFractionDigits: 2
                        }
                ).format(item.product.price);
                cartItemRowClone.querySelector("#cart-item-qty").value = item.qty;
                cartItemRowClone.querySelector("#cart-item-subtotal").innerHTML = "Rs." + new Intl.NumberFormat(
                        "en-US",
                        {
                            minimumFractionDigits: 2
                        }
                ).format(itemSubTotal);

                cartItemContainer.appendChild(cartItemRowClone);
            });

            document.getElementById("cart-total-qty").innerHTML = totalQty;
            document.getElementById("cart-total").innerHTML = "Rs." + new Intl.NumberFormat(
                    "en-US",
                    {
                        minimumFractionDigits: 2
                    }
            ).format(total);
      document.getElementById("cart-total1").innerHTML = "Rs." + new Intl.NumberFormat(
                    "en-US",
                    {
                        minimumFractionDigits: 2
                    }
            ).format(total);

        }

    } else {
        
        const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: "Unable to process your request"
            });
//        popup.error({
//            message: "Unable to process your request"
//        });
    }

}



