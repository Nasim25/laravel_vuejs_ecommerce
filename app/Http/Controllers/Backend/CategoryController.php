<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    function category(){
        $categories = $this->category->getCategories();
        return send_response("category fetch success",CategoryResource::collection($categories));
    }

    public function store(Request $request)
    {
        $validator =$this->category->categoryValidator(new Category,$request);
        if ($validator->fails()) return send_error("validation Error",$validator->errors(),422);

        try {
            $category = $this->category->categoryStoreAndUpdate(new Category,$request);
            return send_response('Category Successfully Store',$category->category_name_en);
        }catch (Exception $e){
            return send_error('',$e->getMessage(),$e->getCode());
        }
    }
    function edit($slug){
        $category = $this->category->getCategoryBySlug('category_slug_en',$slug);
        return send_response('Data Fetch success by slug',$category);
    }
    function update(Request $request,$slug){
        $category = $this->category->getCategoryBySlug('id',$slug);
        $validator = $this->category->categoryValidator($category,$request);
        if ($validator->fails()) return send_error("Validation Faild",$validator->errors(),422);
        try {
            $this->category->categoryStoreAndUpdate($category,$request);
            return send_response("Category Update Success",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }
    function delete($slug)
    {
        $this->category->getCategoryBySlug('category_slug_en',$slug)->delete();

        return send_response("Category Successfully Deleted",'');
    }
}
