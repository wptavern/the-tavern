<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<header class="entry__header mb-8 text-center">
		<h1 class="entry__title md:max-w-4xl mx-8 sm:mx-auto my-0 text-5xl leading-tight">
			<?php the_title() ?>
		</h1>

		<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto">
			<?php Hybrid\Post\display_author() ?>
			<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
			<?php Hybrid\Post\display_comments_link( [ 'before' => Tavern\sep() ] ) ?>
		</div>
	</header>

	<div class="entry__content o-content-width flow-root">
		<?php the_content() ?>
		<?php $engine->display( 'nav/pagination', 'post' ) ?>
	</div>

	<footer class="entry__footer max-w-2xl mx-8 sm:mx-auto mt-8">
		<?php Hybrid\Post\display_terms( [
			'text'     => 'Posted in %s',
			'taxonomy' => 'category'
		] ) ?>
		<?php Hybrid\Post\display_terms( [
			// Translators: %s is the post tags list.
			'text'     => __( 'Tagged %s', 'tavern' ),
			'taxonomy' => 'post_tag'
		] ) ?>
	</footer>

</article>
