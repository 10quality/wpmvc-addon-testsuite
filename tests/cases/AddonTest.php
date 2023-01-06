<?php

use WPMVC\Addons\PHPUnit\TestCase;
use WPMVC\Addons\PHPUnit\Examples\AddonExample;

/**
 * Test case.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class AddonTest extends TestCase
{
    /**
     * Tear down
     */
    public function tearDown(): void
    {
        wpmvc_addon_phpunit_reset();
    }
    /**
     * @group addon
     */
    public function testBridgeMock()
    {
        // Prepare
        $bridge = $this->getBridgeMock();
        $addon = new AddonExample($bridge);
        // Run
        $addon->init();
        // Assert
        $this->assertAddedAction( 'init' );
    }
}