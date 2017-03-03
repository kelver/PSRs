<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 02/03/17
 * Time: 23:12
 */
//2.1 PHP Tags
// <?php ou <?=

//2.2 Character Encoding
// UTF-8

//2.3 Side Effects

//3 Namespace and Class Names
# usar conforme psr_4

// PHP 5.3 and later:
namespace Vendor\Model;

class Foo
{
}

// PHP 5.2.x and earlier:
class Vendor_Model_Foo
{
}

//4 Class Constants, Properties, and Methods
//4.1. Constants
namespace Vendor\Model;

class Foo
{
    const VERSION = '1.0';
    const DATE_APPROVED = '2012-06-01';
}

//4.3 Methods
class Foo
{
    public function getIten()
    {

    }
}