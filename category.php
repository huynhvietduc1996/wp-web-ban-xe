<?php get_header() ?>

		</div>
		<!-- end lh-header -->
		<div class="module-news">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url') ?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Tin tức</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">

						<!-- Get post mặt định -->
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							 <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
							<div class="item-news">
							<div class="row">
								<div class="col-4 img">
									 
									<a href="<?php the_permalink() ?>">
										<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title() ?>">
									</a>
								</div>
								<div class="col-8 text">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
									<p><?php the_excerpt() ?></p>
									<div class="lh2-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date('dd/MM/yyyy') ?></div>
								</div>
							</div>
						</div>
						<!-- end item -->	
						<?php endwhile; else : ?>
						<p>Không có bài viết nào</p>
						<?php endif; ?>
						<!-- Get post mặt định -->

					
						<div class="lh2-pagging col-12">
							<ul class="pagination">
							  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-backward"></i></a></li>
							  <li class="page-item"><a class="page-link" href="#">1</a></li>
							  <li class="page-item"><a class="page-link" href="#">2</a></li>
							  <li class="page-item"><a class="page-link" href="#">3</a></li>
							  <li class="page-item"><a class="page-link" href="#"><i class="fas fa-step-forward"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
						<?php get_sidebar() ?>
					</div>
				</div>
				
			</div>
		</div>
		<?php get_footer()?>