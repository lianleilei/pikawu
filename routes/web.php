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
Route::get('/', 'Home\IndexController@index');
Route::get('/type/{id}', 'Home\IndexController@type');//栏目
Route::get('/news/{id}.html', 'Home\IndexController@show');

Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');

Auth::routes();
//个人主页
Route::get('/personal', 'Home\PersonalController@index');
Route::get('/personal/contribute', 'Home\PersonalController@create');
Route::get('/personal/article', 'Home\PersonalController@article');
Route::post('/personal/article/store', 'Home\PersonalController@store');
Route::get('/news/follow/{uid}', 'Home\IndexController@follow');//关注作者
Route::get('/news/followdel/{uid}', 'Home\IndexController@follow');//关注作者


//后台管理路由组
Route::get('/manage/login',"Manage\LoginController@login");//后台登陆
Route::post('/manage/doLogin',"Manage\LoginController@doLogin");//执行登陆
Route::get('/manage/logout',"Manage\LoginController@logout");//执行退出登陆

Route::group(['prefix' =>'manage','middleware'=>'manage'],function(){
	Route::get('/',"Manage\ManageController@index");//后台主页

    //用户
    Route::get('/users','Manage\MemberController@index');

	//栏目管理
    Route::get('/type','Manage\TypeController@index');
    Route::get('/type/add','Manage\TypeController@create');
    Route::post('/type/store','Manage\TypeController@store');//新增和修改
    Route::get('/type/edit/{id}','Manage\TypeController@edit');
    Route::get('/type/del/{id}','Manage\TypeController@destroy');//删除
    Route::get('/type/display/{id}','Manage\TypeController@exhibit');//显示导航

    //友链管理 
    Route::get('/links','Manage\LinksController@index');
    Route::get('/links/add','Manage\LinksController@create');
    Route::post('/links/store','Manage\LinksController@store');
    Route::get('/links/edit/{id}','Manage\LinksController@edit');
    Route::get('/links/del/{id}','Manage\LinksController@destroy');
    Route::get('/links/show/{id}','Manage\LinksController@show');

    //文章管理
    Route::get('/article','Manage\ArticleController@index');
    Route::get('/article/add','Manage\ArticleController@create');
    Route::post('/article/store','Manage\ArticleController@store');//创建和修改
    Route::get('/article/edit/{id}','Manage\ArticleController@edit');
    Route::get('/article/del/{id}','Manage\ArticleController@destroy');
    Route::get('/article/send/{id}','Manage\ArticleController@send');//是否发布
});