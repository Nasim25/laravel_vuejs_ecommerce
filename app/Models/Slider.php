<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Image;
class Slider extends Model
{
    use HasFactory;
    protected $fillable = [
        'slider_img',
        'title',
        'description',
        'status',
    ];

    function validatorSlider($request){
        return Validator::make($request->all(),[
            'title' => 'required',
            'slider_img' => 'required'
        ]);
    }

    function storeSlider($slider,$request){
        $slider_img = $request->slider_img;
        if(isset($slider_img)){
            $strpos = strpos($request->slider_img,';');
            $sub = substr($request->slider_img,0,$strpos);
            $name_gen = hexdec(uniqid()).'_'.time().'.'.explode('/',$sub)[1];
            Image::make($slider_img)->resize(870,370)->save('public/upload/slider/'.$name_gen);
            $save_slider_img = 'public/upload/slider/'.$name_gen;
        }else{
            $save_slider_img = 'public/upload/slider_default.png';
        }
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->slider_img = $save_slider_img;
        $slider->save();
    }
    function getSlider(){
        return Slider::all();
    }
}
