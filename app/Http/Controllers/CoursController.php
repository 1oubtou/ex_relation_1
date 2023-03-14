<?php

namespace App\Http\Controllers;

use App\Models\Cours;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    
    public function index()
    {
        $cour = Cours::paginate(5);
        return view('cours.index', compact('cour'));
    }

    
    public function create()
    {
        return view('cours.creat');
    }

    
    public function store(Request $request)
    {
        $request->validate([ 'nom' => 'required|string|min:3|max:15' ],
        [ 
            'nom.max' => 'Le Nom Cours est superieur a 15 lettre', 
            'nom.min' => 'Le nom du cours comporte moins de 3 lettre' 
        ]);
        
        Cours::create([
            'nom' =>$request->nom,
        ]);
        return redirect()->route('cour_index');
    }
    
    public function show($id)
    {
        $cours_show = Cours::find($id);

        return view('cours.view' , compact('cours_show'));
    }

    
    public function edit($id)
    {
        $cours_edit = Cours::find($id);
        return view('cours.update' , compact('cours_edit'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([ 'nom' => 'required|string|min:3|max:15' ],
        [ 
            'nom.max' => 'Le Nom Cours est superieur a 15 lettre', 
            'nom.min' => 'Le nom du cours comporte moins de 3 lettre' 
        ]);
        $cours_up = Cours::find($id);

        $cours_up->nom = $request->nom;
        $cours_up->save();
        return redirect()->route('cour_index');
    }

    
    public function destroy($id)
    {
        Cours::find($id)->delete();
        return redirect()->route('cour_index');
    }
}
