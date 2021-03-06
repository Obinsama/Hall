<?php
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Route::post('/broadcasting/auth', function (Illuminate\Http\Request $req) {
//    return Broadcast::auth($req);
//});
Route::get('/', 'HomeController@index');
//Route::get('/event', function (){
//    broadcast(new MessageSent(new User(),new Message()));
//    return 'broadcated';
//});
//Route::get('messages', 'ChatsController@fetchMessages');
//Route::post('messages', 'ChatsController@sendMessage');

/***************************ENDCHARTS ROUTES*******************************/
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/userMgmt', 'HomeController@userMgmt')->name('userMgmt');
//Route::get('/block/{id}', 'HomeController@blockUser')->name('blockUser');
//Route::get('/delete/{id}', 'HomeController@deleteUser')->name('deleteUser');
//Route::get('/edit/{id}', 'HomeController@editUser')->name('editUser');
//Route::post('/edit/user={id}', 'HomeController@editUserAcc')->name('edit');


//    Route::resource('roles', 'RoleController');
//    Route::resource('users', 'UserController', ['only' => [
//        'index', 'edit', 'update', 'destroy', 'store', 'show']]);
////    Route::resource('products', 'ProductController', ['except' => [
////        'show']]);
//    Route::delete('/users{user}', 'UserController@block')->name('users.block');
//    Route::get('/messages', 'MessageController@index')->name('messages.index');
//    Route::get('/messages/{message}/show', 'MessageController@show')->name('messages.show');
//    Route::get('/messages/notifs', 'MessageController@notifs')->name('messages.get');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('equipements', 'EquipementsController');
    Route::resource('factures', 'FacturesController');
    Route::resource('ventes', 'VentesController');
    Route::resource('users', 'UsersController');
    Route::resource('roles', 'RolesController');
    Route::resource('budget', 'BudgetsController');
    Route::resource('depense', 'DepensesController');
    Route::resource('message', 'MessagesController');
    Route::post('roles/permission', 'RolesController@savePermission');
//    Route::get('users/connected', function (){
//        $user=Auth::user();
//        return response()->json($user);
//    });
    Route::get('users/connected', 'UsersController@connected')->name('users.connected');
    Route::post('users/search', 'UsersController@search');
    Route::post('users/list', 'UsersController@list');
    Route::get('factures/details/{id}', 'FacturesController@details');
    Route::get('factures/data/{id}', 'FacturesController@data');
});

// TODO laugh at the project