<?php

/**
 * Hooks and globals file.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */

/**
 * Registered and enqueued assets.
 * @since 1.0.0
 * @var array
 */
$GLOBALS['assets'] = [
    'styles' => [],
    'scripts' => [],
];

/**
 * Ran hooks.
 * @since 1.0.0
 * @var array
 */
$GLOBALS['hooks'] = [
    'actions' => [
        'done' => [],
        'added' => [],
    ],
    'filters' => [
        'done' => [],
        'added' => [],
    ],
];

/**
 * Ran core functions.
 * @since 1.0.0
 * @var array
 */
$GLOBALS['wp_functions'] = [];

/**
* Reset globals.
* @since 1.0.0
*/
function wpmvc_addon_phpunit_reset() {
    $GLOBALS['assets'] = [
        'styles' => [],
        'scripts' => [],
    ];
    $GLOBALS['hooks'] = [
        'actions' => [
            'done' => [],
            'added' => [],
        ],
        'filters' => [
            'done' => [],
            'added' => [],
        ],
    ];
    $GLOBALS['wp_functions'] = [];
}

if ( !function_exists( 'wp_register_style' ) ) {
    /**
     * Simulate style registration.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function wp_register_style( $handle ) {
        $GLOBALS['wp_functions']['wp_register_style'] = true;
        $GLOBALS['assets']['styles'][$handle] = 'register';
    }
}

if ( !function_exists( 'wp_enqueue_style' ) ) {
    /**
     * Simulate style enqueue.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function wp_enqueue_style( $handle ) {
        $GLOBALS['wp_functions']['wp_enqueue_style'] = true;
        $GLOBALS['assets']['styles'][$handle] = 'enqueue';
    }   
}

if ( !function_exists( 'wp_register_script' ) ) {
    /**
     * Simulate script registration.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function wp_register_script( $handle ) {
        $GLOBALS['wp_functions']['wp_register_script'] = true;
        $GLOBALS['assets']['scripts'][$handle] = 'register';
    }
}

if ( !function_exists( 'wp_enqueue_script' ) ) {
    /**
     * Simulate script enqueue.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function wp_enqueue_script( $handle ) {
        $GLOBALS['wp_functions']['wp_enqueue_script'] = true;
        $GLOBALS['assets']['scripts'][$handle] = 'enqueue';
    }
}

if ( !function_exists( 'do_action' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function do_action( $handle ) {
        $GLOBALS['wp_functions']['do_action'] = true;
        $GLOBALS['hooks']['actions']['done'][$handle] = true;
    }
}

if ( !function_exists( 'apply_filters' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param mixed  $value
     * 
     * @return mixed
     */
    function apply_filters( $handle, $value = null ) {
        $GLOBALS['wp_functions']['apply_filters'] = true;
        $GLOBALS['hooks']['filters']['done'][$handle] = true;
        return $value;
    }
}

if ( !function_exists( 'add_action' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function add_action( $handle ) {
        $GLOBALS['wp_functions']['add_action'] = true;
        $GLOBALS['hooks']['actions']['added'][$handle] = true;
    }
}

if ( !function_exists( 'add_filter' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function add_filter( $handle ) {
        $GLOBALS['wp_functions']['add_filter'] = true;
        $GLOBALS['hooks']['filters']['added'][$handle] = true;
    }
}

if ( !function_exists( 'add_submenu_page' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     */
    function add_submenu_page() {
        $GLOBALS['wp_functions']['add_submenu_page'] = true;
    }
}

if ( !function_exists( 'get_locale' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @return string
     */
    function get_locale() {
        $GLOBALS['wp_functions']['get_locale'] = true;
        return 'en';
    }
}
if ( !function_exists( 'home_url' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $path
     * 
     * @return string
     */
    function home_url( $path = '/' ) {
        $GLOBALS['wp_functions']['home_url'] = true;
        return 'http://localhost'.$path;
    }
}
if ( !function_exists( '__' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $text
     * 
     * @return string
     */
    function __( $text ) {
        $GLOBALS['wp_functions']['__'] = true;
        return $text;
    }
}
if ( !function_exists( '_e' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $text
     */
    function _e( $text ) {
        $GLOBALS['wp_functions']['_e'] = true;
        echo $text;
    }
}
if ( !function_exists( 'add_query_arg' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     */
    function add_query_arg() {
        $GLOBALS['wp_functions']['add_query_arg'] = true;
        return 'http://localhost/';
    }
}
if ( !function_exists( 'admin_url' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $path
     * 
     * @return string
     */
    function admin_url( $path = '/' ) {
        $GLOBALS['wp_functions']['admin_url'] = true;
        return 'http://localhost/wp-admin'.$path;
    }
}
if ( !function_exists( 'get_stylesheet_directory' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @return string
     */
    function get_stylesheet_directory() {
        $GLOBALS['wp_functions']['get_stylesheet_directory'] = true;
        return __DIR__;
    }
}
if ( !function_exists( 'esc_attr' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $value
     * 
     * @return string
     */
    function esc_attr( $value ) {
        $GLOBALS['wp_functions']['esc_attr'] = true;
        return $value;
    }
}
if ( !function_exists( 'esc_url' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $value
     * 
     * @return string
     */
    function esc_url( $value ) {
        $GLOBALS['wp_functions']['esc_url'] = true;
        return $value;
    }
}
if ( !function_exists( 'esc_html' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $value
     * 
     * @return string
     */
    function esc_html( $value ) {
        $GLOBALS['wp_functions']['esc_html'] = true;
        return $value;
    }
}
if ( !function_exists( 'esc_html_e' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $value
     */
    function esc_html_e( $value ) {
        $GLOBALS['wp_functions']['esc_html_e'] = true;
        echo $value;
    }
}
if ( !function_exists( 'sanitize_text_field' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $value
     * 
     * @return string
     */
    function sanitize_text_field( $value ) {
        $GLOBALS['wp_functions']['sanitize_text_field'] = true;
        return $value;
    }
}
if ( !function_exists( 'site_url' ) ) {
    /**
     * Simulate WordPress core function.
     * @since 1.0.0
     * 
     * @param string $path
     * 
     * @return string
     */
    function site_url( $path = '/' ) {
        $GLOBALS['wp_functions']['site_url'] = true;
        return 'http://localhost'.$path;
    }
}