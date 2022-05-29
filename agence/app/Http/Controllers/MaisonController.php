<?php

namespace App\Http\Controllers;

use App\Models\Maison;
use Illuminate\Http\Request;

class MaisonController extends Controller
{
  
    public function index()
    {
        $maisons = Maison::all();
      return view ('maison.index')->with('maison', $maisons);
    }

    
    public function create()
    {
        return view('maison.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
    Maison::create($input);
        return redirect('maison')->with('flash_message', 'maison Addedd!');  
    }

    
    public function show($id)
    {
        $maison =Maison::find($id);
        return view('maison.show')->with('maisons', $maison);
    }

    
    public function edit($id)
    {
        $maison = Maison::find($id);
        return view('maison.edit')->with('maisons', $maison);
    }

  
    public function update(Request $request, $id)
    {
        $maison = Maison::find($id);
        $input = $request->all();
        $maison->update($input);
        return redirect('maison')->with('flash_message', 'maison Updated!');  
    }

   
    public function destroy($id)
    {
    Maison::destroy($id);
        return redirect('maison')->with('flash_message', 'maison deleted!');  
    }
}