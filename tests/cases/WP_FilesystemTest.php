<?php

use WPMVC\Addons\PHPUnit\TestCase;

/**
 * Test case.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class WP_FilesystemTest extends TestCase
{
    /**
     * @group globals
     */
    public function test_class()
    {
        // Prepare
        $fs = new WP_Filesystem;
        // Assert
        $this->assertTrue( method_exists( $fs, 'get_contents' ) );
        $this->assertTrue( method_exists( $fs, 'put_contents' ) );
        $this->assertTrue( method_exists( $fs, 'is_dir' ) );
        $this->assertTrue( method_exists( $fs, 'mkdir' ) );
        $this->assertTrue( method_exists( $fs, 'rmdir' ) );
        $this->assertTrue( method_exists( $fs, 'is_file' ) );
        $this->assertTrue( method_exists( $fs, 'exists' ) );
    }
}