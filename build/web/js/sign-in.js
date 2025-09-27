
function changeView1() {

    window.location = "user-register.php";
}



async function signIn() {

    const user_dto = {

        email: document.getElementById("email").value,
        password: document.getElementById("password").value,

    };


    const response = await fetch(
            "SignIn",
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
            window.location = "index.html"
        } else {
            
            if(json.content==="Unverified"){
                window.location = "verify-account.html"
                
            }else{
                  
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