
	<li class="grid__item w-full">

		<?php Tavern\Template\FeaturedImage::display( 'featured', [
			'class' => 'entry__media max-w-full text-center'
		] ) ?>

		<header class="entry__header">
			<h2 class="entry__title m-0 mt-6 text-xl">
				<a href="<?php the_permalink() ?>" class="entry__permalink no-underline hover:underline focus:underline"><?php the_title() ?></a>
			</h2>
			<div class="entry__byline text-xs">
				<?php Hybrid\Post\display_author() ?>
				<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
				<?= Tavern\sep() ?>
				<?php foreach ( get_the_category( get_the_ID() ) as $term ) : ?>
					<a href="<?= esc_url( get_term_link( $term, $term->taxonomy ) ) ?>"><?= esc_html( $term->name ) ?></a>
					<?php break; ?>
				<?php endforeach ?>
			</div>
		</header>

		<div class="entry__summary mt-4 text-base">
			<?php the_excerpt() ?>
		</div>
	</li>
