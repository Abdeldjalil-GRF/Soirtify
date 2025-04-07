document.getElementById("contact-form").addEventListener("submit", function(event) {
    event.preventDefault();

    let formData = new FormData(this);
    let responseMessage = document.getElementById("response-message");
    let submitButton = this.querySelector("button[type='submit']");

    // Récupération des champs
    let nom = document.getElementById("nom").value.trim();
    let prenom = document.getElementById("prenom").value.trim();
    let email = document.getElementById("email").value.trim();
    let num_tel = document.getElementById("num_tel").value.trim();
    let message = document.getElementById("message").value.trim();

    // Vérification des champs obligatoires
    if (nom === "" || prenom === "" || num_tel === "" || email === "" || message === "") {
        responseMessage.innerHTML = "Veuillez remplir tous les champs.";
        responseMessage.style.color = "red";
        return;
    }

    // Validation de l'email
    if (!validateEmail(email)) {
        responseMessage.innerHTML = "Veuillez saisir un email valide.";
        responseMessage.style.color = "red";
        return;
    }

    responseMessage.innerHTML = "Envoi en cours...";
    responseMessage.style.color = "blue";
    submitButton.disabled = true;

    fetch('/SPORTIFY/includes/contact_form.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        responseMessage.innerHTML = data.message;
        responseMessage.style.color = data.status === 'success' ? "green" : "red";
        if (data.status === 'success') {
            document.getElementById("contact-form").reset();
        }
    })
    .catch(error => {
        console.log(error);
        responseMessage.innerHTML = "Une erreur est survenue lors de l'envoi.";
        responseMessage.style.color = "red";
    })
    .finally(() => {
        submitButton.disabled = false;
    });
});

function validateEmail(email) {
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}
