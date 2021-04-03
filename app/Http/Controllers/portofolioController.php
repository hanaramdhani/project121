<?php

namespace App\Http\Controllers;
use App\Models\Portofolio;
use App\Portofolio as AppPortofolio;
use Illuminate\Http\Request;

class portofolioController extends Controller
{
    public function index(){
        $pr = Portofolio::Latest()->get();
        return view('index');
    }
    public function portofolio(){
        $pr = Portofolio::Latest()->get();
        return view('portofolio');
    }
}
