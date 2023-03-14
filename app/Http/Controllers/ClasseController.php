<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Etudiant;
use App\Models\Prof;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    
    public function index()
    {
        $clase = Classe::paginate(5);
        return view('classe.index', compact('clase'));
    }

    
    public function create()
    {
        return view('classe.creat');
    }

    
    public function store(Request $request)
    {
        $request->validate([ 
            'number' => 'required|integer|between:1,40', ],
         [
            'number.between' => 'number classe doit être compris entre 1 et 40',
         ]);
        
        Classe::create([
            'number' =>$request->number,
        ]);
        return redirect()->route('classe_index');
    }

    
    public function show($id)
    {
        $classe_show = Classe::find($id);

        return view('classe.view' , compact('classe_show'));
    }

    
    public function edit($id)
    {
        $classe_edit = Classe::find($id);

        return view('classe.update' , compact('classe_edit'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'number' => 'required|integer|between:1,40', ],
         [
            'number.between' => 'number classe doit être compris entre 1 et 40',
         ]);
        
        $classe_up = Classe::find($id);

        $classe_up->number = $request->number;
        $classe_up->save();
        return redirect()->route('classe_index');
    }

    
    public function destroy($id)
    {
        Classe::find($id)->delete();
        return redirect()->route('classe_index');
    }

    public function classe_number_etudiant($id)
    {
        $classe = Classe::find($id);
        $etudiant = Etudiant::all()->where('classe_id', $id);

        return view('class_afiiche.view_et', [ 'etudiant' => $etudiant, 'classe' => $classe ]);
    }
    
    public function classe_number_prof($id)
    {
        $classe = Classe::find($id);
        $prof = Prof::all()->where('classe_id', $id);

        return view('class_afiiche.view_pro', [ 'prof' => $prof, 'classe' => $classe ]);
    }
}
