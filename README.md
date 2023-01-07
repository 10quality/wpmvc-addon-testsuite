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
| `$this->assertHasCalledWP` | `$function` the name of a WordPress core function. | Asserts if a core WordPress function has been called. |
| `$this->assertNotHasCalledWP` | `$function` the name of a WordPress core function. | Asserts if a core WordPress function has not been called. |

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

### Test your addon

You addon main class needs a WordPress MVC main class (bridge) instance to work correctly. The `TestCase` class include the method `getBridgeMock()` that allows you to test your addon mocking the Bridge class.

Example:
```php
use WPMVC\Addons\PHPUnit\TestCase;
use MyAddon;

class MyAddonTest extends TestCase
{
    public function testInit()
    {
        // Prepare
        $bridge = $this->getBridgeMock();
        $addon = new MyAddon($bridge);
        // Run
        $addon->init();
        // Assert
        $this->assertAddedAction( 'init' );
        $this->assertHasRegisterScript( 'my-js' );
    }
}
```

The example above tests the method `init()` of the addon class `MyAddon`, which receives the `$bridge` initialized as a mock. The example asserts that an action hook has been added and a script has been registered during the method call.

You can mock the `Bridge` for your own benefit:
```php
use WPMVC\Addons\PHPUnit\TestCase;
use WPMVC\Addons\PHPUnit\Mocks\Brige;
use MyAddon;

class MyAddonTest extends TestCase
{
    public function testInit()
    {
        // Prepare
        $bridge = $this->getMockBuilder( Brige::class )
            ->disableOriginalConstructor()
            ->getMock();
        $addon = new MyAddon($bridge);
        // Run
        $addon->init();
        // Assert
        $this->assertAddedAction( 'init' );
        $this->assertHasRegisterScript( 'my-js' );
    }
}
```

### Reset test suite data

You can reset test suite data by calling the function `wpmvc_addon_phpunit_reset()` inside the `setUp` or `tearDown` methods.

## WordPress core functions mocked

The following WordPress core functions are mocked and included through composer:

* `__`
* `_e`
* `add_action`
* `add_filter`
* `add_query_arg`
* `add_submenu_page`
* `admin_url`
* `apply_filters`
* `do_action`
* `esc_attr`
* `esc_html`
* `esc_html_e`
* `esc_url`
* `get_locale`
* `get_stylesheet_directory`
* `home_url`
* `sanitize_text_field`
* `site_url`
* `wp_enqueue_script`
* `wp_enqueue_style`
* `wp_register_script`
* `wp_register_style`

## WordPress core constants mocked

The following constants are mocked through composer if they are not defined:

* `ABSPATH`