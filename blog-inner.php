<?php include('header.php'); ?>

<section class="inner-page-title bgcover" style="background-image:url('assets/image/banner-1.jpg');">
    <div class="container">
        <h1>Title</h1>
    </div>
</section>

<section class="blog-list">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="single-blog-post">
					<div class="blog-title">
						<p class="title-title">Aypi non habent claritatem insitam</p>
						<p class="title-date">Posted by : <a href="#">admin</a> / On : April 10, 2019 / In : Company, Image, Travel</p>
					</div>
					<div class="blog-image">
						<img src="assets/image/banner-1.jpg">
					</div>
					<div class="blog-text-desc">
						<p>Aenean et tempor eros, vitae sollicitudin velit. Etiam varius enim nec quam tempor, sed efficitur ex ultrices. Phasellus pretium est vel dui vestibulum condimentum. Aenean nec suscipit nibh. Phasellus nec lacus id arcu facilisis elementum. Curabitur lobortis, elit ut elementum congue, erat ex bibendum odio, nec iaculis lacus sem non lorem. Duis suscipit metus ante, sed convallis quam posuere quis. Ut tincidunt eleifend odio, ac fringilla mi vehicula nec. Nunc vitae lacus eget lectus imperdiet tempus sed in dui. Nam molestie magna at risus consectetur, placerat suscipit justo dignissim. Sed vitae fringilla enim, nec ullamcorper arcu.</p>
					</div>
					<div class="blog-share">
						asdasdsad
					</div>
				</div>
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
			
<section class="related-post">
	<div class="container">
		<p class="related-heading">RELATED POSTS</p>
		<div class="row">
			<?php for($i=0;$i<4;$i++){ ?>
			<div class="col-lg-3">
				<div class="main-box">
					<div class="related-img">
						<a href="#"><img src="assets/image/banner-1.jpg"></a>
					</div>
					<div class="related-title">
						<a href="#">POST WITH GALLERY</a>
					</div>
					<div class="related-date">
						By:<a href="#">admin</a> / April 11, 2019
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</section>

<section class="blog-comments">
</section>

<?php include('footer.php'); ?>