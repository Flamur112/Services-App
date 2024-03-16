<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Template\Template;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TemplateController::class, 'index']);
