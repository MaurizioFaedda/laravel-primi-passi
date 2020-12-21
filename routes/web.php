<?php

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

Route::get('/', function () {
    $data = [
        'menu' => [
            'Home' => 'home',
            'Prodotti' => 'products',
            'Chi siamo' => 'about',
            'Contatti' => 'contacts',
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/prodotti', function () {
    $data = [
        'menu' => [
            'Home' => 'home',
            'Prodotti' => 'products',
            'Chi siamo' => 'about',
            'Contatti' => 'contacts',
        ],
        'products_list' => [
            [
                'image' => 'https://picsum.photos/id/100/200/300',
                'artist' =>'Mario',
            ],
            [
                'image' => 'https://picsum.photos/id/101/200/300',
                'artist' => 'Sara',
            ],
            [
                'image' => 'https://picsum.photos/id/102/200/300',
                'artist' => 'Filippo',
            ],
            [
                'image' => 'https://picsum.photos/id/103/200/300',
                'artist' => 'Alice',
            ],
            [
                'image' => 'https://picsum.photos/id/104/200/300',
                'artist' => 'Luca',
            ],
            [
                'image' => 'https://picsum.photos/id/106/200/300',
                'artist' => 'Lucia',
            ],
        ],
    ];
    return view('products', $data);
})->name('products');

Route::get('/chi-siamo', function () {
    $data = [
        'menu' => [
            'Home' => 'home',
            'Prodotti' => 'products',
            'Chi siamo' => 'about',
            'Contatti' => 'contacts',
        ]
    ];
    return view('about', $data);
})->name('about');

Route::get('/contatti', function () {
    $data = [
        'menu' => [
            'Home' => 'home',
            'Prodotti' => 'products',
            'Chi siamo' => 'about',
            'Contatti' => 'contacts',
        ]
    ];
    return view('contacts', $data);
})->name('contacts');
