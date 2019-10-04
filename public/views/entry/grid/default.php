<?php if ( 0 === $GLOBALS['wp_query']->current_post ) : ?>

	<li class="grid__item col-span-2 row-span-2">

		<?php Hybrid\Carbon\Image::display( 'featured', [
			'class' => 'entry__media max-w-full text-center',
			'size'  => 'tavern-landscape-extra-large'
		] ) ?>

		<header class="entry__header">
			<h2 class="entry__title m-0 mt-4 text-lg">
				<a href="<?php the_permalink() ?>" class="entry__permalink no-underline hover:underline focus:underline"><?php the_title() ?></a>
			</h2>

			<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto text-sm">
				<?php Hybrid\Post\display_author() ?>
				<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
			</div>
		</header>

		<div class="entry__summary o-content-width mt-2 text-base">
			<?php the_excerpt() ?>
		</div>

	</li>

<?php else : ?>

	<li class="grid__item">

		<?php Tavern\Template\FeaturedImage::display( 'featured', [
			'class' => 'entry__media max-w-full text-center'
		] ) ?>

		<header class="entry__header">
			<h2 class="entry__title m-0 mt-4 text-lg">
				<a href="<?php the_permalink() ?>" class="entry__permalink no-underline hover:underline focus:underline"><?php the_title() ?></a>
			</h2>
			<?php if ( 2 < $GLOBALS['wp_query']->current_post ) : ?>
				<div class="entry__byline max-w-2xl mx-8 mt-2 sm:mx-auto text-sm">
					<?php Hybrid\Post\display_author() ?>
					<?php Hybrid\Post\display_date( [ 'before' => Tavern\sep() ] ) ?>
				</div>
			<?php endif ?>
		</header>

		<?php if ( 2 < $GLOBALS['wp_query']->current_post ) : ?>
			<div class="entry__summary o-content-width mt-2 text-base">
				<?php the_excerpt() ?>
			</div>
		<?php endif ?>
	</li>

<?php endif ?>
