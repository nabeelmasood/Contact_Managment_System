<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']); // Direct root URL to the index method of ContactController
Route::resource("/contact", ContactController::class); // This line is not necessary if you're using the route above

// Define other routes as needed

