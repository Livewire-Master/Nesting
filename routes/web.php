<?php

use App\Livewire\TasksPage;
use Illuminate\Support\Facades\Route;

Route::get('', TasksPage::class)->name('page.tasks');
