<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'subcategory_name_en',
        'subcategory_name_bn',
        'subcategory_slug_en',
        'subcategory_slug_bn',
        'subcategory_status'
    ];

    function validateSubcategory($subcategory,$request){
        return Validator::make($request->all(),[
            'category_id' => 'required|integer',
            'subcategory_name_en' => 'required|max:100|unique:sub_categories,subcategory_name_en,'.$subcategory->id,
            'subcategory_name_bn' => 'required|max:100|unique:sub_categories,subcategory_name_bn,'.$subcategory->id,
        ],
        [
            'category_id.required'=>"Category Id Required",
            'subcategory_name_en.required'=>"Subcategory Name English Required",
            'subcategory_name_bn.required'=>"Subcategory Name Bangla Required",
        ]);
    }
    function subcategoryStoreAndUpdate($subcategory,$request)
    {
        $subcategory->category_id = $request->category_id;
        $subcategory->subcategory_name_en = $request->subcategory_name_en;
        $subcategory->subcategory_name_bn = $request->subcategory_name_bn;
        $subcategory->subcategory_slug_en = Str::slug($request->subcategory_name_en);
        $subcategory->subcategory_slug_bn = Str::slug($request->subcategory_name_bn);
        $subcategory->save();
        return $subcategory;
    }

    function category(){
        return $this->belongsTo(Category::class,'category_id','id');
    }
    function subsubcategories(){
        return $this->hasMany(SubSubCategory::class,'subcategory_id');
    }

    function getSubcategory()
    {
        return SubCategory::with(['category','subsubcategories'])->orderBy('subcategory_name_en')->get();
    }
    function getSubcategoryByParamValue($pram,$value){
        Return SubCategory::where($pram,$value)->first();
    }


}
