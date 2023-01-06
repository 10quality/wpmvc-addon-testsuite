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
    public function assertHasRegisterStyle( $handle, $message = null )
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
    public function assertNotHasRegisterStyle( $handle, $message = null )
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
    public function assertHasRegisterScript( $handle, $message = null )
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
    public function assertNotHasRegisterScript( $handle, $message = null )
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
    public function assertHasEnqueueStyle( $handle, $message = null )
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
    public function assertNotHasEnqueueStyle( $handle, $message = null )
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
    public function assertHasEnqueueScript( $handle, $message = null )
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
    public function assertNotHasEnqueueScript( $handle, $message = null )
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
    /**
     * Asserts if an action ran.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertDidAction( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['actions']['done'] )
            ),
            $message ?: 'The action "' . $handle .'" did not run.'
        );
    }
    /**
     * Asserts if an action ran.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertDidNotAction( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['actions']['done'] )
            ),
            $message ?: 'The action "' . $handle .'" did run.'
        );
    }
    /**
     * Asserts if a filter has ran.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertAppliedFilters( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['filters']['done'] )
            ),
            $message ?: 'Filter for "' . $handle .'" have not been applied.'
        );
    }
    /**
     * Asserts if a filter has ran.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotAppliedFilters( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['filters']['done'] )
            ),
            $message ?: 'Filter for "' . $handle .'" have been applied.'
        );
    }
    /**
     * Asserts if an action has been added.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertAddedAction( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['actions']['added'] )
            ),
            $message ?: 'No handlers have been added for action "' . $handle .'".'
        );
    }
    /**
     * Asserts if an action has been added.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotAddedAction( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['actions']['added'] )
            ),
            $message ?: 'Handlers have been added for action "' . $handle .'".'
        );
    }
    /**
     * Asserts if a filter has been added.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertAddedFilter( $handle, $message = null )
    {
        self::assertThat(
            true,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['filters']['added'] )
            ),
            $message ?: 'No handlers have been added for filter "' . $handle .'".'
        );
    }
    /**
     * Asserts if a filter has been added.
     * @since 1.0.0
     * 
     * @param string $handle
     * @param string $message
     */
    public function assertNotAddedFilter( $handle, $message = null )
    {
        self::assertThat(
            false,
            self::identicalTo(
                array_key_exists( $handle, $GLOBALS['hooks']['filters']['added'] )
            ),
            $message ?: 'Handlers have been added for filter "' . $handle .'".'
        );
    }
}