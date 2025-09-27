async function checkSignIn() {
    const response = await fetch(
            "CheckSignIn"
            );
    if (response.ok) {

        const json = await response.json();


        const response_dto = json.response_dto;

        if (response_dto.success) {
            //signed in 

            const user = response_dto.content;


            //  let st_quiick_link = document.getElementById("st-quick-link");
            let st_quick_link1 = document.getElementById("st-quick-link1");


            let st_quiick_link_li_1 = document.getElementById("st-quick-link-li-1");
            st_quiick_link_li_1.remove();

            let st_quiick_link_li_2 = document.getElementById("st-quick-link-li-2");
            st_quiick_link_li_2.remove();

            let new_li_tag1 = document.getElementById("li");
            new_li_tag1.innerHTML = user.first_name + " " + user.last_name;
            st_quick_link1.appendChild(new_li_tag1);

            let st_button_1 = document.getElementById("st-button-1");
            st_button_1.href = "SignOut";

            let st_button_2 = document.getElementById("st-button-2");
            st_button_2.innerHTML = "Sign Out";

        } else {
            //not signed in 
            // console.log("not signed in");
        }

        //display last 5 products
        productList = json.products;


        let i = 1;
        productList.forEach(product => {
            document.getElementById("st-product-title-" + i).innerHTML = product.title;
            document.getElementById("st-product-link-" + i).href = "product-detail.php?=" + product.id;
            document.getElementById("st-product-image-" + i).src = "product-images/" + product.id + "/image1.png";
            document.getElementById("st-product-price-" + i).innerHTML = "Rs." + new Intl.NumberFormat(
                    "en-US",
                    {
                        minimumFractionDigits: 2
                    }
            ).format(product.price);

            i++;

        });

    }


}

async function viewCart() {

    const response = await fetch("product-cart.php");
    if (response.ok) {
        const cartHtmlText = await response.text();

        const parser = new DOMParser();
        const cartHtml = parser.parseFromString(cartHtmlText, "text/html");

        const cart_main = cartHtml.querySelector(".main-content");

        document.querySelector(".main-content").innerHtml = cart_main.innerHTML;
        // console.log(cart_main.innerHTML);

        loadCartItems();
    }


}
async function viewAddProduct() {

    const response = await fetch("addProduct.php");
    if (response.ok) {
        const addProductHtmlText= await response.text();

        const parser = new DOMParser();
        const addProductHtml = parser.parseFromString(addProductHtmlText, "text/html");

        const addProduct_main = addProductHtml.querySelector(".main-content");

        document.querySelector(".main-content").innerHtml = addProduct_main.innerHTML;
         console.log(addProduct_main.innerHTML);

       loadFeatures();
    }


}


