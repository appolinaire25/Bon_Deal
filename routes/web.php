<?php

use App\Models\post;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Termwind\Components\Dd;

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

Route::prefix('/blog')->name('blog.')->group(function (){
    Route::get('/', function(Request $request){

    $post = post::all('id', 'title');
        dd($post);
    return $post;
    });
});

