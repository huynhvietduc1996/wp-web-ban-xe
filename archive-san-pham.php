<?php get_header() ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
		<!-- end lh-header -->
		<div class="module-product">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url') ?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Danh sách xe</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink() ?>">
									<img class="img-fluid lh2-img" src="<?php echo $featured_img_url ?>" alt="<?php the_title() ?>">
								</a>
							</div>
							<div class="info-product"> 	
								<a class="name" href="<?php the_permalink() ?>"><?php the_title() ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia-sp') ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b> <?php the_field('cho_ngoi') ?> </p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu') ?> </p>
							</div>
						</div>
					</div>
					<?php endwhile; else : ?>
					<p>Không có bài viết nào</p>
					<?php endif; ?>
					<!-- end item -->
			
				</div>
			</div>
		</div>


	<?php endwhile; else : ?>
	<?php endif; ?>
	<?php get_footer() ?>