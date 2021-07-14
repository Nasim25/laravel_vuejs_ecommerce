<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use DB;
use Image;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name_en',
        'category_name_bn',
        'category_slug_en',
        'category_slug_bn',
        'category_icon',
        'category_image',
        'category_status',
    ];
    public function subcategories(){
        return $this->hasMany(SubCategory::class,'category_id');
    }
    public function categoryValidator($category,$request){

        return Validator::make($request->all(),[
            'category_name_en' => 'required|max:100|unique:categories,category_name_en,'.$category->id,
            'category_name_bn' => 'required|max:100|unique:categories,category_name_bn,'.$category->id,
        ]);
    }
    public function categoryStoreAndUpdate($category,$request){

        $category_image = $request->category_image;
        if(isset($category_image)){
            $strpos = strpos($request->category_image,';');
            $sub = substr($request->category_image,0,$strpos);
            $name_gen = hexdec(uniqid()).'_'.time().'.'.explode('/',$sub)[1];
            Image::make($category_image)->resize(870,370)->save('public/upload/category/'.$name_gen);
            $save_category_img = 'public/upload/category/'.$name_gen;
        }else{
            $save_category_img = 'public/upload/category_default.png';
        }


        $category->category_name_en = $request->category_name_en;
        $category->category_name_bn = $request->category_name_bn;
        $category->category_slug_en = Str::slug($request->category_name_en);
        $category->category_slug_bn = Str::slug($request->category_name_bn);
        $category->category_icon = $request->category_icon;
        $category->category_image = $save_category_img;
        $category->save();
        return $category;
    }
    function getCategories(){
        return Category::with(['subcategories','subcategories.subsubcategories'])->orderBy('category_name_en')->get();
    }

    function getCategoryBySlug($param,$value){
        return Category::where($param,$value)->first();
    }

}
