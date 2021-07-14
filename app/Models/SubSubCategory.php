<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SubSubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'subcategory_id',
        'subsubcategory_name_en',
        'subsubcategory_name_bn',
        'subsubcategory_slug_en',
        'subsubcategory_slug_bn',
        'subsubcategory_status',
    ];

    public function subsubcategoryValidator($subsubcategory,$request){

        return Validator::make($request->all(),[
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'subsubcategory_name_en' => 'required|max:100|unique:sub_sub_categories,subsubcategory_name_en,'.$subsubcategory->id,
            'subsubcategory_name_bn' => 'required|max:100|unique:sub_sub_categories,subsubcategory_name_bn,'.$subsubcategory->id,
        ]);
    }
    public function subsubcategoryStoreAndUpdate($subsubcategory,$request){
        $subsubcategory->category_id = $request->category_id;
        $subsubcategory->subcategory_id = $request->subcategory_id;
        $subsubcategory->subsubcategory_name_en = $request->subsubcategory_name_en;
        $subsubcategory->subsubcategory_name_bn = $request->subsubcategory_name_bn;
        $subsubcategory->subsubcategory_slug_en = Str::slug($request->subsubcategory_name_en);
        $subsubcategory->subsubcategory_slug_bn = Str::slug($request->subsubcategory_name_bn);
        $subsubcategory->save();
        return $subsubcategory;
    }
    function getSubsubCategories(){
        return SubSubCategory::with(['category','subcategory'])->orderBy('subsubcategory_name_en')->get();
    }

    function getSubsubcategoryBySlug($param,$value){
        return SubSubCategory::where($param,$value);
    }
    function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
    function subcategory()
    {
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }
    
}
