<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

use Telegram\Bot\Api;

Route::get('/bot', function () {

    $response = Telegram::getMe();

    $botId = $response->getId();

    $firstName = $response->getFirstName();

    $username = $response->getUsername();

    echo $botId . '<br />' . $firstName . '<br />' . $username;

});

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class)
->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/1LjIYdsPJaIoKfRpDnnb0YfOVl6ACSAQduIMfK1gyihhMDUHMDmPnm4FQhXUtsuE/webhook', function () {
    $update = Telegram::commandsHandler(true);

    return 'ok';
});

require __DIR__.'/auth.php';
