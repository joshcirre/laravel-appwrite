<?php

namespace JoshCirre\LaravelAppwrite;

use Appwrite\Client;
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
    // protected static function getFacadeAccessor()
    // {
    //     return 'laravel-appwrite';
    // }

    protected static function getFacadeAccessor()
    {
        return Client::class; // The Client binding in the service provider
    }

    public static function databases()
    {
        // Returns the 'databases' service from the Appwrite client
        return app('appwrite.databases');
    }

    public static function account()
    {
        // Returns the 'account' service from the Appwrite client
        return app('appwrite.account');
    }

    public static function storage()
    {
        // Returns the 'storage' service from the Appwrite client
        return app('appwrite.storage');
    }
}
