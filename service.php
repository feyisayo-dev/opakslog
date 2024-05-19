<?php

if (isset($_GET['email'])) {
    $email = ($_GET['email']);
} else {
    $email = "";
}

if (isset($_GET['name'])) {
    $name = ($_GET['name']);
} else {
    $name = "Customer";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>OPAKS - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css\font\bootstrap-icons.css">
    <link rel="stylesheet" href="css\fontawesome.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/service.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+234 904 143 4442</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>opakshub@gmail.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i>OPAKS</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="#home" class="nav-item nav-link active">Home</a>
                    <a href="index.html#about" class="nav-item nav-link">About</a>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <a href="#GetDis" class="btn btn-primary py-2 px-4 d-none d-lg-block">Dispatch your goods</a>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Dispatch Your Goods <?php echo $name; ?></h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Fast</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Reliable</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="row">

                <div class="mx-auto container">

                    <div id="progress-form" class="p-4 progress-form" lang="en">

                        <div class="d-flex align-items-start mb-3 sm:mb-5 progress-form__tabs" role="tablist">
                            <button id="progress-form__tab-1" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-1" aria-selected="true">
                                <span class="d-block step" aria-hidden="true">Step 1 <span class="sm:d-none">of 4</span></span>
                                Details
                            </button>
                            <button id="progress-form__tab-2" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-2" aria-selected="false" tabindex="-1" aria-disabled="true">
                                <span class="d-block step" aria-hidden="true">Step 2 <span class="sm:d-none">of 4</span></span>
                                Picking Address
                            </button>
                            <button id="progress-form__tab-3" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-3" aria-selected="false" tabindex="-1" aria-disabled="true">
                                <span class="d-block step" aria-hidden="true">Step 3 <span class="sm:d-none">of 4</span></span>
                                Delivery Address
                            </button>
                            <button id="progress-form__tab-4" class="flex-1 px-0 pt-2 progress-form__tabs-item" type="button" role="tab" aria-controls="progress-form__panel-4" aria-selected="false" tabindex="-1" aria-disabled="true">
                                <span class="d-block step" aria-hidden="true">Step 4 <span class="sm:d-none">of 4</span></span>
                                Price
                            </button>
                        </div>

                        <section id="progress-form__panel-1" role="tabpanel" aria-labelledby="progress-form__tab-1" tabindex="0">
                            <div class="sm:d-grid sm:grid-col-2 sm:mt-3">
                                <div class="mt-3 sm:mt-0 form__field">
                                    <label for="first-name">
                                        First name
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input id="first-name" type="text" value="<?php echo $name; ?>" name="first-name" autocomplete="given-name" required>
                                </div>

                                <div class="mt-3 sm:mt-0 form__field">
                                    <label for="last-name">
                                        Last name
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input id="last-name" type="text" name="last-name" autocomplete="family-name" required>
                                </div>
                            </div>

                            <div class="mt-3 form__field">
                                <label for="email-address">
                                    Email address
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="email-address" type="email" value="<?php echo $email; ?>" name="email-address" autocomplete="email" inputmode="email" required>
                            </div>

                            <!-- <div class="mt-1 form__field">
                                <label class="form__choice-wrapper">
                                    <input id="email-newsletter" type="checkbox" name="email-newsletter" value="Yes" checked>
                                    <span>Yes, I would like to sign up to receive the newsletter</span>
                                </label>
                            </div> -->

                            <div class="mt-3 form__field">
                                <label for="phone-number">
                                    Phone number
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="phone-number" type="tel" placeholder="+23490********" name="phone-number" autocomplete="tel" inputmode="tel" required>
                            </div>

                            <div class="d-flex align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                                <button type="button" class="nextBtn1" data-action="next">
                                    Continue
                                </button>
                            </div>
                        </section>

                        <section id="progress-form__panel-2" role="tabpanel" aria-labelledby="progress-form__tab-2" tabindex="0" hidden>
                            <div class="mt-3 form__field">
                                <label for="pickup-address">
                                    Pickup Address
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="pickup-address" type="text" name="pickup-address" autocomplete="shipping address-line1" required>
                            </div>

                            <div class="mt-3 form__field">
                                <label for="pickup-address-2">
                                    Apartment or suite (optional)
                                </label>
                                <input id="pickup-address-2" type="text" name="pickup-address-2" autocomplete="shipping address-line2">
                            </div>

                            <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
                                <div class="mt-3 sm:mt-0 form__field">
                                    <div class="has-feedback" id="state1">
                                        <div class="input-group has-feedback">
                                            <label for="Pickup-State">
                                                State
                                                <span data-required="true" aria-hidden="true"></span>
                                            </label>
                                            <select name="Pickup-State" id="Pickup-State" placeholder="Pick Pickup State" onchange="show(this)">
                                            </select>
                                            <span class="input-group-addon"><i class="fa fa-map"></i></span>
                                        </div>
                                        <span class="help-block" id="help-Pickup-State"></span>
                                    </div>
                                </div>

                                <div class="mt-3 sm:mt-0 form__field">
                                    <div class="has-feedback" id="Pickup-slga1" style="display: none;">
                                        <div class="input-group has-feedback">
                                            <label for="Pickup-Slga">
                                                LGA
                                                <span data-required="true" aria-hidden="true"></span>
                                            </label>
                                            <select name="Pickup-Slga" id="Pickup-Slga" placeholder="State LGA">
                                            </select>
                                            <span class="input-group-addon"><i class="fa fa-flag-checkered"></i></span>
                                        </div>
                                        <span class="help-block" id="help-Pickup-Slga"></span>
                                    </div>
                                </div>

                                <div class="mt-3 sm:mt-0 form__field">
                                    <label for="pickup-address-zip">
                                        Postal code
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input id="pickup-address-zip" type="text" name="pickup-address-zip" autocomplete="shipping postal-code" inputmode="numeric" required>
                                </div>
                            </div>
                            <div class="mt-3 form__field">
                                <label for="pickup-phone-number">
                                    pickup phone number
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="pickup-phone-number" type="tel" placeholder="+23490********" name="phone-number" autocomplete="tel" inputmode="tel" required>
                                <div class="form-group">
                                    <input type="checkbox" id="same">
                                    <label for="same">Use same as profile
                                    </label>
                                </div>
                            </div>

                            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                                <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                                    Back
                                </button>
                                <button type="button" class="nextBtn2" data-action="next">
                                    Continue
                                </button>
                            </div>
                        </section>

                        <section id="progress-form__panel-3" role="tabpanel" aria-labelledby="progress-form__tab-3" tabindex="0" hidden>
                            <div class="mt-3 form__field">
                                <label for="delivery-address">
                                    Delivery Address
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="delivery-address" type="text" name="delivery-address" required>
                            </div>

                            <div class="mt-3 form__field">
                                <label for="delivery-address-2">
                                    Apartment or suite (optional)
                                </label>
                                <input id="delivery-address-2" type="text" name="delivery-address-2">
                            </div>

                            <div class="sm:d-grid sm:grid-col-3 sm:mt-3">
                                <div class="mt-3 sm:mt-0 form__field">
                                    <label class="control-label">State
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <select onchange="toggleLGA(this);" name="state" id="state">
                                        <option value="" selected="selected">- Select -</option>
                                        <option value="Abia">Abia</option>
                                        <option value="Adamawa">Adamawa</option>
                                        <option value="AkwaIbom">AkwaIbom</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Bauchi">Bauchi</option>
                                        <option value="Bayelsa">Bayelsa</option>
                                        <option value="Benue">Benue</option>
                                        <option value="Borno">Borno</option>
                                        <option value="Cross River">Cross River</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Ebonyi">Ebonyi</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Ekiti">Ekiti</option>
                                        <option value="Enugu">Enugu</option>
                                        <option value="FCT">FCT</option>
                                        <option value="Gombe">Gombe</option>
                                        <option value="Imo">Imo</option>
                                        <option value="Jigawa">Jigawa</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Katsina">Katsina</option>
                                        <option value="Kebbi">Kebbi</option>
                                        <option value="Kogi">Kogi</option>
                                        <option value="Kwara">Kwara</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Nasarawa">Nasarawa</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Ondo">Ondo</option>
                                        <option value="Osun">Osun</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Plateau">Plateau</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Sokoto">Sokoto</option>
                                        <option value="Taraba">Taraba</option>
                                        <option value="Yobe">Yobe</option>
                                        <option value="Zamfara">Zamafara</option>
                                    </select>
                                </div>

                                <div class="mt-3 sm:mt-0 form__field">
                                    <label class="control-label">LGA
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <select name="lga" id="lga" class="select-lga" required>
                                    </select>
                                    <span class="help-block" id="help-Delivery-Slga"></span>
                                </div>

                                <div class="mt-3 sm:mt-0 form__field">
                                    <label for="delivery-address-zip">
                                        Postal code
                                        <span data-required="true" aria-hidden="true"></span>
                                    </label>
                                    <input id="delivery-address-zip" type="text" name="delivery-address-zip" inputmode="numeric" required>
                                </div>
                            </div>
                            <div class="mt-3 form__field">
                                <label for="delivery-phone-number">
                                    Delivery phone number
                                    <span data-required="true" aria-hidden="true"></span>
                                </label>
                                <input id="delivery-phone-number" type="tel" placeholder="+23490********" name="phone-number" inputmode="tel">
                            </div>

                            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                                <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                                    Back
                                </button>
                                <button type="button" id="priceGet" class="nextBtn3" data-action="next">
                                    Continue
                                </button>
                            </div>
                        </section>

                        <section id="progress-form__panel-4" role="tabpanel" aria-labelledby="progress-form__tab-4" tabindex="0" hidden>
                            <div class="mt-3 form__field">
                                <label for="pickupLocation">Pickup Location:</label>
                                <input id="pickupLocation" name="pickupLocation" type="text">
                            </div>
                            <div class="mt-3 form__field">
                                <label for="deliveryLocation">Delivery Location:</label>
                                <input id="deliveryLocation" name="deliveryLocation" type="text">
                            </div>

                            <div class="mt-3 form__field">
                                <div class="price-display">
                                    <h2>Price:</h2>
                                    <p id="calculatedPrice">$0.00</p>
                                </div>
                            </div>

                            <div class="d-flex flex-column-reverse sm:flex-row align-items-center justify-center sm:justify-end mt-4 sm:mt-5">
                                <button type="button" class="mt-1 sm:mt-0 button--simple" data-action="prev">
                                    Back
                                </button>
                                <button id="submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </section>

                        <section id="progress-form__thank-you" hidden>
                            <p>Thank you for your submission!</p>
                            <p>We appreciate you contacting us. One of our team members will get back to you very&nbsp;soon.</p>
                        </section>

                    </div>

                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-6">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Nigeria</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+234 904 143 4442</p>
                        <p><i class="fa fa-envelope mr-2"></i>opakshub@gmail.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h3 class="text-primary mb-4">Quick Links</h3>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; <a href="#">Opaks Logistics</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <script src="js/main.js"></script>
    <script src="js/lga.js"></script>
    <script src="js/deliverylga.min.js"></script>
    <script src="js/multiform.js"></script>
    <script>
        var priceGet = document.getElementById('priceGet');
        var same = document.getElementById('same');
        var pickupPostal = document.getElementById('pickup-address-zip');
        var deliveryPostal = document.getElementById('delivery-address-zip');
        var pickupState = document.getElementById('Pickup-State');
        var pickupLga = document.getElementById('Pickup-Slga');
        var pickupAddress = document.getElementById('pickup-address');
        var deliveryState = document.getElementById('state');
        var deliveryLga = document.getElementById('lga');
        var first_name = document.getElementById('first-name');
        var last_name = document.getElementById('last-name');
        var phone_number = document.getElementById('phone-number');
        var pickup_phone_number = document.getElementById('pickup-phone-number');
        var delivery_phone_number = document.getElementById('delivery-phone-number');
        var deliveryAddress = document.getElementById('delivery-address');
        var deliveryLocationInput = document.getElementById('deliveryLocation');
        var pickupLocationInput = document.getElementById('pickupLocation');

        // var first_name_name = first_name.value;
        // var last_name_name = last_name.value;
        // var Num_num = phone_number.value;
        var nextBtn1 = document.querySelector('.nextBtn1');
        var nextBtn2 = document.querySelector('.nextBtn2');
        var nextBtn3 = document.querySelector('.nextBtn3');
        first_name.addEventListener('change', validateInput1);
        last_name.addEventListener('change', validateInput1);
        phone_number.addEventListener('change', validateInput1);


        pickupAddress.addEventListener('change', validateInput2);
        pickupState.addEventListener('change', validateInput2);
        pickupLga.addEventListener('change', validateInput2);
        pickupPostal.addEventListener('change', validateInput2);
        pickup_phone_number.addEventListener('change', validateInput2);


        deliveryAddress.addEventListener('change', validateInput3);
        deliveryState.addEventListener('change', validateInput3);
        deliveryLga.addEventListener('change', validateInput3);
        deliveryPostal.addEventListener('change', validateInput3);
        delivery_phone_number.addEventListener('change', validateInput3);

        function validateInput1() {
            var allFilled1 = first_name.value.trim() !== "" &&
                last_name.value.trim() !== "" &&
                phone_number.value.trim() !== "";

            nextBtn1.disabled = !allFilled1;
        }
        validateInput1();

        function validateInput2() {
            var allFilled2 = pickupAddress.value.trim() !== "" &&
                pickupState.value.trim() !== "" &&
                pickupLga.value.trim() !== "" &&
                pickupPostal.value.trim() !== "" &&
                pickup_phone_number.value.trim() !== "";

            nextBtn2.disabled = !allFilled2;
        }
        validateInput2();

        function validateInput3() {
            var allFilled3 = deliveryAddress.value.trim() !== "" &&
                deliveryState.value.trim() !== "" &&
                deliveryLga.value.trim() !== "" &&
                deliveryPostal.value.trim() !== "" &&
                delivery_phone_number.value.trim() !== "";

            nextBtn3.disabled = !allFilled3;
        }

        validateInput3();
        same.addEventListener('click', function() {
            var number = phone_number.value;
            validateInput2();
            pickup_phone_number.value = number;
            pickup_phone_number.readOnly = same.checked;
        });

        deliveryLocationInput.readOnly = true;
        pickupLocationInput.readOnly = true;
        priceGet.addEventListener('click', function() {
            var pickupLocation = pickupAddress.value + ',' + pickupLga.value + ',' + pickupState.value;
            var deliveryLocation = deliveryAddress.value + ',' + deliveryLga.value + ',' + deliveryState.value;

            deliveryLocationInput.value = deliveryLocation;
            pickupLocationInput.value = pickupLocation;

            fetch('http://127.0.0.1:5000/process_data', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        pickupLocation: pickupLocation,
                        deliveryLocation: deliveryLocation
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log(data);
                })
                .catch(error => {
                    console.error('Error sending data:', error);
                });
        });

        var submit = document.getElementById('submit');
        submit.addEventListener('click', function() {
            var name = first_name.value;
            var num = phone_number.value;
            var delivery_num = delivery_phone_number.value;
            var pickup_num = pickup_phone_number.value;
            var pickupLocation = pickupAddress.value + ',' + pickupLga.value + ',' + pickupState.value;
            var deliveryLocation = deliveryAddress.value + ',' + deliveryLga.value + ',' + deliveryState.value;

            $.ajax({
                url: "whatsapp.php",
                type: "POST",
                data: {
                    "Submit": 1,
                    name: name,
                    num: num,
                    delivery_num: delivery_num,
                    pickup_num: pickup_num,
                    pickupLocation: pickupLocation,
                    deliveryLocation: deliveryLocation,
                },
                success: function(data) {
                    console.log(data)
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                },
                cache: false,
            });
        })

        const priceTable = {
            Kosofe_Irolu: 50.00,
            cityA_cityY: 60.00,
            cityB_cityX: 55.00,
            cityB_cityY: 65.00,
            // Add more price mappings as needed
        };

        // Event listener for location selection
        deliveryLga.addEventListener('change', updatePrice);
        pickupLga.addEventListener('change', updatePrice);

        function updatePrice() {
            const pickup = pickupLga.value;
            const delivery = deliveryLga.value;
            const routeKey = `${pickup}_${delivery}`;
            const price = priceTable[routeKey] || 0.00; // Default to $0.00 if no match found
            document.getElementById('calculatedPrice').textContent = `$${price.toFixed(2)}`;
        }
    </script>
</body>

</html>