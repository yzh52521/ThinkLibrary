<?php

// +----------------------------------------------------------------------
// | ThinkLibrary 6.0 for ThinkPhP 6.0
// +----------------------------------------------------------------------
// | 版权所有 2017~2020 [ https://www.dtapp.net ]
// +----------------------------------------------------------------------
// | 官方网站: https://gitee.com/liguangchun/ThinkLibrary
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 仓库地址 ：https://gitee.com/liguangchun/ThinkLibrary
// | github 仓库地址 ：https://github.com/GC0202/ThinkLibrary
// | Packagist 地址 ：https://packagist.org/packages/liguangchun/think-library
// +----------------------------------------------------------------------
declare (strict_types=1);

namespace DtApp\ThinkLibrary\facade;

use DtApp\ThinkLibrary\helper\Dates as helper;
use think\Facade;

/**
 * 日期门面
 * @see \DtApp\ThinkLibrary\helper\Dates
 * @package DtApp\ThinkLibrary\facade
 * @package think\facade
 * @mixin helper
 *
 * @method static string current(string $format = "Y-m-d H:i:s") 当前日期
 */
class Dates extends Facade
{
    /**
     * 获取当前Facade对应类名（或者已经绑定的容器对象标识）
     * @access protected
     * @return string
     */
    protected static function getFacadeClass()
    {
        return helper::class;
    }
}
