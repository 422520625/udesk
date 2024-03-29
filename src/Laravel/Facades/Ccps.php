<?php

namespace Trigold\Udesk\Laravel\Facades;

use Trigold\Udesk\App\Ccps\Robot;
use Illuminate\Support\Facades\Facade;

/**
 * @method static  Robot robot() 获取语音机器人请求实例
 * @method static  \Trigold\Udesk\App\Ccps\Ccps driver(string $driver = '') 获取指定驱动
 */
class Ccps extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'udesk.ccps';
    }
}
