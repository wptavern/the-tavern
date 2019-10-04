<?php
/**
 * Theme bootstrap file.
 *
 * This file is used to create a new application instance and bind items to the
 * container. This is the heart of the application.
 *
 * @package   Tavern
 * @author    WP Tavern <justintadlock@gmail.com>
 * @copyright 2019 WP Tavern
 * @license   https://www.gnu.org/licenses/gpl-2.0.html GPL-2.0-or-later
 * @link      https://wptavern.com
 */

# ------------------------------------------------------------------------------
# Create a new application.
# ------------------------------------------------------------------------------
#
# Creates the one true instance of the Hybrid Core application. You may access
# this instance via the `\Hybrid\app()` function or `\Hybrid\App` static class
# after the application has booted.

$tavern = new \Hybrid\Core\Application();

# ------------------------------------------------------------------------------
# Register service providers with the application.
# ------------------------------------------------------------------------------
#
# Before booting the application, add any service providers that are necessary
# for running the theme. Service providers are essentially the backbone of the
# bootstrapping process.

$tavern->provider( \Tavern\Provider::class            );
$tavern->provider( \Tavern\Background\Provider::class );
$tavern->provider( \Tavern\Block\Provider::class      );
$tavern->provider( \Tavern\Color\Provider::class      );
$tavern->provider( \Tavern\Customize\Provider::class  );
$tavern->provider( \Tavern\Editor\Provider::class     );
$tavern->provider( \Tavern\Gallery\Provider::class    );
$tavern->provider( \Tavern\Image\Provider::class      );
$tavern->provider( \Tavern\Layout\Provider::class     );
$tavern->provider( \Tavern\Typography\Provider::class );

# ------------------------------------------------------------------------------
# Perform bootstrap actions.
# ------------------------------------------------------------------------------
#
# Creates an action hook for child themes (or even plugins) to hook into the
# bootstrapping process and add their own bindings before the app is booted by
# passing the application instance to the action callback.

do_action( 'tavern/bootstrap', $tavern );

# ------------------------------------------------------------------------------
# Bootstrap the application.
# ------------------------------------------------------------------------------
#
# Calls the application `boot()` method, which launches the application. Pat
# yourself on the back for a job well done.

$tavern->boot();
