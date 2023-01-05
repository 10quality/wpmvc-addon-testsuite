<?php

namespace WPMVC\Addons\PHPUnit;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

/**
 * Custom test case for Addon testing.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class TestCase extends PHPUnitTestCase
{
    /**
     * Asserts if a style assets has been registered or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertHanRegisterStyle( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo( array_key_exists( $handle, $GLOBALS['assets']['styles'] ) ),
            $message ?: 'The style with the handle "' . $handle .'" has not been registered.'
        );
    }
    /**
     * Asserts if a style assets has been registered or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotHanRegisterStyle( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo( array_key_exists( $handle, $GLOBALS['assets']['styles'] ) ),
            $message ?: 'The style with the handle "' . $handle .'" has been registered.'
        );
    }
    /**
     * Asserts if a script assets has been registered or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertHanRegisterScript( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo( array_key_exists( $handle, $GLOBALS['assets']['scripts'] ) ),
            $message ?: 'The script with the handle "' . $handle .'" has not been registered.'
        );
    }
    /**
     * Asserts if a script assets has been registered or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotHanRegisterScript( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo( array_key_exists( $handle, $GLOBALS['assets']['scripts'] ) ),
            $message ?: 'The script with the handle "' . $handle .'" has been registered.'
        );
    }
    /**
     * Asserts if a style assets has been enqueued or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertHanEnqueueStyle( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['assets']['styles'] )
                && $GLOBALS['assets']['styles'][$handle] === 'enqueue'
            ),
            $message ?: 'The style with the handle "' . $handle .'" has not been enqueued.'
        );
    }
    /**
     * Asserts if a style assets has been enqueued or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotHanEnqueueStyle( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['assets']['styles'] )
                && $GLOBALS['assets']['styles'][$handle] === 'enqueue'
            ),
            $message ?: 'The style with the handle "' . $handle .'" has been enqueued.'
        );
    }
    /**
     * Asserts if a script assets has been enqueued or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertHanEnqueueScript( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['assets']['scripts'] )
                && $GLOBALS['assets']['scripts'][$handle] === 'enqueue'
            ),
            $message ?: 'The script with the handle "' . $handle .'" has not been enqueued.'
        );
    }
    /**
     * Asserts if a script assets has been enqueued or not.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotHanEnqueueScript( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['assets']['scripts'] )
                && $GLOBALS['assets']['scripts'][$handle] === 'enqueue'
            ),
            $message ?: 'The script with the handle "' . $handle .'" has been enqueued.'
        );
    }
}