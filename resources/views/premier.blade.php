@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card-header h4 text-light bg-success p-2 text-center">Le premier de le classe est {{$premier['Nom']." ".$premier['Prenom']." avec la moyenne de ".($premier['note1']+$premier['examen'])/2}} </div>
</div>
@endsection