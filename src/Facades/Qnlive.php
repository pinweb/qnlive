<?php

namespace Pinweb\Qnlive\Facades;

use Illuminate\Support\Facades\Facade;

class Qnlive extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'qnlive';
    }
}
