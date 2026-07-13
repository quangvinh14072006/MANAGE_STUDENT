<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Thực hiện câu lệnh kết nối thô
    public function index()
    {
        $product = \DB::select("SELECT * FROM products");
        return response()->json([
            "status"=>"success",
            "data"=>$product
        ],200);
    }
    
}

