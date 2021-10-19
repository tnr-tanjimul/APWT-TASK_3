<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function list(){
        /*$students = array();
        for($i=0;$i<10;$i++){
            $student=array(
                "name"=>"Student ".($i+1),
                "id" =>($i+1),
                "dob" =>"12.12.12"
            );
            $students[] = (object)$student;
        }*/
       // $students = Product::all();


        $data = [
            'page_name' => 'Products',
            'products' =>  Product::all(),               
        ];

        return view('pages.products')->with($data);
    }

    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('pages.products');

    }
}
