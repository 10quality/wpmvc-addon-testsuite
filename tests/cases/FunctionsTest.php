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
        wpmvc_addon_phpunit_reset();
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
    /**
     * @group functions
     */
    public function testDoAction()
    {
        do_action( 'init' );
        $this->assertArrayHasKey( 'init', $GLOBALS['hooks']['actions']['done'] );
    }
    /**
     * @group functions
     */
    public function testApplyFilters()
    {
        $value = apply_filters( 'test', 123 );
        $this->assertArrayHasKey( 'test', $GLOBALS['hooks']['filters']['done'] );
        $this->assertEquals(123, $value);
    }
    /**
     * @group functions
     */
    public function testAddAction()
    {
        add_action( 'init' );
        $this->assertArrayHasKey( 'init', $GLOBALS['hooks']['actions']['added'] );
    }
    /**
     * @group functions
     */
    public function testAddFilter()
    {
        add_filter( 'init' );
        $this->assertArrayHasKey( 'init', $GLOBALS['hooks']['filters']['added'] );
    }
    /**
     * @group functions
     */
    public function testAddSubmenuPage()
    {
        add_submenu_page();
        $this->assertArrayHasKey( 'add_submenu_page', $GLOBALS['wp_functions'] );
    }
    /**
     * @group functions
     */
    public function testGetLocale()
    {
        $locale = get_locale();
        $this->assertArrayHasKey( 'get_locale', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'en', $locale );
    }
    /**
     * @group functions
     */
    public function testHomeUrl()
    {
        $url = home_url();
        $url2 = home_url( '/test' );
        $this->assertArrayHasKey( 'home_url', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'http://localhost/', $url );
        $this->assertEquals( 'http://localhost/test', $url2 );
    }
    /**
     * @group functions
     */
    public function testLocalization()
    {
        $text = __( 'Text' );
        $this->assertArrayHasKey( '__', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'Text', $text );
    }
    /**
     * @group functions
     */
    public function testLocalizationWithEcho()
    {
        ob_start();
        _e( 'Text' );
        $text = ob_get_clean(); 
        $this->assertArrayHasKey( '_e', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'Text', $text );
    }
    /**
     * @group functions
     */
    public function testAddQueryArg()
    {
        $query = add_query_arg();
        $this->assertArrayHasKey( 'add_query_arg', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'http://localhost/', $query );
    }
    /**
     * @group functions
     */
    public function testAdminUrl()
    {
        $url = admin_url();
        $url2 = admin_url( '/test' );
        $this->assertArrayHasKey( 'admin_url', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'http://localhost/wp-admin/', $url );
        $this->assertEquals( 'http://localhost/wp-admin/test', $url2 );
    }
    /**
     * @group functions
     */
    public function testGetStylesheetDirectory()
    {
        $dir = get_stylesheet_directory();
        $this->assertArrayHasKey( 'get_stylesheet_directory', $GLOBALS['wp_functions'] );
        $this->assertNotEmpty( $dir );
    }
    /**
     * @group functions
     */
    public function testEscAttr()
    {
        $val = esc_attr( 'val' );
        $this->assertArrayHasKey( 'esc_attr', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'val', $val );
    }
    /**
     * @group functions
     */
    public function testEscUrl()
    {
        $val = esc_url( 'val' );
        $this->assertArrayHasKey( 'esc_url', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'val', $val );
    }
    /**
     * @group functions
     */
    public function testEscHtml()
    {
        $val = esc_html( 'val' );
        $this->assertArrayHasKey( 'esc_html', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'val', $val );
    }
    /**
     * @group functions
     */
    public function testSanitizeTextField()
    {
        $val = sanitize_text_field( 'val' );
        $this->assertArrayHasKey( 'sanitize_text_field', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'val', $val );
    }
    /**
     * @group functions
     */
    public function testEscHtmlE()
    {
        ob_start();
        esc_html_e( 'val' );
        $val = ob_get_clean(); 
        $this->assertArrayHasKey( 'esc_html_e', $GLOBALS['wp_functions'] );
        $this->assertEquals( 'val', $val );
    }
}