<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    function store(Request $request){
        $validator = $this->product->productValidator($request);
        
        if ($validator->fails()) return send_error("validation Error",$validator->errors(),422);
        
        $this->product->addProduct(new Product,$request);
        return send_response("success",'');
        
    }
}
