<div class="app-content max-w-full overflow-hidden mx-auto pt-12">

	<main id="main" class="app-main mx-auto mb-12 text-lg leading-loose">

		<?php $engine->display( 'partials', 'archive-header' ) ?>

		<?php $engine->display( 'loop/grid', $view->slugs() ) ?>

	</main>

</div>
