<?php

namespace soleil\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class soleilUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
    
}
