<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<header class="entry__header wp-block-cover alignfull has-background-dim-50 has-gray-900-background-color has-background-dim bg-gray-900 bg-center mb-8 text-center" style="background-image:url(<?php echo esc_url( \Tavern\Template\FeaturedImage::image( [ 'meta', 'featured' ], [ 'size' => 'full', 'meta_key' => 'hero_image_id' ] )->src() ); ?>); margin-top: -3rem; min-height: 520px;">
		<div class="wp-block-cover__inner-container">
			<h1 class="entry__title md:max-w-4xl mx-8 sm:mx-auto my-0 text-5xl leading-tight">
				<?php the_title() ?>
			</h1>

			<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto">
				<?php Hybrid\Post\display_author() ?>
				<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
				<?php Hybrid\Post\display_comments_link( [ 'before' => Tavern\sep() ] ) ?>
			</div>
		</div>
	</header>

	<div class="entry__content o-content-width flow-root">
		<?php the_content() ?>
		<?php $engine->display( 'nav/pagination', 'post' ) ?>
	</div>

	<footer class="entry__footer max-w-2xl mx-8 sm:mx-auto mt-8">
		<?php Hybrid\Post\display_terms( [
			'text'     => 'In series %s',
			'taxonomy' => 'series'
		] ) ?>
		<?php Hybrid\Post\display_terms( [
			// Translators: %s is the post tags list.
			'text'     => __( 'Tagged %s', 'tavern' ),
			'taxonomy' => 'post_tag'
		] ) ?>
	</footer>

</article>
