<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Sportify/assets/css/devis.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Sportify/assets/css/devis.css">
    <title>Devis</title>
</head>
<body>
    <div class="custom-container">
        <div class="row">
                <!-- Offers section (right part) -->
                <div class="col-6">
                  <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0"
                    class="scrollspy-example p-3 border rounded"
                    tabindex="0" style="height: 400px; overflow-y: scroll;">
                    <h4 id="list-item-1">Football Offers</h4>
                    <p>Monday 8AM <button class="btn btn-sm btn-primary" onclick="addOffer('Football - Monday 8AM')">Add</button></p>
                    <p>Wednesday 6PM <button class="btn btn-sm btn-primary" onclick="addOffer('Football - Wednesday 6PM')">Add</button></p>
                    <p>Friday 4PM <button class="btn btn-sm btn-primary" onclick="addOffer('Football - Friday 4PM')">Add</button></p>

                    <h4 id="list-item-2">Basketball Offers</h4>
                    <p>Tuesday 10AM <button class="btn btn-sm btn-primary" onclick="addOffer('Basketball - Tuesday 10AM')">Add</button></p>
                    <p>Thursday 2PM <button class="btn btn-sm btn-primary" onclick="addOffer('Basketball - Thursday 2PM')">Add</button></p>
                    <p>Saturday 5PM <button class="btn btn-sm btn-primary" onclick="addOffer('Basketball - Saturday 5PM')">Add</button></p>

                    <!-- Add more sports... -->
                  </div>
                </div>

    
            <!-- Right Column (selected offers) -->
            <div class="col-md-6">
                    <!-- selected offers + total price + save -->
                    <h5>Chosen Offers</h5>
                    <ul class="list-group mb-3" id="offers_chosen">
                       <!-- Dynamically filled -->
                    </ul>
                    <h6>Total Price: <span id="total_price">0 €</span></h6>
                    <button class="btn btn-success mt-2" onclick="saveReservation()">Save Reservation</button>
            </div>
      </div>
    </div>
</body>
</html>

<?php


?>