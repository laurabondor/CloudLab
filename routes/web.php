<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

Route::get('/', [TemplateController::class, 'index']);

Route::get('/maketest', [TemplateController::class, 'maketest']);

Route::get('/results', [TemplateController::class, 'results']);

Route::get('/about', [TemplateController::class, 'about']);

Route::get('/contact', [TemplateController::class, 'contact']);
