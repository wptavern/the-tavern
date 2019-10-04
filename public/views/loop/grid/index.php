<?php if ( have_posts() ) : ?>

	<div class="loop loop--grid px-8">

		<ul class="clear grid grid--posts grid-col-1 sm:grid-col-2 md:grid-col-3 grid-gap-8 list-none max-w-7xl mx-auto mb-8 p-0">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php $engine->display( 'entry/grid', $view->slugs() ) ?>

			<?php endwhile ?>

		</ul>

		<?php $engine->display( 'nav/pagination', 'posts' ) ?>

	</div>

<?php endif ?>
