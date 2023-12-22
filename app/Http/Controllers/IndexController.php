<?php

namespace App\Http\Controllers;

use App\Models\Scam;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', ["happy_customers" => Scam::count()]);
    }
}
