async function verifyAccount() {

    const dto = {

        verification: document.getElementById("verification").value,

    };


    const response = await fetch(
            "Verification",
            {
                method: "POST",
                body: JSON.stringify(dto),
                headers: {
                    "Content-Type": "application/json"
                }
            }


    );

    if (response.ok) {
        const json = await response.json();

        if (json.success) {


            Swal.fire({
                title: "Success",
                text: "Verified & Registered Successfully",
                icon: "success"
            });
            window.location = "index.html"
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
            // document.getElementById("message").innerHTML = json.content;
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
        //document.getElementById("message").innerHTML = "Please try again later."
    }
}