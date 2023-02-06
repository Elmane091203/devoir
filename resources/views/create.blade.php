@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card col-md-8 offset-md-2">
        <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout d'un etudiant</div>
        <div class="card-body text-center">
            <form action="{{route('etudiants.store')}}" class="align-middle" method="post">
                @csrf
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Prenom</label>
                    <input name="prenom" type="text" class="form-control col-md-6">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Nom</label>
                    <input name="nom" type="text" class="form-control col-md-6">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h4 text-left pt-1">Semestre</label>
                    <select  class="form-control col-md-6" name="semestre" id="0">
                        <option default value="">Choisissez le semestre</option>
                        @foreach($semestre as $s)
                        <option value="@if($s['id']>1) $s['id']+'er' @else $s['id']+'eme' @endif">{{$s['nom']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h4 text-left pt-1">Matiere</label>
                    <select  class="form-control col-md-6" name="matiere" id="0">
                        <option default value="">Choisissez la matiere</option>
                        @foreach($matieres as $m)
                        <option value="{{$m['nom']}}">{{$m['nom']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Note1</label>
                    <input type="number" min="0" max="20" name="note1" class="form-control col-md-6">
                </div>
                <div class="row mt-3">
                    <label for="" class="col-md-4 h5 text-left pt-1">Examen</label>
                    <input type="number" min="0" max="20" name="examen" class="form-control col-md-6">
                </div>
                <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
            </form>
        </div>
    </div>
</div>
@endsection