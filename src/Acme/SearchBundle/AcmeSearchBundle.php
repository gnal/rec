<?php

namespace Acme\SearchBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeSearchBundle extends Bundle
{
    public function getParent()
    {
        return 'MsiSearchBundle';
    }
}
