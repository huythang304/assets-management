<?php

namespace Nhwin\AssetsManagement\Facades;

use Nhwin\AssetsManagement\Assets;
use Illuminate\Support\Facades\Facade;

/**
 * Class AssetsFacade.
 *
 * @since 30/10/2018 10:42 PM
 */
class AssetsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Assets::class;
    }
}
