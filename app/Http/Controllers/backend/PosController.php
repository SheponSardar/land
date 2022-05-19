<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Pos;
use App\Models\Saledetails;
use App\Models\Sale;
use App\Models\Stock;
use App\Models\User;


class PosController extends Controller
{
    public function Point_of_Sale(){
        $products=Stock::all();
        $user=User::where('type','client')->get();
        //dd($user);
        return view('backend.layouts.sale.pos',compact('products','user'));
    }
    public function Sales(){
        $sales=Sale::all();
        $user=User::all();

        return view('backend.layouts.sale.sales',compact('sales','user'));

    }
    public function details($id){


        $details=Saledetails::where('sale_id',$id)->get();


        return view('backend.layouts.sale.saledetails',compact('details'));
     }




     public function cart_post( Request $request){


        //dd($request->all());


        $saleid=Sale::create([
            'name'=>$request->name,
            'distric'=>$request->distric,
            'subdistric'=>$request->subdistric,
            'mouza'=>$request->mouza,
            'khatiyan'=>$request->khatiyan,
            'dag'=>$request->dag,
            'tax'=>$request->tax,


        ]);







}
}
