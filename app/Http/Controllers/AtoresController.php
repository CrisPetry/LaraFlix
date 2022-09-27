<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ator;

class AtoresController extends Controller
{

    public function index()
    {
        $atores = Ator::All();
        return view('atores.index', ['atores' => $atores]);
    }

    public function create(){
        return view('atores.create');
    }

    public function store(Request $request){
        $ator = $request->all();
        Ator::create($ator);
        return redirect('atores');
    }
}
