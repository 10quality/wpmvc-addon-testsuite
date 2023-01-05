<?php

/**
 * Hooks and globals file.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */

/**
 * Register and enqueue assets.
 * @since 1.0.0
 * @var array
 */
$GLOBALS['assets'] = [
    'styles' => [],
    'scripts' => [],
];

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