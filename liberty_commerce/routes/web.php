<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CartController;
//use App\Http\Controllers\BillController;


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
    return view('home');
});



Route::get('/produit', function () {
    return view('produit');
});


//pour que l'admin ajoute des produits dans la page catalogue
Route::post('/admin1',[ProduitController::class,'add']) -> name('new-product');

//seulement l'admin a acces a la page admin1
Route::get('/admin1', function(){
    if (! Gate::allows('access-admin')){
        return'access denied';
    }
    return view('admin1');
    
})->middleware(['auth'])->name('admin1');


require __DIR__.'/auth.php';

//^^pour sauvegarder les images ajoutées dans la bdd
Route::get('upload-image', [ProduitController::class, 'index']);
Route::post('save', [ProduitController::class, 'save']);


Route::get('/catalogue',[ProduitController::class,'index2']);
Route::get('/produits',[ProduitController::class,'products']);
Route::get('/store',[CartController::class, 'store'])->name('panier.store');

//pour la gestion des stocks
Route::post('/produit',[ProduitController::class,'update']);

//afficher la page produit selon son id
Route::get('/produit/{id}',[ProduitController::class, 'index3'])->name('produit.show');
Route::get('/panier1',[CartController::class,'index4'])->name('panier.show');
//pour supprimer un produit 
Route::get('/panier1/{id}',[ProduitController::class,'destroy'])->name('produit.destroy');

//enregistrer la commande
Route::post('cart-checkout',[CartController::class,'checkout'])->name('cart.checkout');

//calule du nombre de commandes
Route::get('/bills/count',[CartController::class,'get_count']);
//calcul du nombre d'utilisateur connecter
Route::get('/users/count',[CartController::class,'get_count_auth']);