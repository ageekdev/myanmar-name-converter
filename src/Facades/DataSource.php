<?php

namespace AgeekDev\MMName\Facades;

use AgeekDev\MMName\DataSourceDriver\DataSourceDriverInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static DataSourceDriverInterface getDataSource(): DataSourceDriverInterface
 * @method static DataSourceDriverInterface driver($driver = null): DataSourceDriverInterface
 */
class DataSource extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'name_data_source';
    }
}
