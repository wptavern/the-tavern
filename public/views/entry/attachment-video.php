<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<header class="entry__header o-content-width">
		<?php Hybrid\Post\display_title() ?>
	</header>

	<div class="entry__content o-content-width">
		<figure class="aligncenter">
			<?php Hybrid\Media\display( [ 'type' => 'video' ] ) ?>
		</figure>
		<?php the_content() ?>
		<?php $engine->display( 'nav/pagination', 'post' ) ?>
	</div>

	<div class="media-meta media-meta--video o-content-width">

		<h3 class="media-meta__title"><?php esc_html_e( 'Video Info', 'tavern' ) ?></h3>

		<ul class="media-meta__items list-none p-0 text-base">
			<?php Hybrid\Media\display_meta( 'length_formatted', [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Run Time:', 'tavern' )   ] ) ?>
			<?php Hybrid\Media\display_meta( 'dimensions',       [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Dimensions:', 'tavern' ) ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_name',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Name:', 'tavern' )       ] ) ?>
			<?php Hybrid\Media\display_meta( 'mime_type',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Mime Type:', 'tavern' )  ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_type',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Type:', 'tavern' )       ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_size',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Size:', 'tavern' )       ] ) ?>
		</ul>

	</div>

</article>
