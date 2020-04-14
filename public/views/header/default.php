<!DOCTYPE html>
<html <?php Hybrid\Attr\display( 'html' ) ?>>

<head>
<?php wp_head() ?>
</head>

<body <?php Hybrid\Attr\display( 'body' ) ?>>

<?php wp_body_open() ?>

<div class="app relative">

	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'tavern' ) ?></a>

	<header <?php Hybrid\Attr\display( 'app-header', '', [
		'class' => sprintf(
			'app-header %s z-40 top-0 flex flex-wrap items-center justify-between w-full h-auto
			md:grid md:grid-col-3 grid-col-gap-8 bg-black',
			Tavern\Tools\Mod::get( 'header_sticky' ) ? 'sticky' : 'sticky md:static'
		)
	] ) ?>>

		<div class="app-header__branding overflow-hidden flex justify-start items-center md:flex-grow-0 md:col-span-2 max-w-full h-16 pl-8 text-center">
			<?php the_custom_logo() ?>

			<?php Hybrid\Site\display_title( [
				'class'      => 'app-header__title m-0 mr-2 leading-none text-xl',
				'link_class' => 'app-header__title-link no-underline hover:underline focus:underline'
			] ) ?>
			<?php if ( $sep = Tavern\Tools\Mod::get( 'branding_sep' ) ) : ?>
				<span class="app-header__sep hidden sm:block mx-3 leading-none" aria-hidden="true"><?= esc_html( $sep ) ?></span>
			<?php endif ?>
			<?php Hybrid\Site\display_description( [ 'class' => 'app-header__description hidden sm:block m-0 ml-2 leading-none text-sm' ] ) ?>
		</div>

		<?php $engine->display( 'nav/menu', 'primary', [ 'location' => 'primary' ] ) ?>

	</header>
