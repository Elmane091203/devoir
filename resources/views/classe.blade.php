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
                <td>{{$e['Nom']}}</td>
                <td>{{$e['Prenom']}}</td>
                <td>
                    @foreach($matieres as $m)
                    @if($e['matiere_id']==$m['id'])
                    {{$m['nom']}}
                    @break
                    @endif
                    @endforeach
                </td>
                <td>{{$e['note1']}}</td>
                <td>{{$e['examen']}}</td>
                <td>{{$e['semestre_id'].($e['semestre_id']>1?'eme':'er')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection