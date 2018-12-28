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
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});



 //rotas para os produtos
 Route::get('/addProduct','ProductsController@index');
 Route::post('/addProduct','ProductsController@addProduct')->name('products');
 Route::get('/addProduct/productDetails/{id}/edit','ProductsController@productDetails');
 Route::post('/addProduct/productDetails/{id}/edit', 'ProductsController@productDetailsUpdate');
 Route::get('/addProduct/productDetails/{id}/delete','ProductsController@productDelete');

 //rotas para vendas
 Route::get('/newSale','SalesController@newSale')->name('sales');
 Route::get('/salesList','SalesController@getSales')->name('getSales');
 Route::post('/newSale','SalesController@addNewSale');

 //rotas para pdf das vendas
 Route::get('/pdf/{id}', 'SalesController@getpdf');

 //Rota para os fonecedores
 Route::get('/addFornecedor','FornecedorController@index');
 Route::post('/addFornecedor','FornecedorController@addFornecedor')->name('fornecedor');
 Route::get('/addFornecedor/{id}', 'FornecedorController@editFornecedor');
 Route::post('/addFornecedor/{id}', 'FornecedorController@updateFornecedor')->name('update');
 Route::get('/addFornecedor/{id}/delete', 'FornecedorController@fornecedorDelete');

 //rota para os clientes
 Route::get('/addClient', 'ClientController@index');
 Route::post('/addClient', 'ClientController@addClient')->name('client');
 Route::get('/addClient/{id}', 'ClientController@editClient');

 //editar utilizadores
 Route::get('/editUser', 'Auth\RegisterController@indice')->name('utilizadores');
 Route::get('/editUser/{id}', 'Auth\RegisterController@editaFuncionario');
 Route::post('editUser/{id}', 'Auth\RegisterController@updateFuncionario' );

 //home

Route::get('/home', 'HomeController@index')->name('home');

























// //grupo de rotas para tipo:Admin
// //array: elemento middleware ->category:(parametro da função no middleware)
// Route::group(['middleware' => 'admin'], function(){

//     //rotas para os produtos
//     Route::get('/addProduct','ProductsController@index');
//     Route::post('/addProduct','ProductsController@addProduct')->name('products');
//     Route::get('/addProduct/productDetails/{id}/edit','ProductsController@productDetails');
//     Route::post('/addProduct/productDetails/{id}/edit', 'ProductsController@productDetailsUpdate');
//     Route::get('/addProduct/productDetails/{id}/delete','ProductsController@productDelete');

//     //rotas para vendas
//     Route::get('/newSale','SalesController@newSale')->name('sales');
//     Route::get('/salesList','SalesController@getSales')->name('getSales');
//     Route::post('/newSale','SalesController@addNewSale');

//     //rotas para pdf das vendas
//     Route::get('/pdf/{id}', 'SalesController@getpdf');

//     //Rota para os fonecedores
//     Route::get('/addFornecedor','FornecedorController@index');
//     Route::post('/addFornecedor','FornecedorController@addFornecedor')->name('fornecedor');
//     Route::get('/addFornecedor/{id}', 'FornecedorController@editFornecedor');
//     Route::post('/addFornecedor/{id}', 'FornecedorController@updateFornecedor')->name('update');
//     Route::get('/addFornecedor/{id}/delete', 'FornecedorController@fornecedorDelete');

//     //rota para os clientes
//     Route::get('/addClient', 'ClientController@index');
//     Route::post('/addClient', 'ClientController@addClient')->name('client');
//     Route::get('/addClient/{id}', 'ClientController@editClient');

//     //editar utilizadores
//     Route::get('/editUser', 'Auth\RegisterController@indice')->name('utilizadores');
//     Route::get('/editUser/{id}', 'Auth\RegisterController@editaFuncionario');
//     Route::post('editUser/{id}', 'Auth\RegisterController@updateFuncionario' );

//     //home
//     Route::get('/home', 'HomeController@index')->name('home');

// });




// //grupo de rotas para tipo:gestor
// //array: elemento middleware ->category:(parametro da função no middleware)
// Route::group(['middleware' => 'gestor'], function(){

//     //rotas para vendas
//     Route::get('/salesList','SalesController@getSales')->name('getSales');

//     //rotas para pdf das vendas
//     Route::get('/pdf/{id}', 'SalesController@getpdf');

//     //Rota para os fonecedores
//     Route::get('/addFornecedor','FornecedorController@index');
//     Route::post('/addFornecedor','FornecedorController@addFornecedor')->name('fornecedor');
//     Route::get('/addFornecedor/{id}', 'FornecedorController@editFornecedor');
//     Route::post('/addFornecedor/{id}', 'FornecedorController@updateFornecedor')->name('update');
//     Route::get('/addFornecedor/{id}/delete', 'FornecedorController@fornecedorDelete');

//     //rota para os clientes
//     Route::get('/addClient', 'ClientController@index');
//     Route::post('/addClient', 'ClientController@addClient')->name('client');
//     Route::get('/addClient/{id}', 'ClientController@editClient');

//     //home
//     Route::get('/home', 'HomeController@index')->name('home');

// });




// //grupo de rotas para tipo:Armazem
// //array: elemento middleware ->category:(parametro da função no middleware)
// Route::group(['middleware' => 'armazem'], function(){

//     //rotas para os produtos
//     Route::get('/addProduct','ProductsController@index');
//     Route::post('/addProduct','ProductsController@addProduct')->name('products');
//     Route::get('/addProduct/productDetails/{id}/edit','ProductsController@productDetails');
//     Route::post('/addProduct/productDetails/{id}/edit', 'ProductsController@productDetailsUpdate');
//     Route::get('/addProduct/productDetails/{id}/delete','ProductsController@productDelete');

//     //Rota para os fonecedores
//     Route::get('/addFornecedor','FornecedorController@index');
//     Route::post('/addFornecedor','FornecedorController@addFornecedor')->name('fornecedor');
//     Route::get('/addFornecedor/{id}', 'FornecedorController@editFornecedor');
//     Route::post('/addFornecedor/{id}', 'FornecedorController@updateFornecedor')->name('update');
//     Route::get('/addFornecedor/{id}/delete', 'FornecedorController@fornecedorDelete');

//     //home
//     Route::get('/home', 'HomeController@index')->name('home');

// });

// //grupo de rotas para tipo:loja
// //array: elemento middleware ->category:(parametro da função no middleware)
// Route::group(['middleware' => 'loja'], function(){

//     //rotas para os produtos
//     Route::get('/addProduct','ProductsController@index');
//     Route::post('/addProduct','ProductsController@addProduct')->name('products');
//     Route::get('/addProduct/productDetails/{id}/edit','ProductsController@productDetails');
//     Route::post('/addProduct/productDetails/{id}/edit', 'ProductsController@productDetailsUpdate');
//     Route::get('/addProduct/productDetails/{id}/delete','ProductsController@productDelete');

//     //rotas para vendas
//     Route::get('/newSale','SalesController@newSale')->name('sales');
//     Route::get('/salesList','SalesController@getSales')->name('getSales');
//     Route::post('/newSale','SalesController@addNewSale');

//     //rotas para pdf das vendas
//     Route::get('/pdf/{id}', 'SalesController@getpdf');

//     //rota para os clientes
//     Route::get('/addClient', 'ClientController@index');
//     Route::post('/addClient', 'ClientController@addClient')->name('client');
//     Route::get('/addClient/{id}', 'ClientController@editClient');

//     //home
//     Route::get('/home', 'HomeController@index')->name('home');

// });


//Route::get('/dashboard', 'FuncionarioController@__construct')->name('dashboard');
//Route::post('/dashboard', 'FuncionarioController@registoValidate');
