<?php
/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if ( !function_exists ( 'blank_setup' ) ) :
	/**
	 * Sets up theme defaults and registers the various WordPress features that
	 * this theme supports.
	 */
	function blank_setup () {
		load_theme_textdomain ( 'intentionally-blank' );
		add_theme_support ( 'automatic-feed-links' );
		add_theme_support ( 'title-tag' );
		add_theme_support ( 'post-thumbnails' );

		// This theme allows users to set a custom background.
		add_theme_support (
			'custom-background',
			array(
				'default-color' => 'f5f5f5',
			),
		);

		add_theme_support ( 'custom-logo' );
		add_theme_support (
			'custom-logo',
			array(
				'height'      => 256,
				'width'       => 256,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			),
		);
		}
endif; // end function_exists blank_setup.

add_action ( 'after_setup_theme', 'blank_setup' );

remove_action ( 'wp_head', '_custom_logo_header_styles' );

if ( !is_admin () ) {
	add_action (
		'wp_enqueue_scripts',
		function () {
			wp_dequeue_style ( 'global-styles' );
			wp_dequeue_style ( 'classic-theme-styles' );
			wp_dequeue_style ( 'wp-block-library' );
			}
	);
	}
/**
 * Sets up theme defaults and registers the various WordPress features that
 * this theme supports.

 * @param class $wp_customize Customizer object.
 */
function blank_customize_register ( $wp_customize ) {
	$wp_customize->remove_section ( 'static_front_page' );

	$wp_customize->add_section (
		'blank_footer',
		array(
			'title'      => __ ( 'Footer', 'intentionally-blank' ),
			'priority'   => 120,
			'capability' => 'edit_theme_options',
			'panel'      => '',
		),
	);
	$wp_customize->add_setting (
		'blank_copyright',
		array(
			'type'              => 'theme_mod',
			'default'           => __ ( 'Intentionally Blank - Proudly powered by WordPress', 'intentionally-blank' ),
			'sanitize_callback' => 'wp_kses_post',
		),
	);

	/**
	 * Checkbox sanitization function

	 * @param bool $checked Whether the checkbox is checked.
	 * @return bool Whether the checkbox is checked.
	 */
	function blank_sanitize_checkbox ( $checked ) {
		// Returns true if checkbox is checked.
		return ( ( isset ( $checked ) && true === $checked ) ? true : false );
		}
	$wp_customize->add_setting (
		'blank_show_copyright',
		array(
			'default'           => true,
			'sanitize_callback' => 'blank_sanitize_checkbox',
		),
	);
	$wp_customize->add_control (
		'blank_copyright',
		array(
			'type'     => 'textarea',
			'label'    => __ ( 'Copyright Text', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_copyright',
			'priority' => '10',
		),
	);
	$wp_customize->add_control (
		'blank_footer_copyright_hide',
		array(
			'type'     => 'checkbox',
			'label'    => __ ( 'Show footer with copyright Text', 'intentionally-blank' ),
			'section'  => 'blank_footer',
			'settings' => 'blank_show_copyright',
			'priority' => '20',
		),
	);
	}
add_action ( 'customize_register', 'blank_customize_register', 100 );


// 建立 WordPress 導航列
function inks_register_nav_menus () {
	register_nav_menus ( array(
		'primary_menu' => __ ( '主要導航列', 'inks' ),
		'mobile_menu'  => __ ( '手機導航列', 'inks' ),
	) );
	}
add_action ( 'after_setup_theme', 'inks_register_nav_menus' );

/**
 * 自訂導航選單 Walker 類別
 * 用於生成符合 Tailwind CSS 設計的導航選單
 */
class Custom_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * 開始輸出選單項目
	 */
	function start_el ( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent = ( $depth ) ? str_repeat ( "\t", $depth ) : '';

		$li_attributes = '';
		$class_names   = $value = '';

		$classes   = empty ( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		// 根據深度添加不同的 CSS 類別
		if ( $depth == 0 ) {
			$classes[] = 'nav-item';
			}
		else {
			$classes[] = 'nav-item-sub';
			}

		// 如果是當前頁面或父頁面，添加 active 類別
		if ( in_array ( 'current-menu-item', $classes ) || in_array ( 'current-menu-parent', $classes ) ) {
			$classes[] = 'active';
			}

		$class_names = join ( ' ', apply_filters ( 'nav_menu_css_class', array_filter ( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr ( $class_names ) . '"';

		$id = apply_filters ( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = strlen ( $id ) ? ' id="' . esc_attr ( $id ) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes = !empty ( $item->attr_title ) ? ' title="' . esc_attr ( $item->attr_title ) . '"' : '';
		$attributes .= !empty ( $item->target ) ? ' target="' . esc_attr ( $item->target ) . '"' : '';
		$attributes .= !empty ( $item->xfn ) ? ' rel="' . esc_attr ( $item->xfn ) . '"' : '';
		$attributes .= !empty ( $item->url ) ? ' href="' . esc_attr ( $item->url ) . '"' : '';

		// 根據深度添加不同的 CSS 類別
		if ( $depth == 0 ) {
			$attributes .= ' class="text-primary hover:text-secondary px-3 py-2 text-sm font-medium transition-colors duration-200"';
			}
		else {
			$attributes .= ' class="text-muted-foreground hover:text-foreground block px-3 py-2 text-sm font-medium"';
			}

		$item_output = isset ( $args->before ) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= ( isset ( $args->link_before ) ? $args->link_before : '' ) . apply_filters ( 'the_title', $item->title, $item->ID ) . ( isset ( $args->link_after ) ? $args->link_after : '' );
		$item_output .= '</a>';
		$item_output .= isset ( $args->after ) ? $args->after : '';

		$output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
		}

	/**
	 * 開始輸出子選單
	 */
	function start_lvl ( &$output, $depth = 0, $args = null ) {
		$indent        = str_repeat ( "\t", $depth );
		$submenu_class = ( $depth > 0 ) ? 'sub-sub-menu' : 'sub-menu';
		$output .= "\n" . $indent . '<ul class="' . $submenu_class . ' bg-background/95 backdrop-blur-md border border-border rounded-lg shadow-lg py-2 min-w-[200px]">' . "\n";
		}

	/**
	 * 結束輸出子選單
	 */
	function end_lvl ( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat ( "\t", $depth );
		$output .= $indent . '</ul>' . "\n";
		}
	}
