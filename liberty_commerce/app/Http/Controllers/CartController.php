<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Darryldecode\Cart\Facades\CartFacade;
use App\Models\Produit;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\User;
use Illuminate\Http\Request;


class CartController extends Controller
{
    //ajouter les produits dan la bdd
    public function store(Request $request){
        $produit = Produit::find($request->id);
        CartFacade::add([
            'id' =>  $produit->id,
            'name' =>  $produit->name,
            'price' =>  $produit->price,
            'stock' =>  $produit->stock
        ])
        ->associate('App\Produit');
        return redirect('/panier1');
    
    
    }
    //pour enregistrer la commande 
    public function checkout(Request $request)
    {
        $bill['cart']= array();
        $bill['user_id']= Auth::user()->id;
       $var= $bill['cart']= Produit::all();
      
        $brutText = "";
       $v=0 ;
         foreach($var as $items)
         {
                //$temp= $brutText;
                $itemData= $items->id. "," .$items->name. "," .$items->price. "," .$items->quantity .";";
                $brutText=$itemData;
                $v += $items->price*$items->quantity;
                //dd($items->total);     
            
        }
         
        // $bill['cart'] = $brutText;
         $bill['prixTotal'] +=$v;
         $store = Bill::create($bill);
         //$bill->save();
         //CartFacade::clear();
        unset($cartItems);
        //$request->session->flash('status','item deleted!');
         //destroy($id);
         return 'Cart successfully stored';
        
    }
    public function destroy(Request $request, $id){
       
        return  redirect()->back();
    }
    
    public function index4(){
        $content =  CartFacade::Content();
        $images = Produit::all();
        return view('panier1',['images'=>$images,'content'=>$content]);
    }
    public function get_count(){
        $bill = Bill::all();
        $number = count($bill) ;
        
        return $number ;
    }
    function get_count_auth(){

        $numberb = count(User::all()->where("session","connected"));
        return $numberb;


    }
   
}
