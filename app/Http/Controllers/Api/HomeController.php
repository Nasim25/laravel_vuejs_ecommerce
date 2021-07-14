<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Brands;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use App\Models\SubCategory;
use App\Models\SubSubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected $product;
    public function __construct(Product $product)
    {
        $this->product = $product;
    }
    function category_list(Category $category)
    {
        $category = $category->getCategories();
        return send_response("Category Data Fetch Success",$category);
    }
    function subcategory_list(){
        $subCategory = Subcategory::orderBy('subcategory_name_en')->where('subcategory_status',1)->get();
        return send_response('subcategory',$subCategory);
    }

    function subsubcategory_list(SubSubCategory $subsubcategory){
        $subsubcategory = $subsubcategory->getSubsubCategories();
        return send_response('subsubcategory',$subsubcategory);
    }

    function brand_list(Brands $brands){
        $brands = $brands->getBrands();
        return send_response("brand",$brands);

    }

    function product_by_subsubcategory($id){
        $productbysubsubcategory = $this->product->getProductPramValu('subsubcategory_id',$id)->where('status','1')->get();
        return send_response('product by Category',$productbysubsubcategory);
    }

    function product_by_category($id){
        $productbycategory = $this->product->getProductPramValu('category_id',$id)->where('status','1')->get();
        return send_response('product by Category',$productbycategory);
    }
    function product_by_subcategory($id){
        $productbysubcategory = $this->product->getProductPramValu('subcategory_id',$id)->where('status','1')->get();
        return send_response('product by Category',$productbysubcategory);
    }
    
    function product_by_brand($id){
        $productbysubcategory = $this->product->getProductPramValu('brand_id',$id)->where('status','1')->get();
        return send_response('product by Category',$productbysubcategory);
    }
    
    function slider_list(Slider $slider)
    {
        $slider = $slider->getSlider();
        return send_response("Category Data Fetch Success",$slider);
    }
    public function new_product()
    {
        $products = $this->product->getProductPramValu('status',1)->take(20)->get();
        return send_response("New Product",$products);
    }
    public function hotdeal()
    {
        $products = $this->product->getProductPramValu('status',1)->where('hot_deals',1)->get();
        return send_response("Hot Deal Product",$products);
    }
    public function featured_product()
    {
        $products = $this->product->getProductPramValu('status',1)->where('featured',1)->get();
        return send_response("Featured Product",$products);
    }

    public function product_view($slug)
    {
       $product = $this->product->getProductPramValu('product_slug_en',$slug)->with('brand','multiimages')->first();
       return send_response('product view',$product);
    }
}
