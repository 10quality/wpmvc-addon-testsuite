# WordPress MVC - Addon test suite

## Install

Composer command to install as `required-dev`:
```bash
composer install 10quality/wpmvc-addon-testsuite --dev
```

## Test Case Class

Instead of the default PHPUnit test case use the following:
```php
use WPMVC\Addons\PHPUnit\TestCase;

class MyTest extends TestCase
{
    // Your test methods
}
```

This classs will allow you to use the following assertiong methods:

| Method | Parameters | Description |
| --- | --- | --- |
| `$this->assertDidAction` | `$handle` the action hook name handle. | Asserts if an action ran. |
| `$this->assertDidNotAction` | `$handle` the action hook name handle. | Asserts if an action not ran. |
| `$this->assertAppliedFilters` | `$handle` the filter hook name handle. | Asserts if filters have been applied to a hook. |
| `$this->assertNotAppliedFilters` | `$handle` the filter hook name handle. | Asserts if filters have been not applied to a hook. 
| `$this->assertAddedAction` | `$handle` the action hook name handle. | Asserts if an action handler has been added for a hook. |
| `$this->assertNotAddedAction` | `$handle` the action hook name handle. | Asserts if no action handlers has been added for a hook. |
| `$this->assertAddedFilter` | `$handle` the filter hook name handle. | Asserts if a filter handler has been added for a hook. |
| `$this->assertNotAddedFilter` | `$handle` the filter hook name handle. | Asserts if no filter handlers has been added for a hook. |
| `$this->assertHasRegisterStyle` | `$handle` the style name handle. | Asserts if a style asset has been registered. |
| `$this->assertNotHasRegisterStyle` | `$handle` the style hook name handle. | Asserts if a style asset has not been registered. |
| `$this->assertHasRegisterScript` | `$handle` the script name handle. | Asserts if a script asset has been registered. |
| `$this->assertNotHasRegisterScript` | `$handle` the script hook name handle. | Asserts if a script asset has not been registered. |
| `$this->assertHasEnqueueStyle` | `$handle` the style name handle. | Asserts if a style asset has been registered. |
| `$this->assertNotHasEnqueueStyle` | `$handle` the style hook name handle. | Asserts if a style asset has not been registered. |
| `$this->assertHasEnqueueScript` | `$handle` the script name handle. | Asserts if a script asset has been enqueued. |
| `$this->assertNotHasEnqueueScript` | `$handle` the script hook name handle. | Asserts if a script asset has not been enqueued. |

Example:
```php
use WPMVC\Addons\PHPUnit\TestCase;

class MyTest extends TestCase
{
    public function testAction()
    {
        // Run
        do_action( 'init' );
        // Assert
        $this->assertDidAction( 'init' );
    }
}
```

### Reset test suite data

You can reset test suite data by calling the function `wpmvc_addon_phpunit_reset()` inside the `setUp` or `tearDown` methods.

## WordPress core functions mocked

The following WordPress core functions are mocked and included through composer:

* `add_action`
* `add_filter`
* `apply_filters`
* `do_action`
* `wp_enqueue_script`
* `wp_enqueue_style`
* `wp_register_script`
* `wp_register_style`