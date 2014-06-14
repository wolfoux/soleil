<?php

namespace soleil\PayementBundle\Plugin;

class PaypalPlugin extends \JMS\Payment\CoreBundle\Plugin\AbstractPlugin
{
    public function processes($name)
    {
        return 'paypal' === $name;
    }
}