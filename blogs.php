<?php include('header.php'); ?>

<section class="inner-page-title bgcover" style="background-image:url('assets/image/banner-1.jpg');">
    <div class="container">
        <h1>Blogs</h1>
    </div>
</section>
<section class="blog-list">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<?php for($i=0;$i<4;$i++){ ?>
				<div class="row for-margin">
					<!-- <div class="main-blog"> -->
						<div class="col-lg-5">
							<div class="img-box">
								<img src="assets/image/banner-1.jpg">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="blog-text">
								<div class="blog-heading">
									<span class="lnr lnr-leaf"></span><a href="blog-inner.php">Blog Image Post</a>
								</div>
								<div class="small-text">
									<p><a href="#">Admin</a> / July 16, 2019/ <a href="#">eCommerce</a></p>
								</div>
								<div class="blog-description">
									<p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero eu augue</p>
								</div>
								<a href="#" class="btn my-btn">Read More</a>
							</div>
						</div>
					<!-- </div> -->
				</div>
				<?php } ?>
			</div>
			<div class="col-lg-3">
				<div class="recent">
					<p class="blog-side-heading">RECENT POSTS</p>
					<div class="row">
						<?php for($i=0;$i<3;$i++){ ?>
						<div class="col-lg-4">
							<div class="recent-img">
								<img src="assets/image/banner-1.jpg">
							</div>
						</div>
						<div class="col-lg-8">
							<div class="recent-title">
								<a href="#">Blog Image Post</a>
							</div>
							<div class="recent-date">
								March 16, 2018
							</div>
						</div>	
						<?php } ?>
					</div>
				</div>
				<div class="category">
					<p class="blog-side-heading">CATEGORIES</p>
					<ul class="category-list">
						<li><a href="#">Audio</a></li>
						<li><a href="#">Company</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">Image</a></li>
						<li><a href="#">eCommerce</a></li>
					</ul>
				</div>	
				<div class="tags">
					<p class="blog-side-heading">TAGS</p>
					<ul class="tags-list">
						<li><a href="#">asian</a></li>
						<li><a href="#">brown</a></li>
					</ul>
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