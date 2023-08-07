<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\product;
use App\Models\Comande;
use App\Models\Livraison;
use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;
use Illuminate\support\facades\DB;


class Homecontroller extends Controller
{
    //
    public function checkcatégorie($y){
        $catégories=['sanitaire','robinettrie','carellage'];
        for ($x = 0; $x < count($catégories); $x++) {
            $dakhche=false;
            if($y==$catégories[$x]){
                $dakhche=true;
                return $dakhche;
                break;
            }
        }
    }
    public function redirect(){
        $user=Auth::user()->usertype;
        if($user=='1'){
            return redirect('product');
        }elseif($user=='2'){
            return view('livreur.home');
        }else{
            $filter=request('catégorie');
            $value=self::checkcatégorie($filter);
            if($value==true){
                $query=product::query();
                $query->where('catégorie',$filter);
                $products=$query->get();
                return view('user.'."$filter",['products'=>$products]);
            } elseif($filter==''){
                $products=product::all();
                return view('user.home',['products'=>$products]);
            }
            else{
                abort(404);
            }
        }
    }
    public function product(){
        $products=product::all();
        return view('home.formproduct',['products'=>$products]);

    }
    
    public function affecter($id){
        $users=user::where('usertype','=','2')->get();
        return view('home.affectorder',['users'=>$users,'id'=>$id]);
    }

public function saveaffecter($comande,$livreur){
    $comandes=comande::find($comande);
    $address=user::find($comandes->client_associé);
    $livreure=user::find($livreur);
    $livraison=new Livraison;
    $livraison->date_livraison=date('Y/m/d');
    $livraison->comande=$comande;
    $livraison->client=$comandes->client_associé;
    $livraison->address=$address->address;
    $livraison->livreur=$livreur;
    $livraison->save();
    return redirect('/redirect/comandes');
}

    public function showcomande(){
    
        
        $comandes=comande::all();
        $users=[];
        $les_prix=[];
        foreach($comandes as $comande){
            $user=user::find($comande->client_associé);
            $prix_totale = DB::table('infocomands')->where('comande_associé',$comande->id)->sum(DB::raw('prix_unitaire * quantité'));
            $users[]=$user->name;
            $les_prix[]=$prix_totale;
        }
        return view('home.orders' ,['comandes'=>$comandes,'users'=>$users,'les_prix'=>$les_prix]);
    }

    public function editproduct($id){
        $product=product::find($id);
       

        return view('home.editproduct',['product'=>$product]);
        
    }
    public function updatproduct(Request $request,$id){
        $product=product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->prix=$request->prix;
        $product->quantité=$request->quantité;
        $product->catégorie=$request->input('catégorie');
       
        $product->image=$product->image;
        $product->save();
        
        return redirect('/product');
    }
    public function deleteproduct($id){
        $product=product::find($id);
        $product->delete();
        return redirect()->back();

    }
    public function add(Request $request){
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->prix=$request->prix;
        $product->quantité=$request->quantité;
        $product->catégorie=$request->input('catégorie');
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images',$imagename);
        $product->image=$imagename;
        $product->save();
        return redirect()->back()->with('success', 'Product added successfully.');
    }

    public function livreur()
    {
        $livraisons=livraison::where('livreur','=',auth()->id());
        return view('livreur.home',compact('livraison'));
    }









}
