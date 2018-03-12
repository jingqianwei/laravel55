<?php
//try
//{
//    checkNum(2);
//    //If the exception is thrown, this text will not be shown
//    echo 'If you see this, the number is 1 or below';
//}
////捕获异常
//catch(Exception $e)
//{
//    throw $e;
//    //echo 'Message: ' .$e->getMessage();
//}
require __DIR__.'/SuperModuleInterface.php';
require __DIR__.'/Container.php';
require __DIR__.'/Superman.php';
require __DIR__.'/XPower.php';
require __DIR__.'/UltraBomb.php';
/**
 * 手动注入
 *
 * 超能力模组
 * $superModule = new XPower;
 * 初始化一个超人，并注入一个超能力模组依赖
 * $superMan = new Superman($superModule);
 */

/**
 * 下面是自动注入
 */
// 创建一个容器（后面称作超级工厂）
$container = new Container;

// 向该 超级工厂 添加 超人 的生产脚本
$container->bind('superman', function($container, $moduleName) {
    return new Superman($container->make($moduleName));
    /**
     * 这个返回值可以分两步
     * 第一步，$container->make($moduleName)，先实例化超能力模组 $superModule = $container->make($moduleName);
     * 第二部 初始化一个超人，并注入一个超能力模组依赖 new Superman($superModule);
     * 这两步组合在一起的就是上面的效果
    */
});
/*效果就是 $container->bind['superman'] = function($container, $moduleName) {
    return new Superman($container->make($moduleName));
}*/


// 向该 超级工厂 添加 超能力模组 的生产脚本
$container->bind('xpower', function($container) {
    return new XPower;
});
/*效果就是 $container->bind['xpower'] = function($container) {
return new XPower;
}*/

// 同上
$container->bind('ultrabomb', function($container) {
    return new UltraBomb;
});
/*效果就是 $container->bind['ultrabomb'] = function($container) {
    return new UltraBomb;
}*/

// ******************  华丽丽的分割线  **********************
// 开始启动生产
$superman_1 = $container->make('superman', ['xpower']); //==> 注入xpower模组到superman
$superman_2 = $container->make('superman', ['ultrabomb']);//==> 注入xpower，ultrabomb模组到superman
$superman_3 = $container->make('superman', ['xpower']);//==> 注入xpower，ultrabomb，xpower模组到superman
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
