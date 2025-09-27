async function loadProduct() {
    const parameters = new URLSearchParams(window.location.search);


    if (parameters.has("id")) {
        const productId = parameters.get("id");

        const response = await fetch("LoadSingleProduct?id=" + productId);

        if (response.ok) {
            const json = await response.json();


            const id = json.product.id;
            document.getElementById("image1").src = "product-images/" + id + "/image1.png";
            document.getElementById("image2").src = "product-images/" + id + "/image2.png";
            document.getElementById("image3").src = "product-images/" + id + "/image3.png";

            document.getElementById("image1-thumb").src = "product-images/" + id + "/image1.png";
            document.getElementById("image2-thumb").src = "product-images/" + id + "/image2.png";
            document.getElementById("image3-thumb").src = "product-images/" + id + "/image3.png";

            document.getElementById("product-title").innerHTML = json.product.title;
            document.getElementById("product-published-on").innerHTML = json.product.date_time;
            document.getElementById("product-price").innerHTML = new Intl.NumberFormat("en-US", {minimumFractionDigits: 2}).format(json.product.price);
            document.getElementById("product-category").innerHTML = json.product.model.category.name;
            document.getElementById("product-model").innerHTML = json.product.model.name;
            document.getElementById("product-size").innerHTML = json.product.size.value;
            document.getElementById("product-qty").innerHTML = json.product.qty;
            document.getElementById("product-seller").innerHTML = json.product.user.first_name;
            document.getElementById("product-color").innerHTML = json.product.color.name;
            document.getElementById("product-description").innerHTML = json.product.description;
            document.getElementById("add-to-cart-main").addEventListener(
                    "click",
                    (e) => {
                addToCart(
                        json.product.id,
                        document.getElementById("add-to-cart-qty").value
                        );
                e.preventDefault();
            });

            let productHtml = document.getElementById("similar-product");
            document.getElementById("similar-product-main").innerHTML = "";


            json.productList.forEach(item => {

                // let productHtml = document.getElementById("similar-product");
                let productCloneHtml = productHtml.cloneNode(true);

                productCloneHtml.querySelector("#similar-product-a1").href = "product-detail.php?id=" + item.id;
                productCloneHtml.querySelector("#similar-product-image").src = "product-images/" + item.id + "/image1.png";
                productCloneHtml.querySelector("#similar-product-a2").href = "product-detail.php?id=" + item.id;
                productCloneHtml.querySelector("#similar-product-title").innerHTML = item.title;
                productCloneHtml.querySelector("#similar-product-price").innerHTML = "Rs." + new Intl.NumberFormat("en-US", {minimumFractionDigits: 2}).format(item.price);

                productCloneHtml.querySelector("#similar-product-add-to-cart").addEventListener(
                        "click",
                        (e) => {
                    addToCart(item.id, 1);
                    e.preventDefault();
                });

                //change other tags
                document.getElementById("similar-product-main").appendChild(productCloneHtml);


            });
        }

    } else {
        window.location = "index.html";
    }


}

async function addToCart(id, qty) {

    const response = await fetch(
            "AddToCart?id=" + id + "&qty=" + qty
            );

    if (response.ok) {

        const json = await response.json();

        const popup = Notification();
        popup.setProperty({
            duration: 5000,
            isHidePrev: true
        });

        if (json.success) {
            
   const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "success",
                title: json.content
            });
//            popup.success({
//                message: json.content
//            });

        } else {
   const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title: json.content
            });
//            popup.error({
//                message: json.content
//            });

        }

    } else {
           const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: "error",
                title:  "Unable to process your request"
            });
//        popup.error({
//            message: "Unable to process your request"
//        });
    }

}