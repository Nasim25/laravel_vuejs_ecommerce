<?php

namespace App\Models;

use App\Models\MultiImg as ModelsMultiImg;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\MultiImg;
use Image;
use PhpParser\Parser\Multiple;

class Product extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function multiimages(){
        return $this->hasMany(MultiImg::class,'product_id');
    }
    public function productValidator($request)
    {
        return Validator::make($request->all(),[
                'brand_id'          => 'required',
                'category_id'       => 'required',
                'subcategory_id'    => 'required',
                'subsubcategory_id' => 'required',
                'product_name_en'   => 'required',
                'product_name_bn'   => 'required',
                'product_code'      => 'required|unique:products',
                'product_qty'       => 'required',
                'selling_price'     => 'required',
                'product_thambnail' => 'required',
        ]);
    }

    public function addProduct($product, $request)
    {
        $product_thambnail = $request->product_thambnail;


        if(isset($product_thambnail)){
            $strpos = strpos($request->product_thambnail,';');
            $sub = substr($request->product_thambnail,0,$strpos);
            $name_gen = hexdec(uniqid()).'_'.time().'.'.explode('/',$sub)[1];
            Image::make($product_thambnail)->resize(917,1000)->save('public/upload/product/thambnail/'.$name_gen);
            $save_product_thambnil = 'public/upload/product/thambnail/'.$name_gen;
        }else{
            $save_product_thambnil = 'public/upload/noimage.jpg';
        }

        $product->brand_id          = $request->brand_id;
        $product->category_id       = $request->category_id;
        $product->subcategory_id    = $request->subcategory_id;
        $product->subsubcategory_id = $request->subsubcategory_id;
        $product->product_name_en   = $request->product_name_en;
        $product->product_name_bn   = $request->product_name_bn;
        $product->product_code      = $request->product_code;
        $product->product_slug_en   = Str::slug($request->product_name_en);
        $product->product_slug_bn   = Str::slug($request->product_name_bn);
        $product->product_qty       = $request->product_qty;
        $product->product_tags_en   = $request->product_tags_en;
        $product->product_tags_bn   = $request->product_tags_bn;
        $product->product_size_en   = $request->product_size_en;
        $product->product_size_bn   = $request->product_size_bn;
        $product->product_color_en  = $request->product_color_en;
        $product->product_color_bn  = $request->product_color_bn;
        $product->selling_price     = $request->selling_price;
        $product->discount_price    = $request->discount_price;
        $product->short_descp_en    = $request->short_descp_en;
        $product->short_descp_bn    = $request->short_descp_bn;
        $product->long_descp_en     = $request->long_descp_en;
        $product->long_descp_bn     = $request->long_descp_bn;
        $product->product_thambnail = $save_product_thambnil;
        $product->hot_deals         = $request->hot_deals;
        $product->featured          = $request->featured;
        $product->special_offer     = $request->special_offer;
        $product->special_deals     = $request->special_deals;
        $product->save();


        $imgs = $request->file('multi_image');
        if(isset($imgs)){

            foreach($imgs as $img){
                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                Image::make($img)->resize(580,480)->save('public/upload/product/multiimage/'.$make_name);
                $multi_image_upload_path = 'public/upload/product/multiimage/'.$make_name;
                MultiImg::insert([
                    'product_id' => $product->id,
                    'image' => $multi_image_upload_path
                ]);
            }

        }

    }

    public function getProductPramValu($pram,$value){
        return Product::where($pram,$value)->orderBy('id','DESC');
    }

    function brand(){
        return $this->belongsTo(Brands::class,'brand_id');
    }
}
