<?php

namespace Chapa\Chapa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Chapa\Chapa\Skeleton\SkeletonClass
 */
class Chapa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravelchapa';
    }
}
