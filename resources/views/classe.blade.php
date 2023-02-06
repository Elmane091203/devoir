@extends('layouts.app')
@section('content')
<div class="container bg-light p-3">
    <table class="table table-bordered bg-secondary text-light">
        <thead>
            <tr>
                <th>N°</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Matiere</th>
                <th>note1</th>
                <th>Examen</th>
                <th>Semestre</th>
            </tr>
        </thead>
        <tbody>
            @foreach($etudiants as $e)
            <tr>
                <td>{{$e['id']}}</td>
                <td>{{$e['nom']}}</td>
                <td>{{$e['prenom']}}</td>
                <td>{{$e.['matiere']}}</td>
                <td>{{$e['note1']}}</td>
                <td>{{$e['examen']}}</td>
                <td>{{$e['semestre']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection