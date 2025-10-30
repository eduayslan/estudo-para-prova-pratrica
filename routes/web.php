<?php

use App\Livewire\Auth\Login;
use App\Livewire\Usuario\UsuarioCreate;
use App\Livewire\Usuario\UsuarioIndex;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class);


Route::get('/create', UsuarioCreate::class)->name('usuario.create');

Route::get('/index', UsuarioIndex::class)->name('usuario.index');