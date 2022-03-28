<?php
/**
 * WP Groove™ {@see https://wpgroove.com}
 *  _       _  ___       ___
 * ( )  _  ( )(  _`\    (  _`\
 * | | ( ) | || |_) )   | ( (_) _ __   _      _    _   _    __  ™
 * | | | | | || ,__/'   | |___ ( '__)/'_`\  /'_`\ ( ) ( ) /'__`\
 * | (_/ \_) || |       | (_, )| |  ( (_) )( (_) )| \_/ |(  ___/
 * `\___x___/'(_)       (____/'(_)  `\___/'`\___/'`\___/'`\____)
 */
// <editor-fold desc="Strict types, namespace, use statements, and other headers.">

/**
 * Lint configuration.
 *
 * @since        2021-12-15
 *
 * @noinspection PhpUnhandledExceptionInspection
 * @noinspection PhpStaticAsDynamicMethodCallInspection
 * phpcs:disable Generic.Commenting.DocComment.MissingShort
 */

/**
 * Declarations & namespace.
 *
 * @since 2021-12-25
 */
declare( strict_types = 1 );
namespace WP_Groove\Skeleton_Plugin_Pro\Tests\WP_Docker;

/**
 * Utilities.
 *
 * @since 2021-12-15
 */
use Clever_Canyon\{Utilities as U};
use Clever_Canyon\Utilities\{Tests as U_Tests};

/**
 * Framework.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Framework as WPG};
use WP_Groove\{Framework_Pro as WPG_Pro};

use WP_Groove\Framework\{Tests as WPG_Tests};
use WP_Groove\Framework_Pro\{Tests as WPG_Pro_Tests};

/**
 * Plugin.
 *
 * @since 2021-12-15
 */
use WP_Groove\{Skeleton_Plugin_Pro as WP};

// </editor-fold>

/**
 * Test case.
 *
 * @since 2021-12-15
 * @coversDefaultClass \WP_Groove\Skeleton_Plugin_Pro\Plugin
 */
final class Plugin_Tests extends WPG_Pro_Tests\A6t\Base {
	/**
	 * @covers ::load()
	 * @covers ::instance()
	 */
	public function test_plugin() : void {
		$plugin = WP\Plugin::instance();
		$this->assertSame( 'w6e', $plugin->brand->n7m, $this->message() );
	}
}
