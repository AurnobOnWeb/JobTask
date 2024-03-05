<?php

use App\Http\Controllers\MarkleTreeController;
use App\Http\Controllers\MerkleTreeController;
use App\Http\Controllers\TreeController;
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

Route::get('/', [TreeController::class, 'index']);
Route::post('/genarate-tree', [TreeController::class, 'genrateTree'])->name('tree.genarate');

Route::get('/markle', [MarkleTreeController::class, 'index']);


// Route::get('/', function () {
//     $data = ['Hello', 'World', 'OpenAI', 'Merkle', 'Merkle', 'Merkle',]; // Example dynamic data
//     $rootValue = TreeController::buildMerkleTreeConcatenated($data);

//     return view('tree', compact('data', 'rootValue'));
// });