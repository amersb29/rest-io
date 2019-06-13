<?php

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

// Rutas básicas
// Route::get('/', function () {
//     return "Hola Laravel";
// });
//
// Route::get('contacto', function () {
//     return "Hola desde Contacto";
// });
//

// Ruta con parámetros
// Route::get('saludo/{nombre?}', function($nombre = 'Invitado'){
//   return "Hola " . $nombre;
// });

// Rutas con nombre
// Route::get('contactanos', function (){
//   return "Sección de contactos";
// })->name('contactos');
//
// Route::get('/', function(){
//   echo "<a href='" . route('contactos') . "'>Contacto 1</a><br>";
//   echo "<a href='" . route('contactos') . "'>Contacto 2</a><br>";
//   echo "<a href='" . route('contactos') . "'>Contacto 3</a><br>";
//   echo "<a href='" . route('contactos') . "'>Contacto 4</a><br>";
//   echo "<a href='" . route('contactos') . "'>Contacto 5</a><br>";
// });

// Pasando variables a las rutas
// Route::get('/', function(){
//   $nombre = 'Amer';
//   // return view('home')->with('nombre', $nombre);
//   // return view('home')->with(['nombre' => $nombre]);
//   // return view('home',['nombre' => $nombre]);
//   return view('home', compact('nombre'));
// })->name('home');

// Route::view('/', 'home', ['nombre' => 'Amer'])->name('home');

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::resource('projects', 'PortfolioController');
// Route::get('/projects', 'PortfolioController@index')->name('projects.index');
// Route::get('/projects/{id}', 'PortfolioController@show')->name('projects.show');
// Route::get('/projects/{id}/edit', 'PortfolioController@edit')->name('projects.edit');
// Route::get('/projects/create', 'PortfolioController@create')->name('project.create');
// Route::post('/projects', 'PortfolioController@store')->name('project.store');
// Route::put('/projects/{id}', 'PortfolioController@update')->name('project.update');
// Route::delete('/projects/{id}', 'PortfolioController@destroy')->name('project.destroy');

Route::resource('usuarios', 'UsersController');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact', 'MessagesController@store');

// php artisan make:controller PortfolioController -r
// Route::resource('projects', 'PortfolioController');
// Route::resource('projects', 'PortfolioController')->only(['index']);
// Route::resource('projects', 'PortfolioController')->except(['index']);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

// App\Role::create([
//   'name' => 'admin',
//   'display_name'  => 'Administrador del sitio',
// ]);
//
// App\Role::create([
//   'name' => 'mod',
//   'display_name'  => 'Moderador de comentarios',
// ]);
//
// App\User::create([
//   'name' => 'Amer Salgado Berzunza',
//   'email' => 'amersb.29@gmail.com',
//   'password' => bcrypt('123123'),
// ]);
//
// App\User::create([
//   'name' => 'Irany Salgado Berzunza',
//   'email' => 'iranysabe@gmail.com',
//   'password' => bcrypt('123123'),
// ]);
