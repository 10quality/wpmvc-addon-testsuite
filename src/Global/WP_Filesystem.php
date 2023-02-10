<?php
/**
 * WordPress class mock.
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class WP_Filesystem
{
    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function __construct() {}

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function get_contents( $file )
    {
        return @file_get_contents( $file );
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function put_contents( $file, $contents, $mode = false )
    {
        $fp = @fopen( $file, 'wb' );
        if ( ! $fp )
        return false;
        $data_length = strlen( $contents );
        $bytes_written = fwrite( $fp, $contents );
        fclose( $fp );
        if ( $data_length !== $bytes_written )
            return false;
        return true;
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function is_dir( $path)
    {
        return @is_dir( $path );
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function mkdir( $path, $chmod = false, $chown = false, $chgrp = false )
    {
        if ( empty( $path ) )
            return false;
        if ( ! @mkdir( $path ) )
        return true;
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function rmdir( $path )
    {
        return @rmdir( $path );
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function is_file( $filename )
    {
        return @is_file( $filename );
    }

    /**
     * Mocked method.
     * @see https://developer.wordpress.org/reference/classes/wp_filesystem_base/
     */
    public function exists( $filename )
    {
        return @file_exists( $filename );
    }
}