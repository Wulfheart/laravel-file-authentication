<?php

namespace Wulfheart\LaravelFileAuthentication;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Wulfheart\LaravelFileAuthentication\Skeleton\SkeletonClass
 */
class LaravelFileAuthenticationFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-file-authentication';
    }
}
