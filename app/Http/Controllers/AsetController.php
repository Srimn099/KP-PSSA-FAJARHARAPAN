<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Tbaset;

class AsetController extends Controller
{
    function index(){
        $data['list'] = Tbaset::all();
        return view('aset.index', $data);
    }
    function create(){
        return view('aset.create');
    }
}
