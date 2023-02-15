<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function addToCart($id){
//        $cart=collect(session('cart',[]));
//        $foundIndex=$cart->search(function($item,$index) use ($id){
//            return $item['product']->id==$id;
//        });
//        $cart=$cart->toArray();
//        if($foundIndex!==false&&$foundIndex>=0){
//            $cart[$foundIndex]['quantity']+=1;
//        }
//        else{
//            array_push($cart,[
//                'product'=>Product::find($id),
//                'quantity'=>1
//            ]);
//        }
//        session()->put('cart',$cart);
//        return redirect()->back();


        $cart=session('cart',[]);
        $exist=false;
        foreach($cart as $item){
            if($item['product']->id==$id){
                $item['quantity']+=1;
                dd($item['quantity']);
                $exist=true;
                break;
            }
        }
        dd($cart);
        if(!$exist==false){
            array_push($cart,[
                'product'=> Product::find($id),
                'quantity'=>1
            ]);
        }

        session()->put('cart',$cart);
//        request()->session()->forget('cart');
        return redirect()->back();
    }

    public function list(){
        $cart=session()->get('cart',[]);
        return view('cart.cart',compact('cart'));
    }

    public function delete($id){
        $cart=collect(session()->get('cart',[]));
        $foundIndex=$cart->search(function($item,$index) use ($id){
            return $item['product']->id==$id;
        });
        $cart=$cart->toArray();
        array_splice($cart,$foundIndex,1);
        session()->put('cart',$cart);
        return redirect()->back();
    }

    public function changeQuantity($id,$quantity){
        $cart=collect(session()->get('cart',[]));
        $foundIndex=$cart->search(function($item,$index) use($id){
           return $item['product']->id==$id;
        });
        $cart=$cart->toArray();
        if ($foundIndex !== false && $foundIndex >= 0
            && ($cart[$foundIndex]['quantity'] > 1 && $quantity == -1)
            || ($quantity == 1)) {
            $cart[$foundIndex]['quantity'] += $quantity;
        }
        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function checkout(){

    }
}
