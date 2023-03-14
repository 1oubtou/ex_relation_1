<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatStoreEtudiontRequest;
use App\Models\Classe;
use App\Models\Cours;
use App\Models\Etudiant;
use App\Models\Prof;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    
    public function index()
    {
        $etudiant = Etudiant::paginate(5);
        return view('etudiant.index', compact('etudiant'));
    }

    
    public function create()
    {
        $clase = Classe::all();
        $cour = Cours::all();
        $prof = Prof::all();
        return view('etudiant.creat' , [
            'clase' => $clase,
            'cour' => $cour,
            'prof' => $prof,
        ]);
    }

    
    public function store(CreatStoreEtudiontRequest $request)
    {
        Etudiant::create([
            'nom' =>$request->nom,
            'prenom' =>$request->prenom,
            'lage' =>$request->lage,
            'adresse' =>$request->adresse,
            'telephone' =>$request->telephone,
            'prof_id' =>$request->prof_id,
            'cour_id' =>$request->cour_id,
            'classe_id' =>$request->classe_id,
        ]);
        return redirect()->route('etudiant_index');
    }

    
    public function show($id)
    {
        $etudiant_show = Etudiant::find($id);

        return view('etudiant.view' , compact('etudiant_show'));
    }

    
    public function edit($id)
    {
        $clase = Classe::all();
        $cour = Cours::all();
        $prof = Prof::all();
        $etudiant_edit = Etudiant::find($id);
        return view('etudiant.update' , [
            'clase' => $clase,
            'cour' => $cour,
            'prof' => $prof,
            'etudiant_edit' => $etudiant_edit,
        ]);
    }

    
    public function update(CreatStoreEtudiontRequest $request, $id)
    {
        $etudiant_up = Etudiant::find($id);

        $etudiant_up->nom = $request->nom;
        $etudiant_up->prenom = $request->prenom;
        $etudiant_up->lage = $request->lage;
        $etudiant_up->adresse = $request->adresse;
        $etudiant_up->telephone = $request->telephone;
        $etudiant_up->prof_id = $request->prof_id;
        $etudiant_up->cour_id = $request->cour_id;
        $etudiant_up->classe_id = $request->classe_id;

        $etudiant_up->save();
        return redirect()->route('etudiant_index');
    }

    
    public function destroy($id)
    {
        Etudiant::find($id)->delete();
        return redirect()->route('etudiant_index');
    }
}
