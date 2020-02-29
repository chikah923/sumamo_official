<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function getPage($solution_category)
    {   
        switch ($solution_category) {
            case "sensors":
                $output = "センサー";
                return view('solutions.sensor')->with('solution_category',$output);
            case "lightning":
                $output = "照明";
                return view('solutions.lightning')->with('solution_category',$output);
            case "automation":
                $output = "オートメーション";
                return view('solutions.automation')->with('solution_category',$output);
            case "security":
                $output = "セキュリティ";
                return view('solutions.security')->with('solution_category',$output);
            case "networking":
                $output = "ネットワーク";
                return view('solutions.network')->with('solution_category',$output);
            case "entertainment":
                $output = "エンターテイメント";
                return view('solutions.entertainment')->with('solution_category',$output);             
        }
    }    
}