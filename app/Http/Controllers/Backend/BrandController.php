<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Resources\BrandResource;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    private $brand;
    public function __construct(Brands $brand)
    {
        $this->brand = $brand;
    }
    public function index()
    {
        $brands = $this->brand->getBrands();
        return send_response("Success",BrandResource::collection($brands));
    }
    public function store(Request $request)
    {
        $validator = $this->brand->brandValidat(new Brands,$request);
        if($validator->fails())
            return send_error('Validation Error',$validator->errors(),422);

        try {
            $this->brand->brandStoreUpdate(new Brands,$request);
            return send_response('Brand Successfully Created','');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }

    public function delete($slug)
    {
        $this->brand->deleteBrand($slug);

        return send_response("successfully Deleted",'');
    }

    public function edit($slug)
    {
        $brand = $this->brand->getBrandBySlug($slug);
        return send_response("success",$brand);
    }
    public function update(Request $request,$slug)
    {
        $brand = Brands::where('id',$slug)->first();

        $validator = $this->brand->brandValidat($brand,$request);
        if($validator->fails())
            return send_error('Validation Error',$validator->errors(),422);

        try {
            $this->brand->brandStoreUpdate($brand,$request);
            return send_response('Brand Successfully Updated','');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }
    }
}
