<?php include('header.php'); ?>

<section class="inner-page-title bgcover" style="background-image:url('assets/image/banner-1.jpg');">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</section>
<section class="contact-us">
    <div class="container">
        <div class="section-title">
            <h1>Keep in Touch with Us</h1>
        </div>
        <div class="sub-title">
            <p>Empowering all people to be plant people — a collection of articles from The Sill’s team of Plant
                Experts across a variety of plant care topics to inspire confidence in the next generation of plant
                parents. Welcome to Plant Parenthood™.</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="v-separator">
        <div class="line"></div>
    </div>
</div>

<section class="contact-detail">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-xs-12">
                <div class="main-box">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="lnr lnr-phone-handset lg-lnr default-color-faded"></div>
                        </div>
                        <div class="col-md-7 offset-2">

                            <p class="default-color">Phone Number:</p>
                            <span class="sub-title">Mobile 9876543210</span>
                            <span class="sub-title">Fax 9876543210</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="main-box">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="lnr lnr-location lg-lnr default-color-faded"></div>
                        </div>
                        <div class="col-md-7 offset-2">

                            <p class="default-color">Address:</p>
                            <span class="sub-title">No 40 Baria Sreet 15/2</span>
                            <span class="sub-title">NewYork City, NY, United States.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-12">
                <div class="main-box">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="lnr lnr-envelope lg-lnr default-color-faded"></div>
                        </div>
                        <div class="col-md-7 offset-2">

                            <p class="default-color">Phone Number:</p>
                            <span class="sub-title">Mobile 9876543210</span>
                            <span class="sub-title">Fax 9876543210</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="v-separator">
        <div class="line"></div>
    </div>
</div>

<div id="map"></div>

<section class="contact-us-form-container">
    <div class="container">
        <div class="section-title">
            <h1>Contact Us Now</h1>
            <div class="sub-title mt-3">
                <p>Empowering all people to be plant people — a collection of articles from The Sill’s team of Plant
                    Experts.</p>
            </div>
        </div>

        <div class="contact-us-form">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Your name">
                </div>
                <div class="col-md-6">
                    <input type="text" placeholder="Your email address">

                </div>
                <div class="col-md-12">

                    <textarea id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <div class="col-md-12" style="text-align:center">
                    <button type="submit" class="btn my-btn">Submit</button>
                </div>


            </div>
        </div>
    </div>
</section>


<?php include('footer.php'); ?>
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 8
        });
    }
</script>
<!--Load the API from the specified URL
* The async attribute allows the browser to render the page while the API loads
* The key parameter will contain your own API key (which is not needed for this tutorial)
* The callback parameter executes the initMap() function
-->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACRA2fRml6KjqHKKbV0ZsakEDSsp2iSoI&callback=initMap"
        type="text/javascript"></script>
