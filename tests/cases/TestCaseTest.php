<?php

use WPMVC\Addons\PHPUnit\TestCase;

/**
 * Test case.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class TestCaseTest extends TestCase
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
     * @group asserts
     */
    public function testAssertHanRegisterStyle()
    {
        wp_register_style( 'test' );
        $this->assertHanRegisterStyle( 'test' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotHanRegisterStyle()
    {
        $this->assertNotHanRegisterStyle( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testAssertHanRegisterScript()
    {
        wp_register_script( 'test' );
        $this->assertHanRegisterScript( 'test' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotHanRegisterScript()
    {
        $this->assertNotHanRegisterScript( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testAssertHanEnqueueStyle()
    {
        wp_enqueue_style( 'test' );
        $this->assertHanEnqueueStyle( 'test' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotHanEnqueueStyle()
    {
        wp_register_style( 'test2' );
        $this->assertNotHanEnqueueStyle( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testAssertHanEnqueueScript()
    {
        wp_enqueue_script( 'test' );
        $this->assertHanEnqueueScript( 'test' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotHanEnqueueScript()
    {
        wp_register_script( 'test2' );
        $this->assertNotHanEnqueueScript( 'test2' );
    }
}