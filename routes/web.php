<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
    定义路由
 */
//use Intervention\Image\Facades\Image;

//Route::get('/', function(){
//    $path = public_path('demo.jpg');
//    $img = Image::make($path)->resize(300, 200);
//    return $img->response('jpg');
//});
Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

//用户注册
Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');
/**
 *  Route::resource('users', 'UsersController');路由就等同于下面的代码
 * 显示所有用户列表的页面
    Route::get('/users', 'UsersController@index')->name('users.index');
 * 显示用户个人信息的页面
    Route::get('/users/{user}', 'UsersController@show')->name('users.show');
 * 创建用户的页面
    Route::get('/users/create', 'UsersController@create')->name('users.create');
 * 创建用户
    Route::post('/users', 'UsersController@store')->name('users.store');
 * 编辑用户个人资料的页面
    Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');
 * 更新用户
    Route::patch('/users/{user}', 'UsersController@update')->name('users.update');
 * 删除用户
    Route::delete('/users/{user}', 'UsersController@destroy')->name('users.destroy');
 */

/**
 * 用户登录
 */
Route::get('login', 'SessionsController@create')->name('login');
Route::post('login', 'SessionsController@store')->name('login');
/**
 * 用户退出
 */
Route::delete('logout', 'SessionsController@destroy')->name('logout');

//用户修改
Route::get('/users/{user}/edit', 'UsersController@edit')->name('users.edit');

//发邮件
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

/**
 * 密码重置
 */
//显示重置密码的邮箱发送页面
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
//邮箱发送重设链接
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//密码更新页面
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
//执行密码更新操作
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

//微博相关的操作
Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

//显示用户的关注人列表
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
//显示用户的粉丝列表
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');
//关注用户
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
//取消关注用户
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');

/**
 * 测试在laravel框架中用react.js
 */
Route::view('testReactJs','jsframework.react');

Route::post('/minicart/site/create', function() {
    return response()->json([
        'data'      => request()->input('domain'),
        'message'   => '',
        'code'      => 200,
    ]);
});

Route::get('/testArrayObject','TestController@testArrayObject');
Route::get('/testArray','TestArrController@testArray');
