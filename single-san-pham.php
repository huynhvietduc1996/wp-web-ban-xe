<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
			<!-- end block-slider -->
		</div>
		<!-- end lh-header -->
		<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url') ?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url') ?>/san-pham">Thuê xe du lịch</a>
					<span class="dot">/</span>
					<span class=""><?php the_title() ?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="block-product-slider">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  left">
									<?php $gallery = get_field('hinh_anh') ?>
								 	<ul id="imageGallery">
											<?php foreach($gallery as $key => $value) { ?>
						                <li data-thumb="<?php echo $value['sizes']['thumbnail'] ?>" data-src="<?php echo $value['url'] ?>">
													<div class="img-height">
														<img  class="img-fluid lh2-img" src="<?php echo $value['url'] ?>"/>
														<div class="overlay">
															<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
														</div>
													</div>
						                 </li>
											<?php } ?>
					            </ul>
								</div>
								<div class="col-md-6  col-sm-6 col-xs-6 right">
									<div class="border">
										<b class="name"><?php the_title() ?></b>
										<p>
											<b>Giá:</b>
											<?php 
												if (get_field('gia-sp')) {
													the_field('gia-sp');
												}
												else {
													echo 'Liên hệ';
												}
											?>
										</p>
										<p><b>Số chỗ: </b><?php the_field('cho_ngoi') ?></p>
										<p><b>Thương hiệu:</b> <?php the_field('thuong_hieu') ?></p>
										<p><b>Màu sắc:</b> <?php the_field('mau_sac') ?></p>
										<p><b>Đời xe:</b> <?php the_field('doi_xe') ?> </p>
									 	<button class="lh2-button lh-show-bk">Thuê ngay</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end block-slider -->
						<div class="block-info-product-detail">
							<p class="title-other"><span>Thông tin chi tiết</span></p>
							<div class="box-content">
								<?php the_content() ?>
							</div>
						</div>
						<!-- block-inffo -->
						<div class="block-product-other">
							<p class="title-other"><span>Xe liên quan</span></p>
							<div class="slider-product">
								<?php
									$terms = get_the_terms(get_the_ID(), 'on-draught');
									$args=array(
									'danh-muc' => $category_ids,
									'post__not_in' => array(get_the_ID()),
									'showposts'=>6, // Số bài viết bạn muốn hiển thị.
									'caller_get_posts'=>1,
									'post-type' => 'san-pham'
									);
									$my_query = new wp_query($args);
									if( $my_query->have_posts() ) 
									{
											echo '<p class="title-other">Bài viết liên quan</p>';
											while ($my_query->have_posts())
											{
												$my_query->the_post();
												?>
												<li><a href="<?php the_permalink() ?>"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><?php the_title() ?></a></li>
												<?php
											}
									}
							
								?>
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="img/a4.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="img/a3.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="img/a2.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
									<div class="bg">
										<div class="img-height">
											<a class="img" href="">
												<img class="img-fluid lh2-img" src="img/a1.jpg" alt="">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="">Thuê xe 16 chỗ tại Đà Nẵng</a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> Liên hệ</p>
											<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b>7 Chổ</p>
											<p><b><i class="fas fa-car"></i>Thương hiệu:</b> TOYOTA</p>
										</div>
									</div>
								</div>
								<!-- end item -->

							</div>
							<button class="button-slider next"><i class="fas fa-chevron-right"></i></button>
							<button class="button-slider prev"><i class="fas fa-chevron-left"></i></button>
						</div>
						<!-- end block-product-other -->
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<?php get_sidebar() ?>
					</div>
				</div>
			</div>
		</div>

			<!-- popup -->
		<div class="popup-overlay">
		</div>
		<div class="my-popup">
			<div class="popup-content">
				<button class="lh-close-2 exit"></button>
				<p class="title">Đặt xe</p>
				<form action="">
					<div class="info-car">
						<p class="box-title">Thông tin xe</p>
						<div class="row">
							<div class="col-4">
								<img class="img-fluid" src="img/a1.jpg" alt="">
							</div>
							<div class="col-8">
								<p> <b class="name">Thuê xe 16 chỗ tại Đà Nẵng</b></p>
								<p class="price"> <b>Giá:</b> Liên hệ</p>
								<p><b>Số chỗ: </b>7 Chổ</p>
								<p><b>Thương hiệu:</b> TOYOTA</p>
							</div>
						</div>
					</div>
					<p class="box-title">Thông tin khách hàng</p>
					<input type="" name="" placeholder="Họ và tên *">
					<div class="row">
						<div class="col-6">
							<input type="" name="" placeholder="Email *">
						</div>
						<div class="col-6">
							<input type="" name="" placeholder="Điện thoại *">
						</div>
					</div>
					<div class="text-right">
						<button class="lh2-button" type="">Đặt xe ngay</button>
					</div>
				</form>
			</div>
		</div>
		<!-- end popup -->
	<?php endwhile; else : ?>
	<?php endif; ?>

	<?php get_footer() ?>


	