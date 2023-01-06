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
* Reset globals.
* @since 1.0.0
*/
function wpmvc_phpunit_reset() {
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
}

if ( !function_exists( 'wp_register_style' ) ) {
    /**
     * Simulate style registration.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function wp_register_style( $handle ) {
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
        $GLOBALS['assets']['scripts'][$handle] = 'enqueue';
    }
}

if ( !function_exists( 'do_action' ) ) {
    /**
     * Simulate method.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function do_action( $handle ) {
        $GLOBALS['hooks']['actions']['done'][$handle] = true;
    }
}

if ( !function_exists( 'apply_filters' ) ) {
    /**
     * Simulate method.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param mixed  $value
     * 
     * @return mixed
     */
    function apply_filters( $handle, $value = null ) {
        $GLOBALS['hooks']['filters']['done'][$handle] = true;
        return $value;
    }
}

if ( !function_exists( 'add_action' ) ) {
    /**
     * Simulate method.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function add_action( $handle ) {
        $GLOBALS['hooks']['actions']['added'][$handle] = true;
    }
}

if ( !function_exists( 'add_filter' ) ) {
    /**
     * Simulate method.
     * @since 1.0.0
     * 
     * @param string $handle
     */
    function add_filter( $handle ) {
        $GLOBALS['hooks']['filters']['added'][$handle] = true;
    }
}