<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $slider;
    public function __construct(Slider $slider)
    {
        $this->slider = $slider;
    }
    function index(){
        $slider = $this->slider->getSlider();
        return send_response("Slider Data Featch Success",$slider);
    }
    function store(Request $request)
    {
        $validator = $this->slider->validatorSlider($request);
        if ($validator->fails()) return send_error('Validation Error',$validator->errors(),422);

        try {
            $this->slider->storeSlider(new Slider,$request);
            return send_response("slider successfully Created",'');
        }catch (Exception $e){
            return send_error($e->getMessage(),$e->getMessage(),$e->getCode());
        }

    }
}
