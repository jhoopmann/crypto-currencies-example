<?php

use Illuminate\Support\Facades\Route;
use Jhoopmann\CryptoCurrenciesComponent\Livewire\Components\CryptoCurrencyConverter;

Route::get('/', CryptoCurrencyConverter::class);
