<?php

namespace App\Http\Controllers;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    //
    

public function destroy(Request $request){
    $id = auth()->user()->id;
    $is_admin =auth()->user()->is_admin;
    if($is_admin == 1){

        $product_id = $request->product_id;
        $product = Product::where('id',$product_id);
        $product->delete();
        return redirect()->route('home');
    }
    return redirect()->route('home');


}
public function edit(Request $request){
    $id = auth()->user()->id;
    $is_admin =auth()->user()->is_admin;
    if($is_admin == 1){
    return view('edit',compact('request'));
    }
}

    

    
    public function create(Request $request){
    
        $id = auth()->user()->id;
        $is_admin =auth()->user()->is_admin;
        if($is_admin == 1){

            $data =request()->validate([
                'name' => 'required',
                'description'=>'required',
                'price'=>'required',
                'quantity'=>'required',
                'image'=>'required|image',

            ]);
            $imagePath = request('image')->store('upload','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();




            
    
                    Product::create([
                        'name' => $request->name,
                        'description'=>$request->description,
                        'price'=>$request->price,
                        'quantity'=>$request->quantity,
                        'image'=>$imagePath,
                          ]);
                          return redirect()->route('home');
        
                    }
                }


                    
    public function update(Request $request){
    
        $id = auth()->user()->id;
        $is_admin =auth()->user()->is_admin;
        if($is_admin == 1){

        $data =request()->validate([

            'name' => 'required',
            'description'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'image'=>'required|image',

        ]);
        $imagePath = request('image')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();


               

$product_id = $request->product_id;
        

                Product::where('id',$product_id)->update([
                    
                    'name' => $request->name,
                    'description'=>$request->description,
                    'price'=>$request->price,
                    'quantity'=>$request->quantity,
                    'image'=>$imagePath,
                      ]);
                      return redirect()->route('home');
    
                }
            }

}