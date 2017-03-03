<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 02/03/17
 * Time: 23:27
 */

/** Define padrões para estruturas de codificação,
 * estruturas de classes/métodos e estruturas
 * de controle/repetição
 */

namespace Vendor\Package;

use FooInterface;
use BarClass as Bar;
use OtherVendor\OtherPackage\BazClass;

class Foo extends Bar implements FooInterface
{
    public function sampleMethod($a, $b = null)
    {
        if ($a === $b) {
            bar();
        } elseif ($a > $b) {
            $foo->bar($arg1);
        } else {
            BazClass::bar($arg2, $arg3);
        }
    }

    final public static function bar()
    {
        // method body
    }
}

