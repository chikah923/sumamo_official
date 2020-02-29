<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ZonesController extends Controller
{
    public function getPage($zone_category)
    {   
        switch ($zone_category) {
            case "residential":
                $output = "住宅";
                return view('zones.residential')->with('zone_category',$output); 
            case "corporate":
                $output = "会社";
                return view('zones.corporate')->with('zone_category',$output); 
            case "hospitality":
                $output = "ホテル";
                return view('zones.hospitality')->with('zone_category',$output); 
            case "commercial":
                $output = "商業施設";
                return view('zones.commercial')->with('zone_category',$output);     
            case "education":
                $output = "教育施設";
                return view('zones.education')->with('zone_category',$output);         
        }
    }    
}