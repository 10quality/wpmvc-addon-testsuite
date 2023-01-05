<?php

use PHPUnit\Framework\TestCase;

/**
 * Test case.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class FunctionsTest extends TestCase
{
    /**
     * Tear down
     */
    public function tearDown(): void
    {
        $GLOBALS['assets'] = [
            'styles' => [],
            'scripts' => [],
        ];
    }
    /**
     * @group functions
     */
    public function testWpRegisterStyle()
    {
        wp_register_style( 'test' );
        $this->assertArrayHasKey( 'test', $GLOBALS['assets']['styles'] );
    }
    /**
     * @group functions
     */
    public function testWpEnqueueStyle()
    {
        wp_enqueue_style( 'test' );
        $this->assertArrayHasKey( 'test', $GLOBALS['assets']['styles'] );
    }
    /**
     * @group functions
     */
    public function testWpRegisterScript()
    {
        wp_register_script( 'test' );
        $this->assertArrayHasKey( 'test', $GLOBALS['assets']['scripts'] );
    }
    /**
     * @group functions
     */
    public function testWpEnqueueScript()
    {
        wp_enqueue_script( 'test' );
        $this->assertArrayHasKey( 'test', $GLOBALS['assets']['scripts'] );
    }
}