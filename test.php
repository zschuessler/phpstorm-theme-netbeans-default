<?php

/**
 * This file is for comparing the theme to the actual Netbeans theme.
 *
 * <pre>
 * Example doc block tags
 * </pre>
 */
namespace Test\Test;

use Test;

class ClassName
{
    /**
     * An example internal property.
     *
     * @var $internal
     */
    private $internal;

    public $publicProperty;

    public function __construct($options = array())
    {
        // Some construction action happening
        $this->publicProperty = $options['test'];

        return false;
    }
}
?>

<html>
    <title>Example Html</title>
    <body>
        <label for="testInput">Test Input</label>
        <input name="testInput" type="text" value="Just an input value" />
        <p>
            <!-- A comment -->
            Here is some <strong>text!</strong>
        </p>
    </body>
</html>
