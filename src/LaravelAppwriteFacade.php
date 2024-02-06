<?php

namespace Joshcirre\LaravelAppwrite;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Joshcirre\LaravelAppwrite\Skeleton\SkeletonClass
 */
class LaravelAppwriteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-appwrite';
    }
}
