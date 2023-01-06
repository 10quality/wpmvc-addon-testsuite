<?php

namespace WPMVC\Addons\PHPUnit\Examples;

use WPMVC\Addon;

/**
 * Addon example
 * 
 * @author 10 Quality Studio <https://www.10quality.com>
 * @package 10quality/wpmvc-addon-testsuite
 * @version 1.0.0
 */
class AddonExample extends Addon
{
    /**
     * Init method.
     * @since 1.0.0
     */
    public function init()
    {
        add_action( 'init', function() {
            // Does nothing
        } );
    }
}