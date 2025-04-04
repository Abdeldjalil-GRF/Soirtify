document.getElementById("form_input").addEventListener("submit", async function (event) {
    event.preventDefault(); // Prevent page reload

    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let messageContainer = document.getElementById("message");

    
    messageContainer.textContent = "";

    if (email === "" || password === "") {
        messageContainer.textContent = "All fields are required";
        return;
    }

    // AJAX request to login.php
    let formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);

    try {
        let response = await fetch("/includes/login.php", {
            method: "POST",
            body: formData,
        });

        let result = await response.text();
        messageContainer.textContent = result;

        if (result.includes("success")) {
            window.location.href = "../pages/home.php"; 
        }
    } catch (error) {
        messageContainer.textContent = "An error occurred. Please try again.";
    }
});
