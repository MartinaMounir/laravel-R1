<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('About', function () {
    return ('welcome to About');
});
Route::get('ContactUs', function () {
    return ('welcome to contact us');
});

/*Route::get ('user/{name}/{age?}',function($name,$age=0){
    $msg = 'the username is : ' . $name;
    if($age > 0){
        $msg .= ' and age is: ' . $age ;
    }
    return $msg ;
})->whereIn('name',['Mina','tota']);*/

Route::prefix('support')->group(function (){
    Route::get('chat', function () {
        return 'chat page';
    });
    Route::get('call', function () {
        return 'call page';
    });
    Route::get('ticket', function () {
        return 'ticket page';
    });
});
Route::prefix('training')->group(function (){
    Route::get('hr', function () {
        return 'hr page';
    });
    Route::get('ict', function () {
        return 'ict page';
    });
    Route::get('marketing', function () {
        return 'marketing page';
    });
    Route::get('logistics', function () {
        return 'logistics page';
    });
});
