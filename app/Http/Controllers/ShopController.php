<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {   
        return view('shop.index');
    }
    public function productDetail() {
        return view('shop.product_detail');
    }    
}