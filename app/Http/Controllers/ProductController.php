<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
public function __construct()
{
    $this->middleware('auth');
}



public function VeiwProduct(){ //routes/web.php ln 24 +app/product.php ln 9
                              $product=Product::all();
                               $arr=Array('product'=>$product);
                              return view('product.view',$arr);
}
public function AddProduct(Request $request){

      if($request->isMethod('post')){

      $this->validate($request,[
      'name' => 'required | max:25 |unique:products' ,
      'price' => 'required |min:2 |max:8'
      ]);
       $newproduct=new Product();
       $newproduct->name=$request->input('name');
       $newproduct->price=$request->input('price');
       $newproduct->save();
        }

               return view('product.add');
              

}
public function EditProduct(Request $request,$id){

if($request->isMethod('post')){
$newproduct= Product::find($id);
       $newproduct->name=$request->input('name');
       $newproduct->price=$request->input('price');
       $newproduct->save();
       return redirect("product");

}else{
$product=Product::find($id);
$arr=Array('product'=>$product);
return view('product.edit',$arr);
}
}
}
