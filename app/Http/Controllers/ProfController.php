<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatStoreRequest;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Prof;
use Illuminate\Http\Request;

class ProfController extends Controller
{
    
    public function index()
    {
        $prof = Prof::paginate(5);
        return view('prof.index', compact('prof'));
    }

    
    public function create()
    {
        $clase = Classe::all();
        $cour = Cours::all();
        return view('prof.creat' , [
            'clase' => $clase,
            'cour' => $cour,
        ]);
    }

    
    public function store(CreatStoreRequest $request)
    {
        Prof::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'lage' =>$request->lage,
            'n_cin' =>$request->n_cin,
            'adresse' =>$request->adresse,
            'telephone' =>$request->telephone,
            'cour_id' =>$request->cour_id,
            'classe_id' =>$request->classe_id,
        ]);

        return redirect()->route('prof_index');
    }

    
    public function show($id)
    {
        $prof_show = Prof::find($id);

        return view('prof.view' , compact('prof_show'));
    }

    
    public function edit($id)
    {
        $clase = Classe::all();
        $cour = Cours::all();
        $prof_edit = Prof::find($id);

        return view('prof.update' , [
            'prof_edit' =>$prof_edit,
            'clase' => $clase,
            'cour' => $cour,
        ]);
    }

    
    public function update(CreatStoreRequest $request, $id)
    {
        $prof_up = Prof::find($id);

        $prof_up->nom = $request->nom;
        $prof_up->prenom = $request->prenom;
        $prof_up->lage = $request->lage;
        $prof_up->n_cin = $request->n_cin;
        $prof_up->adresse = $request->adresse;
        $prof_up->telephone = $request->telephone;
        $prof_up->cour_id = $request->cour_id;
        $prof_up->classe_id = $request->classe_id;

        $prof_up->save();
        return redirect()->route('prof_index');
    }

    
    public function destroy($id)
    {
        Prof::find($id)->delete();
        return redirect()->route('prof_index');
    }
}
