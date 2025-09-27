var modelList;


async function loadFeatures() {



    const response = await fetch(
            "LoadFeatures"
            );

    if (response.ok) {
        const json = await response.json();


        const categoryList = json.categoryList;
        modelList = json.modelList;
        const colorList = json.colorList;
        const sizeList = json.sizeList;


        loadSelect("categorySelect", categoryList, "name");
        //loadSelect("modelSelect", modelList, "name");
        loadSelect("sizeSelect", sizeList, "value");
        loadSelect("colorSelect", colorList, "name");



    } else {
        document.getElementById("message").innerHTML = "Please try again later."
    }
}


function loadSelect(selectTagId, list, property) {

    const SelectTag = document.getElementById(selectTagId);
    list.forEach(item => {
        let optionTag = document.createElement("option");
        optionTag.value = item.id;
        optionTag.innerHTML = item[property];
        SelectTag.appendChild(optionTag);
    });

}

function updateModels() {

    let modelSelectTag = document.getElementById("modelSelect");
    modelSelectTag.length = 1;



    let selectedCategoryId = document.getElementById("categorySelect").value;


    modelList.forEach(model => {
        if (model.category.id == selectedCategoryId) {
            let optionTag = document.createElement("option");
            optionTag.value = model.id;
            optionTag.innerHTML = model.name;
            modelSelectTag.appendChild(optionTag);
        }
    });
}

async function productListing() {
    const categorySelectTag = document.getElementById("categorySelect");
    const modelSelectTag = document.getElementById("modelSelect");
    const titleTag = document.getElementById("title");
    const descriptionTag = document.getElementById("description");
    const sizeSelectTag = document.getElementById("sizeSelect");
    const colorSelectTag = document.getElementById("colorSelect");
    const priceTag = document.getElementById("price");
    const quantityTag = document.getElementById("quantity");
    const image1Tag = document.getElementById("image1");
    const image2Tag = document.getElementById("image2");
    const image3Tag = document.getElementById("image3");

    const data = new FormData();
    data.append("categoryId", categorySelectTag.value);
    data.append("modelId", modelSelectTag.value);
    data.append("title", titleTag.value);
    data.append("description", descriptionTag.value);
    data.append("sizeId", sizeSelectTag.value);
    data.append("colorId", categorySelectTag.value);
    data.append("price", priceTag.value);
    data.append("quantity", quantityTag.value);
    data.append("image1", image1Tag.files[0]);
    data.append("image2", image2Tag.files[0]);
    data.append("image3", image3Tag.files[0]);



    const response = await fetch(
            "ProductListing",
            {
                method: "POST",
                body: data
            }



    );

    if (response.ok) {
        const json = await response.json();
        const messageTag = document.getElementById("message");
        if (json.success) {
            categorySelectTag.value = 0;
            modelSelectTag.value = 1;
            titleTag.value = "";
            descriptionTag.value = "";
            sizeSelectTag.value = 0;
            colorSelectTag.value = 0;
            priceTag.value = "";
            quantityTag.value = 1;
            image1Tag.value = null;
            image2Tag.value = null;
            image3Tag.value = null;

           ;
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
                icon: "warning",
                title: json.content
            });
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
                title: "Please try again later."
            });
        //document.getElementById("message").innerHTML = "Please try again later.";
    }

}


