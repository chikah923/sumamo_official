<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function getPage($plan_category)
    {   
        switch ($plan_category) {
            case "basic":
                $output = "ベーシックプラン";
                return view('plans.basic')->with('plan_category',$output); 
            case "lite":
                $output = "ライトプラン";
                return view('plans.lite')->with('plan_category',$output); 
            case "standard":
                $output = "スタンダードプラン";
                return view('plans.standard')->with('plan_category',$output); 
            case "advanced":
                $output = "アドバンスプラン";
                return view('plans.advanced')->with('plan_category',$output);
            case "elite":
                $output = "エリートプラン";
                return view('plans.elite')->with('plan_category',$output);                    
        }
    }    
}