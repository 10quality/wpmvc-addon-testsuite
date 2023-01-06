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
        wpmvc_phpunit_reset();
    }
    /**
     * @group asserts
     */
    public function testassertHasRegisterStyle()
    {
        wp_register_style( 'test' );
        $this->assertHasRegisterStyle( 'test' );
    }
    /**
     * @group asserts
     */
    public function testassertNotHasRegisterStyle()
    {
        $this->assertNotHasRegisterStyle( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testassertHasRegisterScript()
    {
        wp_register_script( 'test' );
        $this->assertHasRegisterScript( 'test' );
    }
    /**
     * @group asserts
     */
    public function testassertNotHasRegisterScript()
    {
        $this->assertNotHasRegisterScript( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testassertHasEnqueueStyle()
    {
        wp_enqueue_style( 'test' );
        $this->assertHasEnqueueStyle( 'test' );
    }
    /**
     * @group asserts
     */
    public function testassertNotHasEnqueueStyle()
    {
        wp_register_style( 'test2' );
        $this->assertNotHasEnqueueStyle( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testassertHasEnqueueScript()
    {
        wp_enqueue_script( 'test' );
        $this->assertHasEnqueueScript( 'test' );
    }
    /**
     * @group asserts
     */
    public function testassertNotHasEnqueueScript()
    {
        wp_register_script( 'test2' );
        $this->assertNotHasEnqueueScript( 'test2' );
    }
    /**
     * @group asserts
     */
    public function testAssertDidAction()
    {
        do_action( 'init' );
        $this->assertDidAction( 'init' );
    }
    /**
     * @group asserts
     */
    public function testAssertDidNotAction()
    {
        $this->assertDidNotAction( 'init2' );
    }
    /**
     * @group asserts
     */
    public function testAssertAppliedFilters()
    {
        apply_filters( 'the_value', 123 );
        $this->assertAppliedFilters( 'the_value' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotAppliedFilters()
    {
        $this->assertNotAppliedFilters( 'the_value2' );
    }
    /**
     * @group asserts
     */
    public function testAssertAddedAction()
    {
        add_action( 'init' );
        $this->assertAddedAction( 'init' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotAddedAction()
    {
        $this->assertNotAddedAction( 'init' );
    }
    /**
     * @group asserts
     */
    public function testAssertAddedFilter()
    {
        add_filter( 'init' );
        $this->assertAddedFilter( 'init' );
    }
    /**
     * @group asserts
     */
    public function testAssertNotAddedFilter()
    {
        $this->assertNotAddedFilter( 'init' );
    }
}