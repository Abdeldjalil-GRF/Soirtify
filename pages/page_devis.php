<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <!-- BEBAS nueue Font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <!--my srtle css -->
    <link rel="stylesheet" href="/Sportify/assets/css/devis.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Sportify/assets/css/devis.css">
    <title>Devis</title>
</head>
<body id="devis_id">
    <div class="custom-container">
        <div class="row">
            <!-- Offers section -->
                
                <div class="col-6" >
                    <h1>Options</h1>
                    <div class="scrollspy-example p-3 border rounded" tabindex="0">
                        <!-- Brazilian Jiu-Jitsu -->
                        <div class="sport-container mb-4">
                            <h4>Brazilian Jiu-Jitsu</h4>
                            <form id="bjj-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="bjj-level" value="Beginner" id="bjj-beginner" />
                                        <label for="bjj-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="bjj-level" value="Intermediate" id="bjj-intermediate" />
                                        <label for="bjj-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="bjj-level" value="Advanced" id="bjj-advanced" />
                                        <label for="bjj-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button"  class="btn_add me-3" onclick="addOffer('bjj',this)">Add</button>
                            </form>
                        </div>

                        <!--Judo-->
                        <div class="sport-container mb-4">
                            <h4>Judo</h4>
                            <form id="judo-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="judo-level" value="Beginner" id="judo-beginner" />
                                        <label for="judo-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="judo-level" value="Intermediate" id="judo-intermediate" />
                                        <label for="bjj-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="judo-level" value="Advanced" id="judo-advanced" />
                                        <label for="judo-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button" class="btn_add" onclick="addOffer('judo',this)">Add</button>
                            </form>
                        </div>

                        <!--Boxe-->
                        <div class="sport-container mb-4">
                            <h4>Boxe</h4>
                            <form id="boxe-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="boxe-level" value="Beginner" id="boxe-beginner" />
                                        <label for="boxe-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="boxe-level" value="Intermediate" id="boxe-intermediate" />
                                        <label for="boxe-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="boxe-level" value="Advanced" id="boxe-advanced" />
                                        <label for="boxe-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button" class="btn_add" onclick="addOffer('boxe',this)">Add</button>
                            </form>
                        </div>

                        <!--Thai-->
                        <div class="sport-container mb-4">
                            <h4>Muay Thai</h4>
                            <form id="thai-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="thai-level" value="Beginner" id="thai-beginner" />
                                        <label for="thai-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="thai-level" value="Intermediate" id="thai-intermediate" />
                                        <label for="thai-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="thai-level" value="Advanced" id="thai-advanced" />
                                        <label for="thai-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button" class="btn_add" onclick="addOffer('thai',this)">Add</button>
                            </form>
                        </div>


                        <!--Karate-->
                        <div class="sport-container mb-4">
                            <h4>Karate</h4>
                            <form id="karate-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="karate-level" value="Beginner" id="karate-beginner" />
                                        <label for="karate-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="karate-level" value="Intermediate" id="karate-intermediate" />
                                        <label for="karate-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="karate-level" value="Advanced" id="karate-advanced" />
                                        <label for="karate-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button" class="btn_add" onclick="addOffer('karate',this)">Add</button>
                            </form>
                        </div>

                        <!--Musculation-->
                        <div class="sport-container mb-4">
                            <h4>BodyBuilding</h4>
                            <form id="body-form">
                                <div class="row">
                                    <!-- Beginner Class -->
                                    <div class="col-4">
                                        <h5>Beginner</h5>
                                        <input type="radio" name="body-level" value="Beginner" id="body-beginner" />
                                        <label for="body-beginner">Monday 8AM</label>
                                    </div>
                                    <!-- Intermediate Class -->
                                    <div class="col-4">
                                        <h5>Intermediate</h5>
                                        <input type="radio" name="body-level" value="Intermediate" id="body-intermediate" />
                                        <label for="body-intermediate">Wednesday 6PM</label>
                                    </div>
                                    <!-- Advanced Class -->
                                    <div class="col-4">
                                        <h5>Advanced</h5>
                                        <input type="radio" name="body-level" value="Advanced" id="body-advanced" />
                                        <label for="body-advanced">Friday 4PM</label>
                                    </div>
                                </div>
                                <button type="button" class="btn_add" onclick="addOffer('body',this)">Add</button>
                            </form>
                        </div>
                    </div>
                </div>


    
            <!-- Right Column (selected offers) -->
            <div class="col-md-6">
                    <!-- selected offers + total price + save -->
                    <h1>Chosen Offers</h1>
                    <ul class="list-group mb-3" id="offers_chosen">
                       <!-- Dynamically filled -->
                    </ul>
                    <div >
                        <h6>Total Price: <span id="total_price">0 €</span></h6>
                        <form method="post" action="/Sportify/includes/devis_mail.php">
                        <button class="btn btn-success mt-2" onclick="sendMail(this)">Send eTicket</button>
                        </form> 
                    </div>
                    <p id="response-message" class="mt-3 text-center"></p>
            </div>
      </div>
    </div>

    <script src="/Sportify/assets/js/devis.js"></script>
</body>
</html>

<?php


?>