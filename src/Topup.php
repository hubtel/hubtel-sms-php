<?php
namespace Hubtel\Sms; 

use Exception; 
use ErrorException; 
/**
 * Description of Topup
 *
 * @author Hubtel
 */
class Topup {

    private $object;

    public function __construct($json = null) {
        if ($json === null) {
            $this->object = new stdClass;
        } else if (is_object($json)) {
            $this->object = $json;
        } else {
            throw new Exception('Bad parameter');
        }
    }

    public function getPurchasedCredit() {
        return @$this->object->PurchasedCredit;
    }

    public function getActualCredit() {
        return @$this->object->ActualCredit;
    }

}
