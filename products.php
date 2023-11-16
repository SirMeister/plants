<?php include('header.php'); ?>

<section class="inner-page-title bgcover" style="background-image:url('assets/image/banner-1.jpg');">
    <div class="container">
        <h1>View All Products</h1>
    </div>
</section>

<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <p class="product-side-heading">CATEGORIES</p>
                <div class="shop-category">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <p class="mb-0">
                                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i>Indoor</button>									
                                </p>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="drop-list">
                                        <li><a href="#">Cactus</a></li>
                                        <li><a href="#">Indoor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i>Outdoor</button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="drop-list">
                                        <li><a href="#">Cactus</a></li>
                                        <li><a href="#">Indoor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>Above</button>                     
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <ul class="drop-list">
                                        <li><a href="#">Cactus</a></li>
                                        <li><a href="#">Indoor</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
					<p class="product-side-heading">TAGS</p>
					<ul class="tags-list">
						<li><a href="#">asian</a></li>
                        <li><a href="#">brown</a></li>
                        <li><a href="#">black</a></li>
                        <li><a href="#">grey</a></li>
                        <li><a href="#">green</a></li>
					</ul>
                </div>
                <div class="select-by-size">
                    <p class="product-side-heading">SELECT BY SIZE</p>
                    <ul class="size">
                        <li><a href="#">Small</a><li>
                        <li><a href="#">Medium</a><li>
                        <li><a href="#">Large</a><li>
                        <li><a href="#">X Large</a><li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="main-shop">
                <h1 class="mb-3">List of Plants</h1>
                    <div class="row">
                        <?php for($i=0;$i<4;$i++){ ?>
                        <div class="col-lg-4">
                            <div class="shop-img">
                                <a href="inner-product.php"><img src="assets/image/product-3.jpg"></a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="shop-title">
                                <a href="inner-product.php">Commodo Augue Nisi</a>
                            </div>
                            <div class="shop-price">
                                £69.00 
                            </div>
                            <div class="shop-desc">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco…
                            </div>
                            <a href="#" class="btn my-btn">Add to Cart</a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
      <li class="page-item">
        <a class="page-link" href="#" tabindex="-1"><</a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#">></a>
      </li>
    </ul>
</nav>

<?php include('footer.php'); ?>