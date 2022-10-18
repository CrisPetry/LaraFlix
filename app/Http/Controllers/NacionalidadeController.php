<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nacionalidade;
use App\Http\Requests\NacionalidadeRequest;

class NacionalidadeController extends Controller
{
    
    public function index()
    {
        $nacionalidades = Nacionalidade::orderBy('descricao')->paginate(3);
        return view('nacionalidades.index', ['nacionalidades' => $nacionalidades]);
    }

    public function create()
    {
        return view('nacionalidades.create');
    }

    
    public function store(NacionalidadeRequest $request)
    {
        $nacionalidades = $request->all();
        Nacionalidade::create($nacionalidades);
        return redirect()->route('nacionalidades');
    }

    public function edit($id){
        $nacionalidades = Nacionalidade::find($id);
        return view('nacionalidades.edit', compact('nacionalidades'));
    }

    
    public function update(NacionalidadeRequest $request, $id)
    {
        Nacionalidade::find($id)->update($request->all());
        return redirect()->route('nacionalidades');
    }

    
    public function destroy($id)
    {
        nacionalidade::find($id)->delete();
        return redirect()->route('nacionalidades');
    }
}
