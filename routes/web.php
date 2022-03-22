<?php

use Illuminate\Support\Facades\Route;

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


Route::post('ceck', 'CeckController@store')->name('ceck');
Route::get('ceck2', 'CeckController@store')->name('ceck2');



Route::get('/', function () {
    return view('auth.login');
});


Auth::routes();


/////////user//////////////////
// Route::resource('user', 'UserController');
Route::post('/Add_user', 'UserController@Add_user')->name('Add_user');
Route::post('/user_destroy/{id}', 'UserController@destroy')->name('user_destroy');
Route::post('/user_update', 'UserController@update')->name('user_update');
///////////////////

//////////////Client/////////////
Route::resource('Client', 'ClientController');
///Client ceck//

Route::post('/update', 'ClientController@update')->name('update');
//////////////////Categor//////////////////

Route::resource('Categore', 'CategorieController');





//////////////// children/////////////
Route::group(['namespace' => 'children'], function () {

    Route::resource('children', 'childrenController');


    /////////////Abdominal_Circumference
    Route::resource('Abdominal_Children', 'Abdominal_CircumferenceController');


    Route::post('/update_ChildrenAbdominal', 'Abdominal_CircumferenceController@update')->name('update_ChildrenAbdominal');
    ///////////////Fat_Percentage
    Route::resource('Fat__Children', 'Fat_PercentageController');
    Route::post('/update_ChildrenFat', 'Fat_PercentageController@update')->name('update_ChildrenFat');


    ////////////////////Height/////Weight
    Route::resource('Height_Children', 'HeightController');
    Route::post('/update_ChildrenHeight', 'HeightController@update')->name('update_ChildrenHeight');


    ////////////////////Weight/////
    Route::resource('Weight_Children', 'WeightController');
    Route::post('/update_ChildrenWeight', 'WeightController@update')->name('update_ChildrenWeight');
});





//////////////// Young/////////////
Route::group(['namespace' => 'Young'], function () {

    Route::resource('Young', 'YoungController');


    /////////////Abdominal_Circumference
    Route::resource('Abdominal_Young', 'Abdominal_CircumferenceController');


    Route::post('/update_YoungAbdominal', 'Abdominal_CircumferenceController@update')->name('update_YoungAbdominal');
    ///////////////Fat_Percentage
    Route::resource('Fat_Young', 'Fat_PercentageController');
    Route::post('/update_YoungFat', 'Fat_PercentageController@update')->name('update_YoungFat');


    ////////////////////Height/////Weight
    Route::resource('Height_Young', 'HeightController');
    Route::post('/update_YoungHeight', 'HeightController@update')->name('update_YoungHeight');


    ////////////////////Weight/////
    Route::resource('Weight_Young', 'WeightController');
    Route::post('/update_YoungWeight', 'WeightController@update')->name('update_YoungWeight');
});


//////////////// Elderly/////////////
Route::group(['namespace' => 'Elderly'], function () {

    Route::resource('Elderly', 'ElderlyController');


    /////////////Abdominal_Circumference
    Route::resource('Abdominal_Elderly', 'Abdominal_CircumferenceController');


    Route::post('/update_ElderlyAbdominal', 'Abdominal_CircumferenceController@update')->name('update_ElderlyAbdominal');
    ///////////////Fat_Percentage
    Route::resource('Fat_Elderly', 'Fat_PercentageController');
    Route::post('/update_ElderlyFat', 'Fat_PercentageController@update')->name('update_ElderlyFat');


    ////////////////////Height/////Weight
    Route::resource('Height_Elderly', 'HeightController');
    Route::post('/update_ElderlyHeight', 'HeightController@update')->name('update_ElderlyHeight');


    ////////////////////Weight/////
    Route::resource('Weight_Elderly', 'WeightController');
    Route::post('/update_ElderlyWeight', 'WeightController@update')->name('update_ElderlyWeight');
});


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', 'RoleController');
    Route::resource('users', 'UserController');
});

/////////////////////////////////Excel/////////////

Route::get('user_export', 'UserController@export');
Route::get('client_export', 'ClientController@export');



Route::resource('dashboard', 'DashboardController');

///////////////////////////////////home////

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/home', 'HomeController@index')->name('home');
    ////////////////////////////////////
