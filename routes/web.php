<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_migs;

Route::get('/', [Controller_migs::class, 'Screen_1']);