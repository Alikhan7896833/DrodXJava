function changeView() {
    //     var signUpBox = document.getElementById("signUpBox");
    //     var signInBox = document.getElementById("signInBox");

    //     signUpBox.classList.toggle("d-none");
    //     signInBox.classList.toggle("d-none");

    window.location = "user-login.php";
}


async function signUp() {

    const user_dto = {
        first_name: document.getElementById("first_name").value,
        last_name: document.getElementById("last_name").value,
        email: document.getElementById("email").value,
        password: document.getElementById("password").value,

    };


    const response = await fetch(
            "SignUp",
            {
                method: "POST",
                body: JSON.stringify(user_dto),
                headers: {
                    "Content-Type": "application/json"
                }
            }


    );

    if (response.ok) {
        const json = await response.json();


        if (json.success) {
          
                Swal.fire({
                    title: "Success!",
                    text: "Succesfully Registered",
                    icon: "success",
                    //timer: 3500,
                });

                window.location = "user-login.php"
            
//            Swal.fire({
//                title: "Good job!",
//                text: "Succesfully Registered",
//                icon: "success"
//            });
//

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
            //  document.getElementById("message").innerHTML = json.content;
        }


    } else {

        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer:5000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        Toast.fire({
            icon: "warning",
            title: "Please try again later."
        });
        //  document.getElementById("message").innerHTML = "Please try again later."
    }
}