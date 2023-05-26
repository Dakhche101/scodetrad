<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\DB;
use App\Models\product;
use App\Models\cart;
use App\Models\user;
use App\Models\Comande;
use App\Models\Infocomand;



class CartController extends Controller
{
    //
    public function dataCart(){
        $user_id=auth()->id();
        $db= DB::table('carts')->where('id_user', $user_id);
        $count =$db->count();
        $data=$db->get();
        $prix_totale = DB::table('carts')->where('id_user',$user_id)->sum(DB::raw('prix * quantité'));
        return ['count'=>$count,'data'=>$data,'prix_totale'=>$prix_totale];
    }
    public function check($v,$x){
        if(cart::where('id_user','=',$x)->where('id_product','=',$v)->exists()){
            return false;
        }else{
            return true;
        }
    }
    public function index(){
     
        $data=self::dataCart();

        
        return view('user.card',compact('data'));
    }
    public function add(Request $request,$id){
        $user=Auth::user();
        $product=product::find($id);
        $checked=self::check($id,$user->id);
        if($checked){
            $cart=new cart;
            $cart->quantité=$request->input('quantité');
            $cart->id_product=$id;
            $cart->id_user=$user->id;
            $cart->title=$product->title;
            $cart->prix=$product->prix;
            $cart->image=$product->image;
            $cart->save();
            return redirect('/redirect')->with('message','le produit est ajouter au pannier.');
        }else{
            return redirect('/redirect')->with('message','le produit est déja ajouter au pannier.');

        }
        
        

    }
    public function remove($id){
       cart::where('id',$id)->delete();
        
        return redirect()->back()->with('message','le produit est supprimer au panier .');
    }
    public function comande(Request $request){
        $redirect=request('typeshop');
        if($redirect=='online'){
            return view('user.comande');
        }else{
            $user_id=auth()->id();
            $data=user::find($user_id);
            return view('user.order',compact('data'));
        }
        
    }
    public function comander(){
        // save data cart in comande and comande info
        $data=self::dataCart();
        // dd($data);
        if(comande::where('client_associé','=',auth()->id())->exists()){
            return redirect("/redirect")->with('message',"vous navez pas le droit de comander autre jusqu'au votre comande doit etre livrer");
        }else{
            $comande=new Comande;
            $comande->date_comande=date('Y/m/d');
            $comande->status_comande="en cours";
            $comande->mode_paiement="cache á livraison";
            $comande->client_associé=auth()->id();
            $comande->save();
            $id_comande=DB::table('comandes')->where('client_associé', auth()->id())->value('id');
            foreach($data["data"] as $value){
                $infocomande=new Infocomand;
                $infocomande->quantité=$value->quantité;
                $infocomande->prix_unitaire=$value->prix;
                $infocomande->produits_associé=$value->title;
                $infocomande->comande_associé=$id_comande;
                $infocomande->save();
            }
            // delete all data cart
            cart::where('id_user', auth()->id())->delete();
            return redirect("/redirect")->with('message','votre comande et affectuer avec succée');
        }
    }
}
