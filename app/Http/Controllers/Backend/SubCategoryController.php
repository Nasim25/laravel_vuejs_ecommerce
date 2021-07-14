<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    protected $subcategory;
    public function __construct(SubCategory $subCategory)
    {
        return $this->subcategory = $subCategory;
    }
    function subcategory(){
        $subcategory = $this->subcategory->getSubcategory();
        return send_response("Subcategory Data Fetch success",$subcategory);
    }
    function store(Request $request)
    {
        $validator = $this->subcategory->validateSubcategory(new SubCategory,$request);
        if ($validator->fails()) return send_error('Validation Error',$validator->errors(),422);
        try {
            $this->subcategory->subcategoryStoreAndUpdate(new SubCategory,$request);
            return send_response("Sub-Category successfully Created",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }
    function edit($slug){
        $subcategory = $this->subcategory->getSubcategoryByParamValue('subcategory_slug_en',$slug);
        return send_response("Subcategory By Paramitter and Value",$subcategory);
    }
    function update(Request $request,$id){
        $subcategory = $this->subcategory->getSubcategoryByParamValue('id',$id);
       $validator = $this->subcategory->validateSubcategory($subcategory,$request);
       if ($validator->fails()) return send_error("validator Error",$validator->errors(),422);
        try {
            $this->subcategory->subcategoryStoreAndUpdate($subcategory,$request);
            return send_response("Subcategory Update Success",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }
    function delete($slug){
        $this->subcategory->getSubcategoryByParamValue('subcategory_slug_en',$slug)->delete();
        return send_response("Subcategory Successfully Deleted",'');
    }
    function getById($id){
        $subcategoryById = SubCategory::where('category_id',$id)->get();
        return send_response("Subcategory Fetch by Id",$subcategoryById);
    }
}
