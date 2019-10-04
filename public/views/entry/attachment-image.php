<article <?php Hybrid\Attr\display( 'entry' ) ?>>

	<header class="entry__header mb-8 text-center">
		<?php Hybrid\Post\display_title( [ 'class' => 'entry__title md:max-w-4xl mx-8 sm:mx-auto my-0' ] ) ?>
	</header>

	<div class="entry__content o-content-width">
		<figure class="wp-block-image alignfull">
			<?php echo wp_get_attachment_image( get_the_ID(), 'tavern-landscape-huge', false, [ 'class' => 'aligncenter' ] ) ?>
		</figure>
		<?php the_content() ?>
		<?php $engine->display( 'nav/pagination', 'post' ) ?>
	</div>

	<div class="media-meta media-meta--image o-content-width">

		<h3 class="media-meta__title"><?php esc_html_e( 'Image Info', 'tavern' ) ?></h3>

		<ul class="media-meta__items list-none p-0 text-base">
			<?php Hybrid\Media\display_meta( 'dimensions',        [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Dimensions:', 'tavern' )    ] ) ?>
			<?php Hybrid\Media\display_meta( 'created_timestamp', [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Date:', 'tavern' )          ] ) ?>
			<?php Hybrid\Media\display_meta( 'camera',            [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Camera:', 'tavern' )        ] ) ?>
			<?php Hybrid\Media\display_meta( 'aperture',          [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Aperture:', 'tavern' )      ] ) ?>
			<?php Hybrid\Media\display_meta( 'focal_length',      [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Focal Length:', 'tavern' )  ] ) ?>
			<?php Hybrid\Media\display_meta( 'iso',               [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'ISO:', 'tavern' )           ] ) ?>
			<?php Hybrid\Media\display_meta( 'shutter_speed',     [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Shutter Speed:', 'tavern' ) ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_name',         [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Name:', 'tavern' )          ] ) ?>
			<?php Hybrid\Media\display_meta( 'mime_type',         [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Mime Type:', 'tavern' )     ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_type',         [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Type:', 'tavern' )          ] ) ?>
			<?php Hybrid\Media\display_meta( 'file_size',         [ 'tag' => 'li', 'class' => 'media-meta__item p-2 sm:flex border-0 border-b border-solid', 'data_class' => 'media-meta__data flex-1 text-right', 'label' => __( 'Size:', 'tavern' )          ] ) ?>
		</ul>

	</div>

</article>
