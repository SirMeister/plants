<?php include('header.php'); ?>

<section class="inner-page-title bgcover" style="background-image:url('assets/image/banner-1.jpg');">
    <div class="container">
        <h1>Product Name</h1>
    </div>
</section>

<section class="inner-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="inner-product-img">
                    <img src="assets/image/product-2.jpg">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="main-inner">
                    <div class="product-title">
                        Commodo Augue Nisi
                    </div>
                    <div class="product-price">
                        $79.00
                    </div>
                    <div class="product-desc">
                        eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>
                    <a href="#" class="btn my-btn">Add to cart</a>
                    <div class="small-text">
                        <p>Category: <span>Small Plants</span></p>
                        <p>Tags: <span>experience, lifestyle</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    For Reviews/Desc
</section>

<section class="related-product">
    <div class="container">
        <p class="rel-heading">RELATED PRODUCTS</p>
        <div class="row">
            <?php for($i=0;$i<4;$i++){ ?>
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
                        <p>Aliquam furniture</p>
                        <b>$79.00</b>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>