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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home','FullCalendarController@index')->middleware('auth');

Route::get('/login','PostController@login');

Route::post('/login','PostController@loginUser')->name('loginUser');

Route::get('/signup','PostController@signup');

Route::post('logout', 'Auth\LoginController@logout')->name('logout');





Route::post('/signup','PostController@storeUser')->name('register');


Route::get('/load-events','EventController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update','EventController@update')->name('routeEventUpdate');

Route::post('/event-store','EventController@store')->name('routeEventStore');

Route::delete('/event-delete','EventController@destroy')->name('routeEventDelete');

// Route::get('/master','EventController@master');

Route::get('/notification','EventController@notify');

Route::get('/profile','EventController@profile');

Route::get('/contactus','EventController@contactus');






Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
