<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Product;
use App\Models\buyerprofile;
use App\Models\Sellerprofile;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userdetails(){
        $users = User::get();
        return view('admin/userdetails',compact('users'));
    }
    public function productdetails(){
        $products = Product::where('is_verified',NULL)->get();
        $productss = Product::whereNotNull('is_verified')->get();
        return view('admin/productdetails',compact('products','productss'));
    }
    public function registerseller(){

        $users = Sellerprofile::where('is_verified',NULL)->whereNotNull('email')->get();

        return view('admin/registerseller',compact('users'));
    }
    public function registeredbuyer(){
        $users = buyerprofile::where('is_verified',NULL)->whereNotNull('email',)->get();

        return view('admin/registerbuyer',compact('users'));
    }
    public function verifyproduct($id){
        $a =1;
        
        Product::where('id', $id)->update([

            'is_verified' => $a,

        ]);
        return redirect('/admin_product_details');
    }
    public function verifyseller($id){
        $a =1;
        
        Seller::where('id', $id)->update([

            'is_verified' => $a,

        ]);
        return redirect('/admin_product_details');
    }
    public function verifybuyer($id){
        $a =1;
        
        buyer::where('id', $id)->update([

            'is_verified' => $a,

        ]);
        return redirect('/admin_product_details');
    }
    public function unverifyproduct($id){
        Product::where('id', $id)->update([

            'is_verified' => NULL,

        ]);
        return redirect('/admin_product_details');
    }
    public function unverifyseller($id){
        Seller::where('id', $id)->update([

            'is_verified' => NULL,

        ]);
        return redirect('/admin_product_details');
    }
    public function unverifybuyer($id){
        buyer::where('id', $id)->update([

            'is_verified' => NULL,

        ]);
        return redirect('/admin_product_details');
    }
}
