<?php

use App\Http\Controllers\StringsController;
use Illuminate\Support\Facades\Route;

Route::get('acronym/', [StringsController::class, 'generate']);
