<?php
namespace Hubtel\Sms; 

use Exception; 
use ErrorException; 

/**
 * Description of MessageDirection
 *
 * @author Arsene Tochemey
 */
abstract class MessageDirection extends Enum {

    const OUT = "out";
    const IN = "in";

}
