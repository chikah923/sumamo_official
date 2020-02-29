<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function getPage($service_category)
    {   
        switch ($service_category) {
            case "consultancy":
                $output = "コンサルタント";
                return view('services.consultancy')->with('service_category',$output); 
            case "designing":
                $output = "デザイン";
                return view('services.designing')->with('service_category',$output); 
            case "training_and_skills":
                $output = "トレーニング＆スキル";
                return view('services.training_and_skills')->with('service_category',$output); 
            case "maintainance":
                $output = "メンテナンス";
                return view('services.maintainance')->with('service_category',$output);                
        }
    }    
}