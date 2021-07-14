<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class SubSubController extends Controller
{
    protected $subsubcategories;
    public function __construct(SubSubCategory $subsubcategories)
    {
        $this->subsubcategories = $subsubcategories;
    }
    function subsubcategory(){
        $subsubcategories = $this->subsubcategories->getSubsubCategories();
        return send_response('Sub-Sub-Caegory fetch success',$subsubcategories);
    }
    function store(Request $request){
        $validator = $this->subsubcategories->subsubcategoryValidator(new SubSubCategory,$request);
        if ($validator->fails()) return send_error("validation Error",$validator->errors(),422);
        try {
            $this->subsubcategories->subsubcategoryStoreAndUpdate(new SubSubCategory,$request);
            return send_response("Sub Sub category successfully store",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }

    }
    function edit($slug){
        $subsubcategory = $this->subsubcategories->getSubsubcategoryBySlug('subsubcategory_slug_en',$slug)->first();
        return send_response("Sub Sub category Edit",$subsubcategory);
    }
    function update(Request $request,$id){
        $subsubcategory = $this->subsubcategories->getSubsubcategoryBySlug('id',$id);
        $validator = $this->subsubcategories->subsubcategoryValidator($subsubcategory,$request);
        if ($validator->fails()) return send_error("validation Error",$validator->errors(),422);
        try {
            $this->subsubcategories->subsubcategoryStoreAndUpdate($subsubcategory,$request);
            return send_response("Sub Sub category successfully Update",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }
    function delete($slug){
        $this->subsubcategories->getSubsubcategoryBySlug('subsubcategory_slug_en',$slug)->delete();
        return send_response("Sub Sub category successfully Deleted",'');
    }

    function getByid($id){
        $subsubcategory = $this->subsubcategories->getSubsubcategoryBySlug('subcategory_id',$id)->get();
        return send_response("Sub Sub category Edit",$subsubcategory);
    }
}
