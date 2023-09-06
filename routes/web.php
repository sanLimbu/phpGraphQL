<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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
    $response = Http::post('http://127.0.0.1:8000/graphiql', [
        'query' => '
            query {
                posts {
                    data{
                        title
                        body
                      }
                }
            }
         '
    ]);
    dd($response->json());
});
