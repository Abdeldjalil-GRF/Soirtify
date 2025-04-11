document.addEventListener("DOMContentLoaded", function () {

    document.getElementById("conditionsLink").addEventListener("click", function (event) {
        event.preventDefault();
        alert("Conditions d'utilisation de Sportify : \n1-Vous devez avoir au moins 18 ans\n2-Si vous êtes mineur, l'autorisation parentale est obligatoire\n3-Pas de remboursement même avec une justification.");
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
            messageContainer.textContent = "All fields are required";
            return;
        }

        if (password !== confirmPassword) {
            messageContainer.textContent = "Passwords are different";
            return;
        }

        // Vérification de la complexité du mot de passe
        let missing = checkPasswordStrength(password);
        if (missing.length > 0) {
            let msg = "Your password is too weak. It must contain:\n- " + missing.join("\n- ");
            //alert(msg);
            messageContainer.textContent = "Password too weak. Please include:\n" + missing.join(", ");
            return;
        }

        //AJAX request to register.php
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
            messageContainer.textContent = result;
            
            if (result.includes("Registration successful")) {
                messageContainer.style.color = "green"; 
                messageContainer.style.backgroundColor = "white";
                setTimeout(() => {
                    window.location.href = "../pages/page_login.php"; 
                }, 3000);
            } else {
                messageContainer.style.color = "red"; 
            }
        } catch (error) {
            messageContainer.textContent = "Une erreur s'est produite. Veuillez réessayer.";
        }
    });

    // Fonction qui retourne la liste des critères manquants
    function checkPasswordStrength(password) {
        let missing = [];

        if (password.length < 8) {
            missing.push("At least 8 characters");
        }
        if (!/[A-Z]/.test(password)) {
            missing.push("At least one uppercase letter");
        }
        if (!/[a-z]/.test(password)) {
            missing.push("At least one lowercase letter");
        }
        if (!/[0-9]/.test(password)) {
            missing.push("At least one number");
        }
        if (!/[@$!%*?&#^()[\]{}]/.test(password)) {
            missing.push("At least one special character (@ $ ! % * ? & # etc.)");
        }

        return missing;
    }

    // Ajout de la vérification en temps réel pour la force du mot de passe
    document.getElementById("password").addEventListener("input", function () {
        let password = this.value.trim();
        let strength = calculatePasswordStrength(password);
        updatePasswordStrengthDisplay(strength);
    });

    // Fonction pour calculer la force du mot de passe
    function calculatePasswordStrength(password) {
        let strength = 0;

        if (password.length >= 8) strength += 20;
        if (/[A-Z]/.test(password)) strength += 20;
        if (/[a-z]/.test(password)) strength += 20;
        if (/[0-9]/.test(password)) strength += 20;
        if (/[@$!%*?&#^()[\]{}]/.test(password)) strength += 20;

        return strength;
    }

    // Fonction pour mettre à jour la barre de progression de la force du mot de passe
    function updatePasswordStrengthDisplay(strength) {
        let progressBar = document.getElementById("passwordStrength");
        let strengthText = document.getElementById("passwordStrengthText");

        progressBar.value = strength;

        if (strength < 40) {
            progressBar.style.backgroundColor = "red";
            strengthText.textContent = "Weak password";
        } else if (strength < 70) {
            progressBar.style.backgroundColor = "yellow";
            strengthText.textContent = "Medium password";
        } else {
            progressBar.style.backgroundColor = "green";
            strengthText.textContent = "Strong password";
        }
    }
});
