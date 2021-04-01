<?php $has_sticky = false; ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php if ( ! is_paged() && 0 === $GLOBALS['wp_query']->current_post && is_sticky() ) : ?>

			<?php $has_sticky = true; ?>

			<div class="wp-block-cover alignfull has-background-dim has-background-dim-90 bg-black text-white mb-8" style="min-height:calc(100vh - 4rem);margin-top:-3rem;background-image: url( '<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'tavern-landscape-huge' ) ); ?>' );">

				<div class="wp-block-cover__inner-container">


					<?php /*Hybrid\Carbon\Image::display( 'featured', [
						'class' => 'entry__media max-w-full text-center col-span-3 md:order-last shadow-none',
						'size'  => 'tavern-landscape-extra-large'
					] ) */ ?>

					<div class="flex flex-col content-center justify-center text-center">

						<header class="entry__header">
							<h2 class="entry__title m-0 mt-4 text-5xl text-white leading-tight">
								<a href="<?php the_permalink() ?>" class="entry__permalink text-white no-underline hover:underline focus:underline"><?php the_title() ?></a>
							</h2>

							<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto text-sm text-gray-300">
								<?php Hybrid\Post\display_author() ?>
								<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
								<?php Hybrid\Post\display_comments_link( [ 'before' => Tavern\sep() ] ) ?>
							</div>
						</header>

						<div class="entry__summary o-content-width mt-4 text-xl">
							<?php the_excerpt() ?>
						</div>

					</div>
				</div>
			</div>

		<?php /* elseif ( ! is_paged() && 0 === $GLOBALS['wp_query']->current_post ) : ?>

			<div class="loop loop--grid px-8">

				<ul class="clear grid grid--posts grid-col-1 sm:grid-col-2 md:grid-col-3 grid-gap-8 list-none max-w-7xl mx-auto mb-8 p-0">

					<li class="grid__item col-span-1 sm:col-span-2 wp-block-cover w-full has-background-dim has-background-dim-90 bg-black text-white" style="min-height:471px;background-image: url( '<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'tavern-landscape-large' ) ); ?>' );">

					<div class="wp-block-cover__inner-container">

						<div class="flex flex-col content-center justify-center text-center">

							<header class="entry__header">
								<h2 class="entry__title m-0 mt-4 text-4xl text-white leading-tight">
									<a href="<?php the_permalink() ?>" class="entry__permalink text-white no-underline hover:underline focus:underline"><?php the_title() ?></a>
								</h2>

								<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto text-sm text-gray-300">
									<?php Hybrid\Post\display_author() ?>
									<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
									<?php Hybrid\Post\display_comments_link( [ 'before' => Tavern\sep() ] ) ?>
								</div>
							</header>

							<div class="entry__summary o-content-width mt-4 text-lg">
								<?php the_excerpt() ?>
							</div>

						</div>
					</div>

					</li>

		<?php */ else : ?>

			<?php if ( ! is_paged() && 0 === $GLOBALS['wp_query']->current_post ) : ?>
				<div class="loop loop--grid px-8">

					<ul class="clear grid grid--posts grid-col-1 sm:grid-col-2 md:grid-col-3 grid-gap-8 list-none max-w-7xl mx-auto mb-8 p-0">

			<?php endif ?>

			<?php if ( ! is_paged() && 3 === $GLOBALS['wp_query']->current_post ) : ?>

				<?php $podcast = new WP_Query( [
					'posts_per_page' => 1,
					'post_type' => 'podcast'
				] ); ?>

				<?php if ( $podcast->have_posts() ) : ?>

					<?php while( $podcast->have_posts() ) : $podcast->the_post(); ?>

						<li class="grid__item col-span-1 sm:col-span-3 wp-block-cover has-background-dim-50 has-gray-900-background-color has-background-dim bg-gray-900 bg-center text-center" style="background-image:url(<?php echo esc_url( \Tavern\Template\FeaturedImage::image( [ 'meta', 'featured' ], [ 'size' => 'full', 'meta_key' => 'hero_image_id' ] )->src() ); ?>); margin: 0; min-height: 520px;">
							<div class="wp-block-cover__inner-container">
								<h2 class="entry__title md:max-w-4xl mx-8 sm:mx-auto my-0 text-5xl leading-tight">
									<a href="<?php the_permalink() ?>" class="entry__permalink text-white no-underline hover:underline focus:underline"><?php the_title() ?></a>
								</h2>

								<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto">
									<?php Hybrid\Post\display_author() ?>
									<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
									<?php Hybrid\Post\display_comments_link( [ 'before' => Tavern\sep() ] ) ?>
								</div>
							</div>
						</li>

					<?php endwhile; ?>

				<?php endif; wp_reset_postdata(); ?>

			<?php endif; ?>

			<?php if (
				( 0 === $GLOBALS['wp_query']->current_post && is_paged() ) ||
				( 1 === $GLOBALS['wp_query']->current_post && $has_sticky )
			) : ?>

				<div class="loop loop--grid px-8">

					<ul class="clear grid grid--posts grid-col-1 sm:grid-col-2 md:grid-col-3 grid-gap-8 list-none max-w-7xl mx-auto mb-8 p-0">

			<?php endif ?>

			<?php $engine->display( 'entry/grid', $view->slugs(), [
				'has_sticky' => $has_sticky
			] ) ?>

		<?php endif ?>

	<?php endwhile ?>

		</div>
	</ul>

	<?php $engine->display( 'nav/pagination', 'posts' ) ?>

<?php endif ?>
