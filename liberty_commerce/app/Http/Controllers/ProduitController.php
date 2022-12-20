<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade;

class ProduitController extends Controller
{
    //
    public function add(Request $request) {
    
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $produit = new Produit();
        $produit->name = request('name');
        $produit->price = request('price');
        $imagName = time().'.'. $request->image->extension();
        $request->image->move(public_path('img'),$imagName);
        $produit->image = $imagName;
        $produit->stock = request('stock');
        $produit ->description = request('description');
        $produit->save();
       
        
    return back();
   
    }
    public function update(Request $request){
        $produit=Produit::find($request ->id);
        $produit->stock=$request->stock;
        $produit ->save();
        return redirect()->back();
    }
    public function products(){
        return view('produit',['produits' => Produit::all()]);
    }
    public function index(){
        return view('admin1');
    }
    //afficher les produits ajouter par l'admin dans la page catalogue
    public function index2(){
        $produits=Produit::all();
        return view('/catalogue',['produits' => $produits]);
    }
     //pour afficher les détails du produit dans la page produit
    public function index3(Request $request){
        $produit=Produit::find($request->id);
        return view('produit',compact('produit'));
    }


//fonction qui permet de supprimer un produit dans le panier
 public static function destroy($id)
 {
    CartFacade::remove($id);
    return back();
 }
 //fonction qui permet a l'admin d'edité un produit 
 public function edit($id)
 {
     return view ('/admin1', ['id'=>$id]);
 }


}



