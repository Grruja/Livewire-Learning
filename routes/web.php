<?php

use App\Livewire\Counter;
use App\Livewire\ShowPosts;
use App\Livewire\Todo;
use Illuminate\Support\Facades\Route;

Route::get('/', Todo::class);
Route::get('/counter', Counter::class);
Route::get('/posts', ShowPosts::class);





