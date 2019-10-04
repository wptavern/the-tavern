<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<header class="entry__header mb-8 text-center">
		<?php Hybrid\Post\display_title( [ 'class' => 'entry__title md:max-w-4xl mx-8 sm:mx-auto my-0' ] ) ?>
	</header>

	<div class="entry__content o-content-width">
		<figure class="aligncenter">
			<?php Hybrid\Media\display( [ 'type' => 'audio' ] ) ?>
		</figure>
		<?php the_content() ?>
		<?php $engine->display( 'nav/pagination', 'post' ) ?>
	</div>

	<div class="media-meta media-meta--audio o-content-width">

		<h3 class="media-meta__title"><?php esc_html_e( 'Audio Info', 'tavern' ) ?></h3>

		<ul class="media-meta__items list-none p-0 text-base">
			<?php Hybrid\Media\display_meta( 'length_formatted', [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Run Time:', 'tavern' )     ] ) ?>
			<?php Hybrid\Media\display_meta( 'artist',           [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Artist:', 'tavern' )       ] ) ?>
			<?php Hybrid\Media\display_meta( 'album',            [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Album:', 'tavern' )        ] ) ?>
			<?php Hybrid\Media\display_meta( 'track_number',     [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Track Number:', 'tavern' ) ] ) ?>
			<?php Hybrid\Media\display_meta( 'year',             [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Year:', 'tavern' )         ] ) ?>
			<?php Hybrid\Media\display_meta( 'genre',            [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Genre:', 'tavern' )        ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_name',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Name:', 'tavern' )         ] ) ?>
			<?php Hybrid\Media\display_meta( 'mime_type',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Mime Type:', 'tavern' )    ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_type',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Type:', 'tavern' )         ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_size',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Size:', 'tavern' )         ] ) ?>
		</ul>

	</div>

</article>
