<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\NewController;
use App\Http\Controllers\PlaceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;


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

//Route::fallback(function(){
 //   return redirect('/');
//});
//Route CV
Route::get('cv', function () {
    return view('cv');
});
Route::get('login', function () {
    return view('login');
});
Route::post('receive', function () {
    return 'Data Received';
})->name('receive');

//Route::get('test1',[ExampleController::class,'test']);
//Route Car
Route::get('addcar', function () {
    return view('addcar');
});
Route::post('cardata',[CarController::class,'store'])->name('addcars');
Route::get('car',[CarController::class,'index']);
Route::get('editcar/{id}',[CarController::class,'edit'])->name('editcar');
Route::put('updatecar/{id}',[CarController::class,'update'])->name('updatecar');
Route::get('deletecar/{id}', [CarController::class, 'destroy']);
Route::get('cardetails/{id}',[CarController::class,'show'])->name('newsdetails');
Route::get('trashed', [CarController::class, 'trashed']);
Route::get('restorecar/{id}', [CarController::class, 'restore']);
Route::get('delete/{id}', [CarController::class, 'delete']);

//Route News
Route::get('addnews',[NewController::class,'create'])->name('addnews');
Route::post('newsdata',[NewController::class,'store'])->name('newsdata');
Route::get('news',[NewController::class,'index']);
Route::get('editnews/{id}',[NewController::class,'edit']);
Route::put('updatenews/{id}',[NewController::class,'update'])->name('updatenews');
Route::get('deletenews/{id}', [NewController::class, 'destroy']);
Route::get('newsdetails/{id}',[NewController::class,'show'])->name('newsdetails');
Route::get('trashednews', [NewController::class, 'trashed']);
Route::get('restorenews/{id}', [NewController::class, 'restore']);
Route::get('delete/{id}', [NewController::class, 'delete']);
//Upload
Route::get('showupload', [ExampleController::class, 'showupload']);
Route::post('upload', [ExampleController::class, 'upload'])->name('upload');
Route::get('place', [ExampleController::class, 'place']);
Route::get('blog', [ExampleController::class, 'blog']);
//Route place
Route::get('addplace',[PlaceController::class,'create'])->name('addplace');
Route::post('placedata',[PlaceController::class,'store'])->name('addplaces');
Route::get('place',[PlaceController::class,'index']);
Route::get('placelist',[PlaceController::class,'show'])->name('placelist');
