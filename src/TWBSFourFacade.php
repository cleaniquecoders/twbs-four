<?php

namespace CleaniqueCoders\TWBSFour;

/**
 * This file is part of twbs-four
 *
 * @license MIT
 * @package twbs-four
 */

use Illuminate\Support\Facades\Facade;

class TWBSFourFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'TWBSFour';
    }
}
