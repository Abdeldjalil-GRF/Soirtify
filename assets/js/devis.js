let totalPrice = 0;

const addedSports = new Set();

function addOffer(sport, btn) {
    const selectedLevel = document.querySelector(`input[name="${sport.toLowerCase()}-level"]:checked`);

    if (!selectedLevel) {
        alert(`Please select a level for ${sport} before adding.`);
        return;
    }

    if (addedSports.has(sport)) {
        alert(`${sport} already added. Only one level per sport allowed.`);
        return;
    }

    const level = selectedLevel.value;
    let price = 0;

    switch (level.toLowerCase()) {
        case "beginner": price = 30; break;
        case "intermediate": price = 25; break;
        case "advanced": price = 20; break;
        default:
            alert("Unknown level selected");
            return;
    }

    const message = `
    <span class="sport-name">${sport}</span>
    <span class="level">${level}</span>
    <span class="price">${price}€</span>`;

    const li = document.createElement('li');
    li.className = 'list-group-item d-flex justify-content-between align-items-center';
    li.innerHTML = `
        ${message}
        <button class="btn btn-danger btn-sm">Cancel</button>
    `;

    // btn cancel 
    li.querySelector('button').addEventListener('click', function () {
        li.remove();
        totalPrice -= price;
        updateTotalPrice();
        addedSports.delete(sport);
        if (btn) btn.disabled = false; 
    });

    document.getElementById('offers_chosen').appendChild(li);
    totalPrice += price;
    updateTotalPrice();

    selectedLevel.checked = false;     
    addedSports.add(sport);            
   
}

function updateTotalPrice() {
    document.getElementById('total_price').textContent = `${totalPrice} €`;
}

// to send the mail 
function sendMail(btn) {
    // getting the message element
    let responseMessage = document.getElementById("response-message");
    responseMessage.innerHTML = "Sending...";
    responseMessage.style.color = "blue";
    btn.disabled = true;

    //data to sent to the server [sports chosen + total proce]
    const formData = new FormData();
    formData.append('added_sports', JSON.stringify(Array.from(addedSports))); 
    formData.append('total_price', totalPrice); 

    // make POST request to send the data to PHP
    fetch('/SPORTIFY/includes/devis_mail.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        responseMessage.innerHTML = data.message;
        responseMessage.style.color = data.status === 'success' ? "green" : "red";
        // window.location.reload();
        setTimeout(() => {
            window.location.href="/Sportify/pages/home.php" 
        }, 3000);
    })
    .catch(error => {
        console.log(error);
        responseMessage.innerHTML = "An error occurred while sending.";
        responseMessage.style.color = "red";
    })
    .finally(() => {
        btn.disabled = false;
    });
}
