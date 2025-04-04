document.addEventListener("DOMContentLoaded", function () {

    
    document.getElementById("conditionsLink").addEventListener("click", function (event) {
        event.preventDefault();
        alert("Conditions d'utilisation de Sportify : \n1-Vous devez avoir au moins 18ans\n2-Si vous étes mineurs, l'autorisation paternal est obligatoire \n3- pas de remboursement meme avec une justifcation \n "); 
    });

    document.getElementById("register_form").addEventListener("submit", async function (event) {
        event.preventDefault(); 

        
        let lastname = document.getElementById("lastname").value.trim();
        let firstname = document.getElementById("firstname").value.trim();
        let email = document.getElementById("email").value.trim();
        let birthday = document.getElementById("birthday").value.trim();
        let password = document.getElementById("password").value.trim();
        let confirmPassword = document.getElementById("cpassword").value.trim();
        let checkbox = document.getElementById("conditions");
        let messageContainer = document.getElementById("message");

       
        messageContainer.style.display = "block";
        messageContainer.textContent = ""; 
        messageContainer.style.color = "red"; 

        if (!checkbox.checked) {
            messageContainer.textContent = "You have to accept our general conditions";
            return;
        }

        if (lastname === "" || firstname === "" || email === "" || birthday === "" || password === "" || confirmPassword === "") {
            console.log("Empty fields detected!"); 
            messageContainer.textContent = "All fields are required";
            //alert("Veuillez remplir tous les champs !");
            return;
        }

        if (password !== confirmPassword) {
            messageContainer.textContent = "Passwords are diffrent";
            //alert("Les mots de passe ne correspondent pas !");
            return;
        }

        //  AJAX request to register.php
        let formData = new FormData();
        formData.append("firstname", firstname);
        formData.append("lastname", lastname);
        formData.append("email", email);
        formData.append("password", password);
        formData.append("birthday", birthday);

        try {
            let response = await fetch("../includes/register.php", {
                method: "POST",
                body: formData,
            });

            let result = await response.text(); 
            // console.log("Server Response:", result); 

            messageContainer.textContent = result;
            
            if (result.includes("Registration successful")) {
                messageContainer.style.color = "green"; 
                messageContainer.style.backgroundColor = "white";
                // after 3s to the login page 
                setTimeout(() => {
                    window.location.href="../pages/page_login.php"; 
                }, 3000);

            } else {
                messageContainer.style.color = "red"; //error message in red
            }
        } catch (error) {
            //console.error("Fetch error:", error); 
            messageContainer.textContent = "Une erreur s'est produite. Veuillez réessayer.";
        }
    });
});
