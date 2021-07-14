<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Brands extends Model
{
    use HasFactory;

    protected $fillable =[
        'brand_name_en',
        'brand_name_bn',
        'brand_slug_en',
        'brand_slug_bn',
        'brand_image',
    ];

    public function brandValidat($brand,$request){

        return Validator::make($request->all(),[
            'brand_name_en' => 'required|unique:brands,brand_name_en,'.$brand->id,
            'brand_name_bn' => 'required|unique:brands,brand_name_bn,'.$brand->id,
//          'brand_image'   => 'image',
        ]);
    }
    public function brandStoreUpdate($brand,$request)
    {
        $brand->brand_name_en = $request->brand_name_en;
        $brand->brand_name_bn = $request->brand_name_bn;
        $brand->brand_slug_en = Str::slug($request->brand_name_en);
        $brand->brand_slug_bn = Str::slug($request->brand_name_bn);
        $brand->brand_image = $request->brand_image;
        $brand->save();

        return $brand;

    }

    public function getBrands()
    {
       return Brands::orderBy('brand_name_en')->get();
    }

    public function deleteBrand($slug)
    {
        return Brands::where('brand_slug_en',$slug)->delete();
    }
    public function getBrandBySlug($slug)
    {
        return Brands::where('brand_slug_en',$slug)->first();
    }
}
