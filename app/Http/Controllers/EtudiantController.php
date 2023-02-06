<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\Semestre;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('classe', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $semestre = Semestre::all();
        $matiere = Matiere::all();
        return view('create', ['semestre' => $semestre, 'matieres' => $matiere]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (isset($request)) {
            $input = $request->all();
            if ($input['nom'] == null || $input['prenom'] == null || $input['semestre'] == null || $input['matiere'] == null || $input['note1'] == null || $input['examen'] == null) {

                $etudiants = Etudiant::all();
                return view('classe', ['message' => "Erreur d'ajout", 'etudiants' => $etudiants]);
            }
            Etudiant::create($input);
            return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function redirect()
    {
        view('layouts.app');
        return redirect('/etudiants');
    }

    public function moyenne()
    {
        $etudiants = Etudiant::all();
        $moyenne = 0;
        if ($etudiants != null) {
            foreach ($etudiants as $e) {
                $moyenne += ($e['examen'] + $e['note1']) / 2;
            }
        }
        return view('moyenne', ['moyenne' => $moyenne]);
    }

    public function premier()
    {
        $etudiants = Etudiant::all();
        $e = $etudiants[0];
        if ($etudiants != null) {
            foreach ($etudiants as $et) {
                if (($e['note1'] + $e['moyenne']) / 2 < $et['note1'] + $et['moyenne'] / 2)
                    $e = $et;
            }
        }
        return view('premier', ['premier' => $e]);
    }
}
