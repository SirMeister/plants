<?php include('header.php'); ?>

<section class="banner bgcover ">
    <div class="owl-carousel owl-theme">
        <div class="item bgcover" style="background-image:url('assets/image/banner-1.jpg');" >
            <div class="banner-text">
                <p class="above">
                    AMAZING<br/>
                    FROM Plants
                </p>
                <h1>Zombie Apocalypse</h1>
                <p class="below">Its the fresh plant</p>
                <a href="#" class="btn my-btn">Shop All Products</a>
            </div>
        </div>
        <div class="item bgcover" style="background-image:url('assets/image/banner-3.jpg');">
            <div class="banner-text">
                <p class="above">
                    AMAZING<br/>
                    FROM Plants
                </p>
                <h1>Zombie Apocalypse</h1>
                <p class="below">Its the fresh plant</p>
                <a href="#" class="btn my-btn">Shop All Products</a>
            </div>
        </div>
    </div>
</section>

<section class="products">
    <div class="container">
        <div class="section-title">
            <h1>Our Products</h1>
        </div>
        <div class="row" data-aos="zoom-in-up" data-aos-duration="2000">
            <div class="card mt-3 tab-card col-lg-12">
                <div class="card-header tab-card-header">
                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Cactus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Rose</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Tulips</a>
                        </li>
                    </ul>
                </div>
            
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">   
                        <div class="row">
                            <?php for($i=0;$i<6;$i++){ ?>
                                <div class="col-lg-3">
                                    <div class="main-box">
                                        <div class="img-box">
                                            <img src="assets/image/product-1.jpg">
                                            <div class="hover-items">
                                                <p><span class="lnr lnr-cart"></span></i></p>
                                                <p><span class="lnr lnr-magnifier"></span></p>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                             <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                              </div>
                                            
                                        </div>
                                        <div class="name">
                                            <p>Aliquam furniture</p>
                                            <b>$79.00</b>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                        <div class="row">
                            <?php for($i=0;$i<6;$i++){ ?>
                                <div class="col-lg-3">
                                    <div class="main-box">
                                        <div class="img-box">
                                            <img src="assets/image/product-1.jpg">
                                            <div class="hover-items">
                                                <p><span class="lnr lnr-cart"></span></i></p>
                                                <p><span class="lnr lnr-magnifier"></span></p>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                             <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                              </div>
                                            
                                        </div>
                                        <div class="name">
                                            <p>Aliquam furniture</p>
                                            <b>$79.00</b>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>     
                    </div>
                    <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                        <div class="row">
                            <?php for($i=0;$i<6;$i++){ ?>
                                <div class="col-lg-3">
                                    <div class="main-box">
                                        <div class="img-box">
                                            <img src="assets/image/product-1.jpg">
                                            <div class="hover-items">
                                                <p><span class="lnr lnr-cart"></span></i></p>
                                                <p><span class="lnr lnr-magnifier"></span></p>
                                            </div>
                                        </div>
                                        <div class="text-box">
                                             <div class="rate">
                                                <input type="radio" id="star5" name="rate" value="5" />
                                                <label for="star5" title="text">5 stars</label>
                                                <input type="radio" id="star4" name="rate" value="4" />
                                                <label for="star4" title="text">4 stars</label>
                                                <input type="radio" id="star3" name="rate" value="3" />
                                                <label for="star3" title="text">3 stars</label>
                                                <input type="radio" id="star2" name="rate" value="2" />
                                                <label for="star2" title="text">2 stars</label>
                                                <input type="radio" id="star1" name="rate" value="1" />
                                                <label for="star1" title="text">1 star</label>
                                              </div>
                                            
                                        </div>
                                        <div class="name">
                                            <p>Aliquam furniture</p>
                                            <b>$79.00</b>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="cat">
    <div class="container">
        <div class="section-title">
            <h1>Plant Categories</h1>
        </div>
        <div class="row" data-aos="zoom-in-up">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="big-box hvr-curl-top-right">
                            <img src="assets/image/banner-3.jpg">
                            <p class="cat-name">Table Tree Plant</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="small-box hvr-curl-top-right">
                            <img src="assets/image/banner-1.jpg">
                            <p class="cat-name">Potted Plant</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="small-box hvr-curl-top-right">
                            <img src="assets/image/banner-3.jpg">
                            <p class="cat-name">Indoor Plant</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="right-upper-box hvr-curl-top-right">
                            <img src="assets/image/banner-3.jpg">
                            <p class="cat-name">House Plant</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="right-lower-box hvr-curl-top-right">
                            <img src="assets/image/cat-1.jpg">
                            <p class="cat-name">Cactus Plant</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="section-title">
        <h1>Testimonials</h1>
    </div>       
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 what">
                <h1>What They Say About Us</h1>
            </div>
            <div class="col-md-6 say">
                <div class="testemonial">
                    
                </div>
            </div>
        </div>
    </div>
</section>



<?php include('footer.php'); ?>